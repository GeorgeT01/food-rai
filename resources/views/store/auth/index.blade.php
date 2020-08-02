@extends('app')
@section('title', 'Store')

@section('content')
    <div class="container-fluid mt-5 mb-5  h-100"">
        <div class=" row mt-5">
            <div class="col-md-6">
                <img src="{{ asset('assets/illustrations/store.svg') }}" alt="login-image" width="100%" height="100%">
            </div>
            <div class="col-md-6">

                <div class="row h-100 justify-content-center align-items-center text-center">
                    <div class="col-md-12">
                        <a href="{{ url('store/login') }}" class="btn btn-outline-primary btn-lg text-uppercase w-50">Login to your
                            store</a> <br>
                            <a href="{{ url('store/register') }}" class="btn btn-outline-danger btn-lg text-uppercase w-50 mt-5">Create A
                                store</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
