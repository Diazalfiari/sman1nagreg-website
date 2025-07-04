## 🎯 LANGKAH CEPAT DEPLOYMENT SMAN 1 NAGREG

### ✅ Yang Sudah Siap:

-   ✅ Git repository initialized
-   ✅ Application key generated
-   ✅ Assets compiled (CSS/JS)
-   ✅ Deployment files created
-   ✅ Environment configs ready

### 🚀 DEPLOY SEKARANG - Railway (Termudah)

#### 1. Push ke GitHub (5 menit)

```bash
# Buat repository baru di GitHub dengan nama: sman1nagreg-website
# Lalu jalankan:
git remote add origin https://github.com/username/sman1nagreg-website.git
git branch -M main
git push -u origin main
```

#### 2. Deploy di Railway (3 menit)

1. Buka [railway.app](https://railway.app)
2. Login dengan GitHub
3. Klik "New Project" → "Deploy from GitHub repo"
4. Pilih repository "sman1nagreg-website"
5. Tunggu build selesai

#### 3. Tambah Database (1 menit)

1. Di Railway dashboard → "New" → "Database" → "Add PostgreSQL"
2. Database auto-connect ke aplikasi

#### 4. Set Environment Variables (2 menit)

Di Railway → Project Settings → Variables, tambah:

```
APP_KEY=base64:cf6+s6/l/joIDj9nmtO6c2/KI4aNAEMK+ZZUeN1cDJs=
APP_ENV=production
APP_DEBUG=false
APP_URL=https://nama-random.up.railway.app
NIXPACKS_NO_CACHE=1
```

**⚠️ PENTING:** Setelah menambah variables, klik "Redeploy Latest" untuk apply changes.

#### 5. ✅ SELESAI!

Website live di: `https://nama-random.up.railway.app`

---

### 🔄 ALTERNATIF: Heroku

#### Prerequisites:

```bash
# Install Heroku CLI dari: https://devcenter.heroku.com/articles/heroku-cli
heroku login
```

#### Deploy:

```bash
heroku create sman1nagreg-app
heroku addons:create heroku-postgresql:hobby-dev
heroku config:set APP_KEY=base64:cf6+s6/l/joIDj9nmtO6c2/KI4aNAEMK+ZZUeN1cDJs=
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
git push heroku main
heroku open
```

---

### 📱 Custom Domain (Opsional)

Setelah deploy berhasil:

1. **Railway**: Settings → Domains → Add custom domain
2. **Heroku**: Settings → Domains → Add domain

### 🔧 Jika Ada Error:

**❌ Error: "Failed to open stream: No such file or directory in /app/vendor/autoload.php"**
```bash
# Solusi 1: Re-deploy dengan fix yang sudah dibuat
git add .
git commit -m "Fix: Railway deployment configuration"
git push origin main

# Solusi 2: Manual fix di Railway
# 1. Railway Dashboard → Settings → Variables → Add:
#    NIXPACKS_NO_CACHE=1
# 2. Redeploy: Deployments → "Redeploy Latest"
```

**500 Error?**

```bash
# Check logs:
railway logs  # atau
heroku logs --tail
```

**Database Error?**

-   Pastikan migrations running: `railway run php artisan migrate`
-   Check environment variables

**CSS/JS tidak load?**

-   Pastikan `npm run build` sudah dijalankan
-   Check `public/build` folder ada

---

### 📞 Need Help?

1. Check `DEPLOYMENT.md` untuk troubleshooting lengkap
2. Railway docs: https://docs.railway.app
3. Laravel deployment: https://laravel.com/docs/deployment

**🎉 WEBSITE SMAN 1 NAGREG READY TO GO LIVE!**
