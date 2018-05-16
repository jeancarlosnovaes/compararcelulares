@extends( 'layouts.app' )
@section( 'content' )
<header>

</header>
<div class="coupons">
    @foreach( $coupons as $coupon )
        <div class="coupon">
            <li class="coupons-item">
                <div class="coupon-item-body">
                    <div class="coupon-category">    
                        <span class="coupon-category-title"> 
                            <span class="coupon-category-title-text">{{ $coupon->category }}</span>
                            <span class="coupon-category-help">?</span>
                        </span>
                    </div>
                    <div class="coupon-store">
                        <div class="coupon-store-image">
                            <img src="{{ $coupon->image }}" alt="{{ $coupon->title }}">
                        </div>
                        <div class="coupon-url">
                            <h3 class="coupon-url-title">
                                <a class="coupon-url-title-link" href="{{ $coupon->url }}" target="_blank" onclick="">{{ $coupon->title }}</a>
                            </h3>
                        </div>
                        <div class="coupon-description">
                            <span class="coupon-description-more">+</span>
                            <p>{{ $coupon->description }}</p>
                        </div>
                    </div>
                    <div class="coupon-see-descount">
                        <a class="coupon-see-descount-url" href="{{ $coupon->url }}" target="_blank">Ver desconto</a>
                    </div>
                    <div class="coupon-info">
                        <span class="coupon-info-discount" title="">
                            <del>{{ $coupon->discount }}</del>
                        </span>
                        <span class="coupon-info-start-date" title="">
                            <del>{{ $coupon->start_date }}</del>
                        </span>
                        <span class="coupon-info-end-date" title="">
                            <del>{{ $coupon->end_date }}</del>
                        </span>
                    </div>
                </div>
            </li>
        </div>
    @endforeach
</div>
<aside>
    
</aside>
<footer>

</footer>
@endsection