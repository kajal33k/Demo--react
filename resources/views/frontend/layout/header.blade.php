<!-- Top Bar -->
<div class="bg-[#4A2F20] text-white text-sm z-50">
  <div class="max-w-7xl mx-auto px-4 py-2 flex flex-col md:flex-row justify-between items-center space-y-2 md:space-y-0">
    <div class="flex items-center space-x-4">
      {{-- <p>Welcome to Academia Online Learning!</p> --}}
      <p class="hidden sm:block">
        Email: <a href="mailto:info@academia.com" class="underline">info@sanatgyan.com</a>
      </p>
    </div>
    <div class="flex items-center space-x-4">
      <!-- Social Icons -->
      <a href="#" class="hover:text-[#DBB184] transition">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 4.01a9.03 9.03 0 0 1-2.6.71A4.52 4.52 0 0 0 21.4 2a9.05 9.05 0 0 1-2.88 1.1A4.5 4.5 0 0 0 12 7.5a12.8 12.8 0 0 1-9.3-4.7 4.5 4.5 0 0 0 1.4 6A4.5 4.5 0 0 1 2 8.1v.05a4.5 4.5 0 0 0 3.6 4.4 4.5 4.5 0 0 1-2 .08 4.5 4.5 0 0 0 4.2 3.1A9 9 0 0 1 2 19.54 12.73 12.73 0 0 0 8.29 21c7.55 0 11.68-6.25 11.68-11.68v-.54A8.35 8.35 0 0 0 22 4.01z"/></svg>
      </a>
      <a href="#" class="hover:text-[#DBB184] transition">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M21.5 2h-19C1.7 2 1 2.7 1 3.5v17c0 .8.7 1.5 1.5 1.5h19c.8 0 1.5-.7 1.5-1.5v-17c0-.8-.7-1.5-1.5-1.5zM9 17V7l8 5-8 5z"/></svg>
      </a>
      <!-- Login/Register -->
      <a href="#" class="hover:text-[#DBB184]">Login</a>
      <span>/</span>
      <a href="#" class="hover:text-[#DBB184]">Register</a>
    </div>
  </div>
</div>

<!-- Navbar -->
<header class="bg-[#e9d6c3] backdrop-blur-md w-full top-8 md:top-[36px] z-40 shadow">
  <div class="max-w-7xl mx-auto px-4 py-2 flex justify-between items-center">
    <!-- Logo -->
    <div>
     
      <img src="{{asset('asset/image/logo (2).png')}}" alt="" class="w-44 h-20">
    </div>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex space-x-6 font-medium text-[#4A2F20]">
      <a href="#">Home</a>
      <a href="#">All Courses</a>
      <a href="#">About</a>
      <a href="#">Team</a>
      <a href="#">Pricing</a>
      <a href="#">Journal</a>
      <a href="#">Contact</a>
    </nav>

    <!-- Contact Info -->
    <div class="hidden md:flex items-center space-x-6 text-[#4A2F20] text-sm">
      {{-- <div class="flex items-center space-x-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h18M3 12h18M3 19h18" />
        </svg>
        <p><strong>8:00AM - 8:00PM</strong></p>
      </div> --}}
      <div class="flex items-center space-x-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 2a2 2 0 012 2v4a2 2 0 01-2 2H8l-4 4V6a2 2 0 012-2h10z" />
        </svg>
        <p>+91 9874783847</p>
      </div>
    </div>

    <!-- Mobile Button -->
    <div class="md:hidden">
      <button id="menu-toggle" class="text-[#4A2F20] focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Nav -->
  <div id="mobile-menu" class="md:hidden hidden bg-[#eae1d6] backdrop-blur-md px-4 pb-4">
    <nav class="flex flex-col space-y-2 text-[#4A2F20] font-medium">
      <a href="#">Home</a>
      <a href="#">All Courses</a>
      <a href="#">About</a>
      <a href="#">Team</a>
      <a href="#">Pricing</a>
      <a href="#">Journal</a>
      <a href="#">Contact</a>
    </nav>

    <div class="mt-4 space-y-2 text-[#4A2F20] text-sm">
      {{-- <div class="flex items-center space-x-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 5h18M3 12h18M3 19h18" />
        </svg>
        <p><strong>8:00AM - 8:00PM</strong></p>
      </div> --}}
      <div class="flex items-center space-x-2">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 2a2 2 0 012 2v4a2 2 0 01-2 2H8l-4 4V6a2 2 0 012-2h10z" />
        </svg>
        <p>+91 9847943743</p>
      </div>
      <button class="w-full bg-[#4A2F20] hover:bg-[#3a2519] text-white font-bold px-4 py-2 rounded-lg">GET CERTIFICATE</button>
    </div>
  </div>
</header>

<!-- JS for Mobile Toggle -->
<script>
  document.getElementById('menu-toggle').addEventListener('click', () => {
    document.getElementById('mobile-menu').classList.toggle('hidden');
  });
</script>
