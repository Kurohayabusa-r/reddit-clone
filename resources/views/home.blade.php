@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <main>
        <div class="d-flex justify-content-center py-4">
            <div class="content">
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
                            <h5 class="card-title"><a href="">{{$post["title"]}}</a></h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$post["community"]}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Posted by {{$post["author"]}}</h6>
                            <p class="card-text">{{$post["text"]}}</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </article>

                    @endforeach
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