<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>

    {{ $proj->links() }}
    <div class="my-4 py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
         @forelse ($proj as $key ) 
        <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex justify-between items-center mb-5 text-gray-500">
               <a href="category">
               <span class="bg-{{ $key->category->color }}-100 text-gray-500 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                  {{ $key->category->name }}
                </span>
               </a>
                <span class="text-sm text-primary-900">{{ $key->created_at->diffForHumans() }}</span>
            </div>
            <a href="" class="hover:underline">
            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $key->title }}</h2>
            </a>
            <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
               {{-- {{  Str::limit ($post->body, 150) }} --}}
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis corporis explicabo quis ut officia, dolor dolorem suscipit soluta repellendus! Laborum.
            </p>
            <a href="">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    {{-- <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="" /> --}}
                    <span class="font-medium text-sm dark:text-white">
                        {{-- {{ $post->author->name }} --}} Nama
                    </span>
                </div>
               </a>
                <a href="" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline text-sm">
                    Read more
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </article>       
        
        @empty
        <p class="font-semibold text-xl my-4 ">
         artickel not found
        </p>
        <a href="/projects" class="block text-blue-600 hover:underline"> &laquo; Back to all posts</a>
        
        @endforelse
      </div>  
  </div>

</x-layout>