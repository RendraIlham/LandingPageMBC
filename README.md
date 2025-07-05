# MBC Laboratory Website
Website resmi MBC Laboratory — pusat riset dan pengembangan dalam bidang Cybersecurity, Big Data, Game Technology, dan Geographic Information Systems (GIS).

## Struktur Proyek
LandingPageMBC/

├── Gedung-Bangkit.jpg # Gambar background halaman pertama

├── README.md         # Dokumentasi proyek

├── contact.php       # Skrip PHP untuk memproses pengiriman form kontak

├── index.html        # Halaman utama website

├── mbclab.png        # Logo MBC Laboratory

├── script.js         # File JavaScript untuk interaktivitas (menu mobile, form handling, dan notifikasi)

├── style.css         # File CSS untuk styling dan responsivitas website

## Instalasi Lokal dan Deployment
### Instalasi Lokal (untuk Pengembangan)

Untuk menjalankan website ini di lingkungan pengembangan lokal Anda, Anda memerlukan server web yang mendukung PHP (seperti XAMPP, WAMP, MAMP, atau Laragon).

1.  **Clone Repository**

    Buka terminal atau Git Bash, lalu clone repository ini ke komputer Anda:

    ```bash
    git clone https://github.com/RendraIlham/LandingPageMBC.git
    ```
3.  **Pindahkan ke Direktori Server Web**

    Pindahkan folder proyek yang telah di-clone (`LandingPageMBC`) ke direktori `htdocs` (untuk XAMPP/Apache), `www` (untuk WAMP), atau direktori server web lokal Anda lainnya.
    Contoh (untuk XAMPP di Windows):

    ```bash
    mv LandingPageMBC C:\xampp\htdocs\
    ```
5.  **Mulai Server Web:**
    Pastikan server Apache di XAMPP Control Panel Anda sudah berjalan.
6.  **Akses Website:**
    Buka browser web Anda dan akses website melalui URL:
    `http://localhost/LandingPageMBC/`
7.  **Perizinan File (Jika `data_contact.txt` tidak dibuat)**

    Jika Anda mengalami masalah saat mengirim formulir dan file `data_contact.txt` tidak terbentuk, kemungkinan besar ini adalah masalah izin penulisan (file permissions) pada folder proyek atau file `data_contact.txt` itu sendiri. Pastikan server web Anda memiliki izin untuk menulis ke direktori proyek.
    * **Untuk Windows:** Klik kanan pada folder proyek > Properties > Security tab. Berikan izin "Modify" dan "Write" kepada user yang menjalankan Apache (misalnya "Users" atau "IUSR").
    * **Untuk Linux/macOS (via Terminal):**
        ```bash
        sudo chmod -R 755 /path/to/your/project/LandingPageMBC/
        sudo chmod 664 /path/to/your/project/LandingPageMBC/data_contact.txt # Jika sudah ada
        ```

### Deployment (Menggunakan Netlify)
1.  **Pastikan Kode di GitHub**
    Pastikan semua kode/file website Anda sudah di-push ke repository GitHub Anda.
    
2.  **Login ke Netlify:**
    Buka https://www.netlify.com/ dan login dengan akun GitHub Anda.
    
3.  **Tambah Proyek Baru**
    * Di dashboard Netlify, klik "Add new project".
    * Pilih "Import an existing project"
    * Pilih GitHub sebagai penyedia Git Anda dan berikan otorisasi jika diminta.

4.  **Pilih Repository:**
    Pilih repository website Anda dari daftar yang tersedia.

5.  **Konfigurasi Build (Build Settings)**

    Isi seperti ini:
      * **Branch to deploy:** `main`
      * **Base directory:** Kosongkan 
      * **Build command:** Kosongkan 
      * **Publish directory:** Kosongkan

7.  **Deploy**
      * Klik "Deploy nama-repository". Netlify akan secara otomatis mengambil kode Anda dari GitHub dan mendeploy-nya.
      * Setelah selesai, Anda akan mendapatkan URL unik untuk website Anda.

8.  **Kustom Nama Website**
     * Setelah di deploy, klik "Project Configuration".
     * Klik "Change Project Name". Di sini, Anda dapat merubah nama website sesuai keinginan.

### Konfigurasi Backend (untuk Form Kontak)

Untuk website yang di-deploy di Netlify, skrip PHP (`contact.php`) tidak akan dieksekusi karena Netlify adalah hosting untuk static site. Namun, fungsionalitas form kontak dapat diimplementasikan menggunakan fitur **Netlify Forms**.

1.  **Modifikasi `index.html`**

    Tambahkan atribut `data-netlify="true"` ke tag `<form>` di `index.html` Anda. Pastikan form tersebut berisi semua input yang diperlukan:
    ```html
    <form action="contact.php" method="POST" data-netlify="true">
        <input type="text" name="Nama" placeholder="Nama Anda">
        <input type="email" name="Email" placeholder="Email Anda">
        <textarea name="Pesan" placeholder="Tulis kritik/saran Anda"></textarea>
        <button type="submit">Kirim</button>
        </form>
    ```

3.  **Deploy Ulang:**
    Push perubahan ini ke GitHub Anda, dan Netlify akan otomatis mendeploy ulang situs Anda.

4.  **Verifikasi:**
    Setelah deploy, kirim satu kali formulir (Anda bisa mengisi data dummy) dari website yang sudah di-deploy. Data yang dikirim akan muncul di bagian "Forms" di dashboard Netlify Anda.

### Konfigurasi SSL (Secure Sockets Layer)
Netlify secara otomatis menyediakan sertifikat SSL/TLS gratis untuk semua situs yang di-deploy. Sehingga, saat url di copy, URL sudah menjadi "https".
