<div class="flex-item-3">
    <div class="catalog-item">
        <div class="text">
            <h3 class="name"><a href="{{$product->url}}">{{$product->title}}</a></h3>
            @if(isset($product->vendor_id))
                <h5 class="brand-name">{{$product->vendor->title}}</h5>
            @endif
            @if($product->discount)
                <span class="label">скидка</span>
            @endif
            @if($product->new)
                <span class="label new">Новый</span>
            @endif
            @if($product->hit)
                <span class="label hit">скидка</span>
            @endif
        </div>
        <a href="{{$product->url}}" class="img-wrapper">
            <img src="{{$product->resized('264x223')[0]}}" alt="{{$product->title}}">
        </a>
        <span class="button-container">
            <a href="#request-price" class="js-popup" data-product-title="{{$product->title}}" onclick="$('.popup-form input[name=title]').val($(this).data('product-title'))">Запросить цену</a>
        </span>
    </div>
</div>