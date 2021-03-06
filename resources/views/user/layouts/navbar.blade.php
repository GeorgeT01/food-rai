<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ url('/') }}">Food Rai</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            @if (!Auth::guard('store')->check())
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fas fa-store"></i> Create Store</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text-light" href="#"><i class="fas fa-store"></i> My Store</a>
                </li>
            @endif
            @if (Auth::guard('web')->check())

            <li class="nav-item dropdown">
                <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell"></i> <span class="badge badge-pill badge-warning">1</span>
                </a>
                <div class="dropdown-menu shadow-sm dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"> Order Completed</a>
                </div>
            </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->fullName() }}
                    </a>
                    <div class="dropdown-menu shadow-sm dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><i class="fas fa-history"></i> Order History</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('user.register') }}"><i class="fas fa-user-plus"></i>
                        Regiester</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="{{ route('user.login') }}"><i class="fas fa-sign-in-alt"></i>
                        Login</a>
                </li>
            @endif




        </ul>
    </div>
</nav>
