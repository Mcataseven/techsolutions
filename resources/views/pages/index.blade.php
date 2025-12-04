@extends('layouts.app')

@section('content')
<section class="relative min-h-screen flex items-center gradient-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in">
                <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6 px-4 py-1 rounded-full text-sm font-medium inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"/>
                    </svg>
                    Next-Gen Web Solutions
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
                    Scale Your Business with
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">
                            Modern Web Solutions
                        </span>
                </h1>
                <p class="text-xl text-slate-300 mb-8 leading-relaxed">
                    We develop high-performance, scalable web applications using Vue.js, Laravel, and Tailwind CSS. Delivering custom solutions tailored to your enterprise needs.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('projects') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-lg transition-colors duration-300 text-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        View Projects
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 border border-slate-600 hover:border-cyan-500 text-slate-300 hover:text-white font-semibold rounded-lg transition-colors duration-300 text-center">
                        Get In Touch
                    </a>
                </div>
            </div>

            <div class="animate-slide-in-up">
                <div class="card bg-slate-800 rounded-xl shadow-xl p-8 hover-lift">
                    <div class="bg-slate-900 rounded-lg p-4 mb-6 font-mono text-sm overflow-hidden">
                        <div class="flex items-center gap-2 mb-3">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            <span class="text-slate-500 text-xs ml-2">App.vue</span>
                        </div>
                        <div class="space-y-1 text-xs">
                            <p><span class="text-purple-400">&lt;template&gt;</span></p>
                            <p class="pl-4"><span class="text-cyan-400">&lt;div</span> <span class="text-teal-400">class</span>=<span class="text-orange-400">"app"</span><span class="text-cyan-400">&gt;</span></p>
                            <p class="pl-8"><span class="text-cyan-400">&lt;Header</span> <span class="text-cyan-400">/&gt;</span></p>
                            <p class="pl-8"><span class="text-cyan-400">&lt;router-view</span> <span class="text-cyan-400">/&gt;</span></p>
                            <p class="pl-4"><span class="text-cyan-400">&lt;/div&gt;</span></p>
                            <p><span class="text-purple-400">&lt;/template&gt;</span></p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-white mb-6">Technology Stack</h3>

                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 text-sm justify-center py-2 px-3 rounded-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Vue.js
                        </div>
                        <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 text-sm justify-center py-2 px-3 rounded-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Laravel
                        </div>
                        <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 text-sm justify-center py-2 px-3 rounded-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Tailwind
                        </div>
                        <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 text-sm justify-center py-2 px-3 rounded-lg flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Node.js
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-6 border-t border-slate-700">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-cyan-400">50+</div>
                            <div class="text-sm text-slate-400">Completed Projects</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-teal-400">99%</div>
                            <div class="text-sm text-slate-400">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#services" class="text-slate-400 hover:text-cyan-400 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </a>
    </div>
</section>
<section id="services" class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Our Services
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What We Offer</h2>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                We contribute to your business's digital transformation using modern technologies
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card p-6 bg-slate-900 rounded-xl hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Web Application Development</h3>
                <p class="text-slate-400 mb-4">Modern, scalable web applications with Vue.js and Laravel</p>
                <ul class="text-sm text-slate-500 space-y-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Responsive design
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        API integration
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Performance optimization
                    </li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 rounded-xl hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">High-Performance SPAs</h3>
                <p class="text-slate-400 mb-4">Fast and fluid user experience with Single Page Applications</p>
                <ul class="text-sm text-slate-500 space-y-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Lazy loading
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        State management
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        SEO optimization
                    </li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 rounded-xl hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">UI/UX Design</h3>
                <p class="text-slate-400 mb-4">User-centered, modern and accessible interface designs</p>
                <ul class="text-sm text-slate-500 space-y-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Prototyping
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        User testing
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Accessibility
                    </li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 rounded-xl hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Security & DevOps</h3>
                <p class="text-slate-400 mb-4">Secure and continuous integration with application lifecycle management</p>
                <ul class="text-sm text-slate-500 space-y-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        SSL certificates
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        CI/CD pipeline
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Monitoring
                    </li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 rounded-xl hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Mobile Applications</h3>
                <p class="text-slate-400 mb-4">Reach wider audiences with cross-platform mobile applications</p>
                <ul class="text-sm text-slate-500 space-y-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        React Native
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Flutter
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        PWA support
                    </li>
                </ul>
            </div>

            <div class="card p-6 bg-slate-900 rounded-xl hover-lift group">
                <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Analytics & Reporting</h3>
                <p class="text-slate-400 mb-4">Comprehensive analytical solutions for data-driven decisions</p>
                <ul class="text-sm text-slate-500 space-y-2">
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Dashboard design
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Data visualization
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        Real-time reports
                    </li>
                </ul>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-lg transition-colors duration-300">
                View All Services
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<section id="projects" class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Portfolio
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Our Projects</h2>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                Examples from our successful projects and the results we achieved
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card overflow-hidden hover-lift group bg-slate-800 rounded-xl">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop"
                            alt="E-Commerce Platform"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs backdrop-blur-sm px-2 py-1 rounded">Vue.js</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs backdrop-blur-sm px-2 py-1 rounded">Laravel</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">E-Commerce Platform</h3>
                    <p class="text-slate-400 mb-4">Modern e-commerce solution developed with Vue.js and Laravel</p>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-cyan-400">-38%</span>
                            <span class="text-sm text-slate-500 ml-2">LCP Improvement</span>
                        </div>
                    </div>
                    <a href="{{ route('projects') }}" class="text-cyan-400 hover:text-cyan-300 font-medium transition-colors duration-300 inline-flex items-center gap-1">
                        Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card overflow-hidden hover-lift group bg-slate-800 rounded-xl">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop"
                            alt="Analytics Dashboard"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs backdrop-blur-sm px-2 py-1 rounded">React</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs backdrop-blur-sm px-2 py-1 rounded">D3.js</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Analytics Dashboard</h3>
                    <p class="text-slate-400 mb-4">Real-time data visualization and reporting system</p>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-teal-400">+250%</span>
                            <span class="text-sm text-slate-500 ml-2">User Engagement</span>
                        </div>
                    </div>
                    <a href="{{ route('projects') }}" class="text-teal-400 hover:text-teal-300 font-medium transition-colors duration-300 inline-flex items-center gap-1">
                        Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="card overflow-hidden hover-lift group bg-slate-800 rounded-xl">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop"
                            alt="Mobile Application"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs backdrop-blur-sm px-2 py-1 rounded">React Native</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs backdrop-blur-sm px-2 py-1 rounded">Firebase</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-2">Mobile Application</h3>
                    <p class="text-slate-400 mb-4">Cross-platform mobile application development</p>
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <span class="text-2xl font-bold text-cyan-400">4.8★</span>
                            <span class="text-sm text-slate-500 ml-2">App Store Rating</span>
                        </div>
                    </div>
                    <a href="{{ route('projects') }}" class="text-cyan-400 hover:text-cyan-300 font-medium transition-colors duration-300 inline-flex items-center gap-1">
                        Details
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('projects') }}" class="inline-flex items-center justify-center px-6 py-3 border border-slate-600 hover:border-cyan-500 text-slate-300 hover:text-white font-semibold rounded-lg transition-colors duration-300">
                View All Projects
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<section class="py-16 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-cyan-400 mb-2">50+</div>
                <div class="text-sm text-slate-400">Completed Projects</div>
            </div>

            <div class="text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-teal-400 mb-2">25+</div>
                <div class="text-sm text-slate-400">Happy Clients</div>
            </div>

            <div class="text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-cyan-400 mb-2">5+</div>
                <div class="text-sm text-slate-400">Years Experience</div>
            </div>

            <div class="text-center group">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <div class="text-4xl font-bold text-teal-400 mb-2">99%</div>
                <div class="text-sm text-slate-400">Success Rate</div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-cyan-500 rounded-full filter blur-[128px]"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-teal-500 rounded-full filter blur-[128px]"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6 inline-flex px-4 py-1 rounded-full text-sm font-medium">
            Get Started
        </div>
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">
            Let's Bring Your Project to Life
        </h2>
        <p class="text-xl text-slate-400 mb-8 max-w-2xl mx-auto">
            Start your business's digital transformation with modern technologies. Contact us now for a free consultation.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-lg transition-colors duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Free Consultation
            </a>
            <a href="{{ route('projects') }}" class="inline-flex items-center justify-center px-6 py-3 border border-slate-600 hover:border-cyan-500 text-slate-300 hover:text-white font-semibold rounded-lg transition-colors duration-300">
                View Portfolio
            </a>
        </div>
    </div>
</section>
@endsection
