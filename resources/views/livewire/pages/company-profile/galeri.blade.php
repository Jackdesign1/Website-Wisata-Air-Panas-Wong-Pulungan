<?php

use function Livewire\Volt\{state};
use function Livewire\Volt\{mount};

?>

<x-company-profile-layout>
   <x-container class="mt-16 py-20">
      <div class="grid sm:grid-cols-2 gap-4">
         <div class="grid gap-4">
            <x-cards.background-image src="image-8.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Pemandangan Hari Minggu
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Pemandangan Hari Minggu
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
            <x-cards.background-image src="image-6.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Air Panas Penatahan
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Air Panas Penatahan
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
            <x-cards.background-image src="image-9.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Jembatan
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Jembatan
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
            <x-cards.background-image src="image-1.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Pendopo Arcopodo
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Pendopo Arcopodo
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
         </div>
         <div class="grid gap-4">
            <x-cards.background-image src="image-5.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Danau
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Danau
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
            <x-cards.background-image src="image-7.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Kolam Renang
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Kolam Renang
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
            <x-cards.background-image src="image-8.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Hari Jumat
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Hari Jumat
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
            <x-cards.background-image src="image-10.png" class="w-full min-w-64">
               <x-slot:title>
                  <div class="my-5 mx-7">
                     <div class="text-white text-3xl font-semibold">
                        Pengalaman
                     </div>
                  </div>
               </x-slot:title>
               <x-slot:content>
                  <div class="py-5 px-7 grid place-items-center h-full">
                     <div>
                        <div class="text-white text-2xl font-semibold">
                           Pengalaman
                        </div>
                        <div class="text-lg">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro dicta eaque dolorem mollitia!
                        </div>
                     </div>
                  </div>
               </x-slot:content>
            </x-cards.background-image>
         </div>
      </div>
   </x-container>
</x-company-profile-layout>
