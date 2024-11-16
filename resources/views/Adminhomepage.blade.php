<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AthleteZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="image-logo">
            <a class="navbar-brand ms-2" href="#">AthleteZone</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <img src="{{ asset('img/Buy.svg') }}" alt="cart" class="image-cart">
                <img src="{{ asset('img/User.svg') }}" alt="user" class="image-profile ms-3">
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="text-center mt-2">
        <img src="{{ asset('img/imagehero.svg') }}" alt="hero" class="hero-img">
        <div class="hero-content">
            <h1 class="hero-title">Move Your Body, Unlock Your Potential!</h1>
            <p class="hero-subtitle">Start your journey with AthleteZone</p>
            <a href="#" class="btn btn-primary">Shop</a>
        </div>
    </section>

    {{-- New Arrival Section --}}
    <section id="NewArrival">
        <div class="container-fluid">
            <h5>New Arrival Just Landed</h5>
            <div class="row text-center">
                {{-- Kartu Produk Pertama --}}
                <div class="col-md-4">
                    <div class="card-fitur d-flex justify-content-center align-items-center">
                        <img class="sepatu1" src="{{ asset('/img/sepatu3.svg') }}" alt="">
                    </div>
                    <div class="info-card text-start mt-4">
                        <h4>Nike Air Max 1 Essential Premium</h4>
                        <p class="jenisSepatu">Men’s Shoes</p>
                        <p class="hargaSepatu">Rp 1,749,000</p>
                    </div>
                </div>
                
                {{-- Kartu Produk Kedua --}}
                <div class="col-md-4">
                    <div class="card-fitur d-flex justify-content-center align-items-center">
                        <img src="{{ asset('/img/sepatu2.svg') }}" alt="">
                    </div>
                    <div class="info-card text-start mt-4">
                        <h4>G.T Hustle Academy EP</h4>
                        <p class="jenisSepatu">Women’s Shoes</p>
                        <p class="hargaSepatu">Rp 2,349,000</p>
                    </div>
                </div>
                
                {{-- Kartu Produk Ketiga --}}
                <div class="col-md-4">
                    <div class="card-fitur d-flex justify-content-center align-items-center">
                        <img src="{{ asset('/img/sepatu1.svg') }}" alt="">
                    </div>
                    <div class="info-card text-start mt-4">
                        <h4>Nike Air Max 1 Essential Voizer</h4>
                        <p class="jenisSepatu">Men’s Shoes</p>
                        <p class="hargaSepatu">Rp 2,800,000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Classic Spotlight Section -->
    <section id="classic" class="mt-5 overflow-hidden w-100">
        <div class="container-fluid px-0">
          <div class="position-relative">
            <h5>Classics Spotlight</h5>
            <div class="row mx-0">
              <div class="col-12 d-flex justify-content-center">
                <div class="card-fitur me-3 position-relative">
                  <img src="{{ asset('/img/gambar1.svg') }}" alt="" />
                  <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100"></div>
                </div>
                <div class="card-fitur me-3 position-relative">
                  <img src="{{ asset('/img/gambar2.svg') }}" alt="" />
                  <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100"></div>
                </div>
                <div class="card-fitur me-3 position-relative">
                  <img src="{{ asset('/img/gambar3.svg') }}" alt="" />
                  <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100"></div>
                </div>
                <div class="card-fitur me-3 position-relative">
                  <img src="{{ asset('/img/gambar4.svg') }}" alt="" />
                  <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100"></div>
                </div>
                <div class="card-fitur position-relative">
                  <img src="{{ asset('/img/gambar5baru.svg') }}" alt="" />
                  <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100"></div>
                </div>
              </div>
            </div>
            <button class="arrow-left position-absolute start-0 top-50 translate-middle-y">
              <img src="{{ asset('/img/arrow-left.svg') }}" alt="" />
            </button>
            <button class="arrow-right position-absolute end-0 top-50 translate-middle-y">
              <img src="{{ asset('/img/arrow-right.svg') }}" alt="" />
            </button>
          </div>
        </div>
    </section>
      
    

    <!-- Dont Miss Section -->
    <section id="hero" class="mt-2">
        <div class="container">
          <h5 class="hero-heading">Don't Miss</h5>
          <img src="{{ asset('img/dontmiss.svg') }}" alt="hero" class="hero-img">
          <div class="hero-content">
            <h1 class="hero-title">Equip Every Step Toward Success!</h1>
            <a href="#" class="btn btn-primary">Shop</a>
          </div>
        </div>
    </section>
      

    <!-- Footer -->
    <footer id="Footer">
        <div class="container-fluid">
            <div class="container">
            <div class="row text-white py-5">
                <div class="col-md-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('/img/mini-logo.svg') }}" alt="Logo" class="me-2" />
                    <span>AthleteZone</span>
                </div>
                <p>Hak Cipta © 2024 CarbonStockID. Semua hak dilindungi</p>
                <div class="social-links d-flex">
                    <div class="circle-icon position-relative me-2">
                    <a href="https://instagram.com"><img src="{{ asset('/img/Instagram.svg') }}" alt="Instagram" class="position-absolute top-50 start-50 translate-middle" /></a>
                    </div>
                    <div class="circle-icon position-relative me-2">
                    <a href="https://google.com"><img src="{{ asset('/img/Google.svg') }}" alt="Google" class="position-absolute top-50 start-50 translate-middle" /></a>
                    </div>
                    <div class="circle-icon position-relative me-2">
                    <a href="https://linkedin.com"><img src="{{ asset('/img/Linkedin.svg') }}" alt="LinkedIn" class="position-absolute top-50 start-50 translate-middle" /></a>
                    </div>
                    <div class="circle-icon position-relative">
                    <a href="https://youtube.com"><img src="{{ asset('/img/Youtube.svg') }}" alt="YouTube" class="position-absolute top-50 start-50 translate-middle" /></a>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                <h5>Navigasi</h5>
                <ul class="list-navigasi">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Fitur</a></li>
                    <li><a href="#">Pertanyaan</a></li>
                    <li><a href="#">Tentang Kami</a></li>
                </ul>
                </div>
                <div class="col-md-4">
                <h5>Kontak</h5>
                <ul class="list-kontak">
                    <div class="d-flex align-items-center">
                    <img src="{{ asset('/img/TelephoneFill.svg') }}" alt="Logo" class="me-2" />
                    <li><i class="fa fa-phone"></i> +62 813-5800-8183</li>
                    </div>
                    <div class="d-flex align-items-center">
                    <img src="{{ asset('/img/EnvelopeFill.svg') }}" alt="Logo" class="me-2" />
                    <li><i class="fa fa-envelope"></i> AthleteZone@gmail.com</li>
                    </div>
                    <div class="d-flex align-items-center">
                    <img src="{{ asset('/img/GeoAltFill.svg') }}" alt="Logo" class="me-2" />
                    <li><i class="fa fa-map-marker"></i> Telkom University, Kabupaten Bandung, Jawa Barat 40257</li>
                    </div>
                </ul>
                </div>
                <div class="col-md-1">
                <div class="circle-scroll position-relative">
                    <a href="#"><img src="{{ asset('/img/ChevronUp.svg') }}" alt="chevronup" class="position-absolute top-50 start-50 translate-middle" /></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </footer>
</body>
</html>
