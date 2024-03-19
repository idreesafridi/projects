<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Login</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center pt-4">Login in <strong class="text-danger">Laravel</strong></h1>
        <hr>
        <div class="row py-2">
            <div class="col md-6">
                <div class="form-group">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email">Email</label>
                            <div class="input-group">
                                <input class="form-control" id="email" type="email" name="email"
                                    value="{{ old('email') }}" required autofocus>
                            </div>

                        </div>

                        <div>
                            <label class="" for="password">Password</label>
                            <input class="form-control" id="password" type="password" name="password" required
                                autocomplete="current-password">
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
