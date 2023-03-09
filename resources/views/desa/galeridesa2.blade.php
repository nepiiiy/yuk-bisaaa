@extends('desa.nav')
@section('isi')

<body class="">
    <div id="wrapper" class="clearfix">

    <section class="inner-header divider layer-overlay overlay-dark-8" data-bg-img="https://i.postimg.cc/02JFzHcf/ce3a746513e5cfcec3f7fa6e88ef0b391.jpg"">
        <div class="container pt-200 pb-40">
          <!-- Section Content -->
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <h3 class="text-white font-36">Galeri</h3>
                <h1 class="text-white font-45">Nama Desa</h1>
                <ol class="breadcrumb text-left mt-10 white">
                  <li><a href="dashboard-desa.html">Beranda</a></li>
                  <li class="active" style="color: #fca311;">Galeri Desa</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Section: Image Box -->
    <section>
        <div class="container pt-70 pb-40">
          <div class="section-content">
            <div class="row multi-row-clearfix">

                <div class="col-sm-6 col-md-4">
                    <div class="event-list bg-silver-light maxwidth500 mb-30">
                      <div class="thumb">
                        <img src="imggaleri/contoh1.png" alt="" class="img-fullwidth">
                      </div>
                      <div class="image-box-details text-center p-20 pt-30 pb-30 bg-lighter">
                        <a data-lightbox="image" href="imggaleri/contoh1.png" class="btn btn-colored btn-theme-colored">Lihat Gambar</a>
                      </div>
                    </div>
                  </div>
              <div class="col-sm-6 col-md-4">
                <div class="event-list bg-silver-light maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="imggaleri/desa13.jpeg" alt="" class="img-fullwidth">
                  </div>
                  <div class="image-box-details text-center p-20 pt-30 pb-30 bg-lighter">
                    <a data-lightbox="image" href="imggaleri/contoh1.png" class="btn btn-colored btn-theme-colored">Lihat Gambar</a>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-4">
                <div class="event-list bg-silver-light maxwidth500 mb-30">
                  <div class="thumb">
                    <img src="imggaleri/contoh1.png" alt="" class="img-fullwidth">

                  </div>
                  <div class="image-box-details text-center p-20 pt-30 pb-30 bg-lighter">
                    <a data-lightbox="image" href="imggaleri/contoh1.png" class="btn btn-colored btn-theme-colored">Lihat Gambar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>
@endsection
