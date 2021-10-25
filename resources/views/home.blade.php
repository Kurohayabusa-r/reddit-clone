@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <main>
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
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">Random Communities</h5>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-2"
                                aria-current="true">
                                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                    class="rounded-circle flex-shrink-0">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="mb-0">Community 1</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-2"
                                aria-current="true">
                                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                    class="rounded-circle flex-shrink-0">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="mb-0">Community 2</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-2"
                                aria-current="true">
                                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                    class="rounded-circle flex-shrink-0">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="mb-0">Community 3</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-2"
                                aria-current="true">
                                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                    class="rounded-circle flex-shrink-0">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="mb-0">Community 4</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-2"
                                aria-current="true">
                                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                                    class="rounded-circle flex-shrink-0">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="mb-0">Community 5</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a href="" class="btn btn-primary mt-3 px-5 text-decoration-none text-white">View All</a>
                    </div>
                </div>
            </aside>
            <footer>
                <div class="card shadow-sm">
                    <ul class="list-group list-group-flush align-items-center">
                        <li class="list-group-item"><a href="">About</a></li>
                        <li class="list-group-item"><a href="">Help</a></li>
                        <li class="list-group-item"><a href="">Contact Us</a></li>
                        <li class="list-group-item">Test &copy; 2021</li>
                    </ul>
                </div>
            </footer>
        </div>
    </main>

@endsection
