@extends('layouts.main')

@section('title', $currentPage)

@section('content')
<main>
    <div class="d-flex justify-content-center py-4">
        <div class="content">
            <section class="post">
                <article class="card">
                    <div class="votes">
                        <form action="" method="POST">
                        @csrf
                        <button type="button" class="btn btn-outline-success"><i class="fas fa-chevron-up"></i></button>
                    <form>
                        <div class="score">123</div>
                    <form action="" method="POST">
                    @csrf
                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-chevron-down"></i></button>
                    <form>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#/r/{{ $community->name }}/posts/{{ $post->slug }}">{{
                                $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Posted by <a
                                href="/user/{{ $post->user->username }}/posts">{{ $post->user->username }}</a>
                            {{$post->created_at->diffForHumans()}}</h6>
                        <p class="card-text">{{ $post->body }}</p>
                    </div>
                </article>
            </section>
        </div>
        <div class="sidebar">
            <aside>
                <div class="card shadow-sm">
                    @include('partials.communityDetails')
                </div>
            </aside>
            @include('partials.footer')
        </div>
    </div>
</main>
@endsection
