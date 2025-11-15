<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<div align="center">

# 📚 Project Setup Guide  
### Laravel + Vite + Node Modules  
✨ Ikuti instruksi di bawah untuk menjalankan project tanpa error. Semua langkah sudah disatukan agar mudah dipahami. ✨

</div>

```bash
# 🛠️ Setup Step-by-Step (All-in-One Block)

# Clone repository
git clone https://github.com/username/nama-repo.git
cd nama-repo

# Install composer dependencies
composer install

# Install node modules (gunakan CMD jika PowerShell error)
npm install

# Copy file environment
# PowerShell:
cp .env.example .env
# CMD:
copy .env.example .env

# Set database environment
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

# Generate Laravel application key
php artisan key:generate

# Jalankan migrasi database
php artisan migrate

# Jalankan server Laravel
php artisan serve   # akses: http://127.0.0.1:8000

# Jalankan Vite (frontend)
npm run dev
