<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Login Form</title>
    <style>
        .card {
            width: 550px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background: #ffffff5f;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>


<body style="background-color: #1b16165f">


    <div class="container mt-5">
        <div class="card" id="">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Login Form</h2>
                    <form method="POST" action="{{ route('user.login') }}">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input class="form-control" id="email" type="email" name="email"
                                value="{{ old('email') }}" required autofocus>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" id="password" type="password" name="password" required
                                autocomplete="current-password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <div class="text-center mt-3">
                        <span>Don't have an account? <a href="{{ Route('register') }}">Sign Up</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
