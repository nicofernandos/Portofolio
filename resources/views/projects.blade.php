<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title> 


{{-- <article class="py-8 max-w-screen-md">
       <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
          {{ $post['title'] }}
      </h2>
   <div>
    <div >
        By
           <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-500 hover:underline">{{ $post->author->name }} </a>
           in
           <a href="/categories/{{ $post->category->slug }}" class="hover:underline text-base text-gray-500">{{ $post->category->name }}</a>
        {{ $post->created_at->diffForHumans() }} 
   </div>
   <p class="my-4 font-light">
      {{ $post['body'] }}
   </p>
   <a href="/posts" class="font-medium text-blue-900 hover:underline">&laquo; Back to post</a>
</article> --}}


<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
   <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
       <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
           <header class="mb-4 lg:mb-6 not-format">
            <a href="/posts" class="font-medium text-xs text-blue-600 hover:underline">&laquo;Back to all posts</a>
               <address class="flex items-center mb-6 not-italic">
                   <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                       <img class="mr-4 w-20 h-20 rounded-xl" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="lorem">
                       <div>
                           <a href="/posts?author=" rel="author" class="text-xl font-bold text-gray-900 dark:text-white mb-1">Lorem ipsum dolor sit amet.</a>
                           <p class="text-base text-gray-500 dark:text-gray-400"> Lorem, ipsum dolor. </p>
                           <a href="/posts?category=lorem">
                              <span class="bg-blue-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                 Lorem ipsum dolor sit amet.
                               </span>
                              </a>
                       </div>
                   </div>
               </address>
               <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, dignissimos?</h1>
           </header>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam sapiente corrupti corporis iste, omnis repudiandae doloribus quas autem fugit fuga odit, consequatur illum odio consectetur rem minus nam quia reiciendis quasi adipisci, exercitationem ex architecto. Qui quaerat excepturi sed dolor sit. Quia deleniti debitis esse magnam molestias velit, veniam ea?</p>
       </article>
   </div>

 </x-layout>