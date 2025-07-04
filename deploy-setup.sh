#!/bin/bash

echo "🚀 SMAN 1 Nagreg - Setup Deployment"
echo "==================================="

# Check if git is initialized
if [ ! -d ".git" ]; then
    echo "📦 Initializing Git repository..."
    git init
    git add .
    git commit -m "Initial commit: SMAN 1 Nagreg website"
fi

# Generate application key
echo "🔑 Generating application key..."
php artisan key:generate

# Install dependencies
echo "📚 Installing dependencies..."
composer install --no-dev --optimize-autoloader
npm install

# Build assets
echo "🎨 Building frontend assets..."
npm run build

# Run migrations
echo "🗄️ Running database migrations..."
php artisan migrate --force

# Clear and cache
echo "⚡ Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "✅ Setup complete! Ready for deployment."
echo ""
echo "🚀 DEPLOYMENT OPTIONS:"
echo ""
echo "OPTION A: Netlify (Recommended - Easy Laravel support)"
echo "1. Go to: https://netlify.com"
echo "2. Sign up with GitHub"
echo "3. New site from Git → Select this repository"
echo "4. Build settings will auto-detect from netlify.toml"
echo "5. Deploy site!"
echo ""
echo "OPTION B: Vercel (Serverless)"
echo "1. Go to: https://vercel.com"
echo "2. Import Git repository"
echo "3. Deploy (may need runtime fixes)"
echo ""
echo "OPTION C: Railway (Database included)"
echo "1. Go to: https://railway.app"
echo "2. Deploy from GitHub"
echo "3. Add MySQL database addon"
