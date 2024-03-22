<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Register Form</title>
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
        <div class="card">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center mb-4">Register Form</h2>
                    <form action="{{ route('users.register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" id="name" type="text" name="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input class="form-control" id="password" type="password" name="password" required>
                        </div>

                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <span>Already have an Account? <a href="{{ Route('login') }}">Login</a></span>
                    </div>

                </div>
            </div>
        </div>
    </div>



</body>

</html>
