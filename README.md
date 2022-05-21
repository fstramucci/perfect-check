## Perfect check

This is a technical challenge for an important digital payments company.

It consists in an API that receives a positive integer number,
and checks if it's a [perfect number](https://en.wikipedia.org/wiki/Perfect_number).


##### Installation

Docker Compose is required. Clone the repository and run `./vendor/bin/sail up`
(Laravel Sail wrapper for Docker Compose).  
After that the API will be ready, its endpoint is `/api/perfect-check/{number}`.
It returns plain strings.

If an UI is needed, run `./vendor/bin/sail npm install` and `./vendor/bin/sail npm run dev`.
It will initialize Axios and the required Javascript functions.