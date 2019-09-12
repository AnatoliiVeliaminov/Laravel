@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center"> {{__('CATEGORY') }}</h1>
                <h3 class="text-center"> {{__('TITLE-'.$category->title) }}</h3>
                <h5 class="text-center"> {{__('DESCRIPTION-'.$category->description) }}</h5>

            </div>
            <div class="col-md-12">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            @each('products.parts.product_view',$products,'product')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
