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

    {{-- NAVBAR --}}
    @include('Anavbar')

    {{-- Dashboard Section --}}
    <section id="dashboard">
        <h1 class="dashboard-title">Dashboard</h1>
        <div id="sections" class="row sections mt-2 ms-3 hidden">
            <div class="col-md-2 section">
                <h2>Order</h2>
                <ul>
                    <li>Current Orders</li>
                    <li>Order History</li>
                    <li>Returns & Refunds</li>
                </ul>
            </div>
            <div class="col-md-2 section">
                <h2>Library</h2>
                <ul>
                    <li>Item Library</li>
                    <li>Categories</li>
                </ul>
            </div>
            <div class="col-md-2 section">
                <h2>Reports</h2>
                <ul>
                    <li>Sales</li>
                    <li>Transaction</li>
                </ul>
            </div>
            <div class="col-md-2 section">
                <h2>Reviews</h2>
                <ul>
                    <li>Product Reviews</li>
                    <li>Feedback</li>
                </ul>
            </div>
            <div class="col-md-2 section">
                <h2>User</h2>
                <ul>
                    <li>Staff Management</li>
                    <li>Customer List</li>
                </ul>
            </div>
        </div>        
    </section>


    {{-- Hero Section Admin --}}
    <section id="herobaru" class="text-center">
        <div class="hero-image-wrapper position-relative">
            <img src="{{ asset('img/imagehero.svg') }}" alt="hero">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="isi position-absolute top-50 start-50 translate-middle">
                    <form id="uploadPhotoForm" enctype="multipart/form-data" style="display: none;">
                        <input type="file" id="photoInput" name="photo" accept="image/*">
                    </form>
                    <a href="#" class="btn btn-hero" id="uploadPhotoBtn">Upload photo</a>
                    <a href="#" class="btn btn-hero" id="removePhotoBtn">Remove photo</a>
                </div>
            </div>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Move Your Body, Unlock Your Potential!</h1>
            <p class="hero-subtitle">Start your journey with AthleteZone</p>
            <a href="#" class="btn btn-primary">Shop</a>
        </div>
    </section>


    {{-- New Arrival Section --}}
    <section id="NewArrival">
        <div class="container-fluid">
            <div class="row mb-4 d-flex align-items-center">
                <div class="col-10">
                    <h5>New Arrival Just Landed</h5>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <h4 class="add-more-text">add more..</h4>
                    <button class="button-fitur ms-2">
                        <img src="{{ asset('/img/Label.svg') }}" alt="" class="arrow-icon" />
                    </button>
                </div>                
            </div>
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
            <div class="row mb-4 d-flex kanan-classic">
                <div class="col-10">
                    <h5>New Arrival Just Landed</h5>
                </div>
                <div class="col-2 d-flex justify-content-end align-items-center">
                    <h4 class="add-more-text">add more..</h4>
                    <button class="button-fitur ms-2">
                        <img src="{{ asset('/img/Label.svg') }}" alt="" class="arrow-icon" />
                    </button>
                </div>                
            </div>
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
    <section id="herobaru" class="text-center mt-2">
        <h5 class="dontmiss-heading">Don't Miss</h5>
        <div class="hero-image-wrapper position-relative">
            <img src="{{ asset('img/dontmiss.svg') }}" alt="hero">
            <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
                <div class="isi position-absolute top-50 start-50 translate-middle">
                    <form id="dontMissUploadForm" enctype="multipart/form-data" style="display: none;">
                        <input type="file" id="dontMissPhotoInput" name="photo" accept="image/*">
                    </form>
                    <a href="#" class="btn btn-hero" id="dontMissUploadPhotoBtn">Upload photo</a>
                    <a href="#" class="btn btn-hero" id="dontMissRemovePhotoBtn">Remove photo</a>
                </div>
            </div>
        </div>
        <div class="hero-content">
            <h1 class="hero-title">Equip Every Step Toward Success!</h1>
            <a href="#" class="btn btn-primary">Shop</a>
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
                <p>Hak Cipta © 2024 AthleteZone. Semua hak dilindungi</p>
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

        <script src="{{ asset('js/Ahomepage.js') }}"></script>
</body>
</html>
