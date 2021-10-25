@extends('layouts.main')

@section('title', 'Sign Up')

@section('content')
<main>
    <div class="d-flex flex-column align-items-center signup-form">
        <div class="mb-3">
            <p class="display-6 mt-3">Sign Up</p>
        </div>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" autofocus required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="mb-4">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </div>
            <div class="mb-3">
                Already have an account? <a href="{{url('/login')}}">Log In</a>
            </div>
        </form>
    </div>
</main>
@endsection
