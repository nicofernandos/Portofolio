<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
<ol class="flex items-center">
    <li class="relative w-full mb-6 ml-36 justify-center">
        <div class="flex items-center">
            <div class="z-10 flex items-center justify-items-stretch ">
                <a href="">
                    <img class="w-64 h-40 rounded-xl" src="{{ asset('img/webdev.jpeg') }}" alt="">
                </a>
            </div>
            <div class="flex w-full bg-gray-700 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3">
            <h3 class="font-medium font-semibold text-lg text-gray-900 dark:text-white">SD Negeri 137 PLG</h3>
        </div>
        <div class="card-footer">
            <article class="text-pretty ">
                <h5 class=" font-extralight text-gray-700 hover:font-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae explicabo vel adipisci veniam architecto in iste, illum deleniti fugiat officia.</h5>
            </article>
        </div>
    </li>
    <li class="relative w-full mb-6 justify-center mt-5">
        <div class="flex items-center">
            <div class="z-10 flex items-center justify-items-stretch ">
                <a href="">
                    <img class="w-64 h-40 rounded-xl" src="{{ asset('img/webdev.jpeg') }}" alt="">
                </a>
            </div>
            <div class="flex w-full bg-gray-700 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3">
            <h3 class="font-medium text-gray-900 dark:text-white">SMPN 52</h3>
            <p> Jurusan Ilmu Pengetahuan</p>
        </div>
        <div class="card-footer">
            <article class="text-pretty">
                <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero inventore temporibus asperiores nostrum aliquid eligendi hic ad consequuntur vel repellendus.</h5>
            </article>
        </div>
    </li>
    <li class="relative w-full mb-6 justify-center mt-5">
        <div class="flex items-center">
            <div class="z-10 flex items-center justify-items-stretch ">
                <a href="">
                    <img class="w-64 h-40 rounded-xl" src="{{ asset('img/webdev.jpeg') }}" alt="">
                </a>
            </div>
            <div class="flex w-full bg-gray-700 h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3">
            <h3 class="font-medium text-gray-900 dark:text-white">SMA Negeri 22 Palembang</h3>
            <p> Jurusan Ilmu Pengetahuan</p>
        </div>
        <div class="card-footer">
            <article class="text-pretty">
                <h5>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero inventore temporibus asperiores nostrum aliquid eligendi hic ad consequuntur vel repellendus.</h5>
            </article>
        </div>
    </li>
    <li class="relative w-full mb-6 justify-center mt-5">
        <div class="flex items-center">
            <div class="z-10 flex items-center justify-center ">
                <a href="">
                    <img class="w-64 h-40 rounded-xl" src="{{ asset('img/webdev.jpeg') }}" alt="">
                </a>
            </div>
            <div class="flex w-full  h-0.5 dark:bg-gray-700"></div>
        </div>
        <div class="mt-3">
            <h3 class="font-medium text-gray-900 dark:text-white">Universitas Bina Darma</h3>
            <p>Jurusan Sistem Informasi</p>
        </div>
        <div class="card-footer">
            <article>
                <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores provident aliquid totam. Accusamus ipsum, ad beatae similique iure doloribus esse.</h5>
            </article>
        </div>
    </li>
</ol>


</x-layout>