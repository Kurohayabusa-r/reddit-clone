@extends('layouts.main')

@section('title', 'Home')

@section('content')
<main>
    <div class="d-flex justify-content-center py-4">
        <div class="content">
            <div class="filter">
                <div class="card">
                    <button type="button" class="btn btn-outline-dark"><i class="fas fa-fire"></i>Hot</button>
                    <button type="button" class="btn btn-outline-dark"><i class="fas fa-newspaper"></i>New</button>
                    <button type="button" class="btn btn-outline-dark"><i class="fas fa-poll"></i>Top</button>
                </div>
            </div>
            <section class="posts">
                {{-- @foreach ($communities as $community) --}}
                @foreach ($posts as $post)
                <article class="card">
                    <div class="votes">
                        <form action="" method="POST">
                        @csrf
                        <button type="button" class="btn btn-outline-success"><i class="fas fa-chevron-up"></i></button>
                    <form>
                       <div class="score">
                        {{  $post->votes  }}
                       </div>
                    <form action="" method="POST">
                    @csrf
                        <button type="button" class="btn btn-outline-danger"><i class="fas fa-chevron-down"></i></button>
                    <form>
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
                    </div>
                </article>
                @endforeach
                {{-- @endforeach --}}
            </section>
        </div>
        <div class="sidebar">
            <aside>
                <div class="card shadow-sm">
                    @include('partials.randomCommunities')
                </div>
            </aside>
            @include('partials.footer')
        </div>
    </div>
</main>

@endsection
