# 🔧 RAILWAY ENVIRONMENT VARIABLES - MYSQL CONFIGURATION

## ❌ **MASALAH DI CURRENT CONFIG:**

### **1. Database Connection Mismatch:**

```bash
# SALAH: Masih PostgreSQL
DB_CONNECTION="pgsql"
DATABASE_URL="${{Postgres-6b85f4ba-dc92-4a28-88e2-7218c79bd291.DATABASE_URL}}"

# BENAR: Harus MySQL
DB_CONNECTION="mysql"
DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway"
```

### **2. PostgreSQL Variables Still Present:**

```bash
# HAPUS SEMUA INI (PostgreSQL variables):
DB_HOST="${{Postgres-6b85f4ba-dc92-4a28-88e2-7218c79bd291.PGHOST}}"
DB_PORT="${{Postgres-6b85f4ba-dc92-4a28-88e2-7218c79bd291.PGPORT}}"
DB_DATABASE="${{Postgres-6b85f4ba-dc92-4a28-88e2-7218c79bd291.PGDATABASE}}"
DB_USERNAME="${{Postgres-6b85f4ba-dc92-4a28-88e2-7218c79bd291.PGUSER}}"
DB_PASSWORD="${{Postgres-6b85f4ba-dc92-4a28-88e2-7218c79bd291.PGPASSWORD}}"
```

## ✅ **KONFIGURASI YANG BENAR:**

### **Web Service Environment Variables:**

```bash
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=true
APP_URL=https://sman1nagreg.up.railway.app
DB_CONNECTION=mysql
DATABASE_URL=mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway
SESSION_DRIVER=file
CACHE_STORE=file
NIXPACKS_NO_CACHE=1
COMPOSER_PROCESS_TIMEOUT=600
GEMINI_API_KEY=AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA
```

### **⚠️ OPTION A: Simple DATABASE_URL Only (Recommended)**

Gunakan **HANYA DATABASE_URL**, hapus DB\_\* individual:

```bash
# HAPUS ini semua:
DB_HOST=...
DB_PORT=...
DB_DATABASE=...
DB_USERNAME=...
DB_PASSWORD=...

# GUNAKAN hanya ini:
DB_CONNECTION=mysql
DATABASE_URL=mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway
```

### **⚠️ OPTION B: Individual Variables (Alternative)**

Jika mau gunakan individual variables:

```bash
DB_CONNECTION=mysql
DB_HOST=${{MYSQLHOST}}
DB_PORT=${{MYSQLPORT}}
DB_DATABASE=${{MYSQL_DATABASE}}
DB_USERNAME=${{MYSQLUSER}}
DB_PASSWORD=${{MYSQL_ROOT_PASSWORD}}
```

## 🚀 **LANGKAH PERBAIKAN:**

### **Step 1: Clean Environment Variables**

Di **Railway Dashboard** → **Web Service** → **Settings** → **Environment**:

1. **DELETE semua PostgreSQL variables:**

    ```bash
    DB_HOST (yang PostgreSQL)
    DB_PORT (yang PostgreSQL)
    DB_DATABASE (yang PostgreSQL)
    DB_USERNAME (yang PostgreSQL)
    DB_PASSWORD (yang PostgreSQL)
    DATABASE_URL (yang PostgreSQL)
    ```

2. **UPDATE yang ada:**

    ```bash
    DB_CONNECTION=mysql  # CHANGE dari pgsql ke mysql
    ```

3. **ADD MySQL connection:**
    ```bash
    DATABASE_URL=mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway
    ```

### **Step 2: Final Environment Variables List**

```bash
# ✅ YANG SUDAH BENAR (dari user):
APP_KEY="base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs="
APP_ENV="production"
APP_DEBUG="true"
DB_CONNECTION="mysql"
DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway"
SESSION_DRIVER="file"
CACHE_STORE="file"
NIXPACKS_NO_CACHE="1"

# ⚠️ YANG MISSING (perlu ditambah):
APP_NAME="SMAN 1 Nagreg"
APP_URL="https://sman1nagreg.up.railway.app"
COMPOSER_PROCESS_TIMEOUT="600"
GEMINI_API_KEY="AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA"

# 🎯 COMPLETE LIST (yang seharusnya ada):
APP_NAME="SMAN 1 Nagreg"
APP_ENV="production"
APP_KEY="base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs="
APP_DEBUG="true"
APP_URL="https://sman1nagreg.up.railway.app"
DB_CONNECTION="mysql"
DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway"
SESSION_DRIVER="file"
CACHE_STORE="file"
NIXPACKS_NO_CACHE="1"
COMPOSER_PROCESS_TIMEOUT="600"
GEMINI_API_KEY="AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA"
```

### **Step 3: Redeploy**

Setelah environment variables diupdate:

1. **Web Service** → **"Deployments"** tab
2. **"Redeploy Latest"** button
3. **Monitor logs** untuk MySQL connection

## 🔍 **EXPECTED LOGS SETELAH PERBAIKAN:**

### **Connection Success:**

```
✅ Connecting to MySQL database...
✅ Database connection established
✅ Running migrations...
Migrating: 2025_07_03_114440_create_news_table
Migrated:  2025_07_03_114440_create_news_table (XX.XXms)
...
✅ Database seeding completed successfully
✅ Application started
```

### **Health Check:**

```
GET /health
{
  "status": "ok",
  "database": "connected",
  "connection": "mysql"
}
```

## 🚨 **TROUBLESHOOTING:**

### **❌ PERSISTENT ERROR: SQLSTATE[HY000] [2002] Connection refused**

**Error masih terjadi setelah environment variables diupdate.**

**MOST LIKELY CAUSE:** MySQL service restarted dan dapat connection credentials baru!

#### **🔍 IMMEDIATE CHECK - GET FRESH MYSQL URL:**

1. **Railway Dashboard** → **MySQL Service** → **"Connect"** tab
2. **"Public Network"** → **Copy FRESH connection URL**
3. **Compare** dengan DATABASE_URL yang sekarang:

    ```bash
    # CURRENT (mungkin expired):
    DATABASE_URL="mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway"

    # FRESH (from Railway now):
    DATABASE_URL="mysql://root:NEW_PASSWORD@NEW_HOST:NEW_PORT/railway"
    ```

#### **🚨 CRITICAL ACTIONS:**

1. **UPDATE DATABASE_URL** dengan fresh connection dari Railway
2. **REMOVE ALL individual DB variables:**
    ```bash
    DELETE: DB_HOST
    DELETE: DB_PORT
    DELETE: DB_DATABASE
    DELETE: DB_USERNAME
    DELETE: DB_PASSWORD
    ```
3. **KEEP ONLY:**
    ```bash
    DB_CONNECTION="mysql"
    DATABASE_URL="FRESH_MYSQL_URL_FROM_RAILWAY"
    ```
4. **REDEPLOY immediately**

### **❌ ERROR: SQLSTATE[HY000] [2002] Connection refused**

**Error ini berarti Laravel tidak bisa connect ke MySQL database.**

#### **Diagnosis Steps:**

1. **Check Environment Variables di Railway:**

    ```bash
    # Pastikan ini ADA dan BENAR:
    DB_CONNECTION=mysql
    DATABASE_URL=mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway

    # Pastikan ini TIDAK ADA (sudah dihapus):
    DB_CONNECTION=pgsql
    DB_HOST (PostgreSQL)
    DB_PORT (PostgreSQL)
    DB_DATABASE (PostgreSQL)
    DB_USERNAME (PostgreSQL)
    DB_PASSWORD (PostgreSQL)
    ```

2. **Check MySQL Service Status:**

    - Railway Dashboard → MySQL Service → Status harus "Running"
    - Check connection info masih sama

3. **Verify Connection URL Format:**

    ```bash
    # FORMAT BENAR:
    mysql://username:password@host:port/database

    # CONTOH BENAR:
    mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway
    ```

#### **🔧 IMMEDIATE FIX:**

1. **Railway Dashboard** → **Web Service** → **Settings** → **Environment**

2. **REMOVE semua PostgreSQL variables** (jika masih ada):

    ```bash
    DELETE: DB_HOST="${{Postgres-...}}"
    DELETE: DB_PORT="${{Postgres-...}}"
    DELETE: DB_DATABASE="${{Postgres-...}}"
    DELETE: DB_USERNAME="${{Postgres-...}}"
    DELETE: DB_PASSWORD="${{Postgres-...}}"
    DELETE: DATABASE_URL="${{Postgres-...}}"
    ```

3. **SET proper MySQL variables:**

    ```bash
    DB_CONNECTION=mysql
    DATABASE_URL=mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway
    ```

4. **REDEPLOY immediately:**
    - Web Service → Deployments → "Redeploy Latest"

#### **🔍 Alternative: Use Individual MySQL Variables**

Jika DATABASE_URL tidak work, coba individual variables:

```bash
DB_CONNECTION=mysql
DB_HOST=maglev.proxy.rlwy.net
DB_PORT=53384
DB_DATABASE=railway
DB_USERNAME=root
DB_PASSWORD=vmaqWUAPcNNLASTaKQlbOVozdynTITUh
```

#### **🚨 CRITICAL CHECK:**

**Pastikan di Railway Environment TIDAK ADA conflict variables:**

-   Tidak boleh ada PostgreSQL dan MySQL variables bersamaan
-   Tidak boleh ada multiple DATABASE_URL
-   DB_CONNECTION HARUS mysql (bukan pgsql)

### **Jika MySQL Connection Error:**

1. **Check DATABASE_URL format:**

    ```bash
    # BENAR:
    mysql://root:vmaqWUAPcNNLASTaKQlbOVozdynTITUh@maglev.proxy.rlwy.net:53384/railway

    # SALAH:
    mysql://root:password@localhost:3306/database
    ```

2. **Verify MySQL service running:**

    - Railway Dashboard → MySQL Service → Check status

3. **Test connection manual:**
    - Railway Console → Web Service → `php artisan migrate:status`

## 📋 **FINAL CHECKLIST:**

-   [ ] **DELETE PostgreSQL environment variables**
-   [ ] **UPDATE DB_CONNECTION ke mysql**
-   [ ] **ADD proper MySQL DATABASE_URL**
-   [ ] **REMOVE individual DB\_\* variables** (gunakan DATABASE_URL saja)
-   [ ] **REDEPLOY web service**
-   [ ] **VERIFY MySQL connection di logs**
-   [ ] **TEST website loads tanpa error**

**🔥 Setelah perbaikan ini, Laravel akan connect ke MySQL dengan benar!**
