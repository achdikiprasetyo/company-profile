<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>About Us</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }


    .container {
      max-width: 800px;
      margin: 0 auto;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    ul li {
      margin-bottom: 15px;
    }

    .welcome-section {
      position: relative;
      text-align: center;
      color: #fff;
    }

    .welcome-section img {
      width: 100%;
      height: auto;
      opacity: 0.5; /* Opacity untuk menyesuaikan foto dengan teks */
    }

    .welcome-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .visual-elements {
      padding: 40px 0;
      text-align: center;
    }

    .visual-elements img {
      max-width: 100%;
      height: auto;
      border-radius: 8px; /* Contoh styling untuk gambar */
      animation: fadeIn 1s ease-out; /* Contoh animasi fadeIn */
    }

    .about-us img {
      max-width: 90%;
      height: auto;
      border-radius: 8px; /* Contoh styling untuk gambar */
      margin-bottom: 20px; /* Spasi antara gambar dan teks */
      text-align: center;
    }

    .organizational-structure img {
      max-width: 100%;
      height: auto;
      border-radius: 8px; /* Contoh styling untuk gambar */
      animation: fadeIn 1s ease-out;asi antara gambar dan teks */
    }

    .page-header {
      background-image: url("image/background.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      border: 0 none;
      margin: 0 auto;
      padding: 0;
      position: relative;
    }

    .page-header_wrap {
      padding: 60px 0;
      position: relative;	
      text-align: center;
    }

    .page-heading {
      z-index: 1;
      position: relative;
    }

    .page-heading h2, .page-heading h1 {
      font-size: 40px;
      color: #ffffff;
      margin: 0 auto;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }

    /* Tombol WhatsApp */
    #whatsapp-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
      cursor: pointer;
      z-index: 999;
    }

    #whatsapp-button img {
      width: 60px; /* Atur lebar ikon sesuai keinginan */
      height: auto;
    }

    /* Animasi WhatsApp */
    #whatsapp-button:hover {
      animation: bounce 0.5s ease infinite;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
      }
      40% {
        transform: translateY(-10px);
      }
      60% {
        transform: translateY(-5px);
      }
    }

    /* Pop-up WhatsApp */
    #whatsapp-popup {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 300px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      z-index: 998;
    }

    .popup-content {
      padding: 15px;
    }

    .close-popup {
      float: right;
      cursor: pointer;
    }
  </style>
</head>
<body>

  @include('layouts.navbar')

  </section>
  <br>
  <section class="about-us">
    <div class="container">
      <h2>Tentang Kami</h2>
      <div class="row">
        <div class="col-md-6">
          <img src="image/logo.png" alt="Foto Direktur Utama" class="img-fluid rounded mb-4">
        </div>
        <br>
        <div class="col-md-6">
          <br>
          <p>
            <strong>PT. Panca Pilar Hutama</strong> adalah perusahaan yang bergerak di bidang Penyedia Jasa Keamanan, Penyedia Jasa Tenaga Kebersihan, Penyedia Jasa Tenaga Engineering, Penyedia Jasa Tenaga Produksi, Pelatihan Tenaga Keamanan dan Pengelola Tenaga Kerja di berbagai bidang.
          </p>
          <p>
            <strong>PT. Panca Pilar Hutama</strong> memiliki legalitas resmi dan telah diakui oleh instansi terkait, berkantor pusat di Kota Sidoarjo. Kami siap memenuhi kebutuhan tenaga kerja yang profesional dan berpengalaman. Kami selalu menjalin hubungan kerja jangka panjang dengan berbagai institusi dengan tujuan menjadi partner yang terpercaya dan saling menguntungkan.
          </p>
          <p>
            <strong>PT. Panca Pilar Hutama</strong> senantiasa mendukung dan memberikan pelayanan terbaik untuk semua pelanggan serta memberikan komitmen yang tinggi agar kepuasan dan keberhasilan bisnis mitra dapat tercapai.
          </p>
        </div>
      </div>
    </div>
  </section>
  

  <section class="our-values">
    <div class="container">
      <h2>Our Values</h2>
      <ul>
        <li><strong>Innovation:</strong> We are always seeking new ways to add value to our customers. Innovation is the key to staying ahead in this industry.</li>
        <li><strong>Quality:</strong> We are committed to delivering the best products/services with the highest quality standards. Customer trust is our greatest asset.</li>
        <li><strong>Customer Service:</strong> Our team is ready to assist you at any time. We understand that customers are our top priority, and we strive to provide the best service.</li>
      </ul>
    </div>
  </section>

  <section class="visual-elements">
    <div class="container">
      <h2>Struktur Organisasi</h2>
      <img src="image/struktur-organisasi.png" alt="Struktur Organisasi">
      <!-- Tambahkan teks atau deskripsi struktur organisasi di sini jika diperlukan -->
    </div>
  </section>

  <section class="visi-misi">
    <div class="container">
      <h2>Visi Misi</h2>
      <!-- Tambahkan teks visi dan misi di sini -->
    </div>
  </section>

  <section class="visual-elements">
    <div class="container">
      <img src="image/background.jpg" alt="Cool Image">
      <!-- Tambahkan elemen visual lainnya di sini -->
    </div>
  </section>
  <!-- Tombol WhatsApp -->
  <div id="whatsapp-button">
    <img src="image/whatsapp.png" alt="WhatsApp Icon">
  </div>

  <!-- Pop-up WhatsApp -->
  <div id="whatsapp-popup">
    <div class="popup-content">
      <span class="close-popup">&times;</span>
      <p>Rekrutmen PPH</p>
      <a href="https://wa.me/62792388238" target="_blank">Hubungi kami di WhatsApp</a>
    </div>
  </div>
  @include('layouts.faq')
  @include('layouts.footer')

  <script src="image/script.js"></script>
</body>
</html>
