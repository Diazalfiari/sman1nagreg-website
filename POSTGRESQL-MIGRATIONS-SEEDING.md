# 🗄️ POSTGRESQL MIGRATIONS & SEEDING DI RAILWAY

## 🎯 **CARA MIGRATIONS & SEEDING BERJALAN DI RAILWAY:**

### 1. **Automatic via Deploy Script** (Recommended)

Railway akan menjalankan migrations dan seeding **otomatis** saat deployment melalui `deploy.sh`:

```bash
# Yang terjadi otomatis saat deploy:
php artisan migrate --force
php artisan db:seed --force
```

### 2. **Manual via Railway Dashboard** (Alternative)

Jika perlu run manual, bisa via **Railway Console**:

1. **Railway Dashboard** → **Web Service**
2. **"Console"** tab
3. Run commands:

```bash
# Check database connection
php artisan migrate:status

# Run migrations (create tables)
php artisan migrate --force

# Run seeding (insert sample data)
php artisan db:seed --force

# Or run specific seeder
php artisan db:seed --class=NewsSeeder --force
```

## 📋 **APA YANG AKAN TER-CREATE DI POSTGRESQL:**

### **❌ STATUS SAAT INI: Database PostgreSQL KOSONG**

```sql
-- SAAT INI: PostgreSQL database masih kosong
-- Tidak ada tables sama sekali
-- Karena Laravel app belum connect & run migrations
```

### **✅ Tables yang AKAN DIBUAT setelah Laravel app connect:**

```sql
-- Laravel default tables (akan dibuat otomatis)
users
cache
jobs
sessions

-- SMAN 1 Nagreg custom tables (dari migrations)
news
school_profiles
academic_schedules
student_activities
adiwiyata_programs
spm_b_infos
library_galleries
```

### **Sample Data yang AKAN DI-INSERT setelah tables dibuat:**

```php
// ❌ SAAT INI: Belum ada data karena tables belum ada

// ✅ SETELAH DEPLOYMENT & SEEDING:
// NewsSeeder - Sample berita sekolah
news: 10 records (judul, konten, gambar, tanggal)

// SchoolProfileSeeder - Data profil sekolah
school_profiles: 1 record (nama, alamat, visi, misi)

// AcademicScheduleSeeder - Jadwal akademik
academic_schedules: 5 records (semester, ujian, libur)

// StudentActivitySeeder - Kegiatan siswa
student_activities: 8 records (ekstrakurikuler, events)

// AdiwiyataProgramSeeder - Program lingkungan
adiwiyata_programs: 5 records (program green school)

// SpmBInfoSeeder - Info SPM-B
spm_b_infos: 3 records (informasi akademik)

// LibraryGallerySeeder - Galeri perpustakaan
library_galleries: 6 records (foto perpustakaan)
```

## 🚀 **LANGKAH-LANGKAH YANG TERJADI OTOMATIS:**

### Step 1: **Environment Setup**

```bash
✅ Load DATABASE_URL from Railway PostgreSQL
✅ Set DB_CONNECTION=pgsql
✅ Laravel connects to PostgreSQL server
```

### Step 2: **Database Migrations**

```bash
✅ Check if migration table exists
✅ Create migration table if not exists
✅ Run pending migrations:
   - 2025_07_03_114440_create_news_table
   - 2025_07_03_114509_create_school_profiles_table
   - 2025_07_03_114550_create_academic_schedules_table
   - ... (all migration files)
```

### Step 3: **Database Seeding**

```bash
✅ Run DatabaseSeeder
✅ Call individual seeders:
   - NewsSeeder
   - SchoolProfileSeeder
   - AcademicScheduleSeeder
   - StudentActivitySeeder
   - AdiwiyataProgramSeeder
   - SpmBInfoSeeder
   - LibraryGallerySeeder
```

## 🔄 **KENAPA DATABASE POSTGRESQL MASIH KOSONG?**

### **Current Situation:**

```
✅ PostgreSQL server: RUNNING (ready to accept connections)
❌ Laravel app: BELUM CONNECT ke PostgreSQL
❌ Migrations: BELUM RUNNING (tables belum dibuat)
❌ Seeding: BELUM RUNNING (data belum di-insert)
```

### **Yang Perlu Terjadi:**

1. **Laravel app deployment SELESAI** ← **INI YANG SEDANG BERLANGSUNG**
2. **Laravel load DATABASE_URL** (connect ke PostgreSQL)
3. **Artisan migrate** (create 11 tables)
4. **Artisan db:seed** (insert sample data ke tables)

### **Timeline:**

-   ✅ **PostgreSQL ready:** DONE (database server aktif)
-   🔄 **Laravel app starting:** IN PROGRESS (deployment logs)
-   ⏳ **Database connection:** WAITING (after app starts)
-   ⏳ **Migrations:** WAITING (after connection established)
-   ⏳ **Seeding:** WAITING (after tables created)

**🎯 NEXT: Tunggu deployment logs yang menunjukkan Laravel app berhasil start dan connect ke database!**

## 🔍 **MONITOR LOGS UNTUK MELIHAT PROGRESS:**

### **Migration Success Logs:**

```
Migrating: 2025_07_03_114440_create_news_table
Migrated:  2025_07_03_114440_create_news_table (XX.XXms)
Migrating: 2025_07_03_114509_create_school_profiles_table
Migrated:  2025_07_03_114509_create_school_profiles_table (XX.XXms)
...
```

### **Seeding Success Logs:**

```
Seeding: Database\Seeders\NewsSeeder
Seeded:  Database\Seeders\NewsSeeder (XX.XXms)
Seeding: Database\Seeders\SchoolProfileSeeder
Seeded:  Database\Seeders\SchoolProfileSeeder (XX.XXms)
...
Database seeding completed successfully.
```

## 🚨 **JIKA MIGRATIONS/SEEDING GAGAL:**

### **Common Errors & Solutions:**

#### 1. **Database Connection Error:**

```
SQLSTATE[08006] [7] could not connect to server
```

**Solution:** Check DATABASE_URL di environment variables

#### 2. **Table Already Exists:**

```
Base table or view already exists: relation "news" already exists
```

**Solution:** Run `php artisan migrate:fresh --seed --force`

#### 3. **Permission Error:**

```
SQLSTATE[42501]: Insufficient privilege
```

**Solution:** Check PostgreSQL user permissions di Railway

## 🛠️ **MANUAL TROUBLESHOOTING:**

### **Check Migration Status:**

```bash
php artisan migrate:status
```

### **Reset Database (if needed):**

```bash
# WARNING: This will drop all tables!
php artisan migrate:fresh --seed --force
```

### **Run Specific Migration:**

```bash
php artisan migrate --path=/database/migrations/2025_07_03_114440_create_news_table.php --force
```

### **Run Specific Seeder:**

```bash
php artisan db:seed --class=NewsSeeder --force
```

## 📋 **VERIFICATION CHECKLIST:**

After deployment, verify:

-   [ ] **Tables created:** Check if all 11 tables exist in PostgreSQL
-   [ ] **Data inserted:** Check if sample data available (news, school profile)
-   [ ] **Website loads:** Homepage shows news and school info
-   [ ] **No SQLite errors:** No more "database.sqlite not found" errors
-   [ ] **/health endpoint:** Returns "database": "connected"

## 🎯 **Expected Timeline:**

-   **Migrations:** 30 seconds - 1 minute (create tables)
-   **Seeding:** 1-2 minutes (insert sample data)
-   **Total:** 2-3 minutes untuk database setup

**🔥 Semua ini akan berjalan OTOMATIS saat Railway deployment! Anda tinggal monitor logs saja.**
