<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold py-5">
            {{ __('Создание нового заявления')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form class="p-4 md:p-5 space-y-4" method="POST" action="{{route('reports.store')}}">
                @csrf
                <div class="flex flex-col">
                    <!-- Number -->
                    <div>
                        <x-input-label for="number" :value="__('Номер автомобиля')" />
                        <x-text-input id="number" name="number" type="text"  class="block mt-1 py-2  " required />
                        <x-input-error :messages="$errors->get('number')" class="mt-2"/>
                    </div>
                    <!-- Desription -->
                    <div>
                        <x-input-label for="number" :value="__('Описание')" />
                        <x-textarea id="description" class="block mt-1 py-2" rows="10" cols="35" name="description"/>
                        <x-input-error :messages="$errors->get('number')" class="mt-2"/>
                    </div>
                    <!-- Status -->

                </div>
                <button type="submit" class="text-black bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">{{ __('Создать')}}</button>            </form>
        </div>
        </div>
        

    </div>
</x-app-layout>