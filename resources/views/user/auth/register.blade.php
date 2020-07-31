@extends('user.app')
@section('title', 'Register')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <img src="{{ asset('assets/illustrations/register.svg') }}" alt="register-image" width="100%" height="100%">
            </div>
            <div class="col-md-7">

               
                    <h3 class="text-center font-weight-bold"> Create New Account</h3>
                        <form action="{{ url('register') }}" method="POST" class="mt-3">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="first_name"><i class="fas fa-user"></i> First Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control shadow-sm @error('first_name') is-invalid @enderror"
                                            name="first_name" id="first_name" maxlength="255"
                                            value="{{ old('first_name') }}">
                                        @error('first_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="last_name"><i class="fas fa-user"></i> Last Name<span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control shadow-sm @error('first_name') is-invalid @enderror"
                                            name="last_name" id="last_name" maxlength="255" value="{{ old('last_name') }}">
                                        @error('last_name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="middle_name"><i class="fas fa-user"></i> Middle Name <small
                                                class="text-info">optional</small></label>
                                        <input type="text" class="form-control shadow-sm" name="middle_name"
                                            id="middle_name" maxlength="255" value="{{ old('middle_name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email"><i class="fas fa-envelope"></i> E-Mail<span
                                                class="text-danger">*</span></label>
                                        <input type="email"
                                            class="form-control shadow-sm @error('email') is-invalid @enderror" name="email"
                                            id="email" maxlength="255" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone"><i class="fas fa-phone-alt"></i> Phone <small
                                                class="text-info">optional</small></label>
                                        <input type="text" class="form-control shadow-sm" name="phone" id="phone"
                                            maxlength="255" value="{{ old('phone') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="countery"><i class="fas fa-globe-africa"></i> Country<span
                                                class="text-danger">*</span></label>
                                        @include('user.layouts.html.select-country')
                                        @error('country')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city"><i class="far fa-compass"></i> City<span
                                                class="text-danger">*</span></label>
                                        @include('user.layouts.html.select-city')
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="countery"><i class="fas fa-map-marker-alt"></i> Delivery Address<span
                                        class="text-danger">*</span></label>

                                <textarea class="form-control shadow-sm @error('delivery_address') is-invalid @enderror"
                                    name="delivery_address" id="delivery_address"
                                    rows="3">{{ old('delivery_address') }}</textarea>
                                @error('delivery_address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password"><i class="fas fa-key"></i> Password<span
                                                class="text-danger">*</span></label>
                                        <input type="password"
                                            class="form-control shadow-sm @error('password') is-invalid @enderror"
                                            name="password" id="password" maxlength="255">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password_confirmation"><i class="fas fa-redo"></i> Password
                                            Confirmation</label>
                                        <input type="password"
                                            class="form-control shadow-sm @error('password_confirmation') is-invalid @enderror"
                                            name="password_confirmation" id="password_confirmation" maxlength="255">
                                        @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    
                        <button type="submit" class="btn btn-primary w-100 text-uppercase shadow-sm border-0"> Create
                        </button>
                        <div class="text-center mt-3">
                            <a href="{{url('login')}}">Already have an account? login here</a>
                        </div>
                    </form>

                
            </div>
        </div>
        

    </div>
    </div>

@endsection
