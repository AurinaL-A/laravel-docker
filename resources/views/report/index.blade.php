@vite(['resources/css/app.css','resources/js/app.js'])
<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">Список заявок</h1>
        <x-nav-link :href="route('reports.create')">
            {{__('Создать заявление')}}
        </x-nav-link>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex flex-col gap-2 p-5">

                @foreach($reports as $report)
                <div class="bg-white shadow-sm sm:rounded-lg p-4 border border-gray-200 ">
                    <div class="flex justify-between items-center mb-2">
                        <p class="text-red-500 font-semibold">{{ \Carbon\Carbon::parse($report->created_at)->translatedFormat('d.m.Y') }}</p>
                        @if ($report->status_id == 1)
                        <span class="text-blue-500 font-semibold">новое</span>
                        @elseif ($report->status_id == 2)
                        <span class="text-red-500 font-semibold">отклонено</span>
                        @else
                        <span class="text-blue-500 font-semibold">подтверждено</span>
                        @endif
                    </div>
                    <p class="font-bold">{{ $report->number }}</p>
                    <p class="text-gray-700">{{ $report->description }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>



</x-app-layout>