@foreach ($categories as $child)

    @if ($child->children && $child->children->count() > 0)
        <li class="level{{$level}} chevron @if(request()->path() . '/' == $child->url) active @endif">
            <a href="{{$child->url}}" class="@if(Route::current()->getName() == $child->url) active @endif"> {{$child->title}} </a>
            <span></span>
            <ul class="catalog-list__secondary">
                @include('includes.menu_inner', ['categories' => $child->children,'level' =>$level +1 ])
            </ul>
        </li>
    @else
        <li class="level{{$level}} @if(Route::current()->getName() == $child->url) active @endif">
            <a href="{{$child->url}}">{{$child->title}}</a>
        </li>
    @endif

@endforeach
