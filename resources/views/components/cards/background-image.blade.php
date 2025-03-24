@props([
   'src' => null,
   'href' => null
])

<div {{ $attributes->merge(['class' => 'relative overflow-hidden bg-white shadow-xl rounded-xl group']) }}>
   <img src="{{ !$src? asset('assets/icons/image-not-found.png') : asset('storage/uploads/images/'.$src) }}" alt="" class="block object-cover object-center w-full h-full transition group-hover:scale-110">
   <div class="absolute top-0 bottom-0 left-0 right-0 z-10 flex flex-col justify-between transition duration-200 bg-gradient-to-r from-black/40 via-black/35 to-black/25 group-hover:from-black/50 group-hover:via-black/45 group-hover:to-black/35 text-white">
      {{-- tumbnail title --}}
      <div class="opacity-100 group-hover:opacity-0 group-hover:scale-110 overflow-hidden transition duration-200">
         {{ $title?? '' }}
      </div>
      {{-- end tumbnail title --}}
      <div class="absolute left-0 top-0 right-0 bottom-0 group-hover:opacity-100 opacity-0 scale-90 group-hover:scale-100 overflow-hidden transition duration-200">
         {{ $content?? '' }}
      </div>

      {{ $custom?? '' }}
      @if ($href)
         <a href="{{ $href }}" wire:navigate class="absolute left-0 top-0 right-0 bottom-0 z-20 cursor-pointer"></a>
      @endif
   </div>
</div>