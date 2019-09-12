<div class="container">
    <div class="card mb-4 shadow-sm">

        <div class="card-body">
            <h3>
                Number Order:
            </h3>
            <h5 class="card-title">{{__($order->id) }}</h5>
            <hr>
            Status: <span class="text-muted">{{ $order->getStatus()}}</span>
            <hr>
            <h5>
                Total price:
            </h5>
            <span class="text-muted">{{ $order->total_price}}$</span>
            <div class="d-flex flex-column justify-content-center align-items-start">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{ route('admin.order', $order->id) }}"
                           class="btn btn-primary">{{ __('Show') }}</a>
                    </div>
                    @auth
                        @if (Auth::user()->isAdmin())
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('admin.order.edit', $order->id) }}"
                                       class="btn btn-danger">{{ __('EDIT') }}</a>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.order.delete', $order->id) }}"
                                           class="btn btn-dark">{{ __('DELETE') }}</a>
                                    </div>
                                    @endif
                                    @endauth
                                </div>
                            </div>
                </div>
            </div>
        </div>

