
    A[Pengguna/Browser] -- Permintaan Halaman (GET /) --> B(Netlify Hosting)
    B -- Kirim index.html, style.css, script.js, Gambar --> A
    
    subgraph Frontend (Browser Pengguna)
        C[index.html]
        D[style.css]
        E[script.js]
        F[Google Maps Iframe]
    end

    A -- Submit Form Kontak (POST /) --> G(Netlify Forms Service)
    G -- Simpan Data Form --> H(Netlify Forms Data Storage)
    G -- Kirim Notifikasi/Pesan Balik --> A
    
    subgraph Local Development Backend (XAMPP/PHP)
        I[contact.php]
        J[data_contact.txt]
        K[debug.txt]
    end

    A_dev[Pengembang Lokal] -- Submit Form (POST /contact.php) --> I
    I -- Simpan Data --> J
    I -- Catat Log --> K
    I -- Kirim Status/Pesan Balik --> A_dev
