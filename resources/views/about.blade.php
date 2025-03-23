<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <section class=" bg-center bg-no-repeat bg-[url('C:\laragon\www\Portofolio\public\img\backes.jpg')] bg-gray-700 bg-blend-multiply col-2 rounded-xl">
        <div class="relative col-2">
            <a href="" class="absolute top-0 left-0 w-full h-full z-10 bg-cover bg-no-repeat" style="background-image: inherit;">
            </a>
        </div>
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56"> 
          <h1 class="mb-4 text-4xl font-extrabold font-sans tracking-tight leading-none text-white md:text-5xl lg:text-6xl rounded-xl">Nico Fernando Sampe Tua Simanjuntak</h1>
          <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 text-wrap hover:text-balance hover:mt-6 hover:mb-8">I was born on June 4th, 2002, at 12:30 AM in Palembang, South Sumatra. I'm Batak, with Simanjuntak and Siahaan as my parents. My dream is to work in tech and make my family proud.

          </p>
          <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0"> 
            <a href="/galery" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5   sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400"> 
            My Gallery Picture
            </a>
            <a href="/vimi" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5   sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400"> 
            Visi dan Misi
            </a>
          </div>
        </div>
    </section>


</x-layout>
