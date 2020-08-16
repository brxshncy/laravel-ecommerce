@extends('layouts.app')
@section('title')
Admin | Products
@endsection
@php
    $section = 'product';
@endphp
@include('layouts.admin-navbar')
@section('content')
<div class="container-fluid">
    <div class="row mt-5 px-5">
        <div class="col text-right">
            <button class="btn btn-primary">Add Product</button>
        </div>
    </div>
</div>
@endsection