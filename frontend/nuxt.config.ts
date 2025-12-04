// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: false },

  // Static site generation for Cloudflare Pages
  ssr: true,
  nitro: {
    preset: 'static'
  },

  // Global CSS
  css: ['~/assets/css/main.css'],

  // Modules
  modules: ['@nuxtjs/tailwindcss'],

  // App configuration
  app: {
    head: {
      title: 'TechSolutions',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { name: 'description', content: 'Professional Web Development & SaaS Solutions' }
      ],
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
      ]
    }
  }
})
