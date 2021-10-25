<header>
    <nav class="navbar fixed-top navbar-expand-md navbar-light">
        <div class="nav-left">
            <a href="/" class="navbar-brand">
                <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_reddit-512.png"
                    alt="" width="30" height="30" class="d-inline-block align-text-top">
                reddit
            </a>
        </div>

        <div class="nav-center">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
        <div class="nav-right d-flex align-items-center">
            @auth
                <a href="" class="btn btn-primary text-decoration-none text-white">Popular</a>
                <a href="" class="btn btn-secondary text-decoration-none text-white">Communities</a>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                    class="profile-picture rounded-circle me-2" alt="">
                    Username
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./edit-profile.html">Edit User Profile</a></li>
                    <li><a class="dropdown-item" href="./profile.html">My Posts</a></li>
                    <li><a class="dropdown-item" href="#">Saved Posts</a></li>
                    <li><a class="dropdown-item" href="#">My Communities</a></li>
                    <li><a class="dropdown-item" href="#">Create Community</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Notifications</a></li>
                    <li><a class="dropdown-item" href="#">Messages</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            @endauth
            @guest
                <a href="{{url('/login')}}" class="btn btn-primary text-decoration-none text-white">Log In</a>
                <a href="{{url('/signup')}}" class="btn btn-secondary text-decoration-none text-white">Sign Up</a>
            @endguest
        </div>
    </div>
    </nav>
</header>
