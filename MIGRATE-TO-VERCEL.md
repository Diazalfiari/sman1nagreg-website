# 🚀 MIGRATE DARI RAILWAY KE VERCEL - GRATIS

## 🎯 **OVERVIEW:**

**Migrasi SMAN 1 Nagreg website dari Railway ke Vercel (100% gratis)**

### **Keuntungan Vercel:**

-   ✅ **100% Gratis** untuk personal projects
-   ✅ **Global CDN** performance tinggi
-   ✅ **Auto SSL** dan custom domains
-   ✅ **GitHub integration** otomatis
-   ✅ **Serverless** architecture (no server management)

### **Database Options untuk Vercel:**

1. **PlanetScale** (MySQL, gratis tier)
2. **Supabase** (PostgreSQL, gratis tier)
3. **Railway MySQL** (keep existing, connect external)
4. **SQLite** (file-based, simplest)

## 📋 **MIGRATION PLAN:**

### **Phase 1: Prepare Laravel for Vercel**

-   Configure Laravel untuk serverless
-   Update routes dan environment
-   Optimize untuk static generation

### **Phase 2: Database Setup**

-   Choose database provider (recommend PlanetScale)
-   Migrate data dari Railway MySQL
-   Update connection strings

### **Phase 3: Deploy ke Vercel**

-   Connect GitHub repo
-   Configure build settings
-   Set environment variables

### **Phase 4: Verify & Optimize**

-   Test website functionality
-   Setup custom domain (optional)
-   Performance optimization

## 🔧 **STEP 1: CONFIGURE LARAVEL FOR VERCEL**

### **1. Create Vercel Configuration Files**

**Create `vercel.json`:**

```json
{
    "version": 2,
    "framework": null,
    "functions": {
        "api/index.php": {
            "runtime": "vercel-php@0.6.0"
        }
    },
    "routes": [
        {
            "src": "/(.*)",
            "dest": "/api/index.php"
        }
    ],
    "env": {
        "APP_ENV": "production",
        "APP_DEBUG": "false",
        "APP_URL": "https://your-project.vercel.app"
    }
}
```

**Create `api/index.php`:**

```php
<?php

// api/index.php
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
```

**Update `bootstrap/app.php`:**

```php
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Middleware configuration
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Exception handling
    })
    ->create();
```

### **2. Update Environment for Vercel**

**Create `.env.vercel`:**

```bash
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=false
APP_URL=https://your-project.vercel.app

# Database - akan diupdate dengan provider baru
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

# File-based untuk serverless
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
LOG_CHANNEL=stderr

# Gemini API
GEMINI_API_KEY=AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA
```

### **3. Optimize Laravel untuk Serverless**

**Update `config/app.php`:**

```php
// Optimize untuk serverless
'timezone' => env('APP_TIMEZONE', 'Asia/Jakarta'),
'debug' => env('APP_DEBUG', false),
```

**Update `config/database.php`:**

```php
// Add serverless-friendly connection
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
    // Add SQLite fallback
    'sqlite' => [
        'driver' => 'sqlite',
        'url' => env('DATABASE_URL'),
        'database' => database_path('database.sqlite'),
        'prefix' => '',
        'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
    ],
],
```

## 🗄️ **STEP 2: DATABASE SETUP OPTIONS**

### **Option 1: PlanetScale (Recommended)**

1. **Sign up di PlanetScale.com**
2. **Create database** → `sman1nagreg`
3. **Get connection string:**
    ```
    mysql://username:password@host/database?sslaccept=strict
    ```
4. **Migrate data** dari Railway MySQL

### **Option 2: Supabase**

1. **Sign up di Supabase.com**
2. **Create project** → `sman1nagreg`
3. **Get PostgreSQL connection**
4. **Update to `pgsql` connection**

### **Option 3: SQLite (Simplest)**

1. **Use local SQLite file**
2. **No external database needed**
3. **Good for demo/simple sites**

## 🚀 **STEP 3: DEPLOY KE VERCEL**

### **1. Connect GitHub Repository**

1. **Vercel.com** → **Sign up/Login**
2. **"New Project"** → **Import Git Repository**
3. **Select your GitHub repo:** `sman1nagreg-website`

### **2. Configure Build Settings**

**Build Command:**

```bash
composer install --no-dev --optimize-autoloader && npm ci && npm run build
```

**Output Directory:**

```
public
```

**Install Command:**

```bash
composer install && npm install
```

### **3. Environment Variables**

**Vercel Dashboard** → **Project Settings** → **Environment Variables**:

```bash
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=false
APP_URL=https://your-project.vercel.app
DB_CONNECTION=mysql
DATABASE_URL=mysql://user:pass@host/db
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
LOG_CHANNEL=stderr
GEMINI_API_KEY=AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA
```

## 📋 **MIGRATION CHECKLIST:**

-   [ ] **Create vercel.json** configuration
-   [ ] **Create api/index.php** entry point
-   [ ] **Update Laravel** untuk serverless compatibility
-   [ ] **Setup database** (PlanetScale/Supabase/SQLite)
-   [ ] **Migrate data** dari Railway
-   [ ] **Connect GitHub** ke Vercel
-   [ ] **Configure build** settings
-   [ ] **Set environment** variables
-   [ ] **Deploy & test** website
-   [ ] **Setup custom domain** (optional)

## 🎯 **NEXT STEPS:**

1. **Choose database provider** (recommend PlanetScale)
2. **Create configuration files** (vercel.json, api/index.php)
3. **Push to GitHub**
4. **Deploy ke Vercel**

**🔥 Vercel deployment akan jauh lebih reliable dan gratis selamanya untuk personal projects!**
