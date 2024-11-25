<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AthleteZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
</head>
<body>
    {{-- NAVBAR --}}
    @include('Unavbar')

    {{-- Cart Section --}}
    <div class="container mt-5">
        <div class="row">
            <!-- Bag Section -->
            <div class="col-md-8">
                <h2 class="mb-4">Bag</h2>
                <!-- Item 1 -->
                <div class="d-flex mb-4 border-bottom pb-3">
                    <div>
                        <img src="{{ asset('img/cart2.svg') }}" alt="Nike Court Vision" class="me-3" style="width: 150px; height: auto;">
                        <div class="d-flex align-items-center justify-content-between mt-3" style="width: 100px; border: 1px solid #ddd; border-radius: 30px; padding: 5px;">
                            <button class="btn btn-outline-secondary btn-sm" style="border: none;">-</button>
                            <span style="font-weight: bold; font-size: 16px;">1</span>
                            <button class="btn btn-outline-secondary btn-sm" style="border: none;">+</button>
                        </div>
                    </div>
                    <div>
                        <h4 class="fw-bold">Nike Court Vision Low Next Nature</h4>
                        <p class="mb-1">Men's Shoes</p>
                        <p class="mb-1">White/Burgundy Crush</p>
                        <p>Size <a href="#" class="text-decoration-underline" style="color: #000000">45.5</a></p>
                    </div>
                    <div class="ms-auto text-end">
                        <p class="fw-bold">Rp 799.000,00</p>
                    </div>
                </div>
    
                <!-- Item 2 -->
                <div class="d-flex mb-4 border-bottom pb-3">
                    <div>
                        <img src="{{ asset('img/cart1.svg') }}" alt="Nike Lunar Roam" class="me-3" style="width: 150px; height: auto;">
                        <div class="d-flex align-items-center justify-content-between mt-3" style="width: 100px; border: 1px solid #ddd; border-radius: 30px; padding: 5px;">
                            <button class="btn btn-outline-secondary btn-sm" style="border: none;">-</button>
                            <span style="font-weight: bold; font-size: 16px;">1</span>
                            <button class="btn btn-outline-secondary btn-sm" style="border: none;">+</button>
                        </div>                      
                    </div>
                    <div>
                        <h4 class="fw-bold">Nike Lunar Roam</h4>
                        <p class="mb-1">Men's Shoes</p>
                        <p class="mb-1">Summit White/Coconut Milk/Khaki/Black</p>
                        <p>Size <a href="#" class="text-decoration-underline" style="color: #000000">40.5</a></p>
                    </div>
                    <div class="ms-auto text-end">
                        <p class="fw-bold">Rp 2.379.000,00</p>
                    </div>
                </div>
            </div>
    
            <!-- Summary Section -->
            <div class="col-md-4">
                <h2 class="mb-4 ms-3">Summary</h2>
                <div class="p-3">
                    <div class="d-flex justify-content-between mb-3">
                        <p>Subtotal</p>
                        <p class="fw-bold">Rp 3.178.000,00</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p>Estimated Delivery & Handling</p>
                        <p class="fw-bold">Free</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p>Estimated Duties and Taxes</p>
                        <p class="fw-bold">-</p>
                    </div>
                    <div class="d-flex justify-content-between border-top pt-3">
                        <p>Total</p>
                        <p class="fw-bold">Rp 3.178.000,00</p>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-summary w-100 mb-2">Guest Checkout</button>
                        <button class="btn btn-summary w-100">Member Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    {{-- Also Like Section --}}
    <section id="NewArrival">
        <div class="container-fluid">
            <h5>You Might Also Like</h5>
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
                <p>Hak Cipta © 2024 AthleteZone Semua hak dilindungi</p>
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
