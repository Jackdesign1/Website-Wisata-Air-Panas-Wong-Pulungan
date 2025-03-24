<?php

use function Livewire\Volt\{state};
use function Livewire\Volt\{mount};

?>

<x-company-profile-layout>
   <div class="pt-16 pb-28 flex flex-col gap-28">
      <section class="space-y-28">
         <div class="text-center py-10 bg-gray-200 text-4xl font-semibold">
            Tentang Wisata Air Panas Wong Pulungan
         </div>
         <x-container class="space-y-28">
            <div class="flex flex-col md:flex-row gap-10 items-center">
               <div class="flex-1 aspect-[5/3] rounded-xl shadow-xl overflow-hidden">
                  <img src="https://placehold.co/600x400" alt="placeholder" class="block w-full object-cover h-full">
               </div>
               <div class="flex-[1.5]">
                  <div>
                     <h2 class="mb-3 text-3xl font-semibold">Sejarah</h2>
                     <p class="inline-block lg:w-4/5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut distinctio dolor in dicta mollitia asperiores illum quos, numquam magnam cum ipsam quo id culpa possimus repudiandae minus esse itaque odio fugit exercitationem molestiae atque! Minus perferendis iste eaque sunt hic exercitationem laudantium, explicabo nisi aut dicta sint, ad tempora dignissimos cumque, ea quisquam. Consectetur non asperiores rerum?</p>
                  </div>
               </div>
            </div>
   
            <div class="flex flex-col md:flex-row-reverse gap-10 items-center text-end">
               <div class="flex-1 aspect-[5/3] rounded-xl shadow-xl overflow-hidden">
                  <img src="https://placehold.co/600x400" alt="placeholder" class="block w-full object-cover h-full">
               </div>
               <div class="flex-[1.5]">
                  <div>
                     <p class="inline-block lg:w-4/5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut distinctio dolor in dicta mollitia asperiores illum quos, numquam magnam cum ipsam quo id culpa possimus repudiandae minus esse itaque odio fugit exercitationem molestiae atque! Minus perferendis iste eaque sunt hic exercitationem laudantium, explicabo nisi aut dicta sint, ad tempora dignissimos cumque, ea quisquam. Consectetur non asperiores rerum?</p>
                     <div class="font-semibold text-sm mt-2">
                        Bapak H. Muhammad Zaky <br>
                        Kepala Desa Pulungan
                     </div>
                  </div>
               </div>
            </div>

            <div>
               <div class="flex flex-col md:flex-row gap-10 items-center">
                  <div class="flex-1 aspect-[5/3] rounded-xl shadow-xl overflow-hidden">
                     <img src="https://placehold.co/600x400" alt="placeholder" class="block w-full object-cover h-full">
                  </div>
                  <div class="flex-[1.5] text-center">
                     <h2 class="mb-8 text-center text-3xl font-semibold">Apa Kata Bupati Pasuruan</h2>
                     <figure class="max-w-screen-md mx-auto">
                        <svg class="w-10 h-10 mx-auto mb-3 text-gray-400 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                           <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
                        </svg>
                        <blockquote>
                           <p class="text-xl italic font-medium text-gray-900 dark:text-white">“Sering-sering mengadakan event untuk memancing dan menambah kunjungan wisata, kalau perlu masyarakat yang punya hajat bisa disini. Serta harus banyak kegiatan masyarakat untuk menumbuhkan pergerakan ekonomi yang pada akhirnya memberikan manfaat untuk UMKM sekitar”</p>
                        </blockquote>
                     </figure>
                  </div>
               </div>
            </div>
         </x-container>
      </section>

      <section>
         <div class="text-center py-10 bg-gray-200 text-4xl font-semibold">
            Visi & Misi
         </div>
         <x-container class="space-y-28">
            <div class="flex flex-col md:flex-row items-center">
               <div class="py-5 text-center md:text-right px-5 md:border-r md:border-r-gray-300">
                  {{-- <h2 class="mb-3 text-3xl font-semibold">Visi</h2> --}}
                  <p class="inline-block lg:w-4/5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut distinctio dolor in dicta mollitia asperiores illum quos, numquam magnam cum ipsam quo id culpa possimus repudiandae minus esse itaque odio fugit exercitationem molestiae atque</p>
               </div>
               <div class="py-5 text-center md:text-left px-5">
                  {{-- <h2 class="mb-3 text-3xl font-semibold">Misi</h2> --}}
                  <p class="inline-block lg:w-4/5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut distinctio dolor in dicta mollitia asperiores illum quos, numquam magnam cum ipsam quo id culpa possimus repudiandae minus esse itaque odio fugit exercitationem molestiae atque</p>
               </div>
            </div>
         </x-container>
      </section>
   </div>
</x-company-profile-layout>
