<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Builder.io Fusion Preview</title>

    <!-- Open Graph / Facebook -->
    <meta
      property="og:image"
      content="https://cdn.builder.io/api/v1/image/assets%2Fc5b47d20f6a943e485717e5895739988%2F56c6badd41c34fbbadac34159211505e"
    />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Builder.io Fusion Preview" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:image"
      content="https://cdn.builder.io/api/v1/image/assets%2Fc5b47d20f6a943e485717e5895739988%2F56c6badd41c34fbbadac34159211505e"
    />
    <meta name="twitter:image:alt">
  </head>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMTI 2025 - Ekonomi Kreatif</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        script: ['Dancing Script', 'cursive'],
                    },
                    colors: {
                        himti: {
                            primary: "#133D87",
                            secondary: "#608BC0", 
                            light: "#DDF0FF",
                            dark: "#0F2B5D",
                            cream: "#F4F3DF",
                            line: "#CBDDEB",
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        .font-script {
            font-family: 'Dancing Script', cursive;
        }
    </style>
  </head>
  <body class="bg-white font-sans">
    <div class="min-h-screen bg-white">
        <!-- Navbar -->
        <div class="fixed top-4 left-4 right-4 z-50">
            @include('components.navbar')
        </div>

        <main>
            <!-- Hero Section -->
            <section class="relative min-h-screen pt-32 pb-16 px-4">
                <div class="w-full mx-auto">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
                        <!-- Text Content -->
                        <div class="flex-1 space-y-6">
                            <h1 class="text-4xl md:text-6xl lg:text-8xl font-extrabold text-himti-primary leading-tight">
                                EKONOMI KREATIF
                            </h1>
                            <div class="bg-himti-secondary px-6 py-4 inline-block">
                                <h2 class="text-white text-3xl md:text-5xl lg:text-6xl font-bold">
                                    HIMTI 2025
                                </h2>
                            </div>
                            <p class="text-himti-primary text-2xl md:text-4xl lg:text-5xl font-normal italic font-script">
                                kata kata si divisi
                            </p>
                        </div>

                        <!-- Decorative Element -->
                        <div class="flex-1 flex justify-center lg:justify-end">
                            <img src="https://api.builder.io/api/v1/image/assets/TEMP/476474d2968bf63b1f1c2aa5d304fcec95812a73?width=1844" alt="Decorative Element" class="w-full max-w-md lg:max-w-lg xl:max-w-xl object-contain opacity-20">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Department Head Section -->
            <section class="py-16 px-4">
                <div class="w-full mx-auto">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <!-- Photo -->
                        <div class="flex-1 flex justify-center">
                            <div class="relative w-full max-w-lg">
                                <div class="aspect-[4/5] bg-gray-200 rounded-xl overflow-hidden">
                                    <img src="https://api.builder.io/api/v1/image/assets/TEMP/8b3be2b900a84e75530bc2ed24ebcdc3f703d7a1?width=1412" alt="Ketua Departemen" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                        <!-- Text Content -->
                        <div class="flex-1 space-y-4 text-center lg:text-left">
                            <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-himti-primary">
                                Ketua Departemen
                            </h2>
                            <h3 class="text-3xl md:text-4xl lg:text-5xl font-bold text-himti-secondary">
                                Naurah
                            </h3>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sub Departemen Section 1 -->
            <section class="py-16 px-4">
                <div class="w-full mx-auto">
                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-himti-primary mb-8">
                        Sub Departemen
                    </h2>
                    <div class="w-full h-1.5 bg-himti-line mb-12"></div>
                    <div class="flex justify-center">
                        <div class="w-full max-w-2xl">
                            <div class="aspect-[4/5] bg-gray-200 rounded-xl overflow-hidden">
                                <img src="https://api.builder.io/api/v1/image/assets/TEMP/cfb5933e02081eec7f3a04d95b67f2352ca51cce?width=1461" alt="Sub Departemen" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Program Kerja Section 1 -->
            <section class="relative py-16">
                <!-- Curved Background -->
                <div class="absolute inset-0 overflow-hidden">
                    <svg class="w-full h-full object-cover" viewBox="0 0 1920 745" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0 0C0 0 580.562 43.7348 953.051 43.7348C1325.54 43.7348 1920 0 1920 0V745C1920 745 1325.42 640.187 953.051 640.187C580.686 640.187 0 745 0 745V0Z" fill="url(#paint0_linear)"/>
                        <defs>
                            <linearGradient id="paint0_linear" x1="-713.299" y1="393.613" x2="3019.48" y2="393.613" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#133D87"/>
                                <stop offset="0.384615" stop-color="#608BC0"/>
                                <stop offset="0.519231" stop-color="#608BC0"/>
                                <stop offset="1" stop-color="#133D87"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="relative z-10 w-full mx-auto px-4">
                    <!-- Title -->
                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white text-center mb-16">
                        PROGRAM KERJA
                    </h2>

                    <!-- Cards Horizontal Scroll Container -->
                    <div id="scroll-container-1" class="relative w-full overflow-x-auto py-12 scrollbar-hide mb-5" style="scroll-behavior: smooth;">
                        <div class="flex items-end px-8 min-w-max mb-16" style="padding-bottom: 20px;">
                            <!-- Card 1 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(75px); z-index: 4; margin-left: 0px; box-shadow: rgba(0, 0, 0, 0.15) 0px 12px 40px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(50px); z-index: 5; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 14px 45px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(25px); z-index: 6; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 16px 50px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 4 (Center) -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(0px); z-index: 7; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 18px 55px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 5 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(25px); z-index: 6; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 16px 50px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 6 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(50px); z-index: 5; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 14px 45px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 7 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(75px); z-index: 4; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 12px 40px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Sub Departemen Section 2 -->
            <section class="py-16 px-4 pt-8">
                <div class="w-full mx-auto">
                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-himti-primary mb-8">
                        Sub Departemen
                    </h2>
                    <div class="w-full h-1.5 bg-himti-line mb-12"></div>
                    <div class="flex justify-center">
                        <div class="w-full max-w-2xl">
                            <div class="aspect-[4/5] bg-gray-200 rounded-xl overflow-hidden">
                                <img src="https://api.builder.io/api/v1/image/assets/TEMP/cfb5933e02081eec7f3a04d95b67f2352ca51cce?width=1461" alt="Sub Departemen" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Program Kerja Section 2 -->
            <section class="relative py-16">
                <!-- Curved Background -->
                <div class="absolute inset-0 overflow-hidden">
                    <svg class="w-full h-full object-cover" viewBox="0 0 1920 745" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                        <path d="M0 0C0 0 580.562 43.7348 953.051 43.7348C1325.54 43.7348 1920 0 1920 0V745C1920 745 1325.42 640.187 953.051 640.187C580.686 640.187 0 745 0 745V0Z" fill="url(#paint1_linear)"/>
                        <defs>
                            <linearGradient id="paint1_linear" x1="-713.299" y1="393.613" x2="3019.48" y2="393.613" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#133D87"/>
                                <stop offset="0.446576" stop-color="#608BC0"/>
                                <stop offset="1" stop-color="#133D87"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="relative z-10 w-full mx-auto px-4">
                    <h2 class="text-4xl md:text-6xl lg:text-7xl font-extrabold text-white text-center mb-16">
                        PROGRAM KERJA
                    </h2>

                    <div id="scroll-container-2" class="relative w-full overflow-x-auto py-12 scrollbar-hide" style="scroll-behavior: smooth;">
                        <div class="flex items-end px-8 min-w-max mb-16" style="padding-bottom: 20px;">
                            <!-- Card 1 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(75px); z-index: 4; margin-left: 0px; box-shadow: rgba(0, 0, 0, 0.15) 0px 12px 40px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(50px); z-index: 5; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 14px 45px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 3 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(25px); z-index: 6; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 16px 50px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 4 (Center) -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(0px); z-index: 7; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 18px 55px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 5 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(25px); z-index: 6; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 16px 50px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 6 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(50px); z-index: 5; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 14px 45px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                            <!-- Card 7 -->
                            <div class="bg-himti-light rounded-xl p-6 transition-all duration-300 flex flex-col justify-center hover:shadow-2xl hover:-translate-y-4 relative border border-white/50" style="width: 450px; height: 180px; transform: translateY(75px); z-index: 4; margin-left: -60px; box-shadow: rgba(0, 0, 0, 0.15) 0px 12px 40px;">
                                <h3 class="text-himti-primary text-xl font-bold text-center mb-3">LOREM IPSUM</h3>
                                <p class="text-black text-center text-base leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur odio sem, in pharetra turpis faucibus in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        @include('components.footer')
    </div>

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');
            
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }

        // Scroll functions for cards
        function scrollLeft(containerId) {
            const container = document.getElementById(containerId);
            container.scrollBy({ left: -300, behavior: 'smooth' });
        }

        function scrollRight(containerId) {
            const container = document.getElementById(containerId);
            container.scrollBy({ left: 300, behavior: 'smooth' });
        }

        // Set default scroll position to center when page loads
        document.addEventListener('DOMContentLoaded', () => {
            const container1 = document.getElementById('scroll-container-1');
            const container2 = document.getElementById('scroll-container-2');
            if (container1) {
                const centerPos = (container1.scrollWidth - container1.clientWidth) / 2;
                container1.scrollLeft = centerPos;
            }
            if (container2) {
                const centerPos = (container2.scrollWidth - container2.clientWidth) / 2;
                container2.scrollLeft = centerPos;
            }
        });
    </script>
  </body>
</html>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag("js", new Date());
  gtag("config", "G-CPWNCMX296");
</script>
<script type="module" crossorigin src="/assets/index-DMznUdrR.js"></script>
<link rel="stylesheet" crossorigin href="/assets/index-CJisSbIe.css">

Detail Department