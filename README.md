# 🚀 Company Profile

Project pembuatan Company Profile D4 Teknik Informatika yang dibuat oleh Divisi WebDev HIMTI 2025

---

## 📦 Prasyarat

Sebelum memulai, pastikan kamu sudah menginstal:

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL / MariaDB](https://www.mysql.com/)
- [Laravel](https://laravel.com/)

---

## 🛠 Instalasi

Berikut langkah-langkah untuk menjalankan proyek ini di lokal:

### 1. Clone Repository

bash
git clone https://github.com/Ahmadlazim-03/Configuration-open-admin-panel-laravel-11.git
cd company-profile
cp .env.example .env


Buka .env dan sesuaikan sesuai konfigurasi berikut :<br/>

APP_URL=http://localhost -> APP_URL=http://127.0.0.1:8000<br/>
DB_CONNECTION=mysql<br/>
DB_HOST=127.0.0.1<br/>
DB_PORT=3306<br/>
DB_DATABASE=your_data_base<br/>
DB_USERNAME=your_username<br/>
DB_PASSWORD=your_password<br/>

bash
$ composer install
$ php artisan key:generate
$ php artisan migrate


---

## ❗❗❗ Penyesuaian File Vendor pada project laravel anda

<pre>
Configuration-open-admin-panel-laravel-11/
├── app
├── bootstrap
├── config
├── database
├── public
├── resources
├── routes
├── storage
├── tests
├── vendor
    └── open-admin-org 👈
</pre>

---

## ▶ Jalankan aplikasi

bash
$ php artisan ser

Akses route pada http://127.0.0.1:8000/admin . untuk mengakses open admin panel
Login dengan default akun admin :<br/>
username : admin<br/>
password : admin

---


