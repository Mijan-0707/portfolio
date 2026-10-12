<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Show the developer portfolio page.
     */
    public function index(): View
    {
        $profile = [
            'name' => 'Mijanur Rahman',
            'role' => 'Mobile & Flutter Application Engineer',
            'tagline' => 'Crafting performant cross-platform mobile experiences with pixel-perfect UI, robust state management, and clean architecture.',
            'bio' => 'Experienced Flutter & Mobile Application Developer specialized in building scalable, production-ready apps for iOS and Android. Passionate about Clean Architecture, reactive state management (Bloc, Riverpod, Provider), offline-first syncing, and smooth micro-interactions.',
            'location' => 'Dhaka, Bangladesh',
            'status' => 'Available for freelance & full-time roles',
            'github' => 'https://github.com/Mijan-0707',
            'email' => 'mijan0707@example.com',
            'years_experience' => '3+',
            'apps_shipped' => '15+',
            'store_rating' => '4.9★',
        ];

        $skills = [
            [
                'category' => 'Mobile & Cross-Platform',
                'description' => 'Core technologies powering scalable Android and iOS applications.',
                'items' => [
                    ['name' => 'Flutter', 'level' => 'Expert', 'highlight' => true],
                    ['name' => 'Dart', 'level' => 'Expert', 'highlight' => true],
                    ['name' => 'Android SDK / Kotlin', 'level' => 'Proficient', 'highlight' => false],
                    ['name' => 'iOS / Swift Interop', 'level' => 'Familiar', 'highlight' => false],
                    ['name' => 'Clean Architecture', 'level' => 'Advanced', 'highlight' => true],
                ],
            ],
            [
                'category' => 'State Management & Architecture',
                'description' => 'Predictable, maintainable application state and reactive streams.',
                'items' => [
                    ['name' => 'Bloc / Cubit', 'level' => 'Expert', 'highlight' => true],
                    ['name' => 'Riverpod', 'level' => 'Advanced', 'highlight' => true],
                    ['name' => 'Provider', 'level' => 'Advanced', 'highlight' => false],
                    ['name' => 'Dependency Injection (GetIt/Injectable)', 'level' => 'Advanced', 'highlight' => false],
                    ['name' => 'Repository Pattern', 'level' => 'Expert', 'highlight' => false],
                ],
            ],
            [
                'category' => 'Backend & Cloud Services',
                'description' => 'Reliable real-time backends, REST APIs, and database sync.',
                'items' => [
                    ['name' => 'Firebase / Firestore', 'level' => 'Expert', 'highlight' => true],
                    ['name' => 'REST APIs & GraphQL', 'level' => 'Advanced', 'highlight' => true],
                    ['name' => 'Laravel / PHP API', 'level' => 'Advanced', 'highlight' => true],
                    ['name' => 'SQLite / Hive / Isar', 'level' => 'Expert', 'highlight' => false],
                    ['name' => 'WebSockets & Push Notifications', 'level' => 'Advanced', 'highlight' => false],
                ],
            ],
            [
                'category' => 'DevOps & App Lifecycle',
                'description' => 'Automated pipelines, store deployments, and crash monitoring.',
                'items' => [
                    ['name' => 'Google Play Console', 'level' => 'Experienced', 'highlight' => false],
                    ['name' => 'Apple App Store Connect', 'level' => 'Experienced', 'highlight' => false],
                    ['name' => 'CI/CD (GitHub Actions / Fastlane)', 'level' => 'Proficient', 'highlight' => false],
                    ['name' => 'Crashlytics & Performance', 'level' => 'Advanced', 'highlight' => false],
                    ['name' => 'Git & Agile Workflows', 'level' => 'Expert', 'highlight' => false],
                ],
            ],
        ];

        $projects = [
            [
                'title' => 'PulseFlow - Fitness & Habit Tracker',
                'tagline' => 'Real-time habit synchronization with interactive health charts',
                'description' => 'A cross-platform mobile fitness app featuring offline-first local storage, background sync, dynamic charts, and push notification reminders.',
                'platform' => 'iOS & Android',
                'tech' => ['Flutter', 'Bloc', 'Isar DB', 'Firebase Auth', 'Custom Painter'],
                'metrics' => '10k+ Downloads • 4.8 Rating',
                'github' => 'https://github.com/Mijan-0707',
                'demo' => '#',
                'featured' => true,
            ],
            [
                'title' => 'SwiftCart - Multi-Vendor Marketplace',
                'tagline' => 'High-performance e-commerce with real-time order tracking',
                'description' => 'Full-featured shopping application integrated with Stripe and bKash payment gateways, live courier tracking on maps, and optimized image caching.',
                'platform' => 'Android & Web',
                'tech' => ['Flutter', 'Riverpod', 'Laravel REST API', 'Google Maps SDK', 'Stripe'],
                'metrics' => 'Sub-second search latency • 99.9% crash-free sessions',
                'github' => 'https://github.com/Mijan-0707',
                'demo' => '#',
                'featured' => true,
            ],
            [
                'title' => 'NovaPay - FinTech Digital Wallet',
                'tagline' => 'Biometric-secured peer-to-peer payments and QR scanner',
                'description' => 'Enterprise-grade financial wallet with biometric authentication, dynamic QR code generation, end-to-end payload encryption, and real-time transaction ledger.',
                'platform' => 'Android & iOS',
                'tech' => ['Flutter', 'Clean Architecture', 'Local Auth', 'Crypto', 'WebSockets'],
                'metrics' => 'Bank-grade security • AES-256 GCM',
                'github' => 'https://github.com/Mijan-0707',
                'demo' => '#',
                'featured' => true,
            ],
            [
                'title' => 'ChitChat Live - Realtime Messenger',
                'tagline' => 'Low-latency end-to-end encrypted messaging app',
                'description' => 'Modern chat experience featuring media sharing, audio voice notes, typing indicators, read receipts, and local media caching.',
                'platform' => 'Android & iOS',
                'tech' => ['Flutter', 'Firebase Realtime DB', 'Cloud Storage', 'Hive'],
                'metrics' => '<50ms message latency',
                'github' => 'https://github.com/Mijan-0707',
                'demo' => '#',
                'featured' => false,
            ],
            [
                'title' => 'DocuCare - Telemedicine & Booking',
                'tagline' => 'Doctor appointments and WebRTC video consultations',
                'description' => 'Telehealth platform connecting patients with certified specialists. Features appointment scheduling, prescriptions PDF generation, and in-app video calls.',
                'platform' => 'Android & iOS',
                'tech' => ['Flutter', 'Agora RTC', 'Provider', 'PDF Engine'],
                'metrics' => 'Integrated with 20+ clinical specialties',
                'github' => 'https://github.com/Mijan-0707',
                'demo' => '#',
                'featured' => false,
            ],
            [
                'title' => 'DevPulse - GitHub Trending Explorer',
                'tagline' => 'Developer dashboard tracking open-source repositories',
                'description' => 'Open source mobile tool showcasing trending repositories across languages, syntax-highlighted code viewer, and offline bookmarking.',
                'platform' => 'Flutter Multiplatform',
                'tech' => ['Flutter', 'GraphQL', 'Riverpod', 'SharedPrefs'],
                'metrics' => 'Open-source on GitHub',
                'github' => 'https://github.com/Mijan-0707',
                'demo' => '#',
                'featured' => false,
            ],
        ];

        $experiences = [
            [
                'period' => '2023 — Present',
                'role' => 'Senior Flutter Engineer',
                'company' => 'Independent / Tech Studio',
                'description' => 'Architecting and delivering production Flutter applications for global clients. Leading architecture migrations from setState to Bloc/Riverpod, reducing bug rates and app bundle sizes by over 30%.',
            ],
            [
                'period' => '2022 — 2023',
                'role' => 'Mobile Application Developer',
                'company' => 'Software Solutions Co.',
                'description' => 'Developed high-engagement consumer apps, integrating Firebase backends, payment gateways, and custom animation packages. Mentored junior developers in Flutter standards and Clean Code.',
            ],
            [
                'period' => '2021 — 2022',
                'role' => 'Junior Software Engineer',
                'company' => 'Digital Innovations',
                'description' => 'Built core UI modules, implemented RESTful API integrations, resolved UI responsiveness bottlenecks across various Android and iOS screen dimensions.',
            ],
        ];

        return view('portfolio', compact('profile', 'skills', 'projects', 'experiences'));
    }

    /**
     * Handle incoming contact inquiries.
     */
    public function contact(ContactRequest $request): RedirectResponse
    {
        ContactMessage::create($request->validated());

        return back()->with('success', 'Thank you! Your message has been received. I will get back to you shortly.');
    }
}
