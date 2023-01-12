<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website ini merupakan website Pernikahan  Adi Sumaryadi dan Siti Salamah Azzahra yang akan segera melakukan resepsi pernikahan. Silahkan berikan doa dan harapan untuk kami berdua" />
    <meta name="keywords" content="Pernikahan Adi Sumaryadi, Pernikahan Siti Salamah Azzahra, Iis, Webnikah, Nikah Online Undangan Online" />
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('Frontend/main.css') ?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url('Frontend/fontawesome/css/all.min.css') ?>">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= base_url('Frontend/owlcarousel/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('Frontend/owlcarousel/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- css -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url('Frontend/assets/css/bootstrap.min.css') ?>">
    <script src="<?= base_url('Frontend/assets/js/jquery-3.5.1.slim.min.js') ?>"></script>

    <meta name="language" content="in,en" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="robots" content="index,follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="google-site-verification" content="qcKcc9CU_-SX2hZoCUN7_MlGNoY72kZgnD-GMzX59oI" />
    <meta name="revisit-after" content="20 minutes" />
    <meta name="expires" content="never" />
    <meta name="verifikasi" content="27nicrz043"/>
    <meta name="title" property="og:title" content="Website Pernikahan Adi Sumaryadi dan Siti Salamah Azzahra"/>
    <meta name="keywords" content="Pernikahan Adi Sumaryadi, Pernikahan Siti Salamah Azzahra, Iis, Webnikah, Nikah Online Undangan Online,WebNikah" />
    <meta name="description" property="og:description" content="Website ini merupakan website Pernikahan  Adi Sumaryadi dan Siti Salamah Azzahra yang akan segera melakukan resepsi pernikahan. Silahkan berikan doa dan harapan untuk kami berdua" />
    <meta name="image" property="og:image" content="./img/"/>

    <title>Saluv Wedding</title>
  </head>
  <body style="height: 519px;">
    <script>
        function music()
        {
            $(".hidden").css("display","block"); 
            $(".navbar").css("display","block");
            $(".button-menu").css("display","block");
            $("#mute").css("display","block");
            $("body").css("overflow","auto");
            $("body").css("height","auto");
            var myAudio = $("#audio")[0];
            if (myAudio.duration > 0 && !myAudio.paused) {
            }
            else myAudio.play();
        }
        
        </script>
        <audio id="audio" style="width:0px; height:0px;"><source src="<?= base_url('Frontend/musics/Music1.mp3') ?>" type="audio/mpeg"></audio>
    <section class="py-5 hero-1" id="intro" style="background-image: url('<?= base_url('Frontend/img/gambar1.jpg') ?>');">
    
        <div>
            <img src="<?= base_url('Frontend/img/ataskiri.png') ?>" class="img-fluid w-25 top_l">
            <img src="<?= base_url('Frontend/img/ataskanan.png') ?>" class="img-fluid w-25 top_r">
            <img src="<?= base_url('Frontend/img/kiribawah.png') ?>" class="img-fluid w-25 bottom_l">
            <img src="<?= base_url('Frontend/img/kananbawah.png') ?>" class="img-fluid w-25 bottom_r">
          </div>    

        <div class="container text-center">
            
            <div align="center">
                <img src="<?= base_url('Frontend/img/aksen.png') ?>" alt="" class="img-fluid" width="100">
            </div>
            <h1 class="mb-0 mt-4">Vieri & Rere</h1>
            <p>Akan segera melangsungkan pernikahan suci</p>
            <h5 class="mb-0">Rabu, 25 Maret 2024</h5>
            
            <div id="timer" class="flex-wrap d-flex justify-content-center mt-3">
                <div id="days" class="shadow-lg align-items-center flex-column d-flex justify-content-center">days</div>
                <div id="hours" class="shadow-lg align-items-center flex-column d-flex justify-content-center">hours</div>
                <div id="minutes" class="shadow-lg align-items-center flex-column d-flex justify-content-center"></div>
                <div id="seconds" class="shadow-lg align-items-center flex-column d-flex justify-content-center"></div>
            </div>
            <br>
            <br>
            <div class="btn-undangan">
                <a href="#mempelai" onclick="music();" class="btn btn-primary mt-3"><i class="fas fa-envelope"></i> Buka Undangan</a>
            </div>
        </div>
        <!-- Bottom Navbar -->
        <nav class="navbar fixed-bottom navbar-dark bg-white d-lg-none d-xl-none d-md-none navbar-expand" style="border-color: #080708d8 !important; border-radius: 20px;">
            <ul class="navbar-nav nav-justified w-100">
              <li class="nav-item">
                <a href="#mempelai" class="nav-link text-black-50">
                   <img src="<?= base_url('Frontend/img/icon/wedding-rings.png') ?>" alt="Home" width="25">
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link text-black-50">
                    <img src="<?= base_url('Frontend/img/icon/img-date.png') ?>" alt="Tanggal" width="25">
                </a>
              </li>
              <li class="nav-item">
                <a href="#galeri" class="nav-link">
                    <img src="<?= base_url('Frontend/img/icon/photography.png') ?>" alt="Galeri" width="25">
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Notif</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Profile</a>
              </li>
            </ul>
          </nav>
    </section>

    <!-- mempelai -->
    <section class="py-5 hidden" id="mempelai">
        <div class="container text-center mt-5 d-flex justify-content-center">
            <div class="col-lg-6 col-md-6">
                <img src="<?= base_url('Frontend/img/background/bismillah-removebg-preview.png') ?>" alt="bismillah" width="300">
                <p>Dengan Rahmat Allah yang Maha Kuasa InsyaAllah kami akan melangsungkan pernikahan pada:</p>
                <h5>Rabu, 17 Agustus 2022 </h5>
                <p>di Aula Masjid ABRI Cimahi - Jalan Gatot Subroto Kota Cimahi</p>
            </div>
        </div>

        <div class="container text-center mt-5 d-flex justify-content-center">
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="p-4 card-pengantin animate__animated animate__fadeInLeftBig animate__delay-3s">
                            <div align="center"></div>
                            <div class="my-4 h6">Pengantin Wanita</div>
                            <img src="<?= base_url('Frontend/galleries/2797-gallery-1643374824.jpg') ?>" width="100" class="img-fluid border-dark rounded radius-10" alt="">
                            <h2 class="mt-3">Renita Dwika Sari S.E</h2>
                            <div class="small mt-3">Putri Pertama dari Bapak Udin S</div>
                            <div class="small">&</div>
                            <div class="small">Ibu Erlinda Wati</div>
                            <a href="" class="text-black"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-lg-0">
                        <div class="p-4 card-pengantin animate__animated animate__fadeInRightBig animate__delay-3s">
                            <div align="center"></div>
                            <div class="my-4 h6"><?= $pengantin_pria; ?></div>
                            <?php foreach($mempelai as $mp) : ?>
                            <img src="<?= base_url('upload/mempelai/'. $mp['image']) ?>" width="100" class="img-fluid border-dark rounded-circle radius-10" alt="">
                            <h2 class="mt-3"><?= $mp['nama'] ?></h2>
                            <div class="small text-bold"><?= $mp['tanggal'] ?></div> 
                            <div class="small mt-3"><?= $mp['text1'] ?></div>
                            <div class="small"><?= $mp['tex2'] ?></div>
                            <div class="small"><?= $mp['text3'] ?></div>
                            <a href="" class="text-black"><i class="fab fa-instagram"></i></a>
                            <hr class="my-4">
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- cerita kita -->
    <section class="py-5 hidden" id="cerita">
        <div class="container text-center mt-4 d-flex justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="mb-3" align="center">
                    <img src="<?= base_url('Frontend/img/aksen.png') ?>" alt="" class="img-fluid" width="100">
                </div>
                <h1>Cerita Kita</h1>
            </div>
        </div>
        <div class="container text-center mt-4 d-flex justify-content-center">
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card border-0 radius-20 text-center p-4 bg-white animate__animated animate__fadeInLeft animate__delay-5s">
                            <figure>
                                <img src="./galleries/2797-gallery-1643374824.jpg" alt="Pertama Kali Berjumpa" class="img-fluid w-100">
                            </figure>
                            <h6 class="mb-0 mt-4">Pertama Kali Berjumpa</h6>
                            <small>Kamis, 11 April 2020</small>
                            <hr class="my-4">
                            <p>
                                <p>Pertama kali berjumpa&nbsp;Fasilitas ini digunakan untuk memberikan informasi yang lengkap tentang profile dari Mempelai Pria, silahkan masukan dengan lengkap dan jelas berikut dengan foto yang berkualitas bagus.</p>
                                <p>&nbsp;</p>
                            </p>
                            <div align="center">
                                <img src="./img/ornaments.png" alt="Foto">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card border-0 radius-20 text-center p-4 bg-white animate__animated animate__fadeInRight animate__delay-5s">
                            <figure>
                                <img src="./galleries/2797-gallery-1643374829.jpg" alt="Pertama Kali Berjumpa" class="img-fluid w-100">
                            </figure>
                            <h6 class="mb-0 mt-4">Pertama Kali Berjumpa</h6>
                            <small>Kamis, 11 April 2020</small>
                            <hr class="my-4">
                            <p>
                                <p>Pertama kali berjumpa&nbsp;Fasilitas ini digunakan untuk memberikan informasi yang lengkap tentang profile dari Mempelai Pria, silahkan masukan dengan lengkap dan jelas berikut dengan foto yang berkualitas bagus.</p>
                                <p>&nbsp;</p>
                            </p>
                            <div align="center">
                                <img src="./img/ornaments.png" alt="Foto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- undangan -->
    <section class="py-5 hidden" id="undangan">
        <div class="container text-center mt-5 d-flex justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="mb-3" align="center">
                    <img src="./img/aksen.png" alt="" class="img-fluid" width="100">
                </div>
                <h1>Undangan & Acara</h1>
                <p>Bahagia rasanya apabila anda berkenan hadir dan memberikan doa restu kepada kami. Kami mengundang anda untuk hadir dalam acara resepsi pernikahan kami berikut ini</p>
            </div>
        </div>
        <div class="container text-center mt-5 d-flex justify-content-center">
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <?php foreach($akad as $ak) : ?>
                    <div class="col-lg-6 mb-4">
                        <div class="card-undangan p-4 bg-white text-center radius-10 animate__animated animate__fadeInUp animate__delay-5s">
                            <h6 class="mb-0"><?= $ak['judul'] ?></h6>
                            <hr class="my-4">
                            <h5 class="mb-0"><?= $ak['jam'] ?> - Selesai</h5>
                            <div><?= $ak['tanggal'] ?></div>
                            <p class="mt-4"><?= $ak['alamat'] ?></p>
                            <p class="mt-4"><a href="http://www.google.com/calendar/event?action=TEMPLATE&text=Akad Nikah 1+Adi Sumaryadi&Siti Salamah Azzahra&dates=20220817T120000%2F20220817T235900&location=Aula Masjid ABRI Cimahi - Jalan Gatot Subroto Kota Cimahi" class="btn btn-primary btn-sm" target="_blank"><i class="fas fa-calendar-alt mr-2"></i> Add To Calendar</a></p>
                            <div align="center">
                                <img src="<?= base_url('Frontend/img/ornaments.png') ?>" alt="assets/img/ornaments.png">
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <!-- <div class="col-lg-6 mb-4">
                        <div class="card-undangan p-4 bg-white text-center radius-10">
                            <h6 class="mb-0">Resepsi</h6>
                            <hr class="my-4">
                            <h5 class="mb-0">10:00 - Selesai</h5>
                            <div>Sabtu, 18 April 2020</div>
                            <p class="mt-4">Perumahan Mulya Asri - Rajeg, Ps. Kemis Tangerang</p>
                            <p class="mt-4"><a href="http://www.google.com/calendar/event?action=TEMPLATE&text=Akad Nikah 1+Adi Sumaryadi&Siti Salamah Azzahra&dates=20220817T120000%2F20220817T235900&location=Aula Masjid ABRI Cimahi - Jalan Gatot Subroto Kota Cimahi" class="btn btn-primary btn-sm" target="_blank"><i class="fas fa-calendar-alt mr-2"></i> Add To Calendar</a></p>
                            <div align="center">
                                <img src="<?= base_url('Frontend/img/ornaments.png') ?>" alt="assets/img/ornaments.png">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- end undangan -->

    <!-- peta lokasi -->
    <section id="peta" class="hero-section-3 py-5 hidden">
        <div class="container text-center mt-3 d-flex justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="mb-3" align="center">
                    <img src="<?= base_url('Frontend/img/aksen.png') ?>" alt="" class="img-fluid" width="100">
                </div>
                <h1>Peta Lokasi</h1>
                <p>Anda dapat menuju lokasi acara kami dengan bantuan peta dibawah ini. Atau anda bisa buka di</p>
                <a href="http://maps.google.com/maps?q=-6.886518900000008,107.53815278219912" class="btn btn-primary" target="_blank"><i class="fas fa-map-marker-alt"></i> Arahkan Lokasi</a>
            </div>
        </div>

        <div class="container text-center mt-5 d-flex justify-content-center">
            <div class="col-lg-7 col-md-8" >
              <div class="p-3 bg-white text-center radius-10">
                    <center><div id="map" class="mapbox">
                        <a href="http://maps.google.com/maps?q=-6.886518900000008,107.53815278219912" target="_blank"><img src="https://adirara.webnikah.com/dirmember/00000001/adisumaryadi/weddingmap-1.png" style="width:auto; max-width:100%; height:auto;" alt="maps"></a>
                    </div><br><br></center>                          
                </div>
              </div>
            </div>
          </div> 
    </section>
    <!-- end peta -->

    <!-- Galleri -->
    <section id="galeri" class="py-5 hidden">
        <div class="container text-center mt-5 d-flex justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="mb-3" align="center">
                    <img src="<?= base_url('Frontend/img/aksen.png') ?>" alt="aksen" class="img-fluid" width="100">
                </div>
                <h1>Galeri Foto</h1>
                <p>Photo-photo kebahagian kami yang kami kenang selalu.</p>
            </div>
        </div>
        <div class="container mt-5">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="<?= base_url('Frontend/galleries/2797-gallery-1643189542.jpg') ?>" class="img-fluid radius-10" alt="galeri 1">
                </div>
                <div class="item">
                    <img src="<?= base_url('Frontend/galleries/2797-gallery-1643190501.jpg') ?>" class="img-fluid radius-10" alt="galeri 2">
                </div>
                <div class="item">
                    <img src="<?= base_url('Frontend/galleries/2797-gallery-1643190501.jpg') ?>" class="img-fluid radius-10" alt="galeri 3">
                </div>
                <div class="item">
                    <img src="<?= base_url('Frontend/galleries/2797-gallery-1643189542.jpg') ?>" class="img-fluid radius-10" alt="galeri 3">
                </div>
            </div>
        </div>
    </section>
    <!-- end galleri -->

    <!-- Kirim kado -->
    <section class="py-5 hidden" id="hadiah">
        <div class="container">
            <div class="mb-3" align="center">
                <img src="<?= base_url('Frontend/img/aksen.png') ?>" alt="" class="img-fluid" width="100">
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div class="col-md-8">
                    <h1 class="text-center mb-4">Kirim Kado</h1>
                </div>
            </div>
            <div class="container text-center d-flex justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="p-3 bg-white text-center radius-10">
                        <p class="text-center">Terima kasih atas doa dan restu yang telah anda berikan, jika anda ingin mengirimkan kado nikah, silahkan kirim dengan cara dibawah ini. Sebelumnya, kami mengucapkan banyak terima kasih.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kirimkadoModal"><i class="fas fa-location-arrow"></i> Kirim Amplop Undangan</button>
                        <!-- <p>
                            <p>Untuk mengirimkan Kado Nikah kepada kami, silahkan kirimkan melalui <strong>Saweria </strong>kami. Atau melalui Nomor Rekening 
                            <span onclick="copyTeks()" id="dataCopy"><strong>Bank Mandiri 1320006284864</strong></span> </p>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- modal kirim kado -->
    <div class="modal fade" id="kirimkadoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Amplop Undangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                <div class="form-group">
                    <label for="">Nama Pengirim</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama Pengirim...">
                </div>
                <div class="form-group">
                    <label for="">Email Pengirim</label>
                    <input type="email" class="form-control" name="email" placeholder="Email Pengirim...">
                </div>
                <div class="form-group">
                    <label for="">Pesan Singkat</label>
                    <textarea name="pesan" id="" class="form-control" placeholder="Pesan Singkat"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Nominal Amplop</label>
                    <input type="number" class="form-control" name="nominal" placeholder="Nominal Amplop">
                    <small class="text-black"><small class="text-danger">*</small> Nominal amplop akan ditambahkan Rp. 5.000 untuk biaya transfer secara otomatis</small>
                </div>
                <div class="form-group">
                    <label for="">Metode Pengiriman</label>
                    <select name="pengiriman" class="form-control" id="">
                        <option value="OVO">OVO A.n Vieri (0895336769180)</option>
                        <option value="DANA">DANA A.n </option>
                        <option value="SHOPEEPAY">SHOPEEPAY</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer text-center d-flex justify-content-center">
                <div align="center" class="radius-10">
                    <button type="submit" class="btn btn-primary btn-block">Kirim Sekarang</button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>

    <!-- video -->
    <section class="hidden hero-section-4 py-5">
        <div class="container">
          <div align="center" class="mb-3">
            <img src="./img/aksen.png" class="img-fluid" width="100" alt="./img/aksen.png">
          </div>
          <h1 class="text-center mb-4">Video</h1>
            <p class="text-center">Sudi sejenak melihat kebahagiaan kami melalui video ini
            <div class="container text-center mt-5 d-flex justify-content-center">
              <div class="col-lg-7 col-md-8">
                 <div class="p-3 bg-white text-center radius-10">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="100%" height="420" src="https://www.youtube.com/embed/hE-1XnJs61w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- protokol kesehatan -->
    <section class="hidden hero-section-4 py-5" id="protokol">
        <div align="center" class="mb-3">
          <img src="<?= base_url('Frontend/img/aksen.png') ?>" class="img-fluid" width="100" alt="assets/img/aksen.png">
        </div>
      <div class="fh5co-section-gray">
      <div class="container">
        <div class="row">
           <br clear="all"> <br clear="all">
          <div class="col-md-12 col-md-offset-2 text-center fh5co-heading animate-box">
            <h1>Protokol Kesehatan</h1>
            <p align="justify">Mohon untuk anda sahabat/kerabat dan saudara kami yang akan datang ke Akad maupun resepsi pernikahan kami untuk tetap memperhatikan protokol kesehatan yaitu Menggunakan Masker, 
                Menjaga Jarak, Mencuci Tangan dan selalu menjaga kesehatan dan juga imun tubuh. Terima kasih</p>
          </div>
        </div>
            <div align="center">
                <img class="img-fluid radius-10" src="<?= base_url('Frontend/img/covid-prokes.jpg') ?>" alt="" width="400">
            </div>
        </div>
      </div>
    </section>

    <!-- buku tamu -->
    <section class="py-5 hidden" id="doa">
        <div class="container">
            <div class="mb-3" align="center">
                <img src="<?= base_url('Frontend/img/aksen.png') ?>" alt="" class="img-fluid" width="100">
            </div>
            <div class="d-flex justify-content-center mb-4">
                <div class="col-md-8">
                    <h1 class="text-center mb-4">Doa & Ucapan</h1>
                </div>
            </div>
            <div class="container text-center d-flex justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="p-3 bg-white text-center radius-10">
                        <div class="card ml-3">
                            <div class="overflow-auto">
                                <div align="left" class="mr-3">
                                    <img src="./img/icon/info.png" alt="" width="50">
                                </div>
                                <p>Bismi</p>
                                <small class="text-muted">1 tahun yang lalu</small>
                             </div>
                        </div>
                       
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kirimkadoModal"><i class="fas fa-location-arrow"></i> Kirim Doa</button>
                        <!-- <p>
                            <p>Untuk mengirimkan Kado Nikah kepada kami, silahkan kirimkan melalui <strong>Saweria </strong>kami. Atau melalui Nomor Rekening 
                            <span onclick="copyTeks()" id="dataCopy"><strong>Bank Mandiri 1320006284864</strong></span> </p>
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <footer class="text-center mt-4" style="height: auto; width: auto;">
        <div class="container">
            <img src="" alt="">
            <p>Design By @web_ver <small></small> </p>
        </div>
    </footer>
    
    <!-- mute music -->
    <div class="mute shadow px-3 py-2" style="border-radius: 20px; color: black; background-color: white;" id="mute" onClick="mute();"><img src="<?= base_url('Frontend/img/music/music.png') ?>" width="25" alt=""></div>
    <script>
        function mute()
        {
        music();
        
        var myAudio = document.getElementById("audio");
        var mute = document.getElementById("mute");
        if(myAudio.muted == true) {
            myAudio.muted = false;
            mute.innerHTML = '<img src="./img/music/music.png" width="25" alt="">';
        }
            else if(myAudio.muted == false) {
            myAudio.muted = true;
            mute.innerHTML = '<img src="./img/music/music-slash.png" width="25" alt="">';
        }
        }
    </script>

    <script>
        $("section").hide();
        $("#intro").show();
        var tinggi = $("#intro").outerHeight();
        $("body").css("height",tinggi+"px");
    </script>

    <script type="text/javascript">
        function makeTimer() {
        var endTime = new Date("25 Maret 2024 12:00:00");
        var endTime = (Date.parse(endTime)) / 1000;
        var now = new Date();
        var now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < "10") {
            hours = "0" + hours;
        }
        if (minutes < "10") {
            minutes = "0" + minutes;
        }
        if (seconds < "10") {
            seconds = "0" + seconds;
        }
        $("#days").html(days + "<span>Hari</span>");
        $("#hours").html(hours + "<span>Jam</span>");
        $("#minutes").html(minutes + "<span>Menit</span>");
        $("#seconds").html(seconds + "<span>Detik</span>");
    }
    setInterval(function () {
        makeTimer();
    }, 0);
    </script>
    <!-- aos -->
    <script>
        AOS.init();
    </script>

    <!-- copy text -->
    <script type="text/javascript">
        var span = document.querySelector("span");
        function copyTeks() {
            document.execCommand("copy");
            alert("data '" + span.textContent + "' berhasil di salin ")
        }
        span.addEventListener("copy", function(event) {
            event.preventDefault();
            if (event.clipboardData) {
                event.clipboardData.setData("text/plan", span.textContent);
                console.log(event.clipboardData.getData("text"))
            }
        });
    </script>

    <!-- owl carousel -->
    <script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
        margin: 10,
        loop: true,
        items: 4,
        autoplay:true,
        autoplayTimeout:1000,
        autoplayHoverPause:true,
        nav: true,
        responsiveClass:true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 5
            }
        }
        });

    $('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
        
    })
    </script>
    <script src="<?= base_url('Frontend/assets/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= baser_url('Frontend/owlcarousel/js/owl.carousel.js') ?>"></script>
  </body>
</html>