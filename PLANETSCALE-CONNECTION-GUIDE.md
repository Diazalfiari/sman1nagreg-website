# 🗄️ CARA MENDAPATKAN HOSTNAME PLANETSCALE

## 📋 **LANGKAH-LANGKAH MENDAPATKAN CONNECTION INFO:**

### **Step 1: Login ke PlanetScale**

1. **Buka:** https://planetscale.com
2. **Sign up/Login** dengan GitHub account

### **Step 2: Buat Database**

1. **Dashboard** → **"New database"**
2. **Database name:** `sman1nagreg`
3. **Region:** `us-east` (recommended)
4. **Plan:** `Hobby` (FREE - 5GB)
5. **Click "Create database"**

### **Step 3: Get Connection String**

1. **Database page** → **"Connect"** button
2. **"Create password"** → Generate new password
3. **Framework:** Select `General` atau `Laravel`
4. **Copy connection details** yang muncul

## 📝 **FORMAT CONNECTION STRING PLANETSCALE:**

PlanetScale akan memberikan connection string seperti ini:

```
mysql://username:password@aws.connect.psdb.cloud/database?sslaccept=strict
```

**Breakdown:**

-   **Hostname:** `aws.connect.psdb.cloud`
-   **Username:** `username` (generated oleh PlanetScale)
-   **Password:** `password` (generated oleh PlanetScale)
-   **Database:** `sman1nagreg` (nama database Anda)
-   **Port:** `3306` (default MySQL)

## 🔧 **CONTOH REAL CONNECTION INFO:**

Setelah create database di PlanetScale, Anda akan dapat info seperti:

```bash
# Contoh dari PlanetScale:
Host: aws.connect.psdb.cloud
Username: 6xy7z8abc9def
Password: pscale_pw_Ab3dEf9GhI2jKlMnOpQrStUvWxYz
Database: sman1nagreg
Port: 3306
```

## ⚙️ **ISI ENVIRONMENT VARIABLES:**

### **Option 1: Gunakan DATABASE_URL (Recommended)**

```bash
# Isi ini di .env atau Vercel environment:
DB_CONNECTION=mysql
DATABASE_URL=mysql://6xy7z8abc9def:pscale_pw_Ab3dEf9GhI2jKlMnOpQrStUvWxYz@aws.connect.psdb.cloud/sman1nagreg?sslaccept=strict
```

### **Option 2: Individual Variables**

```bash
# Alternative - individual variables:
DB_CONNECTION=mysql
DB_HOST=aws.connect.psdb.cloud
DB_PORT=3306
DB_DATABASE=sman1nagreg
DB_USERNAME=6xy7z8abc9def
DB_PASSWORD=pscale_pw_Ab3dEf9GhI2jKlMnOpQrStUvWxYz
```

## 🚨 **IMPORTANT NOTES:**

### **1. Username & Password are Generated**

-   PlanetScale **generates unique** username/password
-   **NOT** your PlanetScale account credentials
-   **Different** untuk setiap database

### **2. SSL Required**

-   PlanetScale **requires SSL connection**
-   Always include `?sslaccept=strict` di connection string

### **3. Hostname is Standard**

-   **Free tier:** `aws.connect.psdb.cloud`
-   **Paid tier:** might have different hostnames
-   **Always use** hostname yang diberikan PlanetScale

## 🎯 **KALAU BELUM ADA PLANETSCALE ACCOUNT:**

### **Alternative: SQLite (Temporary)**

Untuk testing/development, bisa pakai SQLite dulu:

```bash
# Temporary solution - SQLite:
DB_CONNECTION=sqlite
DB_DATABASE=/tmp/database.sqlite
# Hapus semua DB_HOST, DB_PORT, dll
```

### **Alternative: Supabase PostgreSQL**

Atau pakai Supabase (PostgreSQL gratis):

1. **Supabase.com** → Sign up
2. **New Project** → `sman1nagreg`
3. **Settings** → **Database** → Copy connection string
4. **Update:** `DB_CONNECTION=pgsql`

## 📋 **NEXT STEPS:**

1. **Buat PlanetScale account** → Get connection string
2. **Update environment variables** dengan data dari PlanetScale
3. **Push to GitHub**
4. **Deploy ke Vercel**

## 🔍 **VERIFICATION:**

**Test connection di local:**

```bash
php artisan migrate:status
```

**Expected output:**

```
✅ Migration table created successfully.
✅ Connected to PlanetScale database
```

**🎯 HOSTNAME akan selalu `aws.connect.psdb.cloud` untuk PlanetScale free tier!**
