<style>
    h2{
        text-align: center;
    }
</style>

  
<body>
    <header>
        @include('layouts.navbar')
        <div class="bottom-section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p class="slogan">PT. PANCA PILAR HUTAMA</p>
                     <p class="isi-slogan"> Penyedia dan Pengelola Jasa Tenaga Kerja Professional</p>
                     <a href="#" class="btn btn-custom">Service</a>
                  </div>
               </div>
            </div>
         </div>
      
        <main role="main">
            <br>
            <h2>Layanan Kami</h2>
            <br>

            <hr class="hr hr-blurry" />

            <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                <div class="col-md-4">
                    <div class="service-item d-flex flex-column h-100">
                        <h2>Jasa Engineer</h2>
                        <img src="{{ asset('image/enginer.jpg') }}" alt="Jasa Kebersihan" class="img-thumbnail">
                        <p class="flex-grow-1">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-custom" href="#" role="button">Baca Selengkapnya &raquo;</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item d-flex flex-column h-100">
                        <h2>Jasa Kebersihan</h2>
                        <img src="{{ asset('image/kebersihan.jpg') }}" alt="Jasa Kebersihan" class="img-thumbnail">
                        <p class="flex-grow-1">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-custom" href="#" role="button">Baca Selengkapnya &raquo;</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item d-flex flex-column h-100">
                        <h2>Jasa Keamanan</h2>
                        <img src="{{ asset('image/keamanan.jpg') }}" alt="Jasa Kebersihan" class="img-thumbnail">
                        <p class="flex-grow-1">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-custom" href="#" role="button">Baca Selengkapnya &raquo;</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item d-flex flex-column h-100">
                        <h2>Sumber Daya Manusia</h2>
                        <img src="{{ asset('image/keamanan.jpg') }}" alt="Jasa Kebersihan" class="img-thumbnail">
                        <p class="flex-grow-1">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-custom" href="#" role="button">Baca Selengkapnya &raquo;</a></p>
                    </div>
                </div>
                  <div class="col-md-4">
                    <div class="service-item d-flex flex-column h-100">
                        <h2>Jasa Back Office</h2>
                        <img src="{{ asset('image/backoffice.jpg') }}" alt="Jasa Kebersihan" class="img-thumbnail">
                        <p class="flex-grow-1">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-custom" href="#" role="button">Baca Selengkapnya &raquo;</a></p>
                    </div>
                </div>
                  <div class="col-md-4">
                    <div class="service-item d-flex flex-column h-100">
                        <h2>Jasa Pelatihan</h2>
                        <img src="{{ asset('image/pelatihan.jpg') }}" alt="Jasa Kebersihan" class="img-thumbnail">
                        <p class="flex-grow-1">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn btn-custom" href="artikel" role="button">Baca Selengkapnya &raquo;</a></p>
                    </div>
                </div>
              </div>
      
              <hr>
              
            </div> <!-- /container -->
      
          </main>
    </header>
   
    
</body>
@extends('layouts.whatsapp')
@include('layouts.faq')
@include('layouts.footer')

