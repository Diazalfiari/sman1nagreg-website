# 🚀 Panduan Deployment Website SMAN 1 Nagreg

## Pilihan Platform Hosting Gratis

### 1. Railway (Direkomendasikan) ⭐

**Kelebihan:**

-   Gratis $5/bulan credit
-   Deploy otomatis dari Git
-   Support Laravel & PostgreSQL
-   SSL certificate gratis
-   Domain .up.railway.app

**Langkah-langkah:**

#### A. Persiapan

1. Buat akun GitHub (jika belum ada)
2. Push kode ke GitHub repository
3. Daftar di [Railway](https://railway.app) dengan GitHub

#### B. Deploy

1. **Login Railway** → "New Project" → "Deploy from GitHub repo"
2. **Pilih repository** website SMAN 1 Nagreg
3. **Add Database** → PostgreSQL (gratis)
4. **Set Environment Variables:**
    ```
    APP_KEY=base64:your-key-here
    APP_ENV=production
    APP_DEBUG=false
    APP_URL=https://your-app.up.railway.app
    ```
5. **Deploy** → Tunggu selesai

### 2. Heroku

**Kelebihan:**

-   Platform mature
-   Add-ons lengkap
-   Documentation bagus

**Langkah-langkah:**

1. Install [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli)
2. Login: `heroku login`
3. Create app: `heroku create sman1nagreg-app`
4. Add database: `heroku addons:create heroku-postgresql:hobby-dev`
5. Deploy: `git push heroku main`

### 3. Vercel + PlanetScale

**Kelebihan:**

-   Vercel: Deploy frontend gratis
-   PlanetScale: Database MySQL gratis

**Langkah-langkah:**

1. Deploy di [Vercel](https://vercel.com)
2. Database di [PlanetScale](https://planetscale.com)
3. Connect keduanya

## 🛠️ Setup Environment Variables

Untuk semua platform, set variable berikut:

```env
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:your-generated-key
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=pgsql
DB_HOST=your-db-host
DB_PORT=5432
DB_DATABASE=your-db-name
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password

SESSION_DRIVER=database
CACHE_STORE=database
QUEUE_CONNECTION=database
```

## 📋 Checklist Before Deploy

-   [ ] Generate APP_KEY: `php artisan key:generate`
-   [ ] Set APP_DEBUG=false
-   [ ] Configure database credentials
-   [ ] Test locally: `php artisan serve`
-   [ ] Build assets: `npm run build`
-   [ ] Run migrations: `php artisan migrate`
-   [ ] Optimize: `php artisan optimize`

## 🚨 Troubleshooting

### ❌ Railway Error: "vendor/autoload.php not found"

**STEP-BY-STEP FIX:**

#### 1. Clear Railway Cache

```bash
# Add environment variables di Railway:
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
```

#### 2. Let Railway Auto-Detect (RECOMMENDED)

```bash
# Remove custom config dan let Railway handle:
mv nixpacks.toml nixpacks.toml.backup
git add . && git commit -m "Remove nixpacks config for auto-detection"
git push origin main
# Redeploy di Railway
```

#### 3. Manual Deploy Commands di Railway CLI

```bash
# Install Railway CLI: npm install -g @railway/cli
railway login
railway link
railway run composer install --no-dev --optimize-autoloader
railway run php artisan migrate --force
```

#### 4. Nuclear Option - Fresh Railway Project

1. Delete current Railway project
2. Create NEW project dari GitHub
3. JANGAN set nixpacks.toml
4. Add PostgreSQL database
5. Set environment variables:
    ```
    APP_KEY=base64:cf6+s6/l/joIDj9nmtO6c2/KI4aNAEMK+ZZUeN1cDJs=
    APP_ENV=production
    APP_DEBUG=false
    NIXPACKS_NO_CACHE=1
    ```

### Error: "No application encryption key"

```bash
php artisan key:generate --show
```

Copy output ke environment variable APP_KEY

### Error: Database connection

-   Pastikan DB credentials benar
-   Check DB host/port/name
-   Test connection di platform hosting

### Error: 500 Internal Server Error

-   Set APP_DEBUG=true temporarily
-   Check logs di platform hosting
-   Pastikan .env variables sudah set

### Error: CSS/JS tidak load

-   Run `npm run build`
-   Check public/build folder exists
-   Verify Vite build config

## 📞 Support

Jika ada masalah deployment:

1. Check logs di platform hosting
2. Verify environment variables
3. Test locally terlebih dahulu
4. Konsultasi dokumentasi platform

---

**Website:** SMAN 1 Nagreg  
**Tech Stack:** Laravel 12, Tailwind CSS, Livewire  
**Database:** PostgreSQL/MySQL
