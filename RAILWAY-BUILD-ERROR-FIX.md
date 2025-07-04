# 🚨 RAILWAY BUILD ERROR - NIXPACKS FAILURE

## ❌ **BUILD ERROR:**

```
✕ [ 4/12] RUN nix-env -if .nixpacks/nixpkgs-e24b4c09e963677b1beea49d411cd315a024ad3a.nix && nix-collect-garbage -d
process "/bin/bash -ol pipefail -c nix-env -if .nixpacks/nixpkgs-e24b4c09e963677b1beea49d411cd315a024ad3a.nix && nix-collect-garbage -d" did not complete successfully: exit code: 1
```

**Problem:** Nixpacks gagal install dependencies/packages selama build process.

## 🔍 **ROOT CAUSES:**

### **1. Nixpacks Cache Issue (Most Common)**

-   Build cache corrupted atau outdated
-   Nixpacks package conflict
-   **Solution:** Force clear cache

### **2. Package Dependencies Conflict**

-   PHP extensions conflict
-   MySQL extensions issue setelah ganti dari PostgreSQL
-   **Solution:** Update package requirements

### **3. Resource Limitations**

-   Railway build timeout
-   Memory/CPU limits exceeded
-   **Solution:** Optimize build process

## 🚀 **IMMEDIATE SOLUTIONS:**

### **Solution 1: Force Clear Build Cache (Try First)**

**Update environment variable:**

```bash
# SET ini di Web Service environment:
NIXPACKS_NO_CACHE="true"  # ← Change dari "1" ke "true"

# OR ADD additional cache clearing:
NIXPACKS_CACHE_DIRS=""
NIXPACKS_NO_DEFAULT_CACHE="true"
```

### **Solution 2: Add Build Timeout**

```bash
# ADD di Web Service environment:
NIXPACKS_BUILD_TIMEOUT="1200"  # 20 minutes
COMPOSER_PROCESS_TIMEOUT="900" # 15 minutes (sudah ada)
```

### **Solution 3: Simplify Nixpacks Config**

Create minimal `nixpacks.toml`:

```toml
# nixpacks.toml
[build]
buildCommand = "composer install --no-dev --optimize-autoloader && npm ci && npm run build"

[start]
cmd = "php artisan serve --host=0.0.0.0 --port=$PORT"

[variables]
NIXPACKS_NO_CACHE = "true"
```

### **Solution 4: Use Dockerfile Instead**

Create custom `Dockerfile` untuk replace Nixpacks auto-detection:

```dockerfile
# Dockerfile
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    nodejs \
    npm \
    mysql-client \
    && docker-php-ext-install pdo_mysql

# Copy code
COPY . /app
WORKDIR /app

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm ci && npm run build

# Start server
CMD php artisan serve --host=0.0.0.0 --port=$PORT
```

## 🔧 **STEP-BY-STEP FIX:**

### **Step 1: Try Cache Clear (Quickest)**

1. **Web Service** → **Settings** → **Environment**
2. **UPDATE:**
    ```bash
    NIXPACKS_NO_CACHE="true"  # Change dari "1"
    ```
3. **ADD:**
    ```bash
    NIXPACKS_BUILD_TIMEOUT="1200"
    ```
4. **Redeploy** → Monitor build logs

### **Step 2: If Still Fails - Force Restart**

1. **Delete ALL build cache:**
    ```bash
    # ADD temporary:
    NIXPACKS_CACHE_DIRS=""
    NIXPACKS_NO_DEFAULT_CACHE="true"
    NIXPACKS_FORCE_REBUILD="true"
    ```
2. **Redeploy**
3. **Remove temporary variables** after successful build

### **Step 3: Last Resort - Custom Build**

1. **Create `nixpacks.toml`** dengan minimal config
2. **OR create `Dockerfile`** untuk full control
3. **Push to GitHub** dan redeploy

## 🔍 **BUILD DEBUGGING:**

### **Check Build Logs for:**

```bash
# Look for specific errors:
- "package not found"
- "dependency conflict"
- "timeout"
- "memory exhausted"
- "disk space"
```

### **Common Nixpacks Issues:**

1. **PHP extensions conflict** (pdo_mysql vs pdo_pgsql)
2. **Node.js version mismatch**
3. **Composer memory limits**
4. **Build timeout**

## 📋 **IMMEDIATE ACTION:**

### **Quick Fix Environment Update:**

**Railway Dashboard** → **Web Service** → **Settings** → **Environment**

**ADD/UPDATE these:**

```bash
NIXPACKS_NO_CACHE="true"
NIXPACKS_BUILD_TIMEOUT="1200"
NIXPACKS_NO_DEFAULT_CACHE="true"
```

**Then REDEPLOY immediately.**

## 🎯 **WHY THIS HAPPENS:**

**After changing PostgreSQL → MySQL:**

-   Nixpacks cache masih reference PostgreSQL packages
-   PHP extensions conflict (pdo_pgsql vs pdo_mysql)
-   Build cache corrupted karena major environment change

**Solution:** Force rebuild dengan fresh cache.

## 📊 **SUCCESS INDICATORS:**

**After successful build:**

```
✅ [ 4/12] RUN nix-env -if ...
✅ [ 5/12] COPY .nixpacks/assets /assets/
✅ [ 6/12] COPY . /app/.
✅ [ 7/12] RUN composer install...
✅ [ 8/12] RUN npm ci...
✅ [ 9/12] RUN npm run build...
✅ Build completed successfully
```

**🔥 Priority: Clear Nixpacks cache untuk force fresh build setelah PostgreSQL → MySQL change!**
