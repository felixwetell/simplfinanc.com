@extends( 'layouts.app' )
@section( 'title', 'Reset Password' )
@section( 'content' )


    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <p class="text-center">
        Enter your email address to send a reset password link
    </p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group row">
            <div class="col-lg-8 offset-lg-2">
                <label class="text-muted" for="email" class="">E-Mail Address</label>
                <input id="email" type="email" placeholder="E-Mail Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-lg-8 offset-lg-2">
                <button type="submit" class="btn btn-primary">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>

@endsection
