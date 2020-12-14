@extends('ors.layouts.app')

@section('title')
Login
@endsection

@section('content')

{{-- <section>
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
</section> --}}

<div class="w3-row">
    <div class="w3-third w3-display-middle">
        <div class="w3-card-4 w3-border-light-blue w3-border p-5" style="border-radius: 20%;">
            <form class="w3-card w3-border-light-blue w3-border w3-round w3-round-xxlarge w3-padding" action="{{ route('login') }}" method="POST">
                @csrf
                <h2 class="w3-text-blue w3-center" style="text-shadow:1px 1px 0 #444">Login</h2>
                <hr class="w3-light-blue">
                <div class="w3-container">
                    <label for="email">Email <strong class="text-danger">*</strong></label>
                    <input type="email" value="{{ old('email') }}" name="email" class="w3-input w3-round w3-round-large @error('email') w3-border-red @enderror" id="">
                    @error('email')
                        <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                    @enderror
                </div>
                <br>
                <div class="w3-container">
                    <label for="password">Password <strong class="text-danger">*</strong></label>
                    <input type="password" name="password" class="w3-input w3-round w3-round-large @error('password') w3-border-red @enderror" id="">
                    @error('password')
                        <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                    @enderror
                </div>
                <br>
                <button class="w3-btn w3-light-blue w3-block w3-round w3-round-large" type="submit">Submit</button>
                <br>
                <span class="w3-text-blue"><a href="{{ route('password.request') }}"style="text-decoration: none">Forgot Password?</a></span>
                <span class="float-right w3-text-blue"><a style="text-decoration: none" href="{{ route('register') }}">Register</a></span>
            </form>
        </div>
    </div>
</div>

@endsection
