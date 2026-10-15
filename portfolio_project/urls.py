from django.contrib import admin
from django.urls import path
from core.views import portfolio_view

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', portfolio_view, name='home'),
]
