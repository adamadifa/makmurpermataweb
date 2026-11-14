# Pacific Landing Page & Form Komplain

Project landing page bertema fast-food visual (gaya promo KFC) yang terintegrasi dengan **PacificV4 API** secara server-to-server (rahasia & aman tanpa mengekspos endpoint internal ke publik).

---

## 🚀 Tech Stack
* **Framework**: Laravel 13 (PHP 8.2+)
* **Styling**: Tailwind CSS v4
* **Interaktivitas UI**: Alpine.js
* **Slider/Carousel**: Swiper.js
* **Komunikasi API**: Laravel HTTP Client (`Http::withToken`) via `PacificV4Service`

---

## 📁 Struktur Penting
* [routes/web.php](file:///Users/mac/Adam%20Adifa/Pacific/landingpage/routes/web.php) : Routing landing page (`/`) dan form komplain (`/komplain`).
* [app/Services/PacificV4Service.php](file:///Users/mac/Adam%20Adifa/Pacific/landingpage/app/Services/PacificV4Service.php) : Handler terpusat untuk komunikasi API ke PacificV4.
* [app/Http/Controllers/LandingPageController.php](file:///Users/mac/Adam%20Adifa/Pacific/landingpage/app/Http/Controllers/LandingPageController.php) : Controller halaman promosi utama.
* [app/Http/Controllers/KomplainController.php](file:///Users/mac/Adam%20Adifa/Pacific/landingpage/app/Http/Controllers/KomplainController.php) : Controller penanganan form komplain & pengiriman ke API.
* [resources/views/landing.blade.php](file:///Users/mac/Adam%20Adifa/Pacific/landingpage/resources/views/landing.blade.php) : Desain landing page ala KFC (Hero banner, Menu slider, Promo cards).
* [resources/views/komplain.blade.php](file:///Users/mac/Adam%20Adifa/Pacific/landingpage/resources/views/komplain.blade.php) : Formulir keluhan pelanggan lengkap dengan upload lampiran bukti.

---

## ⚙️ Menjalankan di Lokal (Development)

1. **Jalankan Web Server**:
   ```bash
   php artisan serve
   ```
   Akses di browser: `http://localhost:8000`

2. **Jalankan Vite (jika mengubah style/js)**:
   ```bash
   npm run dev
   ```
   Atau untuk build file produksi:
   ```bash
   npm run build
   ```

3. **Konfigurasi `.env`**:
   Sesuaikan URL dan Token API PacificV4 Anda:
   ```env
   PACIFIC_API_URL=https://alamat-pacificv4-anda.com/api
   PACIFIC_API_TOKEN=rahasia_token_anda_disini
   ```

---

## 🌐 Panduan Deploy ke Shared Hosting (cPanel)

Agar project Laravel ini berjalan aman dan ringan di shared hosting:

1. **Upload File ke cPanel**:
   * Buat folder di luar `public_html`, misal: `/home/username/landingpage_core`.
   * Upload seluruh folder project (kecuali folder `public_html` atau `node_modules`).
2. **Pindahkan Folder Public**:
   * Pindahkan seluruh isi folder `public/` (termasuk folder `build`, file `index.php`, `.htaccess`) ke dalam `public_html` (atau folder subdomain Anda).
3. **Sesuaikan `index.php` di `public_html`**:
   Ubah baris path autoload & bootstrap di file `index.php` agar mengarah ke folder core:
   ```php
   require __DIR__.'/../landingpage_core/vendor/autoload.php';
   $app = require_once __DIR__.'/../landingpage_core/bootstrap/app.php';
   ```
4. **Keamanan API PacificV4**:
   * URL & Token PacificV4 tersimpan di file `.env` di dalam `landingpage_core` yang **tidak bisa diakses dari web browser**.
   * Di server PacificV4, whitelist IP server Shared Hosting ini agar hanya menerima request dari server ini.
# makmurpermataweb
