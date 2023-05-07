<style>
  #bu-image {

    width: auto;
    height: 50%;
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
    position: absolute;
    top: 50%;
    left: 65%;
    transform: translate(-50%, -50%);
  }
</style>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('') ?>assets/img/bu.png" alt="" width="30" class="d-inline-block align-text-top me-3">
        Al-Ikhlas
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Galeri</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Informasi</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <div>
          <a href="<?php echo site_url('login') ?>"> <button class="button-secondary">Masuk</button></a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Hero session -->
  <section id="hero">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 hero-tagline my-auto">
          <h1>PP.Al-Ikhlas</h1>
          <p><span class="fw-bold"></span>Mencetak generasi qur’ani dan salafi yang berwawasan Al-qur’an dan
            kitab kitab ahlussunnah wal jama’ah yang berakhlaqul karimah</p>

        </div>
        <div class="col-md-6  my-auto mx-auto">
          <img src="<?php echo base_url('') ?>assets/img/bu.png" id="bu-image" alt="">
        </div>
      </div>


      <img src="<?php echo base_url('') ?>assets/img/Accsent 1.png" alt="" class=" accsent-img h-100 position-absolute top-0 start-0">
    </div>
  </section>

  <!-- Layanan section -->

  <section id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-12  text-center">
          <h2>Sejarah</h2>
          <span class="sub-title"> Berdirinya pondok pesantren putra putri Al – Ikhlas Bahrul ‘Ulum Tambakberas Jombang merupakan salah satu bentuk perhatian para pengasuh pesantren bahrul ulum khususnya KH. M.Djamaluddin Achmad beserta keluarga. Pondok yang berdiri tahun 1998dan berjalan fungsi kegiatannya pada tahun 1999 yang diamanatkan pada menantu dan putri beliau, Agus H. Hasyim Yusuf dan Hj. Lathifah Hidayaty. Pada awalnya bertujuan untuk memberikan pendidikan baik Al-Qur’an, Keagamaan serta seni Hadroh pada masyarakat sekitar pesantren. tidak seperti pada umumnya pesantren yang mana santrinya menetap, santri pondok pesantren putra putri Al – Ikhlas Bahrul ‘Ulum Tambakberas Jombang pada periode awal hanya nglowo (malam di pondok dan pagi pulang ke rumah masing masing). Namun seiring waktu semakin bertambah kepercayaan dan animo luar kota maupun luar jawa. Maka beliau KH. Djamaluddin Achmad memberi izin pada menantu dan putrinya untuk menerima santri santri yang berkeinginan tinggal di pesantren. pesantren yang berdiri sejak 1999 selalu berusaha meningkatkan dan menumbuhkembangkan pendidikan pesantren dengan pendidikan ilmu ilmu Al-Qur’an dan pendididkan salaf Ahlussunnah agar terbentuk santri yang berakhlaqul karimah, berilmu dan terampil
          </span><br><br><br>
          <h2>Visi & Misi</h2>
          <p><span class="sub-title">Visi</span>
            Mencetak generasi qur’ani dan salafi yang berwawasan Al-qur’an dan kitab kitab ahlussunnah wal jama’ah yang berakhlaqul karimah</p>

          <p><span class="sub-title">Misi</span>
            a) Mencetak santri agar hafal Al-Qur’an dan bisa memahami dan mengamalkan kitab kitab salaf.
            b) Menyelenggarakan pendidikan dengan kurikulum pesantren yang berwawasan Al-Qur’an dan kitab salaf/kitab kuning .
            c) Membimbing santri membaca Al-Qur’an dengan baik dan benar, baik secara binnadzri dan bil ghoib.
            d) Memberikan pendidikan agama kepada santri melalui madrasah diniyyah dan madrasah Al-Qur’an
            e) Membina santri untuk berbudi luhur dalam kehidupan sehari hari.
            f) Mempersiapkan santri yang mandiri dan mampu menginternalisasi nilai nilai islam dalam kehidupan sehari hari dalam masyarakat.

        </div>
      </div>

    </div>
  </section>

  <!-- Fitur Section -->
  <section id="fitur" style="height: 69rem;">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2>Berita</h2>
        </div>
        <div class="row">
          <div class="col-12 mb-4 position-relative">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?php echo base_url('') ?>assets/img/cangkruk.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url('') ?>assets/img/cangkruk1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo base_url('') ?>assets/img/cangkruk.jpg" class="d-block w-100" alt="...">
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Rekomendasi Section -->
  <section id="rekomendasi">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2>Galeri</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('') ?>assets/img/Rekomendasi1.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('') ?>assets/img/Rekomendasi2.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('') ?>assets/img/Rekomendasi3.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('') ?>assets/img/Rekomendasi4.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('') ?>assets/img/Rekomendasi5.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('') ?>assets/img/Rekomendasi6.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </div>
              <div>
                <img src="<?php echo base_url('') ?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact Section -->
  <section id="contact">
    <div class="container-fluid overlay h-100">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Butuh Konsultasi..?
              Silahkan kontak kami
              Kami Siap Membantu</h3>
            <div class="kontak">
              <h6>Kontak</h6>
              <div class="mb-3 d-flex align-items-center">
                <div>
                  <img src="<?php echo base_url('') ?>assets/img/Alamat Icon.png" alt="">
                </div>
                <a href="#">Jl. Pelajar Pejuang 123 Majalaya Bandung Indonesia</a>
              </div>

              <div class="mb-3">
                <img src="<?php echo base_url('') ?>assets/img/Email Icon.png" alt="">
                <a href="#">022-6545-2041</a>
              </div>

              <div class="mb-3">
                <img src="<?php echo base_url('') ?>assets/img/Email Icon.png" alt="">
                <a href="#">rumahimpian@gmail.com</a>
              </div>
            </div>
            <h6>Social Media</h6>
            <a href="#" class="me-3"><img src="<?php echo base_url('') ?>assets/img/Facebook Icon.png" alt=""></a>
            <a href="#" class="me-3"><img src="<?php echo base_url('') ?>assets/img/Twiter Icon.png" alt=""></a>
            <a href="#" class="me-3"><img src="<?php echo base_url('') ?>assets/img/Instagram Iicon.png" alt=""></a>
            <a href="#" class="linkrumahimpian">Rumah Impian</a>
          </div>

          <div class="col-md-6">
            <div class="card-contact w-100">
              <form>
                <h2>ada pertanyaan..?</h2>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput" class="d-flex align-items-center">Masukan email anda disini...</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput" class="d-flex align-items-center">Pertanyaan anda...</label>
                </div>
                <button type="submit" class="button-kontak">Kirim</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>