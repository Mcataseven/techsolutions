// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2025-07-15',
  devtools: { enabled: false },

  // Static site generation for Cloudflare Pages
  ssr: true,
  nitro: {
    preset: 'static'
  }
})
