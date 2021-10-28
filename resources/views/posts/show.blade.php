@extends('layouts.main')

@section('title', $currentPage)

@section('content')
<main>
    <div class="d-flex justify-content-center py-4">
        <div class="content">
            <section class="posts">
                <article class="card">
                    <div class="votes">
                        <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-top-512.png"
                        alt="">
                        <div class="score">123</div>
                        <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-bottom-512.png"
                        alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="/r/{{ $community->slug }}/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Posted by <a href="/user/{{ $post->user->username }}/posts">{{ $post->user->username }}</a></h6>
                        <p class="card-text">{{ $post->body }}</p>
                        <a href="/r/{{ $community->slug }}/posts/{{ $post->slug }}" class="card-link">Card link</a>
                    </div>
                </article>
            </section>
        </div>
        <div class="sidebar">
            <aside>
                <div class="card shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title"><a href="/r/{{ $community->slug }}"> r/{{ $community->name }} </a></h5>
                    </div>
                </div>
            </aside>
            @include('partials.footer')
        </div>
    </div>
</main>
@endsection
