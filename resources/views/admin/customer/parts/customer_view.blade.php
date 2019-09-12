<div class="container">
    <div class="card mb-4 shadow-sm">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center">{{('Name-'.$customer->name)}}  </h1>
                <h3 class="text-center"> {{  ('SurName- '.$customer->surname) }} </h3>
            </div>
            <div class="btn-group">

                @auth
                    @if (Auth::user()->isAdmin())
                        <a href="{{ route('admin.customer', $customer->id) }}"
                           class="btn btn-primary">{{ __('Show') }}
                        </a>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('admin.customers.edit', $customer->id) }}"
                                   class="btn btn-danger">{{ __('EDIT') }}</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('admin.customers.delete', $customer->id) }}"
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
