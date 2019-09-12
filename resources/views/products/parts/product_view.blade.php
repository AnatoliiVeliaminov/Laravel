<div class="container">
    <div class="card mb-4 shadow-sm">
        @if( Storage::has ($product->thumbnail))
            <img src="{{ Storage::url($product->thumbnail) }}" height="250" width="350" class="card-img-top"
                 style="max-width: 45%; margin: 0 auto; display: block;">
        @endif

        <div class="card-body">
            <h5 class="card-title">{{__($product->title) }}</h5>
            <hr>
            <p class="card-text">{{__($product->short_description) }}</p>
            <div class="d-flex flex-column justify-content-center align-items-start">
                <small class="text-muted">Categories: </small>
                <div class="btn-group align-self-end">
                    @if(!empty($product->category()->get()))
                        @each('categories.parts.category_view', $product->category()->get(), 'category')
                    @endif
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <h5>
                        Price:
                    </h5>
                    <span class="text-muted">{{ $product->getPrice() }}$</span>

                </div>
                <div class="btn-group">
                    <a href="{{ route('product.show', $product->id) }}"
                       class="btn btn-primary">{{ __('Show') }}
                    </a>
                    @auth
                        @if (Auth::user()->isAdmin())
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('admin.product.edit', $product->id) }}"
                                       class="btn btn-danger">{{ __('EDIT') }}</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.product.delete', $product->id) }}"
                                           class="btn btn-dark">{{ __('DELETE') }}</a>
                                    </div>
                                    @endif
                                    @endauth
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
