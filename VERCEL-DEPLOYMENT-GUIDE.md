# 🚀 STEP-BY-STEP: DEPLOY LARAVEL KE VERCEL

## 📋 **PREPARATION CHECKLIST:**

-   [x] **vercel.json** created ✅
-   [x] **api/index.php** created ✅
-   [x] **.env.vercel** template created ✅
-   [ ] **Database provider** setup
-   [ ] **GitHub repository** updated
-   [ ] **Vercel account** setup
-   [ ] **Environment variables** configured

## 🗄️ **STEP 1: SETUP DATABASE (Choose One)**

### **Option A: SQLite (Recommended - 100% Free & Simple)**

1. **No setup required** - Works immediately
2. **Perfect for demo** dan small websites
3. **Data stored in** `/tmp/database.sqlite` (resets on each deploy)
4. **Advantages:**
    - ✅ **Zero configuration**
    - ✅ **No external dependencies**
    - ✅ **Deploy immediately**
    - ✅ **Perfect for testing**

### **Option B: Supabase (Free PostgreSQL - 500MB)**

1. **Go to Supabase.com** → Sign up (GitHub login)
2. **Create Project:** `sman1nagreg`
3. **Get connection string:**
    - Settings → Database → Connection string
    - Format: `postgresql://postgres:password@host:5432/postgres`
4. **Import data** (optional):
    ```bash
    pg_dump old_database > dump.sql
    psql new_connection_string < dump.sql
    ```

### **Option C: Railway MySQL ($5 Credit - Good for 1-2 months)**

1. **Go to Railway.app** → Sign up (GitHub login)
2. **New Project** → **Add MySQL**
3. **Get connection string:**
    - MySQL service → Variables → Copy `DATABASE_URL`
    - Format: `mysql://username:password@host:3306/database`

### **Option D: Local MySQL (Development Only)**

1. **Go to Supabase.com** → Sign up
2. **Create Project:** `sman1nagreg`
3. **Get connection string** dari Settings → Database
4. **Update composer.json** untuk PostgreSQL extensions

## 🔧 **STEP 2: UPDATE LARAVEL CONFIG**

### **Update `config/database.php`:**

```php
// Add this to connections array
'connections' => [
    'mysql' => [
        'driver' => 'mysql',
        'url' => env('DATABASE_URL'),
        'host' => env('DB_HOST', '127.0.0.1'),
        'port' => env('DB_PORT', '3306'),
        'database' => env('DB_DATABASE', 'forge'),
        'username' => env('DB_USERNAME', 'forge'),
        'password' => env('DB_PASSWORD', ''),
        'unix_socket' => env('DB_SOCKET', ''),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => null,
        'options' => extension_loaded('pdo_mysql') ? array_filter([
            PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        ]) : [],
    ],
],
```

### **Update `config/session.php`:**

```php
// For serverless compatibility
'lifetime' => env('SESSION_LIFETIME', 120),
'expire_on_close' => false,
'encrypt' => false,
'files' => env('SESSION_SAVE_PATH', storage_path('framework/sessions')),
'connection' => env('SESSION_CONNECTION'),
'table' => 'sessions',
'store' => env('SESSION_STORE'),
'lottery' => [2, 100],
'cookie' => env('SESSION_COOKIE', Str::slug(env('APP_NAME', 'laravel'), '_').'_session'),
'path' => '/',
'domain' => env('SESSION_DOMAIN'),
'secure' => env('SESSION_SECURE_COOKIE'),
'http_only' => true,
'same_site' => 'lax',
```

## 📤 **STEP 3: PUSH TO GITHUB**

```bash
# Add Vercel files
git add vercel.json
git add api/index.php
git add .env.vercel

# Commit changes
git commit -m "Add Vercel configuration for deployment"

# Push to GitHub
git push origin main
```

## 🌐 **STEP 4: DEPLOY KE VERCEL**

### **1. Create Vercel Account:**

1. **Go to Vercel.com** → Sign up dengan GitHub
2. **Authorize Vercel** akses ke GitHub repositories

### **2. Import Project:**

1. **Vercel Dashboard** → **"New Project"**
2. **"Import Git Repository"** → **Select `sman1nagreg-website`**
3. **Configure Project:**
    - **Framework Preset:** Other
    - **Root Directory:** `./` (default)
    - **Build Command:** `composer install --no-dev --optimize-autoloader && npm ci && npm run build`
    - **Output Directory:** `public`
    - **Install Command:** `composer install && npm install`

### **3. Environment Variables:**

**Vercel Dashboard** → **Project Settings** → **Environment Variables**

**Add these one by one:**

```bash
# App Configuration
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=false
APP_URL=https://your-project-name.vercel.app

# Database (use your DATABASE_URL from Step 1)
DB_CONNECTION=mysql
DATABASE_URL=mysql://username:password@host/database?sslaccept=strict

# Serverless Settings
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
LOG_CHANNEL=stderr

# API Keys
GEMINI_API_KEY=AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA
```

### **4. Deploy:**

1. **Click "Deploy"** button
2. **Wait for build** (2-5 minutes)
3. **Check build logs** untuk errors
4. **Visit generated URL** untuk test

## 🔍 **STEP 5: VERIFICATION**

### **Check Deployment Logs:**

```bash
✅ Installing dependencies...
✅ Running build command...
✅ Composer install completed
✅ NPM build completed
✅ Deployment completed
✅ Ready: https://your-project.vercel.app
```

### **Test Website:**

1. **Homepage loads** dengan berita dan school profile
2. **Navigation works** (About, Academic, Activities, etc.)
3. **Chatbot functions** (if enabled)
4. **No database errors**

### **Test Database Connection:**

**Visit:** `https://your-project.vercel.app/health`

**Expected response:**

```json
{
    "status": "ok",
    "database": "connected",
    "timestamp": "2025-07-04T13:30:00Z"
}
```

## 🚨 **COMMON ISSUES & FIXES:**

### **Build Errors:**

1. **Composer timeout:**

    ```bash
    # Add environment variable:
    COMPOSER_PROCESS_TIMEOUT=600
    ```

2. **NPM build fails:**
    ```bash
    # Check package.json scripts
    # Ensure "build": "vite build" exists
    ```

### **Runtime Errors:**

1. **Database connection:**

    - Verify DATABASE_URL format
    - Check database service status
    - Test connection string manually

2. **File permissions:**
    - Laravel automatically handles `/tmp` writes
    - No storage directory issues on serverless

## 🎯 **AFTER SUCCESSFUL DEPLOYMENT:**

### **Optional: Custom Domain**

1. **Vercel Dashboard** → **Project Settings** → **Domains**
2. **Add domain:** `sman1nagreg.com` (if you have one)
3. **Configure DNS** dengan Vercel nameservers

### **Performance Optimizations:**

1. **Enable caching** di Vercel
2. **Optimize images** dengan Vercel Image Optimization
3. **Monitor performance** dengan Vercel Analytics

## 📊 **MIGRATION COMPLETE CHECKLIST:**

-   [ ] **Database setup** and data migrated
-   [ ] **GitHub repository** updated with Vercel config
-   [ ] **Vercel project** created and deployed
-   [ ] **Environment variables** configured
-   [ ] **Website accessible** and functional
-   [ ] **Database connected** and working
-   [ ] **Custom domain** setup (optional)
-   [ ] **Railway services** deleted/stopped

**🎉 CONGRATULATIONS! Your Laravel website is now running on Vercel for FREE!**

**🔗 Benefits achieved:**

-   ✅ **$0/month hosting** costs
-   ✅ **Global CDN** performance
-   ✅ **Auto SSL** certificates
-   ✅ **99.9% uptime** reliability
-   ✅ **Easy deployments** from GitHub
