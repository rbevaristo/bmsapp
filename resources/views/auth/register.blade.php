@extends('layouts.sign')

@section('content')
<div id="register">
    <div id="left">
        <div class="signup">
            <div class="logo">
                <h1>BMS</h1>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group-name">
                    <label>
                        Firstname 
                        @if ($errors->has('firstname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('firstname') }}</strong>
                            </span>
                        @endif
                    </label>
                    <input type="text" class="text-input{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>

                </div>
                <div class="form-group-name form-padding">
                    <label>
                        Lastname
                        @if ($errors->has('lastname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('lastname') }}</strong>
                            </span>
                        @endif
                    </label>
                    <input type="text" class="text-input{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>
                </div>
                <div>
                    <label>
                        Email
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </label>
                    <input type="text" class="text-input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                </div>
                <div>
                    <label>
                        Username
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                    </label>
                    <input type="text" class="text-input{{ $errors->has('username') ? ' is-invalid' : '' }}" class="form-control" name="username" value="{{ old('username') }}" required>
                </div>
                <div>
                    <label>
                        Password
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </label>
                    <input type="password" class="text-input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                </div>
                <div>
                    <label>Confirm Password</label>
                    <input type="password" class="text-input" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn primary-btn">Sign Up</button>
            </form>
            <div class="or">
                <hr class="bar">
                <span>Already have an account?</span>
                <hr class="bar">
            </div>
            <div class="links">
                <a href="{{route('login')}}" class="btn secondary-outline-btn">Sign In</a>
            </div>
        </div>
        <footer id="main-footer">
            <p>Copyright &copy; 2018, BMS All Rights Reserved</p>
            <div>
                <a href="#">terms of use</a> | <a href="#">Privacy Policy</a>
            </div>
        </footer>
    </div>
    <div id="right">
        <div id="showcase">
            <div class="showcase-content">
                <h1 class="showcase-text">
                    Lorem, ipsum dolor. <strong>together</strong>
                </h1>
                <a href="#" class="btn secondary-outline-btn">Lorem, ipsum dolor.</a>
            </div>
        </div>
    </div>
</div>
@endsection
