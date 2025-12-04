@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 projects-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Our Portfolio
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Projects That Make an
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Impact</span>
            </h1>
            <p class="text-xl text-slate-300 leading-relaxed">
                Explore our collection of successful projects. Each one represents our commitment to quality, innovation, and client success.
            </p>
        </div>
    </div>
</section>

<!-- Filter Section -->
<section class="py-8 bg-slate-800 sticky top-16 z-40 border-b border-slate-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-3">
            <button class="filter-btn active px-4 py-2 rounded-full bg-cyan-500 text-white text-sm font-medium hover:bg-cyan-600 transition-colors" data-filter="all">All Projects</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-colors" data-filter="web">Web Apps</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-colors" data-filter="mobile">Mobile Apps</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-colors" data-filter="ecommerce">E-Commerce</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-colors" data-filter="saas">SaaS</button>
            <button class="filter-btn px-4 py-2 rounded-full bg-slate-700 text-slate-300 hover:bg-slate-600 text-sm font-medium transition-colors" data-filter="dashboard">Dashboards</button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Project 1: E-Commerce -->
            <div class="project-card card overflow-hidden hover-lift group bg-slate-800 rounded-xl shadow-xl" data-category="ecommerce">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1661956602116-aa6865609028?w=800&h=600&fit=crop"
                            alt="E-Commerce Project"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Vue.js</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Laravel</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs text-cyan-400 font-medium uppercase tracking-wider">E-Commerce</span>
                        <span class="text-xs text-slate-500">2024</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-cyan-400 transition-colors">ShopMax Pro</h3>
                    <p class="text-slate-400 text-sm mb-4">A full-featured e-commerce platform with real-time inventory, AI-powered recommendations, and seamless checkout experience.</p>

                    <div class="flex items-center justify-between mb-4 py-4 border-t border-b border-slate-700">
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">-38%</div>
                            <div class="text-xs text-slate-500">Load Time</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">+156%</div>
                            <div class="text-xs text-slate-500">Conversions</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">50K+</div>
                            <div class="text-xs text-slate-500">Users</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                            View Case Study
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 2: Dashboard -->
            <div class="project-card card overflow-hidden hover-lift group bg-slate-800 rounded-xl shadow-xl" data-category="dashboard">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800&h=600&fit=crop"
                            alt="Analytics Dashboard Project"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">React</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">D3.js</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs text-teal-400 font-medium uppercase tracking-wider">Dashboard</span>
                        <span class="text-xs text-slate-500">2024</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-teal-400 transition-colors">Analytics Hub</h3>
                    <p class="text-slate-400 text-sm mb-4">Real-time analytics dashboard with interactive charts, custom reports, and AI-driven insights for data-driven decisions.</p>

                    <div class="flex items-center justify-between mb-4 py-4 border-t border-b border-slate-700">
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">+250%</div>
                            <div class="text-xs text-slate-500">Engagement</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">Real-time</div>
                            <div class="text-xs text-slate-500">Updates</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">100+</div>
                            <div class="text-xs text-slate-500">Charts</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="#" class="text-teal-400 hover:text-teal-300 font-medium inline-flex items-center gap-1 transition-colors">
                            View Case Study
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 3: Mobile App -->
            <div class="project-card card overflow-hidden hover-lift group bg-slate-800 rounded-xl shadow-xl" data-category="mobile">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1576678927484-cc907957088c?w=800&h=600&fit=crop"
                            alt="Fitness Mobile App"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">React Native</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Firebase</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs text-cyan-400 font-medium uppercase tracking-wider">Mobile App</span>
                        <span class="text-xs text-slate-500">2024</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-cyan-400 transition-colors">FitTrack Pro</h3>
                    <p class="text-slate-400 text-sm mb-4">Cross-platform fitness app with workout tracking, nutrition plans, and social features for health enthusiasts.</p>

                    <div class="flex items-center justify-between mb-4 py-4 border-t border-b border-slate-700">
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">4.8★</div>
                            <div class="text-xs text-slate-500">App Store</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">500K+</div>
                            <div class="text-xs text-slate-500">Downloads</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">92%</div>
                            <div class="text-xs text-slate-500">Retention</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                            View Case Study
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 4: SaaS -->
            <div class="project-card card overflow-hidden hover-lift group bg-slate-800 rounded-xl shadow-xl" data-category="saas">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800&h=600&fit=crop"
                            alt="SaaS Platform"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Vue.js</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Node.js</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs text-teal-400 font-medium uppercase tracking-wider">SaaS Platform</span>
                        <span class="text-xs text-slate-500">2023</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-teal-400 transition-colors">CloudDesk</h3>
                    <p class="text-slate-400 text-sm mb-4">Enterprise project management SaaS with team collaboration, time tracking, and automated workflows.</p>

                    <div class="flex items-center justify-between mb-4 py-4 border-t border-b border-slate-700">
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">10K+</div>
                            <div class="text-xs text-slate-500">Companies</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">99.9%</div>
                            <div class="text-xs text-slate-500">Uptime</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">$2M+</div>
                            <div class="text-xs text-slate-500">ARR</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="#" class="text-teal-400 hover:text-teal-300 font-medium inline-flex items-center gap-1 transition-colors">
                            View Case Study
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 5: Web App -->
            <div class="project-card card overflow-hidden hover-lift group bg-slate-800 rounded-xl shadow-xl" data-category="web">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1585829365295-ab7cd400c167?w=800&h=600&fit=crop"
                            alt="News Web App"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Next.js</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Strapi</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs text-cyan-400 font-medium uppercase tracking-wider">Web App</span>
                        <span class="text-xs text-slate-500">2023</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-cyan-400 transition-colors">NewsFlow</h3>
                    <p class="text-slate-400 text-sm mb-4">Modern news portal with personalized feeds, real-time updates, and advanced content management system.</p>

                    <div class="flex items-center justify-between mb-4 py-4 border-t border-b border-slate-700">
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">2M+</div>
                            <div class="text-xs text-slate-500">Monthly Views</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">&lt; 1s</div>
                            <div class="text-xs text-slate-500">Load Time</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">95</div>
                            <div class="text-xs text-slate-500">Lighthouse</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 font-medium inline-flex items-center gap-1 transition-colors">
                            View Case Study
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project 6: Mobile App -->
            <div class="project-card card overflow-hidden hover-lift group bg-slate-800 rounded-xl shadow-xl" data-category="mobile">
                <div class="aspect-video relative overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=800&h=600&fit=crop"
                            alt="Ride Share App"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent opacity-90"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <div class="flex gap-2">
                            <span class="capsule bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Flutter</span>
                            <span class="capsule bg-teal-500/20 text-teal-400 border border-teal-500/30 text-xs px-2 py-1 rounded backdrop-blur-sm">Google Maps</span>
                        </div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs text-teal-400 font-medium uppercase tracking-wider">Mobile App</span>
                        <span class="text-xs text-slate-500">2023</span>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2 group-hover:text-teal-400 transition-colors">RideShare+</h3>
                    <p class="text-slate-400 text-sm mb-4">On-demand ride sharing app with real-time tracking, fare estimation, and driver-passenger matching.</p>

                    <div class="flex items-center justify-between mb-4 py-4 border-t border-b border-slate-700">
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">200K+</div>
                            <div class="text-xs text-slate-500">Users</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-cyan-400">1M+</div>
                            <div class="text-xs text-slate-500">Rides</div>
                        </div>
                        <div class="text-center">
                            <div class="text-xl font-bold text-teal-400">4.7★</div>
                            <div class="text-xs text-slate-500">Rating</div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <a href="#" class="text-teal-400 hover:text-teal-300 font-medium inline-flex items-center gap-1 transition-colors">
                            View Case Study
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button class="btn-secondary inline-flex items-center justify-center gap-2 px-6 py-3 border border-slate-600 hover:border-cyan-500 text-slate-300 hover:text-white font-semibold rounded-lg transition-colors duration-300">
                Load More Projects
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Testimonials
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What Our Clients Say</h2>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                Don't just take our word for it - hear from some of our satisfied clients
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="card p-6 hover-lift bg-slate-900 rounded-xl shadow-xl">
                <div class="flex items-center gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-slate-300 mb-6 italic">"TechSolutions transformed our e-commerce platform. Sales increased by 156% within the first quarter. Their attention to detail and technical expertise is unmatched."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500/30 to-teal-500/30 rounded-full flex items-center justify-center">
                        <span class="text-cyan-400 font-semibold">JD</span>
                    </div>
                    <div>
                        <div class="text-white font-medium">James Davis</div>
                        <div class="text-slate-400 text-sm">CEO, ShopMax</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="card p-6 hover-lift bg-slate-900 rounded-xl shadow-xl">
                <div class="flex items-center gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-slate-300 mb-6 italic">"The analytics dashboard they built gives us insights we never had before. Our team can now make data-driven decisions in real-time. Absolutely game-changing!"</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-teal-500/30 to-cyan-500/30 rounded-full flex items-center justify-center">
                        <span class="text-teal-400 font-semibold">SL</span>
                    </div>
                    <div>
                        <div class="text-white font-medium">Sarah Lee</div>
                        <div class="text-slate-400 text-sm">CTO, DataFlow Inc</div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="card p-6 hover-lift bg-slate-900 rounded-xl shadow-xl">
                <div class="flex items-center gap-1 mb-4">
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-slate-300 mb-6 italic">"Our fitness app went from concept to 500K downloads in 6 months. TechSolutions delivered beyond our expectations. They're now our go-to development partner."</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-gradient-to-br from-cyan-500/30 to-teal-500/30 rounded-full flex items-center justify-center">
                        <span class="text-cyan-400 font-semibold">MR</span>
                    </div>
                    <div>
                        <div class="text-white font-medium">Mike Rodriguez</div>
                        <div class="text-slate-400 text-sm">Founder, FitTrack</div>
                    </div>
                </div>
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
