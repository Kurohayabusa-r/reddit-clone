@extends('layouts.main')

@section('title', 'Create a Community')

@section('content')
<main>
    <div class="d-flex flex-column align-items-center create-community-form py-4">
        <div class="mb-3">
            <p class="display-6 mt-3">Create a Community</p>
        </div>
        <form action="/create-community" method="POST" class="card">
            @csrf
            <div class="card-body">
                <label for="name" class="form-label">Community Name</label>
                <div class="input-group mb-3">
                    <span class="input-group-text font-monospace" id="basic-addon1">r/</span>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback"> {{$message}} </div>
                    @enderror
                </div>
                <label for="public" class="form-label">Community type</label>
                <div class="@error('type') is-invalid @enderror">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="public" value="public" checked>
                        <label class="form-check-label" for="public">
                            Public
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="type" id="restricted" value="restricted">
                        <label class="form-check-label" for="restricted">
                            Restricted
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="type" id="private" value="private">
                        <label class="form-check-label" for="private">
                            Private
                        </label>
                    </div>
                </div>
                @error('type')
                    <div class="invalid-feedback mb-2"> {{$message}} </div>
                @enderror
                <div class="mb-2">
                    <button type="submit" class="btn btn-primary w-100">Create Community</button>
                </div>
                <a href="@if (url()->previous() === url()->current()) /r/popular @else {{ url()->previous() }} @endif" class="btn btn-secondary w-100">Cancel</a>
            </div>
        </form>
    </div>
</main>
@endsection
