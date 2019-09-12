@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center"> {{ __ ('My Account ('.Auth::user()->name.')') }} </h1>
                <h3 class="text-center"> {{ __ ('Name -'.Auth::user()->name) }} </h3>
                <h3 class="text-center"> {{ __ ('SurName- '.Auth::user()->surname) }} </h3>
                <h3 class="text-center"> {{ __ ('Telefon-'.Auth::user()->telefon) }} </h3>
                <h3 class="text-center"> {{ __ ('Email-'.Auth::user()->email) }} </h3>
                <h3 class="text-center"> {{ __ ('Birthday-'.date_create( Auth::user()->birthday)->Format('Y-m-d')) }} </h3>
            </div>
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            </div>
            <form method="LINK" action={{ url('account/'.Auth::user()->id.'/edit') }}>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Account  Edit') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>


    </div>
@endsection













