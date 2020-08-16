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
                <div class="card-body">
                    <div class="row">
                        sells                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection