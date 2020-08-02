@extends('app')
@section('title', 'Store-Login')

@section('content')
<div class="container-fluid mt-5 mb-5"">
    <div class="row mt-5">
        <div class="col-md-4">
           
        </div>
        <div class="col-md-4">

                    <div class="card shadow-sm border-10">
                        <div class="card-body">
                            <h4 class="card-title text-center font-weight-bold"><i class="fas fa-store"></i> Login to your store</h4>
    
    
                            <form action="{{ url('login') }}" method="POST" class="mt-3" id="login-form">
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
                                    <a href="{{ url('store/register') }}">Don't have a store yet ? create one here</a>
                                </div>
    
                            </form>
                        </div>
                    </div>
    
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger mt-3" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                    @endif
                



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
                ' <span class="spinner-border" role="status" aria-hidden="true"></span> Loading...'
            )
        });

    </script>
@endsection