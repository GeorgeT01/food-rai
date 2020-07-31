@extends('user.app')
@section('title', 'Login')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('assets/illustrations/login.svg') }}" alt="login-image" width="100%" height="100%">
            </div>
            <div class="col-md-7">

                
                    <h3 class="text-center font-weight-bold">Login</h3>
                   
                        <form action="{{ url('login') }}" method="POST" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="fas fa-envelope"></i> E-Mail<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control shadow-sm @error('email') is-invalid @enderror"
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
                                    class="form-control shadow-sm @error('password') is-invalid @enderror" name="password"
                                    id="password" maxlength="255">
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

                    
                   
                        <button type="submit" class="btn btn-primary w-100 text-uppercase shadow-sm border-0 mt-3"> Login
                        </button>
                        <div class="text-center mt-3">
                            <a href="{{url('register')}}">Don't have an account? register here</a>
                        </div>
    
                    </form>
                    
             

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger mt-3" role="alert">
                        <p class="mb-0">{{ $message }}</p>
                    </div>
                @endif
            </div>
            

        </div>

    </div>

@endsection
