# 🔗 RAILWAY POSTGRESQL - NEW CONNECTION METHOD

## 📋 **RAILWAY INTERFACE TERBARU - STEP BY STEP**

### **Step 1: Add PostgreSQL Service**

1. **Railway Dashboard** → Your Project
2. **"New"** → **"Database"** → **"Add PostgreSQL"**
3. Wait service created (nama: "Postgres")

### **Step 2: Get Connection URL**

1. **PostgreSQL service** → **"Connect"** tab
2. **Select "Public Network"** (ignore warning tentang egress costs untuk testing)
3. **Copy "Connection URL"**:
    ```
    postgresql://postgres:your-actual-password@trolley.proxy.rlwy.net:15752/railway
    ```

### **Step 3: Add DATABASE_URL to Web Service**

1. **Go to Web Service** (aplikasi Laravel Anda, bukan PostgreSQL service)
2. **Settings** → **Environment** → **Variables**
3. **Add new variable**:

    ```
    Name: DATABASE_URL
    Value: postgresql://postgres:your-actual-password@trolley.proxy.rlwy.net:15752/railway
    ```

    **⚠️ PASTE CONNECTION URL EXACTLY** seperti yang Anda copy dari PostgreSQL service!

### **Step 4: Set Other Environment Variables**

Di **Web Service** → Settings → Environment, pastikan juga ada:

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

### **Step 5: Redeploy**

1. **Deployments** tab
2. **"Redeploy Latest"**
3. **Monitor logs** - should see migrations running

---

## 🎯 **VERIFICATION:**

### Expected Deploy Logs:

```
✅ Installing Composer dependencies...
✅ Building production assets...
✅ Running database migrations...
✅ Database seeded
✅ Starting web server...
```

### Test Connection:

-   Visit your app URL
-   Should load without SQLite errors
-   Try `/health` endpoint - should return database connected

---

## 🚨 **TROUBLESHOOTING:**

### Issue: "Connection refused"

**Solution:** Make sure you copied the EXACT connection URL with real password

### Issue: "Database does not exist"

**Solution:** Connection URL should end with `/railway` database name

### Issue: Still SQLite errors

**Solution:** Verify `DB_CONNECTION=pgsql` is set in web service environment

---

## 📝 **EXAMPLE FULL CONNECTION URL:**

```
postgresql://postgres:jKm9nP2xR5tL8vQ3wN1sF6dA4hG7zE0yB@trolley.proxy.rlwy.net:15752/railway
```

## 🎉 **ONCE CONNECTED:**

-   Laravel will use PostgreSQL instead of SQLite
-   Database migrations will run automatically
-   Sample data will be seeded
-   Website akan load dengan proper data

**Key: Copy EXACT connection URL dari PostgreSQL service ke DATABASE_URL variable!**
