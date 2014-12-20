from django.shortcuts import render, redirect

from .forms import SmsForm
from excel_response import ExcelResponse
from django.contrib.auth import authenticate, login
from django.contrib.auth import logout as auth_logout
from django.core.urlresolvers import reverse
from django.contrib import messages


def excelview(request):
    """Excel sheet generation"""
    user_smses = request.user.sms_set.all()
    user_record = [['From', 'To', 'Message']]
    for sms in user_smses:
        user_record.append(
            [sms.user.username, '+' + str(sms.to.country_code) + ' ' + str(sms.to.national_number), sms.sms_text])
    return ExcelResponse(user_record, 'my_data')


def sms_view(request):
    """Sends an sms to the given mobile number"""
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
    """ Signin's the user """
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
