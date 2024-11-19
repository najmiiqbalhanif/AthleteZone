<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/loginregister.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row rounded-5 p-3 bg-white">
            <div class="col-md-6 my-auto p-5">
                <h3 class="judul-login">Welcome Back</h3>
                <p style="color: #00000081;">Not registered yet? <a href="{{ url('register') }}" style="text-decoration: none; color: black;">Sign up</a></p>
                <form method="POST">
                    @csrf
                    <div class="input-email-register mb-2">
                        <label for="email" class="ms-1" style="color: #00000081;">Email</label>
                        <input type="text" id="email" name="email" class="form-control input-login" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                    </div>
                    <div class="input-password-register mb-2">
                        <label for="password" class="ms-1" style="color: #00000081;">Password</label>
                        <input type="password" id="password" name="password" class="form-control input-login" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                    </div>
                    <button type="submit" class="btn btn-signIn mt-3">Sign In</button>
                </form>
            </div>
            
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0b4575;">
                <div class="featured-image mb-3">
                    <img src="{{ asset('img/mini-logo.svg') }}" class="img-fluid" style="width: 200px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                <small class="text-white text-wrap text-center" style="width: 17rem; font-family: 'Courier New', Courier, monospace;">Join experienced Designers on this platform.</small>
            </div>
        </div>
    </div>
    <div>
        <br>
        <br>
    </div>
</body>
</html>
