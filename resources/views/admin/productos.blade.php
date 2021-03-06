<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Instaroma
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-3 gap-6">
                @foreach ($productos as $producto)                    
                    <article class="w-full h-80 bg-cover bg-center">
                    <img src="{{$producto->imagen}}" alt="" style="width:30%;">
                    </article>
                @endforeach
            </div>
            @livewire('show-productos', ['nombre'=> 'Este es el nombre'])
        </div>
    </div>
</x-app-layout>
