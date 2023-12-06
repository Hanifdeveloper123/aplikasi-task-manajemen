Selamat datang di dokumentasi aplikasi menajemen tugas ini, disini berisi tentang dokumentasi api dan cara menjaankan aplikasi ini


**REST API for Task Management**
API ini meliputi autentikasi feature dan CRUD untuk task management

**APi Authentication**
API ini akan meliputi endpoint untuk authentikasi penggunakan menggunakan JSON Web Token (JWT).
Endpoint: /api/auth/login
Method: POST
Deskripsi: Autentikasi user dan generate JWT Token untuk bisa akses endpoint lain
Endpoint: /api/auth/logout
Method: POST
Deskripsi: Invalidate token yang dimiliki user sehingga usert terlogout.

**APi Task Management (CRUD)**
API ini akan menyediakan endpoint untuk melakukan CRUD untuk Task
Endpoint: /api/tasks
Method: GET
Deskripsi: Mendapatkan list task yang dibuat oleh user yang login
Endpoint: /api/tasks/{id}
Method: GET
Deskripsi: Mendapatkan detail task berdasarkan id
Endpoint: /api/tasks
Method: POST
Deskripsi: Membuat task baru dan dapat diassignkan ke user lain
Endpoint: /api/tasks/{id}
Method: PUT
Deskripsi: Update task berdasarkan id
Endpoint: /api/tasks/{id}
Method: DELETE
Deskripsi: Hapus task yang sudah pernah dibuat

 Development Stack
Aplikasi ini di develop menggunakan teknologi seperti:
Laravel (v9)
Inertia.js
Vue.js
Tailwind CSS

**CARA MENJALANKAN APLIKASI INI**
Kami sudah menyediakan repository yang bisa digunakan:
1. Clone repository nya dari sini
 //github.com/Hanifdeveloper123/aplikasi-task-manajemen/
2. Copy **`.env.example`** ke **`.env`** dan setup konfigurasi yang di perlukan (seperti database)
3. Jalankan perintah dibawah ini, lalu boilerplate sudah siap digunakan:
    - **`composer install`**
    - **`yarn`**
    - **`php artisan migrate`**
    - **`php artisan db:seed`**
    - **`yarn dev`**
   Tinggal jaankan aplikasi tersebut

**Aplikasi Ini Dibuat pada Rabu 15 November 2023 dan selesai pada Selasa 5 Desember 2023**
