<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AthleteZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Ushop.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('Unavbar')

    <div class="row g-0" style="width: 100%; height: 100%">
        {{-- SIDEBAR --}}
        <div class="col-md-3 d-flex flex-column align-items-center" id="sidebar">
            <h5>Categories</h5>
            <p class="category-link" data-category="shoes" >Shoes</p>
            <p class="category-link" data-category="jerseys">Jerseys</p>
            <p class="category-link" data-category="socks">Socks</p>
            <p class="category-link" data-category="pants">Pants</p>
            <p class="category-link" data-category="caps">Caps</p>
        </div>
        <div class="col-md-9">
            {{-- Konten Sepatu --}}
            <div class="content-category shoes">
                <div class="row g-0 mb-2 pt-4" style="padding-left: 350px; width: 99vw; height: fit-content"> 
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="/Uproduct" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>

            {{-- Konten Jerseys --}}
            <div class="content-category jerseys" style="display: none">
                <div class="row g-0 mb-2 pt-4" style="padding-left: 350px; width: 99vw; height: fit-content" >
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>

            {{-- Konten Socks --}}
            <div class="content-category socks" style="display: none">
                <div class="row g-0 mb-2 pt-4" style="padding-left: 350px; width: 99vw; height: fit-content" >
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>

            {{-- Konten Pants --}}
            <div class="content-category pants" style="display: none">
                <div class="row g-0 mb-2 pt-4" style="padding-left: 350px; width: 99vw; height: fit-content"> 
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>

            {{-- Konten Caps --}}
            <div class="content-category caps" style="display: none">
                <div class="row g-0 mb-2 pt-4" style="padding-left: 350px; width: 99vw; height: fit-content"> 
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width:20rem;">
                            <a href="" style="text-decoration: none; color: black">
                                <img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top">
                                <div class="card-body">
                                    <p class="card-text">Nike Air Max 1 Essential Premium</p>
                                    <p style="color: #6C7581">Men's Shoes</p>
                                    <p>Rp1,749,000</p>
                                </div>
                            </a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/Ushop.js') }}"></script>
</body>
</html>