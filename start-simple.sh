#!/bin/bash

# Alternative simple start script
echo "🚀 Simple Laravel start for Railway..."

# Force composer install
echo "📦 Installing dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# Check if autoload exists
if [ ! -f "vendor/autoload.php" ]; then
    echo "❌ FATAL: vendor/autoload.php missing"
    exit 1
fi

# Migrate and serve
echo "🗄️ Migrating database..."
php artisan migrate --force

echo "🌐 Starting server..."
php artisan serve --host=0.0.0.0 --port=$PORT
