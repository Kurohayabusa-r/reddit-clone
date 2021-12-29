@extends('layouts.main')

@section('title', 'Login')

@section('content')
<main>
    <div class="d-flex flex-column align-items-center auth-form py-4">

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if (session()->has('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="mb-3">
            <p class="display-6 mt-3">{{__('Login')  }}</p>
        </div>
        <form action="/login" method="POST" class="pt-4">
            @csrf
            <div class="mb-3 form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                <label for="email" class="form-label">Email</label>
                @error('email')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-4 form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                <label for="password" class="form-label">Password</label>
                @error('password')
                    <div class="invalid-feedback"> {{$message}} </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">{{__('Login')  }}</button>
            </div>
        </form>
        <small>{{__('Dont have an account')  }}? <a href="/signup" class="text-decoration-none">{{__('Sign Up')  }}</a></small>
    </div>
</main>
@endsection
