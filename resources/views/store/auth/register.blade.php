@extends('app')
@section('title', 'Store-Register')

@section('content')
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6">

                        <div class="card shadow-sm border-10">
                            <div class="card-body">
                                <h4 class="card-title text-center font-weight-bold"><i class="fas fa-store"></i> Create New Store</h4>
                                <form action="{{ url('store/register') }}" method="POST" class="mt-5" id="register-form">
                                    @csrf


                                    <div class="form-group">
                                        <label for="email"><i class="fas fa-store"></i> Store name<span
                                                class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control form-control-lg border-10 shadow-sm @error('name') is-invalid @enderror"
                                            name="name" id="name" maxlength="255" value="{{ old('name') }}">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email"><i class="fas fa-envelope"></i> E-Mail<span
                                                class="text-danger">*</span></label>
                                        <input type="email"
                                            class="form-control form-control-lg border-10 shadow-sm @error('email') is-invalid @enderror"
                                            name="email" id="email" maxlength="255" value="{{ old('email') }}">
                                            <small class="form-text text-muted">Email used to login</small>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email"><i class="fas fa-envelope"></i> E-Mail <small
                                                    class="text-info">optional</small></label>
                                                <input type="email"
                                                    class="form-control form-control-lg border-10 shadow-sm @error('email') is-invalid @enderror"
                                                    name="email" id="email" maxlength="255" value="{{ old('email') }}">
                                                    <small class="form-text text-muted">Email shwoing to users</small>
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
                                                <input type="text" class="form-control form-control-lg border-10 shadow-sm"
                                                    name="phone" id="phone" maxlength="255" value="{{ old('phone') }}">
                                                    <small class="form-text text-muted">Phone number shwoing to users</small>
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

                                        <textarea
                                            class="form-control form-control-lg border-10 shadow-sm @error('delivery_address') is-invalid @enderror"
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
                                                    class="form-control form-control-lg border-10 shadow-sm @error('password') is-invalid @enderror"
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
                                                    class="form-control form-control-lg border-10 shadow-sm @error('password') is-invalid @enderror"
                                                    name="password_confirmation" id="password_confirmation" maxlength="255">
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" id="submit-btn"
                                        class="btn btn-primary btn-lg w-100 text-uppercase shadow-sm border-0 border-10">
                                        Create
                                    </button>
                                    <div class="text-center mt-3">
                                        <a href="{{ url('store/login') }}">Already have a storet? login to your store here</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    

            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script type="text/javascript">
        $("#register-form").submit(function(event) {
            $('#submit-btn').prop('disabled', true);
            $('#submit-btn').html(
                ' <span class="spinner-border" role="status" aria-hidden="true"></span> Loading...'
            )
        });

    </script>
@endsection
