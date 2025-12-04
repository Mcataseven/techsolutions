<template>
  <div class="min-h-screen bg-slate-900">
    <!-- Navbar -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-slate-900/80 backdrop-blur-md border-b border-slate-800">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center">
            <NuxtLink to="/" class="flex-shrink-0">
              <h1 class="text-xl font-bold text-white">Tech<span class="text-cyan-400">Solutions</span></h1>
            </NuxtLink>
          </div>

          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-8">
              <NuxtLink
                v-for="item in navigation"
                :key="item.name"
                :to="item.href"
                class="nav-link"
                :class="{ 'text-cyan-400': $route.path === item.href }"
              >
                {{ item.name }}
              </NuxtLink>
            </div>
          </div>

          <div class="hidden md:block">
            <NuxtLink to="/contact" class="bg-transparent border border-cyan-500 text-cyan-400 hover:bg-cyan-500 hover:text-white px-6 py-2 rounded-lg font-medium transition-all duration-300">
              Get Quote
            </NuxtLink>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden">
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-300 hover:text-white focus:outline-none">
              <svg v-if="!mobileMenuOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <svg v-else class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Mobile menu -->
        <div v-show="mobileMenuOpen" class="md:hidden pb-4">
          <div class="flex flex-col space-y-2">
            <NuxtLink
              v-for="item in navigation"
              :key="item.name"
              :to="item.href"
              class="text-slate-300 hover:text-cyan-400 px-3 py-2 text-base font-medium"
              @click="mobileMenuOpen = false"
            >
              {{ item.name }}
            </NuxtLink>
            <NuxtLink to="/contact" class="bg-cyan-500 text-white px-4 py-2 rounded-lg font-medium text-center mt-2" @click="mobileMenuOpen = false">
              Get Quote
            </NuxtLink>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main>
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-slate-800 border-t border-slate-700">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
          <div class="md:col-span-1">
            <NuxtLink to="/" class="text-2xl font-bold text-white">
              Tech<span class="text-cyan-400">Solutions</span>
            </NuxtLink>
            <p class="text-slate-400 mt-4 text-sm">
              Building modern web solutions that drive business growth.
            </p>
            <div class="flex space-x-4 mt-6">
              <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
              </a>
              <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
              </a>
              <a href="#" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
              </a>
            </div>
          </div>

          <div>
            <h3 class="text-lg font-semibold text-white mb-4">Navigation</h3>
            <ul class="space-y-2">
              <li v-for="item in navigation" :key="item.name">
                <NuxtLink :to="item.href" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">
                  {{ item.name }}
                </NuxtLink>
              </li>
            </ul>
          </div>

          <div>
            <h3 class="text-lg font-semibold text-white mb-4">Services</h3>
            <ul class="space-y-2">
              <li><NuxtLink to="/services" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Web Development</NuxtLink></li>
              <li><NuxtLink to="/services" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Mobile Apps</NuxtLink></li>
              <li><NuxtLink to="/services" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">UI/UX Design</NuxtLink></li>
              <li><NuxtLink to="/services" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">DevOps</NuxtLink></li>
              <li><NuxtLink to="/services" class="text-slate-400 hover:text-cyan-400 transition-colors duration-300">Consulting</NuxtLink></li>
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

    <!-- Back to Top -->
    <button
      v-show="showBackToTop"
      @click="scrollToTop"
      class="fixed bottom-8 right-8 w-12 h-12 bg-cyan-500 hover:bg-cyan-600 text-white rounded-full shadow-lg shadow-cyan-500/25 flex items-center justify-center transition-all duration-300 z-50"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
      </svg>
    </button>
  </div>
</template>

<script setup>
const mobileMenuOpen = ref(false)
const showBackToTop = ref(false)

const navigation = [
  { name: 'Home', href: '/' },
  { name: 'About', href: '/about' },
  { name: 'Services', href: '/services' },
  { name: 'Projects', href: '/projects' },
  { name: 'Contact', href: '/contact' }
]

const scrollToTop = () => {
  window.scrollTo({ top: 0, behavior: 'smooth' })
}

onMounted(() => {
  window.addEventListener('scroll', () => {
    showBackToTop.value = window.scrollY > 300
  })
})
</script>

<style scoped>
.nav-link {
  @apply text-slate-300 hover:text-cyan-400 px-3 py-2 text-sm font-medium transition-colors duration-300;
}
</style>
