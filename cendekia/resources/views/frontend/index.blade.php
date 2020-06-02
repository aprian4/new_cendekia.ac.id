@extends('layouts.master')

@section('content')

    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/bg1x.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h3 class="animated3">
                   <span><strong>Penerimaan Mahasiswa Baru Tahun Ajaran 2020/2021</strong></span>
                  </h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">DAFTAR</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h3 class="animated3">
                  <span><strong>Menghasilkan lulusan yang berkompeten dan profesional</strong></span>
                </h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Lebih Lanjut</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg2.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h3 class="animated3">
                  <span><strong>Fasilitas Kampus Lengkap dan Modern</strong></span>
                </h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Lebih Lanjut</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

  
<br><br>


 

    <!-- Start Testimonials Section -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Start Recent Posts Carousel -->
            <div class="latest-posts">
              <h4 class="classic-title"><span>LAST NEWS</span></h4>
              <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">

                <!-- Posts 1 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 2 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Link Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 3 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 4 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 5 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 6 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

              </div>
            </div>
            
          </div>
          </div>
        </div>
        <br>
    <!-- End Recent Posts Carousel -->

      <br><br>

       <!-- Start Testimonials Section -->

      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <!-- Start Recent Posts Carousel -->
            <div class="latest-posts">
              <h4 class="classic-title"><span>INFO AKADEMIK</span></h4>
              <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">

                <!-- Posts 1 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">28</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 2 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Link Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 3 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 4 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Gallery Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 5 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

                <!-- Posts 6 -->
                <div class="post-row item">
                  <div class="left-meta-post">
                    <div class="post-date"><span class="day">26</span><span class="month">Dec</span><span class="day">20</span></div>
                  </div>
                  <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
                  <div class="post-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <br><a class="read-more" href="#">Read More...</a></p>
                  </div>
                </div>

              </div>
            </div>
            
          </div>
          </div>
        </div>
    <!-- End Recent Posts Carousel -->


      <br><br>

      <div style="background-color: #FF9100; height: 150px;">
         <div class="container">

         <div style="margin-top: 50px">
         <table style="width: 100%">
          <tr>
              <td style="width: 12%"><a class="animated4 slider btndaftar btn-system btn-large btn-min-block" href="#">Klik Disini!</a></td>
              <td><p class="h22">Informasi Penerimaan Mahasiswa Baru Tahun Akademik 2020/2021</p></td>
         </tr>
         </table>
         </div>

        
      </div>
      </div>
      <br><br>

<!-- Start Client/Partner Section -->
    <div class="partner">
      <div class="container">
        <div class="row">

          <!-- Start Big Heading -->
          <div class="big-title text-center">
            <h1>Direktori</h1>
          </div>
          <!-- End Big Heading -->

          <!--Start Clients Carousel-->
          <div class="our-clients">
            <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

              <!-- Client 1 -->
              <div class="client-item item">
                <a href="#"><img src="images/c1.png" alt="" /></a>
              </div>

              <!-- Client 2 -->
              <div class="client-item item">
                <a href="#"><img src="images/c2.png" alt="" /></a>
              </div>

              <!-- Client 3 -->
              <div class="client-item item">
                <a href="#"><img src="images/c3.png" alt="" /></a>
              </div>

              <!-- Client 4 -->
              <div class="client-item item">
                <a href="#"><img src="images/c4.png" alt="" /></a>
              </div>

              <!-- Client 5 -->
              <div class="client-item item">
                <a href="#"><img src="images/c5.png" alt="" /></a>
              </div>

              <!-- Client 6 -->
              <div class="client-item item">
                <a href="#"><img src="images/c6.png" alt="" /></a>
              </div>

              <!-- Client 7 -->
              <div class="client-item item">
                <a href="#"><img src="images/c7.png" alt="" /></a>
              </div>


            </div>
          </div>
          <!-- End Clients Carousel -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Client/Partner Section -->


    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>Galeri Kampus</h1>
      </div>
      <!-- End Big Heading -->

      <!-- Start Recent Projects Carousel -->
      <ul id="portfolio-list" data-animated="fadeIn">
        <li>
          <img src="images/portfolio-1/1.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Kegiatan Studi Industri</span>
            <p class="body animated8">PT. PJB UP Cirata</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/1.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/2.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Jambore Hipmi Perguruan Tinggi Se-ASEAN</span>
            <p class="body">Bandung, Jawa Barat</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/2.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/3.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Workshop Robot Cerdas</span>
            <p class="body">Lab. Pengembangan STT Cendekia</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/3.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/4.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Tim Futsal dan Tim Volly mahasiswa STTC meraih juara umum pada kompetisi</span>
            <p class="body">-Penyerahan piala kepada kampus-</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/4.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/5.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Juara III FILM DOKUMENTER</span>
            <p class="body">Hotel Sol Elite Marbella - Anyer Banten</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/5.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/6.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Tim Futsal STTC Meraih Juara II Kompetisi Futsal Piala Menpora Sumpah Pemuda</span>
            <p class="body">Kementrian Pemuda Dan Olahraga</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/6.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/7.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">MoU Sekolah Tinggi Teknik Cendekia (STTC) dengan Tashkent University</span>
            <p class="body">Tashkent, Uzbekistan</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/7.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/8.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Penandatanganan MoU dengan Samarkand State Institute dan TARCI </span>
            <p class="body">Tashkent, Uzbekistan</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/8.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/9.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Penandatanganan MoU antara STTC, STIK Jakarta, Universitas Gunadarma</span>
            <p class="body">Universitas Gunadarma, Jakarta</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/9.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/10.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Kerjasama Penelitian dengan Dinas Kebudayaan Banten </span>
            <p class="body">Dinas Kebudayaan Banten</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/10.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/11.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Sidang Senat Terbuka dan Wisuda Sarjana</span>
            <p class="body">Auditorium STTC</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/11.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
        <li>
          <img src="images/portfolio-1/12.jpg" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Penyerahan Sumbangan Bansos Bencana Banjir</span>
            <p class="body">Kec. Priuk, Kab. Tangerang</p>
          </div>
          <div class="icon-list">
            <a class="zoom lightbox" href="images/portfolio-1/12.jpg"><i class="fa fa-search-plus"></i></a>
          </div> 
        </li>
      </ul>

      <!-- End Recent Projects Carousel -->


    </div>
    <!-- End Portfolio Section -->   

@endsection