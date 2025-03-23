  <x-layout>
      <style>
         
          @keyframes moveFromLeft {
            from { left: -100%; }
            to { left: 0; }
          }

          @keyframes moveFromRight {
            from { right: -100%; }
            to { right: 0; }
          }

          .image {
            position: relative;
            top: 0%;
            left: -100%; /* Mulai sepenuhnya di luar layar dari kiri */
            transform: translateZ(-50%);
            width: 100%;
            animation: moveFromLeft 1.5s ease-out forwards;
          }

          .imge {
            position: relative;
            top: 0%;
            right: -100%; /* Mulai sepenuhnya di luar layar dari kanan */
            transform: translateZ(-50%);
            width: 100%;
            animation: moveFromRight 1.5s ease-out forwards;
          }
      </style>

      <x-slot:title>
        <div class="text-white shadow-2xl hover:text-nowrap hover:text-green-500">
          {{ $title }} 
        </div>
      </x-slot:title> 
      <div class="border-slate-500 font-sm font-sans text-transparent-30 py-2 px-3  text-center text-black hover:text-white hover:bg-gradient-to-l hover:from-gray-900 hover:via-red-500 hover:to-yellow-500 hover:animate-pulse font-bold hover:underline rounded-xl">
          Web Developer | Programming | IT Enthusias
      </div>
      

      <div class="border-blue-900 block bg-blue-900 py-2 mt-3 my-5 rounded-xl"></div>

      <section class="bg-white antialiased dark:bg-gray-900 md:py-16 rounded-2xl">
        <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-2 lg:gap-8 lg:p-16 xl:gap-16">
          <div class="flex flex-col justify-items text-pretty text-center">
            <h1 class="font-semibold text-2xl text-blue-800">Nico Fernando Sampe Tua Simanjuntak</h1>
            <p class="text-gray-700 dark:text-gray-300">Sumatera Selatan - Palembang</p>
          </div>
          <div class="flex justify-center -mt-24 items-center">
            <a href="#">
              <img class="rounded-xl object-cover h-56 w-56" src="{{ asset('img/nicko.jpg') }}" alt="Nico Fernando">
            </a>
          </div>
        </div>
        
        <div class="border-slate-900 block bg-blue-900 py-2 mt-3 my-5 rounded-xl"></div>
          <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
            <div class="lg:col-span-5 col-md-4 lg:mt-0">
              <a href="#" class="">
                <img class="image rounded-xl w-full h-full object-cover dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full" src="{{ asset('img/webdev.jpeg') }}" id="slidingImage" alt="peripherals" />
              </a>
            </div>
            <div class="mx-auto place-self-center lg:col-span-7">
              <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl ">
                Web Developer <br />
                Make a responsible for building and developing the website.
              </h1>
              <p class="mb-6 text-gray-500 dark:text-gray-400 hover:uppercase text-pretty hover:text-pretty">Results-oriented full-stack web developer with 1 years of experience in designing and developing innovative web solutions. Proficient in languange PHP and Framework like a Laravel, Codeigniter, and MySql, I am dedicated to delivering high-quality, user-centric applications. </p>
            </div>
          </div>
          <div class="border-slate-900 block bg-blue-900 py-2 mt-3 my-5 rounded-xl"></div>
          <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 ">
            <div class="mx-auto place-self-center lg:col-span-7">
              <h1 class="mb-3 col-md-4 text-2xl text-center font-bold leading-tight text-gray-900 dark:text-white md:text-4xl">
                Programming <br/>
                Designing programs for specific tasks.
              </h1>
              <p class="mb-6 text-gray-500 dark:text-gray-400">My programming skillset encompasses PHP, Python, and JavaScript, in addition to HTML, CSS, and related frameworks.</p>
            </div>
          </div>        
          <div class="outline-double outline-3 outline-offset-2  bg-zinc-700 py-2 mt-3 my-5 rounded-3xl ">
              <div class="outline-double outline-2 outline-offset-2 px-2 bg-primary-700"></div>
          </div>
          <div class="mx-auto grid max-w-scree-xl rounded-xl bg-gray-50 p-4  dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
            <div class="mx-auto place-self-center lg:col-span-7">
              <h1 class="mb-3 text-2xl font-bold leading-tight tracking-tight text-gray-900 dark:text-white md:text-4xl">
                IT Enthusias <br />
                Are typically problem-solvers who enjoy finding innovative solutions.
              </h1>
              <p class="mb-6 text-gray-500 dark:text-gray-400 hover:uppercase">As a technology enthusiast, I am driven by a deep curiosity about computers and networks. This passion fuels my desire to continually expand my knowledge and make meaningful contributions to the field.</p>
            </div>
            <div class="lg:col-span-5 col-md-4 lg:mt-0">
              <a href="">
                <img class="imge rounded-xl h-56 w-56 dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full" id="outImage" src="{{ asset('img/prog.png') }}" alt="">
              </a>
            </div>
          </div>

        </section>

        
<script>
          // Gambar pertama (slidingImage)
    const image1 = document.getElementById('slidingImage');

    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        // Membuat gerakan sebesar seperempat halaman (0.25)
        const imagePosition = scrollPosition * 0.05;
        
        // Batasi gerakan maksimal
        const maxPosition = window.innerWidth / 4; // seperempat halaman
        const limitedPosition = Math.min(imagePosition, maxPosition);
        
        image1.style.transform = `translateX(${limitedPosition}px)`;
    });

    // Gambar kedua (outImage)
    const image2 = document.getElementById('outImage');

    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY;
        
        // Menghitung seberapa jauh gambar kedua bergeser
        const imagePosition = scrollPosition * 0.05;
        
        // Tentukan batas pergerakan gambar
        const maxPosition = window.innerWidth / 4;  // seperempat halaman
        const minPosition = 0; // posisi awal
        
        // Terapkan pembatasan pergeseran gambar
        const limitedPosition = Math.min(Math.max(imagePosition, minPosition), maxPosition);
        
        // Terapkan transformasi ke gambar kedua
        image2.style.transform = `translateX(-${limitedPosition}px)`;
    });
</script>

  </x-layout>