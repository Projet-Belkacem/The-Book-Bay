# Welcome to *The-Book-Bay* !
To **execute the project**, just Clone it and run this commands in the specific order :

 1. Update the project's dependencies : `composer update`
 2. Create a .env file : `copy .env.example .env` (you can edit it as you like)
 3. Generate a key for the project : `php artisan key:generate`
 4. Now go to your database manager (PhpMyAdmin, PGAdmin, Microsoft MSSMS...) and create the database (the name of the database should match the one on .env file) in our case the database name should be ***book_bay_db*** (as you can see in the .env : **DB_DATABASE=book_bay_db**) using the sql command `CREATE DATABASE book_bay_db`
 5. To build the database structure by running Migrations and SEEDS (creating tables and filling "fake" data automatically) `php artisan migrate:fresh --seed`
 6. done ! run the project using the `php artisan serve` 🔥🚀

✅ Let me know if everything goes as expected and also if not ! enjoy and do not forget to give a star in github is you like the project's code, that's will encourages the developper to do more 🙋‍♂️💻.

- Database : any (preference for PostgreSQL, MySQL)
- Backend : Laravel (v7)
- Frontend : HTML5 & CSS3, Bootstrap V4 (template [BookBay](https://primehostingindia.com/templatemonster/html/bookbay/about-us.html))
