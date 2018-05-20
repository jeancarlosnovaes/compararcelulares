@extends( 'layouts.app' )
@section( 'content' )
<header>

</header>
<div class="deals">
    @foreach( $deals as $offer )
        <div class="deals">
            <li class="deals-item">
                <div class="deals-item-body">
                    <div class="deals-product">
                        <div class="deals-product-image">
                            <img src="{{ $offer->image }}" alt="{{ $offer->title }}">
                        </div>
                        <div class="deals-product-url">
                            <h3 class="deals-product-url-title">
                                <a class="deals-product-url-title-link" href="{{ $offer->url }}" target="_blank" onclick="">{{ $offer->title }}</a>
                            </h3>
                        </div>
                        <div class="deals-product-description">
                            <span class="deals-product-description-more">+</span>
                            <p>{{ $offer->description }}</p>
                        </div>
                    </div>
                    <div class="deals-store">
                        <img src="@if ( isset( $offer->store->logo ) ) {{ $offer->store->logo }} @endif" alt="@if ( isset( $offer->store->name ) ) {{ $offer->store->name }} @endif">
                    </div>
                    <div class="deals-see-descount">
                        <a class="deals-see-descount-url" href="{{ $offer->url }}" target="_blank">See Offer</a>
                    </div>
                    <div class="deals-bottom">
                        <span class="deals-price-old" title="">
                            <del>{{ $offer->price_old }}</del>
                        </span>
                        <span class="deals-price" title="">
                            <span>{{ $offer->price }}</span>
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