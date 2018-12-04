@extends('layouts.sign')

@section('content')
<div id="login">
    <div id="left">
        <div id="showcase">
            <div class="showcase-content">
                <h1 class="showcase-text">
                    Lorem, ipsum dolor. <strong>together</strong>
                </h1>
                <a href="#" class="btn secondary-outline-btn">Lorem, ipsum dolor.</a>
            </div>
        </div>
    </div>
    <div id="right">
        <div class="signin">
            <div class="logo">
                <h1>BMS</h1>
            </div>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <label>Username or Email
                        @if ($errors->has('username') OR $errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>Invalid Username or Password</strong>
                        </span>
                        @endif
                    </label>
                    <input type="text" class="text-input{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username"
                        value="{{ old('username') }}" required autofocus>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" class="text-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                        required>
                </div>
                <div>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
                <button type="submit" class="btn primary-btn">Sign In</button>
            </form>
            <div class="links">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
            <div class="or">
                <hr class="bar">
                <span>OR</span>
                <hr class="bar">
            </div>
            <div class="social">
                {{-- <a href="#" class="btn primary-outline-btn">Sign in with <strong>Facebook</strong> <i class="fa fa-facebook-square"></i></a> --}}
                {{-- <a href="#" class="btn danger-outline-btn">Sign in with <strong>Google</strong> <i class="fa fa-google-plus-square"></i></a> --}}
                <a href="{{ route('register') }}" class="btn secondary-outline-btn">Create an account</a>
            </div>
        </div>
        <footer id="main-footer">
            <p>Copyright &copy; 2018, BMS All Rights Reserved</p>
            <div>
                <a href="#">terms of use</a> | <a href="#">Privacy Policy</a>
            </div>
        </footer>
    </div>
</div>
@endsection