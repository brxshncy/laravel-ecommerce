@extends('layouts.app')
@section('title')
Admin | Categories
@endsection
@php
    $section = 'categories';
@endphp
@include('layouts.admin-navbar')
@section('content')
<div class="container-fluid">
    <div class="row mt-5 px-5">
        <div class="col text-right">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Categories</button>
        </div>
    </div>
    <div class="row px-5 mt-2">
        <div class="col">
            <table class="table text-center responsive table-bordered">
                <thead class="thead bg-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Sub Categories</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <!-- Modal -->
    @include('admin.modal-a-categories')
     <!-- Modal -->
</div>
@endsection
@section('script')
    <script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
@endsection