@extends('layouts.main')

@section('title', 'Edit Profile')

@section('content')
<main>
    <div class="d-flex flex-column align-items-center profile-form py-4">

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="mb-3">
            <p class="display-6 mt-3">Edit Profile</p>
        </div>
        <form enctype="multipart/form-data" action="/update-profile" method="POST" class="pt-4">
            @csrf
            @method('PUT')
            <div class="mb-3 form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" autocomplete="off" required value="{{ $user->username }}">
                <label for="username" class="form-label">Username</label>
                @error('username')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ $user->name }}">
                <label for="name" class="form-label">Name</label>
                @error('name')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required value="{{ $user->email }}">
                <label for="email" class="form-label">Email</label>
                @error('email')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-4 text-center">
                <label for="formFile" class="form-label fw-bold d-block">Image</label>
                <img class="avatar rounded-circle mb-3 mt-1 shadow" src="/uploads/avatars/{{ $user->avatar }}" alt="{{ $user->username }}'s avatar">
                <input class="form-control" type="file" id="formFile" name="avatar">
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-primary w-100">Update</button>
            </div>
            <a href="@if (url()->previous() === url()->current()) /r/popular @else {{ url()->previous() }} @endif" class="btn btn-secondary w-100">Cancel</a>
        </form>
    </div>
</main>
@endsection
