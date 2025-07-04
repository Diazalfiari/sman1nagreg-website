# 🗄️ MYSQL DATABASE SETUP UNTUK RAILWAY

## 🔄 **PERUBAHAN: PostgreSQL → MySQL**

Konfigurasi sudah diubah kembali ke MySQL untuk kompatibilitas yang lebih baik.

## 🚀 **LANGKAH SETUP MYSQL DI RAILWAY:**

### Step 1: Add MySQL Service

1. **Railway Dashboard** → Your Project
2. **"New"** → **"Database"** → **"Add MySQL"**
3. Wait for MySQL service to start (1-2 minutes)

### Step 2: Get MySQL Connection Info

1. **MySQL Service** → **"Connect"** tab
2. **"Public Network"** (pilih ini)
3. Copy **Connection URL**:
    ```
    mysql://root:password@trolley.proxy.rlwy.net:25727/railway
    ```

### Step 3: Update Environment Variables

Di **Web Service** → **Settings** → **Environment**:

```bash
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

**⚠️ REPLACE:** `your-password` dengan password sebenarnya dari MySQL Connection URL!

### Step 4: Push Changes & Redeploy

```bash
# Push perubahan composer.json dan environment
git add .
git commit -m "Change from PostgreSQL to MySQL"
git push origin main

# Redeploy di Railway Dashboard
# Web Service → Deployments → "Redeploy Latest"
```

## 📋 **MYSQL TABLES YANG AKAN DIBUAT:**

### **Laravel Default Tables:**

```sql
users
cache
jobs
sessions
migrations
personal_access_tokens
```

### **SMAN 1 Nagreg Custom Tables:**

```sql
news
school_profiles
academic_schedules
student_activities
adiwiyata_programs
spm_b_infos
library_galleries
```

## 🔍 **EXPECTED DEPLOYMENT LOGS:**

### **MySQL Connection:**

```
✅ Connecting to MySQL database...
✅ Database connection established
```

### **Migrations:**

```
✅ Running migrations...
Migrating: 2025_07_03_114440_create_news_table
Migrated:  2025_07_03_114440_create_news_table (XX.XXms)
... (all tables created)
```

### **Seeding:**

```
✅ Seeding database...
Seeding: Database\Seeders\NewsSeeder
Seeded:  Database\Seeders\NewsSeeder (XX.XXms)
... (all data inserted)
Database seeding completed successfully.
```

## 🎯 **KEUNTUNGAN MYSQL vs PostgreSQL:**

### **MySQL:**

-   ✅ **More compatible** dengan shared hosting
-   ✅ **Familiar** untuk developer PHP/Laravel
-   ✅ **Better Railway support** (more stable)
-   ✅ **Easier migration** dari development ke production

### **PostgreSQL:**

-   ✅ More advanced features
-   ✅ Better for complex queries
-   ❌ Less familiar untuk PHP developers
-   ❌ Dapat lebih complex untuk setup

## 🚨 **TROUBLESHOOTING MYSQL:**

### **Connection Error:**

```
SQLSTATE[HY000] [2002] Connection refused
```

**Solution:** Check DATABASE_URL format dan credentials

### **Access Denied:**

```
SQLSTATE[HY000] [1045] Access denied for user
```

**Solution:** Verify username/password di DATABASE_URL

### **Database Not Found:**

```
SQLSTATE[HY000] [1049] Unknown database 'railway'
```

**Solution:** Pastikan database name di DATABASE_URL benar

## ⏱️ **DEPLOYMENT TIMELINE:**

-   **MySQL Service:** 1-2 minutes to start
-   **Code changes:** Push & redeploy (3-5 minutes)
-   **Migrations:** 1-2 minutes (create tables)
-   **Seeding:** 1-2 minutes (insert data)
-   **Total:** 5-10 minutes

## 📋 **VERIFICATION CHECKLIST:**

-   [ ] **MySQL service:** Running di Railway
-   [ ] **Environment variables:** DATABASE_URL set correctly
-   [ ] **Code pushed:** composer.json updated ke MySQL
-   [ ] **Redeploy:** Completed successfully
-   [ ] **Tables created:** 13 tables di MySQL database
-   [ ] **Data inserted:** Sample news, school profile, etc.
-   [ ] **Website loads:** No database errors
-   [ ] **/health endpoint:** Returns "database": "connected"

**🔥 MySQL adalah pilihan yang lebih safe dan compatible untuk deployment Railway!**
