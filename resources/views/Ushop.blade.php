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
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container kontainer">
            <div class="d-flex align-items-center">
                <img src="{{ asset('img/mini-logo.svg') }}" style="height: 40px; width: 60px">
                <p class="navbar-brand AZ">AthleteZone</p>
            </div>
            <div class="d-flex">
                <div>
                    <form class="d-flex position-relative" role="search">
                        <input class="form-control search-input" type="search" placeholder="Search.." aria-label="Search"/>
                        <img src="{{ asset('img/Search-icon.svg') }}" alt="Search Icon" class="search-icon" />
                    </form>
                </div>
                <div class="ms-5">
                    <img src="{{ asset('img/Shopping Chart.svg') }}" style="height: 40px; width: 37px;">
                </div>
                <div class="ms-5">
                    <img src="{{ asset('img/User.svg') }}" style="height: 45px; width: 43px;">
                </div>
            </div>
        </div>
    </nav>

    {{-- SIDEBAR --}}
    {{-- <section>
        <table class="sidebar">
            <tr>
                <td>Categories</td>                
            </tr>
            <tr>
                <td>Shoes</td>
            </tr>
            <tr>
                <td>Shoes</td>
            </tr>
        </table>
    </section> --}}
    <div class="row g-0" style="width: 100%; height: 100%" >
        <div class="col-md-3 d-flex flex-column align-items-center" id="sidebar">
            <h5>Categories</h5>
            <p>Shoes</p>
            <p>Jerseys</p>
            <p>Socks</p>
            <p>Pants</p>
            <p>Caps</p>
        </div>

        <div class="col-md-3">

        </div>
    </div>

</body>
</html>