<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title>

  <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
    <div class="mx-auto max-w-screen-xl px-4 2xl: px-0">
        <div class="px-2 py-5 border-2 mb-2 border-gray-900 bg-black h-20 w-25">
          &laquo;
          <a href="/about" class="text-blue-500 border-2 text-sm border-gray-800 hover:underline"> Back to About Page</a>
        </div>
        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
          <div class="rounded-lg border border-gray-200 hover:bg-blue-500 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
              <div>
                <div class="bg-slate-300 hover:underline hover:bg-blue-500 hover:text-white decoration-sky-500 rounded-2xl justify-center text-center text-wrap font-sans py-1 font-semibold shadow-lg h-20 w-30 text-md">
                 Lorem, ipsum.
                </div>
              </div>
              <div class="h-56 w-full my-2">
                <a href="#">
                  <img class="mx-auto h-full dark:hidden rounded-lg" src="{{ asset('img/prog.png') }}" alt="Ikan Hiu" />
                </a>
              </div>
              <div class="">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, libero.
              </div>
          </div>
          <div class="rounded-lg border border-gray-200 hover:bg-blue-500 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
              <div>
                <div class="bg-slate-300 hover:underline hover:bg-blue-500 hover:text-white decoration-sky-500 rounded-2xl justify-center text-center text-wrap font-sans py-1 font-semibold shadow-lg h-20 w-30 text-md">
                 Lorem, ipsum.
                </div>
              </div>
              <div class="h-56 w-full my-2">
                <a href="#">
                  <img class="mx-auto h-full dark:hidden rounded-lg" src="{{ asset('img/prog.png') }}" alt="Ikan Hiu" />
                </a>
              </div>
              <div class="">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, libero.
              </div>
          </div>
        </div>

      </section>
</x-layout>

