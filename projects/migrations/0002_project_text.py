# -*- coding: utf-8 -*-
# Generated by Django 1.9.1 on 2016-01-20 19:57
from __future__ import unicode_literals

from django.db import migrations
import django_markdown.models


class Migration(migrations.Migration):

    dependencies = [
        ('projects', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='project',
            name='text',
            field=django_markdown.models.MarkdownField(default='text'),
            preserve_default=False,
        ),
    ]
