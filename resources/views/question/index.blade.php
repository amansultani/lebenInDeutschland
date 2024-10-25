<x-layout>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold text-center mb-6">{{ $state }}</h1>
        
        @foreach ($questions as $index => $question)
            <div class="flex items-center justify-center mb-6">
                <div class="w-full max-w-3xl bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    
                    {{-- Display the question number and text --}}
                    <h4 class="text-lg font-semibold mb-2">
                        {{ $index + 1 }}. {{ $question->question_text_de }}
                    </h4>
                    
                    @if($translation !== 'de')
                        <p class="text-sm text-gray-500 {{ in_array($translation, ['dari', 'pashto']) ? 'rtl' : '' }}  ">
                            {{ $question->{'question_text_'.$translation} }}
                        </p>
                    @endif

                    {{-- Display question image if available --}}
                    @if($question->image == 1)
                        <img src="{{ asset('imageQuestions/' . $question->id . '.jpg') }}" alt="Question Image" class="mt-4 w-full h-auto rounded-lg">
                    @endif

                    {{-- Loop through answers --}}
                    <ul class="mt-4 space-y-2">
                        @foreach ($question->answers as $answer)
                            <li class="p-3 rounded-lg 
                            {{ $answer->is_correct ? 'bg-green-100' : 'bg-gray-50' }} 
                            transition-all">
                                
                                {{-- Display answer text --}}
                                <p class="text-gray-800">{{ $answer->answer_text_de }}</p>
                                @if($translation !== 'de')
                                    <p class="text-sm text-gray-500 {{ in_array($translation, ['dari', 'pashto']) ? 'rtl' : '' }} ">
                                        {{ $answer->{'answer_text_'.$translation} }}
                                    </p>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
