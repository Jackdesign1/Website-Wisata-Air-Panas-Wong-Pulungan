<x-container class="py-12">
    <x-modal name="tour-destination-create">
        @livewire('pages.admin.tour-destination.create')
    </x-modal>

    <x-modal name="tour-destination-edit">
        <livewire:pages.admin.tour-destination.edit>
    </x-modal>

    <h2 class="mb-12 text-4xl font-semibold text-center">Destinasi Wisata</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <x-cards.background-image class="aspect-[16/9] w-full">
            <x-slot:custom>
                <div class="absolute top-0 left-0 w-full h-full bg-white flex flex-col gap-2 items-center justify-center text-xl text-black cursor-pointer" x-on:click="$dispatch('open-modal', 'tour-destination-create')">
                    <span>
                        Tambah Wisata
                    </span>
                    <button class="rounded-full border-2 border-blue-500 inline-block group-hover:scale-110 transition">
                        <svg class="w-8 h-8 text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                        </svg>                                  
                    </button>
                </div>
            </x-slot:custom>
        </x-cards.background-image>

        @foreach ($tours as $tour)
            <x-cards.background-image :src="$tour->image" class="aspect-[16/9] w-full">
                <x-slot:title>
                    <div class="my-5 mx-7">
                        <div class="text-white text-3xl font-semibold">
                            {{ $tour->name }}
                        </div>
                    </div>
                </x-slot:title>
                <x-slot:content>
                    <div class="py-5 px-7 flex justify-center gap-4 flex-col h-full">
                        <div>
                            <div class="text-white text-2xl font-semibold">
                                {{ $tour->name }}
                            </div>
                            <div class="text-lg line-clamp-3">
                                {{ $tour->description }}
                            </div>
                        </div>
                        <div class="text-center">
                            <button @click="$dispatch('open-modal', 'tour-destination-edit'); $dispatch('initEditTourDestination', {key: '{{ encrypt($tour->id) }}'})" href="#" type="button" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-500 focus:outline-none dark:focus:ring-green-600">Edit</button>
                            <button @click="if (confirm('Are you sure you want to delete this tour?')) $wire.delete('{{ encrypt($tour->id) }}')" href="#" type="button" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-500 focus:outline-none dark:focus:ring-red-600">Delete</button>
                        </div>
                    </div>
                </x-slot:content>
            </x-cards.background-image>
        @endforeach
    </div>
</x-container>