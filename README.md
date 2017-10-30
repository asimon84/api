Sample API Project

This is a sample RESTful API service to be used in conjunction with the sample CRM project as an entry point to add Clients, Products, Merchant Accounts (MIDs), and Order information.

Installation

Download the project, and after opening a terminal and navigating to the root of the project, type 'composer install'.  Create a localhost databse called 'crm' where the 'root' user has access with no password.  Use the env.example file in the root of the directory to create a .env file and you can customize the database credentials there.  Once a database is set up, type php artisan migrate:fresh --seed in the terminal.  Once that is done type 'php artisan serve' to serve the internal Laravel server.  Now open Postman to test all of the API methods.  The URLs will begin with http://127.0.0.1:8000/api/.  The endpoints can be found in the app/routes/api.php file.
