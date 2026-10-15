from django.test import TestCase
from django.urls import reverse
from core.models import ContactMessage


class PortfolioTests(TestCase):
    def test_portfolio_page_loads_successfully(self):
        response = self.client.get(reverse('home'))
        self.assertEqual(response.status_code, 200)
        self.assertContains(response, 'Mijanur Rahman')
        self.assertContains(response, 'Mobile &amp; Flutter Application Engineer')
        self.assertContains(response, 'PulseFlow - Fitness &amp; Habit Tracker')
        self.assertTemplateUsed(response, 'portfolio.html')

    def test_contact_form_submission_success(self):
        payload = {
            'name': 'Sarah Connor',
            'email': 'sarah@example.com',
            'subject': 'Flutter Architecture Inquiry',
            'message': 'Hello Mijanur, we have an iOS & Android app project in Flutter.',
        }
        response = self.client.post(reverse('home'), data=payload, follow=True)
        self.assertEqual(response.status_code, 200)
        self.assertTrue(ContactMessage.objects.filter(email='sarah@example.com').exists())
        self.assertContains(response, 'Thank you! Your message has been received.')

    def test_contact_form_submission_invalid(self):
        payload = {
            'name': '',
            'email': 'not-an-email',
            'subject': '',
            'message': 'short',
        }
        response = self.client.post(reverse('home'), data=payload)
        self.assertEqual(response.status_code, 200)
        self.assertFalse(ContactMessage.objects.filter(email='not-an-email').exists())
