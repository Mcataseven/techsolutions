<template>
  <div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 gradient-bg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
          <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6">
            About Us
          </div>
          <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
            We Build Digital
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Excellence</span>
          </h1>
          <p class="text-xl text-slate-300 leading-relaxed">
            A passionate team of developers, designers, and innovators dedicated to creating exceptional digital experiences.
          </p>
        </div>
      </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 bg-slate-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div class="animate-fade-in">
            <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4">
              Our Story
            </div>
            <h2 class="text-3xl font-bold text-white mb-6">From Vision to Reality</h2>
            <p class="text-slate-300 mb-4 leading-relaxed">
              Founded in 2018, TechSolutions started with a simple mission: to help businesses leverage technology 
              for growth and success. What began as a small team of passionate developers has grown into a 
              full-service digital agency.
            </p>
            <p class="text-slate-300 mb-6 leading-relaxed">
              Today, we work with clients ranging from startups to enterprises, delivering custom solutions 
              that drive real business results. Our commitment to quality, innovation, and client satisfaction 
              remains at the core of everything we do.
            </p>
            <div class="flex gap-4">
              <NuxtLink to="/contact" class="btn-primary">Work With Us</NuxtLink>
              <NuxtLink to="/projects" class="btn-secondary">See Our Work</NuxtLink>
            </div>
          </div>
          <div class="animate-slide-in-up">
            <div class="card p-4 overflow-hidden">
              <img src="/images/about-team.jpg" alt="Our Team" class="rounded-lg w-full h-auto">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-slate-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-4">
            Our Values
          </div>
          <h2 class="text-3xl font-bold text-white mb-4">What Drives Us</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div v-for="value in values" :key="value.title" class="card p-8 text-center hover-lift">
            <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="value.icon"/>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-white mb-3">{{ value.title }}</h3>
            <p class="text-slate-400">{{ value.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-slate-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <div class="capsule bg-teal-500/10 text-teal-400 border border-teal-500/20 mb-4">
            Our Team
          </div>
          <h2 class="text-3xl font-bold text-white mb-4">Meet the Experts</h2>
          <p class="text-slate-400 max-w-2xl mx-auto">
            A diverse team of talented individuals working together to deliver exceptional results.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <div v-for="member in team" :key="member.name" class="card p-6 text-center hover-lift">
            <img :src="member.image" :alt="member.name" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
            <h3 class="text-lg font-semibold text-white">{{ member.name }}</h3>
            <p class="text-cyan-400 text-sm mb-2">{{ member.role }}</p>
            <p class="text-slate-400 text-sm">{{ member.bio }}</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script setup>
useHead({
  title: 'About Us - TechSolutions',
  meta: [
    { name: 'description', content: 'Learn about TechSolutions - a passionate team of developers and designers creating exceptional digital experiences.' }
  ]
})

const values = [
  {
    title: 'Innovation',
    description: 'We stay ahead of the curve, constantly exploring new technologies and methodologies.',
    icon: 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'
  },
  {
    title: 'Quality',
    description: 'We never compromise on quality. Every line of code is crafted with precision and care.',
    icon: 'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'
  },
  {
    title: 'Partnership',
    description: 'We believe in building long-term relationships based on trust and mutual success.',
    icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z'
  }
]

const team = [
  { name: 'John Smith', role: 'CEO & Founder', bio: 'Visionary leader with 15+ years in tech', image: '/images/team-1.jpg' },
  { name: 'Sarah Johnson', role: 'CTO', bio: 'Full-stack expert and architecture guru', image: '/images/team-2.jpg' },
  { name: 'Mike Chen', role: 'Lead Designer', bio: 'Creating beautiful user experiences', image: '/images/team-3.jpg' },
  { name: 'Emily Brown', role: 'Project Manager', bio: 'Keeping projects on track and teams aligned', image: '/images/team-4.jpg' }
]
</script>
