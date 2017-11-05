    <!--BREADCRUMBS-->
    @if((strpos(Route::currentRouteName(), 'admin') !== false)) 
        @if ($breadcrumbs)
        <ul class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!$breadcrumb->last)
                    <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                @else
                    <li class="active">{{ $breadcrumb->title }}</li>
                @endif
            @endforeach
        </ul>
        @endif
    @else
        @if ($breadcrumbs)
            <ul class="breadcrumbs">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if (!$breadcrumb->last)
                        <li><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                    @else
                        <li class="active">{{ $breadcrumb->title }}</li>
                    @endif
                @endforeach
            </ul>
        @endif
    @endif
    
