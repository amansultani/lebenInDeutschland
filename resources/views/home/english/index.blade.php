<x-layout>
    <div class="container mx-auto px-4 py-10">
        <!-- Header Section -->
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-700">Welcome to the Citizenship Quiz Application</h1>
            <p class="text-lg text-gray-600 mt-4">Prepare for your citizenship test with interactive quizzes and
                personalized feedback.</p>
        </header>

        <!-- About the Application -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">About the Application</h2>
            <p class="text-gray-700 leading-relaxed">
                This application is designed to help users prepare for their citizenship test in a unique and engaging
                way. The quiz covers a range of general questions and additional questions specific to the user's state.
                With a user-friendly interface, personalized feedback, and language support, the application provides an
                effective way to study.
            </p>
        </section>

        <!-- Key Features -->
        <section class="bg-blue-50 p-6 rounded-lg mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">Key Features</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>Interactive Quizzes:</strong> Practice with randomly selected questions every time you take
                    a test.</li>
                <li><strong>Localized Content:</strong> The quiz is available in multiple languages, including German,
                    English, Dari, and Pashto, with content displayed based on user selection.</li>
                <li><strong>State-Specific Questions:</strong> Each quiz includes questions tailored to the selected
                    state to provide a personalized experience.</li>
                <li><strong>Immediate Feedback:</strong> Answers are marked as correct or incorrect instantly, allowing
                    you to learn as you go.</li>
                <li><strong>Final Score Review:</strong> Review your answers and see your score after each quiz to track
                    your progress.</li>
            </ul>
        </section>

        <!-- How It Works -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">How It Works</h2>
            <ol class="list-decimal pl-6 space-y-2">
                <li>Select your state from the list of options to get started.</li>
                <li>Answer 33 questions: 30 general questions and 3 state-specific questions.</li>
                <li>Each question has four multiple-choice answers. Select the answer you think is correct.</li>
                <li>Instant feedback shows if your choice is right or wrong, helping you learn on the spot.</li>
                <li>Once completed, your final score will be displayed along with a summary of correct answers.</li>
            </ol>
        </section>

        <!-- Start Quiz Button -->
        <div class="text-center">
            <a href="{{ route('test.list') }}"
                class="inline-block bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Start Your Quiz
            </a>
        </div>
    </div>
</x-layout>
