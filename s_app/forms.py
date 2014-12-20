from django.forms import ModelForm
from django.contrib.auth.models import User
from django import forms

from .models import Sms


class SmsForm(ModelForm):
    sms_text = forms.CharField(widget=forms.Textarea)

    class Meta:
        model = Sms
        exclude = ['user', 'status',]

