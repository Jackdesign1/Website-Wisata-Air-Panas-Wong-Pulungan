<?php

use function Livewire\Volt\{state};
use function Livewire\Volt\{mount};

state(['id']);

mount(function($id) {
    $this->id = $id;
})

?>

<x-company-profile-layout>
    <x-container class="flex mt-16 py-20 gap-8">
        <div class="flex-1 space-y-6">
            <div>
                <h1 class="text-3xl font-semibold mb-5">
                    Berita Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, amet.
                </h1>

                <div id="indicators-carousel" class="relative w-full mb-2 shadow-lg" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <img src="{{ asset('assets/images/image-1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/images/image-2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/images/image-3.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/images/image-1.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ asset('assets/images/image-2.png') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

                <div class="font-light ps-2 text-sm">
                    <div>
                        15 Maret 2025
                    </div>
                    <div>
                        Oleh Admin
                    </div>
                </div>
            </div>

            <div>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt iure officiis explicabo delectus quas officia repellendus quasi consequuntur quia soluta distinctio nobis facere vitae non, dicta libero corrupti. Minima laudantium alias ea perferendis fugit! Voluptatem quas optio, voluptate accusamus, cupiditate necessitatibus dolorem maiores iste numquam nam rem! Qui veritatis ea tenetur tempora! Deleniti dolorum ipsum temporibus. Vero non veritatis nam aliquid fugiat excepturi consectetur cumque similique alias, ut voluptas qui numquam ipsum illum harum ullam impedit nobis possimus, quasi tempore blanditiis libero ipsam veniam. Quae, iste voluptas eveniet repudiandae sapiente sit commodi id magnam repellat similique optio ducimus consequuntur dolor.
            </div>

        </div>
        <div class="min-w-80 max-w-80">
            <div>
                <span class="font-semibold text-lg">
                    Artikel lainnya
                </span>
                <div class="space-y-3 mt-3">
                    <div class="flex relative bg-white border border-gray-200 rounded-xl shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover block rounded-t-lg w-32 rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 font-normal text-sm text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 left-0 right-0 bottom-0 z-10 cursor-pointer"></a>
                    </div>
                    <div class="flex relative bg-white border border-gray-200 rounded-xl shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover block rounded-t-lg w-32 rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 font-normal text-sm text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 left-0 right-0 bottom-0 z-10 cursor-pointer"></a>
                    </div>
                    <div class="flex relative bg-white border border-gray-200 rounded-xl shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover block rounded-t-lg w-32 rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 font-normal text-sm text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 left-0 right-0 bottom-0 z-10 cursor-pointer"></a>
                    </div>
                    <div class="flex relative bg-white border border-gray-200 rounded-xl shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover block rounded-t-lg w-32 rounded-s-lg" src="{{ asset('assets/images/image-1.png') }}" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Berita 1</h5>
                            <p class="mb-2 font-normal text-sm text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, corporis?</p>
                        </div>
                        <a href="" class="absolute top-0 left-0 right-0 bottom-0 z-10 cursor-pointer"></a>
                    </div>
                </div>
            </div>
        </div>
    </x-container>
</x-company-profile-layout>
