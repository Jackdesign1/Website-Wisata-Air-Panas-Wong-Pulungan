<?php

use function Livewire\Volt\{state};

//
 
?>

<x-company-profile-layout>
    {{-- <style>
        * {
            outline: 1px solid black;
        }
    </style> --}}
    <div class="space-y-28">
        {{-- <section class="max-h-screen overflow-hidden relative h-[85vh] mt-14 shadow-xl" style="background-image: url('/storage/uploads/images/water-castle.jpg'); background-size: cover; background-repeat: no-repeat; background"> --}}
        <section class="max-h-screen overflow-hidden relative h-[85vh] mt-14 shadow-xl">
            <img src="{{ asset('storage/uploads/images/water-castle.jpg') }}" alt="water-castle.jpg" class="block object-cover object-center w-full h-full">
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-br bg-gradient from-black/90 to-black/30"></div>
            <x-container class="absolute flex flex-col justify-between w-full py-12 text-center -translate-x-1/2 -translate-y-1/2 md:text-start top-1/2 left-1/2">
                    <h1 class="mb-4 text-3xl text-white sm:text-5xl lg:text-7xl">Wisata Air <br>Wong Pulungan</h1>
                    {{-- <div>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 text-xl">Lorem</button>
                    </div> --}}
            </x-container>
        </section>

        <x-container class="grid gap-10 py-12 lg:grid-cols-2 place-items-center">
            <div>
                <h2 class="mb-3 text-3xl font-semibold">Kenal lebih dekat</h2>
                <p class="inline-block text-xl lg:w-4/5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nobis ab distinctio, eos exercitationem iste eaque ipsum error illum veniam nesciunt fuga recusandae doloribus vitae dolorum nostrum quisquam? Quis voluptate</p>
            </div>
            <div class="w-full">
                {{-- <video class="w-full h-auto max-w-full m-auto border border-gray-200 rounded-lg dark:border-gray-700" controls>
                    <source src="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>   --}}
                <div class="overflow-hidden shadow-xl rounded-xl aspect-video m-auto md:w-3/4 lg:w-full">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/u31qwQUeGuM?si=2GRFSQ69jI9mieVX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </x-container>

        <x-container class="py-12">
            <h2 class="mb-12 text-4xl font-semibold text-center">Destinasi Wisata</h2>
            <div class="flex flex-wrap gap-8">
                <x-cards.background-image src="image-1.png" class="aspect-[9/10] flex-1 min-w-64 max-h-96">
                    <x-slot:title>
                        <div class="my-5 mx-7">
                            <div class="text-white text-3xl font-semibold">
                                Wisata Air Panas
                            </div>
                        </div>
                    </x-slot:title>
                    <x-slot:content>
                        <div class="py-5 px-7 grid place-items-center h-full">
                            <div>
                                <div class="text-white text-2xl font-semibold">
                                    Wisata Air Panas
                                </div>
                                <div class="text-lg">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nam.
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
                            </div>
                        </div>
                    </x-slot:content>
                </x-cards.background-image>
                <x-cards.background-image src="image-2.png" class="aspect-[9/10] flex-1 min-w-64 max-h-96">
                    <x-slot:title>
                        <div class="my-5 mx-7">
                            <div class="text-white text-3xl font-semibold">
                                Terapi Ikan
                            </div>
                        </div>
                    </x-slot:title>
                    <x-slot:content>
                        <div class="py-5 px-7 grid place-items-center h-full">
                            <div>
                                <div class="text-white text-2xl font-semibold">
                                    Terapi Ikan
                                </div>
                                <div class="text-lg">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis ab labore porro neque, ut consequuntur!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
                            </div>
                        </div>
                    </x-slot:content>
                </x-cards.background-image>
                <x-cards.background-image src="image-3.png" class="aspect-[9/10] flex-1 min-w-64 max-h-96">
                    <x-slot:title>
                        <div class="my-5 mx-7">
                            <div class="text-white text-3xl font-semibold">
                                Bazar UMKM
                            </div>
                        </div>
                    </x-slot:title>
                    <x-slot:content>
                        <div class="py-5 px-7 grid place-items-center h-full">
                            <div>
                                <div class="text-white text-2xl font-semibold">
                                    Bazar UMKM
                                </div>
                                <div class="text-lg">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
                            </div>
                        </div>
                    </x-slot:content>
                </x-cards.background-image>
                <x-cards.background-image class="md:aspect-[9/10] flex-1 min-w-24 max-w-24">
                    <x-slot:custom>
                        <a href="/destinasi-wisata" class="absolute left-0 top-0 right-0 bottom-0 grid place-items-center" wire:navigate>
                            <button class="rounded-full border-2 border-blue-500 inline-block group-hover:scale-110 transition">
                                <svg class="w-12 h-12 text-blue-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                                </svg>                          
                            </button>
                        </a>
                    </x-slot:custom>
                </x-cards.background-image>
            </div>
        </x-container>

        <x-container class="py-12 space-y-8">
            <h2 class="text-4xl font-semibold text-center">Berita Terkini</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <x-cards.inline href="/berita/12">
                    <x-slot:title>Berita 1</x-slot:title>
                    <x-slot:text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dicta cupiditate eum nesciunt repellendus? Nobis impedit dignissimos necessitatibus aperiam fugiat.</x-slot:text>
                </x-cards.inline>
                <x-cards.inline href="/berita/12">
                    <x-slot:title>Berita 1</x-slot:title>
                    <x-slot:text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dicta cupiditate eum nesciunt repellendus? Nobis impedit dignissimos necessitatibus aperiam fugiat.</x-slot:text>
                </x-cards.inline>
                <x-cards.inline href="/berita/12">
                    <x-slot:title>Berita 1</x-slot:title>
                    <x-slot:text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dicta cupiditate eum nesciunt repellendus? Nobis impedit dignissimos necessitatibus aperiam fugiat.</x-slot:text>
                </x-cards.inline>
                <x-cards.inline href="/berita/12">
                    <x-slot:title>Berita 1</x-slot:title>
                    <x-slot:text>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla dicta cupiditate eum nesciunt repellendus? Nobis impedit dignissimos necessitatibus aperiam fugiat.</x-slot:text>
                </x-cards.inline>
            </div>
            <div class="text-center">
                <a href="/berita" wire:navigate class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Berita Lainnya
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </x-container>

        {{-- bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] --}}
        <section class="bg-center bg-no-repeat bg-gray-300 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-32">
                <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">Promo Liburan Akhir Tahun</h1>
                <p class="mb-12 text-lg font-normal lg:text-xl sm:px-16 lg:px-48">Nikmati diskon hingga 30% untuk tiket masuk dan paket wisata spesial, serta penawaran eksklusif untuk produk UMKM lokal selama periode liburan</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Detail Promo
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <x-container class="py-12">
            <h2 class="mb-12 text-4xl font-semibold text-center">Lokasi Wisata</h2>
            <div class="aspect-square md:aspect-[16/7] w-full rounded-xl overflow-hidden shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5465568208624!2d112.6867648!3d-7.6242148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d906e38b0e2f%3A0x6e5df0bd5a47efa7!2sPemandian%20Air%20Panas%20Kepulungan!5e0!3m2!1sid!2sid!4v1742482603499!5m2!1sid!2sid" style="border:0;" class="w-full h-full" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </x-container>

        <x-container class="pt-12 pb-20">
            <h2 class="mb-12 text-4xl font-semibold text-center">Testimoni Pengunjung</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <x-cards.plain>
                    <x-user-review.review></x-user-review.review>
                </x-cards.plain>
                <x-cards.plain>
                    <x-user-review.review></x-user-review.review>
                </x-cards.plain>
                <x-cards.plain>
                    <x-user-review.review></x-user-review.review>
                </x-cards.plain>
            </div>
        </x-container>
    </div>
</x-company-profile-layout>