@extends('layouts.main')

@section('title', 'Sign Up')

@section('content')
<main>
    <div class="d-flex flex-column align-items-center auth-form py-4">
        <div class="mb-3">
            <p class="display-6 mt-3">Sign Up</p>
        </div>
        <form action="/signup" method="POST" class="pt-4">
            @csrf
            <div class="mb-3 form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" autofocus autocomplete="off" required value="{{ old('username') }}">
                <label for="username" class="form-label">Username</label>
                @error('username')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name" class="form-label">Name</label>
                @error('name')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required value="{{ old('email') }}">
                <label for="email" class="form-label">Email</label>
                @error('email')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3 form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password" class="form-label">Password</label>
                @error('password')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-4 form-floating">
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                @error('password_confirmation')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </div>
        </form>
        <small>Already have an account? <a href="/login" class="text-decoration-none">Log In</a></small>
    </div>
</main>
@endsection
