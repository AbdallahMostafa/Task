* After Cloning the project run git submodule update --init
* Then Run git submodule update --remote
* This is done to fetch the angular Project that serves as the Front-End
* Change Directory to resources/Task_angular then Run npm install then ng serve
* As for Database you will need to change DB_DATABASE Varaible in .env file to the path of the database on your machine
* Run composer install 
* the data base provided is sufficient then you can use it right away if you want to create a new data base then  you will have to run php artisan migrate then run php artisan db:seed 
* Run php artisan serve
 