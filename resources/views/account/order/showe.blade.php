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
                Total price: <span class="text-muted">{{ $order->total_price}}$</span>
            </h5>

            <div class="d-flex flex-column justify-content-center align-items-start">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{ url()->previous() }}"
                           class="btn btn-sm btn-outline-dark">{{ __('Back') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


