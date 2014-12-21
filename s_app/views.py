from django.shortcuts import render, redirect

from .forms import SmsForm
from excel_response import ExcelResponse
from highcharts.views import HighChartsBarView

from django.contrib.auth import authenticate, login
from django.contrib.auth import logout as auth_logout
from django.core.urlresolvers import reverse
from django.contrib import messages
from django.contrib.auth.decorators import login_required

import datetime


def excelview(request):
    """Generates ExcelSheet and downloads the ExcelSheet"""
    user_smses = request.user.sms_set.all()
    user_record = [['From', 'To', 'Message', 'Status']]
    for sms in user_smses:
        user_record.append(
            [sms.user.username, '+' + str(sms.to.country_code) + ' ' + str(sms.to.national_number), sms.sms_text, sms.status])
    return ExcelResponse(user_record, 'My_Sms_Sheet')


@login_required
def sms_view(request):
    """sends the sms to the given mobile number"""
    if request.method == "POST":
        form = SmsForm(request.POST)
        if form.is_valid():
            user = form.save(commit=False)
            user.user = request.user
            user.status = True
            user.save()
            messages.add_message(
                request, messages.INFO, 'Your message has been sent')
            return redirect('sms')
    else:
        form = SmsForm()
    return render(request, 'sms.html', {'form': form})


def signin(request):
    """ signin's the user """
    if request.user.is_authenticated():
        return redirect('sms')
    if request.method == 'POST':
        username = request.POST.get('username')
        password = request.POST.get('password')

        user = authenticate(username=username, password=password)
        if user is not None:
            if user.is_active:
                login(request, user)
                return redirect('sms')
            else:
                messages.add_message(
                    request, messages.INFO, 'Your account is invalid')
                return render(request, 'Avant/HTML/extras-login.htm')
        else:
            messages.add_message(
                request, messages.INFO, 'Invalid user credentials')
            return render(request, 'Avant/HTML/extras-login.htm')
    else:
        return render(request, 'Avant/HTML/extras-login.htm')


def logout(request):
    """Logs out user"""
    auth_logout(request)
    messages.success(request, "You Have Successfully Logged Out")
    return redirect(reverse("signin"), args=[])


@login_required
def chart(request):
    return render(request,
                  'Avant/HTML/charts-flot.htm',
                  {'grid_data': request.user.sms_set.all()})


class BarView(HighChartsBarView):
    """Functionality to filter by month wise and 
       day wise in chart"""

    @property
    def title(self):
        return 'SMS stats on %s' % datetime.date.today()

    @property
    def y_axis_title(self):
        return 'SMS Count'

    @property
    def series(self):

        smses = self.request.user.sms_set.all()
        date_sent = [sms.sms_sent_time for sms in smses]
        get_unique_date = set([u.date() for u in date_sent])

        if self.request.GET.get('filter') == 'month':
            get_unique_date = set(
                [datetime.datetime(u.year, u.month, 1) for u in date_sent])

        result = []
        for date in get_unique_date:
            if self.request.GET.get('filter') == 'month':
                result.append({'name': str(date.year) + '-' + str(date.month),
                               'data': [self.request.user.sms_set.filter(
                                   sms_sent_time__year=date.year,
                                   sms_sent_time__month=date.month).count()]})
            else:
                result.append({'name': date,
                               'data': [self.request.user.sms_set.filter(
                                   sms_sent_time__year=date.year,
                                   sms_sent_time__month=date.month,
                                   sms_sent_time__day=date.day).count()]})
        return result
