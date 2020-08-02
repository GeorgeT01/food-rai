@extends('app')
@section('title', 'Login')

@section('content')
    <div class="container-fluid mt-5 mb-5"">
            <div class=" row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">


            <div class="card shadow-sm border-10">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Login</h4>
                    <form action="{{ route('user.login.submit') }}" method="POST" class="mt-3" id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> E-Mail<span
                                    class="text-danger">*</span></label>
                            <input type="email"
                                class="form-control form-control-lg border-10 shadow-sm @error('email') is-invalid @enderror"
                                name="email" id="email" maxlength="255" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fas fa-key"></i> Password<span
                                    class="text-danger">*</span></label>
                            <input type="password"
                                class="form-control form-control-lg border-10 shadow-sm @error('password') is-invalid @enderror"
                                name="password" id="password" maxlength="255">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <button type="submit" id="submit-btn"
                            class="btn btn-primary w-100 text-uppercase btn-lg shadow-sm border-0 border-10 mt-3">
                            Login
                        </button>
                        <div class="text-center mt-3">
                            <a href="{{ route('user.register') }}">Don't have an account? register here</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>




    </div>

@endsection
@section('script')
    <script type="text/javascript">
        $("#login-form").submit(function(event) {
            $('#submit-btn').prop('disabled', true);
            $('#submit-btn').html(
                ' <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...'
            )
        });

    </script>

    @if ($message = Session::get('error'))
        <script>
            Swal.fire('login Error', '{{ $message }}', 'error');
        </script>
    @endif
@endsection
