@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3 class="text-center"> {{ __ ('Create Product.') }} </h3>
            </div>
            <form action="{{route ('admin.product.store')}}" method="post"
                  enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                               name="title" value="{{ old('title') }}" max="50" required autocomplete="title" autofocus>
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="description"
                           class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                    <div class="col-md-6">

                        <p><textarea rows="10" cols="45" name="description" id="description" cols="40" rows="5"
                                     class="form-control @error('description') is-invalid @enderror"
                                     maxlength="100" required placeholder="description"
                                     autofocus>{{ old('description') }}</textarea></p>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="short_description"
                           class="col-md-4 col-form-label text-md-right">{{ __('Short description') }}</label>
                    <div class="col-md-6">
                        <p><textarea rows="10" cols="45" name="short_description" id="short_description" cols="40"
                                     rows="3"
                                     class="form-control @error('short_description') is-invalid @enderror"
                                     maxlength="50" required
                                     placeholder="short description"
                                     autofocus>{{ old('short_description') }}</textarea></p>

                        @error('short_description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sku" class="col-md-4 col-form-label text-md-right">{{ __('Sku') }}</label>
                    <div class="col-md-6">
                        <input id="sku" type="text" class="form-control @error('sku') is-invalid @enderror" name="sku"
                               value="{{ old('sku') }}" minlength="3" maxlength="50" size="50" required autocomplete="0"
                               autofocus>
                        @error('sku')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>
                    <div class="col-md-6">
                        <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                               name="price" value="{{ old('price') }}" step="any" min="1" required autocomplete="price"
                               autofocus>
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="discount" class="col-md-4 col-form-label text-md-right">{{ __('Discount') }}</label>
                    <div class="col-md-6">
                        <input id="discount" type="number" class="form-control @error('discount') is-invalid @enderror"
                               name="discount" value="{{ old('discount') }}" step="any" min="0" required
                               autocomplete="discount" autofocus>
                        @error('discount')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="in_stock" class="col-md-4 col-form-label text-md-right">{{ __('In stock') }}</label>
                    <div class="col-md-6">
                        <p>
                            <input id="in_stock" type="number"
                                   class="form-control @error('in_stock') is-invalid @enderror"
                                   name="in_stock" value="{{ old('in_stock') }}" required autocomplete="in_stock"
                                   autofocus>
                        </p>
                        @error('in_stock')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Count') }}</label>
                    <div class="col-md-6">
                        <input id="count" type="number" class="form-control @error('count') is-invalid @enderror"
                               name="count" value="{{ old('count') }}" step="any" min="0" autocomplete="count"
                               autofocus>
                        @error('count')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="thumbnail" class="col-md-4 col-form-label text-md-right">{{ __('Thumbnail') }}</label>
                    <div class="col-md-6">
                        <input id="thumbnail" type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                               name="thumbnail" value="{{ old('thumbnail') }}" accept="image/jpeg,image/png" required
                               autocomplete="thumbnail">
                        @error('thumbnail')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                {{----}}
                <div class="form-group row">
                    <label for="thumbnail"
                           class="col-md-4 col-form-label text-md-right">{{ __('Product Galleries') }}</label>
                    <div class="col-md-6">
                        <input id="thumbnail" type="file"
                               class="form-control @error('productgalleries') is-invalid @enderror"
                               name="productgalleries[ ]" value="{{ old('productgalleries') }}"
                               accept="image/jpeg,image/png"
                               autocomplete="productgalleries" multiple="multiple">
                        @error('productgalleries')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                {{--                --}}
                <p>
                    <label for="selectcategory"
                           class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>
                    <select id="selectcategory" name="selectcategory[ ]" multiple="multiple" size="3" required>
                        @foreach($categories as $category)
                            <option value={{$category->id}} >{{$category->title}}</option>
                        @endforeach
                    </select>
                </p>
                @error('selectcategory')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <button type="submit" class="btn btn-primary">Create Product.</button>
            {{--        </div>--}}

        </div>

        </form>
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>


@endsection













