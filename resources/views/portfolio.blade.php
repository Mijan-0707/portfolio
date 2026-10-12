<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $profile['name'] }} — {{ $profile['role'] }}</title>
    <meta name="description" content="{{ $profile['tagline'] }}">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700|jetbrains-mono:400,500" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0b0f17] text-slate-300 font-sans antialiased selection:bg-teal-500/20 selection:text-teal-300 min-h-screen">

    <!-- Subtle Ambient Glow -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[720px] h-[400px] bg-gradient-to-b from-teal-500/10 via-cyan-500/5 to-transparent blur-3xl opacity-70"></div>
        <div class="absolute top-[40%] -right-48 w-[400px] h-[400px] bg-indigo-500/5 blur-3xl rounded-full"></div>
    </div>

    <!-- Header / Navigation -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-[#0b0f17]/85 border-b border-slate-800/80 transition-colors">
        <div class="max-w-6xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#hero" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-teal-500 to-cyan-400 p-[1.5px] transition-transform group-hover:scale-105">
                    <div class="w-full h-full bg-[#0b0f17] rounded-[10px] flex items-center justify-center font-bold text-teal-400 text-sm tracking-wider">
                        MR
                    </div>
                </div>
                <div>
                    <span class="block font-semibold text-slate-100 text-sm tracking-tight group-hover:text-teal-400 transition-colors">{{ $profile['name'] }}</span>
                    <span class="block text-xs text-slate-500 font-mono">Flutter & Mobile Dev</span>
                </div>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm">
                <a href="#about" class="text-slate-400 hover:text-white transition-colors">About</a>
                <a href="#skills" class="text-slate-400 hover:text-white transition-colors">Skills</a>
                <a href="#projects" class="text-slate-400 hover:text-white transition-colors">Projects</a>
                <a href="#experience" class="text-slate-400 hover:text-white transition-colors">Experience</a>
                <a href="#contact" class="text-slate-400 hover:text-white transition-colors">Contact</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="#contact" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-xs font-semibold uppercase tracking-wider text-teal-300 bg-teal-500/10 hover:bg-teal-500/20 border border-teal-500/30 transition-all">
                    <span class="w-2 h-2 rounded-full bg-teal-400 animate-pulse"></span>
                    Hire Me
                </a>
            </div>
        </div>
    </header>

    <main class="relative z-10 max-w-6xl mx-auto px-6 divide-y divide-slate-800/60">

        <!-- Hero Section -->
        <section id="hero" class="pt-24 pb-20 md:pt-32 md:pb-28">
            <div class="flex flex-col items-start max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-900/90 border border-slate-800 text-xs text-slate-400 mb-8 font-mono">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                    <span>{{ $profile['status'] }}</span>
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold tracking-tight text-white mb-6 leading-[1.12]">
                    Building sleek, reactive <span class="bg-gradient-to-r from-teal-400 via-cyan-400 to-sky-400 bg-clip-text text-transparent">cross-platform apps</span> for iOS & Android.
                </h1>

                <p class="text-base sm:text-lg text-slate-400 leading-relaxed mb-10 max-w-2xl font-normal">
                    {{ $profile['tagline'] }}
                </p>

                <div class="flex flex-wrap items-center gap-4 mb-14">
                    <a href="#projects" class="px-6 py-3 rounded-lg bg-teal-500 hover:bg-teal-400 text-slate-950 font-semibold text-sm transition-all shadow-lg shadow-teal-500/10 hover:shadow-teal-500/20">
                        View Selected Projects
                    </a>
                    <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-lg bg-slate-900 hover:bg-slate-800 text-slate-200 border border-slate-800 font-medium text-sm transition-all inline-flex items-center gap-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                        GitHub Profile
                    </a>
                </div>

                <!-- Fast Metric Highlights -->
                <div class="grid grid-cols-3 gap-6 sm:gap-12 pt-8 border-t border-slate-800/80 w-full max-w-xl">
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-white tracking-tight font-mono">{{ $profile['years_experience'] }}</div>
                        <div class="text-xs text-slate-500 uppercase tracking-wider mt-1">Years Experience</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-white tracking-tight font-mono">{{ $profile['apps_shipped'] }}</div>
                        <div class="text-xs text-slate-500 uppercase tracking-wider mt-1">Apps Delivered</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-bold text-teal-400 tracking-tight font-mono">{{ $profile['store_rating'] }}</div>
                        <div class="text-xs text-slate-500 uppercase tracking-wider mt-1">Client Feedback</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20">
            <div class="grid md:grid-cols-12 gap-12 items-start">
                <div class="md:col-span-4">
                    <span class="text-xs font-mono uppercase tracking-widest text-teal-400">01 // Background</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2">Architecture first, performance driven.</h2>
                </div>
                <div class="md:col-span-8 space-y-5 text-slate-400 leading-relaxed">
                    <p>
                        {{ $profile['bio'] }}
                    </p>
                    <p>
                        I focus on crafting sustainable codebases that scale smoothly from initial MVP to hundreds of thousands of active users. My engineering workflow prioritizes testability, clean boundaries between domain and UI layers, and thoughtful offline synchronization for seamless mobile ergonomics.
                    </p>
                    <div class="pt-4 flex flex-wrap gap-3">
                        <span class="inline-flex items-center px-3 py-1 rounded-md text-xs font-mono bg-slate-900 border border-slate-800 text-slate-300">📍 {{ $profile['location'] }}</span>
                        <span class="inline-flex items-center px-3 py-1 rounded-md text-xs font-mono bg-slate-900 border border-slate-800 text-slate-300">⚡ Flutter & Dart 3+</span>
                        <span class="inline-flex items-center px-3 py-1 rounded-md text-xs font-mono bg-slate-900 border border-slate-800 text-slate-300">🛡️ Test-Driven Development</span>
                        <span class="inline-flex items-center px-3 py-1 rounded-md text-xs font-mono bg-slate-900 border border-slate-800 text-slate-300">🚀 Production App Stores</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-20">
            <div class="mb-14">
                <span class="text-xs font-mono uppercase tracking-widest text-teal-400">02 // Capabilities</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2">Core Technical Stack</h2>
                <p class="text-slate-400 text-sm mt-2 max-w-xl">Specialized tooling and engineering practices honed through production mobile delivery.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach($skills as $group)
                    <div class="p-6 rounded-2xl bg-slate-900/60 border border-slate-800/80 hover:border-slate-700/80 transition-colors">
                        <h3 class="text-lg font-semibold text-white mb-1">{{ $group['category'] }}</h3>
                        <p class="text-xs text-slate-400 mb-6">{{ $group['description'] }}</p>

                        <div class="space-y-3">
                            @foreach($group['items'] as $item)
                                <div class="flex items-center justify-between py-1.5 border-b border-slate-800/50 last:border-b-0">
                                    <span class="text-sm {{ $item['highlight'] ? 'text-teal-300 font-medium' : 'text-slate-300' }}">
                                        {{ $item['name'] }}
                                    </span>
                                    <span class="text-xs font-mono text-slate-500 bg-slate-950/60 px-2 py-0.5 rounded border border-slate-800">
                                        {{ $item['level'] }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-14 gap-4">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-teal-400">03 // Portfolio</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2">Featured Mobile Applications</h2>
                    <p class="text-slate-400 text-sm mt-2 max-w-xl">Curated collection of cross-platform apps built with Flutter, Dart, and robust backends.</p>
                </div>
                <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="text-xs font-mono text-teal-400 hover:text-teal-300 inline-flex items-center gap-1 group">
                    View full code archive <span class="group-hover:translate-x-1 transition-transform">→</span>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $project)
                    <div class="flex flex-col justify-between p-6 rounded-2xl bg-slate-900/50 border border-slate-800/80 hover:border-teal-500/40 transition-all hover:-translate-y-1 group">
                        <div>
                            <div class="flex items-center justify-between text-xs font-mono text-slate-500 mb-4">
                                <span class="text-teal-400/90 font-medium">{{ $project['platform'] }}</span>
                                @if($project['featured'])
                                    <span class="px-2 py-0.5 rounded bg-teal-500/10 border border-teal-500/30 text-teal-300 text-[10px] uppercase font-bold">Featured</span>
                                @endif
                            </div>

                            <h3 class="text-lg font-bold text-white group-hover:text-teal-300 transition-colors mb-2">
                                {{ $project['title'] }}
                            </h3>

                            <p class="text-xs font-medium text-slate-400 mb-3">
                                {{ $project['tagline'] }}
                            </p>

                            <p class="text-xs text-slate-400 leading-relaxed mb-6">
                                {{ $project['description'] }}
                            </p>
                        </div>

                        <div>
                            <div class="flex flex-wrap gap-1.5 mb-6">
                                @foreach($project['tech'] as $badge)
                                    <span class="px-2 py-1 rounded text-[11px] font-mono bg-slate-950/80 border border-slate-800/90 text-slate-300">
                                        {{ $badge }}
                                    </span>
                                @endforeach
                            </div>

                            <div class="pt-4 border-t border-slate-800/70 flex items-center justify-between text-xs">
                                <span class="text-slate-500 font-mono text-[11px]">{{ $project['metrics'] }}</span>
                                <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-teal-400 font-mono font-medium transition-colors">
                                    Code ↗
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="py-20">
            <div class="mb-14">
                <span class="text-xs font-mono uppercase tracking-widest text-teal-400">04 // Journey</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2">Work Experience & Timeline</h2>
                <p class="text-slate-400 text-sm mt-2 max-w-xl">Proven track record building mobile products and collaborating with product teams.</p>
            </div>

            <div class="relative pl-6 sm:pl-8 border-l border-slate-800 space-y-10">
                @foreach($experiences as $exp)
                    <div class="relative group">
                        <!-- Timeline bullet -->
                        <div class="absolute -left-[31px] sm:-left-[39px] top-1.5 w-3 h-3 rounded-full bg-slate-800 border-2 border-[#0b0f17] group-hover:bg-teal-400 transition-colors"></div>

                        <span class="text-xs font-mono text-teal-400 uppercase tracking-wider block mb-1">{{ $exp['period'] }}</span>
                        <h3 class="text-lg font-bold text-white tracking-tight">{{ $exp['role'] }}</h3>
                        <div class="text-sm text-slate-400 font-medium mb-3">{{ $exp['company'] }}</div>
                        <p class="text-sm text-slate-400 leading-relaxed max-w-2xl">
                            {{ $exp['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20">
            <div class="grid md:grid-cols-12 gap-12">
                <div class="md:col-span-5">
                    <span class="text-xs font-mono uppercase tracking-widest text-teal-400">05 // Inquiries</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-white mt-2">Let's build something exceptional together.</h2>
                    <p class="text-slate-400 text-sm mt-4 leading-relaxed">
                        Have an idea for a mobile app, need architectural consulting for Flutter, or looking to scale your engineering team? Send me a message and I'll reply promptly.
                    </p>

                    <div class="mt-8 space-y-3 font-mono text-xs">
                        <div class="flex items-center gap-3 text-slate-400">
                            <span class="text-slate-600">Email:</span>
                            <a href="mailto:{{ $profile['email'] }}" class="text-slate-200 hover:text-teal-400 transition-colors">{{ $profile['email'] }}</a>
                        </div>
                        <div class="flex items-center gap-3 text-slate-400">
                            <span class="text-slate-600">GitHub:</span>
                            <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="text-slate-200 hover:text-teal-400 transition-colors">{{ $profile['github'] }}</a>
                        </div>
                        <div class="flex items-center gap-3 text-slate-400">
                            <span class="text-slate-600">Location:</span>
                            <span class="text-slate-300">{{ $profile['location'] }}</span>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-7">
                    <div class="p-8 rounded-2xl bg-slate-900/60 border border-slate-800">
                        @if(session('success'))
                            <div class="mb-6 p-4 rounded-xl bg-teal-500/10 border border-teal-500/30 text-teal-300 text-sm flex items-center gap-3">
                                <svg class="w-5 h-5 flex-shrink-0 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <span>{{ session('success') }}</span>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
                            @csrf
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div>
                                    <label for="name" class="block text-xs font-mono uppercase tracking-wider text-slate-400 mb-2">Your Name *</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                        class="w-full px-4 py-2.5 rounded-lg bg-slate-950/80 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition-colors"
                                        placeholder="Jane Doe">
                                    @error('name')
                                        <p class="mt-1 text-xs text-rose-400">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-xs font-mono uppercase tracking-wider text-slate-400 mb-2">Email Address *</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                        class="w-full px-4 py-2.5 rounded-lg bg-slate-950/80 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition-colors"
                                        placeholder="jane@example.com">
                                    @error('email')
                                        <p class="mt-1 text-xs text-rose-400">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div>
                                <label for="subject" class="block text-xs font-mono uppercase tracking-wider text-slate-400 mb-2">Subject</label>
                                <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                                    class="w-full px-4 py-2.5 rounded-lg bg-slate-950/80 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition-colors"
                                    placeholder="Project collaboration / Mobile App Development">
                                @error('subject')
                                    <p class="mt-1 text-xs text-rose-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-xs font-mono uppercase tracking-wider text-slate-400 mb-2">Message *</label>
                                <textarea id="message" name="message" rows="4" required
                                    class="w-full px-4 py-2.5 rounded-lg bg-slate-950/80 border border-slate-800 text-white placeholder-slate-600 text-sm focus:outline-none focus:border-teal-500 focus:ring-1 focus:ring-teal-500 transition-colors"
                                    placeholder="Tell me about your app goals, timeline, and tech stack requirements...">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="mt-1 text-xs text-rose-400">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="submit" class="w-full sm:w-auto px-8 py-3 rounded-lg bg-teal-500 hover:bg-teal-400 text-slate-950 font-semibold text-sm transition-all shadow-md shadow-teal-500/10 hover:shadow-teal-500/20">
                                Send Inquiry
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800/80 bg-[#090c13] py-10 relative z-10 text-xs text-slate-500">
        <div class="max-w-6xl mx-auto px-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2">
                <span>© {{ date('Y') }} {{ $profile['name'] }}. Built with Laravel & Tailwind CSS.</span>
            </div>
            <div class="flex items-center gap-6 font-mono">
                <a href="#hero" class="hover:text-slate-300 transition-colors">Back to top ↑</a>
                <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="hover:text-slate-300 transition-colors">GitHub</a>
            </div>
        </div>
    </footer>

</body>
</html>
