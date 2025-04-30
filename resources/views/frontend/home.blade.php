
@extends('frontend.layout.main')
@section('content')
  
  <!-- Banner Section -->
  <section class="relative min-h-screen flex flex-col-reverse md:flex-row items-center justify-between px-6 md:px-24 py-16 overflow-hidden bg-[#2E1B24]">
    <!-- Diagonal Background Layers -->
    <div class="absolute inset-0 z-0">
      <div class="absolute left-0 top-0 w-[120%] h-full bg-[#3B2933] rotate-12 origin-left opacity-40"></div>
      <div class="absolute right-0 top-0 w-[120%] h-full bg-[#3B2933] -rotate-12 origin-right opacity-40"></div>
    </div>
  
    <!-- Text Content -->
    <div class="relative z-10 max-w-2xl text-center md:text-left">
      <h1 class="text-4xl md:text-6xl font-light text-white leading-tight mb-4">
        Hi There, I Am <span class="font-semibold text-[#edbd5c]">Jony</span>
      </h1>
      <h2 class="text-2xl md:text-4xl text-[#edbd5c] font-medium mb-8">Creative Director</h2>
      <a href="#works" class="inline-block border border-[#edbd5c] text-[#edbd5c] px-6 py-3 rounded-md hover:bg-[#e6b24a] hover:text-white transition duration-300">
        View Works
      </a>
    </div>
  
    <!-- Profile Image -->
    <div class="relative z-10 mb-10 md:mb-0">
      <img src="https://cdn.pixabay.com/photo/2016/03/31/21/18/computer-1296325_1280.png"
           alt="Creative work setup by Jony"
           class="w-[350px] md:w-[400px] h-auto object-contain drop-shadow-lg" />
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
  
@endsection
