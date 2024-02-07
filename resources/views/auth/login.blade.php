@extends('layouts.app')

@section('content')

<style>
/* Custom styles for the login form */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f0f8ff;
    /* Set a light blue background color */
    color: #495057;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.card {
    width: 450px;
    background-color: #fff;
    /* Set the width and background color of the card */
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.card-header {
    background-color: #007bff;
    color: #fff;
    font-weight: bold;
    text-align: center;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding: 20px 0;
    font-size: 26px;
}

.card-body {
    padding: 30px;
}

.form-control {
    border: 1px solid #ced4da;
    border-radius: 5px;
    padding: 12px;
    width: 100%;
    color: #495057;
    background-color: #f8f9fa;
    /* Set background color for input fields */
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 5px;
    padding: 12px 20px;
    font-size: 16px;
    width: 100%;
    color: #fff;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
</style>

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            @if (session('access_denied'))
            <div class="alert alert-danger" role="alert">
                {{ session('access_denied') }}
            </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div style="margin-bottom: 20px;">
                    <label for="email" style="display: block;">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <label for="password" style="display: block;">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>

                <div style="margin-bottom: 20px;">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember" style="margin-left: 5px;">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <div style="text-align: center;">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection