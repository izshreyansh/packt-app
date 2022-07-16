@extends('layout')

@section('content')
    <div id="content" role="main">
        <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
            <a href="/">Home</a> / <a href="/shop">Shop</a> /
            {{ $book['details']['title'] }}
        </nav>
        <div itemscope itemtype="http://schema.org/Product" class="product">
            <div class="images">
                <a href="/" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto">
                    <img src="{{$book['details']['images']['cover']}}?token={{config('app.token')}}" alt="{{ $book['details']['title'] }}" />
                </a>
            </div>
            <div class="summary entry-summary">
                <h1 itemprop="name" class="product_title entry-title">
                    {{ $book['details']['title'] }}
                </h1>
                <br />
                <br />
                @foreach($book['price']['prices'] as $offer=>$price)
                <div itemprop="offers">
                    <p class="price">
                        <span style="text-transform: uppercase">{{ $offer }}:</span>
                        <span class="amount">₹{{ $price['INR'] }}</span>
                    </p>
                </div>
                @endforeach

                <div itemprop="description">
                    <p>
                        {!! $book['details']['description'] !!}
                    </p>
                </div>
                <form class="cart" method="get" action="{{ $book['details']['url'] }}">
                    <button type="submit" class="single_add_to_cart_button button alt">
                        Buy now
                    </button>
                </form>
                <div class="product_meta">
                <span class="posted_in">Categories:
                    @foreach($book['categories'] as $category)
                        <span rel="tag">#{{$category}}</span>,
                    @endforeach
                </span>
                </div>
            </div>
            <!-- .summary -->
            <div class="woocommerce-tabs wc-tabs-wrapper">
                <div class="panel entry-content wc-tab" id="tab-description">
                    <h2>Learn</h2>
                    <p>
                        {!! $book['details']['learn'] !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
