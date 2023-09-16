# README

## About the Application

This is a simple Laravel project for managing contacts. It includes a default administrator with the following credentials:

- Email: admin@contact.com
- Password: admin123

## Prerequisites

Before starting the application, you must ensure that your environment meets the following prerequisites:

- [PHP](https://www.php.net/) (PHP 7.4 or higher recommended)
- [Composer](https://getcomposer.org/) for managing PHP dependencies
- [Node.js](https://nodejs.org/) and [npm](https://www.npmjs.com/) for managing JavaScript dependencies (optional)
- [MySQL](https://www.mysql.com/) or another compatible database management system
- [Git](https://git-scm.com/) for version control

## Project Initialization

Follow these steps to initialize the project:

# Clone this repository to your local environment:
git clone <REPOSITORY_URL>

# Navigate to the project directory:
cd <DIRECTORY_NAME>

# Install PHP dependencies using Composer:
composer install

# Create a `.env` file based on `.env.example` and configure it with your database settings:
cp .env.example .env

# Open the `.env` file and configure environment variables, such as the database, as needed.

# Generate an application key:
php artisan key:generate

# Run database migrations to create the necessary tables:
php artisan migrate

# Start the development server:
php artisan serve

The server will be available at http://localhost:8000.

## Accessing the Default Administrator

#You can access the default administrator using the following credentials:

Email: admin@contact.com
Password: admin123







