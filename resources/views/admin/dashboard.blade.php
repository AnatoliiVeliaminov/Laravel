@extends('layouts.app')

@section('content')

    <div class="container">
        @auth
            @if (Auth::user()->isAdmin())
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li>
                                    <a class="nav-link" href="{{route('admin.orders')}}">
                                        {{ ('Orders') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route('admin.customers')}}">
                                        {{ ('Сustomers') }}
                                    </a>
                                </li>

                                <li>
                                    <a class="nav-link" href="{{route('admin.product.create')}}">
                                        {{ ('Create Product') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{route('admin.category.create')}}">
                                        {{ ('Create Category') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        @endauth
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <h3 class="text-center"> {{ __ ('Admin Page') }} </h3>
                            </div>

                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
@endsection













