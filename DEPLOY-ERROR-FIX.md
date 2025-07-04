# 🚨 DEPLOY ERROR - QUICK FIX

## ❌ Error: "There was an error deploying from source"

### ✅ **LANGKAH PERBAIKAN:**

#### 1. **Environment Variables di Railway**

Set ini di Railway Dashboard → Settings → Variables:

```
APP_KEY=base64:8jDWYniplRI0bmSwvthMn+PXgB1Z5JJBwTZNN0n75fA=
APP_ENV=production
APP_DEBUG=false
APP_URL=https://sman1nagreg-app.up.railway.app
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
GEMINI_API_KEY=AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA
```

#### 2. **Database Variables (Auto dari PostgreSQL addon)**

Railway otomatis inject:

-   PGHOST
-   PGPORT
-   PGDATABASE
-   PGUSER
-   PGPASSWORD

#### 3. **Commit & Push Fix**

```bash
git add .
git commit -m "Fix: Railway deploy config & env variables"
git push origin main
```

#### 4. **Force Redeploy**

-   Railway Dashboard → Deployments
-   "Redeploy Latest" atau "Deploy Now"

---

## 🔧 **Files yang Sudah Diperbaiki:**

-   ✅ `.env` → Reset ke local development
-   ✅ `.env.production` → PostgreSQL config
-   ✅ `nixpacks.toml` → Minimal config
-   ✅ API key security → Moved to env variables

## 🎯 **Expected Build Process:**

```
✓ Auto-detected: PHP (Laravel)
✓ Installing PHP dependencies
✓ Installing Node.js dependencies
✓ Building Vite assets
✓ Starting Laravel server
```

---

## 📞 **Still Error? Try:**

1. **Delete & recreate Railway project**
2. **Check build logs** untuk error spesifik
3. **Use Railway CLI:**
    ```bash
    npx @railway/cli login
    npx @railway/cli link
    npx @railway/cli logs
    ```

**🚀 Deploy seharusnya berhasil sekarang!**
