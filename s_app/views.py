from django.shortcuts import render, redirect, render_to_response

from .forms import SmsForm
from excel_response import ExcelResponse
from highcharts.views import HighChartsBarView

from django.contrib.auth import authenticate, login
from django.contrib.auth.models import User
from django.contrib.auth import logout as auth_logout
from django.core.urlresolvers import reverse
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from reportlab.pdfgen import canvas
from django.http import HttpResponse
from django.template.loader import get_template
from django.template import Context

import datetime
import cStringIO as StringIO
import ho.pisa as pisa



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
    """sends the sms to the given mobile number.
        If the request is GET, it directly goes to else part
        If the request is POST, it executes the if part"""
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


def dashboard(request):
    users = User.objects.all().count()
    smses = request.user.sms_set.all()
    date_sent = [sms.sms_sent_time for sms in smses]
    get_unique_date = set([u.date() for u in date_sent])
    for date in get_unique_date:
        smses_in_year = request.user.sms_set.filter(sms_sent_time__year=date.year).count()
        smses_in_month = request.user.sms_set.filter(sms_sent_time__year=date.year,
                                                     sms_sent_time__month=date.month).count()
        smses_in_day = request.user.sms_set.filter(
                                   sms_sent_time__year=date.year,
                                   sms_sent_time__month=date.month,
                                   sms_sent_time__day=date.day).count()
        print smses_in_year

    all_data = request.user.sms_set.all()
    return render(request,'Avant/HTML/index.htm', {'smses_in_year': smses_in_year, 'smses_in_day': smses_in_day, 'smses_in_month': smses_in_month, 'all_data': all_data, 'users': users, 'grid_data': request.user.sms_set.all()[:5]})


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
                return redirect('dashboard')
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
    """shows SMS chart and
       Shows the grid table of the SMS history"""
    return render(request,
                  'Avant/HTML/charts-flot.html',
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
            print get_unique_date

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


def render_to_pdf(template_src, context_dict):
    template = get_template(template_src)
    context = Context(context_dict)
    html  = template.render(context)
    result = StringIO.StringIO()

    pdf = pisa.pisaDocument(StringIO.StringIO(html.encode("ISO-8859-1")), result)
    if not pdf.err:
        return HttpResponse(result.getvalue(), content_type='application/pdf')
    return HttpResponse('We had some errors<pre>%s</pre>' % escape(html))



def myview(request):
    #Retrieve data or whatever you need
    results = request.user.sms_set.all()
    return render_to_pdf(
            'pdf.html',
            {
                'pagesize':'A4',
                'mylist': results,
            }
        )
