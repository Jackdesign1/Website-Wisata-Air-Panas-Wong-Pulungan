<?php

use function Livewire\Volt\{state};


?>

<x-company-profile-layout>
   <x-container class="mt-16 py-20 gap-8">
         <h1 class="text-center text-3xl font-semibold mb-8">
            Berita Wisata Air Panas Wong Pulungan
         </h1>

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
   </x-container>
</x-company-profile-layout>
