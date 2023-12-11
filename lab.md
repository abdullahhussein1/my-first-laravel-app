# host

php artisan serve

# create table

php artisan make:migration

## note

-   you can check your existing tables inside database/migrations.
-   migration tables have naming convensions 1. all letters in lowercase 2. should use plural name for the table 3. ends with **table** word
-   eg/ students_table

# initialize database inside mySQL (if not already exist)

php artisan migrate
