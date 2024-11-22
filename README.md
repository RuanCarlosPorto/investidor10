To run this project follow bellow instructions: 

1. Run `composer install` to install dependencies
2. Run `./vendor/bin/sail up -d` to run docker container
3. Run `./vendor/bin/sail artisan migrate` to create tables
4. Run `./vendor/bin/sail artisan db:seed` to populate categories table with values
5. Access `http://0.0.0.0/` to use the website