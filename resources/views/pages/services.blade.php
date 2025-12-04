@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 services-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Our Services
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Solutions That Drive
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Results</span>
            </h1>
            <p class="text-xl text-slate-300 leading-relaxed">
                We offer comprehensive digital solutions tailored to your business needs. From web development to mobile apps, we've got you covered.
            </p>
        </div>
    </div>
</section>

<!-- Main Services Section -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Service 1: Web Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
            <div class="animate-fade-in">
                <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                    01
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Web Application Development
                </h2>
                <p class="text-slate-300 mb-6 leading-relaxed">
                    We build custom web applications that are fast, secure, and scalable. Using modern technologies like Vue.js, React, and Laravel, we create solutions that drive business growth.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Custom Web Applications</span>
                            <p class="text-slate-400 text-sm">Tailored solutions built from scratch for your specific needs</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">E-Commerce Platforms</span>
                            <p class="text-slate-400 text-sm">Full-featured online stores with payment integration</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">SaaS Applications</span>
                            <p class="text-slate-400 text-sm">Subscription-based software with multi-tenant architecture</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">API Development</span>
                            <p class="text-slate-400 text-sm">RESTful and GraphQL APIs for seamless integration</p>
                        </div>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center justify-center gap-2">
                    Get Started
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="animate-slide-in-up">
                <div class="card p-2 relative overflow-hidden rounded-xl bg-slate-900 shadow-xl group">
                    <div class="aspect-video relative overflow-hidden rounded-lg">
                        <img
                                src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=800&h=600&fit=crop"
                                alt="Web Development"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-gradient-to-tr from-slate-900/80 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="grid grid-cols-3 gap-4 bg-slate-900/80 backdrop-blur-md p-4 rounded-lg border border-slate-700">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-cyan-400">50+</div>
                                <div class="text-xs text-slate-400">Web Apps</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-teal-400">99%</div>
                                <div class="text-xs text-slate-400">Uptime</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-cyan-400">24/7</div>
                                <div class="text-xs text-slate-400">Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 2: Mobile Development -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
            <div class="order-2 lg:order-1 animate-slide-in-up">
                <div class="card p-2 relative overflow-hidden rounded-xl bg-slate-900 shadow-xl group">
                    <div class="aspect-video relative overflow-hidden rounded-lg">
                        <img
                                src="https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=800&h=600&fit=crop"
                                alt="Mobile Development"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-gradient-to-tl from-slate-900/80 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="grid grid-cols-3 gap-4 bg-slate-900/80 backdrop-blur-md p-4 rounded-lg border border-slate-700">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-teal-400">25+</div>
                                <div class="text-xs text-slate-400">Mobile Apps</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-cyan-400">4.8★</div>
                                <div class="text-xs text-slate-400">Avg Rating</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-teal-400">1M+</div>
                                <div class="text-xs text-slate-400">Downloads</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2 animate-fade-in">
                <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                    02
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    Mobile App Development
                </h2>
                <p class="text-slate-300 mb-6 leading-relaxed">
                    Reach your customers wherever they are with native and cross-platform mobile applications. We build apps that users love and businesses rely on.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">React Native Apps</span>
                            <p class="text-slate-400 text-sm">Cross-platform apps with native performance</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Flutter Development</span>
                            <p class="text-slate-400 text-sm">Beautiful UIs for iOS and Android from single codebase</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Progressive Web Apps</span>
                            <p class="text-slate-400 text-sm">Web apps that work like native mobile apps</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">App Store Optimization</span>
                            <p class="text-slate-400 text-sm">Get your app discovered by the right users</p>
                        </div>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center justify-center gap-2">
                    Get Started
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Service 3: UI/UX Design -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-24">
            <div class="animate-fade-in">
                <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                    03
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    UI/UX Design
                </h2>
                <p class="text-slate-300 mb-6 leading-relaxed">
                    Great design is invisible. We create intuitive interfaces that delight users and drive conversions. Every pixel is crafted with purpose.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">User Research</span>
                            <p class="text-slate-400 text-sm">Understanding your users' needs and behaviors</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Wireframing & Prototyping</span>
                            <p class="text-slate-400 text-sm">Interactive prototypes before development begins</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Visual Design</span>
                            <p class="text-slate-400 text-sm">Beautiful, on-brand interfaces that engage users</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Design Systems</span>
                            <p class="text-slate-400 text-sm">Scalable component libraries for consistency</p>
                        </div>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center justify-center gap-2">
                    Get Started
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="animate-slide-in-up">
                <div class="card p-2 relative overflow-hidden rounded-xl bg-slate-900 shadow-xl group">
                    <div class="aspect-video relative overflow-hidden rounded-lg">
                        <img
                                src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?w=800&h=600&fit=crop"
                                alt="UI/UX Design"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-gradient-to-tr from-slate-900/80 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="grid grid-cols-3 gap-4 bg-slate-900/80 backdrop-blur-md p-4 rounded-lg border border-slate-700">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-cyan-400">100+</div>
                                <div class="text-xs text-slate-400">Designs</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-teal-400">40%</div>
                                <div class="text-xs text-slate-400">Avg Conv. Lift</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-cyan-400">A11y</div>
                                <div class="text-xs text-slate-400">Compliant</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service 4: DevOps -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 animate-slide-in-up">
                <div class="card p-2 relative overflow-hidden rounded-xl bg-slate-900 shadow-xl group">
                    <div class="aspect-video relative overflow-hidden rounded-lg">
                        <img
                                src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=800&h=600&fit=crop"
                                alt="DevOps & Cloud"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                        >
                        <div class="absolute inset-0 bg-gradient-to-tl from-slate-900/80 to-transparent"></div>
                    </div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="grid grid-cols-3 gap-4 bg-slate-900/80 backdrop-blur-md p-4 rounded-lg border border-slate-700">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-teal-400">99.9%</div>
                                <div class="text-xs text-slate-400">Uptime SLA</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-cyan-400">10x</div>
                                <div class="text-xs text-slate-400">Faster Deploy</div>
                            </div>
                            <div class="text-center border-l border-slate-700">
                                <div class="text-2xl font-bold text-teal-400">0</div>
                                <div class="text-xs text-slate-400">Downtime</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2 animate-fade-in">
                <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                    04
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    DevOps & Cloud Solutions
                </h2>
                <p class="text-slate-300 mb-6 leading-relaxed">
                    Streamline your development workflow and ensure reliable deployments. We implement robust CI/CD pipelines and cloud infrastructure that scales with your business.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">CI/CD Pipelines</span>
                            <p class="text-slate-400 text-sm">Automated testing and deployment workflows</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Cloud Infrastructure</span>
                            <p class="text-slate-400 text-sm">AWS, Google Cloud, and Azure solutions</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Container Orchestration</span>
                            <p class="text-slate-400 text-sm">Docker and Kubernetes management</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="w-6 h-6 tech-gradient rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-white font-medium">Monitoring & Security</span>
                            <p class="text-slate-400 text-sm">24/7 monitoring and security best practices</p>
                        </div>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center justify-center gap-2">
                    Get Started
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Additional Services Grid -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                More Services
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Additional Expertise</h2>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                Beyond our core services, we offer specialized solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Additional Service 1 -->
            <div class="card p-6 hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="w-12 h-12 tech-gradient rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Analytics & BI</h3>
                <p class="text-slate-400 mb-4">Data visualization dashboards and business intelligence solutions for informed decision making.</p>
                <a href="{{ route('contact') }}" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Additional Service 2 -->
            <div class="card p-6 hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="w-12 h-12 tech-gradient rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">API Integration</h3>
                <p class="text-slate-400 mb-4">Connect your systems with third-party services and build powerful integrations.</p>
                <a href="{{ route('contact') }}" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Additional Service 3 -->
            <div class="card p-6 hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="w-12 h-12 tech-gradient rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Technical Consulting</h3>
                <p class="text-slate-400 mb-4">Expert guidance on technology choices, architecture decisions, and digital strategy. </p>
                <a href="{{ route('contact') }}" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Additional Service 4 -->
            <div class="card p-6 hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="w-12 h-12 tech-gradient rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Security Audits</h3>
                <p class="text-slate-400 mb-4">Comprehensive security assessments and vulnerability testing for your applications. </p>
                <a href="{{ route('contact') }}" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Additional Service 5 -->
            <div class="card p-6 hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="w-12 h-12 tech-gradient rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Legacy Modernization</h3>
                <p class="text-slate-400 mb-4">Transform outdated systems into modern, maintainable applications. </p>
                <a href="{{ route('contact') }}" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Additional Service 6 -->
            <div class="card p-6 hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="w-12 h-12 tech-gradient rounded-lg flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">24/7 Support</h3>
                <p class="text-slate-400 mb-4">Ongoing maintenance and support to keep your applications running smoothly.</p>
                <a href="{{ route('contact') }}" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                    Learn More
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Our Process
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">How We Work</h2>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                A proven process that delivers results
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center relative">
                <div class="w-16 h-16 tech-gradient rounded-2xl flex items-center justify-center mx-auto mb-6 relative z-10">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Discovery</h3>
                <p class="text-slate-400 text-sm">We learn about your business, goals, and requirements to create a tailored plan.</p>
                <!-- Connector Line -->
                <div class="hidden lg:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
            </div>

            <!-- Step 2 -->
            <div class="text-center relative">
                <div class="w-16 h-16 tech-gradient rounded-2xl flex items-center justify-center mx-auto mb-6 relative z-10">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Design</h3>
                <p class="text-slate-400 text-sm">Our designers create wireframes and prototypes that bring your vision to life.</p>
                <div class="hidden lg:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
            </div>

            <!-- Step 3 -->
            <div class="text-center relative">
                <div class="w-16 h-16 tech-gradient rounded-2xl flex items-center justify-center mx-auto mb-6 relative z-10">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Development</h3>
                <p class="text-slate-400 text-sm">Our engineers build your solution using best practices and modern technologies.</p>
                <div class="hidden lg:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-cyan-500 to-transparent"></div>
            </div>

            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 tech-gradient rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Launch & Support</h3>
                <p class="text-slate-400 text-sm">We deploy your project and provide ongoing support to ensure success.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-slate-900 relative overflow-hidden">
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-cyan-500 rounded-full filter blur-[128px]"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-teal-500 rounded-full filter blur-[128px]"></div>
    </div>

    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Ready to Start Your Project?
        </h2>
        <p class="text-xl text-slate-400 mb-8">
            Let's discuss how we can help transform your ideas into reality.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="btn-primary inline-flex items-center justify-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-lg transition-colors duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Get Free Consultation
            </a>
            <a href="{{ route('projects') }}" class="btn-secondary inline-flex items-center justify-center gap-2 px-6 py-3 border border-slate-600 hover:border-cyan-500 text-slate-300 hover:text-white font-semibold rounded-lg transition-colors duration-300">
                View Our Work
            </a>
        </div>
    </div>
</section>
@endsection
