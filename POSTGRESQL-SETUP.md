# 📋 Setup PostgreSQL untuk Development

## Windows (Laragon)

1. Buka Laragon → Menu → Quick add → Database → PostgreSQL
2. Start PostgreSQL service
3. Atau download: https://www.postgresql.org/download/windows/

## Manual Installation

1. Download PostgreSQL: https://www.postgresql.org/download/
2. Install dengan default settings
3. Set password untuk user 'postgres'
4. Default port: 5432

## Create Database

```sql
-- Connect ke PostgreSQL sebagai postgres user
CREATE DATABASE sman1nagreg;
```

## Update .env untuk Local Development

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=sman1nagreg
DB_USERNAME=postgres
DB_PASSWORD=your-postgres-password
```

## Test Connection

```bash
php artisan migrate:fresh --seed
```
