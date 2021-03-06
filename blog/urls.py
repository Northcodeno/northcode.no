from django.conf.urls import url
from django.contrib.auth.views import login, logout

from . import views
from . import feeds

urlpatterns = [
    url(r'^$', views.Index.as_view(), name='index'),
    url(r'^post/new$', views.new_post, name='new_post'),
    url(r'^post/(?P<pk>\d+)/$', views.BlogPost.as_view(), name='blogpost'),
    url(r'^post/(?P<pk>\d+)/edit$', views.edit_post, name='edit_post'),
    url(r'^rss$', feeds.BlogFeed(), name='rssfeed'),
    url(r'^login', login, { 'template_name': 'blog/login.html', 'redirect_field_name':'next' } , name='login'),
    url(r'^logout', logout, { 'next_page': 'index' } , name='logout'),
]
