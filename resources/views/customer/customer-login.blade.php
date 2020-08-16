@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/customer.css') }}">
@endsection
@section('title')
Laravel Ecommerce
@endsection
@section('content')
@include('layouts.navbar')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Username or Email</label>
                                <input type="text" class="form-control">
                                <label class="mt-4" for="">Password</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col social-media-login">
                            <button class="btn btn-warning mt-4">Login</button>
                            <small>or login with,</small>
                            <a href="{{ route('login-facebook') }}">
                                <button class="btn btn-primary mt-3">Login With Facebook</button>
                            </a>
                            <a href="{{ route('login-google') }}">
                                <button class="btn btn-danger mt-2">Login With Facebook</button>
                            </a>
                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection