<style>
#bu-image {
  
  width: auto;
  height: 50%;
  animation: up-down 2s ease-in-out infinite alternate-reverse both;
  position: absolute;
}
</style>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-fixed w-100">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url('')?>assets/img/bu.png" alt="" width="30" class="d-inline-block align-text-top me-3">
        Al-Ikhlas

      </a>  
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Keunggulan</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Informasi</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>
        <div>
          <a href="#"> <button class="button-primary">Daftar</button></a>
          <a href="<?php echo site_url('dashboa/login')?>"> <button class="button-secondary" >Masuk</button></a>
        </div>
      </div>
    </div>
  </nav>
  <!-- <nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div> -->
</nav>

<!-- <section id="carousel">
  <div class="carousel">
    <img class="slide" src=">assets/img/bu.png">
  </div>
</section> -->

  <!-- Hero session -->
  <section id="hero">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-md-6 hero-tagline my-auto">
          <h1>PP.Al-Ikhlas</h1>
          <p><span class="fw-bold">Rumah Impian</span> Hadir untuk temukan rumah terbaik untukmu, untuk di jual ataupun
            di sewa dengan sumber terpercaya</p>

          <button class="button-lg-primary">Temukan Rumah</button>
          <a href="#">
            <img src="<?php echo base_url('')?>assets/img/Right Arrow lg.png" alt="">
          </a>
        </div>
        <div class="col-md-6  my-auto mx-auto">
            <img src="<?php echo base_url('')?>assets/img/bu.png" id="bu-image" alt="">
          </div>
      </div>

        
      <img src="<?php echo base_url('')?>assets/img/Accsent 1.png" alt="" class=" accsent-img h-100 position-absolute top-0 start-0">
    </div>
  </section>

  <!-- Layanan section -->

  <section id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-12  text-center">
          <h2>Sejarah</h2>
          <span class="sub-title">Rumah impian hadir menjadi solusi bagi kamu</span>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-4 text-center">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="<?php echo base_url('')?>assets/img/Icon-propertybaru.png" alt=""
                class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Property baru</h3>
            <p class="mt-3">Rumah impian kini jadi kenyataan, beli
              rumah baru dengan fasilitas terbaik dengan
              lingkungan yang nyaman.</p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="<?php echo base_url('')?>assets/img/Icon Sewa.png" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Sewa Rumah</h3>
            <p class="mt-3">Sewa rumah yang indah untuk keluarga anda pilihan terbaik untuk tempat tinggal keluarga mu
            </p>
          </div>
        </div>

        <div class="col-md-4 text-center">
          <div class="card-layanan">
            <div class="circle-icon position-relative mx-auto">
              <img src="<?php echo base_url('')?>assets/img/Icon Beli.png" alt="" class="position-absolute top-50 start-50 translate-middle">
            </div>
            <h3 class="mt-4">Beli Rumah</h3>
            <p class="mt-3">Beli rumah sempurna dengan harga terbaik kualitas terjamin dari sumber terpercaya</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Search Section -->
  <section id="search" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2>
            Temukan Rumah Impianmu
          </h2>

          <p >
            Sekarang anda dapat menghemat semua hal stress, waktu, dan biaya tersembunyi dengan ratusan rumah untuk anda
          </p>
          <div class="col-10 mx-auto mt-5">

            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#jual"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">Jual</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#sewa" type="button"
                  role="tab" aria-controls="nav-profile" aria-selected="false">Sewa</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#propertybaru"
                  type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Property baru</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="nav-home-tab">
                <!-- Dropdown tipe rumah -->
                <div class="input-group input-cari mb-3">
                  <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="<?php echo base_url('')?>assets/img/Home Icon.png" alt="">
                    Tipe Rumah</button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                  <!-- Dropdown range harga -->
                  <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="<?php echo base_url('')?>assets/img/Money-icon.png" alt="">
                    Range harga</button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                  </ul>
                  <input type="text" class="form-control" aria-label="Text input with dropdown button"
                    placeholder="Cari Bedasarkan lokasi, ID, Property">
                  <button class="button-primary" type="button" id="button-addon2">Cari</button>
                </div>

              </div>
              <div class="tab-pane fade" id="sewa" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="nav-home-tab">
                  <!-- Dropdown tipe rumah -->
                  <div class="input-group input-cari mb-3">
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="<?php echo base_url('')?>assets/img/Home Icon.png" class="d-blok d-lg-inline mx-auto" alt="">
                      Tipe Rumah</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <!-- Dropdown range harga -->
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="<?php echo base_url('')?>assets/img/Money-icon.png"class="d-blok d-lg-inline mx-auto" alt="">
                      Range harga</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                      placeholder="Cari Bedasarkan lokasi, ID, Property">
                    <button class="button-primary" type="button" id="button-addon2">Cari</button>
                  </div>

                </div>
              </div>
              <div class="tab-pane fade" id="propertybaru" role="tabpanel" aria-labelledby="nav-contact-tab">
                <div class="tab-pane fade show active" id="jual" role="tabpanel" aria-labelledby="nav-home-tab">
                  <!-- Dropdown tipe rumah -->
                  <div class="input-group input-cari mb-3">
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="<?php echo base_url('')?>assets/img/Home Icon.png" alt="">
                      Tipe Rumah</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <!-- Dropdown range harga -->
                    <button class="button-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false">
                      <img src="<?php echo base_url('')?>assets/img/Money-icon.png" alt="">
                      Range harga</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button"
                      placeholder="Cari Bedasarkan lokasi, ID, Property">
                    <button class="button-primary" type="button" id="button-addon2">Cari</button>
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
          <h2>Rekomendasi Rumah Untuk Mu</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('')?>assets/img/Rekomendasi1.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </span>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('')?>assets/img/Rekomendasi2.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </span>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('')?>assets/img/Rekomendasi3.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </span>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('')?>assets/img/Rekomendasi4.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </span>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('')?>assets/img/Rekomendasi5.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </span>
            </div>

          </div>
        </div>
        <div class="col-4 mb-4">
          <div class="card p-2" style="width: 22rem;">
            <img src="<?php echo base_url('')?>assets/img/Rekomendasi6.png" alt="">
            <div class="card-body">
              <h4>IDR.200.000.000</h4>
              <p class="mb-4 lh-sm">Jl. Soekarno Hatta no.1 <br> <span class="text-danger">Sewa</span> </p>
            </div>
            <div class="card-fasilitas d-flex justify-content-between px-4">
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Tidur.png" alt="">
                <p>Kamar Tidur</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Kamar Mandi.png" alt="">
                <p>Kamar Mandi</p>
              </span>
              <span>
                <img src="<?php echo base_url('')?>assets/img/Icon Luas Tanah.png" alt="">
                <p>Luas Rumah</p>
              </span>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Fitur Section -->
  <section id="fitur" class="mt-5 overflow-hidden">
    <div class="container position-relative">
      <div class="row mb-4">
        <div class="col-9">
          <h2>Fitur Rumah</h2>
        </div>
        <div class="col-3">
          <button class="button-fitur">Lihat Semua...
            <img src="<?php echo base_url('')?>assets/img/Right Arrow.png" alt="" class="ms-4">
          </button>
        </div>
      </div>

      <div class="container position-relative">
        <div class="row">
          <div class="col-12 d-flex justify-content-start">
            <div class="card-fitur me-3 position-relative">
              <img src="<?php echo base_url('')?>assets/img/Fitur Rumah 1.png" alt="">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                  <h5>Kamar Tidur</h5>
                  <span>Rumah minimalist Type-A2</span>
                  <h6>IDR.200jt</h6>
                  <button>Lihat Rumah</button>
                </div>
              </div>
            </div>

            <div class="card-fitur me-3 position-relative">
              <img src="<?php echo base_url('')?>assets/img/Fitur Rumah 1.png" alt="">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                  <h5>Kamar Tidur</h5>
                  <span>Rumah minimalist Type-A2</span>
                  <h6>IDR.200jt</h6>
                  <button>Lihat Rumah</button>
                </div>
              </div>
            </div>

            <div class="card-fitur me-3 position-relative">
              <img src="<?php echo base_url('')?>assets/img/Fitur Rumah 1.png" alt="">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                  <h5>Kamar Tidur</h5>
                  <span>Rumah minimalist Type-A2</span>
                  <h6>IDR.200jt</h6>
                  <button>Lihat Rumah</button>
                </div>
              </div>
            </div>

            <div class="card-fitur me-3 position-relative">
              <img src="<?php echo base_url('')?>assets/img/Fitur Rumah 1.png" alt="">

              <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                  <h5>Kamar Tidur</h5>
                  <span>Rumah minimalist Type-A2</span>
                  <h6>IDR.200jt</h6>
                  <button>Lihat Rumah</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        <button class="button-arrow-left position-absolute start-0 top-50 translate-middle">
          <img src="<?php echo base_url('')?>assets/img/Left Arrow lg.png" alt="">
        </button>

        <button class="button-arrow-right position-absolute end-0 top-50 translate-middle">
          <img src="<?php echo base_url('')?>assets/img/Right Arrow.png" alt="">
        </button>
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
                  <img src="<?php echo base_url('')?>assets/img/Alamat Icon.png" alt="">
                </div>
                <a href="#">Jl. Pelajar Pejuang 123 Majalaya Bandung Indonesia</a>
              </div>

              <div class="mb-3">
                <img src="<?php echo base_url('')?>assets/img/Email Icon.png" alt="">
                <a href="#">022-6545-2041</a>
              </div>

              <div class="mb-3">
                <img src="<?php echo base_url('')?>assets/img/Email Icon.png" alt="">
                <a href="#">rumahimpian@gmail.com</a>
              </div>
            </div>
            <h6>Social Media</h6>
            <a href="#" class="me-3"><img src="<?php echo base_url('')?>assets/img/Facebook Icon.png" alt=""></a>
            <a href="#" class="me-3"><img src="<?php echo base_url('')?>assets/img/Twiter Icon.png" alt=""></a>
            <a href="#" class="me-3"><img src="<?php echo base_url('')?>assets/img/Instagram Iicon.png" alt=""></a>
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
