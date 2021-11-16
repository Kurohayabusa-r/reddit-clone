@extends('layouts.main')

@section('title', $currentPage)

@section('content')
<main>
    <div class="d-flex justify-content-center py-4">
        <div class="content">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link text-black" aria-current="page"
                        href="/user/{{ $user->username }}/posts">Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="#">Saved</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="/user/{{ $user->username }}/following">Following</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/user/{{ $user->username }}/followers">Followers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="/user/{{ $user->username }}/communities">Communities</a>
                </li>
            </ul>
            <section class="communities">
                @foreach ($followers as $follower)
                <div class="card mb-1">
                    <div class="card-body">
                        <a href="/user/{{ $follower->username }}/posts" class="text-decoration-none text-black">{{
                            $follower->username }}</a>
                    </div>
                </div>
                @endforeach
            </section>
            <div class="d-flex flex-row justify-content-center">
                {{ $followers->links() }}
            </div>
        </div>
        <div class="sidebar">
            <aside>
                @include('partials.userDetails')
            </aside>
            @include('partials.footer')
        </div>
    </div>

</main>
@endsection
