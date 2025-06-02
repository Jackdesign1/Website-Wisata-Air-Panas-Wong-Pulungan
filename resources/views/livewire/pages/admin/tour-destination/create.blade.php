<div>
    <form class="p-4 md:p-5" wire:submit='create'>
        <div class="grid gap-4 mb-4">
            <div class="flex items-center justify-center w-full">
                @if ($image)
                    <div class="p-5 flex-1">
                        <img src="{{ $image->temporaryUrl() }}" alt="" class="w-full h-full object-contain object-center rounded-lg shadow-xl">
                    </div>
                @endif
                <label for="dropzone-file" class="flex flex-1 flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">PNG or JPG</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" wire:model='image'/>
                </label>
            </div> 
            <div>
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input wire:model="name" id="name" name="name" type="text" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="price" :value="__('Harga Tiket')" />
                <x-text-input wire:model="price" id="price" name="price" type="number" class="mt-1 block w-full" />
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
            </div>
            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Description</label>
                <textarea id="description" wire:model='description' rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>                    
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
        </div>
        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
            Tambahkan Destinasi Wisata
        </button>
    </form>
</div>
