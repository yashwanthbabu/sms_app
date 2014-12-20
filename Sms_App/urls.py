from django.conf.urls import patterns, include, url

from django.contrib import admin

from s_app.views import signin
admin.autodiscover()

urlpatterns = patterns('',
                       # Examples:
                       # url(r'^$', 'Sms_App.views.home', name='home'),
                       # url(r'^blog/', include('blog.urls')),

                       url(r'^admin/', include(admin.site.urls)),

                       url(r'^signin/', signin, name='signin'),
                       url(r'sms/', 's_app.views.sms_view', name="sms"),
                       url(r'excel/', 's_app.views.excelview', name="excel"),
                       )
