<?php
// Mendefinisikan variabel-variabel untuk menyimpan informasi profil
$nama = "Aprilia Ardianti";  // Nama lengkap
$umur = 16;  // Umur dalam bentuk integer
$sekolah = "SMK Negri 2 Bandung";  // Nama sekolah
$hobby = "Memasak";  // Hobi
$foto = "maudy ayunda.jpg"; // Path atau nama file gambar profil (Pastikan file ini ada di direktori yang sama)
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Singkat</title>
    <style>
        /* CSS untuk mempercantik tampilan */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Jenis font yang digunakan */
            background-color: #93acf0; /* Warna latar belakang baby blue */
            color: #1e2e49; /* Warna teks utama */
            margin: 0; /* Menghapus margin default */
            padding: 0; /* Menghapus padding default */
            display: flex; /* Menggunakan flexbox untuk mengatur tata letak */
            justify-content: center; /* Memusatkan konten secara horizontal */
            align-items: center; /* Memusatkan konten secara vertikal */
            height: 100vh; /* Mengatur tinggi halaman penuh (viewport) */
        }
        .profil-container {
            background-color: #ffffff; /* Latar belakang putih untuk kontainer profil */
            padding: 30px; /* Ruang di dalam kontainer */
            border-radius: 20px; /* Sudut melengkung pada kontainer */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan pada kontainer */
            max-width: 400px; /* Lebar maksimum kontainer */
            width: 100%; /* Lebar kontainer 100% dari kontainer induk */
            text-align: center; /* Mengatur teks agar berada di tengah */
        }
        .profil-container h2 {
            margin-bottom: 20px; /* Ruang di bawah judul */
            color: #3b5b92; /* Warna teks untuk judul */
            font-size: 24px; /* Ukuran font untuk judul */
            border-bottom: 2px solid #007BFF; /* Garis bawah biru pada judul */
            padding-bottom: 10px; /* Ruang di bawah teks judul */
        }
        .profil-container p {
            font-size: 18px; /* Ukuran font untuk paragraf */
            margin: 15px 0; /* Ruang vertikal di atas dan bawah paragraf */
        }
        .profil-container p strong {
            color: #3b5b92; /* Warna teks tebal untuk label */
        }
        .profil-container .profile-picture img {
            width: 150px; /* Lebar gambar profil */
            height: 150px; /* Tinggi gambar profil */
            border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
            object-fit: cover; /* Mengatur agar gambar menutupi area tanpa distorsi */
            margin-bottom: 20px; /* Ruang di bawah gambar */
            border: 4px solid #3b5b92; /* Border biru di sekitar gambar */
        }

        .styled-button {
    background-color: #3b5b92; /* Warna latar belakang biru */
    color: white; /* Warna teks putih */
    padding: 10px 20px; /* Padding di dalam tombol */
    border: none; /* Menghapus border default */
    border-radius: 5px; /* Sudut tombol yang melengkung */
    cursor: pointer; /* Mengubah kursor saat diarahkan ke tombol */
    font-size: 16px; /* Ukuran font pada tombol */
    text-align: center; /* Teks di dalam tombol berada di tengah */
    text-decoration: none; /* Menghilangkan garis bawah pada link */
    display: inline-block; /* Membuat tombol sesuai dengan lebar kontennya */
    margin-top: 20px; /* Jarak di atas tombol */
    transition: background-color 0.3s ease; /* Efek transisi saat warna latar berubah */
}

.styled-button:hover {
    background-color: #2a3d70; /* Warna latar saat tombol dihover */
}

.styled-button a {
    color: white; /* Warna teks link di dalam tombol */
    text-decoration: none; /* Menghilangkan garis bawah pada teks link */
    display: block; /* Membuat link mengisi seluruh tombol */
    height: 100%; /* Memastikan link mengisi ketinggian tombol */
}

    </style>
</head>
<body>

<div class="profil-container">
    <div class="profile-picture">
        <!-- Menampilkan gambar profil -->
        <img src="<?php echo $foto; ?>" alt="Foto Profil">
    </div>
    <h2>Profil Singkat</h2>
    <!-- Menampilkan nama -->
    <p><strong>Nama:</strong> <?php echo $nama; ?></p>
    <!-- Menampilkan umur -->
    <p><strong>Umur:</strong> <?php echo $umur; ?> tahun</p>
    <!-- Menampilkan sekolah -->
    <p><strong>Sekolah:</strong> <?php echo $sekolah; ?></p>
    <!-- Menampilkan hobi -->
    <p><strong>Hobby:</strong> <?php echo $hobby; ?></p>
    <!-- Tombol dengan link -->
    <button class="styled-button">
        <a href="index.php">Home</a>
    </button>

</div>

</body>
</html>