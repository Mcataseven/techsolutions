@extends('layouts.app')

@section('content')
<section class="relative pt-32 pb-20 about-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                About Us
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                We Build Digital
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Experiences</span>
            </h1>
            <p class="text-xl text-slate-300 leading-relaxed">
                We are a passionate team of developers, designers, and strategists dedicated to creating exceptional digital solutions that drive business growth.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="animate-fade-in">
                <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                    Our Story
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    From Vision to Reality
                </h2>
                <p class="text-slate-300 mb-6 leading-relaxed">
                    Founded in 2019, TechSolutions started with a simple mission: to help businesses thrive in the digital age. What began as a small team of three passionate developers has grown into a full-service digital agency.
                </p>
                <p class="text-slate-300 mb-6 leading-relaxed">
                    Today, we work with clients ranging from startups to enterprise companies, delivering cutting-edge web applications, mobile solutions, and digital strategies that make a real impact.
                </p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="card p-4 text-center bg-slate-900 rounded-lg">
                        <div class="text-3xl font-bold text-cyan-400 mb-1">5+</div>
                        <div class="text-sm text-slate-400">Years Experience</div>
                    </div>
                    <div class="card p-4 text-center bg-slate-900 rounded-lg">
                        <div class="text-3xl font-bold text-teal-400 mb-1">50+</div>
                        <div class="text-sm text-slate-400">Projects Delivered</div>
                    </div>
                </div>
            </div>

            <div class="animate-slide-in-up">
                <div class="card p-2 relative overflow-hidden rounded-xl bg-slate-700/50">
                    <img
                            src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=450&fit=crop"
                            alt="Team collaboration"
                            class="w-full h-auto rounded-lg"
                    >
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-cyan-500/20 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-teal-500/20 rounded-full blur-2xl"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Our Values
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What Drives Us</h2>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                Our core values shape everything we do and guide our decisions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card p-6 hover-lift text-center bg-slate-800 rounded-xl hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Innovation</h3>
                <p class="text-slate-400 text-sm">
                    We constantly explore new technologies and approaches to deliver cutting-edge solutions.
                </p>
            </div>

            <div class="card p-6 hover-lift text-center bg-slate-800 rounded-xl hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Collaboration</h3>
                <p class="text-slate-400 text-sm">
                    We work closely with our clients as partners, ensuring their vision becomes reality.
                </p>
            </div>

            <div class="card p-6 hover-lift text-center bg-slate-800 rounded-xl hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Quality</h3>
                <p class="text-slate-400 text-sm">
                    We never compromise on quality, delivering polished products that exceed expectations.
                </p>
            </div>

            <div class="card p-6 hover-lift text-center bg-slate-800 rounded-xl hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Speed</h3>
                <p class="text-slate-400 text-sm">
                    We deliver fast without sacrificing quality, helping you get to market quickly.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Our Team
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Meet the Experts</h2>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                Talented professionals dedicated to bringing your ideas to life
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="card team-card overflow-hidden hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="aspect-square overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&h=400&fit=crop"
                            alt="John Smith - CEO"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    >
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-white mb-1">John Smith</h3>
                    <p class="text-cyan-400 text-sm mb-3">CEO & Founder</p>
                    <p class="text-slate-400 text-sm mb-4">10+ years of experience in tech leadership and software architecture.</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card team-card overflow-hidden hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="aspect-square overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop"
                            alt="Sarah Johnson - Lead Developer"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    >
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-white mb-1">Sarah Johnson</h3>
                    <p class="text-teal-400 text-sm mb-3">Lead Developer</p>
                    <p class="text-slate-400 text-sm mb-4">Full-stack expert specializing in Vue.js and Laravel applications.</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card team-card overflow-hidden hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="aspect-square overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop"
                            alt="Michael Chen - UI/UX Designer"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    >
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-white mb-1">Michael Chen</h3>
                    <p class="text-cyan-400 text-sm mb-3">UI/UX Designer</p>
                    <p class="text-slate-400 text-sm mb-4">Creating beautiful and intuitive user experiences for 7+ years.</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card team-card overflow-hidden hover-lift group rounded-xl bg-slate-900 shadow-xl">
                <div class="aspect-square overflow-hidden">
                    <img
                            src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop"
                            alt="Emily Davis - Project Manager"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                    >
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-lg font-semibold text-white mb-1">Emily Davis</h3>
                    <p class="text-teal-400 text-sm mb-3">Project Manager</p>
                    <p class="text-slate-400 text-sm mb-4">Ensuring projects are delivered on time and exceed expectations.</p>
                    <div class="flex justify-center gap-3">
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-slate-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Our Journey
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Company Timeline</h2>
            <p class="text-xl text-slate-400">Key milestones in our growth story</p>
        </div>

        <div class="space-y-8">
            <div class="timeline-item pb-8 border-l-2 border-slate-800 ml-4 pl-8 relative">
                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-cyan-500"></div>
                <div class="card p-6 bg-slate-800 rounded-xl">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-cyan-400 font-bold">2019</span>
                        <span class="text-white font-semibold">Company Founded</span>
                    </div>
                    <p class="text-slate-400 text-sm">Started with a team of 3 passionate developers in a small office. </p>
                </div>
            </div>

            <div class="timeline-item pb-8 border-l-2 border-slate-800 ml-4 pl-8 relative">
                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-teal-500"></div>
                <div class="card p-6 bg-slate-800 rounded-xl">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-teal-400 font-bold">2020</span>
                        <span class="text-white font-semibold">First Major Client</span>
                    </div>
                    <p class="text-slate-400 text-sm">Landed our first enterprise client and delivered a successful e-commerce platform.</p>
                </div>
            </div>

            <div class="timeline-item pb-8 border-l-2 border-slate-800 ml-4 pl-8 relative">
                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-cyan-500"></div>
                <div class="card p-6 bg-slate-800 rounded-xl">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-cyan-400 font-bold">2021</span>
                        <span class="text-white font-semibold">Team Expansion</span>
                    </div>
                    <p class="text-slate-400 text-sm">Grew to 10 team members and moved to a larger office space.</p>
                </div>
            </div>

            <div class="timeline-item pb-8 border-l-2 border-slate-800 ml-4 pl-8 relative">
                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-teal-500"></div>
                <div class="card p-6 bg-slate-800 rounded-xl">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-teal-400 font-bold">2022</span>
                        <span class="text-white font-semibold">International Projects</span>
                    </div>
                    <p class="text-slate-400 text-sm">Started working with clients from Europe and Asia, expanding our global reach.</p>
                </div>
            </div>

            <div class="timeline-item ml-4 pl-8 border-l-2 border-transparent relative">
                <div class="absolute -left-[9px] top-0 w-4 h-4 rounded-full bg-cyan-500"></div>
                <div class="card p-6 bg-slate-800 rounded-xl">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-cyan-400 font-bold">2024</span>
                        <span class="text-white font-semibold">50+ Projects Milestone</span>
                    </div>
                    <p class="text-slate-400 text-sm">Celebrated completing over 50 successful projects with a 99% client satisfaction rate.</p>
                </div>
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
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Ready to Work Together?
        </h2>
        <p class="text-xl text-slate-400 mb-8">
            Let's discuss how we can help bring your project to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-lg transition-colors duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
                Get In Touch
            </a>
            <a href="{{ route('projects') }}" class="inline-flex items-center justify-center px-6 py-3 border border-slate-600 hover:border-cyan-500 text-slate-300 hover:text-white font-semibold rounded-lg transition-colors duration-300">
                View Our Work
            </a>
        </div>
    </div>
</section>
@endsection
