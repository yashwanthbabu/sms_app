from django.db import models
from django.contrib.auth.models import User

from phonenumber_field.modelfields import PhoneNumberField


class Sms(models.Model):
    user = models.ForeignKey(User)
    to = PhoneNumberField(default='+91')
    sms_text = models.CharField(max_length=700)
    status = models.BooleanField()
    sms_sent_time = models.DateTimeField(auto_now=True)

    def __unicode__(self):
        return str(self.user) + '-' + str(self.to) + '-' + str(self.status)
