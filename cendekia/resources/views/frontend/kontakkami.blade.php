@extends('layouts.master')

@section('content')

	 <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Kontak Kami</h2>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="{{ URL::to('/' ) }}">Beranda</a></li>
              <li>Kontak Kami</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

  <!-- Start Content -->
    <div id="content">
      <div class="container">

        <div class="row">

          <div class="col-md-8">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Kontak Kami</span></h4>

            <!-- Start Contact Form -->
            <form role="form" id="contactForm" data-toggle="validator" class="shake">
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="name" placeholder="Nama" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="email" class="email" id="email" placeholder="Email" required data-error="Please enter your email">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" id="msg_subject" placeholder="Subjek" required data-error="Please enter your message subject">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <textarea id="message" rows="7" placeholder="Pesan" required data-error="Write your message"></textarea>
                  <div class="help-block with-errors"></div>
                </div>  
              </div>

              <button type="submit" id="submit" class="btn-system btn-large">Kirim</button>
              <div id="msgSubmit" class="h3 text-center hidden"></div> 
              <div class="clearfix"></div>   

            </form>     
            <!-- End Contact Form -->

          </div>

          <div class="col-md-4">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Informasi</span></h4>

            <!-- Some Info -->
            <p>Untuk nfo lebih lanjut, silahkan datang langsung ke kampus kami.</p>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>

            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Address:</strong> Kompleks Pendidikan Islamic Village, Jln. Islamic Raya, Kelapa Dua, Tanggerang - Banten</li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@cendekia.ac.id</li>
              <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> 021-5463569</li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Jam Kerja</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><strong>Senin - Jum'at :</strong> 08.00 s.d 16.00</li>
              <li><strong>Sabtu :</strong> 08.00 s.d 15.00</li>
              <li><strong>Minggu :</strong> Libur</li>
            </ul>

          </div>

        </div>

      </div>
    </div>
    <!-- End content -->

@endsection