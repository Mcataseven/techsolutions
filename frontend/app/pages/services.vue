<template>
  <div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 gradient-bg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
          <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6">
            Our Services
          </div>
          <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Solutions That
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Transform</span>
          </h1>
          <p class="text-xl text-slate-300 leading-relaxed">
            From web development to cloud solutions, we offer comprehensive services to meet your digital needs.
          </p>
        </div>
      </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-slate-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div v-for="service in services" :key="service.title" class="card p-8 hover-lift">
            <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="service.icon"/>
              </svg>
            </div>
            <h3 class="text-2xl font-semibold text-white mb-4">{{ service.title }}</h3>
            <p class="text-slate-400 mb-6">{{ service.description }}</p>
            <ul class="space-y-2">
              <li v-for="feature in service.features" :key="feature" class="flex items-center gap-2 text-slate-300 text-sm">
                <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                {{ feature }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-20 bg-slate-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4">
            Tech Stack
          </div>
          <h2 class="text-3xl font-bold text-white mb-4">Technologies We Use</h2>
          <p class="text-slate-400 max-w-2xl mx-auto">
            We leverage the latest and most reliable technologies to build scalable solutions.
          </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
          <div v-for="tech in technologies" :key="tech" class="card p-6 text-center hover-lift">
            <span class="text-slate-300 font-medium">{{ tech }}</span>
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
          Ready to Start Your Project?
        </h2>
        <p class="text-xl text-slate-400 mb-8">
          Let's discuss how we can help transform your business with our services.
        </p>
        <NuxtLink to="/contact" class="btn-primary">
          Get a Free Quote
        </NuxtLink>
      </div>
    </section>
  </div>
</template>

<script setup>
useHead({
  title: 'Services - TechSolutions',
  meta: [
    { name: 'description', content: 'Explore our comprehensive web development, mobile app, UI/UX design, and cloud services.' }
  ]
})

const services = [
  {
    title: 'Web Development',
    description: 'Custom web applications built with modern frameworks and best practices.',
    icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
    features: ['Vue.js & React', 'Laravel & Node.js', 'RESTful APIs', 'Database Design']
  },
  {
    title: 'Mobile Apps',
    description: 'Native and cross-platform mobile applications for iOS and Android.',
    icon: 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z',
    features: ['React Native', 'Flutter', 'iOS & Android', 'App Store Deployment']
  },
  {
    title: 'UI/UX Design',
    description: 'User-centered design that creates intuitive and engaging experiences.',
    icon: 'M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01',
    features: ['User Research', 'Wireframing', 'Prototyping', 'Design Systems']
  },
  {
    title: 'DevOps & Cloud',
    description: 'Streamline your development and deployment with modern DevOps practices.',
    icon: 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
    features: ['AWS & Azure', 'Docker & Kubernetes', 'CI/CD Pipelines', 'Monitoring']
  },
  {
    title: 'E-commerce',
    description: 'Complete e-commerce solutions from storefront to payment processing.',
    icon: 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z',
    features: ['Custom Stores', 'Shopify Integration', 'Payment Gateways', 'Inventory Management']
  },
  {
    title: 'Consulting',
    description: 'Expert guidance on technology strategy and digital transformation.',
    icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
    features: ['Tech Audits', 'Architecture Design', 'Team Training', 'Best Practices']
  }
]

const technologies = ['Vue.js', 'React', 'Laravel', 'Node.js', 'Python', 'AWS', 'Docker', 'PostgreSQL', 'MongoDB', 'Redis', 'GraphQL', 'Tailwind CSS']
</script>
