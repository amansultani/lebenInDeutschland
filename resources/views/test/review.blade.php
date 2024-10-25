<x-layout>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold text-center mb-6">Test Review</h1>
        <p class="text-center mb-4">You scored {{ $correctAnswers }} / {{ count($testQuestions) }}</p>

        @foreach ($testQuestions as $index => $question)
            <div class="review-section mb-8 p-4 rounded-lg shadow-lg bg-white">
                <h4 class="text-lg font-semibold">{{ $index + 1 }}. {{ $question->question_text_de }}</h4>
                
                <ul>
                    @foreach ($question->answers as $answer)
                        @php
                            $isSelected = collect($testAnswers)->where('question_id', $question->id)->where('selected_answer', $answer->id)->first();
                            $isCorrect = $answer->is_correct ? 'bg-green-100' : ($isSelected ? 'bg-red-100' : 'bg-gray-50');
                        @endphp
                        <li class="p-2 rounded-lg {{ $isCorrect }}">
                            {{ $answer->answer_text_de }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</x-layout>
