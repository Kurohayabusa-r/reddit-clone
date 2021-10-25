@extends('layouts.main')

@section('title', 'Login')

@section('content')
<main>
    <div class="d-flex flex-column align-items-center login-form">
        <div class="mb-3">
            <p class="display-6 mt-3">Login</p>
        </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" autofocus required>
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Log In</button>
            </div>
            <div class="mb-3">
                    Don't have an account? <a href="{{url('/signup')}}">Sign Up</a>
            </div>
        </form>
    </div>
</main>
@endsection
