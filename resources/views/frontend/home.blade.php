<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Professional Banner & Navbar</title>
  <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#423037] text-gray-100">

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

  <!-- Banner Section -->
  <section class="relative min-h-screen flex flex-col-reverse md:flex-row items-center justify-between px-6 md:px-24 py-12 overflow-hidden">
    <!-- Diagonal Background Layers -->
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-[#2E1B24]"></div>
      <div class="absolute left-0 top-0 w-[120%] h-full bg-[#3B2933] rotate-12 origin-left opacity-40"></div>
      <div class="absolute right-0 top-0 w-[120%] h-full bg-[#3B2933] -rotate-12 origin-right opacity-40"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-2xl text-center md:text-left">
      <h1 class="text-4xl md:text-6xl font-light mb-4">Hi There, I Am <span class="font-semibold">Jony</span></h1>
      <h2 class="text-3xl md:text-5xl text-[#edbd5c] font-medium mb-8">Creative Director</h2>
      <a href="#works" class="inline-block border border-[#edbd5c] text-[#edbd5c] px-6 py-3 rounded hover:bg-[#e6b24a] hover:text-white transition duration-300">
        View Works
      </a>
    </div>

    <!-- Image -->
    <div class="relative z-10 hidden md:block">
      <img src="https://cdn.pixabay.com/photo/2016/03/31/21/18/computer-1296325_1280.png" alt="Creative work setup by Jony" class="w-[400px] h-auto object-cover" />
    </div>
  </section>

  <section class="bg-[#3A262F] text-white py-16 px-6 md:px-24">
    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      
      <!-- Left Text Content -->
      <div>
        <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-snug">
          I’m a Creative director based on New York, who loves clean, simple & unique design. I also enjoy crafting
        </h2>
        <p class="text-gray-300 mb-4 leading-relaxed">
          Proin laoreet elementum ligula, ac tincidunt lorem accumsan nec. Fusce eget urna ante. Donec massa velit, varius a accumsan ac, tempor iaculis massa. Sed placerat justo sed libero varius vulputate. Ut a mi tempus massa malesuada fermentum.
        </p>
        <p class="text-gray-300 mb-6 leading-relaxed">
          Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget malesuada massa.
        </p>
        <a href="#" class="inline-block border border-[#ed9b5a] text-[#ed9b5a] hover:bg-[#ed9b5a] hover:text-[#3A262F] font-medium px-6 py-3 rounded transition duration-300">
          Download CV
        </a>
      </div>
  
      <!-- Right Skill Bars -->
      <div class="space-y-8">
        <!-- Skill 1 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium">Wireframing</span>
            <span class="text-sm">90%</span>
          </div>
          <div class="w-full h-2 rounded bg-white bg-opacity-20">
            <div class="h-2 rounded bg-[#ed9b5a] w-[90%]"></div>
          </div>
        </div>
  
        <!-- Skill 2 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium">UI/UX</span>
            <span class="text-sm">70%</span>
          </div>
          <div class="w-full h-2 rounded bg-white bg-opacity-20">
            <div class="h-2 rounded bg-[#ed9b5a] w-[70%]"></div>
          </div>
        </div>
  
        <!-- Skill 3 -->
        <div>
          <div class="flex justify-between mb-2">
            <span class="font-medium">Interaction design</span>
            <span class="text-sm">45%</span>
          </div>
          <div class="w-full h-2 rounded bg-white bg-opacity-20">
            <div class="h-2 rounded bg-[#ed9b5a] w-[45%]"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <section class="bg-[#3A262F] text-white py-16 px-6 md:px-24">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-semibold mb-12">My Services</h2>
  
      <div class="grid gap-8 md:grid-cols-3">
        
        <!-- Service Card 1 -->
        <div class="border border-[#ed9b5a] rounded-lg p-8 text-center hover:bg-[#442B34] transition duration-300">
          <div class="mb-4 flex justify-center">
            <img src="{{asset('https://cdn.pixabay.com/photo/2016/05/08/15/31/icon-1379298_1280.png')}}" alt="Web & Mobile Design Icon" class="w-12 h-12" />
          </div>
          <h3 class="text-[#ed9b5a] text-xl font-semibold mb-2">Web & Mobile Design</h3>
          <p class="text-gray-300">Sed eleifend sed nibh nec fringilla. Donec eu cursus sem vitae tristique ante libero.</p>
        </div>
  
        <!-- Service Card 2 -->
        <div class="border border-[#ed9b5a] rounded-lg p-8 text-center hover:bg-[#442B34] transition duration-300">
          <div class="mb-4 flex justify-center">
            <img src="{{asset('https://cdn.pixabay.com/photo/2016/05/08/15/31/icon-1379298_1280.png')}}" alt="Web Development Icon" class="w-12 h-12" />
          </div>
          <h3 class="text-[#ed9b5a] text-xl font-semibold mb-2">Web Development</h3>
          <p class="text-gray-300">Sed eleifend sed nibh nec fringilla. Donec eu cursus sem vitae tristique ante libero.</p>
        </div>
  
        <!-- Service Card 3 -->
        <div class="border border-[#ed9b5a] rounded-lg p-8 text-center hover:bg-[#442B34] transition duration-300">
          <div class="mb-4 flex justify-center">
            <img src="{{asset('https://cdn.pixabay.com/photo/2016/05/08/15/31/icon-1379298_1280.png')}}" alt="E-commerce Icon" class="w-12 h-12" />
          </div>
          <h3 class="text-[#ed9b5a] text-xl font-semibold mb-2">E-commerce</h3>
          <p class="text-gray-300">Sed eleifend sed nibh nec fringilla. Donec eu cursus sem vitae tristique ante libero.</p>
        </div>
  
      </div>
    </div>
  </section>
  

  <section class="bg-[#3A262F] text-white py-16 px-6 md:px-24">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-semibold mb-12">My Works</h2>
  
      <!-- Work Grid -->
      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Work Card -->
        <div>
          <img src="https://cdn.pixabay.com/photo/2024/07/31/23/04/workflow-8935726_1280.png" alt="Project 1" class="rounded-lg shadow-md mb-4" />
          <p class="text-sm text-gray-300">Mobile App</p>
          <h3 class="text-[#ed9b5a] font-medium">Colorlib App Project</h3>
        </div>
  
        <div>
          <img src="https://cdn.pixabay.com/photo/2024/07/31/23/04/workflow-8935726_1280.png" alt="Project 2" class="rounded-lg shadow-md mb-4" />
          <p class="text-sm text-gray-300">Mobile App</p>
          <h3 class="text-[#ed9b5a] font-medium">Colorlib App Project</h3>
        </div>
  
        <div>
          <img src="https://cdn.pixabay.com/photo/2024/07/31/23/04/workflow-8935726_1280.png" alt="Project 3" class="rounded-lg shadow-md mb-4" />
          <p class="text-sm text-gray-300">Mobile App</p>
          <h3 class="text-[#ed9b5a] font-medium">Colorlib App Project</h3>
        </div>
  
        <div>
          <img src="https://cdn.pixabay.com/photo/2024/07/31/23/04/workflow-8935726_1280.png" alt="Project 4" class="rounded-lg shadow-md mb-4" />
          <p class="text-sm text-gray-300">Mobile App</p>
          <h3 class="text-[#ed9b5a] font-medium">Colorlib App Project</h3>
        </div>
  
        <div>
          <img src="https://cdn.pixabay.com/photo/2024/07/31/23/04/workflow-8935726_1280.png" alt="Project 5" class="rounded-lg shadow-md mb-4" />
          <p class="text-sm text-gray-300">Mobile App</p>
          <h3 class="text-[#ed9b5a] font-medium">Colorlib App Project</h3>
        </div>
  
        <div>
          <img src="https://cdn.pixabay.com/photo/2024/07/31/23/04/workflow-8935726_1280.png" alt="Project 6" class="rounded-lg shadow-md mb-4" />
          <p class="text-sm text-gray-300">Mobile App</p>
          <h3 class="text-[#ed9b5a] font-medium">Colorlib App Project</h3>
        </div>
      </div>
  
      <!-- More Works Button -->
      <div class="mt-12 text-center">
        <a href="#" class="inline-block border border-[#ed9b5a] text-[#ed9b5a] px-6 py-2 text-sm hover:bg-[#ed9b5a] hover:text-[#3A262F] transition duration-300 rounded">
          More Works
        </a>
      </div>
    </div>
  </section>
  
  <section class="bg-[#3A262F] text-white py-16 px-4 md:px-24">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-semibold mb-12">What Clients say</h2>
  
      <!-- Swiper Container -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <p class="text-xl md:text-2xl leading-relaxed mb-8">
              “There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour or randomised words which don’t look even slightly believable.”
            </p>
            <div class="flex items-center justify-center gap-4">
              <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="Kalvin Piterson" class="w-14 h-14 rounded-full object-cover" />
              <div class="text-left">
                <h4 class="text-[#ed9b5a] font-semibold">Kalvin Piterson</h4>
                <p class="text-sm text-gray-300">Business Owner</p>
              </div>
            </div>
          </div>
  
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <p class="text-xl md:text-2xl leading-relaxed mb-8">
              “This is another testimonial to show how professional and reliable the service was. Highly recommend them!”
            </p>
            <div class="flex items-center justify-center gap-4">
              <img src="https://cdn.pixabay.com/photo/2017/06/13/12/53/profile-2398782_1280.png" alt="Jane Doe" class="w-14 h-14 rounded-full object-cover" />
              <div class="text-left">
                <h4 class="text-[#ed9b5a] font-semibold">Jane Doe</h4>
                <p class="text-sm text-gray-300">Startup Founder</p>
              </div>
            </div>
          </div>
        </div>
  
        <!-- Navigation -->
        <div class="flex justify-center gap-4 mt-10">
          <div class="swiper-button-prev w-12 h-12 border border-[#ed9b5a] rounded-full flex items-center justify-center text-[#ed9b5a] hover:bg-[#ed9b5a] hover:text-[#3A262F] transition duration-300"></div>
          <div class="swiper-button-next w-12 h-12 border border-[#ed9b5a] rounded-full flex items-center justify-center text-[#ed9b5a] hover:bg-[#ed9b5a] hover:text-[#3A262F] transition duration-300"></div>
        </div>
      </div>
    </div>
  </section>

    <div class="max-w-2xl mx-auto rounded-xl shadow-md overflow-hidden p-8">
          <div class="text-center">
              <h1 class="text-3xl md:text-4xl font-bold text-white mb-6">
                  Do you have any Project? <span class="text-white">Let's Talk</span>
              </h1>
              
              <p class="text-white mb-8 leading-relaxed max-w-lg mx-auto">
                  Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.
              </p>
              
              <div class="border-t border-gray-200 my-6 w-20 mx-auto"></div>
              
              <div class="flex justify-center space-x-6 mt-8">
                  <a href="#" class="text-white hover:text-white transition-colors duration-300" aria-label="Behance">
                      <i class="fab fa-behance text-xl"></i>
                  </a>
                  <a href="#" class="text-white hover:text-white transition-colors duration-300" aria-label="Bé">
                      <i class="fas fa-bold text-xl"></i>
                  </a>
                  <a href="#" class="text-white hover:text-white transition-colors duration-300" aria-label="Dribbble">
                      <i class="fab fa-dribbble text-xl"></i>
                  </a>
                  <a href="#" class="text-white hover:text-white transition-colors duration-300" aria-label="Medium">
                      <i class="fab fa-medium-m text-xl"></i>
                  </a>
                  <a href="#" class="text-white hover:text-white transition-colors duration-300" aria-label="LinkedIn">
                      <i class="fab fa-linkedin-in text-xl"></i>
                  </a>
                  <a href="#" class="text-white hover:text-white transition-colors duration-300" aria-label="Instagram">
                      <i class="fab fa-instagram text-xl"></i>
                  </a>
              </div>
          </div>
      </div>
  

      

  <script>
    const swiper = new Swiper('.mySwiper', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  

    <!-- Footer Section -->
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
