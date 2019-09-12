<div class="col-md-12">
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-baseline">
                <a href="{{route('categories.show',$category->id)}}"

                   class="text-muted btn-outline-dark">
                    <h3>{{__ ($category->title)}}</h3>
                    <hr>
                    {{__ ($category->description)}}
                    <hr>
                    <div class="btn-group">
                        <a href="{{ route('categories.show', $category->id) }}"
                           class="btn btn-primary">{{ __('Show') }}
                        </a>
                        @auth
                            @if (Auth::user()->isAdmin())
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.category.edit',  $category->id) }}"
                                           class="btn btn-danger">{{ __('EDIT') }}</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.category.delete',  $category->id) }}"
                                               class="btn btn-dark">{{ __('DELETE') }}</a>
                                        </div>
                                        @endif

                                        @endauth

                                    </div>
                                </div>
                </a>
            </div>
        </div>
    </div>
</div>
