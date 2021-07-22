* After Cloning the project run git submodule update --init
* Then Run git submodule update --remote
* This is done to fetch the angular Project that serves as the Front-End
* Change Directory to resources/Task_angular then Run npm install then ng serve
* As for Database you will need to change DB_DATABASE Varaible in .env file to the path of the database on your machine
* Run composer install then php artisan db:seed --class=CountrySeeder this  will add the country names and country codes in a table Country Code 
* Run php artisan db:seed --class=CustomerSeeder that will create a table called customer and add the users in it
* Run php artisan serve
 