 <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Islamic Village - Tangerang</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@cendekia.ac.id</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> 021-5463569</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.html">
              <img alt="" src="images/header-sttc.png">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
            <a class="active" href="{{ URL::to('/' ) }}">Beranda</a>
          </li>
              <li>
                <a href="#">Tentang Kami</a>
                <ul class="dropdown">
                  <li><a href="{{ URL::to('/profil' ) }}">Profil</a>
                  </li>
                  <li><a href="{{ URL::to('/visimisi' ) }}">Visi & Misi</a>
                  </li>
                  <li><a href="{{ URL::to('/sejarah' ) }}">Sejarah</a>
                  </li>
                  <li><a href="{{ URL::to('/struktur' ) }}">Struktur Organisasi</a>
                  </li>
                  <li><a href="{{ URL::to('/fasilitas' ) }}">Fasilitas Kampus</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Program Studi</a>
                <ul class="dropdown">
                  <li><a href="{{ URL::to('/teknikinformatika' ) }}">Teknik Informatika</a>
                  </li>
                  <li><a href="{{ URL::to('/teknikelektro' ) }}">Teknik Elektro</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Direktori</a>
                <ul class="dropdown">
                  <li><a href="{{ URL::to('/lokerstaff' ) }}" target="_blank">Loker Staff</a>
                  </li>
                  <li><a href="{{ URL::to('/lokermahasiswa' ) }}" target="_blank">Loker Mahasiswa</a>
                  </li>
                  <li><a href="{{ URL::to('/e-learning' ) }}" target="_blank">E-Learning</a>
                  </li>
                  <li><a href="{{ URL::to('/e-journal' ) }}" target="_blank">E-Journal</a>
                  </li>
                  <li><a href="{{ URL::to('/e-library' ) }}" target="_blank">E-Library</a>
                  </li>
                  <li><a href="{{ URL::to('/sap' ) }}" target="_blank">SAP</a>
                  </li>
                </ul>
              </li>
              <li><a href="{{ URL::to('/kontakkami' ) }}">Kontak Kami</a>
              </li>
              <li><a href="{{ URL::to('/pendaftaran' ) }}">Pendaftaran</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="{{ URL::to('/' ) }}">Beranda</a>
          </li>
              <li>
                <a href="#">Tentang Kami</a>
                <ul class="dropdown">
                  <li><a href="{{ URL::to('/profil' ) }}">Profil</a>
                  </li>
                  <li><a href="{{ URL::to('/visimisi' ) }}">Visi & Misi</a>
                  </li>
                  <li><a href="{{ URL::to('/sejarah' ) }}">Sejarah</a>
                  </li>
                  <li><a href="{{ URL::to('/struktur' ) }}">Struktur Organisasi</a>
                  </li>
                  <li><a href="{{ URL::to('/fasilitas' ) }}">Fasilitas Kampus</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Program Studi</a>
                <ul class="dropdown">
                  <li><a href="{{ URL::to('/teknikinformatika' ) }}">Teknik Informatika</a>
                  </li>
                  <li><a href="{{ URL::to('/teknikelektro' ) }}">Teknik Elektro</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#">Direktori</a>
                <ul class="dropdown">
                  <li><a href="{{ URL::to('/lokerstaff' ) }}" target="_blank">Loker Staff</a>
                  </li>
                  <li><a href="{{ URL::to('/lokermahasiswa' ) }}" target="_blank">Loker Mahasiswa</a>
                  </li>
                  <li><a href="{{ URL::to('/e-learning' ) }}" target="_blank">E-Learning</a>
                  </li>
                  <li><a href="{{ URL::to('/e-journal' ) }}" target="_blank">E-Journal</a>
                  </li>
                  <li><a href="{{ URL::to('/e-library' ) }}" target="_blank">E-Library</a>
                  </li>
                  <li><a href="{{ URL::to('/sap' ) }}" target="_blank">SAP</a>
                  </li>
                </ul>
              </li>
              <li><a href="{{ URL::to('/kontakkami' ) }}">Kontak Kami</a>
              </li>
              <li><a href="{{ URL::to('/pendaftaran' ) }}">Pendaftaran</a>
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->