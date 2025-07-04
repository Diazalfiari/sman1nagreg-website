# 🚨 MYSQL CONNECTION REFUSED - INTENSIVE TROUBLESHOOTING

## ❌ **PERSISTENT ERROR:**

```
SQLSTATE[HY000] [2002] Connection refused (Connection: mysql, SQL: select * from `news`...)
```

**Status:** Error masih terjadi setelah environment variables diupdate.

## 🔍 **ANALYSIS USER'S VARIABLES - ROOT CAUSE FOUND!**

### **❌ PROBLEM IDENTIFIED:**

**DATABASE_URL di Web Service TIDAK MATCH dengan MySQL Service yang actual!**

**Web Service DATABASE_URL:**

```bash
DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway"
```

**Actual MySQL Service Variables:**

```bash
MYSQL_ROOT_PASSWORD="vmaqWUAPcNNLASTaKQlbOVozdynTITUh"  ✅ SAME
MYSQLUSER="root"                                        ✅ SAME
MYSQL_DATABASE="railway"                                ✅ SAME
MYSQLHOST="${{RAILWAY_PRIVATE_DOMAIN}}"                 ❌ DIFFERENT!
MYSQLPORT="3306"                                        ❌ DIFFERENT!
```

**🚨 ISSUE:** Web service menggunakan `maglev.proxy.rlwy.net:53384` tapi MySQL actual menggunakan `RAILWAY_PRIVATE_DOMAIN:3306`!

### **✅ CORRECT DATABASE_URL (Option 1 - Public):**

```bash
# USE MYSQL_PUBLIC_URL format:
DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@${{RAILWAY_TCP_PROXY_DOMAIN}}:${{RAILWAY_TCP_PROXY_PORT}}/railway"
```

### **✅ CORRECT DATABASE_URL (Option 2 - Private):**

```bash
# USE MYSQL_URL format:
DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@${{RAILWAY_PRIVATE_DOMAIN}}:3306/railway"
```

### **✅ CORRECT DATABASE_URL (Option 3 - Individual Variables):**

```bash
# REMOVE DATABASE_URL completely
# USE individual variables:
DB_CONNECTION="mysql"
DB_HOST="${{MYSQLHOST}}"
DB_PORT="${{MYSQLPORT}}"
DB_DATABASE="${{MYSQL_DATABASE}}"
DB_USERNAME="${{MYSQLUSER}}"
DB_PASSWORD="${{MYSQL_ROOT_PASSWORD}}"
```

## 🔍 **DEEP DIAGNOSIS - CHECK THESE:**

### **1. VERIFY CURRENT RAILWAY ENVIRONMENT**

**Railway Dashboard** → **Web Service** → **Settings** → **Environment**

**Screenshot atau list semua environment variables yang ADA SEKARANG:**

```bash
# Yang seharusnya ADA:
APP_KEY="base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs="
APP_ENV="production"
APP_DEBUG="true"
DB_CONNECTION="mysql"
DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway"
SESSION_DRIVER="file"
CACHE_STORE="file"
NIXPACKS_NO_CACHE="1"

# Yang TIDAK BOLEH ADA:
DB_CONNECTION="pgsql"
DB_HOST="${{Postgres-...}}"
DATABASE_URL="${{Postgres-...}}"
```

### **2. CHECK MYSQL SERVICE STATUS**

**Railway Dashboard** → **MySQL Service**:

-   **Status:** Harus "Running" (hijau)
-   **Restart time:** Check kapan last restart
-   **Memory/CPU:** Check resource usage

### **3. GET FRESH MYSQL CONNECTION URL**

**Railway Dashboard** → **MySQL Service** → **"Connect"** tab → **"Public Network"**

**Copy fresh connection string:**

```bash
mysql://root:NEW_PASSWORD@NEW_HOST:NEW_PORT/railway
```

**Compare dengan DATABASE_URL yang sekarang - apakah SAMA?**

### **4. TEST MYSQL SERVICE CONNECTIVITY**

**Railway Console** → **Web Service** → Run commands:

```bash
# Test DNS resolution
nslookup maglev.proxy.rlwy.net

# Test port connectivity
nc -zv maglev.proxy.rlwy.net 53384

# Test MySQL specific connection
mysql -h maglev.proxy.rlwy.net -P 53384 -u root -p railway
```

## 🚨 **POSSIBLE ROOT CAUSES:**

### **Cause 1: MySQL Service Restarted (Most Likely)**

-   MySQL service dapat IP/port/password baru
-   DATABASE_URL lama sudah tidak valid
-   **Solution:** Update DATABASE_URL dengan fresh connection

### **Cause 2: Service Connection Issue**

-   MySQL service tidak ter-connect ke web service
-   Network routing problem di Railway
-   **Solution:** Reconnect services atau recreate MySQL

### **Cause 3: Laravel Config Cache**

-   Laravel cache masih pakai config lama
-   Environment variables baru belum ter-load
-   **Solution:** Clear config cache di deployment

### **Cause 4: Mixed Environment Variables**

-   Ada conflict antara DATABASE*URL dan individual DB*\* variables
-   Laravel confused mau pakai yang mana
-   **Solution:** Use ONLY DATABASE*URL, remove all DB*\*

## 🔧 **INTENSIVE SOLUTIONS:**

### **Solution 1: FRESH MYSQL CONNECTION**

1. **Get fresh MySQL connection:**

    - Railway → MySQL Service → Connect → Public Network
    - Copy NEW connection URL

2. **Update DATABASE_URL:**

    ```bash
    # OLD (mungkin expired):
    DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway"

    # NEW (fresh from Railway):
    DATABASE_URL="mysql://root:NEW_PASSWORD@NEW_HOST:NEW_PORT/railway"
    ```

3. **Remove ALL individual DB variables:**
    ```bash
    # DELETE if exists:
    DB_HOST
    DB_PORT
    DB_DATABASE
    DB_USERNAME
    DB_PASSWORD
    ```

### **Solution 2: USE INDIVIDUAL VARIABLES**

**Alternative:** Instead of DATABASE_URL, use individual variables:

```bash
# REMOVE:
DATABASE_URL

# ADD:
DB_CONNECTION=mysql
DB_HOST=maglev.proxy.rlwy.net
DB_PORT=53384
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=vmaqWUAPcNNLASTaKQlbOVozdynTITUh
```

### **Solution 3: ADD CONFIG CACHE CLEAR**

Update `deploy.sh` untuk clear config cache:

```bash
# Add to deploy.sh:
php artisan config:clear
php artisan cache:clear
php artisan config:cache
```

### **Solution 4: RECREATE MYSQL SERVICE**

**Last resort jika masih error:**

1. **Create NEW MySQL service**
2. **Get fresh connection credentials**
3. **Update environment variables**
4. **Delete old MySQL service**

## 🔍 **DEBUGGING COMMANDS:**

**Railway Console** → **Web Service**:

```bash
# Check Laravel database config
php artisan config:show database

# Check environment variables
env | grep DB
env | grep DATABASE

# Test database connection
php artisan migrate:status

# Debug connection in tinker
php artisan tinker
> config('database.default')
> config('database.connections.mysql')
> DB::connection()->getPdo()
```

## 📋 **IMMEDIATE ACTION PLAN:**

### **Step 1: Verify Fresh MySQL URL**

1. Railway → MySQL Service → Connect → Copy fresh URL
2. Compare dengan DATABASE_URL yang sekarang
3. Update jika berbeda

### **Step 2: Clean Environment Variables**

```bash
# KEEP ONLY THESE:
APP_KEY="base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs="
APP_ENV="production"
APP_DEBUG="true"
DB_CONNECTION="mysql"
DATABASE_URL="FRESH_MYSQL_URL_FROM_RAILWAY"
SESSION_DRIVER="file"
CACHE_STORE="file"
NIXPACKS_NO_CACHE="1"

# DELETE ALL OTHERS (DB_HOST, DB_PORT, etc.)
```

### **Step 3: Force Clear Cache**

Add to deploy script:

```bash
php artisan config:clear --force
php artisan cache:clear --force
```

### **Step 4: Redeploy & Monitor**

1. **Redeploy immediately**
2. **Watch logs for database connection**
3. **Check health endpoint**

## 🎯 **MOST LIKELY ISSUE:**

**MySQL service restarted dan dapat connection credentials baru, tapi DATABASE_URL masih pakai yang lama.**

**Priority:** Get fresh MySQL connection URL dari Railway dan update DATABASE_URL!

**⚡ Action needed: CHECK MySQL service connection info SEKARANG! ⚡**
