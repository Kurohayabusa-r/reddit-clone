@extends('layouts.main')

@section('title', $currentPage)

@section('content')
<main>
    <div class="community-header">
        <p class="display-4"> {{ $community->name }} </p>
        <small>r/{{ $community->name }}</small>
    </div>
    <div class="d-flex justify-content-center py-4">
        <div class="content">

            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="create-post card">
                <div class="container">
                    <form class="">
                        <input class="form-control" type="text" placeholder="Create a post" aria-label="Search">
                    </form>
                </div>
            </div>
            <div class="filter">
                <div class="card">
                    <button type="button" class="btn btn-outline-dark">Hot</button>
                    <button type="button" class="btn btn-outline-dark">New</button>
                    <button type="button" class="btn btn-outline-dark">Top</button>
                </div>
            </div>
            <section class="posts">
                @foreach ($posts as $post)
                <article class="card">
                    <div class="votes">
                        <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-top-512.png"
                        alt="">
                        <div class="score">123</div>
                        <img src="https://cdn3.iconfinder.com/data/icons/user-interface-169/32/chevron-bottom-512.png"
                        alt="">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="/r/{{ $community->name }}/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Posted by <a href="/user/{{ $post->user->username }}/posts">{{ $post->user->username }}</a></h6>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="/r/{{ $community->name }}/posts/{{ $post->slug }}" class="card-link">Card link</a>
                    </div>
                </article>
                @endforeach
            </section>
        </div>
        <div class="sidebar">
            <aside>
                <div class="card shadow-sm mb-3">
                    @include('partials.communityDetails')
                </div>
                <div class="card shadow-sm mb-3">
                    @include('partials.communityRules')
                </div>
                <div class="card shadow-sm">
                    @include('partials.communityModerators')
                </div>
            </aside>
            @include('partials.footer')
        </div>
    </div>
</main>
@endsection
