{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Document</title>


</head>

<body style="background-color: #1b16165f">
    @include('layout.nav')

    <div class="wrapper">
        <div class="container ">


            <h1 class="text-center pt-4">Comment View <strong class="text-danger">Laravel</strong></h1>
            <hr>
            <div class="row">
                <div>
                    <h2><a href="{{ route('home') }}" class="btn btn-success">Back</a></h2>
                </div>
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Comment</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td scope="row">{{ $comment->id }}</td>
                                        <td scope="row">{{ $comment->user->name }}</td>
                                        <td scope="row">{{ $comment->post->title }}</td>
                                        <td scope="row">{{ $comment->post->description }}</td>
                                        <td scope="row">{{ $comment->content }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex mt-4">
                            {{ $comments->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')

</body>

</html> --}}
