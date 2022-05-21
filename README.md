## Perfect check

This is a technical challenge for an important digital payments company.

It consists in an API that receives a positive integer number,
and checks if it's a [perfect number](https://en.wikipedia.org/wiki/Perfect_number).


#### Installation

Docker Compose is required. Clone the repository and run this:

    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs

It will initialize a small Docker container with PHP and Composer to install the application's dependencies.

After that, run `./vendor/bin/sail up` to initialize the rest of the application
([Sail](https://laravel.com/docs/9.x/sail) is a Laravel wrapper for Docker Compose).  

Then, copy and rename `.env.example` to `.env`, and generate the application encryption key:

    cp .env.example .env
    ./vendor/bin/sail artisan key:generate

Then the API will be ready, its endpoint is `/api/perfect-check/{number}`.
It returns plain strings.

If an UI is needed, run `./vendor/bin/sail npm install` and `./vendor/bin/sail npm run dev`.  
It will initialize Axios and the required Javascript functions.