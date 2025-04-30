@extends('frontend.layout.main')
@section('content')
<!-- Navigation -->
  <header class="w-full bg-[#4f3440] shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold tracking-wide text-[#edbd5c] hover:text-white transition">JONY.</a>

        <!-- Desktop Navigation -->
        <nav class="hidden md:flex space-x-8 text-sm font-medium">
          <a href="#" class="hover:text-white transition text-[#edbd5c]">Home</a>
          <a href="#" class="hover:text-white transition text-[#edbd5c]">Works</a>
          <a href="#" class="hover:text-white transition text-[#edbd5c]">Services</a>

          <!-- Pages Dropdown -->
          <div class="relative group">
            <button aria-haspopup="true" aria-expanded="false" class="flex items-center space-x-1 text-[#edbd5c] hover:text-white transition focus:outline-none">
              <span>Pages</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute left-0 mt-2 w-32 bg-[#3A262F] text-sm rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible pointer-events-none group-hover:pointer-events-auto transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38] rounded-t">Subpage 1</a>
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38] rounded-b">Subpage 2</a>
            </div>
          </div>

          <a href="#" class="text-[#edbd5c] hover:text-white transition">About</a>

          <!-- Blog Dropdown -->
          <div class="relative group">
            <button aria-haspopup="true" aria-expanded="false" class="flex items-center space-x-1 text-[#edbd5c] hover:text-white transition focus:outline-none">
              <span>Blog</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div class="absolute left-0 mt-2 w-32 bg-[#3A262F] text-sm rounded shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible pointer-events-none group-hover:pointer-events-auto transition-all duration-300 transform group-hover:translate-y-0 -translate-y-2">
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38] rounded-t">Blog Post</a>
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38] rounded-b">Blog Grid</a>
            </div>
          </div>

          <a href="#contact" class="text-[#edbd5c] hover:text-white transition">Contact</a>
        </nav>

        <!-- CTA Button -->
        <div class="hidden md:block">
          <a href="#contact" class="border border-[#E09B61] text-[#E09B61] hover:bg-[#E09B61] hover:text-[#2E1E25] font-semibold px-5 py-2 rounded transition duration-300 transform hover:-translate-y-0.5">
            Let's Talk
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button id="menu-toggle" aria-label="Toggle mobile menu" class="text-[#E09B61] focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 bg-[#3A262F] transition-all duration-300 ease-in-out">
      <div class="space-y-2 pt-2 pb-3 text-sm font-medium">
        <a href="#" class="block px-3 py-2 rounded-md text-[#edbd5c] hover:bg-[#4A2E38] hover:text-white">Home</a>
        <a href="#" class="block px-3 py-2 rounded-md text-[#edbd5c] hover:bg-[#4A2E38] hover:text-white">Works</a>
        <a href="#" class="block px-3 py-2 rounded-md text-[#edbd5c] hover:bg-[#4A2E38] hover:text-white">Services</a>
        <a href="#" class="block px-3 py-2 rounded-md text-[#edbd5c] hover:bg-[#4A2E38] hover:text-white">Pages</a>
        <a href="#" class="block px-3 py-2 rounded-md text-[#edbd5c] hover:bg-[#4A2E38] hover:text-white">About</a>
        <a href="#" class="block px-3 py-2 rounded-md text-[#edbd5c] hover:bg-[#4A2E38] hover:text-white">Blog</a>
        <a href="#contact" class="block px-3 py-2 rounded-md text-[#edbd5c] hover:bg-[#4A2E38] hover:text-white">Contact</a>
        <a href="#contact" class="block mt-4 px-3 py-2 text-center border border-[#E09B61] text-[#E09B61] rounded-md hover:bg-[#E09B61] hover:text-[#2E1E25] transition">
          Let's Talk
        </a>
      </div>
    </div>
  </header>

  <!-- Animated Background -->
  <div class="fixed inset-0 overflow-hidden -z-10 pointer-events-none">
    <div class="absolute top-0 left-1/4 w-64 h-64 bg-primary/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-secondary/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-0 left-1/2 w-64 h-64 bg-primary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
  </div>

  <!-- Main Content -->
  <main class="flex-grow">
    <!-- Contact Section -->
    <section id="contact" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
      <div class="text-center mb-12 md:mb-20">
        <h1 class="text-4xl sm:text-5xl font-bold mb-4">
          <span class="gradient-text">Let's Connect & Collaborate</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-700 max-w-2xl mx-auto">
          Reach out and let's bring your vision to life — I typically respond within 24 hours.
        </p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12">
        <!-- Contact Form -->
        <div class="contact-card rounded-2xl shadow-soft p-6 md:p-8 hover:shadow-glow transition">
          <h2 class="text-2xl md:text-3xl font-semibold mb-6 md:mb-8">Send a Message</h2>
          <form class="space-y-4 md:space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
              <div>
                <label for="first-name" class="block text-sm font-medium mb-2">First Name *</label>
                <input type="text" id="first-name" name="first-name" required
                  class="w-full px-4 py-3 md:px-5 md:py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition placeholder-gray-400"
                  placeholder="John" />
              </div>
              <div>
                <label for="last-name" class="block text-sm font-medium mb-2">Last Name *</label>
                <input type="text" id="last-name" name="last-name" required
                  class="w-full px-4 py-3 md:px-5 md:py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition placeholder-gray-400"
                  placeholder="Doe" />
              </div>
            </div>
            <div>
              <label for="email" class="block text-sm font-medium mb-2">Email *</label>
              <input type="email" id="email" name="email" required
                class="w-full px-4 py-3 md:px-5 md:py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition placeholder-gray-400"
                placeholder="your.email@example.com" />
            </div>
            <div>
              <label for="subject" class="block text-sm font-medium mb-2">Project Type *</label>
              <select id="subject" name="subject" required
                class="w-full px-4 py-3 md:px-5 md:py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition appearance-none">
                <option value="" disabled selected>Select your project</option>
                <option value="web">Web Development</option>
                <option value="mobile">Mobile App</option>
                <option value="design">UI/UX Design</option>
                <option value="consulting">Consulting</option>
                <option value="other">Other</option>
              </select>
            </div>
            <div>
              <label for="message" class="block text-sm font-medium mb-2">Project Details *</label>
              <textarea id="message" name="message" rows="5" required
                class="w-full px-4 py-3 md:px-5 md:py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition placeholder-gray-400"
                placeholder="Tell me about your project..."></textarea>
            </div>
            <button type="submit"
              class="w-full bg-gradient-to-r from-primary to-secondary hover:from-primary/90 hover:to-secondary/90 text-white font-semibold py-3 md:py-4 px-6 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary">
              Send Message <i class="fas fa-paper-plane ml-2"></i>
            </button>
          </form>
        </div>

        <!-- Contact Information -->
        <div class="space-y-6 md:space-y-8">
          <!-- Contact Details Card -->
          <div class="contact-card rounded-2xl shadow-soft p-6 md:p-8">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6 md:mb-8">Contact Details</h2>
            <div class="space-y-6 md:space-y-8">
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-primary/10 p-3 rounded-xl">
                  <i class="fas fa-map-marker-alt text-primary text-xl md:text-2xl"></i>
                </div>
                <div class="ml-4 md:ml-6">
                  <h3 class="text-lg md:text-xl font-semibold">Location</h3>
                  <p class="mt-1 md:mt-2 text-gray-700">San Francisco Bay Area<br>Available for remote work worldwide</p>
                </div>
              </div>
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-primary/10 p-3 rounded-xl">
                  <i class="fas fa-envelope text-primary text-xl md:text-2xl"></i>
                </div>
                <div class="ml-4 md:ml-6">
                  <h3 class="text-lg md:text-xl font-semibold">Email</h3>
                  <p class="mt-1 md:mt-2 text-gray-700">hello@devportfolio.com</p>
                  <a href="mailto:hello@devportfolio.com" class="inline-block mt-2 md:mt-4 text-primary font-medium hover:text-primary/80 transition">
                    Send an email <i class="fas fa-arrow-right ml-1"></i>
                  </a>
                </div>
              </div>
              <div class="flex items-start">
                <div class="flex-shrink-0 bg-primary/10 p-3 rounded-xl">
                  <i class="fas fa-phone-alt text-primary text-xl md:text-2xl"></i>
                </div>
                <div class="ml-4 md:ml-6">
                  <h3 class="text-lg md:text-xl font-semibold">Call</h3>
                  <p class="mt-1 md:mt-2 text-gray-700">+1 (415) 555-0139<br>Mon–Fri, 9AM–6PM PST</p>
                  <a href="tel:+14155550139" class="inline-block mt-2 md:mt-4 text-primary font-medium hover:text-primary/80 transition">
                    Book a consultation <i class="fas fa-arrow-right ml-1"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <!-- Social Media Card -->
          <div class="contact-card rounded-2xl shadow-soft p-6 md:p-8">
            <h2 class="text-2xl md:text-3xl font-semibold mb-6 md:mb-8">Connect Online</h2>
            <div class="flex flex-wrap gap-3 md:gap-4">
              <a href="#" class="social-icon bg-white hover:bg-[#333] hover:text-white w-12 h-12 md:w-14 md:h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="GitHub">
                <i class="fab fa-github text-xl md:text-2xl"></i>
              </a>
              <a href="#" class="social-icon bg-white hover:bg-[#0077B5] hover:text-white w-12 h-12 md:w-14 md:h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="LinkedIn">
                <i class="fab fa-linkedin-in text-xl md:text-2xl"></i>
              </a>
              <a href="#" class="social-icon bg-white hover:bg-[#EA4C89] hover:text-white w-12 h-12 md:w-14 md:h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="Dribbble">
                <i class="fab fa-dribbble text-xl md:text-2xl"></i>
              </a>
              <a href="#" class="social-icon bg-white hover:bg-[#5865F2] hover:text-white w-12 h-12 md:w-14 md:h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="Discord">
                <i class="fab fa-discord text-xl md:text-2xl"></i>
              </a>
              <a href="#" class="social-icon bg-white hover:bg-[#1DA1F2] hover:text-white w-12 h-12 md:w-14 md:h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="Twitter">
                <i class="fab fa-twitter text-xl md:text-2xl"></i>
              </a>
              <a href="#" class="social-icon bg-white hover:bg-[#FF0000] hover:text-white w-12 h-12 md:w-14 md:h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="YouTube">
                <i class="fab fa-youtube text-xl md:text-2xl"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Additional CTA Section -->
    <section class="bg-primary/5 py-12 md:py-16">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Ready to Start Your Project?</h2>
        <p class="text-gray-700 mb-6 md:mb-8 max-w-2xl mx-auto">
          Whether you have a clear vision or just an idea, I can help you bring it to life. Let's discuss how we can work together.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
          <a href="#contact" class="bg-gradient-to-r from-primary to-secondary hover:from-primary/90 hover:to-secondary/90 text-white font-semibold py-3 px-8 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary">
            Get in Touch
          </a>
          <a href="#" class="border border-primary text-primary hover:bg-primary hover:text-white font-semibold py-3 px-8 rounded-xl transition duration-300 transform hover:-translate-y-1 shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
            View My Work
          </a>
        </div>
      </div>
    </section>
  </main>


  <!-- Back to Top Button -->
  <button id="back-to-top" aria-label="Back to top" class="fixed bottom-8 right-8 bg-primary text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
    <i class="fas fa-arrow-up"></i>
  </button>

  <!-- JavaScript -->
  <script>
    // Mobile menu toggle
    document.getElementById('menu-toggle').addEventListener('click', () => {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
      menu.classList.toggle('block');
      
      // Toggle aria-expanded attribute
      const isExpanded = document.getElementById('menu-toggle').getAttribute('aria-expanded') === 'true';
      document.getElementById('menu-toggle').setAttribute('aria-expanded', !isExpanded);
    });

    // Back to top button
    const backToTopButton = document.getElementById('back-to-top');
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.remove('opacity-0', 'invisible');
        backToTopButton.classList.add('opacity-100', 'visible');
      } else {
        backToTopButton.classList.remove('opacity-100', 'visible');
        backToTopButton.classList.add('opacity-0', 'invisible');
      }
    });

    backToTopButton.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // Set current year in footer
    document.getElementById('current-year').textContent = new Date().getFullYear();

    // Form submission handling
    const form = document.querySelector('form');
    if (form) {
      form.addEventListener('submit', (e) => {
        e.preventDefault();
        // Here you would typically send the form data to a server
        alert('Thank you for your message! I will get back to you soon.');
        form.reset();
      });
    }
  </script>


@endsection