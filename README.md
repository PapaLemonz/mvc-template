# Projek PHP MVC Ringkas (Tanpa Framework)

Projek ini adalah contoh **struktur MVC (Model-View-Controller)** menggunakan PHP biasa tanpa framework.  

Tujuannya adalah untuk memahami konsep asas MVC, routing, penggunaan namespace, dan autoloading.

---

## 📁 Struktur Projek
mvc/
│
├── index.php
├── .htaccess
│
└── app/
├── Core/
│ └── Router.php
│
├── Controllers/
│ └── PageController.php
│
├── Models/
│ └── PageModel.php
│
└── Views/
├── home.php
└── about.php

---

## 🚀 Ciri-ciri Projek

- URL bersih (tanpa `index.php?page=...`)  
- Router custom  
- Sokongan **namespace**  
- Autoload class automatik (PSR-4 style simple)  
- Struktur MVC mudah difahami  
- Sesuai untuk pemula belajar PHP OOP

---

## ⚙️ Keperluan

- PHP 8+  
- Apache (XAMPP disyorkan)  
- `mod_rewrite` diaktifkan

---

## 🔧 Cara Pasang (Menggunakan XAMPP)

1. Clone atau muat turun projek.  
2. Letakkan projek dalam folder:
C:\xampp\htdocs\
3. Pastikan Apache berjalan.  
4. Aktifkan `mod_rewrite` dalam fail:
C:\xampp\apache\conf\httpd.conf
5. Pastikan:
6. Restart Apache.
---

## 🌐 Akses Projek

Buka browser:
http://localhost/mvc/
Routes tersedia:
/home
/about

---

## 🧠 Cara MVC Berfungsi Dalam Projek Ini

1. Semua request dihantar ke `index.php` (front controller)  
2. `.htaccess` redirect URL bersih ke `index.php`  
3. Router menentukan controller mana yang dipanggil  
4. Controller memproses request  
5. Model memberikan data  
6. View memaparkan hasil ke browser

---

## 📌 Contoh Aliran

Contoh bila user buka:
http://localhost/mvc/home


Aliran berlaku:

- Router panggil `PageController->home()`  
- Controller buat object `PageModel`  
- Model pulangkan data  
- View `home.php` dipaparkan

---

## 📖 Tujuan Pembelajaran

Projek ini dibuat untuk:

- Faham konsep MVC dari asas  
- Belajar bagaimana routing berfungsi di belakang tabir  
- Faham penggunaan namespace dalam PHP  
- Sedia untuk belajar framework seperti Laravel

---

## 📌 Penambahbaikan Masa Depan

- Sambungkan dengan database menggunakan PDO  
- Routing dinamik dengan parameter  
- Tambah controller 404 khas  
- Tambah routing gaya REST  
- Sistem authentication

---

## 👨‍💻 Penulis

Muhammad Syahid  
Graduan Biologi | Belajar Backend Development & AI

---

## 📜 Lesen

Projek ini adalah open-source dan boleh digunakan untuk tujuan pembelajaran.