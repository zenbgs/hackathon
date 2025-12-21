<div align="center">

# KIM Hackathon East Java 2023

### Village & Madrasah Management System

[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)](https://codeigniter.com)
[![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://mysql.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-4.x-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)

**A comprehensive village/madrasah management system with a powerful admin panel**

</div>

---

## About The Project

A CodeIgniter-based web application for village/madrasah information management. Developed for the **KIM Hackathon East Java 2023** competition. This system provides a complete solution for managing village website content, population data, news, galleries, and various public services.

---

## Key Features

### Public Website
| Feature | Description |
|---------|-------------|
| **Homepage** | Landing page with latest news, gallery, and village information |
| **News** | News portal with categories and pagination |
| **Services** | Information on available public services |
| **Programs** | Showcase of village programs and activities |
| **Profile** | Village profile and organizational structure |
| **Contact** | Contact form and address information |

### Admin Panel
| Module | Function |
|--------|----------|
| **Dashboard** | Statistics and data overview |
| **News** | CRUD articles with rich text editor |
| **Gallery** | Photo and album management |
| **Staff** | Village officials/employee data |
| **Population** | Population statistics data |
| **Services** | Service information management |
| **Programs** | Work program management |
| **SMEs** | Local business directory |
| **Videos** | Activity video library |
| **Ads/Banners** | Promotional banner management |
| **Configuration** | Website settings (logo, contact, social media) |
| **User Management** | Account and access rights management |

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

## Project Structure

```
hackathon/
├── application/
│   ├── config/          # Application configuration
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

## Installation

### Requirements
- PHP 7.4 or higher
- MySQL 8.0 or higher
- Apache with mod_rewrite enabled
- Composer (optional)

### Installation Steps

**1. Clone Repository**
```bash
git clone https://github.com/zenbgs/hackathon.git
cd hackathon
```

**2. Setup Database**
```bash
# Create a new database
mysql -u root -p -e "CREATE DATABASE db_hackathon"

# Import structure and data
mysql -u root -p db_hackathon < db/db_testing.sql
```

**3. Configure Database**

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

**4. Configure Base URL**

Edit file `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/hackathon/';
```

**5. Run Application**
```
http://localhost/hackathon
```

---

## Database Schema

The application uses **24 database tables**:

| Table | Description |
|-------|-------------|
| `user` | User data and authentication |
| `berita` | News articles |
| `kategori` | News categories |
| `galeri` | Gallery photos |
| `pegawai` | Staff/official data |
| `penduduk` | Population data |
| `program` | Work programs |
| `layanan` | Public services |
| `umkm` | SME data |
| `konfigurasi` | Website settings |
| `identitas_desa` | Village identity |
| `single_page` | Dynamic pages |

---

## Project Statistics

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

## License

This project was developed for the **KIM Hackathon East Java 2023** competition.

---

<div align="center">

### Developed by

**Zain Bagus**

[![GitHub](https://img.shields.io/badge/GitHub-zenbgs-181717?style=flat-square&logo=github&logoColor=white)](https://github.com/zenbgs)
[![Portfolio](https://img.shields.io/badge/Portfolio-zenbgs.github.io-0ea5e9?style=flat-square&logo=google-chrome&logoColor=white)](https://zenbgs.github.io)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-zenbgs-0077B5?style=flat-square&logo=linkedin&logoColor=white)](https://linkedin.com/in/zenbgs)

</div>
