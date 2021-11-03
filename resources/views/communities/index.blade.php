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
                    </div>
                    <div class="list-group list-group-flush w-50 mx-auto mb-3">
                        @foreach ($communities as $community)
                        <a href="/r/{{ $community->name }}" class="list-group-item list-group-item-action d-flex gap-3 py-2"
                            aria-current="true">
                            <div class="d-flex w-100 justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">r/{{ $community->name }}</h6>
                                </div>
                                @auth
                                    @if (auth()->user()->communities->contains($community->id))
                                    <form action="/leave-community" method="POST" class="text-center">
                                        @csrf
                                        <input type="hidden" name="community_id" value="{{ $community->id }}">
                                        <button type="submit" class="btn btn-outline-primary btn-sm w-100" id="leaveButton" onmouseover="changeText(this)" onmouseout="changeText(this)">Joined</button>
                                    </form>
                                    @else
                                    <form action="/join-community" method="POST" class="text-center">
                                        @csrf
                                        <input type="hidden" name="community_id" value="{{ $community->id }}">
                                        <button type="submit" class="btn btn-primary btn-sm w-100" id="joinButton">Join</button>
                                    </form>
                                    @endif
                                @endauth
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>
@endsection
