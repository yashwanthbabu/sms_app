from django.shortcuts import render, redirect, HttpResponse

from .models import Sms
from .forms import SmsForm
from excel_response import ExcelResponse
from django.contrib.auth import authenticate, login
from django.contrib import messages



def excelview(request):
    data = [
        ['Column 1', 'Column 2'],
        ['fdf', 'tthj']
    ]
    return ExcelResponse(data, 'my_data')

def sms_view(request):
    if request.method == "POST":
        form = SmsForm(request.POST)
        if form.is_valid():
            to = form.cleaned_data.get('to')
            user = form.save(commit=False)
            user.user = request.user
            user.save()
            return HttpResponse("Success")
    else:
        form = SmsForm()
    return render(request, 'sms.html', {'form': form})


def signin(request):
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
