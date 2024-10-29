<x-layout>
    <div class="container mx-auto mt-5 mb-4">
        <h1 class="text-xl font-bold text-center mb-6">Bundesland wählen</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($bundeslands as $bundesland)
                <a href="{{ route('test.start', $bundesland) }}" class="transition-transform transform hover:scale-105">
                    <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                        <img src="{{ asset('bundeslander_logos/' . $bundesland . '-min.png') }}" alt="{{ $bundesland }} Logo" class="w-24 h-24 mx-auto mb-4" />
                        <p class="mt-2 text-gray-800 text-xl font-semibold">{{ $bundesland }}</p>
                        <p class="mt-1 text-gray-600 text-sm">Klicken Sie hier, um den Test zu starten</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    

</x-layout>