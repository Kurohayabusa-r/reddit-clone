<h5 class="card-header text-center">{{__('Random Communities')  }}</h5>
<div class="list-group list-group-flush">
    @foreach ($randomCommunities as $randomCommunity)
    <a href="/r/{{ $randomCommunity->name }}" class="list-group-item list-group-item-action d-flex gap-3 py-2"
        aria-current="true">
        {{-- <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
        class="rounded-circle flex-shrink-0"> --}}
        <div class="d-flex w-100 justify-content-between align-items-center">
            <div>
                <h6 class="mb-0">r/{{ $randomCommunity->name }}</h6>
            </div>
            @auth
                @if (auth()->user()->communities->contains($randomCommunity->id))
                <form action="/leave-community" method="POST" class="text-center">
                    @csrf
                    <input type="hidden" name="community_id" value="{{ $randomCommunity->id }}">
                    <button type="submit" class="btn btn-outline-primary btn-sm w-100" id="leaveButton" onmouseover="changeText(this)" onmouseout="changeText(this)">Joined</button>
                </form>
                @else
                <form action="/join-community" method="POST" class="text-center">
                    @csrf
                    <input type="hidden" name="community_id" value="{{ $randomCommunity->id }}">
                    <button type="submit" class="btn btn-primary btn-sm w-100" id="joinButton">Join</button>
                </form>
                @endif
            @endauth
        </div>
    </a>
    @endforeach
</div>
<div class="card-body d-flex flex-column align-items-center">
    <a href="/communities" class="btn btn-primary px-5 text-decoration-none text-white">{{__('View All')  }}</a>
</div>
