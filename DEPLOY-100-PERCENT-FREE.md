# 🆓 DEPLOY 100% GRATIS - WEBSITE + DATABASE

## 🎯 **OVERVIEW:**

**Complete free hosting solution untuk SMAN 1 Nagreg website:**

- **Website:** Vercel (gratis selamanya)
- **Database:** PlanetScale (gratis 5GB MySQL)
- **Domain:** Vercel subdomain (gratis) atau custom domain
- **SSL:** Auto-generated (gratis)
- **CDN:** Global edge network (gratis)

**Total cost: $0/month forever! 🎉**

## 📋 **WHAT YOU'LL GET:**

✅ **Lightning fast website** (global CDN)
✅ **Reliable MySQL database** (5GB storage)
✅ **Auto deployments** from GitHub
✅ **SSL certificates** (automatic)
✅ **99.9% uptime** guarantee
✅ **Professional domain** (sman1nagreg.vercel.app)

## 🚀 **COMPLETE SETUP GUIDE:**

### **PHASE 1: DATABASE SETUP (PlanetScale - FREE MySQL)**

#### **Step 1: Create PlanetScale Account**

1. **Go to:** https://planetscale.com
2. **Sign up** dengan GitHub account
3. **Verify email** dan complete onboarding

#### **Step 2: Create Database**

1. **Dashboard** → **"New database"**
2. **Database name:** `sman1nagreg`
3. **Region:** `us-east` (closest to Vercel)
4. **Plan:** `Hobby` (FREE - 5GB storage, 1 billion rows)
5. **Click "Create database"**

#### **Step 3: Get Connection String**

1. **Database dashboard** → **"Connect"** button
2. **Create password** → **"Create password"**
3. **Select framework:** `Laravel`
4. **Copy connection string:**
   ```
   mysql://username:password@host/database?sslaccept=strict
   ```
5. **Save this** - akan digunakan di Vercel environment variables

#### **Step 4: Setup Database Schema**

1. **PlanetScale Console** → **"Console"** tab
2. **Run migrations** (atau import existing data):

```sql
-- Create tables for SMAN 1 Nagreg
CREATE TABLE `news` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `excerpt` text,
  `featured_image` varchar(255),
  `status` enum('draft','published') DEFAULT 'draft',
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `news_slug_unique` (`slug`)
);

CREATE TABLE `school_profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20),
  `email` varchar(100),
  `vision` text,
  `mission` text,
  `history` longtext,
  `principal_name` varchar(255),
  `logo` varchar(255),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Add sample data
INSERT INTO `school_profiles` VALUES 
(1, 'SMAN 1 Nagreg', 'Jl. Raya Nagreg No. 123, Bandung', '022-1234567', 'info@sman1nagreg.sch.id', 
'Menjadi sekolah unggulan yang menghasilkan lulusan berkualitas', 
'Menyelenggarakan pendidikan berkualitas dengan mengembangkan potensi siswa', 
'SMAN 1 Nagreg didirikan pada tahun 1985...', 
'Drs. Ahmad Suryadi, M.Pd', 'logo.png', NOW(), NOW());

INSERT INTO `news` VALUES 
(1, 'Sambutan Kepala Sekolah', 'sambutan-kepala-sekolah', 
'Selamat datang di website resmi SMAN 1 Nagreg...', 
'Sambutan hangat dari Kepala Sekolah untuk tahun ajaran baru', 
NULL, 'published', NOW(), NOW(), NOW()),
(2, 'Penerimaan Peserta Didik Baru 2025', 'ppdb-2025', 
'Informasi lengkap mengenai PPDB SMAN 1 Nagreg tahun 2025...', 
'Pendaftaran dibuka mulai 1 Juli 2025', 
NULL, 'published', NOW(), NOW(), NOW());
```

### **PHASE 2: WEBSITE DEPLOYMENT (Vercel)**

#### **Step 1: Prepare Local Project**

```bash
# 1. Navigate to project directory
cd c:\laragon\www\sman1nagreg-website

# 2. Install dependencies (if not done)
composer install
npm install

# 3. Generate production assets
npm run build

# 4. Test locally (optional)
php artisan serve
```

#### **Step 2: Update Environment for Production**

**Update `.env.vercel` dengan PlanetScale connection:**

```bash
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=false
APP_URL=https://sman1nagreg.vercel.app

# Database - PlanetScale MySQL (use connection from Step 3)
DB_CONNECTION=mysql
DATABASE_URL=mysql://your-username:your-password@your-host/sman1nagreg?sslaccept=strict

# Serverless optimizations
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
LOG_CHANNEL=stderr
LOG_LEVEL=error

# API Keys
GEMINI_API_KEY=AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA

# Vercel optimizations
VIEW_COMPILED_PATH=/tmp/views
SESSION_SAVE_PATH=/tmp/sessions
```

#### **Step 3: Commit to GitHub**

```bash
# Add Vercel configuration files
git add vercel.json
git add api/index.php
git add .env.vercel

# Commit changes
git commit -m "Add Vercel deployment configuration with PlanetScale database"

# Push to GitHub
git push origin main
```

#### **Step 4: Deploy to Vercel**

1. **Go to:** https://vercel.com
2. **Sign up/Login** dengan GitHub account
3. **Import Project:**
   - Click **"New Project"**
   - Select **`sman1nagreg-website`** repository
   - Click **"Import"**

4. **Configure Project:**
   - **Framework Preset:** Other
   - **Root Directory:** `./`
   - **Build Command:** 
     ```bash
     composer install --no-dev --optimize-autoloader && npm ci && npm run build
     ```
   - **Output Directory:** `public`
   - **Install Command:** 
     ```bash
     composer install && npm install
     ```

#### **Step 5: Set Environment Variables**

**Vercel Project Dashboard** → **Settings** → **Environment Variables**

**Add these one by one:**

```bash
APP_NAME="SMAN 1 Nagreg"
APP_ENV=production
APP_KEY=base64:TM0Fr4ZzUDu266Vp2BeJofBz5LsAA484wgbkG9Tn2xs=
APP_DEBUG=false
APP_URL=https://sman1nagreg.vercel.app
DB_CONNECTION=mysql
DATABASE_URL=mysql://your-username:your-password@your-host/sman1nagreg?sslaccept=strict
SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
LOG_CHANNEL=stderr
GEMINI_API_KEY=AIzaSyAFbXdxlfZampz_5O6xT4jxSDQ4xFFMugA
VIEW_COMPILED_PATH=/tmp/views
SESSION_SAVE_PATH=/tmp/sessions
```

#### **Step 6: Deploy**

1. **Click "Deploy"** (build akan start otomatis)
2. **Wait 3-5 minutes** untuk build completion
3. **Check build logs** untuk errors
4. **Visit your website:** `https://sman1nagreg.vercel.app`

## 🔍 **VERIFICATION & TESTING:**

### **Database Connection Test:**

**Visit:** `https://sman1nagreg.vercel.app/health`

**Expected response:**
```json
{
  "status": "ok",
  "database": "connected",
  "connection": "mysql",
  "timestamp": "2025-07-04T13:30:00Z"
}
```

### **Website Functionality Test:**

1. ✅ **Homepage loads** dengan news dan school profile
2. ✅ **Navigation works** (About, Academic, News, etc.)
3. ✅ **Database queries** berjalan normal
4. ✅ **No errors** di browser console
5. ✅ **SSL certificate** aktif (https://)

### **Performance Test:**

- **Speed:** Should load < 2 seconds globally
- **Mobile:** Responsive design works
- **SEO:** Meta tags dan structure correct

## 💡 **FREE TIER LIMITS:**

### **PlanetScale Free (Hobby Plan):**
- ✅ **5GB storage** (sangat cukup untuk school website)
- ✅ **1 billion row reads/month** (unlimited for small sites)
- ✅ **10 million row writes/month** (more than enough)
- ✅ **1 database** dengan unlimited tables

### **Vercel Free (Hobby Plan):**
- ✅ **100GB bandwidth/month** (sangat generous)
- ✅ **Unlimited static files**
- ✅ **100 serverless function invocations/day** (enough for small traffic)
- ✅ **Custom domains** supported

## 🚨 **TROUBLESHOOTING:**

### **Common Build Errors:**

1. **Composer fails:**
   ```bash
   # Add environment variable:
   COMPOSER_PROCESS_TIMEOUT=600
   ```

2. **NPM build fails:**
   ```bash
   # Ensure package.json has:
   "scripts": {
     "build": "vite build"
   }
   ```

### **Database Connection Issues:**

1. **Check connection string format**
2. **Verify PlanetScale database is active**
3. **Test connection di PlanetScale console**

### **Performance Issues:**

1. **Enable Vercel caching**
2. **Optimize images** (convert to WebP)
3. **Minimize CSS/JS** (Vite does this automatically)

## 🎯 **NEXT STEPS AFTER DEPLOYMENT:**

### **Optional Enhancements:**

1. **Custom Domain:**
   - Buy domain dari provider manapun
   - Add di Vercel → Project Settings → Domains
   - Configure DNS records

2. **Analytics:**
   - Enable Vercel Analytics (free)
   - Add Google Analytics
   - Monitor performance

3. **Monitoring:**
   - Setup uptime monitoring
   - Error tracking dengan Sentry
   - Performance monitoring

## 📊 **FINAL CHECKLIST:**

- [ ] **PlanetScale account** created
- [ ] **Database `sman1nagreg`** created  
- [ ] **Tables and sample data** inserted
- [ ] **Connection string** obtained
- [ ] **Vercel account** created
- [ ] **GitHub repository** connected
- [ ] **Environment variables** configured
- [ ] **Website deployed** and accessible
- [ ] **Database connected** and working
- [ ] **All features tested** and functional

## 🎉 **CONGRATULATIONS!**

**Your SMAN 1 Nagreg website is now:**

✅ **Live on the internet** - https://sman1nagreg.vercel.app
✅ **100% FREE hosting** - $0/month forever
✅ **Professional grade** - Global CDN + SSL
✅ **Reliable database** - 99.9% uptime MySQL
✅ **Auto deployments** - Push to GitHub = auto deploy
✅ **Scalable** - Handles traffic spikes automatically

**Total setup time:** 30-45 minutes
**Monthly cost:** $0 (FREE FOREVER!)

**🔥 This is a production-ready, professional website at absolutely no cost!**
