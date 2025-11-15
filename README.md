<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Cara Setup Project

Clone repo:
git clone https://github.com/username/nama-repo.git
cd nama-repo

Install composer:
composer install

Install node modules (kalau error di PowerShell, pakai CMD):
npm install

Buat file .env:
PowerShell: cp .env.example .env
CMD: copy .env.example .env

Atur database di file .env:
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

Generate key:
php artisan key:generate

Migrasi database:
php artisan migrate

Jalankan server Laravel:
php artisan serve

Jalankan Vite:
npm run dev

Selesai, project siap dipakai.

