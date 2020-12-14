@extends('ors.layouts.app')

@section('title')
Register
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="w3-row">
        <div class="w3-panel w3-third w3-display-middle">
            <div class="w3-card-4 w3-border-light-blue w3-border p-5" style="border-radius: 20%;">
                <form class="w3-card w3-border-light-blue w3-border w3-round w3-round-xxlarge w3-padding" {{ route('register') }}" method="POST">
                    @csrf
                    <h2 class="w3-text-blue w3-center" style="text-shadow:1px 1px 0 #444">Register</h2>
                    <hr class="w3-light-blue">
                    {{-- <div class="w3-container">
                        <label for="first_name">First Name <strong class="text-danger">*</strong></label>
                        <input type="text" name="first_name" class="w3-input w3-round w3-round-large @error('first_name') w3-border-red @enderror" id="">
                        @error('first_name')
                            <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br>
                    <div class="w3-container">
                        <label for="last_name">Last Name <strong class="text-danger">*</strong></label>
                        <input type="text" name="last_name" class="w3-input w3-round w3-round-large @error('last_name') w3-border-red @enderror" id="">
                        @error('last_name')
                            <small><strong class="w3-text-red" role="alert">{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <br> --}}
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
                    <div class="w3-container">
                        <label for="password">Confirm Password <strong class="text-danger">*</strong></label>
                        <input type="password" name="password_confirmation" class="w3-input w3-round w3-round-large">
                    </div>
                    <br>
                    <button class="w3-btn w3-light-blue w3-block w3-round w3-round-large" type="submit">Submit</button>
                    <br>
                    <span class="w3-center">Already registered? <a class="w3-text-blue"  style="text-decoration: none" href="{{ route('login') }}">Login</a></span>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
