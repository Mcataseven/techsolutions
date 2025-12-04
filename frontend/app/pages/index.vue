<template>
  <div>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center gradient-bg pt-16">
      <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/10 rounded-full filter blur-[128px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-teal-500/10 rounded-full filter blur-[128px]"></div>
      </div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="animate-fade-in">
            <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6">
              🚀 Welcome to TechSolutions
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
              Building the
              <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Future</span>
              of Digital Innovation
            </h1>
            <p class="text-xl text-slate-300 mb-8 leading-relaxed">
              We create cutting-edge web applications and SaaS solutions that transform businesses. 
              Modern technology, exceptional design, outstanding results.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
              <NuxtLink to="/contact" class="btn-primary">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                Start Your Project
              </NuxtLink>
              <NuxtLink to="/projects" class="btn-secondary">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                View Our Work
              </NuxtLink>
            </div>
          </div>
          
          <div class="hidden lg:block animate-slide-in-up">
            <div class="relative">
              <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 to-teal-500/20 rounded-2xl blur-2xl"></div>
              <div class="relative card p-8 tech-gradient">
                <div class="flex items-center gap-2 mb-4">
                  <div class="w-3 h-3 rounded-full bg-red-500"></div>
                  <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                  <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <pre class="text-sm text-slate-300 font-mono"><code><span class="text-cyan-400">const</span> <span class="text-teal-400">TechSolutions</span> = {
  <span class="text-slate-400">expertise:</span> [
    <span class="text-green-400">'Vue.js'</span>,
    <span class="text-green-400">'Laravel'</span>,
    <span class="text-green-400">'React'</span>,
    <span class="text-green-400">'Node.js'</span>
  ],
  <span class="text-slate-400">passion:</span> <span class="text-green-400">'Innovation'</span>,
  <span class="text-slate-400">goal:</span> <span class="text-green-400">'Your Success'</span>
};</code></pre>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Scroll indicator -->
      <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-slate-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <div v-for="stat in stats" :key="stat.label" class="text-center">
            <div class="text-4xl font-bold text-cyan-400 mb-2">{{ stat.value }}</div>
            <div class="text-slate-400">{{ stat.label }}</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Preview -->
    <section class="py-20 bg-slate-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4">
            Our Services
          </div>
          <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">What We Offer</h2>
          <p class="text-slate-400 text-lg max-w-2xl mx-auto">
            From concept to deployment, we provide end-to-end solutions for your digital needs.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div v-for="service in services" :key="service.title" class="card p-8 hover-lift">
            <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-xl flex items-center justify-center mb-6">
              <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="service.icon"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-white mb-3">{{ service.title }}</h3>
            <p class="text-slate-400 mb-4">{{ service.description }}</p>
            <NuxtLink to="/services" class="text-cyan-400 hover:text-cyan-300 inline-flex items-center gap-2 transition-colors">
              Learn more
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </NuxtLink>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-slate-800 relative overflow-hidden">
      <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-cyan-500 rounded-full filter blur-[128px]"></div>
        <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-teal-500 rounded-full filter blur-[128px]"></div>
      </div>

      <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
          Ready to Transform Your Ideas?
        </h2>
        <p class="text-xl text-slate-400 mb-8">
          Let's discuss your project and see how we can help bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <NuxtLink to="/contact" class="btn-primary">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
            </svg>
            Get in Touch
          </NuxtLink>
          <NuxtLink to="/about" class="btn-secondary">
            Learn About Us
          </NuxtLink>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
useHead({
  title: 'TechSolutions - Professional Web Development & SaaS Solutions',
  meta: [
    { name: 'description', content: 'Professional web development and technology solutions. We build modern applications with Vue.js, Laravel, and Tailwind CSS for enterprise clients.' }
  ]
})

const stats = [
  { value: '150+', label: 'Projects Completed' },
  { value: '50+', label: 'Happy Clients' },
  { value: '15+', label: 'Team Members' },
  { value: '99%', label: 'Client Satisfaction' }
]

const services = [
  {
    title: 'Web Application Development',
    description: 'Custom web applications built with modern frameworks like Vue.js, React, and Laravel.',
    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4'
  },
  {
    title: 'Mobile App Development',
    description: 'Cross-platform mobile applications using React Native and Flutter.',
    icon: 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z'
  },
  {
    title: 'UI/UX Design',
    description: 'User-centered design that creates intuitive and engaging experiences.',
    icon: 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01'
  }
]
</script>
