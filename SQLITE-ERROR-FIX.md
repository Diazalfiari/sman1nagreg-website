# 🗄️ DATABASE SQLITE ERROR - RAILWAY FIX

## ❌ **Error Yang Terjadi:**

```
Database file at path [/app/database/database.sqlite] does not exist.
(Connection: sqlite, SQL: select * from "news"...)
```

## 🔍 **Root Cause:**

-   Laravel masih menggunakan SQLite default connection
-   Environment variable `DB_CONNECTION` tidak ter-set di Railway
-   App mencoba akses database untuk load news data

## ✅ **SOLUSI YANG SUDAH DITERAPKAN:**

### 1. **Set DB_CONNECTION=mysql**

-   Explicitly set database connection ke MySQL
-   Railway akan inject credentials otomatis

### 2. **Database Seeding Added**

-   Deploy script akan run migrations + seeders
-   Populate data untuk news, school profile, etc.

### 3. **Graceful Database Handling**

-   App akan continue jika database tidak ready
-   File sessions tetap untuk backup

## 🚀 **LANGKAH DEPLOYMENT:**

### Step 1: Push Changes

```bash
git add .
git commit -m "Fix: Set DB_CONNECTION=mysql + add seeding"
git push origin main
```

### Step 2: Railway MySQL Setup

1. **Railway Dashboard** → Your Project
2. **Add MySQL Service** (jika belum ada):
    - Click "New" → "Database" → "Add MySQL"
3. **Get Database Connection Info**:
    - MySQL service → **"Connect"** tab
    - **Public Network** (pilih ini)
    - Copy **Connection URL**:
        ```
        mysql://root:********@trolley.proxy.rlwy.net:25727/railway
        ```

### Step 3: Update Railway Environment Variables

Set ini di **Web Service** → Settings → Environment:

```
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=true
DB_CONNECTION=mysql
DATABASE_URL=mysql://root:your-password@trolley.proxy.rlwy.net:25727/railway
SESSION_DRIVER=file
CACHE_STORE=file
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
```

**⚠️ IMPORTANT:** Replace `your-password` dengan password sebenarnya dari Connection URL yang Anda copy!

### Step 4: Redeploy

**Apa yang di-redeploy:**

-   Laravel application code yang sudah di-push ke GitHub
-   Environment variables yang baru (termasuk DATABASE_URL)
-   Build process: composer install, npm build, migrations

**Cara redeploy di Railway:**

1. **Railway Dashboard** → Your Project
2. **Web Service** (aplikasi Laravel Anda)
3. **"Deployments"** tab
4. **"Redeploy Latest"** button (atau "Deploy Latest Commit")
5. **Monitor logs** untuk melihat process:
    ```
    ✅ Installing Composer dependencies...
    ✅ Building production assets...
    ✅ Running database migrations...
    ✅ Database seeding...
    ✅ Starting web server...
    ```

**Kenapa perlu redeploy:**

-   Environment variables baru (DATABASE_URL) perlu di-load
-   Laravel perlu restart untuk menggunakan PostgreSQL connection
-   Migration dan seeding akan run dengan database baru

**Expected deployment time:** 3-5 menit

**🔍 PENTING: Yang di-redeploy adalah WEB SERVICE (Laravel app), BUKAN MySQL!**

**MySQL service:**

-   ✅ **TIDAK perlu redeploy** - sudah running
-   ✅ **Tetap berjalan** - database server tetap aktif
-   ✅ **Hanya provide connection** - tinggal dikasih URL-nya

**Web Service (Laravel app):**

-   🔄 **INI yang perlu redeploy** - aplikasi Laravel
-   🔄 **Restart dengan config baru** - load DATABASE_URL
-   🔄 **Connect ke MySQL** yang sudah running

**Jadi:** MySQL tetap jalan, Laravel app yang restart untuk connect ke database.

## 🎯 **Expected Result:**

```
✅ MySQL connected
✅ Migrations run successfully
✅ Database seeded with news, school profile
✅ Website loads with proper data
✅ No more SQLite errors
```

## 🚨 **Alternative: Quick Test Without Database**

Jika PostgreSQL masih bermasalah, temporary fix:

1. **Modify HomeController** untuk handle empty database:

```php
// Handle jika database belum ready
$latestNews = collect();
$schoolProfile = null;
```

2. **Set APP_DEBUG=false** untuk hide database errors

## 📋 **Railway MySQL Connection Checklist:**

-   [ ] MySQL service created
-   [ ] MySQL connected to web service
-   [ ] Environment variables auto-injected
-   [ ] DB_CONNECTION=mysql set manually
-   [ ] Redeploy completed

**🔥 MySQL + seeding akan solve semua database errors!**
