<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Configuration

# Clone this repository

$ git clone https://github.com/youssifehab/TODO-LIST-QTC.git

# Go into the repository folder

$ cd TODO-LIST-QTC

# Create a new .env file based on .env.example

$ cp .env.example .env

# you can set new database environment variables

# If you want activate forget password feature set mail configuration in

.env file to this:

# MAIL_MAILER=smtp

# MAIL_HOST=smtp.gmail.com

# MAIL_PORT=587

# MAIL_USERNAME=your_email@gmail.com

# MAIL_PASSWORD=your-app-password-from-gmail

# MAIL_ENCRYPTION=tls

# MAIL_FROM_ADDRESS="your_email@gmail.com"

# MAIL_FROM_NAME="${APP_NAME}"

# then run this command php artisan config:cache

## Migration

$ php artisan migrate
