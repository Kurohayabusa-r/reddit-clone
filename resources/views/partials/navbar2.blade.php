<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="@auth / @endauth @guest /r/popular @endguest" class="navbar-brand">
                <img src="https://cdn3.iconfinder.com/data/icons/2018-social-media-logotypes/1000/2018_social_media_popular_app_logo_reddit-512.png"
                    alt="" width="30" height="30" class="d-inline-block align-text-top">
                reddit
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <form class="ms-auto">
                    <input class="form-control" type="search" placeholder={{__('Search')  }} aria-label="Search">
                </form>
                <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a href="/r/popular" class="nav-link {{(request()->is('r/popular')) ? 'active' : ''}}">Popular</a>
                    </li>
                    <li class="nav-item">
                        <a href="/communities" class="nav-link {{(request()->is('communities')) ? 'active' : ''}}">Communities</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/uploads/avatars/{{ auth()->user()->avatar }}" class="profile-picture rounded-circle me-2" alt="">
                        <span> {{ auth()->user()->username }} </span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/user/{{ auth()->user()->username }}/edit">Edit User Profile</a></li>
                            <li><a class="dropdown-item" href="/user/{{ auth()->user()->username }}/posts">My Posts</a></li>
                            <li><a class="dropdown-item" href="#">Saved Posts</a></li>
                            <li><a class="dropdown-item" href="/user/{{ auth()->user()->username }}/communities">My Communities</a></li>
                            <li><a class="dropdown-item" href="/create-community">Create Community</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Notifications</a></li>
                            <li><a class="dropdown-item" href="#">Messages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        <img class="flag-icons" src="{{ __('/icons/'.app()->getLocale().'.png') }}"> 
                            
                    </a>
                    <div class="dropdown-menu">
                        @if(app()->getLocale()=='id')
                            <a href ="{{url('locale/en')}}" class="dropdown-item"><img src="{{('/icons/en.png')}}">{{__('english') }}</a>
                        @endif
                        @if(app()->getLocale()=='en')
                            <a href ="{{ url('locale/id') }}" class="dropdown-item"><img src="{{('/icons/id.png') }}">{{__('indonesian') }}</a>
                        @endif
                        
                    </div>
                </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{(request()->is('login')) ? 'active' : ''}}">{{__('Login')  }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="/signup" class="nav-link {{(request()->is('signup')) ? 'active' : ''}}">{{__('Sign Up')  }}</a>
                    </li>
                    
                @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
