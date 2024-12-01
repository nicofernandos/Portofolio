<x-layout>

  <x-slot:title>{{ $title }}</x-slot:title>

<a href="/about" class="text-blue-500 hover:underline"> &laquo; Back to About Page</a>

    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
      <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
        
        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
          <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
              <header>
                <div class="bg-slate-300 underline decoration-sky-500 rounded-2xl justify-center text-center text-wrap font-sans py-1 font-semibold shadow-lg">
                  Header
                </div>
              </header>
              <div class="h-56 w-full my-2">
                <a href="#">
                  <img class="mx-auto h-full dark:hidden rounded-lg" src="{{ asset('img/prog.png') }}" alt="Ikan Hiu" />
                </a>
              </div>
          </div>
          <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
              <header>
                <div class="bg-slate-300 underline decoration-sky-500 rounded-2xl justify-center text-center text-wrap font-sans py-1 font-semibold shadow-lg">
                  Header
                </div>
              </header>
              <div class="h-56 w-full my-2">
                <a href="#">
                  <img class="mx-auto h-full dark:hidden rounded-lg" src="{{ asset('img/webdev.jpeg') }}" alt="" />
                </a>
              </div>
          </div>
        </div>

      </section>
</x-layout>

