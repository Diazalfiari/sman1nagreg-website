# Deploy ke Netlify dengan Laravel

## 🎯 **MENGAPA NETLIFY LEBIH MUDAH:**

-   ✅ **Built-in PHP support** yang lebih stabil
-   ✅ **No complex runtime** configuration
-   ✅ **Free tier generous** (100GB bandwidth)
-   ✅ **Easy deployment** dari GitHub
-   ✅ **Better Laravel support**

## 🚀 **CARA DEPLOY KE NETLIFY:**

### **1. Signup Netlify:**

-   Go to: https://netlify.com
-   Sign up dengan GitHub account

### **2. Import Project:**

-   Dashboard → "New site from Git"
-   Connect GitHub → Select `sman1nagreg-website`

### **3. Build Settings:**

-   **Branch:** `main`
-   **Base directory:** `/`
-   **Build command:** `composer install --no-dev && php artisan config:cache && npm run build`
-   **Publish directory:** `public`

### **4. Environment Variables:**

```bash
APP_NAME=SMAN 1 Nagreg
APP_ENV=production
APP_KEY=base64:8jDWYniplRI0bmSwvthMn+PXgB1Z5JJBwTZNN0n75fA=
APP_DEBUG=false
APP_URL=https://your-site.netlify.app

DB_CONNECTION=sqlite
DB_DATABASE=/tmp/database.sqlite

SESSION_DRIVER=file
CACHE_STORE=file
QUEUE_CONNECTION=sync
LOG_CHANNEL=stderr
```

### **5. Deploy:**

-   Click "Deploy site"
-   Wait 3-5 minutes
-   Site will be live at: `https://random-name.netlify.app`

## 🎉 **BENEFITS:**

-   ✅ **No PHP runtime issues**
-   ✅ **Better error messages**
-   ✅ **Free domain + SSL**
-   ✅ **99.9% uptime**
-   ✅ **Easy custom domain**
