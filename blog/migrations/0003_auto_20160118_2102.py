# -*- coding: utf-8 -*-
# Generated by Django 1.9.1 on 2016-01-18 21:02
from __future__ import unicode_literals

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('blog', '0002_delete_project'),
    ]

    operations = [
        migrations.RenameField(
            model_name='post',
            old_name='heading',
            new_name='title',
        ),
    ]
