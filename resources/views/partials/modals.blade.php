
    <div class="account-popup-area signin-popup-box">
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>User Login</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="cfield">
                    <input name="email" class="@error('email') is-invalid @enderror" type="text" value="{{ old('email') }}" placeholder="Email" />
                    <i class="la la-envelope-o"></i>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="cfield">
                    <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="********" />
                    <i class="la la-key"></i>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <p class="remember-label">
                    <input type="checkbox" id="cb1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><label for="cb1">Remember me</label>
                </p>
                <a href="{{ route('password.request') }}" title="">Forgot Password?</a>
                <button type="submit">Login</button>
            </form>
        </div>
    </div><!-- LOGIN POPUP -->

    <div class="account-popup-area signup-popup-box">
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <h3>Sign Up</h3>
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
    </div><!-- SIGNUP POPUP -->
