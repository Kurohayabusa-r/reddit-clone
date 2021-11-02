<h5 class="card-header"><a href="/r/{{ $community->name }}"> r/{{ $community->name }} </a></h5>
<div class="card-body d-flex flex-column">
    <p class="card-text">{{ $community->description }}</p>
    <p class="card-text">Members: {{ $community->users->count() }}</p>
</div>
<hr class="my-0">
<div class="card-body d-flex flex-column align-items-center">
    <h6 class="card-text text-muted">Created {{ $communityCreatedAt }}</h6>
</div>
@auth
    @if (auth()->user()->communities->contains($community->id))
    <form action="/leave-community" method="POST" class="text-center mb-3">
        @csrf
        <input type="hidden" name="community_id" value="{{ $community->id }}">
        <button type="submit" class="btn btn-outline-primary w-75" id="leaveButton"
            onmouseover="(function() {
            return document.getElementById('leaveButton').innerHTML = 'Leave'; })()"
            onmouseout="(function() {
            return document.getElementById('leaveButton').innerHTML = 'Joined'; })()">
            Joined</button>
    </form>
    @else
    <form action="/join-community" method="POST" class="text-center mb-3">
        @csrf
        <input type="hidden" name="community_id" value="{{ $community->id }}">
        <button type="submit" class="btn btn-primary w-75" id="joinButton">Join</button>
    </form>
    @endif
@endauth
