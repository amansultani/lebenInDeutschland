<x-layout>
    <div class="container mx-auto mt-5">
        <div>
            <h1 class="text-2xl font-bold text-center mb-6">Deutschland - Alle Fragen</h1>
            <div class="flex items-center justify-center hover:scale-105">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                    <a href="{{ route('questions.index', ['state' => 'general']) }}">
                        <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-50 transition-shadow duration-300 flex items-center">
                            <!-- Image beside the text -->
                            <img src="{{ asset('bundeslander_logos/deutschland.png') }}" alt="Deutschland flag" class="w-12 h-12 mr-4">
                            <div>
                                <p class="mt-2 text-gray-800 text-lg">Deutschland</p>
                                <p class="mt-1 text-gray-600">Alle 300 Fragen mit Antworten</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-5 mb-10">
            <h1 class="text-2xl font-bold text-center mb-6">Bundesland Fragen</h1>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                @foreach (App\Models\Question::$bundesland as $state)
                    <a href="{{ route('questions.index', ['state' => $state]) }}">
                        <div
                            class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-100 hover:scale-105 transition-shadow duration-300 flex items-center">
                            <img src="{{ asset('bundeslander_logos/' . $state . '-min.png') }}"
                                alt="{{ $state }} flag" class="w-12 h-12 mr-3">
                            <div>
                                <p class="mt-2 text-gray-800 text-lg">{{ $state }}</p>
                                <p class="mt-2 text-gray-600 text-xs">10 Fragen mit Antworten</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
</x-layout>
