@extends('layouts.main')

@section('title', $currentPage)

@section('content')
<main>
    <div class="d-flex justify-content-center py-4">
        <div class="content">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/user/{{ $user->username }}/posts">Posts</a>
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
                    <a class="nav-link text-black" href="/user/{{ $user->username }}/followers">Followers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="/user/{{ $user->username }}/communities">Communities</a>
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
                @foreach ($user->posts as $post)
                <div class="card">
                    <div class="votes">
                        <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-top-512.png"
                            alt="">
                        <div class="score">123</div>
                        <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-bottom-512.png"
                            alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="/r/{{ $post->community->name }}/posts/{{ $post->slug }}">{{
                                $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><a
                                href="/r/{{ $post->community->name }}">r/{{$post->community->name}}</a></h6>
                        <h6 class="card-subtitle mb-2 text-muted">Posted by <a
                                href="/user/{{ $post->user->username }}/posts">{{ $post->user->username }}</a>
                            {{$post->created_at->diffForHumans()}}</h6>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/r/{{ $post->community->name }}/posts/{{ $post->slug }}" class="card-link">Card
                            link</a>
                    </div>
                </div>
                @endforeach
            </section>
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
