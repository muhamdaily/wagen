<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nomor dan pesan dari formulir
    $phone = $_POST["phone"];
    $message = urlencode($_POST["message"]); // Encode pesan untuk URL

    // Ganti angka 0 di awal dengan 62
    $phone = preg_replace('/^0/', '62', $phone);

    // Buat tautan WhatsApp
    $whatsappLink = "https://wa.me/$phone?text=$message";

    // Arahkan ke tautan WhatsApp
    header("Location: $whatsappLink");
    exit();
} else {
    // Jangan izinkan akses langsung ke generate.php
    header("Location: index.html");
    exit();
}
