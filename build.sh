#!/bin/bash
echo "🔧 Custom build script for Railway"
echo "=================================="

# Install composer dependencies
echo "📦 Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction --verbose

# Verify autoload file exists
if [ ! -f "vendor/autoload.php" ]; then
    echo "❌ ERROR: vendor/autoload.php not found!"
    echo "📂 Contents of current directory:"
    ls -la
    echo "📂 Contents of vendor directory:"
    ls -la vendor/ 2>/dev/null || echo "vendor directory does not exist"
    exit 1
fi

echo "✅ vendor/autoload.php exists!"

# Install Node dependencies and build
if [ -f "package.json" ]; then
    echo "📦 Installing Node dependencies..."
    npm install
    echo "🏗️ Building assets..."
    npm run build
fi

echo "🎉 Build completed successfully!"
