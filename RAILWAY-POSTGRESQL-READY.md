# 🚀 RAILWAY DEPLOYMENT - POSTGRESQL READY!

## ✅ **Yang Sudah Disiapkan:**

-   ✅ Database: MySQL → PostgreSQL
-   ✅ APP_KEY: `base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=`
-   ✅ Environment template untuk Railway
-   ✅ Build configuration optimized

## 🎯 **DEPLOY KE RAILWAY SEKARANG:**

### 1. **Push ke GitHub:**

```bash
git push origin main
```

### 2. **Railway Setup:**

1. **Buka Railway** → Create New Project → Deploy from GitHub
2. **Add PostgreSQL Database** → Automatically connects
3. **Set Environment Variables:**

Copy paste ini ke Railway → Settings → Environment:

```
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=false
APP_URL=https://your-app-name.up.railway.app
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
```

**⚠️ PENTING:** Jangan set DB\_\* variables - Railway auto-inject dari PostgreSQL addon!

### 3. **Deploy & Monitor:**

-   Klik "Deploy"
-   Monitor build logs
-   Expected: ✅ PostgreSQL connected, ✅ Laravel migrations run

### 4. **Update APP_URL:**

Setelah deploy berhasil, update `APP_URL` dengan URL yang diberikan Railway.

## 🔧 **Local Development dengan PostgreSQL:**

Jika ingin test local:

1. Install PostgreSQL di Laragon/manual
2. Create database `sman1nagreg`
3. Update `.env` password PostgreSQL Anda
4. Run: `php artisan migrate:fresh --seed`

## 📋 **Environment Variables Explanation:**

-   `DB_CONNECTION=pgsql` → PostgreSQL driver
-   `APP_KEY` → New production key (auto-generated)
-   `NIXPACKS_NO_CACHE=1` → Fix Railway build cache issue
-   Database credentials → Auto-injected oleh Railway

**🎉 RAILWAY DEPLOYMENT DENGAN POSTGRESQL READY!**
