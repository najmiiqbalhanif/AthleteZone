<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AthleteZone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Uproduct.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    @include('Unavbar')

    <div class="container d-flex mt-3">
        {{-- Gambar kecil di sebelah kiri --}}
        <div class="secondary-image">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            <img class="sec-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
        </div>

        {{-- Gambar utama dari produk --}}
        <div class="primary-image ms-3 me-3">
            <img class="prim-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
        </div>

        {{-- Deskripsi konten di sebelah kanan --}}
        <div class="desc-content">
            <h4>Nike Air Max 1 Essential Premium</h4>
            <h5 style="color: #6C7581">Men's Shoes</h5>
            <p>Rp 1,749,000</p>
            <div class="model-image d-flex">
                <img class="mod-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
                <img class="mod-image" src="{{ asset('img/sepatu1.svg') }}" alt="">
            </div>
            <p style="margin-top: 24px">Select Size</p>
            <div class="size-product d-flex">
                <h5 class="size-prod">EU 41</h5>
                <h5 class="size-prod">EU 42</h5>
                <h5 class="size-prod">EU 42.5</h5>
                <h5 class="size-prod">EU 43</h5>
                <h5 class="size-prod">EU 44</h5>
                <h5 class="size-prod">EU 44.5</h5>
                <h5 class="size-prod">EU 45</h5>
            </div>
            <div class="button-addnfav">
                <button type="submit" class="btn btn-primary">Add to Chart</button>
                <button type="submit" class="btn btn-dark">Favourite</button>
            </div>
        </div>
    </div>
</body>