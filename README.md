# SMAN 1 Nagreg Website

Website resmi SMAN 1 Nagreg yang dibangun menggunakan Laravel 12.

## Fitur

-   Halaman beranda dengan informasi sekolah
-   Sistem berita dan pengumuman
-   Profil sekolah dan program unggulan
-   Program Adiwiyata
-   Galeri perpustakaan
-   Chatbot AI untuk informasi sekolah
-   Responsive design dengan Tailwind CSS

## Teknologi

-   **Backend**: Laravel 12
-   **Frontend**: Blade Templates, Tailwind CSS, Alpine.js
-   **Database**: MySQL/PostgreSQL
-   **Real-time**: Livewire
-   **AI**: Google Gemini API untuk chatbot

## Deployment

Website ini dapat di-deploy di berbagai platform hosting gratis:

### Railway (Recommended)

1. Fork repository ini
2. Daftar di [Railway](https://railway.app)
3. Connect GitHub repository
4. Add PostgreSQL database
5. Deploy otomatis

### Heroku

1. Install Heroku CLI
2. `heroku create nama-app`
3. `heroku addons:create heroku-postgresql:hobby-dev`
4. `git push heroku main`

### Vercel + PlanetScale

1. Deploy frontend di Vercel
2. Setup database di PlanetScale
3. Configure environment variables

## Environment Variables

Untuk production, setup environment variables berikut:

-   `APP_KEY`: Generate dengan `php artisan key:generate`
-   `APP_URL`: URL aplikasi
-   Database credentials (DB\_\*)
-   `APP_DEBUG=false` untuk production

## Local Development

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm run dev
php artisan serve
```

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Redberry](https://redberry.international/laravel-development)**
-   **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
