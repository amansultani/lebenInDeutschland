<x-layout>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold text-center mb-6">Deutschland allgemein</h1>

        <div class="flex items-center justify-center">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                <a href="{{ route('questions.index', [ 'state' => 'general'] ) }}">
                    <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-xl font-semibold">Deutschland</h2>
                        <p class="mt-2 text-gray-600">Alle 300 Fragen mit Antwort</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="container mx-auto mt-5">
            <h1 class="text-2xl font-bold text-center mb-6">Bundesland</h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @foreach (App\Models\Question::$bundesland as $state)
                    <a href="{{ route('questions.index', ['state' => $state]) }}">
                        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <p class="mt-2 text-gray-800 text-xl">{{ $state }}</p>
                            <p class="mt-2 text-gray-600 text-xs">10 Fragen mit Antwort</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
</x-layout> 
