@echo off
echo 🚀 SMAN 1 Nagreg - Setup Deployment
echo ===================================

REM Check if git is initialized
if not exist ".git" (
    echo 📦 Initializing Git repository...
    git init
    git add .
    git commit -m "Initial commit: SMAN 1 Nagreg website"
)

REM Generate application key
echo 🔑 Generating application key...
php artisan key:generate

REM Install dependencies
echo 📚 Installing dependencies...
composer install --no-dev --optimize-autoloader
npm install

REM Build assets
echo 🎨 Building frontend assets...
npm run build

REM Run migrations
echo 🗄️ Running database migrations...
php artisan migrate --force

REM Clear and cache
echo ⚡ Optimizing application...
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo ✅ Setup complete! Ready for deployment.
echo.
echo Next steps:
echo 1. Push to GitHub: git remote add origin ^<your-repo-url^> ^&^& git push -u origin main
echo 2. Deploy to Railway: https://railway.app
echo 3. Add PostgreSQL database addon
echo 4. Set environment variables

pause
