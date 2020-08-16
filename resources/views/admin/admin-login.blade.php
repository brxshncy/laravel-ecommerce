@extends('layouts.app')

@section('title')
Admin | Laravel Eccomerce
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col col-md-4">
            <div class="row mt-5">
                <div class="col">
                <form action="{{ route('admin-login') }}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header text-center">Admin Login</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" name="username" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                @if(session('flash'))
                                <div class="row">
                                    <div class="col">
                                        <div class="alert alert-danger text-center">
                                            <small> {{ session('flash')}} </small>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col text-left">
                                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection