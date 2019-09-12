@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center">{{('Customer-'.$order->getUserName())}}  </h1>
                <h5 class="text-center">{{('Status-'.$order->getStatus())}}  </h5>
                <h5 class="text-center">{{('Shipping country-'.$order->shipping_data_country)}}  </h5>
                <h5 class="text-center">{{('Shipping city-'.$order->shipping_data_city)}}  </h5>
                <h5 class="text-center">{{('Shipping address-'.$order->shipping_data_address)}}  </h5>
                <h5 class="text-center">{{('Total price-'.$order->total_price)}}  </h5>

            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url()->previous() }}"
                       class="btn btn-sm btn-outline-dark">{{ __('Back') }}</a>
                </div>
            </div>
        </div>

    </div>
@endsection
