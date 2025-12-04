<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechSolutions - Professional Web Development & SaaS Solutions</title>
    <meta name="description" content="Professional web development and technology solutions. We build modern applications with Vue.js, Laravel, and Tailwind CSS for enterprise clients.">
    <meta name="keywords" content="web development, Vue.js, Laravel, Tailwind CSS, SaaS solutions, enterprise software, mobile apps, UI/UX design">

    <meta property="og:title" content="TechSolutions - Professional Web Development & SaaS Solutions">
    <meta property="og:description" content="Professional web development and technology solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://techsolutions.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Tailwind CSS CDN (Fallback for failed local build) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        cyan: {
                            400: '#22d3ee',
                            500: '#06b6d4',
                            600: '#0891b2',
                        },
                        teal: {
                            400: '#2dd4bf',
                            500: '#14b8a6',
                        },
                        slate: {
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Styles from app.css */
        :root {
            --primary: #06b6d4;
            --secondary: #14b8a6;
            --dark: #0f172a;
        }
        body { -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #475569; }
        
        .gradient-bg {
            background: radial-gradient(circle at top left, rgba(6, 182, 212, 0.1) 0%, transparent 40%),
            radial-gradient(circle at bottom right, rgba(20, 184, 166, 0.1) 0%, transparent 40%);
        }
        .tech-gradient {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0.1) 0%, rgba(20, 184, 166, 0.1) 100%);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .card {
            background-color: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 1rem;
            transition: all 0.3s ease;
        }
        .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -5px rgba(0, 0, 0, 0.3);
            border-color: rgba(6, 182, 212, 0.3);
        }
        
        /* Utility approximations */
        .btn-primary {
            background-color: #06b6d4; color: white; font-weight: 500; padding: 0.75rem 1.5rem;
            border-radius: 0.5rem; transition: all 0.3s; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(6, 182, 212, 0.25);
        }
        .btn-primary:hover { background-color: #0891b2; transform: scale(1.05); }
        
        .btn-secondary {
            border: 1px solid #475569; color: #cbd5e1; font-weight: 500; padding: 0.75rem 1.5rem;
            border-radius: 0.5rem; transition: all 0.3s; display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem;
        }
        .btn-secondary:hover { border-color: #06b6d4; color: white; }
        
        .form-input, .form-textarea, .form-select {
            width: 100%; background-color: rgba(30, 41, 59, 0.5); border: 1px solid #334155;
            border-radius: 0.5rem; padding: 0.75rem 1rem; color: white; transition: all 0.3s;
        }
        .form-input:focus, .form-textarea:focus, .form-select:focus {
            outline: none; border-color: #06b6d4; box-shadow: 0 0 0 1px #06b6d4;
        }
        .form-label { display: block; font-size: 0.875rem; font-weight: 500; color: #94a3b8; margin-bottom: 0.5rem; }
        
        .capsule {
            padding: 0.25rem 0.75rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 500;
            text-transform: uppercase; letter-spacing: 0.05em;
        }
        
        /* Animations */
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fade-in { animation: fadeIn 0.8s ease-out forwards; }
        .animate-slide-in-up { animation: fadeIn 1s ease-out forwards; }
    </style>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body class="font-inter bg-slate-900 text-white">

<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex-shrink-0">
                    <h1 class="text-xl font-bold text-white">Tech<span class="text-cyan-400">Solutions</span></h1>
                </a>
            </div>

            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ route('home') }}" class="text-cyan-400 px-3 py-2 text-sm font-medium transition-colors duration-300">Home</a>
                    <a href="{{ route('about') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-sm font-medium transition-colors duration-300">About</a>
                    <a href="{{ route('services') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-sm font-medium transition-colors duration-300">Services</a>
                    <a href="{{ route('projects') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-sm font-medium transition-colors duration-300">Projects</a>
                    <a href="{{ route('contact') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-sm font-medium transition-colors duration-300">Contact</a>
                </div>
            </div>

            <div class="hidden md:block">
                <a href="{{ route('contact') }}" class="bg-transparent border border-cyan-500 text-cyan-400 hover:bg-cyan-500 hover:text-white px-6 py-2 rounded-lg font-medium transition-all duration-300">
                    Get Quote
                </a>
            </div>

            <div class="md:hidden">
                <button type="button" id="mobile-menu-btn" class="text-slate-300 hover:text-white focus:outline-none focus:text-white">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="menu-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="close-icon">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <div class="flex flex-col space-y-2">
                <a href="{{ route('home') }}" class="text-cyan-400 px-3 py-2 text-base font-medium">Home</a>
                <a href="{{ route('about') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-base font-medium transition-colors duration-300">About</a>
                <a href="{{ route('services') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-base font-medium transition-colors duration-300">Services</a>
                <a href="{{ route('projects') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-base font-medium transition-colors duration-300">Projects</a>
                <a href="{{ route('contact') }}" class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-base font-medium transition-colors duration-300">Contact</a>
                <a href="{{ route('contact') }}" class="bg-cyan-500 text-white px-4 py-2 rounded-lg font-medium text-center mt-2">Get Quote</a>
            </div>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="bg-slate-800 border-t border-slate-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-white">
                    Tech<span class="text-cyan-400">Solutions</span>
                </a>
                <p class="text-slate-400 mt-4 text-sm">
                    Building modern web solutions that drive business growth.
                </p>
                <div class="flex space-x-4 mt-6">
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Navigation</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Home</a></li>
                    <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">About</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Services</a></li>
                    <li><a href="{{ route('projects') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Projects</a></li>
                    <li><a href="{{ route('contact') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Contact</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Services</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Web Development</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Mobile Apps</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">UI/UX Design</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">DevOps</a></li>
                    <li><a href="{{ route('services') }}" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Consulting</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact</h3>
                <ul class="space-y-3 text-slate-400">
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        info@techsolutions.com
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +1 (555) 123-4567
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-cyan-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        San Francisco, CA
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-700 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-400 text-sm">
                    &copy; 2024 TechSolutions. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm">
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Terms of Service</a>
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<button id="back-to-top" class="fixed bottom-8 right-8 w-12 h-12 bg-cyan-500 hover:bg-cyan-600 text-white rounded-full shadow-lg shadow-cyan-500/25 flex items-center justify-center transition-all duration-300 opacity-0 invisible z-50">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
    </svg>
</button>


</body>
</html>
