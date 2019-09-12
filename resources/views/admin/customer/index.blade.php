@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center"> {{ __ ('All Customers') }} </h3>
            </div>
            <div class="col-md-12">
                <div class="album py-12 bg-light">
                    <div class="container">
                        <div class="row ">
                            @each('admin.customer.parts.customer_view',$customers,'customer')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        {{$customers->links()}}
    </div>
@endsection



















