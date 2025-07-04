#!/bin/bash

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate application key if not exists
php artisan key:generate --force

# Cache configurations for better performance  
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run database migrations
php artisan migrate --force

# Start the application
php artisan serve --host=0.0.0.0 --port=$PORT
