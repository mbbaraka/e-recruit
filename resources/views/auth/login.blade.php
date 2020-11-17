@extends('layouts.app')

@section('content')

<section>
    <div class="block remove-bottom">
        <div class="container">
            <span class="row justify-content-center text-muted">To apply you must be logged in.</span>
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <div class="account-popup-area signin-popup-box static">
                        <div class="account-popup">
                            <span>Login</span>
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="cfield">
                                    <input type="text" name="email" placeholder="Email Address" class="@error('email') is-invalid @enderror"/>
                                    <i class="la la-user"></i>
                                    @error('email')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="cfield">
                                    <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="********" />
                                    <i class="la la-key"></i>
                                    @error('password')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <p class="remember-label">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="cb1"><label for="cb1">Remember me</label>
                                </p>
                                <a href="{{ route('password.request') }}" title="">Forgot Password?</a>
                                <button type="submit">Login</button>
                            </form>
                        </div>
                    </div><!-- LOGIN POPUP -->
                </div>
                <div class="col-lg-6">
                    <div class="account-popup-area signin-popup-box static">
                        <div class="account-popup">
                            <span>Register</span>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="cfield">
                                    <input type="text" name="email" class="@error('email') is-invalid @enderror" placeholder="Email" />
                                    <i class="la la-envelope-o"></i>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="cfield">
                                    <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" />
                                    <i class="la la-key"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="cfield">
                                    <input type="password" name="password_confirmation" placeholder="Confirm Password" />
                                    <i class="la la-key"></i>
                                </div>
                                <button type="submit">Signup</button>
                            </form>
                        </div>
                    </div><!-- LOGIN POPUP -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
