# Hamizah Quotes Application

## Requirements
- Laravel 9
- PHP 8.0+
- Composer
- Node.js

## Setup Instructions
1. Run `composer install`.
2. Copy `.env.example` to `.env`
3. Run `php artisan key:generate`.
4. Install frontend dependencies with `npm install`.
5. Compile assets with `npm run dev`.
6. Start the server with `php artisan serve`.

## Usage
- Visit `/quotes` to view and refresh quotes.
- Use the API endpoint `/api/quotes/{count}` to fetch random quotes in JSON format.
