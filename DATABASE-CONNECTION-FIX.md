# 🗄️ RAILWAY DATABASE CONNECTION FIX

## ❌ **Error Yang Terjadi:**

```
SQLSTATE[08006] [7] invalid integer value "${PGPORT}" for connection option "port"
```

## 🔍 **Root Cause:**

-   PostgreSQL environment variables tidak ter-inject oleh Railway
-   `${PGPORT}` masih literal string, bukan integer
-   Database addon belum properly connected

## ✅ **SOLUSI YANG SUDAH DITERAPKAN:**

### 1. **Temporary: Switch to File-based Storage**

```env
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
```

This akan membuat app jalan tanpa database dependency.

### 2. **Database Variables Commented Out**

Railway akan auto-inject PostgreSQL variables ketika addon connected.

## 🚀 **LANGKAH PERBAIKAN DI RAILWAY:**

### Step 1: Pastikan PostgreSQL Addon Connected

1. **Railway Dashboard** → Your Project
2. **Tab "Services"** → Pastikan ada PostgreSQL service
3. **PostgreSQL service** → Tab "Connect" → Pastikan connected ke web service

### Step 2: Check Database Variables

Di PostgreSQL service → "Variables" tab, pastikan ada:

```
PGHOST=...
PGPORT=5432
PGDATABASE=railway
PGUSER=postgres
PGPASSWORD=...
```

### Step 3: Connect Services

Jika belum connected:

1. PostgreSQL service → "Connect" tab
2. "Connect to Web Service" → Select your web service
3. Railway akan auto-inject DB variables

### Step 4: Update Environment Variables

Di Web Service → Settings → Environment, hanya set:

```
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=true
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
```

**JANGAN SET** DB\_\* variables manually!

### Step 5: Enable Database After Connection

Setelah PostgreSQL connected, update environment:

```
SESSION_DRIVER=database
CACHE_STORE=database
DB_CONNECTION=pgsql
```

## 🎯 **Expected Result:**

-   ✅ App loads dengan file-based sessions
-   ✅ Database variables auto-injected
-   ✅ Switch to database sessions setelah connection established

## 🚨 **Alternative: Quick Deploy Without Database**

Untuk testing cepat, biarkan:

```
SESSION_DRIVER=file
CACHE_STORE=file
```

Website akan jalan tanpa database dependency.

**🔥 Push fix ini dan redeploy! App akan jalan dengan file sessions.**
