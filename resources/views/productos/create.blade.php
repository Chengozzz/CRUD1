    <x-app-layout>

    <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Añadir ') }}
            </h2>
        </x-slot>

        <div class="py-12">
        <x-success-session-status class="mb-4" :status="session('message')" />

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
{{-- Aqui inicia el form --}}
                    <form action="{{ url('agregar-producto')}}" method= "POST">
                    @csrf

                    <div>
            <x-input-label for="nombre" :value="__('Nombre del producto')" />
            
            <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="descripcion" :value="__('Descripcion')" />
            
            <x-text-input id="descripcion" class="block mt-1 w-full" type="text" name="descripcion" :value="old('descripcion')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="precio" :value="__('Precio')" />
            
            <x-text-input id="precio" class="block mt-1 w-full" type="number" name="precio" :value="old('precio')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('precio')" class="mt-2" />
        </div>

        {{-- boton --}}
        <x-primary-button class="ms-3">
                {{ __('Guardar') }}
            </x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>