<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Professional Developer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#423037',
            secondary: '#6D4C41',
            dark: '#2E1F24',
            light: '#F3F0EF',
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          boxShadow: {
            'soft': '0 10px 30px -10px rgba(0, 0, 0, 0.1)',
            'glow': '0 0 20px 5px rgba(108, 78, 69, 0.2)',
          }
        }
      }
    }
  </script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #F3F0EF 0%, #E0D6D3 100%);
    }
    .gradient-text {
      background: linear-gradient(90deg, #423037 0%, #6D4C41 100%);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .contact-card {
      backdrop-filter: blur(10px);
      background: rgba(255, 255, 255, 0.85);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .social-icon {
      transition: all 0.3s ease;
    }
    .social-icon:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px -5px rgba(108, 78, 69, 0.3);
    }
    .input-focus:focus {
      box-shadow: 0 0 0 3px rgba(108, 78, 69, 0.3);
    }
    @keyframes blob {
      0% { transform: translate(0px, 0px) scale(1); }
      33% { transform: translate(30px, -50px) scale(1.1); }
      66% { transform: translate(-20px, 20px) scale(0.9); }
      100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob {
      animation: blob 7s infinite;
    }
    .animation-delay-2000 { animation-delay: 2s; }
    .animation-delay-4000 { animation-delay: 4s; }
  </style>
</head>
<body class="min-h-screen  text-dark">

     <!-- Navbar -->
  <header class="w-full bg-[#4f3440] shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        
        <!-- Logo -->
        <div class="text-2xl font-bold tracking-wide text-[#edbd5c]">JONY.</div>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex space-x-8 text-sm font-medium">
          <a href="#" class="hover:text-white transition text-[#edbd5c]">Home</a>
          <a href="#" class="hover:text-white transition text-[#edbd5c]">Works</a>
          <a href="#" class="hover:text-white transition text-[#edbd5c]">Services</a>

          <!-- Pages Dropdown -->
          <div class="relative group">
            <button aria-haspopup="true" class="flex items-center space-x-1 text-[#edbd5c] hover:text-white transition">
              <span>Pages</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div
              class="absolute left-0 mt-2 w-32 bg-[#3A262F] text-sm rounded shadow-lg opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition">
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38]">Subpage 1</a>
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38]">Subpage 2</a>
            </div>
          </div>

          <a href="#" class="text-[#edbd5c] hover:text-white transition">About</a>

          <!-- Blog Dropdown -->
          <div class="relative group">
            <button aria-haspopup="true" class="flex items-center space-x-1 text-[#edbd5c] hover:text-white transition">
              <span>Blog</span>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
            </button>
            <div
              class="absolute left-0 mt-2 w-32 bg-[#3A262F] text-sm rounded shadow-lg opacity-0 group-hover:opacity-100 pointer-events-none group-hover:pointer-events-auto transition">
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38]">Blog Post</a>
              <a href="#" class="block px-4 py-2 text-[#edbd5c] hover:bg-[#4A2E38]">Blog Grid</a>
            </div>
          </div>

          <a href="#" class="text-[#edbd5c] hover:text-white transition">Contact</a>
        </nav>

        <!-- CTA -->
        <div class="hidden md:block">
          <a href="#" class="border border-[#E09B61] text-[#E09B61] hover:bg-[#E09B61] hover:text-[#2E1E25] font-semibold px-5 py-2 rounded transition">
            Let’s Talk
          </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button id="menu-toggle" aria-label="Toggle mobile menu" class="text-[#E09B61]">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
              d="M4 6h16M4 12h16M4 18h16" /></svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 space-y-2 text-sm font-medium">
      <a href="#" class="block text-[#edbd5c] hover:text-white">Home</a>
      <a href="#" class="block text-[#edbd5c] hover:text-white">Works</a>
      <a href="#" class="block text-[#edbd5c] hover:text-white">Services</a>
      <a href="#" class="block text-[#edbd5c] hover:text-white">Pages</a>
      <a href="#" class="block text-[#edbd5c] hover:text-white">About</a>
      <a href="#" class="block text-[#edbd5c] hover:text-white">Blog</a>
      <a href="#" class="block text-[#edbd5c] hover:text-white">Contact</a>
      <a href="#" class="block text-[#edbd5c] mt-2 border border-[#E09B61] text-center px-4 py-2 rounded hover:bg-[#E09B61] hover:text-[#2E1E25]">
        Let’s Talk
      </a>
    </div>
  </header>

  <!-- JavaScript for menu toggle -->
  <script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    });
  </script> 

  <!-- Animated Background -->
  <div class="fixed inset-0 overflow-hidden -z-10">
    <div class="absolute top-0 left-1/4 w-64 h-64 bg-primary/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-secondary/20 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute bottom-0 left-1/2 w-64 h-64 bg-primary/10 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
  </div>

  <!-- Contact Section -->
  <section class="max-w-6xl mx-auto mt-8">
    <div class="text-center mb-16">
      <h1 class="text-5xl font-bold mb-4">
        <span class="gradient-text">Let’s Connect & Collaborate</span>
      </h1>
      <p class="text-xl text-gray-700 max-w-2xl mx-auto">
        Reach out and let's bring your vision to life — I typically respond within 24 hours.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Form -->
      <div class="contact-card rounded-2xl shadow-soft p-8 hover:shadow-glow transition">
        <h2 class="text-3xl font-semibold mb-8">Send a Message</h2>
        <form class="space-y-6">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="first-name" class="block text-sm font-medium mb-2">First Name</label>
              <input type="text" id="first-name" name="first-name"
                class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition" />
            </div>
            <div>
              <label for="last-name" class="block text-sm font-medium mb-2">Last Name</label>
              <input type="text" id="last-name" name="last-name"
                class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition" />
            </div>
          </div>
          <div>
            <label for="email" class="block text-sm font-medium mb-2">Email</label>
            <input type="email" id="email" name="email"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition" />
          </div>
          <div>
            <label for="subject" class="block text-sm font-medium mb-2">Project Type</label>
            <select id="subject" name="subject"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition">
              <option value="" disabled selected>Select your project</option>
              <option value="web">Web Development</option>
              <option value="mobile">Mobile App</option>
              <option value="design">UI/UX Design</option>
              <option value="consulting">Consulting</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div>
            <label for="message" class="block text-sm font-medium mb-2">Project Details</label>
            <textarea id="message" name="message" rows="5"
              class="w-full px-5 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-primary input-focus bg-white/70 transition"></textarea>
          </div>
          <button type="submit"
            class="w-full bg-gradient-to-r from-primary to-secondary hover:from-primary/90 hover:to-secondary/90 text-white font-semibold py-4 px-6 rounded-xl transition transform hover:-translate-y-1 shadow-md hover:shadow-lg">
            Send Message <i class="fas fa-paper-plane ml-2"></i>
          </button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="space-y-8">
        <div class="contact-card rounded-2xl shadow-soft p-8">
          <h2 class="text-3xl font-semibold mb-8">Contact Details</h2>
          <div class="space-y-8">
            <div class="flex items-start">
              <div class="flex-shrink-0 bg-primary/10 p-3 rounded-xl">
                <i class="fas fa-map-marker-alt text-primary text-2xl"></i>
              </div>
              <div class="ml-6">
                <h3 class="text-xl font-semibold">Location</h3>
                <p class="mt-2 text-gray-700">San Francisco Bay Area<br>Available for remote work</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 bg-primary/10 p-3 rounded-xl">
                <i class="fas fa-envelope text-primary text-2xl"></i>
              </div>
              <div class="ml-6">
                <h3 class="text-xl font-semibold">Email</h3>
                <p class="mt-2 text-gray-700">hello@devportfolio.com</p>
              </div>
            </div>
            <div class="flex items-start">
              <div class="flex-shrink-0 bg-primary/10 p-3 rounded-xl">
                <i class="fas fa-phone-alt text-primary text-2xl"></i>
              </div>
              <div class="ml-6">
                <h3 class="text-xl font-semibold">Call</h3>
                <p class="mt-2 text-gray-700">+1 (415) 555-0139<br>Mon–Fri, 9AM–6PM PST</p>
                <a href="#" class="inline-block mt-4 text-primary font-medium hover:text-primary/80 transition">Book a consultation <i class="fas fa-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="contact-card rounded-2xl shadow-soft p-8">
          <h2 class="text-3xl font-semibold mb-8">Connect Online</h2>
          <div class="flex flex-wrap gap-4">
            <a href="#" class="social-icon bg-white hover:bg-primary hover:text-white w-14 h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="GitHub"><i class="fab fa-github text-2xl"></i></a>
            <a href="#" class="social-icon bg-white hover:bg-secondary hover:text-white w-14 h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="LinkedIn"><i class="fab fa-linkedin-in text-2xl"></i></a>
            <a href="#" class="social-icon bg-white hover:bg-pink-600 hover:text-white w-14 h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="Dribbble"><i class="fab fa-dribbble text-2xl"></i></a>
            <a href="#" class="social-icon bg-white hover:bg-indigo-600 hover:text-white w-14 h-14 rounded-xl flex items-center justify-center text-gray-700 shadow-md" aria-label="Discord"><i class="fab fa-discord text-2xl"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <footer class="bg-[#3A262F] text-white pt-12 pb-8">
        <div class="container mx-auto px-6">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <!-- Company Info -->
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">Company Name</h3>
                    <p class="text-gray-400 mb-4">
                        Building digital experiences that matter. We create solutions that help businesses grow in the digital world.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="Twitter">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="Facebook">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="Instagram">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Services</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Portfolio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span>123 Business Ave, Suite 456<br>San Francisco, CA 94107</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt mr-3"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <span>info@company.com</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-800 my-6"></div>

            <!-- Copyright and Legal -->
            <div class="flex flex-col md:flex-row justify-between items-center text-gray-500 text-sm">
                <div class="mb-4 md:mb-0">
                    &copy; 2025 Company Name. All rights reserved.
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors duration-300">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors duration-300">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
