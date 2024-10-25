<x-layout>
    <div class="container mx-auto mt-5">
        <h1 class="text-xl font-bold text-center mb-6">Choose Bundesland to start test</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($bundeslands as $bundesland)
                <a href="{{ route('test.start', $bundesland) }}">
                    <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <p class="mt-2 text-gray-800 text-xl">{{$bundesland }}</p>
                        
                    </div>
                </a>
            @endforeach
        </div>
    </div>

</x-layout>