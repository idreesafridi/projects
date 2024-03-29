<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>


    <style>
        /* Custom CSS */
        html,
        body {
            height: 100%;
        }

        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .footer {
            margin-top: auto;
            width: 100%;
            background-color: #343a40;
            /* dark color */
            color: white;
        }
    </style>
    <title>Document</title>


</head>

<body style="background-color: #1b16165f">
    @include('layout.nav')
    <div class="wrapper">
        <div class="container">
            <h1 class="text-center pt-4">Feedback-Tool Relationship in <strong class="text-danger">Laravel</strong></h1>
            <hr>
            <div class="row py-2">
                <div class="col-md-6">
                    <h2><a href="{{ route('show.post') }}" class="btn btn-success">Add New Post</a></h2>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr id="tr_{{ $post->id }}">
                            <td scope="row">{{ $post->id }}</td>
                            <td scope="row">{{ $post->title }}</td>
                            <td scope="row">{{ $post->user->name }}</td>
                            <td scope="row">{{ $post->description }}</td>
                            <td scope="row">
                                {{-- 
                                <button class="btn btn-danger delete-post" data-post-id="{{ $post->id }}"
                                    data-delete-url="{{ route('posts.destroy', ['id' => $post->id]) }}">Delete</button> --}}
                                <a href="javascript:void(0)" class="btn btn-danger"
                                    onclick="deletepost({{ $post->id }})">delete</a>
                                {{-- <button onclick="openModal('{{ $post->id }}')">Add Comment</button> --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#myModal{{ $post->id }}">
                                    Add Comment
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal{{ $post->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Add Post</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form inside the modal -->
                                                <form action="{{ route('comments.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                                    <div class="mb-3">
                                                        <label for="post" class="form-label">Post</label>
                                                        <textarea class="form-control" id="body" name="body" required></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" id="closeModalBtn" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <a href="{{ route('comments.view', $post->id) }}"> <button class="btn btn-primary">View
                                        Comment</button> </a> --}}
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#commentModal" onclick="loadComments({{ $post->id }})">View
                                    Comments</button>
                                <div class="modal fade" id="commentModal" tabindex="-1" role="dialog"
                                    aria-labelledby="commentModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="row">
                                                    <div class="col">
                                                        <h5 class="modal-title" id="commentModalLabel">Comments</h5>
                                                    </div>
                                                    <div class="col text-end">
                                                        <button type="button" class="close" onclick="closeModal()"
                                                            data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-body" id="commentModalBody">
                                                <!-- Comments will be displayed here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
            {{ $posts->onEachside(1)->links() }}
        </div>
    </div>
    @include('layout.footer')


</body>


</html>
