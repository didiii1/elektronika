<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    // Sesuaikan dengan pengaturan email Anda
    $tujuan_email = "tujuan@example.com";
    $subjek = "Pesan dari Formulir Kontak";

    // Membuat header email
    $header = "From: $email\r\n";
    $header .= "Reply-To: $email\r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Mengirim email
    $pesan_email = "Nama: $nama\n";
    $pesan_email .= "Email: $email\n\n";
    $pesan_email .= "Pesan:\n$pesan";

    // Mengirim email menggunakan mail() function
    mail($tujuan_email, $subjek, $pesan_email, $header);

    // Redirect kembali ke halaman utama atau halaman sukses
    header("Location: index.php?status=sukses");
    exit;
} else {
    // Jika bukan metode POST, redirect ke halaman utama
    header("Location: index.php");
    exit;
}
?>
