from django.forms import ModelForm
from django.contrib.auth.models import User

from .models import Sms


class SmsForm(ModelForm):

    class Meta:
        model = Sms
        exclude = ['user', 'status',]
