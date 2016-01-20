from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic.list import ListView
from .models import Post

# Create your views here.
class Index(ListView):
    template_name = 'blog/index.html'
    context_object_name = 'blog_posts'

    def get_queryset(self):
        return Post.objects.order_by('-posted')[:5]

def login(request):
    return render(request, 'blog/login.html', {})

def password_reset(request):
    raise NotImplementedError()
