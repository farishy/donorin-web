  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-8 intro-info order-md-first order-last">
          <h2>Donor Darah<br>Membantu Menolong <span>Sesama!</span></h2>
          <h2 style="color: black; font-size: 24px;">Palang Merah Indonesia Kab. Bogor</h2>
        </div>

        <div class="col-md-4 intro-img order-md-last order-first">
          <img style="height:100%; padding-top: 150px; object-fit: cover" src="<?= base_url(); ?>/user/img/logo.png" alt="" class="img-fluid" >
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->

    <section id="about">
      <div class="container">
        <h3 class="section-title">Latest Post</h3><hr>
        <div class="row mt-3">
          <div class="mb-3">
          <?php foreach($artikel as $a) :?>
            <div class="row g-0">
              <div class="col-md-2">
                <img style="width: 180px; height: 150px;" style="object-fit:cover;" src="<?= $a['gambarArtikel'];?>" alt="...">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title"><?= $a['judulArtikel'];?></h5>
                  <p class="card-text"><?= $a['sinopsisArtikel'];?></p>
                  <a href="/home/<?= $a['idArtikel']; ?>" class="btn btn-primary">Read more</a>
                </div>
              </div>
            </div><hr>
            <?php endforeach;?>
          </div>
        </div>
        <div class="row">
          <div class="container my-5">
            <div class="row d-flex justify-content-center">
                <h2 style="margin-bottom: 50px;">Ongoing Event & Agenda</h2>
                <div class="col-12">
                  <div id="carousel" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li data-target="#carousel" data-slide-to="0" class="active bg-secondary"></li>
                          <li data-target="#carousel" data-slide-to="1" class="bg-secondary"></li>
                          <li data-target="#carousel" data-slide-to="2" class="bg-secondary"></li>
                        </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="row" style="margin-bottom: 80px;">
                          <?php foreach($eventagenda as $ea) :?>
                              <div class="col-12 col-md-6 col-xl-3">
                                  <div class="card mr-3">
                                      <img src="<?= $ea['gambarAgenda'];?>" style="height:200px; object-fit:cover;" class="card-img-top" alt="...">
                                      <div class="card-body">
                                        <h5 class="card-title"><?= $ea['judulAgenda'];?></h5>
                                        <p class="card-text" style="margin-top: 0px;"><small class="text-muted"><?php
                                        $date=date_create($ea['tglAgenda']); echo date_format($date, 'd/m/y'); ?></small></p>
                                        <p class="card-text"><?= $ea['sinopsisAgenda'];?></p>
                                      </div>
                                  </div>
                              </div>
                          <?php endforeach?>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-lg-5 col-md-6 mt-4">
            <div class="about-img">
              <img src="<?= base_url(); ?>/user/img/pmi_kabbogor.jpg" alt="">
            </div>
            <div class="about-img">
              <img src="<?= base_url(); ?>/user/img/pmi_kabbogor2.jpg" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content text-justify">
              <h2>About PMI Kab. Bogor</h2>
              <p>Kabupaten Bogor salah satu wilayah di Jawa Barat yang berada pada ketinggian 15 – 2000 M di atas permukaan laut yang sebagian di apit oleh gunung – gunung dan bukit serta memiliki 6 daerah aliran sungai. Berdasarkan klasifikasi Kabupaten Bogor memiliki Iklim Tropis Tipe A (sangat basah) di bagian Selatan dan Iklim Tipe B (basah) di bagian Utara, dengan suhu berkisar antara 20º C hingga 30º C. Luas wilayah Kabupaten Bogor 3440,72 Km² berbatasan langsung di sebelah Utara dengan DKI Jakarta, Kabupaten Tangerang, Kota Depok dan Kabupaten Bekasi. Di sebelah Timur berbatasan dengan wilayah Cianjur dan Kabupaten Karawang dan di sebelah Selatan berbatasan langsung dengan Kabupaten Sukabumi, sebelah Barat dengan Kabupaten Lebak dan di Tengah dengan Kota Bogor.</p>
              <p>Adapun penduduk Kabupaten Bogor sebanyak 3.599.462 jiwa dengan kepadatan penduduk rata – rata 1.379/ Km², memiliki 426 Desa / Kelurahan dan 40 Kecamatan. Dengan luas daerah dan kepadatan penduduk yang cukup tinggi, Kabupaten Bogor merupakan daerah rawan bencana yang cukup tinggi. Tanah Longsor, Banjir, Angin Putting Beliung dan Kebakaran, merupakan jenis bencana yang sering terjadi di wilayah ini.</p>
              <p>PMI Kabupaten Bogor didirikan pada Tanggal 7 September 1974 berdasarkan Surat Keputusan Pengurus Pusat PMI No. 24/X/1968 dan saat didirikan PMI Cabang Kabupaten Bogor menempati gedung bekas Palang Merah Belanda (NERKAI) yang berada di Kota Bogor. Namun untuk meningkatkan kinerja organisasi, sejak Tahun 1994 Markas Cabang PMI Kabupaten Bogor dipindahkan kepusat Ibu kota Kabupaten Bogor di Cibinong dengan tanah seluas 2000 M² dan gedung seluas 1.782 M². Untuk sarana markas terdiri dari ruang kantor, aula pertemuan, gudang, mes Pengurus, mes SATGANA/KSR, ruang pelayanan Transfusi Darah serta Bank Darah yang dilengkapi dengan Laboratorium dan kendaraan operasional.</p>
              <!-- <ul>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul> -->
            </div>
          </div>
        </div>
        <h3 style="margin-top:100px;margin-bottom:50px;">Frequency Ask Questions</h3>
        <div class="row mt-3">
          <div class="mb-3">
          <?php foreach($frequencyaskquestion as $faq) :?>
            <div class="row g-0">
              <div class="col-md-2">
                <img style="width: 180px; height: 150px;" style="object-fit:cover;" src="<?= $faq['icon'];?>" alt="...">
              </div>
              <div class="col-md-10">
                <div class="card-body">
                  <h5 class="card-title"><?= $faq['judulFaq'];?></h5>
                  <p class="card-text"><?= $faq['kontenFaq'];?></p>
                </div>
              </div>
            </div><hr>
            <?php endforeach;?>
          </div>
        </div>
      </div>
                            
    </section><!-- #about -->
    

    <!--==========================
      Services Section
    ============================-->
    <section id="services" class="section-bg">
      <div class="container">
        <header class="section-header">
          <h3>Stok Darah</h3>
        </header>
        <hr>
        <section id="why-us" class="wow fadeIn">
            <div class="row counters">
              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">1290</span>
                <p>A +</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">876</span>
                <p>B +</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">540</span>
                <p>AB +</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">1225</span>
                <p>O +</p>
              </div>
              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">89</span>
                <p>A -</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">72</span>
                <p>B -</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">11</span>
                <p>AB -</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">10</span>
                <p>O -</p>
              </div>

            </div>
        </section>
        <div class="row">

          <!-- <div>
            <img src="<?= base_url(); ?>/user/img/download.png" style="width: 100%;">
          </div> -->
          <!-- <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Why Us Section
    ============================-->


    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row text-justify">
          <div class="col-lg-9 text-lg-left">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container ">
            <a class="cta-btn align-middle" href="#">Donor Sekarang</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->


  </main>
