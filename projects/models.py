from django.db import models

# Create your models here.
class Project(models.Model):
    name = models.CharField(max_length=200)
    git_link = models.CharField(max_length=500)
    description = models.TextField()