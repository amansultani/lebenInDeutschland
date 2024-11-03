
# Leben in Deutschland - Citizen Test Application

Leben in Deutschland is a comprehensive, multilingual citizen test application built using Laravel. The application covers all questions required for the German citizenship test, including questions for each Bundesland (state) as well as the 300 general questions applicable to all candidates. This project is part of my portfolio and demonstrates my skills in Laravel, localization, and full-stack web development.

## Features

- **Bundesland-Specific Tests**: Access specific tests for each Bundesland, including localized questions for more personalized study.
- **Complete Question Database**: Includes all 300 official general questions for the citizenship test, with additional state-specific questions.
- **Localization Support**: Questions and answers are available in multiple languages — German, Dari, Pashto, and English — translated using AWS Translation Services.
- **Test Results**: Start tests, answer questions, and view results instantly.
- **Interactive Front-End**: Designed using Alpine.js and Tailwind CSS for a responsive and interactive user experience.

## Tech Stack

- **Backend**: Laravel (Models, Scopes, Session Management)
- **Frontend**: Blade Templates, Alpine.js, Tailwind CSS
- **Localization**: AWS Translation Services for multilingual support

## Installation

To install and run the project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/lebenInDeutschland.git
   ```
2. Navigate to the project directory:
   ```bash
   cd lebenInDeutschland
   ```
3. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```
4. Set up the `.env` file:
   - Configure your database connection settings.
   - If you would like to have the data file contact me in person, I will provide the CSV file for questions and Answers
5. Run database migrations:
   ```bash
   php artisan migrate --seed
   ```
6. Start the development server:
   ```bash
   php artisan serve
   ```

## Usage

1. Access the application at `http://localhost:8000`.
2. Choose your preferred language.
3. Select a Bundesland or General test to begin.
4. Complete the test and view your results.

## Project Structure

- `app/Models` - Contains all Eloquent models.
- `resources/views` - Contains Blade templates for frontend views.
- `routes/web.php` - Defines application routes.
- `public/js` - Contains Alpine.js components.
- `resources/lang` - Houses localization files for supported languages.

## Screenshots

(Include screenshots here if available)

## Future Enhancements

- Add support for more languages.
- Enhance the UI with advanced animations and transitions.
- Integrate user accounts and progress tracking.

## License

This project is licensed under the MIT License.
