@extends('layouts.main')

@section('title', $currentPage)

@section('content')
    <main>
        <div class="d-flex justify-content-center py-4">
            <div class="content">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link text-black" aria-current="page" href="/user/{{ $user->username }}/posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Saved</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Following</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Followers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/user/{{ $user->username }}/communities">Communities</a>
                    </li>
                </ul>
                <section class="communities">
                    @foreach ($communities as $community)
                    <div class="card mb-1">
                        <div class="card-body">
                            <a href="/r/{{ $community->name }}" class="text-decoration-none text-black">r/{{ $community->name }}</a>
                        </div>
                    </div>
                    @endforeach
                </section>
                <div class="d-flex flex-row justify-content-center">
                    {{ $communities->links() }}
                </div>
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
