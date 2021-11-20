<div class="card shadow-sm">
    <div class="card-body d-flex flex-column align-items-center">
        <img src="/uploads/avatars/{{ $user->avatar }}" class="avatar rounded-circle mt-2 mb-3 shadow" alt="">
        <h5 class="card-title">{{$user->username}}</h5>

        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-decoration-none text-dark" href="/user/{{ $user->username }}/following">Following</a>
                <span class="badge bg-primary rounded-pill">{{ $user->following->count() }}</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a class="text-decoration-none text-dark" href="/user/{{ $user->username }}/followers">Followers</a>
                <span class="badge bg-primary rounded-pill">{{ $user->followers->count() }}</span>
            </li>
        </ul>
    </div>
    @auth
    @if (auth()->user()->isNot($user))

    @if (auth()->user()->following->contains($user->id))
    <form action="/unfollow" method="POST" class="text-center mb-3">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <button type="submit" class="btn btn-outline-primary w-75" id="unfollowButton"
            onmouseover="changeTextFollow(this)" onmouseout="changeTextFollow(this)">Followed</button>
    </form>
    @else
    <form action="/follow" method="POST" class="text-center mb-3">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <button type="submit" class="btn btn-primary w-75" id="followButton">Follow</button>
    </form>
    @endif

    @else
    <div class="text-center mb-3">
        <a class="btn btn-primary w-75" href="/user/{{ auth()->user()->username }}/edit">Edit Profile</a>
    </div>
    @endif
    @endauth
</div>
