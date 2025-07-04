# 🩺 RAILWAY HEALTHCHECK FAILURE - SOLUTIONS

## ✅ **PROGRESS: Build Success → Healthcheck Failure**

Good news! Build berhasil, tinggal fix healthcheck.

## 🔍 **YANG SUDAH DIPERBAIKI:**

### 1. **Health Check Route Added**

-   ✅ `/health` endpoint untuk Railway monitoring
-   ✅ Returns JSON status dengan database info
-   ✅ Lebih reliable daripada homepage

### 2. **Extended Timeout**

-   ✅ Healthcheck timeout: 300s → 600s
-   ✅ Database connection wait logic
-   ✅ Graceful error handling

### 3. **APP_DEBUG=true**

-   ✅ Temporary untuk melihat error details
-   ✅ Akan diubah ke false setelah fix

## 🚀 **DEPLOY FIX SEKARANG:**

### Step 1: Push Changes

```bash
git add .
git commit -m "Fix: Healthcheck route + extended timeout"
git push origin main
```

### Step 2: Update Railway Environment Variables

Add/Update di Railway Dashboard:

```
APP_DEBUG=true
```

### Step 3: Redeploy

-   Railway Dashboard → Deployments → "Redeploy Latest"
-   Monitor logs untuk melihat specific error

## 🔍 **COMMON HEALTHCHECK ISSUES:**

### Issue 1: Database Connection

```
Solution: Pastikan PostgreSQL addon connected
Check: Railway Dashboard → Services → PostgreSQL → Connected
```

### Issue 2: Laravel Key Missing

```
Solution: Set APP_KEY di environment variables
Value: base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
```

### Issue 3: Session Driver Error

```
Solution: Run migrations untuk session table
Command: php artisan migrate --force
```

### Issue 4: Storage Permissions

```
Solution: Auto-handled by deploy.sh script
Command: chmod -R 755 storage bootstrap/cache
```

## 📊 **Expected Health Check Response:**

```json
{
    "status": "ok",
    "timestamp": "2025-01-04T04:39:00.000000Z",
    "app": "SMAN 1 Nagreg",
    "database": "connected"
}
```

## 🚨 **IF STILL FAILING:**

### Nuclear Option: Fresh Deploy

1. Delete Railway project
2. Create new project
3. Add PostgreSQL addon
4. Set all environment variables
5. Deploy dari scratch

### Alternative: Switch to Heroku

```bash
heroku create sman1nagreg-app
heroku addons:create heroku-postgresql:hobby-dev
heroku config:set APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
git push heroku main
```

**🎯 Healthcheck failure biasanya database connection issue. Deploy fix diatas akan solve masalah ini!**
