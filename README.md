# Documentation

This repository offers a great starting point for testing your Jenga API. This repo implements [Jenga API wrapper for Laravel](https://github.com/njoguamos/laravel-jenga) by [@njoguamos](https://github.com/njoguamos).

## Prerequisite

Before cloning this repository, ensure you have the following from JengaHQ
1. You have created an account with JengaHQ. [Register account here](https://v3.jengahq.io/registration)
2. You have a `merchantCode`, `consumerSecret` and `Api-Key`. [Learn how to generate these credentials](https://developer.jengaapi.io/docs/developer-quickstart)
3. You have subscribed to JengaAPI subscriptions. Without subscription, requests may fail.
4. You have added a bank account in your JengaHQ dashboard. This account can be real bank account or demo bank account.

## Installation

### Clone the repo

```shell
git clone git@github.com:njoguamos/laravel-jenga-playground.git
```

### Create `.env` file

```shell
cp .env.example .env  
```

### Generate application key

```shell
php artisan key:generate
```

### Update you `.env` variables 

```dotenv
# Database connection
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_jenga_playground
DB_USERNAME=root
DB_PASSWORD=

# Jenga Credenatials
JENGA_LIVE_MODE=false
JENGA_API_KEY=
JENGA_CONSUMER_SECRET=
JENGA_MERCHANT_CODE=
```

### Migrate databse

```shell
php artisan migrate
```

### Generate `njoguamos/laravel-jenga` ssl keys

```shell
php artisan jenga:keys
```

### Copy public key to your JengaHq dashboard

```shell
 pbcopy < ./storage/jenga.pub.key
```

### Automatically generate bearer token

Open your application in a new shell and run the following command. This command will generate `Bearer token` every five minutes.

```shell
php artisan schedule:work 
```

### Server the application

```shell
vite build && php artisan serve
```

Open the application [http://127.0.0.1:8000](http://127.0.0.1:8000) in a browser

