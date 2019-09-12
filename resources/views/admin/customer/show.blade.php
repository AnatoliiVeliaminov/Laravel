@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center">{{('Name-'.$customer->name)}}  </h1>
                <h3 class="text-center"> {{  ('SurName- '.$customer->surname) }} </h3>
                <h3 class="text-center"> {{ ('Telefon-'.$customer->telefon) }} </h3>
                <h3 class="text-center"> {{ ('Email-'.$customer->email) }} </h3>
                <h3 class="text-center"> {{ ('Birthday-'.date_create( $customer->birthday)->Format('Y-m-d'))}} </h3>
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
