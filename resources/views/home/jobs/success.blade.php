@extends('layouts.app')

@section('content')
<section>
    <div class="block no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 column">
                    <div class="pt-5 pb-5">
                        <h3>Application Successful!</h3>
                        <p>
                            Your application for has been successfully received. You will receive an email shortly for details about your appliction.
                            You can check your <a class="text-primary" href="{{ url('/home') }}">dashboard</a> to manage you applications and your resume. Or else go back to the <a class="text-primary" href="{{ url('/') }}">Homepage</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
