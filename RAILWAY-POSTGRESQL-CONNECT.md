# 🔗 RAILWAY POSTGRESQL CONNECTION - STEP BY STEP

## 📋 **LANGKAH DETAIL CONNECT POSTGRESQL KE WEB SERVICE**

### **Method 1: Using DATABASE_URL (RECOMMENDED)**

#### Step 1: Add PostgreSQL Service

1. **Railway Dashboard** → Your Project
2. **Click "New"** → **"Database"** → **"Add PostgreSQL"**
3. Wait PostgreSQL service created (nama: "Postgres")

#### Step 2: Connect using DATABASE_URL

1. **Go to Web Service** (nama service aplikasi Anda, bukan "Postgres")
2. **Settings** → **Environment** → **Variables**
3. **Add New Variable**:
    ```
    Name: DATABASE_URL
    Value: ${{ Postgres.DATABASE_URL }}
    ```
4. **Save**

#### Step 3: Update Other Environment Variables

Di **Web Service** → Settings → Environment, pastikan ada:

```
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=true
DB_CONNECTION=pgsql
DATABASE_URL=${{ Postgres.DATABASE_URL }}
SESSION_DRIVER=file
CACHE_STORE=file
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
```

#### Step 4: Redeploy

1. **Deployments** tab
2. **"Redeploy Latest"**
3. **Monitor logs** untuk migration success

---

### **Method 2: Individual DB Variables (Alternative)**

#### Step 1: Auto-Connect Services

1. **PostgreSQL service** → **"Connect"** tab
2. **Select your web service**
3. Railway akan auto-inject variables:
    - `PGHOST`
    - `PGPORT`
    - `PGDATABASE`
    - `PGUSER`
    - `PGPASSWORD`

#### Step 2: Verify Variables

Di **Web Service** → Settings → Environment, should see:

```
PGHOST=containers-us-west-xxx.railway.app
PGPORT=5432
PGDATABASE=railway
PGUSER=postgres
PGPASSWORD=xxx-generated-password
```

---

## 🎯 **VERIFICATION STEPS:**

### Check Connection Success:

1. **Railway Logs** → Should see:

    ```
    ✅ PostgreSQL connected
    ✅ Running database migrations...
    ✅ Database seeded
    ```

2. **Test Database Connection:**

    - Go to PostgreSQL service → "Data" tab
    - Should see tables: `users`, `news`, `sessions`, etc.

3. **Website Test:**
    - Visit your app URL
    - Should load without SQLite errors
    - Check `/health` endpoint: should return `"database": "connected"`

---

## 🚨 **TROUBLESHOOTING:**

### Issue: Variables not injected

**Solution:** Redeploy after adding DATABASE_URL

### Issue: Connection timeout

**Solution:** Check PostgreSQL service status (should be "Active")

### Issue: Migration errors

**Solution:** Check `DB_CONNECTION=pgsql` is set

### Issue: Still SQLite errors

**Solution:** Clear config cache:

```bash
railway run php artisan config:clear
railway run php artisan migrate --force
```

---

## 📋 **FINAL CHECKLIST:**

-   [ ] PostgreSQL service created and running
-   [ ] DATABASE_URL variable added to web service
-   [ ] DB_CONNECTION=pgsql set
-   [ ] Redeploy completed successfully
-   [ ] Website loads without database errors
-   [ ] `/health` endpoint returns OK

**🎉 Once connected, website akan load dengan data dari PostgreSQL!**
