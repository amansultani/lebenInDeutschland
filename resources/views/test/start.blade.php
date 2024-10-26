<x-layout>
    <div x-data="{
        visibility: true,
        question_counter: 0
    }" class="container mx-auto mt-5">
        <h1 class="text-xl font-bold text-center mb-6">{{ $bundesland }} State Test</h1>
        @foreach ($questions as $index => $question)
            <div class="flex items-center justify-center mb-6" :class="{ 'hidden': !visibility }">
                <div
                    class="w-full max-w-2xl bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <h4 class=" text-sm font-semibold mb-2">
                        {{ $index + 1 }}. {{ $question->question_text_de }}
                    </h4>
                    @if ($translation !== 'de')
                        <p
                            class="text-sm mb-2 text-gray-500 {{ in_array($translation, ['dari', 'pashto']) ? 'rtl' : '' }} ">
                            {{ $index + 1 }}.
                            {{ $question->{'question_text_' . $translation} }}
                        </p>
                    @endif
                    @if ($question->image == 1.0)
                        <img src="{{ asset('imageQuestions/' . $question->id . '.jpg') }}" alt="Question Image"
                            class="mt-4 w-full h-auto rounded-lg">
                    @endif
                    <div x-data="{ selectedAnswer: null, correctAnswer: {{ $question->answers->where('is_correct', 1)->first()->id }} }" class="answers">
                        @foreach ($question->answers->shuffle() as $answer)
                            <label
                                :class="{
                                    'bg-green-100': selectedAnswer == {{ $answer->id }} && selectedAnswer ==
                                        correctAnswer,
                                    'bg-red-100': selectedAnswer == {{ $answer->id }} && selectedAnswer !=
                                        correctAnswer,
                                    'bg-green-100': selectedAnswer && {{ $answer->id }} == correctAnswer,
                                    'hover:bg-gray-100': !selectedAnswer,
                                }"
                                class="flex items-start p-2 rounded-lg border cursor-pointer transition mb-1 answer-label bg-gray-50 ">

                                <input type="radio" name="answer_{{ $question->id }}" value="{{ $answer->id }} "
                                    @click="selectedAnswer = {{ $answer->id }}; {{ $answer->id }} == correctAnswer ? question_counter++ : '' "
                                    class="answer-radio mr-3 mt-1" x-bind:disabled="selectedAnswer">

                                <div class="w-full">
                                    <span class="block text-gray-800">{{ $answer->answer_text_de }}</span>
                                    @if ($translation === 'en' && $answer->answer_text_en)
                                        <span class="block text-gray-600 text-sm">{{ $answer->answer_text_en }}</span>
                                    @elseif (in_array($translation, ['dari', 'pashto']))
                                        <span
                                            class="block text-gray-600 text-sm text-right rtl">{{ $answer->{'answer_text_' . $translation} }}</span>
                                    @endif
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <div class="flex  justify-center mb-10 " :class="{ 'hidden': !visibility }">
            <button @click=" visibility = ! visibility"
                class="h-10 px-6 font-semibold rounded-md bg-blue-600 text-white" type="submit">Submit test</button>
        </div>

        <div class="flex items-center justify-center mb-6 hidden" :class="{ 'hidden': visibility }">
            <div
                class="w-full max-w-2xl bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 text-center">
                <h2 class="   text-slate-800 text-2xl mb-4">Result </h2>
                <p class="mb-6"><strong x-text= "question_counter"></strong> / 33 </p>
                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 type="submit"
                    href="{{ route('test.start', $bundesland) }}">Retake Test</a>
                    <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 type="submit"
                    href="{{ route('test.list') }}">Home</a>
            </div>
        </div>
    </div>
</x-layout>
