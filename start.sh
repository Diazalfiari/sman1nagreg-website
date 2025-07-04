#!/bin/bash

# Make sure we're in the right directory
cd /app

# Install dependencies if vendor doesn't exist
if [ ! -d "vendor" ]; then
    echo "Installing Composer dependencies..."
    composer install --no-dev --optimize-autoloader --no-interaction
fi

# Generate application key if not exists
if [ -z "$APP_KEY" ]; then
    echo "Generating application key..."
    php artisan key:generate --force --no-interaction
fi

# Wait for database to be ready
echo "Waiting for database..."
sleep 10

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force --no-interaction

# Cache configurations for better performance  
echo "Caching configurations..."
php artisan config:cache --no-interaction || echo "Config cache failed, continuing..."
php artisan route:cache --no-interaction || echo "Route cache failed, continuing..."
php artisan view:cache --no-interaction || echo "View cache failed, continuing..."

# Start the application
echo "Starting application..."
php artisan serve --host=0.0.0.0 --port=$PORT
