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

  <title>Inventory Gudang</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="csss/bootstraps.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="csss/styles.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="csss/responsives.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="imagess/logo.png" alt="" />
            <span>
              Inventory gudang 
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="work.html">Work </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="category.html"> Category </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="/logout">
                <span>
                  Login
                </span>
              </a>
              
            </div>
          </div>
          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="carousel_btn-container">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
         
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Selamat <br>
                      Datang  <br>
                      user  
                    </h1>
                    
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="imagess/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <h1>
                      Selamat <br>
                      Datang <br>
                      admin
                    </h1>
                    
                    
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="imagess/s1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
         
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- experience section -->

  <section class="experience_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="img-box">
            <img src="imagess/experience-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
            Harap Login Terlebih Dahulu :)
              </h2>
            </div>
            <p>
              Pengertian login adalah proses masuk ke jaringan komputer dengan memasukkan identitas akun minimal terdiri dari username/akun pengguna dan password untuk mendapatkan hak akses
            </p>
            <div class="btn-box">
              <a href="/logout" class="btn-1">
                login
              </a>
              <a onclick="goBack()" class="btn-2">
                keluar
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end experience section -->

  <!-- category section -->

  <section class="category_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Category
        </h2>
      </div>
      <div class="category_container">
        <div class="box">
          <div class="img-box">
            <img src="imagess/c1.png"  width="100" height="80" alt="Gambar Kecil">
            
          </div>
          <div class="detail-box">
            <h5>
              Barang
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="imagess/c2.png" width="100" height="80" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Inventory
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="imagess/c3.png" width="100" height="80" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Gudang
            </h5>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end category section -->

  

  <!-- freelance section -->

  <section class="freelance_section ">
    <div id="accordion">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Daftar Gudang
                </h2>
              </div>
              <div class="tab_container">
                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <div class="img-box">
                    <img src="imagess/c3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                     gudang
                    </h5>
                    <h3>
                      Pos logistic
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="img-box">
                    <img src="imagess/c3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      gudang
                    </h5>
                    <h3>
                      J&T Express
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="img-box">
                    <img src="imagess/c3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      gudang
                    </h5>
                    <h3>
                      Fedex
                    </h3>
                  </div>
                </div>
                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <div class="img-box">
                    <img src="imagess/c3.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                     gudang
                    </h5>
                    <h3>
                      DHL
                    </h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img-box">
                <img src="imagess/2.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img-box">
                <img src="imagess/3.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img-box">
                <img src="imagess/4.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img-box">
                <img src="imagess/5.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end freelance section -->


  

  


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>

  <script>
    function goBack() {
        window.history.back();
    }
</script>

</body>
</body>

</html>