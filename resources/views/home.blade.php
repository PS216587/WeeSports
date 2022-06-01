<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Welkom op de website van WeeSports') }}
        </h2>
    </x-slot>
    <div class="border-b border-t border-gray-200 bg-white">
        <p class="text-center text-xl">
            Op deze website kunt u allemaal informatie vinden over formule 1, voetbal en basketbal.
        </p>
        <p class="text-center text-xl">
            Hierbij kunt u denken aan live scores van wedstrijden, scores van afgelopen wedstrijden, tijden van
            opkomende wedstrijden en actueel niews rondom de sporten.
        </p>
    </div>
    <div class="flex items-center justify-center w-screen align-top">
        <div class="pr-16">
            <img src="{{ asset('img/ph.png') }}" class="w-64">
        </div>
        <table class="w-full mr-20">
            <thead class="bg-gray-50 border-gray-200 border-t border-b border-r border-l">
                <tr>
                    <th class="p-3 text-sm tracking-wide text-left border-r">Sport</th>
                    <th class="p-3 text-sm tracking-wide text-left border-r">Nieuws</th>
                    <th class="p-3 text-sm tracking-wide text-left border-r">Datum</th>
                </tr>
            </thead>
        </table>
        <table class="w-full mr-10">
            <thead class="bg-gray-50 border-gray-200 border-t border-b border-r border-l">
                <tr>
                    <th class="p-3 text-sm tracking-wide text-left border-r">Sport</th>
                    <th class="p-3 text-sm tracking-wide text-left border-r">Plek</th>
                    <th class="p-3 text-sm tracking-wide text-left border-r">Datum</th>
                </tr>
            </thead>
        </table>
    </div>


    <footer class="fixed bottom-0 w-screen">
        <div class="bg-sky-400 p-3">
            <div class="ml-5">
            <p>algemene voorwaarden</p>
            <p>WeeSports@gmail.com</p>
            <p>contact</p>
        </div>
        </div>
    </footer>

</x-app-layout>
