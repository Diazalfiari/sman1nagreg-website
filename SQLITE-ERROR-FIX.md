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

### 1. **Set DB_CONNECTION=pgsql**

-   Explicitly set database connection ke PostgreSQL
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
git commit -m "Fix: Set DB_CONNECTION=pgsql + add seeding"
git push origin main
```

### Step 2: Railway PostgreSQL Setup

1. **Railway Dashboard** → Your Project
2. **Add PostgreSQL Service** (jika belum ada):
    - Click "New" → "Database" → "Add PostgreSQL"
3. **Connect to Web Service**:
    - PostgreSQL service → "Connect" tab
    - Select your web service
    - Railway auto-inject environment variables

### Step 3: Update Railway Environment Variables

Set ini di Railway → Settings → Environment:

```
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=true
DB_CONNECTION=pgsql
SESSION_DRIVER=file
CACHE_STORE=file
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
```

### Step 4: Redeploy

-   Railway → Deployments → "Redeploy Latest"
-   Monitor logs: migrations + seeding akan run

## 🎯 **Expected Result:**

```
✅ PostgreSQL connected
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

## 📋 **Railway PostgreSQL Connection Checklist:**

-   [ ] PostgreSQL service created
-   [ ] PostgreSQL connected to web service
-   [ ] Environment variables auto-injected
-   [ ] DB_CONNECTION=pgsql set manually
-   [ ] Redeploy completed

**🔥 PostgreSQL + seeding akan solve semua database errors!**
