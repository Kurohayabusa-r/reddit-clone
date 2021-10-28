@extends('layouts.main')

@section('title', $currentPage)

@section('content')
    <main>
        <div class="d-flex justify-content-center py-4">
            <div class="content">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Saved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Following</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Followers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Communities</a>
                    </li>
                </ul>
                <div class="filter">
                    <div class="card">
                        <button type="button" class="btn btn-outline-dark">New</button>
                        <button type="button" class="btn btn-outline-dark">Hot</button>
                        <button type="button" class="btn btn-outline-dark">Top</button>
                    </div>
                </div>
                <section class="posts">
                    @foreach ($posts as $post)
                    <div class="card">
                        <div class="votes">
                            <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-top-512.png"
                                alt="">
                            <div class="score">123</div>
                            <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-bottom-512.png"
                                alt="">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/r/{{ $post->community->slug }}/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><a href="/r/{{ $post->community->slug }}">r/{{$post->community->slug}}</a></h6>
                            <h6 class="card-subtitle mb-2 text-muted">Posted by <a href="/user/{{ $post->user->username }}/posts">{{ $post->user->username }}</a></h6>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/r/{{ $post->community->slug }}/posts/{{ $post->slug }}" class="card-link">Card link</a>
                        </div>
                    </div>
                    @endforeach
                </section>
            </div>
            <div class="sidebar">
                <aside>
                    <div class="card shadow-sm">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                                class="profile-picture rounded-circle mt-2 mb-3 shadow" alt="">
                            <h5 class="card-title">{{$user->username}}</h5>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Following
                                    <span class="badge bg-primary rounded-pill">100</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Followers
                                    <span class="badge bg-primary rounded-pill">200</span>
                                </li>
                            </ul>
                            <a href="./edit-profile.html" class="btn btn-primary mt-3 text-decoration-none text-white">Edit
                                User
                                Profile</a>
                        </div>
                    </div>
                </aside>
                @include('partials.footer')
            </div>
        </div>
    </main>
@endsection
