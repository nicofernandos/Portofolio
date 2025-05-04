<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="py-10 px-5">
        <ol class="flex flex-row justify-center gap-8 overflow-x-auto ">
            <!-- SDN 137 -->
            <li class="w-64 flex-shrink-0 hover:bg-blue-800 hover:text-white rounded-md">
                <div class="text-center mx-10 my-4">
                    <img src="{{ asset('img/sdnlogo.jpg') }}" alt="SDN 137 Palembang" class="w-32 h-40 rounded-sm mx-auto mb-4">
                    <h3 class="text-slate-700 text-lg font-semibold mb-2">SDN 137 Palembang</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        Saya masuk sekolah negeri dasar pada tahun 2008, jarak dari rumah ke sekolah negeri saya tergolong dekat sekitar 400 meter sehingga saya berjalan kaki dan saya lulus SD pada tahun 2014.
                    </p>
                </div>
            </li>

            <!-- SMPN 52 -->
            <li class="w-64 flex-shrink-0 hover:bg-blue-800 hover:text-white rounded-md">
                <div class="text-center mx-10 my-4">
                    <img src="{{ asset('img/smpnlogo.jpg') }}" alt="SMPN 52 Palembang" class="w-32 h-40 rounded-sm mx-auto mb-4">
                    <h3 class="text-slate-700 text-lg font-semibold mb-2">SMPN 52 Palembang</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        Saya masuk sekolah negeri pada tahun 2014, mengikuti ekstrakurikuler palang merah remaja, dan lulus SMP pada tahun 2017.
                    </p>
                </div>
            </li>

            <!-- SMAN 22 -->
            <li class="w-64 flex-shrink-0 hover:bg-blue-800 hover:text-white rounded-md">
                <div class="text-center mx-10 my-4">
                    <img src="{{ asset('img/smanlogo.jpg') }}" alt="SMAN 22 Palembang" class="w-32 h-40 rounded-sm mx-auto mb-4">
                    <h3 class="text-slate-700 text-lg font-semibold mb-2">SMAN 22 Palembang</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        Saya masuk SMA pada tahun 2017, mengikuti ekstrakurikuler basket serta lomba DBL, dan lulus SMA pada tahun 2020.
                    </p>
                </div>
            </li>

            <!-- Universitas Bina Darma -->
            <li class="w-64 flex-shrink-0 hover:bg-blue-800 hover:text-white rounded-md">
                <div class="text-center mx-10 my-4">
                    <img src="{{ asset('img/ubdlogo.jpg') }}" alt="Universitas Bina Darma" class="w-32 h-40 rounded-sm mx-auto mb-4">
                    <h3 class="text-slate-700 text-lg font-semibold mb-2">Universitas Bina Darma</h3>
                    <p class="text-slate-700 text-sm leading-relaxed">
                        Saya masuk Universitas Bina Darma pada tahun 2020, melakukan 2 kali magang di perusahaan berbeda, dan lulus pada tahun 2024.
                    </p>
                </div>
            </li>
        </ol>
    </div>
</x-layout>
