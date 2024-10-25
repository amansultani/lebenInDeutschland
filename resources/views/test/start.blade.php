<x-layout>
    <div class="container mx-auto mt-5">
        <h1 class="text-2xl font-bold text-center mb-6">Test for {{ $bundesland }}</h1>
        @foreach ($questions as $index => $question)
            <div class="flex items-center justify-center mb-6">
                <div
                    class="w-full max-w-3xl bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h4 class="text-lg font-semibold mb-2">
                        {{ $index + 1 }}. {{ $question->question_text_de }}
                    </h4>
                    @if ($translation !== 'de')
                        <p
                            class="text-sm mb-3 text-gray-500 {{ in_array($translation, ['dari', 'pashto']) ? 'rtl' : '' }} ">
                            {{ $index + 1 }}.
                            {{ $question->{'question_text_' . $translation} }}</p>
                    @endif

                    {{-- Display question image if available --}}
                    @if ($question->image == 1.0)
                        <img src="{{ asset('imageQuestions/' . $question->id . '.jpg') }}" alt="Question Image"
                            class="mt-4 w-full h-auto rounded-lg">
                    @endif


                    <div x-data="{ selectedAnswer: null, correctAnswer: {{ $question->answers->where('is_correct', 1)->first()->id }} }" class="answers">
                        @foreach ($question->answers->shuffle() as $answer)
                            <label :class="{
                                    'bg-green-100': selectedAnswer == {{ $answer->id }} && selectedAnswer == correctAnswer,
                                    'bg-red-100': selectedAnswer == {{ $answer->id }} && selectedAnswer != correctAnswer,
                                    'bg-green-100': selectedAnswer && {{ $answer->id }} == correctAnswer
                                }" 
                                class="flex items-start p-2 rounded-lg border cursor-pointer transition mb-2 answer-label bg-gray-50">
                                
                                <input type="radio" name="answer_{{ $question->id }}" value="{{ $answer->id }}" 
                                       @click="selectedAnswer = {{ $answer->id }}" 
                                       class="answer-radio mr-3 mt-1">
                                
                                <div class="w-full">
                                    {{-- Display German text --}}
                                    <span class="block text-gray-800">{{ $answer->answer_text_de }}</span>
                    
                                    {{-- Display translation if it is not English --}}
                                    @if ($translation === 'en' && $answer->answer_text_en)
                                        <span class="block text-gray-600 text-sm">{{ $answer->answer_text_en }}</span>
                                    @elseif (in_array($translation, ['dari', 'pashto']))
                                        <span class="block text-gray-600 text-sm text-right rtl">{{ $answer->{'answer_text_'.$translation} }}</span>
                                    @endif
                                </div>
                            </label>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        @endforeach
    </div>

    {{-- <script>
        document.querySelectorAll('.answer-form').forEach(form => {
            form.addEventListener('change', function(event) {
                let selectedAnswerId = event.target.value;
                let questionIndex = this.querySelector('[name="question_index"]').value;
                
                fetch("{{ route('test.submit') }}", {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    body: JSON.stringify({ answer_id: selectedAnswerId, question_index: questionIndex })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.is_correct) {
                        event.target.closest('label').classList.add('bg-green-100');
                        form.querySelector('.next-question').disabled = false;
                    } else {
                        event.target.closest('label').classList.add('bg-red-100');
                        form.querySelector(`[data-answer-id="${data.correct_answer_id}"]`).classList.add('bg-green-100');
                    }
                });
            });
        });
    </script> --}}
</x-layout>
