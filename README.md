#faq

To run the faq project:
1.Git Clone https://github.com/Venkateshsridharann/FAQ.git
2.CD into FAQ and run composer install
3.cp .env.example to .env
4.run: php artisan key:generate
5.setup database / with sqlite or other https://laravel.com/docs/5.6/database
6.Run: php artisan migrate
7.Run: unit tests: phpunit
8.Run: seeds php artisan migrate:refresh --seed
