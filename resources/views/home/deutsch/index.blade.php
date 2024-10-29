<x-layout>
    <div class="container mx-auto px-4 py-10">
        <!-- Header Section -->
        <header class="text-center mb-10">
            <h1 class="text-4xl font-bold text-blue-700">Willkommen bei der Einbürgerungsquiz-Anwendung</h1>
            <p class="text-lg text-gray-600 mt-4">Bereiten Sie sich mit interaktiven Quizfragen und persönlichem Feedback
                auf Ihre Einbürgerungsprüfung vor.</p>
        </header>

        <!-- About the Application -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">Über die Anwendung</h2>
            <p class="text-gray-700 leading-relaxed">
                Diese Anwendung wurde entwickelt, um den Nutzern auf einzigartige und ansprechende Weise bei der
                Vorbereitung auf ihre Einbürgerungsprüfung zu helfen. Das Quiz umfasst eine Reihe allgemeiner Fragen
                sowie zusätzliche Fragen, die spezifisch für den Bundesstaat des Nutzers sind. Mit einer
                benutzerfreundlichen Oberfläche, personalisiertem Feedback und Sprachunterstützung bietet die Anwendung
                eine effektive Möglichkeit zum Lernen.
            </p>
        </section>

        <!-- Key Features -->
        <section class="bg-blue-50 p-6 rounded-lg mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">Hauptmerkmale</h2>
            <ul class="list-disc pl-6 space-y-2">
                <li><strong>Interaktive Quizze:</strong> Üben Sie mit zufällig ausgewählten Fragen, jedes Mal, wenn Sie
                    einen Test machen.</li>
                <li><strong>Lokalisierte Inhalte:</strong> Das Quiz ist in mehreren Sprachen verfügbar, darunter
                    Deutsch, Englisch, Dari und Pashto, mit Inhalten, die basierend auf der Auswahl des Nutzers
                    angezeigt werden.</li>
                <li><strong>Bundeslandspezifische Fragen:</strong> Jedes Quiz enthält Fragen, die auf den gewählten
                    Bundesstaat zugeschnitten sind, um ein personalisiertes Erlebnis zu bieten.</li>
                <li><strong>Sofortiges Feedback:</strong> Antworten werden sofort als richtig oder falsch markiert,
                    sodass Sie beim Lernen sofort Feedback erhalten.</li>
                <li><strong>Überprüfung der Endpunktzahl:</strong> Überprüfen Sie Ihre Antworten und sehen Sie Ihre
                    Punktzahl nach jedem Quiz, um Ihren Fortschritt zu verfolgen.</li>
            </ul>
        </section>

        <!-- How It Works -->
        <section class="bg-white shadow-lg rounded-lg p-6 mb-10">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">So funktioniert es</h2>
            <ol class="list-decimal pl-6 space-y-2">
                <li>Wählen Sie Ihren Bundesstaat aus der Liste der Optionen, um zu beginnen.</li>
                <li>Beantworten Sie 33 Fragen: 30 allgemeine Fragen und 3 bundeslandspezifische Fragen.</li>
                <li>Jede Frage hat vier Antwortmöglichkeiten. Wählen Sie die Antwort, die Sie für richtig halten.</li>
                <li>Sofortiges Feedback zeigt, ob Ihre Wahl richtig oder falsch ist, und hilft Ihnen, vor Ort zu lernen.
                </li>
                <li>Nach Abschluss wird Ihre Endpunktzahl zusammen mit einer Zusammenfassung der richtigen Antworten
                    angezeigt.</li>
            </ol>
        </section>

        <!-- Start Quiz Button -->
        <div class="text-center">
            <a href="{{ route('test.list') }}"
                class="inline-block bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
                Starten Sie Ihr Quiz
            </a>
        </div>
    </div>
</x-layout>
