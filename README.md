to execute the project, just pull it and run these commands in this specific order :

to update the project's dependencies :
composer update

copy .env.example .env

php artisan key:generate

create the DB

php artisan migrate:fresh --seed

php artisan serve

## Authentification 

used tutorial : https://www.itsolutionstuff.com/post/laravel-6-multi-auth-authentication-tutorialexample.html

