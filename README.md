# MBC Laboratory Website
Website resmi MBC Laboratory — pusat riset dan pengembangan dalam bidang Cybersecurity, Big Data, Game Technology, dan Geographic Information Systems (GIS).

## Struktur Proyek
LandingPageMBC/
├── index.html        # Halaman utama website
├── style.css         # File CSS untuk styling dan responsivitas websir\te
├── script.js         # File JavaScript untuk interaktivitas (menu mobile, form handling, dan notifikasi)
├── contact.php       # Skrip PHP untuk memproses pengiriman form kontak
├── data_contact.txt  # File teks untuk menyimpan data form yang masuk (dibuat otomatis oleh contact.php)
├── mbclab.png        # Logo MBC Laboratory
├── Gedung-Bangkit.jpg # Gambar background halaman pertama
├── README.md         # Dokumentasi proyek

## Instalasi Lokal dan Deployment
### Instalasi Lokal
Tidak diisi karena memiliki kendala, sehingga backend tidak dapat diakses

### Deployment (Menggunakan Netlify)
1.  **Pastikan Kode di GitHub**
    Pastikan semua kode/file website Anda sudah di-push ke repository GitHub Anda.
    
2.  **Login ke Netlify:**
    Buka [https://www.netlify.com/] dan login dengan akun GitHub Anda.
    
3.  **Buat Situs Baru dari Git:**
    * Di dashboard Netlify, klik "Add new project".
    * Pilih "Import an existing project"
    * Pilih GitHub sebagai penyedia Git Anda dan berikan otorisasi jika diminta.

4.  **Pilih Repository:**
    Pilih repository website Anda dari daftar yang tersedia.

5.  **Konfigurasi Build (Build Settings):**
    Isi seperti ini:
      * **Branch to deploy:** `main`
      * **Base directory:** Kosongkan (karena `index.html` ada di root)
      * **Build command:** Kosongkan (ini adalah static site)
      * **Publish directory:** Kosongkan

6.  **Deploy:**
      * Klik "Deploy nama-repository". Netlify akan secara otomatis mengambil kode Anda dari GitHub dan mendeploy-nya.
      * Setelah selesai, Anda akan mendapatkan URL unik untuk website Anda.

7.  **Kustom Nama Website**
     * Setelah di deploy, klik "Project Configuration".
     * Klik "Change Project Name". Di sini, Anda dapat merubah nama website sesuai keinginan.

### Konfigurasi Backend (untuk Form Kontak)
Tidak diisi karena backend tidak dapat diakses.

### Konfigurasi SSL (Secure Sockets Layer)
Netlify secara otomatis menyediakan sertifikat SSL/TLS gratis untuk semua situs yang di-deploy. Sehingga, saat url di copy, url udah menjadi "https".
