<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🚀 Cara Setup Project Laravel

Untuk menjalankan project ini di komputer kamu, ikuti langkah singkat berikut:

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/nama-repo.git
   cd nama-repo


If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Install Composer Dependencies

composer install


Install Node Modules
Jalankan perintah berikut (gunakan CMD jika PowerShell error):

npm install


Setup File .env
Duplikasi file .env.example menjadi .env:

PowerShell:

cp .env.example .env


CMD:

copy .env.example .env


Lalu sesuaikan database:

DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=


Generate App Key

php artisan key:generate


Migrasi Database

php artisan migrate


Jalankan Server Laravel

php artisan serve


Akses di:
http://127.0.0.1:8000

Jalankan Vite (Frontend)

npm run dev


🎉 Selesai!
Project siap dijalankan sepenuhnya.
