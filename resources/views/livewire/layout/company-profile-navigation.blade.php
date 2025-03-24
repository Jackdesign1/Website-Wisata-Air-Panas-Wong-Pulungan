<nav class="bg-white border-gray-200 dark:bg-gray-900 fixed top-0 left-0 right-0 z-50">
   <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
         <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
         <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
         <span class="sr-only">Open main menu</span>
         <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
         </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
         <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
               <a href="/" wire:navigate class="{{ 
                  request()->routeIs('company-profile.index')? 
                     'bg-blue-700 md:text-blue-700 md:bg-transparent' 
                     : 'hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' 
                  }} lock py-2 px-3 text-gray-900 rounded-sm  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-0">Beranda</a>
            </li>
            <li>
               <a href="/about" wire:navigate class="{{ 
                  request()->routeIs('company-profile.about')? 
                     'bg-blue-700 md:text-blue-700 md:bg-transparent' 
                     : 'hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' 
                  }} lock py-2 px-3 text-gray-900 rounded-sm  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-0">Tentang Kami</a>
            </li>
            <li>
               <a href="/destinasi-wisata" wire:navigate class="{{ 
                  request()->routeIs('company-profile.tour-destination')? 
                     'bg-blue-700 md:text-blue-700 md:bg-transparent' 
                     : 'hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' 
                  }} block py-2 px-3 text-gray-900 rounded-sm  dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent md:p-0">Destinasi Wisata</a>
            </li>
            <li>
               <a href="/berita" wire:navigate class="{{ 
                  request()->routeIs('company-profile.news*')? 
                     'bg-blue-700 md:text-blue-700 md:bg-transparent' 
                     : 'hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' 
                  }} block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Berita</a>
            </li>
            <li>
               <a href="/galeri" wire:navigate class="{{ 
                  request()->routeIs('company-profile.galery')? 
                     'bg-blue-700 md:text-blue-700 md:bg-transparent' 
                     : 'hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' 
                  }} block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Galeri</a>
            </li>
            <li>
               <a href="/galeri" wire:navigate class="{{ 
                  request()->routeIs('company-profile.galery')? 
                     'bg-blue-700 md:text-blue-700 md:bg-transparent' 
                     : 'hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700' 
                  }} block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Kontak</a>
            </li>
            @auth
               <li>
                  <x-dropdown align="right" width="48">
                     <x-slot name="trigger">
                        <button class="inline-flex text-gray-900 items-center px-2 border hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 border-transparent leading-4 font-medium rounded-md dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                           <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                           <div class="ms-1">
                                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                           </div>
                        </button>
                     </x-slot>

                     <x-slot name="content">
                        <x-dropdown-link :href="route('admin.tour-destination.index')" wire:navigate>
                           {{ __('Dashboard') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('profile')" wire:navigate>
                           {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <button wire:click="logout" class="w-full text-start">
                           <x-dropdown-link>
                              {{ __('Log Out') }}
                           </x-dropdown-link>
                        </button>
                     </x-slot>
                  </x-dropdown>
               </li>
            @endauth
         </ul>
      </div>
   </div>
 </nav>
 