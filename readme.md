# Steps to integrate package with Laravel

- php artisan vendor:publish --provider="primarypartition\spp\Providers\SppServiceProvider" --tag="config"
- php artisan vendor:publish --tag=public --force
- composer dump-autoload
- php artisan migrate
- composer update
