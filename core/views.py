from django.shortcuts import render, redirect
from django.contrib import messages
from .forms import ContactForm


def portfolio_view(request):
    profile = {
        'name': 'Mijanur Rahman',
        'role': 'Mobile & Flutter Application Engineer',
        'tagline': 'Crafting performant cross-platform mobile experiences with pixel-perfect UI, robust state management, and clean architecture.',
        'bio': 'Experienced Flutter & Mobile Application Developer specialized in building scalable, production-ready apps for iOS and Android. Passionate about Clean Architecture, reactive state management (Bloc, Riverpod, Provider), offline-first syncing, and smooth micro-interactions.',
        'location': 'Dhaka, Bangladesh',
        'status': 'Available for freelance & full-time roles',
        'github': 'https://github.com/Mijan-0707',
        'email': 'mijan0707@example.com',
        'years_experience': '3+',
        'apps_shipped': '15+',
        'store_rating': '4.9★',
    }

    skills = [
        {
            'category': 'Mobile & Cross-Platform',
            'description': 'Core technologies powering scalable Android and iOS applications.',
            'items': [
                {'name': 'Flutter', 'level': 'Expert', 'highlight': True},
                {'name': 'Dart', 'level': 'Expert', 'highlight': True},
                {'name': 'Android SDK / Kotlin', 'level': 'Proficient', 'highlight': False},
                {'name': 'iOS / Swift Interop', 'level': 'Familiar', 'highlight': False},
                {'name': 'Clean Architecture', 'level': 'Advanced', 'highlight': True},
            ],
        },
        {
            'category': 'State Management & Architecture',
            'description': 'Predictable, maintainable application state and reactive streams.',
            'items': [
                {'name': 'Bloc / Cubit', 'level': 'Expert', 'highlight': True},
                {'name': 'Riverpod', 'level': 'Advanced', 'highlight': True},
                {'name': 'Provider', 'level': 'Advanced', 'highlight': False},
                {'name': 'Dependency Injection (GetIt/Injectable)', 'level': 'Advanced', 'highlight': False},
                {'name': 'Repository Pattern', 'level': 'Expert', 'highlight': False},
            ],
        },
        {
            'category': 'Backend & Cloud Services',
            'description': 'Reliable real-time backends, REST APIs, and database sync.',
            'items': [
                {'name': 'Firebase / Firestore', 'level': 'Expert', 'highlight': True},
                {'name': 'Django / Python API', 'level': 'Advanced', 'highlight': True},
                {'name': 'REST APIs & GraphQL', 'level': 'Advanced', 'highlight': True},
                {'name': 'SQLite / PostgreSQL / Hive', 'level': 'Expert', 'highlight': False},
                {'name': 'WebSockets & Push Notifications', 'level': 'Advanced', 'highlight': False},
            ],
        },
        {
            'category': 'DevOps & App Lifecycle',
            'description': 'Automated pipelines, store deployments, and crash monitoring.',
            'items': [
                {'name': 'Google Play Console', 'level': 'Experienced', 'highlight': False},
                {'name': 'Apple App Store Connect', 'level': 'Experienced', 'highlight': False},
                {'name': 'CI/CD (GitHub Actions / Fastlane)', 'level': 'Proficient', 'highlight': False},
                {'name': 'Crashlytics & Performance', 'level': 'Advanced', 'highlight': False},
                {'name': 'Git & Agile Workflows', 'level': 'Expert', 'highlight': False},
            ],
        },
    ]

    projects = [
        {
            'title': 'PulseFlow - Fitness & Habit Tracker',
            'tagline': 'Real-time habit synchronization with interactive health charts',
            'description': 'A cross-platform mobile fitness app featuring offline-first local storage, background sync, dynamic charts, and push notification reminders.',
            'platform': 'iOS & Android',
            'tech': ['Flutter', 'Bloc', 'Isar DB', 'Firebase Auth', 'Custom Painter'],
            'metrics': '10k+ Downloads • 4.8 Rating',
            'github': 'https://github.com/Mijan-0707',
            'featured': True,
        },
        {
            'title': 'SwiftCart - Multi-Vendor Marketplace',
            'tagline': 'High-performance e-commerce with real-time order tracking',
            'description': 'Full-featured shopping application integrated with payment gateways, live courier tracking on maps, and optimized image caching.',
            'platform': 'Android & Web',
            'tech': ['Flutter', 'Riverpod', 'Django REST Framework', 'Google Maps SDK', 'Stripe'],
            'metrics': 'Sub-second search latency • 99.9% crash-free sessions',
            'github': 'https://github.com/Mijan-0707',
            'featured': True,
        },
        {
            'title': 'NovaPay - FinTech Digital Wallet',
            'tagline': 'Biometric-secured peer-to-peer payments and QR scanner',
            'description': 'Enterprise-grade financial wallet with biometric authentication, dynamic QR code generation, end-to-end payload encryption, and real-time transaction ledger.',
            'platform': 'Android & iOS',
            'tech': ['Flutter', 'Clean Architecture', 'Local Auth', 'Crypto', 'WebSockets'],
            'metrics': 'Bank-grade security • AES-256 GCM',
            'github': 'https://github.com/Mijan-0707',
            'featured': True,
        },
        {
            'title': 'ChitChat Live - Realtime Messenger',
            'tagline': 'Low-latency end-to-end encrypted messaging app',
            'description': 'Modern chat experience featuring media sharing, audio voice notes, typing indicators, read receipts, and local media caching.',
            'platform': 'Android & iOS',
            'tech': ['Flutter', 'Firebase Realtime DB', 'Cloud Storage', 'Hive'],
            'metrics': '<50ms message latency',
            'github': 'https://github.com/Mijan-0707',
            'featured': False,
        },
        {
            'title': 'DocuCare - Telemedicine & Booking',
            'tagline': 'Doctor appointments and WebRTC video consultations',
            'description': 'Telehealth platform connecting patients with certified specialists. Features appointment scheduling, prescriptions PDF generation, and in-app video calls.',
            'platform': 'Android & iOS',
            'tech': ['Flutter', 'Agora RTC', 'Provider', 'PDF Engine'],
            'metrics': 'Integrated with 20+ clinical specialties',
            'github': 'https://github.com/Mijan-0707',
            'featured': False,
        },
        {
            'title': 'DevPulse - GitHub Trending Explorer',
            'tagline': 'Developer dashboard tracking open-source repositories',
            'description': 'Open source mobile tool showcasing trending repositories across languages, syntax-highlighted code viewer, and offline bookmarking.',
            'platform': 'Flutter Multiplatform',
            'tech': ['Flutter', 'GraphQL', 'Riverpod', 'SharedPrefs'],
            'metrics': 'Open-source on GitHub',
            'github': 'https://github.com/Mijan-0707',
            'featured': False,
        },
    ]

    experiences = [
        {
            'period': '2023 — Present',
            'role': 'Senior Flutter Engineer',
            'company': 'Independent / Tech Studio',
            'description': 'Architecting and delivering production Flutter applications for global clients. Leading architecture migrations from setState to Bloc/Riverpod, reducing bug rates and app bundle sizes by over 30%.',
        },
        {
            'period': '2022 — 2023',
            'role': 'Mobile Application Developer',
            'company': 'Software Solutions Co.',
            'description': 'Developed high-engagement consumer apps, integrating Firebase backends, payment gateways, and custom animation packages. Mentored junior developers in Flutter standards and Clean Code.',
        },
        {
            'period': '2021 — 2022',
            'role': 'Junior Software Engineer',
            'company': 'Digital Innovations',
            'description': 'Built core UI modules, implemented RESTful API integrations, resolved UI responsiveness bottlenecks across various Android and iOS screen dimensions.',
        },
    ]

    if request.method == 'POST':
        form = ContactForm(request.POST)
        if form.is_valid():
            form.save()
            messages.success(request, 'Thank you! Your message has been received. I will get back to you shortly.')
            return redirect('home')
    else:
        form = ContactForm()

    context = {
        'profile': profile,
        'skills': skills,
        'projects': projects,
        'experiences': experiences,
        'form': form,
    }
    return render(request, 'portfolio.html', context)
