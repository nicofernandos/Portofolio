<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-white py-24 sm:py-32 rounded-xl">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
          <div class="max-w-xl">
            <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">Visi</h2>
            <p class="mt-6 text-lg/8 text-gray-600 text-wrap">Ingin menjadi profesional di dalam bidang technology yang dapat memberikan dampak positif bagi sekitar serta berinovasi berkelanjutan</p>
          </div>
          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Nico Fernando Sampe Tua Simanjuntak</h3>
                  <p class="text-sm/6 font-semibold text-indigo-600">Co-Founder / CEO</p>
                </div>
              </div>
            </li>
            <li>
              <div class="max-w-xl">
                <h2 class="text-pretty text-3xl font-semibold tracking-tight text-gray-900 text-wrap">Misi</h2>
                <p>Ingin tetap berusaha belajar dalam pengembangan dibidang technology yang dimana semakin terus meningkat</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
      
</x-layout>