@extends('layouts.main')

@section('title', 'Communities')

@section('content')
<main>
    <div class="d-flex justify-content-center py-4">
        <div class="content">
            <section class="communities">
                <div class="card shadow-sm">
                    <div class="card-body d-flex flex-column align-items-center">
                        <h5 class="card-title">All Communities</h5>
                        <div class="list-group">
                            @foreach ($communities as $community)

                            <a href="/r/{{ $community->name }}" class="list-group-item list-group-item-action d-flex gap-3 py-2" aria-current="true">
                                <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h6 class="mb-0"> {{ $community->name }} </h6>
                                    </div>
                                </div>
                            </a>

                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
