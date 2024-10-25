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
                    
                    {{-- Conditionally display the translation based on selected language --}}
                    @php
                        $translatedQuestionText = match(app()->getLocale()) {
                            'en' => $question->question_text_en,
                            'ps' => $question->question_text_pashto,
                            'fa' => $question->question_text_dari,
                            default => null
                        };
                        $rtlClass = in_array(app()->getLocale(), ['ps', 'fa']) ? 'rtl' : '';
                    @endphp
                    @if($translatedQuestionText)
                        <p class="text-sm text-gray-500 {{$rtlClass}} ">{{ $index + 1 }}. {{ $translatedQuestionText }}</p>
                    @endif

                    {{-- Display question image if available --}}
                    @if($question->image == 1.0)
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

                                {{-- Conditionally display the translation based on selected language --}}
                                @php
                                    $translatedAnswerText = match(app()->getLocale()) {
                                        'en' => $answer->answer_text_en,
                                        'ps' => $answer->answer_text_pashto,
                                        'fa' => $answer->answer_text_dari,
                                        default => null
                                    };
                                @endphp
                                @if($translatedAnswerText)
                                    <p class="text-sm text-gray-500 {{$rtlClass}}">{{ $translatedAnswerText }}</p>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
