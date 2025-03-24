<?php

use function Livewire\Volt\{state};

//
 
?>

<x-company-profile-layout>
   <x-container class="mt-16 py-20">
      <h1 class="text-3xl font-semibold text-center mb-10">
         Destinasi Wisata
      </h1>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
         <x-cards.background-image href="/destinasi-wisata/12" src="{{ asset('assets/images/image-1.png') }}" class="aspect-[16/8] flex-1">
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
               </div>
            </x-slot:content>
         </x-cards.background-image>
         <x-cards.background-image href="/destinasi-wisata/12" src="{{ asset('assets/images/image-2.png') }}" class="aspect-[16/8] flex-1">
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
               </div>
            </x-slot:content>
         </x-cards.background-image>
         <x-cards.background-image href="/destinasi-wisata/12" src="{{ asset('assets/images/image-3.png') }}" class="aspect-[16/8] flex-1">
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
               </div>
            </x-slot:content>
         </x-cards.background-image>
         <x-cards.background-image href="/destinasi-wisata/12" src="{{ asset('assets/images/image-1.png') }}" class="aspect-[16/8] flex-1">
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
               </div>
            </x-slot:content>
         </x-cards.background-image>
         <x-cards.background-image href="/destinasi-wisata/12" src="{{ asset('assets/images/image-2.png') }}" class="aspect-[16/8] flex-1">
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
               </div>
            </x-slot:content>
         </x-cards.background-image>
         <x-cards.background-image href="/destinasi-wisata/12" src="{{ asset('assets/images/image-3.png') }}" class="aspect-[16/8] flex-1">
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
               </div>
            </x-slot:content>
         </x-cards.background-image>
      </div>
   </x-container>
</x-company-profile-layout>