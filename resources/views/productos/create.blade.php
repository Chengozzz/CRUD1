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

                    <form action="{{ url('agregar-producto')}}" method= "POST">
                    @csrf

                    <div>
            <x-input-label for="name" :value="__('Nombre del producto')" />
            
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Descripcion')" />
            
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="price" :value="__('Precio')" />
            
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        <x-primary-button class="ms-3">
                {{ __('Guardar') }}
            </x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </x-app-layout>