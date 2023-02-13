# RestAPI App
A simple Laravel Rest Api with santum authentication package that could handle both first-party web requests from a web browser and API requests via tokens.

## Requirements
* PHP 8.1 or higher
* Laravel 9.x
* MySQL 8.0 or higher

## Installation
To install the Laravel app, follow these steps:

* Clone the repository to your local machine
```bash
Copy code
git clone https://github.com/mcben267/RestApi.git
```
* Change into the app directory
```bash
cd ussd-app
```
* Install dependencies
```bash
composer install
npm install
npm run dev
```
* Create a copy of the .env file
```bash
cp .env.example .env
```
* Generate an app key
```bash
php artisan key:generate
```

* Create a database and update the .env file with the database credentials

* Run the migrations
```bash
php artisan migrate
```
* Start the development server
```bash
php artisan serve
```
Verify the deployment by navigating to your server address in
your preferred browser.

```bash
http://127.0.0.1:8000
```

## Usage
* Register a new account
* Log in to the app
* View user profile
* Log out of the app


## Contributing
If you want to contribute to the Laravel app, feel free to fork the repository and create a pull request with your changes.

### License
The USSD app is open-source software licensed under the **MIT license**.
