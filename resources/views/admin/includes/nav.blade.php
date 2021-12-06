<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">My Portfolio | Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/admin-dashboard')  }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/user')  }}">Editar Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout-user') }}" tabindex="-1">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>