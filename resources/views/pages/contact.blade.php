@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="relative pt-32 pb-20 contact-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                Get In Touch
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Let's Start a
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Conversation</span>
            </h1>
            <p class="text-xl text-slate-300 leading-relaxed">
                Have a project in mind? We'd love to hear about it. Get in touch and let's create something amazing together.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            <!-- Contact Form -->
            <div class="animate-fade-in">
                <div class="card p-8 bg-slate-900 rounded-xl shadow-xl">
                    <h2 class="text-2xl font-bold text-white mb-6">Send Us a Message</h2>
                    <form id="contact-form" class="space-y-6">
                        <!-- Name Fields -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="firstName" class="form-label block text-sm font-medium text-slate-400 mb-1">First Name *</label>
                                <input type="text" id="firstName" name="firstName" class="form-input w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors" placeholder="John" required>
                            </div>
                            <div>
                                <label for="lastName" class="form-label block text-sm font-medium text-slate-400 mb-1">Last Name *</label>
                                <input type="text" id="lastName" name="lastName" class="form-input w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors" placeholder="Doe" required>
                            </div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="form-label block text-sm font-medium text-slate-400 mb-1">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-input w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors" placeholder="john@example.com" required>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="form-label block text-sm font-medium text-slate-400 mb-1">Phone Number</label>
                            <input type="tel" id="phone" name="phone" class="form-input w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors" placeholder="+1 (555) 123-4567">
                        </div>

                        <!-- Company -->
                        <div>
                            <label for="company" class="form-label block text-sm font-medium text-slate-400 mb-1">Company Name</label>
                            <input type="text" id="company" name="company" class="form-input w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors" placeholder="Your Company">
                        </div>

                        <!-- Service Interest -->
                        <div>
                            <label for="service" class="form-label block text-sm font-medium text-slate-400 mb-1">Service Interested In</label>
                            <select id="service" name="service" class="form-input w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors">
                                <option value="">Select a service</option>
                                <option value="web-development">Web Application Development</option>
                                <option value="mobile-app">Mobile App Development</option>
                                <option value="ui-ux">UI/UX Design</option>
                                <option value="devops">DevOps & Cloud Solutions</option>
                                <option value="consulting">Technical Consulting</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Budget Range -->
                        <div>
                            <label for="budget" class="form-label block text-sm font-medium text-slate-400 mb-1">Budget Range</label>
                            <select id="budget" name="budget" class="form-input w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors">
                                <option value="">Select your budget</option>
                                <option value="5k-10k">$5,000 - $10,000</option>
                                <option value="10k-25k">$10,000 - $25,000</option>
                                <option value="25k-50k">$25,000 - $50,000</option>
                                <option value="50k-100k">$50,000 - $100,000</option>
                                <option value="100k+">$100,000+</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="form-label block text-sm font-medium text-slate-400 mb-1">Project Details *</label>
                            <textarea id="message" name="message" rows="5" class="form-textarea w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-cyan-500 transition-colors" placeholder="Tell us about your project, goals, and timeline..." required></textarea>
                        </div>

                        <!-- Privacy Checkbox -->
                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="privacy" name="privacy" class="mt-1 w-4 h-4 rounded border-slate-600 bg-slate-700 text-cyan-500 focus:ring-cyan-500 focus:ring-offset-slate-800" required>
                            <label for="privacy" class="text-sm text-slate-400">
                                I agree to the <a href="#" class="text-cyan-400 hover:text-cyan-300">Privacy Policy</a> and consent to being contacted about my inquiry.
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn-primary w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-lg transition-colors duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="animate-slide-in-up space-y-8">
                <!-- Contact Cards -->
                <div class="card p-6 hover-lift bg-slate-900 rounded-xl shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-1">Email Us</h3>
                            <p class="text-slate-400 text-sm mb-2">We'll respond within 24 hours</p>
                            <a href="mailto:info@techsolutions.com" class="text-cyan-400 hover:text-cyan-300 transition-colors">info@techsolutions.com</a>
                        </div>
                    </div>
                </div>

                <div class="card p-6 hover-lift bg-slate-900 rounded-xl shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-1">Call Us</h3>
                            <p class="text-slate-400 text-sm mb-2">Mon-Fri from 9am to 6pm</p>
                            <a href="tel:+15551234567" class="text-cyan-400 hover:text-cyan-300 transition-colors">+1 (555) 123-4567</a>
                        </div>
                    </div>
                </div>

                <div class="card p-6 hover-lift bg-slate-900 rounded-xl shadow-xl">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-lg flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white mb-1">Visit Us</h3>
                            <p class="text-slate-400 text-sm mb-2">Come say hello at our office</p>
                            <p class="text-cyan-400">123 Tech Street, Suite 100<br>San Francisco, CA 94105</p>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="card p-6 bg-slate-900 rounded-xl shadow-xl">
                    <h3 class="text-lg font-semibold text-white mb-4">Follow Us</h3>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-slate-700 hover:bg-cyan-500 rounded-lg flex items-center justify-center text-slate-400 hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Office Hours -->
                <div class="card p-6 bg-slate-900 rounded-xl shadow-xl">
                    <h3 class="text-lg font-semibold text-white mb-4">Office Hours</h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-400">Monday - Friday</span>
                            <span class="text-white">9:00 AM - 6:00 PM</span>
                        </li>
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-400">Saturday</span>
                            <span class="text-white">10:00 AM - 4:00 PM</span>
                        </li>
                        <li class="flex justify-between text-sm">
                            <span class="text-slate-400">Sunday</span>
                            <span class="text-white">Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white mb-4">Find Us</h2>
            <p class="text-slate-400">Located in the heart of San Francisco's tech district</p>
        </div>

        <!-- Map Placeholder -->
        <div class="card overflow-hidden bg-slate-800 rounded-xl shadow-xl">
            <div class="aspect-[21/9] flex items-center justify-center relative w-full h-full">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.063673722956!2d-122.4194154846819!3d37.77492977975919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c6c8f4459%3A0xb10ed6d9b5050fa5!2sTwitter+HQ!5e0!3m2!1sen!2sus!4v1533026367876" width="100%" height="100%" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-slate-800">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4 inline-flex px-4 py-1 rounded-full text-sm font-medium">
                FAQ
            </div>
            <h2 class="text-3xl font-bold text-white mb-4">Frequently Asked Questions</h2>
            <p class="text-slate-400">Quick answers to common questions</p>
        </div>

        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div class="card p-6 bg-slate-900 rounded-xl">
                <h3 class="text-lg font-semibold text-white mb-2">How long does a typical project take?</h3>
                <p class="text-slate-400">Project timelines vary based on complexity. A simple website might take 2-4 weeks, while a complex web application could take 3-6 months. We'll provide a detailed timeline during our initial consultation.</p>
            </div>

            <!-- FAQ 2 -->
            <div class="card p-6 bg-slate-900 rounded-xl">
                <h3 class="text-lg font-semibold text-white mb-2">What is your pricing structure?</h3>
                <p class="text-slate-400">We offer both fixed-price and time-and-materials pricing models. The best approach depends on your project's scope and requirements. Contact us for a custom quote tailored to your needs.</p>
            </div>

            <!-- FAQ 3 -->
            <div class="card p-6 bg-slate-900 rounded-xl">
                <h3 class="text-lg font-semibold text-white mb-2">Do you provide ongoing support?</h3>
                <p class="text-slate-400">Yes! We offer various support and maintenance packages to keep your application running smoothly. This includes bug fixes, security updates, performance monitoring, and feature enhancements.</p>
            </div>

            <!-- FAQ 4 -->
            <div class="card p-6 bg-slate-900 rounded-xl">
                <h3 class="text-lg font-semibold text-white mb-2">What technologies do you work with?</h3>
                <p class="text-slate-400">We specialize in modern web technologies including Vue.js, React, Laravel, Node.js, and more. For mobile development, we use React Native and Flutter. We choose the best technology stack based on your project requirements.</p>
            </div>

            <!-- FAQ 5 -->
            <div class="card p-6 bg-slate-900 rounded-xl">
                <h3 class="text-lg font-semibold text-white mb-2">How do we communicate during the project?</h3>
                <p class="text-slate-400">We use a combination of tools including Slack for daily communication, weekly video calls for updates, and project management tools like Jira or Trello. You'll always know the status of your project.</p>
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
            Ready to Get Started?
        </h2>
        <p class="text-xl text-slate-400 mb-8">
            Don't wait - let's discuss your project today and bring your ideas to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="tel:+15551234567" class="btn-primary inline-flex items-center justify-center gap-2 px-6 py-3 bg-cyan-500 hover:bg-cyan-600 text-white font-semibold rounded-lg transition-colors duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Call Us Now
            </a>
            <a href="mailto:info@techsolutions.com" class="btn-secondary inline-flex items-center justify-center gap-2 px-6 py-3 border border-slate-600 hover:border-cyan-500 text-slate-300 hover:text-white font-semibold rounded-lg transition-colors duration-300">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Send Email
            </a>
        </div>
    </div>
</section>
@endsection
