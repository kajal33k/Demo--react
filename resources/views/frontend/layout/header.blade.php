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
