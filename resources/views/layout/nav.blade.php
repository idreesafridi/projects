<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

    <div class="container-fluid ">
        <a class="btn btn-dark" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
        <a class="btn btn-dark" href="#"><i class="fa fa-fw fa-envelope"></i> Contact</a>
        <a class="btn btn-dark" href="#"><i class="fa fa-fw fa-address-card-o"></i> About</a>
        <!-- Button for toggling navigation -->
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-fw fa-user"></i>
                {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid justify-content-end">
        <div class="form-group">
            <form method="get" action=" \search">
                <div class="input-group">
                    <input class="form-control" name="search" placeholder="Search...">
                    <button type="submit" class="btn btn-dark"> <i class="fa fa-fw fa-search"></i> Search</button>
                </div>
            </form>
        </div>
    </div>
</nav>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
