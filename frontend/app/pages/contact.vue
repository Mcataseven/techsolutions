<template>
  <div>
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 gradient-bg">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto animate-fade-in">
          <div class="capsule bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 mb-6">
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
            <div class="card p-8">
              <h2 class="text-2xl font-bold text-white mb-6">Send Us a Message</h2>
              <form @submit.prevent="submitForm" class="space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label class="form-label">First Name *</label>
                    <input v-model="form.firstName" type="text" class="form-input" placeholder="John" required>
                  </div>
                  <div>
                    <label class="form-label">Last Name *</label>
                    <input v-model="form.lastName" type="text" class="form-input" placeholder="Doe" required>
                  </div>
                </div>

                <div>
                  <label class="form-label">Email Address *</label>
                  <input v-model="form.email" type="email" class="form-input" placeholder="john@example.com" required>
                </div>

                <div>
                  <label class="form-label">Phone Number</label>
                  <input v-model="form.phone" type="tel" class="form-input" placeholder="+1 (555) 123-4567">
                </div>

                <div>
                  <label class="form-label">Service Interested In</label>
                  <select v-model="form.service" class="form-input">
                    <option value="">Select a service</option>
                    <option value="web-development">Web Application Development</option>
                    <option value="mobile-app">Mobile App Development</option>
                    <option value="ui-ux">UI/UX Design</option>
                    <option value="devops">DevOps & Cloud Solutions</option>
                    <option value="consulting">Technical Consulting</option>
                  </select>
                </div>

                <div>
                  <label class="form-label">Project Details *</label>
                  <textarea v-model="form.message" rows="5" class="form-input" placeholder="Tell us about your project..." required></textarea>
                </div>

                <button type="submit" :disabled="isSubmitting" class="btn-primary w-full">
                  <svg v-if="isSubmitting" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                  </svg>
                  {{ isSubmitting ? 'Sending...' : 'Send Message' }}
                </button>
              </form>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="animate-slide-in-up space-y-8">
            <div class="card p-6 hover-lift">
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

            <div class="card p-6 hover-lift">
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

            <div class="card p-6 hover-lift">
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

            <div class="card p-6">
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
  </div>
</template>

<script setup>
useHead({
  title: 'Contact - TechSolutions',
  meta: [
    { name: 'description', content: 'Get in touch with TechSolutions. Let us discuss your project and create something amazing together.' }
  ]
})

const isSubmitting = ref(false)

const form = reactive({
  firstName: '',
  lastName: '',
  email: '',
  phone: '',
  service: '',
  message: ''
})

const submitForm = async () => {
  isSubmitting.value = true

  // Simulate form submission
  await new Promise(resolve => setTimeout(resolve, 1500))

  alert('Thank you for your message! We will get back to you soon.')

  // Reset form
  form.firstName = ''
  form.lastName = ''
  form.email = ''
  form.phone = ''
  form.service = ''
  form.message = ''

  isSubmitting.value = false
}
</script>
