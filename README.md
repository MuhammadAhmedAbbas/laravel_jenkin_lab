# Laravel Jenkins Lab

A Laravel student CRUD application for a DevOps CI/CD assignment.

## Features
- Create students
- View students
- Edit students
- Delete students

## Technologies
- Laravel and PHP
- SQLite
- Composer
- GitHub
- Jenkins

## Run locally
```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve