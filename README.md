# Laravel Project: TODO List

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## Features

- **Authentication**: User registration, login, password and edit user profile data functionality.
- **Todo List CRUD Operations**: Create, read, update, and delete todo items.
- **Sorting and Filtering**: Sort and filter todo items for better organization.

## Configuration

1. Clone this repository:

   ```bash
   git clone https://github.com/youssifehab/TODO-LIST-QTC.git

2. Navigate to the repository folder: cd TODO-LIST-QTC

3. Create a new .env file based on .env.example: cp .env.example .env

4. Install dependencies by running this command: composer install

5. Set your database environment variables in the .env file.

6. (Optional) If you want to activate the “forgot password” feature do step 5 & 6, configure your mail settings in the .env file as follows:
- MAIL_MAILER=smtp
- MAIL_HOST=smtp.gmail.com
- MAIL_PORT=587
- MAIL_USERNAME=your_email@gmail.com
- MAIL_PASSWORD=your-gmail-app-password
- MAIL_ENCRYPTION=tls
- MAIL_FROM_ADDRESS="your_email@gmail.com"
- MAIL_FROM_NAME="${APP_NAME}"

6. (Optional) Run the following command to cache the configuration: php artisan config:cache

7. Run the migration to set up your database: php artisan migrate


