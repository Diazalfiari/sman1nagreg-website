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
chmod -R 755 storage bootstrap/cache 2>/dev/null || true

# Generate key if needed
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "" ]; then
    echo "🔑 Generating APP_KEY..."
    php artisan key:generate --force
fi

# Wait for database to be ready
echo "⏳ Waiting for database connection..."
timeout=60
while ! php artisan migrate:status --quiet 2>/dev/null; do
    if [ $timeout -le 0 ]; then
        echo "⚠️ Database timeout, continuing without migrations..."
        break
    fi
    echo "Waiting for database... ($timeout seconds remaining)"
    sleep 2
    timeout=$((timeout-2))
done

# Run migrations if database is available
if php artisan migrate:status --quiet 2>/dev/null; then
    echo "🗄️ Running database migrations..."
    php artisan migrate --force --no-interaction
    
    echo "🌱 Seeding database..."
    php artisan db:seed --force --no-interaction || echo "⚠️ Seeding failed, continuing..."
else
    echo "⚠️ Skipping migrations - database not ready"
fi

# Clear caches (don't optimize yet to avoid errors)
echo "🧹 Clearing caches..."
php artisan config:clear 2>/dev/null || true
php artisan cache:clear 2>/dev/null || true
php artisan view:clear 2>/dev/null || true

echo "✅ Deployment completed successfully!"
echo "🌐 Starting web server on port ${PORT:-8000}..."

# Start the application
exec php artisan serve --host=0.0.0.0 --port=${PORT:-8000}
