<div align="center">

# KIM Hackathon East Java 2023

### Village & Madrasah Management System

[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)](https://codeigniter.com)
[![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)

**Sistem manajemen desa/madrasah lengkap dengan panel admin yang powerful**

</div>

---

## Tentang Project

Aplikasi web berbasis CodeIgniter untuk manajemen informasi desa/madrasah. Dikembangkan untuk kompetisi **KIM Hackathon East Java 2023**. Sistem ini menyediakan solusi lengkap untuk pengelolaan konten website desa, data kependudukan, berita, galeri, dan berbagai layanan publik.

---

## Fitur Utama

### Public Website
| Fitur | Deskripsi |
|-------|-----------|
| **Beranda** | Landing page dengan berita terbaru, galeri, dan info desa |
| **Berita** | Portal berita dengan kategori dan pagination |
| **Layanan** | Informasi layanan publik yang tersedia |
| **Program** | Showcase program dan kegiatan desa |
| **Profil** | Profil desa dan struktur organisasi |
| **Kontak** | Form kontak dan informasi alamat |

### Admin Panel
| Modul | Fungsi |
|-------|--------|
| **Dashboard** | Statistik dan overview data |
| **Berita** | CRUD artikel dengan rich text editor |
| **Galeri** | Manajemen foto dan album |
| **Pegawai** | Data perangkat desa/karyawan |
| **Kependudukan** | Data statistik penduduk |
| **Layanan** | Pengelolaan info layanan |
| **Program** | Manajemen program kerja |
| **UMKM** | Direktori usaha lokal |
| **Video** | Library video kegiatan |
| **Iklan/Banner** | Manajemen banner promosi |
| **Konfigurasi** | Pengaturan website (logo, kontak, sosmed) |
| **User Management** | Kelola akun dan hak akses |

---

## Tech Stack

### Backend
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=flat-square&logo=codeigniter&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql&logoColor=white)

### Frontend
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-7952B3?style=flat-square&logo=bootstrap&logoColor=white)
![jQuery](https://img.shields.io/badge/jQuery-3.x-0769AD?style=flat-square&logo=jquery&logoColor=white)
![Leaflet](https://img.shields.io/badge/Leaflet-Maps-199900?style=flat-square&logo=leaflet&logoColor=white)

### Admin UI
![Soft UI](https://img.shields.io/badge/Soft_UI-Dashboard-667eea?style=flat-square)
![CKEditor](https://img.shields.io/badge/CKEditor-4.x-0287D0?style=flat-square)
![TinyMCE](https://img.shields.io/badge/TinyMCE-Editor-22A7F0?style=flat-square)

### Libraries
![AOS](https://img.shields.io/badge/AOS-Animate-68BC71?style=flat-square)
![Swiper](https://img.shields.io/badge/Swiper-Slider-6332F6?style=flat-square)
![GLightbox](https://img.shields.io/badge/GLightbox-Gallery-FF6B6B?style=flat-square)
![Remixicon](https://img.shields.io/badge/Remixicon-Icons-2D8CF0?style=flat-square)

---

## Struktur Project

```
hackathon/
├── application/
│   ├── config/          # Konfigurasi aplikasi
│   ├── controllers/     # Controllers (32 files)
│   │   ├── admin/       # Admin panel controllers
│   │   └── *.php        # Public controllers
│   ├── models/          # Database models (19 files)
│   ├── views/           # View templates (125+ files)
│   │   ├── admin/       # Admin panel views
│   │   └── layout/      # Frontend layouts
│   └── libraries/       # Custom libraries
├── assets/              # Admin assets
│   ├── css/             # Stylesheets
│   ├── js/              # JavaScript
│   ├── ckeditor/        # Rich text editor
│   ├── leaflet/         # Map library
│   └── upload/          # User uploads
├── assets_client/       # Frontend assets
│   ├── css/             # Public stylesheets
│   ├── js/              # Public scripts
│   └── images/          # Public images
├── db/
│   └── db_testing.sql   # Database dump
└── system/              # CodeIgniter core
```

---

## Instalasi

### Requirements
- PHP 7.4 atau lebih tinggi
- MySQL 8.0 atau lebih tinggi
- Apache dengan mod_rewrite enabled
- Composer (optional)

### Langkah Instalasi

**1. Clone Repository**
```bash
git clone https://github.com/zenbgs/hackathon.git
cd hackathon
```

**2. Setup Database**
```bash
# Buat database baru
mysql -u root -p -e "CREATE DATABASE db_hackathon"

# Import struktur dan data
mysql -u root -p db_hackathon < db/db_testing.sql
```

**3. Konfigurasi Database**

Edit file `application/config/database.php`:
```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => 'your_password',
    'database' => 'db_hackathon',
    ...
);
```

**4. Konfigurasi Base URL**

Edit file `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/hackathon/';
```

**5. Jalankan Aplikasi**
```
http://localhost/hackathon
```

---

## Database Schema

Aplikasi menggunakan **24 tabel** database:

| Tabel | Deskripsi |
|-------|-----------|
| `user` | Data pengguna dan autentikasi |
| `berita` | Artikel berita |
| `kategori` | Kategori berita |
| `galeri` | Foto galeri |
| `pegawai` | Data pegawai/perangkat |
| `penduduk` | Data kependudukan |
| `program` | Program kerja |
| `layanan` | Layanan publik |
| `umkm` | Data UMKM |
| `konfigurasi` | Pengaturan website |
| `identitas_desa` | Identitas desa |
| `single_page` | Halaman dinamis |

---

## Statistik Project

<div align="center">

| Metric | Count |
|--------|-------|
| **Controllers** | 32 files |
| **Models** | 19 files |
| **Views** | 125+ files |
| **Database Tables** | 24 tables |
| **Admin Modules** | 21 modules |

</div>

---

## Lisensi

Project ini dikembangkan untuk keperluan kompetisi **KIM Hackathon East Java 2023**.

---

<div align="center">

### Developed by

**Zain Bagus**

[![GitHub](https://img.shields.io/badge/GitHub-zenbgs-181717?style=flat-square&logo=github&logoColor=white)](https://github.com/zenbgs)
[![Portfolio](https://img.shields.io/badge/Portfolio-zenbgs.github.io-0ea5e9?style=flat-square&logo=google-chrome&logoColor=white)](https://zenbgs.github.io)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-zenbgs-0077B5?style=flat-square&logo=linkedin&logoColor=white)](https://linkedin.com/in/zenbgs)

</div>
