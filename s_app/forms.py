from django.forms import ModelForm
from django import forms

from .models import Sms


class SmsForm(ModelForm):
    sms_text = forms.CharField(widget=forms.Textarea)

    class Meta:
        model = Sms
        exclude = ['user', 'status', ]
