#!/bin/bash
set -e

echo "🚀 Starting SMAN 1 Nagreg deployment..."

# Install Composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction

# Install Node dependencies and build assets
if [ -f "package.json" ]; then
    echo "📦 Installing Node.js dependencies..."
    npm install --production=false
    
    echo "🏗️ Building production assets..."
    npm run build
fi

# Set permissions
echo "🔐 Setting permissions..."
chmod -R 755 storage bootstrap/cache

# Generate key if needed
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "" ]; then
    echo "🔑 Generating APP_KEY..."
    php artisan key:generate --force
fi

# Run migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force --no-interaction

# Optimize for production
echo "⚡ Optimizing application..."
php artisan config:cache
php artisan route:cache  
php artisan view:cache

echo "✅ Deployment completed successfully!"
echo "🌐 Starting web server..."

# Start the application
exec php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
