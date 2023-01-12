<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Sail

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## How to run Laravel Project

##Mac Os, Ubuntu and windows users continue here:

-   Download composer https://getcomposer.org/download/
-   Pull Laravel/php project from git provider.
-   Rename `.env.example` file to `.env`inside your project root and fill the database information.
    (windows wont let you do it, so you have to open your console cd your project root directory and run `mv .env.example .env` )
-   Open the console and cd your project root directory
-   Run `composer install` or `php composer.phar install`
-   Run `sail up -d ` to run the server

Generate data

-   Run `sail artisan migrate` to create tables
-   Run `sail artisan db:seed` to create generic data

## API Documentation

```
Get /assessment -> get all assessment
```

```
Get /assessment/{id} -> get assessment by id
```

```
POST /assessment -> Create assessment
```

| Parameter                      | Type     | Default | Description     |
| ------------------------------ | -------- | ------- | --------------- |
| `resident_id` (required)       | `String` | `none`  | Conversation ID |
| `assessment_type` (required)   | `String` | `none`  | Message         |
| `facility_name` (required)     | `String` | `none`  | Message         |
| `clinical_category` (required) | `String` | `none`  | Message         |
| `days` (required)              | `int`    | `none`  | Message         |

DELETE /assessement -> Delete assessment

Thank you
Regards, Marc Angel
