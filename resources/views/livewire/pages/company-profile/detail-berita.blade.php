<?php

use function Livewire\Volt\{state};
use function Livewire\Volt\{mount};

state(['id']);

mount(function($id) {
    $this->id = $id;
})

?>

<x-company-profile-layout>
    <x-container class="flex gap-8 py-20 mt-16">
        <div class="flex-1 space-y-6">
            <div>
                <h1 class="mb-5 text-3xl font-semibold">
                    Mahasiswa Politeknik Negeri Jember Kembangkan Website dan Aplikasi Wisata Air Panas Wong Pulungan
                </h1>

                <div id="indicators-carousel" class="relative w-full mb-2 shadow-lg" data-carousel="static" wire:ignore>
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset('storage/uploads/images/berita1.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('storage/uploads/images/berita2.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 rtl:space-x-reverse bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                <div class="text-sm font-light ps-2">
                    <div>
                        15 Maret 2025
                    </div>
                    <div>
                        Oleh Admin
                    </div>
                </div>
            </div>

            <div>
                Pasuruan, 7 April 2025 – Wisata Air Panas Wong Pulungan menjadi salah satu destinasi favorit wisatawan lokal karena menawarkan suasana alami dan relaksasi di tengah pedesaan. Namun, meski potensinya besar, keberadaan wisata ini masih belum banyak dikenal karena minimnya informasi di internet.
                <br>
                <br>
                Melihat permasalahan tersebut, mahasiswa dari Program Studi Teknik Informatika Politeknik Negeri Jember (Polije) berinisiatif mengembangkan website dan aplikasi untuk wisata Air Panas Wong Pulungan melalui program Project-Based Learning (PBL).
                <br>
                <br>
                Proyek ini menjadi bentuk nyata penerapan ilmu yang mereka pelajari di bangku kuliah, sekaligus mendukung digitalisasi pariwisata desa.
                Website dan aplikasi yang dikembangkan memuat berbagai informasi penting, antara lain:
                Profil dan sejarah singkat wisata
                Galeri foto serta fasilitas yang tersedia
                Informasi harga tiket dan jam operasional
                Peta lokasi terintegrasi dengan Google Maps
                Halaman berita serta pengumuman kegiatan terbaru
                <br>
                <br>
                <br>
                Salah satu mahasiswa pengembang menyampaikan bahwa pengalaman ini sangat berharga.
                "Melalui PBL ini, kami tidak hanya belajar secara teori, tetapi juga langsung menerapkannya dalam bentuk nyata untuk membantu masyarakat," ungkapnya.
                <br>
                <br>
                Pihak pengelola wisata pun sangat mengapresiasi kolaborasi ini.
                <br>
                <br>
                "Kami sangat senang karena dibantu oleh mahasiswa Politeknik Negeri Jember untuk membuat website dan aplikasi. Sebenarnya sejak awal kami sudah berencana mengembangkannya, tapi belum ada SDM dari desa yang mampu. Kebetulan mahasiswa Teknik Informatika Polije datang dan mengajak bermitra. Bahkan biaya hosting dan domain ditanggung oleh kampus Polije," ujar salah satu pengelola wisata.
                <br>
                <br>
                Kolaborasi ini diharapkan dapat memperluas jangkauan promosi wisata Wong Pulungan, sekaligus membuka lebih banyak peluang kemitraan antara kampus dan masyarakat desa di masa depan.
            </div>

        </div>
        {{-- <div class="hidden min-w-80 max-w-80 md:block"> --}}
            {{-- <div>
                <span class="text-lg font-semibold">
                    Artikel lainnya
                </span>
                <div class="mt-3 space-y-3">
                    <div class="relative flex bg-white border border-gray-200 shadow-sm rounded-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="block object-cover w-32 rounded-t-lg rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 text-sm font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 bottom-0 left-0 right-0 z-10 cursor-pointer"></a>
                    </div>
                    <div class="relative flex bg-white border border-gray-200 shadow-sm rounded-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="block object-cover w-32 rounded-t-lg rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 text-sm font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 bottom-0 left-0 right-0 z-10 cursor-pointer"></a>
                    </div>
                    <div class="relative flex bg-white border border-gray-200 shadow-sm rounded-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="block object-cover w-32 rounded-t-lg rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 text-sm font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 bottom-0 left-0 right-0 z-10 cursor-pointer"></a>
                    </div>
                    <div class="relative flex bg-white border border-gray-200 shadow-sm rounded-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="block object-cover w-32 rounded-t-lg rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 text-sm font-normal text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 bottom-0 left-0 right-0 z-10 cursor-pointer"></a>
                    </div>
                </div> --}}
            {{-- </div> --}}
        </div>
    </x-container>
</x-company-profile-layout>
