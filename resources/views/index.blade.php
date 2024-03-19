<!DOCTYPE html>
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

    <div class="container">
        <h1 class="text-center pt-4">Feedback-Tool Relationship in <strong class="text-danger">Laravel</strong></h1>
        <hr>
        <div class="row py-2">
            <div class="col-md-6">
                <h2><a href="" class="btn btn-success">Add New Post</a></h2>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <form method="get" action=" \search">
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search...">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->onEachside(1)->links() }}

    </div>

</body>

</html>
