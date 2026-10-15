from django.shortcuts import render, redirect
from django.contrib import messages
from .forms import ContactForm


def portfolio_view(request):
    profile = {
        'name': 'Mijanur Rahman',
        'role': 'Senior Flutter & Mobile Application Engineer',
        'tagline': 'Architecting robust, production-grade cross-platform apps with real-time RTC audio/video, FinTech payments, AI integrations, and high-performance offline architecture.',
        'bio': 'Specialized Flutter & Mobile Application Engineer with a track record of developing complex, high-traffic production apps. Extensive hands-on experience in FinTech e-wallets, live RTC conferencing (Agora, LiveKit, VideoSDK), AI chatbot interfaces, low-latency Wi-Fi/Bluetooth intercom audio streaming, and modular GetX / Provider state architecture.',
        'location': 'Dhaka, Bangladesh',
        'status': 'Available for contract & full-time mobile roles',
        'github': 'https://github.com/Mijan-0707',
        'email': 'mijan0707@example.com',
        'years_experience': '3+',
        'apps_shipped': '2',
        'focus_framework': 'Flutter & Dart',
    }

    skills = [
        {
            'category': 'Mobile & State Architecture',
            'description': 'Production architecture patterns powering scalable enterprise applications.',
            'items': [
                {'name': 'Flutter & Dart', 'level': 'Expert', 'highlight': True},
                {'name': 'GetX (Pattern & Modular CLI)', 'level': 'Expert', 'highlight': True},
                {'name': 'Provider & Riverpod', 'level': 'Advanced', 'highlight': True},
                {'name': 'Clean Architecture & Repositories', 'level': 'Advanced', 'highlight': True},
                {'name': 'Platform Channels (Native Android/iOS Interop)', 'level': 'Advanced', 'highlight': False},
            ],
        },
        {
            'category': 'Real-Time Audio, Video & RTC',
            'description': 'Real-time media streaming, video conferencing, and low-latency audio transmission.',
            'items': [
                {'name': 'Agora RTC & RTM SDK', 'level': 'Expert', 'highlight': True},
                {'name': 'LiveKit & VideoSDK RTC', 'level': 'Advanced', 'highlight': True},
                {'name': 'WebSockets & Socket.IO Client', 'level': 'Expert', 'highlight': True},
                {'name': 'Low-Latency PCM Audio & Native Players', 'level': 'Advanced', 'highlight': False},
                {'name': 'Wi-Fi / UDP & Bluetooth LE Intercom', 'level': 'Advanced', 'highlight': False},
            ],
        },
        {
            'category': 'Networking, Payments & AI',
            'description': 'Secure financial integrations, generative AI interfaces, and API consumption.',
            'items': [
                {'name': 'Dio, Retrofit & Pretty Dio Logger', 'level': 'Expert', 'highlight': True},
                {'name': 'Stripe Payments & Digital Wallets', 'level': 'Expert', 'highlight': True},
                {'name': 'Generative AI & GPT Markdown Streaming', 'level': 'Advanced', 'highlight': True},
                {'name': 'Flutter Secure Storage & Biometric Auth', 'level': 'Advanced', 'highlight': False},
                {'name': 'Django & REST APIs Backend Integration', 'level': 'Advanced', 'highlight': False},
            ],
        },
        {
            'category': 'Databases, Analytics & DevOps',
            'description': 'Offline-first database engines, push notifications, and release pipelines.',
            'items': [
                {'name': 'Firebase (Messaging, Crashlytics, Analytics, Remote Config)', 'level': 'Expert', 'highlight': True},
                {'name': 'Isar DB, SQLite & SharedPreferences', 'level': 'Expert', 'highlight': True},
                {'name': 'In-App Purchases & Subscriptions', 'level': 'Advanced', 'highlight': False},
                {'name': 'ScreenUtil Responsive Design & Custom Canvas', 'level': 'Expert', 'highlight': False},
                {'name': 'Google Play Console & App Store Deployments', 'level': 'Experienced', 'highlight': False},
            ],
        },
    ]

    projects = [
        {
            'title': 'GCPay — FinTech & Digital Wallet Ecosystem',
            'tagline': 'Enterprise-scale mobile wallet with crypto, KYC verification & global remittances',
            'description': 'A production financial mobile application built with modular GetX architecture. Features biometric security, Didit KYC verification, QR code payments, multi-currency transfers, Tahweel exchange, cryptocurrency modules, and real-time transaction notifications via Firebase.',
            'platform': 'Android & iOS',
            'tech': ['Flutter', 'GetX', 'Dio', 'Firebase Messaging', 'Local Auth (Biometric)', 'Flutter Secure Storage', 'ScreenUtil'],
            'metrics': '50+ Feature Modules • Enterprise FinTech',
            'github': 'https://github.com/gcpay/mobileapp',
            'featured': True,
        },
        {
            'title': 'R-Link Studio Mobile & Desktop',
            'tagline': 'High-performance real-time video conferencing, screen sharing & live room management',
            'description': 'Cross-platform virtual meeting application supporting mobile and desktop. Built with Agora RTC/RTM engines, LiveKit, Retrofit API layer, in-meeting live chat, reactions, active speaker detection, recording management, and synchronized scheduled rooms.',
            'platform': 'iOS, Android & Desktop (macOS/Windows)',
            'tech': ['Flutter', 'Agora RTC Engine', 'Agora RTM', 'LiveKit', 'Retrofit', 'Socket.IO', 'Provider', 'MediaKit'],
            'metrics': 'Ultra low-latency audio/video • HD Screen Sharing',
            'github': 'https://github.com/R-Link-LLC/r-link-studioa-mobile',
            'featured': True,
        },
        {
            'title': 'Inso AI — Intelligent Chat & Agent Companion',
            'tagline': 'Conversational AI app with markdown rendering, TTS voice & in-app purchases',
            'description': 'Mobile AI assistant featuring real-time stream responses with GPT markdown syntax rendering, Text-to-Speech (TTS) voice playback, AI agent models, custom chat history, In-App Purchases / Subscriptions, and pin/secure authentication.',
            'platform': 'iOS & Android',
            'tech': ['Flutter', 'GetX', 'GPT Markdown', 'In-App Purchase', 'Flutter TTS', 'Socket.IO', 'Keychain / Secure Auth'],
            'metrics': 'Streaming responses • Multi-agent models',
            'github': 'https://github.com/meTowhid/inso-ai',
            'featured': True,
        },
        {
            'title': 'Mobile Intercom — Local Network PTT Audio Streamer',
            'tagline': 'Real-time Push-to-Talk (PTT) audio communication via Wi-Fi UDP & Bluetooth',
            'description': 'Direct peer-to-peer walkie-talkie & intercom system for Android & iOS. Streams raw PCM audio packets over local UDP socket broadcasts and Bluetooth LE with native platform channels for hardware-accelerated playback without external internet dependencies.',
            'platform': 'Android & iOS',
            'tech': ['Flutter', 'UDP Broadcast', 'Flutter Blue Plus', 'Audio Recorder', 'MethodChannel (Native PCM)', 'Network Info'],
            'metrics': 'Zero-internet required • Low-latency PCM stream',
            'github': 'https://github.com/Mijan-0707',
            'featured': True,
        },
        {
            'title': 'Zoxxo — Multi-Service Media & Commerce Platform',
            'tagline': 'Comprehensive monetization, ad management & content delivery mobile application',
            'description': 'Feature-rich platform combining user preferences, file management, monetization subscriptions with Stripe, localized multi-language interfaces, fluid modal dialogs, and smooth Lottie micro-animations.',
            'platform': 'Android & iOS',
            'tech': ['Flutter', 'GetX', 'Flutter Stripe', 'Lottie', 'Easy Localization', 'Mix UI', 'File Picker & PDF'],
            'metrics': 'Stripe Checkout • Multi-language i18n',
            'github': 'https://github.com/meTowhid/zoxxo',
            'featured': False,
        },
        {
            'title': 'TutorTrack (Hisaber Khata) — Offline Batch & Accounts Manager',
            'tagline': 'Ultra-fast offline local accounting and student batch tracking with Isar DB',
            'description': 'Student batch organizer and accounting ledger app designed for educators and tutors. Features ultra-fast local database transactions with Isar DB, SMS notification integration, data export/backup, and payment status tracking.',
            'platform': 'Android & iOS',
            'tech': ['Flutter', 'Isar Database (NoSQL)', 'Flutter SMS', 'Path Provider', 'File Picker', 'Code Generation'],
            'metrics': 'Instant offline queries • Zero-latency DB',
            'github': 'https://github.com/Mijan-0707',
            'featured': False,
        },
        {
            'title': 'Community Microsite — Social Connection & Video Hub',
            'tagline': 'Community engagement app with video/audio media feeds, events & profiles',
            'description': 'Community interaction application with personalized user timelines, Chewie video & audio player integration, biometrics login, badge notifications, image cropping, and Dio REST API synchronization.',
            'platform': 'iOS & Android',
            'tech': ['Flutter', 'GetX', 'Video Player / Chewie', 'Dio', 'Local Auth', 'Timeline Tile', 'Image Cropper'],
            'metrics': 'Rich media feeds • Community micro-network',
            'github': 'https://github.com/iCircles-LLC/CommunityMicrosite',
            'featured': False,
        },
    ]

    experiences = [
        {
            'period': '2023 — Present',
            'role': 'Senior Mobile Application Engineer',
            'company': 'R-Link Studio & GCPay Ecosystem',
            'description': 'Leading development of mission-critical mobile applications across FinTech and Real-Time Communications. Architected Agora/LiveKit RTC audio-video pipelines, implemented biometric security layers, and scaled GetX modular architectures across 50+ enterprise modules.',
        },
        {
            'period': '2022 — 2023',
            'role': 'Flutter Application Developer',
            'company': 'Mobile Product Studios',
            'description': 'Engineered high-performance client applications including AI streaming assistants (Inso AI), digital marketplaces (Zoxxo), and local PTT intercom systems utilizing UDP/Bluetooth socket communication.',
        },
        {
            'period': '2021 — 2022',
            'role': 'Mobile Software Developer',
            'company': 'Independent & Open Source Projects',
            'description': 'Developed offline-first productivity applications using Isar NoSQL database (TutorTrack), interactive game physics engines, and custom Flutter UI components with Clean Code principles.',
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
