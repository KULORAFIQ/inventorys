<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/fevicon.png" type="image/x-icon">

  <title>Petugasdash</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- Owl Carousel stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- Font Awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- jQuery library -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <div class="hero_area">
    <!-- Header section starts / Navbar -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="contact_nav">
            <!-- Add your contact info here -->
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="index.html">
              <span>Petugas</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('gudang.index') }}">Gudang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('barang.index') }}">Barang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('barang.index2') }}">Laporan barang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('gudang.indexg2') }}">Laporan Gudang</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('log_barang.indexmasuk') }}">Log barang masuk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('log_barang.indexkeluar') }}">Log barang keluar</a>
                </li>
                <li class="nav-item">
                  <form id="logoutForm" action="/logout" method="post">
                    @csrf
                    <a class="nav-link" href="javascript:void(0);" onclick="showLogoutAlert()">
                      <i class="fa fa-user" aria-hidden="true"></i> Logout
                    </a>
                  </form>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- End header section -->

    <!-- Slider section -->
    <section class="slider_section">
      <div class="slider_bg_box">
        <img src="images/slider-bg.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    @if(auth()->check() && auth()->user())
                      <h1>
                        Selamat Datang <br>
                        Hallo, {{ auth()->user()->name }}
                      </h1>
                    @else
                      <h1>
                        Selamat Datang
                      </h1>
                    @endif
                    <div class="btn-box">
                      <!-- Add buttons or other content here -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End slider section -->
  </div>

  <!-- Service section -->
  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container">
        <div class="heading_container">
          <h2>Our <span>Services</span></h2>
          <p></p>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/s1.png" alt="">
              </div>
              <div class="detail-box">
                <h5>Gudang</h5>
                <p>Gudang adalah ruang yang dibangun dengan tujuan untuk penyimpanan berbagai macam barang.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/s2.png" alt="">
              </div>
              <div class "detail-box">
                <h5>Penyimpanan</h5>
                <p>Penyimpanan barang adalah menempatkan barang di dalam gudang untuk disimpan atau dipersiapkan untuk proses selanjutnya.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/s3.png" alt="">
              </div>
              <div class="detail-box">
                <h5>Trucks Transport</h5>
                <p>Dipastikan barang di dalam perjalanan akan selalu aman dan terjaga dengan baik hingga ke tangan pelanggan.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="images/s4.png" alt="">
              </div>
              <div class="detail-box">
                <h5>Train Transport</h5>
                <p>Kami juga menyediakan pengiriman dengan menggunakan kereta untuk mempercepat pengiriman ke tangan pelanggan.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service section -->

  <!-- About section -->
  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>Gudang Selalu <span>Rapih</span></h2>
            </div>
            <p>
              Gudang kami adalah tempat yang mewujudkan ketertiban dan efisiensi dalam pengelolaan inventaris. Dengan tingkat organisasi yang luar biasa, kami memastikan bahwa setiap produk tersimpan dengan baik dan mudah diakses. Gudang yang selalu siap ini bukan hanya tempat penyimpanan, melainkan juga solusi modern yang membantu mengelola inventaris dengan baik. Ketepatan dan kebersihan gudang kami menjadi landasan yang kuat bagi pertumbuhan bisnis Anda, memungkinkan Anda untuk fokus pada hal-hal yang lebih penting. Dengan gudang yang tertata rapi, kami merapikan bisnis Anda, memberikan Anda ketenangan pikiran, dan memungkinkan Anda untuk mengoptimalkan produktivitas Anda. Kami adalah mitra yang andal untuk mengelola inventaris Anda dengan baik, memastikan bahwa stok Anda selalu siap digunakan untuk memenuhi kebutuhan pelanggan Anda.
            </p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about section -->

  <!-- Track section -->
  <section class="track_section layout_padding">
    <div class="track_bg_box">
      <img src="images/track-bg.jpg" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading_container">
            <h2>Deskripsi</h2>
          </div>
          <p>
            Gudang adalah fasilitas atau bangunan yang dirancang khusus untuk menyimpan, mengelola, dan mengatur barang atau bahan dalam jumlah besar. Ini adalah komponen penting dalam rantai pasokan dan pengelolaan inventaris dalam berbagai sektor, termasuk logistik, manufaktur, perdagangan, dan distribusi. Gudang seringkali dirancang dengan tata letak yang efisien untuk memaksimalkan ruang penyimpanan dan memudahkan pengambilan barang. Gudang modern sering dilengkapi dengan sistem teknologi seperti sistem manajemen inventaris otomatis dan pelacakan yang memungkinkan pemantauan dan pengelolaan yang akurat. Selain itu, gudang yang baik dirawat dan dikelola dengan ketat untuk memastikan kebersihan, keamanan, dan ketertiban. Ini menciptakan lingkungan yang mendukung efisiensi dalam proses pengiriman, pengambilan, dan distribusi barang, serta berperan penting dalam mendukung operasi bisnis yang sukses.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End track section -->

  <!-- Script section -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    @if (session()->has('loginberhasil'))
    Swal.fire({
      icon: 'success',
      title: 'Login Berhasil',
      text: '{{ session()->get('loginberhasil') }}'
    });
    @endif
  </script>

  <script>
    // Function to show the logout alert
    function showLogoutAlert() {
      Swal.fire({
        title: 'Logout',
        text: 'Apakah Anda yakin ingin logout?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirect or perform the logout action here
          window.location.href = '/logout'; // Replace with your logout URL as needed
        }
      });
    }
  </script>
</body>

</html>
