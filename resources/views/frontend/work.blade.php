@extends('frontend.layout.main')
@section('content')
  <!-- Hero Section -->
  <section class="text-center py-16 px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 text-[#EDBD5C]">My Work</h1>
    <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto">
      A curated selection of projects I’ve designed and developed as a full-stack web developer.
    </p>
  </section>

  <!-- Projects Grid -->
  <section class="px-4 py-10 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Project Card -->
      <div class="bg-[#624c56] rounded-2xl overflow-hidden shadow-lg hover:shadow-[#EDBD5C]/30 transition duration-300 transform hover:-translate-y-1">
        <img src="https://cdn.pixabay.com/photo/2016/10/13/16/26/web-agency-1738168_1280.jpg" alt="Project Image" class="w-full h-48 object-cover">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-[#EDBD5C] mb-2">E-Commerce Platform</h2>
          <p class="text-gray-400 mb-4">A full-featured Laravel + React eCommerce site with real-time cart and payment gateway integration.</p>
          <a href="#" class="text-[#EDBD5C] hover:underline">View Project →</a>
        </div>
      </div>

      <!-- Project Card -->
      <div class="bg-[#624c56] rounded-2xl overflow-hidden shadow-lg hover:shadow-[#EDBD5C]/30  transition duration-300 transform hover:-translate-y-1">
        <img src="https://cdn.pixabay.com/photo/2014/02/13/07/28/cms-265133_1280.jpg" alt="Project Image" class="w-full h-48 object-cover">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-[#EDBD5C] mb-2">Portfolio CMS</h2>
          <p class="text-gray-400 mb-4">A custom-built Laravel CMS allowing artists to manage and showcase their digital work easily.</p>
          <a href="#" class="text-[#EDBD5C] hover:underline">View Project →</a>
        </div>
      </div>

      <!-- Project Card -->
      <div class="bg-[#624c56] rounded-2xl overflow-hidden shadow-lg hover:shadow-[#EDBD5C]/30  transition duration-300 transform hover:-translate-y-1">
        <img src="https://cdn.pixabay.com/photo/2018/05/22/09/45/laptop-3420932_1280.jpg" alt="Project Image" class="w-full h-48 object-cover">
        <div class="p-6">
          <h2 class="text-xl font-semibold text-[#EDBD5C] mb-2">AI Recipe Generator</h2>
          <p class="text-gray-400 mb-4">AI-powered app that generates personalized recipes based on ingredients using Laravel and Tailwind.</p>
          <a href="#" class="text-[#EDBD5C] hover:underline">View Project →</a>
        </div>
      </div>

    </div>
  </section>

  <!-- Call to Action -->
  <section class="text-center py-16">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">Let’s build something great together.</h2>
    <a href="#contact" class="inline-block bg-[#EDBD5C] hover:bg-[#EDBD5C] text-white text-lg font-semibold px-8 py-3 rounded-full shadow-lg transition">Contact Me</a>
  </section>

  @endsection