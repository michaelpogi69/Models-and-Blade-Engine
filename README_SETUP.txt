MODELS_AND_BLADEENGINE_ACTIVITY SETUP

1. Create the Laravel project:
   composer create-project laravel/laravel Models_and_BladeEngine_Activity

2. Copy the files from this package into your Laravel project, replacing files with the same names.

3. Run these Artisan commands in your project folder:
   php artisan make:model Book -mf
   php artisan make:controller BookController

4. Set your database in .env:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=models_and_bladeengine_activity
   DB_USERNAME=root
   DB_PASSWORD=

5. Install Tailwind for Laravel:
   npm install
   npm install tailwindcss @tailwindcss/vite

6. Run migrations and seeders:
   php artisan migrate
   php artisan db:seed

7. Start the app:
   npm run dev
   php artisan serve

8. Open in browser:
   http://127.0.0.1:8000

WHAT IS INCLUDED
- Book model with HasFactory
- Migration for books table
- Book factory
- Seeder for 20 books
- BookController
- Route
- Blade layout with header and footer partials
- Book list in table format
- TailwindCSS setup through Vite
