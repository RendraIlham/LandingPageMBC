<?php
$log = "Form diterima oleh contact.php\n";

// Cek metode request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $log .= "Metode POST OK\n";

    $Nama = isset($_POST['Nama']) ? htmlspecialchars($_POST['Nama']) : '';
    $Email = isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : '';
    $Pesan = isset($_POST['Pesan']) ? htmlspecialchars($_POST['Pesan']) : '';

    $log .= "Data diterima:\nNama: $Nama\nEmail: $Email\nPesan: $Pesan\n";

    // Validasi
    if (empty($Nama) || empty($Email) || empty($Pesan)) {
        $log .= "❌ Validasi GAGAL: ada field kosong\n";
        file_put_contents("debug.txt", $log, FILE_APPEND);
        echo "❌ Harap isi semua bidang!";
        exit;
    }

    // Coba simpan
    $data = "Nama: $Nama\nEmail: $Email\nPesan: $Pesan\n----\n";
    $file = __DIR__ . "/data_contact.txt";

    $result = file_put_contents($file, $data, FILE_APPEND);
    if ($result !== false) {
        $log .= "✅ Berhasil simpan ke data_contact.txt\n";
        echo "✅ Terima kasih, pesan Anda telah kami terima.";
    } else {
        $log .= "❌ GAGAL simpan file (file_put_contents return false)\n";
        echo "❌ Gagal menyimpan ke file.";
    }
} else {
    $log .= "❌ BUKAN metode POST\n";
    echo "❌ Form tidak dikirim dengan benar.";
}

// Akhir: simpan log
file_put_contents("debug.txt", $log, FILE_APPEND);
?>