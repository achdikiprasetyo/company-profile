<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PT. Panca Pilar Hutama</title>

   <!-- Tambahkan link Bootstrap CSS di sini -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

   <!-- Tambahkan gaya khusus untuk navbar -->
   <style>
      .navbar-custom {
         background-color: #00A9FF;
      }

      .navbar-brand {
         font-family: 'Poppins', sans-serif;
         font-weight: 600; /* Semi-bold */
         font-size: 15px;
      }

      .navbar-brand img {
         height: 30px; /* Adjust the height based on the aspect ratio */
         width: auto; /* Maintain the aspect ratio */
      }

      .navbar-nav .nav-link {
         font-family: 'Poppins', sans-serif;
         font-weight: 600; /* Semi-bold */
         font-size: 15px;
      }

      /* Tambahkan gaya untuk bagian bawah navbar */
      .bottom-section {
         position: relative;
         background-image: url({{ asset('image/pph.jpg') }});
         background-size: cover;
         background-position: center;
         padding: 250px 0;
         text-align: left;
         color: white;
      }

      .bottom-section::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0.5); /* Ubah nilai alpha untuk kegelapan yang diinginkan */
      }

      .slogan {
         font-size: 32px;
         font-weight: 600;
         font-family: 'Poppins', sans-serif;
      }

      .isi-slogan {
         font-size: 24px;
         font-weight: 600;
         font-family: 'Poppins', sans-serif;
      }

      .btn-custom {
         background-color: #00A9FF;
         color: white;
      }

      /* Tambahkan gaya untuk submenu */
      .dropdown-menu {
         background-color: #00A9FF;
      }

      .dropdown-item {
         color: white;
      }

      .dropdown-item:hover {
         background-color: #007BFF;
      }
   </style>

   <!-- Tambahkan link untuk font Poppins -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap">
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
      <a class="navbar-brand" href="#">
         <img src="{{ asset('image/logo.png') }}" alt="Logo" class="d-inline-block align-top">
         PT. Panca Pilar Hutama
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="..">Home</a>
            </li>
            <li class="nav-item ">
               <a class="nav-link" href="tentang-kami">Tentang Kami</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="artikel">Artikel</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Jasa Kebersihan</a>
                  <a class="dropdown-item" href="#">Jasa Keamanan</a>
                  <a class="dropdown-item" href="#">Jasa Back Office</a>
                  <a class="dropdown-item" href="#">Jasa Pelatihan</a>
                  <a class="dropdown-item" href="#">Jasa Sumber Daya Manusia</a>
                  <a class="dropdown-item" href="#">Jasa Engineer</a>
                  <a class="dropdown-item" href="#">Jasa Outbond</a>
                  <a class="dropdown-item" href="#">Jasa Travel</a>
                  <a class="dropdown-item" href="#">Jasa In House Training</a>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="kontak">Kontak</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="dokumentasi">Documentation</a>
            </li>
         </ul>
      </div>
   </nav>

   <!-- Bagian bawah navbar -->
   
   <!-- Isi konten halaman di sini -->

   <!-- Tambahkan link Bootstrap JavaScript di sini -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

</body>
</html>
