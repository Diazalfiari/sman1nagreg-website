#!/bin/bash
set -e

echo "🚀 Starting SMAN 1 Nagreg deployment..."

# Ensure we're in the app directory
cd /app

# Check if vendor exists, if not install dependencies
if [ ! -d "vendor" ] || [ ! -f "vendor/autoload.php" ]; then
    echo "📦 Installing Composer dependencies..."
    composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist
fi

# Verify autoload exists
if [ ! -f "vendor/autoload.php" ]; then
    echo "❌ ERROR: vendor/autoload.php not found after composer install"
    echo "📁 Current directory contents:"
    ls -la
    echo "📁 Vendor directory contents:"
    ls -la vendor/ || echo "vendor directory not found"
    exit 1
fi

# Generate application key if needed
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "" ]; then
    echo "🔑 Generating application key..."
    php artisan key:generate --force --no-interaction
fi

# Run migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force --no-interaction || echo "⚠️ Migration failed, continuing..."

# Clear and optimize (with error handling)
echo "⚡ Optimizing application..."
php artisan config:clear || echo "Config clear failed"
php artisan cache:clear || echo "Cache clear failed" 
php artisan view:clear || echo "View clear failed"

# Start server
echo "🌐 Starting web server on port $PORT..."
exec php artisan serve --host=0.0.0.0 --port=$PORT
