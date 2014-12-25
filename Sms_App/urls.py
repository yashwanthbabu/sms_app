from django.conf.urls import patterns, include, url

from django.contrib import admin

from s_app.views import BarView

admin.autodiscover()

urlpatterns = patterns('',
                       # Examples:
                       # url(r'^$', 'Sms_App.views.home', name='home'),
                       # url(r'^blog/', include('blog.urls')),

                       url(r'^admin/', include(admin.site.urls)),

                       url(r'^signin/', 's_app.views.signin', name='signin'),
                       url(r'sms/', 's_app.views.sms_view', name="sms"),
                       url(r'excel/', 's_app.views.excelview', name="excel"),
                       url(r'get_chart', BarView.as_view(), name='bar'),
                       url(r'chart/', 's_app.views.chart', name="chart"),
                       url(r"^logout/", 's_app.views.logout', name='logout'),
                       url(r'dashboard/', 's_app.views.dashboard', name='dashboard'),
                       url('', include('django.contrib.auth.urls', namespace='auth')),
                       )
