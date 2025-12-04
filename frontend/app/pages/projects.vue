<template>
  <div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 gradient-bg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
          <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6">
            Our Portfolio
          </div>
          <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Featured
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-teal-400">Projects</span>
          </h1>
          <p class="text-xl text-slate-300 leading-relaxed">
            Explore our recent work and see how we've helped businesses achieve their goals.
          </p>
        </div>
      </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 bg-slate-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
          <button
            v-for="filter in filters"
            :key="filter.value"
            @click="activeFilter = filter.value"
            :class="['px-6 py-2 rounded-full font-medium transition-all duration-300',
                     activeFilter === filter.value
                       ? 'bg-cyan-500 text-white'
                       : 'bg-slate-700 text-slate-300 hover:bg-slate-600']"
          >
            {{ filter.label }}
          </button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            v-for="project in filteredProjects"
            :key="project.title"
            class="card overflow-hidden hover-lift group"
          >
            <div class="relative overflow-hidden">
              <img
                :src="project.image"
                :alt="project.title"
                loading="lazy"
                class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end justify-center pb-4">
                <span class="text-white font-medium">View Details</span>
              </div>
            </div>
            <div class="p-6">
              <div class="flex flex-wrap gap-2 mb-3">
                <span
                  v-for="tag in project.tags"
                  :key="tag"
                  class="px-2 py-1 text-xs font-medium bg-cyan-500/10 text-cyan-400 rounded"
                >
                  {{ tag }}
                </span>
              </div>
              <h3 class="text-xl font-semibold text-white mb-2">{{ project.title }}</h3>
              <p class="text-slate-400 text-sm">{{ project.description }}</p>
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
          Have a Project in Mind?
        </h2>
        <p class="text-xl text-slate-400 mb-8">
          Let's work together to create something amazing. Get in touch today!
        </p>
        <NuxtLink to="/contact" class="btn-primary">
          Start a Project
        </NuxtLink>
      </div>
    </section>
  </div>
</template>

<script setup>
useHead({
  title: 'Projects - TechSolutions',
  meta: [
    { name: 'description', content: 'Explore our portfolio of web applications, mobile apps, and digital solutions.' }
  ]
})

const activeFilter = ref('all')

const filters = [
  { label: 'All', value: 'all' },
  { label: 'Web Apps', value: 'web' },
  { label: 'Mobile', value: 'mobile' },
  { label: 'E-commerce', value: 'ecommerce' }
]

const projects = [
  {
    title: 'FinTech Dashboard',
    description: 'A comprehensive financial analytics platform with real-time data visualization.',
    image: 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80',
    category: 'web',
    tags: ['Vue.js', 'Laravel', 'Charts']
  },
  {
    title: 'Health & Fitness App',
    description: 'Mobile application for tracking workouts, nutrition, and health metrics.',
    image: 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?auto=format&fit=crop&w=800&q=80',
    category: 'mobile',
    tags: ['React Native', 'Node.js']
  },
  {
    title: 'E-commerce Platform',
    description: 'Custom online store with advanced inventory management and analytics.',
    image: 'https://images.unsplash.com/photo-1523474253046-8cd2748b5fd2?auto=format&fit=crop&w=800&q=80',
    category: 'ecommerce',
    tags: ['Shopify', 'Custom Theme']
  },
  {
    title: 'SaaS Project Manager',
    description: 'Project management tool with team collaboration and time tracking.',
    image: 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=800&q=80',
    category: 'web',
    tags: ['React', 'PostgreSQL']
  },
  {
    title: 'Food Delivery App',
    description: 'On-demand food delivery platform with real-time order tracking.',
    image: 'https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=800&q=80',
    category: 'mobile',
    tags: ['Flutter', 'Firebase']
  },
  {
    title: 'Fashion Marketplace',
    description: 'Multi-vendor fashion marketplace with advanced search and filters.',
    image: 'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=800&q=80',
    category: 'ecommerce',
    tags: ['Laravel', 'Vue.js']
  }
]

const filteredProjects = computed(() => {
  if (activeFilter.value === 'all') return projects
  return projects.filter(p => p.category === activeFilter.value)
})
</script>
