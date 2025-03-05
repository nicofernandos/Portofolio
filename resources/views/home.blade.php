<x-layout>
  <style>
    section {
      margin: 0%;
      font-family: Arial, Helvetica, sans-serif;
    }

    .container{
      position: relative;
      overflow: hidden;
    }

    .image{
      position: relative;
      transform: translateZ(-50%);
      top: 0%;
      left: -80%;
      right: -100%;
      transition: transform 0.7s ease-out;
      width: 100%;
      animation-duration: 2s;
    }

    .imge {
      position: relative;
      top: 0%;
      right: -70%; /* Mulai di luar layar dari kanan */
      transform: translateZ(-50%);
      transition: transform 0.7s ease-out; /* Pastikan transisi mulus */
      width: 100%;
      animation: 2s;
    }
    
  </style>
    <x-slot:title>
      <div class="text-white shadow-2xl hover:text-nowrap hover:text-green-500">
        {{ $title }} 
      </div>
    </x-slot:title> 
    <div class="border-slate-500  text-transparent-30 py-2 px-3 mx-2 text-center text-black hover:text-white hover:bg-gradient-to-l hover:from-gray-900 hover:via-red-500 hover:to-yellow-500 hover:animate-pulse font-bold hover:underline rounded-xl">
        Web Developer | Programming | IT Enthusias
    </div>
    
    <div class="border-blue-900 block bg-blue-900 py-2 mt-3 my-5 rounded-xl"></div>

    <section class="bg-white px-4 py-8 antialiased dark:bg-gray-900 md:py-16 rounded-2xl">
        <div class="mx-auto grid max-w-screen-xl rounded-lg bg-gray-50 p-4 dark:bg-gray-800 md:p-8 lg:grid-cols-12 lg:gap-8 lg:p-16 xl:gap-16">
          <div class="lg:col-span-5 col-md-4 lg:mt-0">
            <a href="#" class="">
              <img class="image rounded-xl h-56 w-56 dark:hidden sm:h-96 sm:w-96 md:h-full md:w-full" src="{{ asset('img/webdev.jpeg') }}" id="slidingImage" alt="peripherals" />
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
    const imagePosition = scrollPosition * 0.9;
    image1.style.transform = `translateX(${imagePosition}px)`; // Gambar pertama bergerak dari kiri ke kanan
});

// Gambar kedua (outImage)
const image2 = document.getElementById('outImage');

window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;

    // Menghitung seberapa jauh gambar kedua bergeser
    const imagePosition = scrollPosition * 0.2; // Adjust kecepatan pergeseran

    // Tentukan batas pergerakan gambar
    const maxPosition = window.innerWidth - image2.offsetWidth;  // Batas kiri (lebar layar - lebar gambar)
    const minPosition = 100; // Batas kanan (gambar tidak boleh keluar dari kanan)

    // Terapkan pembatasan pergeseran gambar
    const limitedPosition = Math.min(Math.max(imagePosition, minPosition), maxPosition);

    // Terapkan transformasi ke gambar kedua
    image2.style.transform = `translateX(-${limitedPosition}px)`; // Gambar bergerak dari kanan ke kiri
});

</script>

 </x-layout>