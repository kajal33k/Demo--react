@extends('frontend.layout.main')
@section('content')
    <!-- Banner Section -->
 

    <!-- Hero Section -->
    <section class="pt-2 pb-0 relative z-0 bg-[#fdf9f3]">
        <div class="max-w-7xl mx-auto px-4 flex flex-col-reverse md:flex-row items-center">
            <div class="md:w-1/2">
                <p class="text-sm uppercase tracking-wider text-[#4A2F20]/70 mb-2">Welcome to SANATGYAN VIKAS EDUTECH PRIVATE
                    LIMITED</p>
                <h2 class="text-4xl font-bold mb-4 leading-tight text-[#4A2F20]">Best Online Education Expertise</h2>
                <p class="text-[#4A2F20]/80 mb-6">
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                    blind texts.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="bg-[#4A2F20] hover:bg-[#3a2519] text-white px-6 py-3 rounded-lg font-semibold text-sm">GET
                        STARTED NOW!</a>
                    <a href="#"
                        class="bg-white hover:bg-gray-100 text-[#4A2F20] px-6 py-3 rounded-lg font-semibold text-sm border border-[#4A2F20]/20">VIEW
                        COURSE</a>
                </div>
            </div>
            <div class="md:w-1/2 mb-10 md:mb-0">
                <img src="https://cdn.pixabay.com/photo/2016/10/08/04/25/laptop-1723059_1280.png" alt="Happy student"
                    class="w-full" />
            </div>
        </div>
    </section>

    {{-- section::2 --}}
    <section class="flex flex-col lg:flex-row items-center justify-center px-6 py-16 max-w-7xl mx-auto">

        <!-- Left Image -->
        <div class="lg:w-1/2 mb-10 lg:mb-0">
            <img src="https://cdn.pixabay.com/photo/2024/10/22/10/45/business-9139222_1280.jpg" alt="Learning Girl"
                class=" w-full max-w-md mx-auto">
        </div>

        <!-- Right Content -->
        <div class="lg:w-1/2 lg:pl-12">
            <h4 class="text-black uppercase font-semibold tracking-wide text-sm mb-2">Learn Anything</h4>
            <h2 class="text-3xl md:text-4xl text-black font-bold mb-8 leading-tight">Benefits About Online Learning
                Expertise</h2>

            <!-- Card Items -->
            <div class="space-y-6">
                <!-- Item 1 -->
                <div class="flex items-start bg-[#FDF9F3] p-6 rounded-xl shadow-sm hover:shadow-2xl">
                    <div class="text-black text-3xl mr-4">
                        📘
                    </div>
                    <div>
                        <h3 class="text-lg text-black font-semibold mb-1">Online Courses</h3>
                        <p class="text-sm text-gray-700">Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="flex items-start bg-[#FDF9F3] p-6 rounded-xl shadow-sm hover:shadow-2xl">
                    <div class="text-black text-3xl mr-4">
                        📄
                    </div>
                    <div>
                        <h3 class="text-lg text-black font-semibold mb-1">Earn A Certificates</h3>
                        <p class="text-sm text-gray-700">Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="flex items-start bg-[#FDF9F3] p-6 rounded-xl shadow-sm hover:shadow-2xl">
                    <div class="text-black text-3xl mr-4">
                        👨‍🏫
                    </div>
                    <div>
                        <h3 class="text-lg text-black font-semibold mb-1">Learn with Expert</h3>
                        <p class="text-sm text-gray-700">Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- section::3 --}}

    <!-- Stats Section -->
    <section class="bg-cover bg-center bg-no-repeat relative text-white py-12"
        style="background-image: url('https://cdn.pixabay.com/photo/2020/03/18/06/54/smartphone-4942918_1280.jpg');">
        <div class="bg-black/40 absolute inset-0 z-0"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">

            <!-- Success Stories -->
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0v6" />
                </svg>
                <div class="text-2xl font-bold counter" data-target="3000">0</div>
                <div class="text-sm uppercase tracking-wide">Success Stories</div>
            </div>

            <!-- Trusted Tutors -->
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M16 10h.01M12 14h.01M20 12a8 8 0 11-16 0 8 8 0 0116 0z" />
                </svg>
                <div class="text-2xl font-bold counter" data-target="320">0</div>
                <div class="text-sm uppercase tracking-wide">Trusted Tutors</div>
            </div>

            <!-- Schedules -->
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3M16 7V3M3 11h18M5 21h14a2 2 0 002-2V7H3v12a2 2 0 002 2z" />
                </svg>
                <div class="text-2xl font-bold counter" data-target="1000">0</div>
                <div class="text-sm uppercase tracking-wide">Schedules</div>
            </div>

            <!-- Courses -->
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 mb-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20l9-5-9-5-9 5 9 5z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12l9-5-9-5-9 5 9 5z" />
                </svg>
                <div class="text-2xl font-bold counter" data-target="587">0</div>
                <div class="text-sm uppercase tracking-wide">Courses</div>
            </div>

        </div>
    </section>

    <!-- Counter Script -->

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");
    let hasAnimated = false;

    // Counter animation function
    const animateCounter = (element, target) => {
      const duration = 2000;
      const frameRate = 30;
      const totalFrames = Math.round(duration / frameRate);
      let frame = 0;

      const counter = setInterval(() => {
        frame++;
        const progress = frame / totalFrames;
        const currentValue = Math.floor(target * progress);
        element.textContent = currentValue.toLocaleString();

        if (frame === totalFrames) {
          element.textContent = target.toLocaleString();
          clearInterval(counter);
        }
      }, frameRate);
    };

    // Observer setup
    const triggerAnimation = () => {
      counters.forEach(counter => {
        const target = parseInt(counter.dataset.target, 10);
        if (!isNaN(target)) {
          animateCounter(counter, target);
        }
      });
    };

    // Use IntersectionObserver if available
    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver((entries, observerInstance) => {
        entries.forEach(entry => {
          if (entry.isIntersecting && !hasAnimated) {
            hasAnimated = true;
            triggerAnimation();
            observerInstance.disconnect();
          }
        });
      }, { threshold: 0.3 });

      const statsSection = document.querySelector("section");
      if (statsSection) {
        observer.observe(statsSection);
      }
    } else {
      // Fallback for older browsers
      triggerAnimation();
    }
  });
</script>

{{-- section::4 --}}
<section class="bg-[#fdfaf6] py-16 text-[#4A2F20]">
  <div class="max-w-6xl mx-auto px-4">
    <h2 class="text-center text-sm uppercase font-semibold text-[#4A2F20]/70 mb-2">Our Courses</h2>
    <h1 class="text-3xl md:text-4xl font-bold text-center mb-10">Explore Our Popular Online Courses</h1>

    <div class="relative group">
      <!-- Slider wrapper -->
      <div id="slider" class="flex gap-4 overflow-x-auto scroll-smooth pb-4 snap-x snap-mandatory no-scrollbar">
        <!-- Course Card 1 -->
        <div class="min-w-[200px] bg-white shadow-lg rounded-xl p-4 flex-shrink-0 snap-start">
          <div class="flex items-center justify-center mb-4">
            <img src="https://cdn.pixabay.com/photo/2024/05/26/21/06/computer-8789503_1280.png" class="w-12 h-12" alt="Course Icon">
          </div>
          <h3 class="font-semibold text-lg mb-2">Basic Fundamentals for Software Engineering</h3>
          <div class="text-[#4A2F20]/80 text-sm mb-1">⭐ 5.0 &nbsp; • &nbsp; by John Smith</div>
          <div class="text-sm text-[#4A2F20]/70 mb-4">50 lectures (190 hrs)</div>
          <div class="bg-[#f5f2ef] text-[#4A2F20] text-sm px-3 py-1 rounded mb-4">$100 All Course / $15 per month</div>
          <button class="w-full border border-[#4A2F20] hover:bg-[#4A2F20] hover:text-white text-[#4A2F20] font-semibold py-2 rounded transition duration-300">ENROLL NOW!</button>
        </div>

        <!-- Course Card 2 -->
        <div class="min-w-[200px] bg-white shadow-lg rounded-xl p-6 flex-shrink-0 snap-start">
          <div class="flex items-center justify-center mb-4">
            <img src="https://cdn.pixabay.com/photo/2024/05/26/21/06/computer-8789503_1280.png" class="w-12 h-12" alt="Course Icon">
          </div>
          <h3 class="font-semibold text-lg mb-2">Enhancing Adobe Photoshop CC 2020 Skills</h3>
          <div class="text-[#4A2F20]/80 text-sm mb-1">⭐ 5.0 &nbsp; • &nbsp; by John Smith</div>
          <div class="text-sm text-[#4A2F20]/70 mb-4">50 lectures (190 hrs)</div>
          <div class="bg-[#f5f2ef] text-[#4A2F20] text-sm px-3 py-1 rounded mb-4">$100 All Course / $15 per month</div>
          <button class="w-full border border-[#4A2F20] hover:bg-[#4A2F20] hover:text-white text-[#4A2F20] font-semibold py-2 rounded transition duration-300">ENROLL NOW!</button>
        </div>

        <!-- Course Card 3 -->
        <div class="min-w-[200px] bg-white shadow-lg rounded-xl p-6 flex-shrink-0 snap-start">
          <div class="flex items-center justify-center mb-4">
            <img src="https://cdn.pixabay.com/photo/2024/05/26/21/06/computer-8789503_1280.png" class="w-12 h-12" alt="Course Icon">
          </div>
          <h3 class="font-semibold text-lg mb-2">HTML, CSS, and JavaScript for Web Developers</h3>
          <div class="text-[#4A2F20]/80 text-sm mb-1">⭐ 5.0 &nbsp; • &nbsp; by John Smith</div>
          <div class="text-sm text-[#4A2F20]/70 mb-4">50 lectures (190 hrs)</div>
          <div class="bg-[#f5f2ef] text-[#4A2F20] text-sm px-3 py-1 rounded mb-4">$100 All Course / $15 per month</div>
          <button class="w-full border border-[#4A2F20] hover:bg-[#4A2F20] hover:text-white text-[#4A2F20] font-semibold py-2 rounded transition duration-300">ENROLL NOW!</button>
        </div>

        <!-- Course Card 4 -->
        <div class="min-w-[200px] bg-white shadow-lg rounded-xl p-6 flex-shrink-0 snap-start">
          <div class="flex items-center justify-center mb-4">
            <img src="https://cdn.pixabay.com/photo/2024/05/26/21/06/computer-8789503_1280.png" class="w-12 h-12" alt="Course Icon">
          </div>
          <h3 class="font-semibold text-lg mb-2">Advanced React Patterns and Performance</h3>
          <div class="text-[#4A2F20]/80 text-sm mb-1">⭐ 5.0 &nbsp; • &nbsp; by John Smith</div>
          <div class="text-sm text-[#4A2F20]/70 mb-4">50 lectures (190 hrs)</div>
          <div class="bg-[#f5f2ef] text-[#4A2F20] text-sm px-3 py-1 rounded mb-4">$100 All Course / $15 per month</div>
          <button class="w-full border border-[#4A2F20] hover:bg-[#4A2F20] hover:text-white text-[#4A2F20] font-semibold py-2 rounded transition duration-300">ENROLL NOW!</button>
        </div>

        <!-- Course Card 5 -->
        <div class="min-w-[200px] bg-white shadow-lg rounded-xl p-6 flex-shrink-0 snap-start">
          <div class="flex items-center justify-center mb-4">
            <img src="https://cdn.pixabay.com/photo/2024/05/26/21/06/computer-8789503_1280.png" class="w-12 h-12" alt="Course Icon">
          </div>
          <h3 class="font-semibold text-lg mb-2">Data Science Fundamentals with Python</h3>
          <div class="text-[#4A2F20]/80 text-sm mb-1">⭐ 5.0 &nbsp; • &nbsp; by John Smith</div>
          <div class="text-sm text-[#4A2F20]/70 mb-4">50 lectures (190 hrs)</div>
          <div class="bg-[#f5f2ef] text-[#4A2F20] text-sm px-3 py-1 rounded mb-4">$100 All Course / $15 per month</div>
          <button class="w-full border border-[#4A2F20] hover:bg-[#4A2F20] hover:text-white text-[#4A2F20] font-semibold py-2 rounded transition duration-300">ENROLL NOW!</button>
        </div>
      </div>

      <!-- Navigation Arrows -->
      {{-- <button id="prevBtn" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#4A2F20] text-white p-3 rounded-full shadow hover:bg-[#3e261b] z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 disabled:opacity-30" aria-label="Previous">
        &#10094;
      </button>
      <button id="nextBtn" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#4A2F20] text-white p-3 rounded-full shadow hover:bg-[#3e261b] z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 disabled:opacity-30" aria-label="Next">
        &#10095;
      </button> --}}
    </div>
  </div>
</section>

<style>
  .no-scrollbar::-webkit-scrollbar {
    display: none;
  }
  .no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('slider');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const cards = document.querySelectorAll('.min-w-[300px]');
    const cardWidth = cards[0].offsetWidth + 24; // width + gap
    let autoScrollInterval;
    let isHovering = false;

    // Initialize buttons
    updateButtons();

    // Navigation functions
    function scrollToNext() {
      const maxScroll = slider.scrollWidth - slider.clientWidth;
      if (slider.scrollLeft >= maxScroll - 10) {
        slider.scrollTo({ left: 0, behavior: 'smooth' });
      } else {
        slider.scrollBy({ left: cardWidth, behavior: 'smooth' });
      }
      updateButtons();
    }

    function scrollToPrev() {
      if (slider.scrollLeft <= 10) {
        const maxScroll = slider.scrollWidth - slider.clientWidth;
        slider.scrollTo({ left: maxScroll, behavior: 'smooth' });
      } else {
        slider.scrollBy({ left: -cardWidth, behavior: 'smooth' });
      }
      updateButtons();
    }

    // Button event listeners
    nextBtn.addEventListener('click', scrollToNext);
    prevBtn.addEventListener('click', scrollToPrev);

    // Update button states based on scroll position
    function updateButtons() {
      const maxScroll = slider.scrollWidth - slider.clientWidth;
      prevBtn.disabled = slider.scrollLeft <= 10;
      nextBtn.disabled = slider.scrollLeft >= maxScroll - 10;
    }

    // Auto-scroll functionality
    function startAutoScroll() {
      if (!isHovering) {
        autoScrollInterval = setInterval(scrollToNext, 5000);
      }
    }

    function stopAutoScroll() {
      clearInterval(autoScrollInterval);
    }

    // Pause auto-scroll on hover
    slider.addEventListener('mouseenter', () => {
      isHovering = true;
      stopAutoScroll();
    });

    slider.addEventListener('mouseleave', () => {
      isHovering = false;
      startAutoScroll();
    });

    // Update buttons on scroll
    slider.addEventListener('scroll', updateButtons);

    // Start auto-scroll
    startAutoScroll();

    // Cleanup on window unload
    window.addEventListener('beforeunload', () => {
      stopAutoScroll();
    });
  });
</script>

  
{{-- section::5 --}}
<section class="py-16 px-6 lg:px-24">
  <div class="text-center mb-12">
    <h4 class="text-lg font-semibold text-black uppercase tracking-wider">Courses</h4>
    <h2 class="text-4xl font-bold text-black mt-2">Browse Our Online Courses</h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- Reusable Card -->
    <div class="bg-[#fdfaf6] p-6 rounded-xl shadow-lg hover:bg-[#f8eddd] transition">
      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-4">
          🎨
        </div>
        <h3 class="text-xl font-semibold mb-1 text-black">Art & Design</h3>
        <p class="text-sm text-black">25 Courses</p>
      </div>
    </div>

    <!-- Duplicate and change icons/titles below -->
    <div class="bg-[#fdfaf6] p-6 rounded-xl shadow-lg hover:bg-[#f6e7d5] transition">
      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-4">💻</div>
        <h3 class="text-xl font-semibold mb-1 text-black">Computer Science</h3>
        <p class="text-sm text-black">10 Courses</p>
      </div>
    </div>

    <div class="bg-[#fdfaf6] p-6 rounded-xl shadow-lg hover:bg-[#fdf1e2] transition">
      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-4">🧠</div>
        <h3 class="text-xl font-semibold mb-1 text-black">UI/UX Design</h3>
        <p class="text-sm text-black">25 Courses</p>
      </div>
    </div>

    <div class="bg-[#fdfaf6] p-6 rounded-xl shadow-lg hover:bg-[#fef4e6] transition">
      <div class="flex flex-col items-center text-center">
        <div class="text-4xl mb-4">📜</div>
        <h3 class="text-xl font-semibold mb-1 text-black">History & Archeologic</h3>
        <p class="text-sm text-black">25 Courses</p>
      </div>
    </div>

    <!-- Add more categories following the same structure -->
  </div>
</section>
    
<section class="py-16 px-4 sm:px-8 lg:px-20">
  <div class="text-center mb-12">
    <h4 class="text-sm font-semibold text-black uppercase tracking-wider mb-1">Testimonial</h4>
    <h2 class="text-3xl sm:text-4xl font-bold text-black">Our Successful Students</h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Card 1 -->
    <div class="bg-[#f3eee9] rounded-xl shadow-lg p-6 flex flex-col gap-4 hover:bg-[#efe1d2] transition">
      <div class="flex items-center gap-4">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Roger Scott" class="w-14 h-14 rounded-full object-cover">
        <div>
          <h3 class="text-lg font-semibold text-black">ROGER SCOTT</h3>
          <p class="text-sm text-black">Marketing Manager</p>
        </div>
      </div>
      <p class="text-sm text-black leading-relaxed">
        "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
      </p>
    </div>

    <!-- Active Card -->
    <div class="bg-[#f3ebe3] rounded-xl shadow-xl p-6 flex flex-col gap-4 border-2 border-[#E9BE90]">
      <div class="flex items-center gap-4">
        <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Roger Scott" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h3 class="text-lg font-bold text-black">ROGER SCOTT</h3>
          <p class="text-sm text-black">Marketing Manager</p>
        </div>
      </div>
      <p class="text-sm text-black leading-relaxed">
        "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
      </p>
    </div>

    <!-- Card 3 -->
    <div class="bg-[#f0ece8] rounded-xl shadow-lg p-6 flex flex-col gap-4 hover:bg-[#fcf1e6] transition">
      <div class="flex items-center gap-4">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Roger Scott" class="w-14 h-14 rounded-full object-cover">
        <div>
          <h3 class="text-lg font-semibold text-black">ROGER SCOTT</h3>
          <p class="text-sm text-black">Marketing Manager</p>
        </div>
      </div>
      <p class="text-sm text-black leading-relaxed">
        "Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts."
      </p>
    </div>

  </div>

  <!-- Pagination dots -->
  <div class="flex justify-center gap-2 mt-10">
    <span class="w-3 h-1.5 bg-[var(--light)] rounded-full"></span>
    <span class="w-6 h-1.5 bg-white rounded-full"></span>
    <span class="w-3 h-1.5 bg-[var(--light)] rounded-full"></span>
  </div>
</section>




  <section class="py-16 px-4 sm:px-8 lg:px-20">
    <div class="text-center mb-12">
      <h4 class="text-sm font-semibold uppercase tracking-wider text-[var(--accent-dark)]">Our Blog</h4>
      <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">Recent From Blog</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Blog Card -->
      <div class="bg-[#FDF9F3] rounded-xl shadow-lg overflow-hidden transition hover:shadow-xl">
        <img src="https://cdn.pixabay.com/photo/2023/05/16/13/40/ai-generated-7997620_1280.jpg" alt="Blog image" class="w-full h-60 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
            <span class="flex items-center gap-1">
              <svg class="w-4 h-4 text-[var(--accent-dark)]" fill="currentColor" viewBox="0 0 20 20"><path d="M6 2a1 1 0 00-1 1v1h10V3a1 1 0 00-1-1H6zM4 6v10a2 2 0 002 2h8a2 2 0 002-2V6H4zm3 2h2v2H7V8zm0 4h2v2H7v-2zm4-4h2v2h-2V8zm0 4h2v2h-2v-2z"/></svg>
              Admin
            </span>
            <span class="flex items-center gap-1">
              <svg class="w-4 h-4 text-[var(--accent-dark)]" fill="currentColor" viewBox="0 0 20 20"><path d="M6 2a1 1 0 00-1 1v1h10V3a1 1 0 00-1-1H6zM4 6v10a2 2 0 002 2h8a2 2 0 002-2V6H4zm3 2h6v2H7V8z"/></svg>
              Jan. 18, 2021
            </span>
            <span class="flex items-center gap-1 text-[var(--accent-dark)] font-medium">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M18 13V7a1 1 0 00-1-1h-2V5a3 3 0 00-6 0v1H5a1 1 0 00-1 1v6l-2 2v1h18v-1l-2-2z"/></svg>
              3 Comments
            </span>
          </div>
          <h3 class="text-lg font-semibold mb-2 text-black transition">
            Build your Dream Software & Engineering Career
          </h3>
          <p class="text-sm text-gray-600">
            A small river named Duden flows by their place and supplies it with the necessary regelialia.
          </p>
        </div>
      </div>

      <!-- Repeat the card as needed (x2 below) -->
      <div class="bg-[#FDF9F3] rounded-xl shadow-lg overflow-hidden transition hover:shadow-xl">
        <img src="https://cdn.pixabay.com/photo/2023/05/16/13/40/ai-generated-7997620_1280.jpg" alt="Blog image" class="w-full h-60 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
            <span class="flex items-center gap-1 text-[var(--accent-dark)]">👤 Admin</span>
            <span class="flex items-center gap-1">📅 Jan. 18, 2021</span>
            <span class="flex items-center gap-1 text-[var(--accent-dark)]">💬 3 Comments</span>
          </div>
          <h3 class="text-lg font-semibold mb-2 text-black transition">
            Build your Dream Software & Engineering Career
          </h3>
          <p class="text-sm text-gray-600">
            A small river named Duden flows by their place and supplies it with the necessary regelialia.
          </p>
        </div>
      </div>

      <div class="bg-[#FDF9F3] rounded-xl shadow-lg overflow-hidden transition hover:shadow-xl">
        <img src="https://cdn.pixabay.com/photo/2023/05/16/13/40/ai-generated-7997620_1280.jpg" alt="Blog image" class="w-full h-60 object-cover">
        <div class="p-6">
          <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
            <span class="flex items-center gap-1 text-[var(--accent-dark)]">👤 Admin</span>
            <span class="flex items-center gap-1">📅 Jan. 18, 2021</span>
            <span class="flex items-center gap-1 text-[var(--accent-dark)]">💬 3 Comments</span>
          </div>
          <h3 class="text-lg font-semibold mb-2 text-black transition">
            Build your Dream Software & Engineering Career
          </h3>
          <p class="text-sm text-gray-600">
            A small river named Duden flows by their place and supplies it with the necessary regelialia.
          </p>
        </div>
      </div>

    </div>
  </section>

  

   

    <section class="py-20 px-4 sm:px-8 lg:px-20">
      <div class="text-center mb-16">
        <h4 class="text-[#181816] font-semibold uppercase tracking-widest text-sm mb-2">Our Pricing</h4>
        <h2 class="text-4xl sm:text-5xl font-bold text-black">Pricing & Packages</h2>
      </div>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
        
        <!-- Pricing Card -->
        <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition duration-300">
          <h3 class="text-sm font-bold uppercase tracking-wide text-gray-700 mb-3">Basic Plan</h3>
          <p class="text-3xl font-bold text-black mb-4"><span class="text-gray-500 text-lg align-top">$</span>49K</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
          </p>
          <a href="#" class="inline-block border border-[#d4984f] text-black font-medium px-6 py-2 rounded hover:bg-[#d9994a] hover:text-white transition">
            Get Started
          </a>
        </div>
  
        <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition duration-300">
          <h3 class="text-sm font-bold uppercase tracking-wide text-gray-700 mb-3">Beginner Plan</h3>
          <p class="text-3xl font-bold text-black mb-4"><span class="text-gray-500 text-lg align-top">$</span>79K</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
          </p>
          <a href="#" class="inline-block border border-[#eca54e] text-black font-medium px-6 py-2 rounded hover:bg-[#d69546] hover:text-white transition">
            Get Started
          </a>
        </div>
  
        <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition duration-300">
          <h3 class="text-sm font-bold uppercase tracking-wide text-gray-700 mb-3">Premium Plan</h3>
          <p class="text-3xl font-bold text-black mb-4"><span class="text-gray-500 text-lg align-top">$</span>109K</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
          </p>
          <a href="#" class="inline-block border border-[#cf9956] text-black font-medium px-6 py-2 rounded hover:bg-[#e09b46] hover:text-white transition">
            Get Started
          </a>
        </div>
  
        <div class="bg-white rounded-xl shadow-md p-8 text-center hover:shadow-xl transition duration-300">
          <h3 class="text-sm font-bold uppercase tracking-wide text-gray-700 mb-3">Ultimate Plan</h3>
          <p class="text-3xl font-bold text-black mb-4"><span class="text-gray-500 text-lg align-top">$</span>149K</p>
          <p class="text-gray-600 text-sm leading-relaxed mb-6">
            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
          </p>
          <a href="#" class="inline-block border border-[#f7b96d] text-black font-medium px-6 py-2 rounded hover:bg-[#e2a151] hover:text-white transition">
            Get Started
          </a>
        </div>
  
      </div>
    </section>
  
 
@endsection
