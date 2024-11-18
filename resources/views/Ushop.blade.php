<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
            <p>Shoes</p>
            <p>Jerseys</p>
            <p>Socks</p>
            <p>Pants</p>
            <p>Caps</p>
        </div>
        <div class="col-md-9">
            {{-- Konten Sepatu --}}
            <div class="row g-0 mb- pt-4" style="padding-left: 350px; width: 100vw; height: fit-content" >
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <a href=""><img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Premium</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp1,749,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <a href=""><img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">G.T Hustle Academy EP</p>
                            <p style="color: #6C7581">Women's Shoes</p>
                            <p>Rp2,349,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <a href=""><img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Voizer</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp2,800,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Premium</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp1,749,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">G.T Hustle Academy EP</p>
                            <p style="color: #6C7581">Women's Shoes</p>
                            <p>Rp2,349,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Voizer</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp2,800,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Premium</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp1,749,000</p>
                        </div>
                    </div>
                </div>  
            </div>

            {{-- Konten Jerseys --}}
            <div class="row g-0 mb-5 pt-0" style="padding-left: 350px; width: 100vw; height: fit-content" >
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <a href=""><img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Premium</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp1,749,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <a href=""><img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">G.T Hustle Academy EP</p>
                            <p style="color: #6C7581">Women's Shoes</p>
                            <p>Rp2,349,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 20rem;">
                        <a href=""><img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Voizer</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp2,800,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Premium</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp1,749,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu2.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">G.T Hustle Academy EP</p>
                            <p style="color: #6C7581">Women's Shoes</p>
                            <p>Rp2,349,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu3.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Voizer</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp2,800,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width:20rem;">
                        <a href=""><img src="{{ asset('img/sepatu1.svg') }}" class="card-img-top"></a>
                        <div class="card-body">
                            <p class="card-text">Nike Air Max 1 Essential Premium</p>
                            <p style="color: #6C7581">Men's Shoes</p>
                            <p>Rp1,749,000</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>