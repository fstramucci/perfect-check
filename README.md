## Perfect check

This is a technical challenge for an important digital payments company.

It consists in an API that receives two positive integer numbers,
and checks for all [perfect numbers](https://en.wikipedia.org/wiki/Perfect_number) in that range.


### Installation

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

Then, copy and rename `.env.example` to `.env`, and generate the application encryption key.
You might need to use another terminal since Docker Compose will be running in the foreground:

    cp .env.example .env \
    ./vendor/bin/sail artisan key:generate

Then the API will be ready, its endpoint is `{localhost}/api/perfect-check/{number1}/{number2}` (GET request).
It returns a JSON array. It can be accessed at [localhost](http://localhost), where a Javascript
UI will be available for testing. It can also be accessed through `wget` or any HTTP request generator.

### Precomputing

It might be possible to generate a precomputed array for speed purposes.
See ["Sum of all Perfect numbers lying in the range [L, R]"](https://www.geeksforgeeks.org/sum-of-all-perfect-numbers-lying-in-the-range-l-r/)
for a solution in a similar assignment.
