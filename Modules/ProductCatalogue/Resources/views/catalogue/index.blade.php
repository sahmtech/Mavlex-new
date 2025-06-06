@extends('layouts.guest')
@section('title', $business->name)
@section('content')
<style>
    .category-nav {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        margin-bottom: 2em;
        position: sticky;
        top: 0;
        z-index: 999;
    }

    .nav-container {
        display: flex;
        justify-content: center;
        align-items: center;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        padding: 1em;
    }

    .nav-list {
        list-style: none;
        display: flex;
        gap: 1em;
        margin: 0;
        padding: 0;
        align-items: center;
        transition: max-height 0.3s ease;
    }

    .menu-item {
        text-decoration: none;
        color: #007bff;
        font-weight: 500;
    }

    .menu-item:hover {
        text-decoration: underline;
    }

    .menu-toggle {
        display: none;
        background: none;
        border: none;
        font-size: 1.5em;
        cursor: pointer;
        position: absolute;
        left: 1em;
        top: 50%;
        transform: translateY(-50%);
    }

    @media (max-width: 768px) {
        .menu-toggle {
            line-height: 50px;
            display: block;
        }

        .nav-list {
            flex-direction: column;
            position: absolute;
            top: 100%;
            background-color: #f8f9fa;
            left: 0;
            right: 0;
            max-height: 0;
            overflow: hidden;
        }

        .nav-list.show {
            max-height: 500px;
        }

        .nav-list li {
            padding: 1em 0;
            text-align: center;
            width: 100%;
        }
    }

    .menu-item {
        text-decoration: none;
        color: #007bff;
        font-weight: 500;
    }

    .menu-item:hover {
        text-decoration: underline;
    }

    .content-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .content-header h2,
    .content-header h4,
    .content-header p {
        margin: 10px 0;
    }

    .container {
        background-color: #fff !important;
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .product-category {
        width: 100%;
    }

    .category-title {
        font-size: 1.75em;
        margin-bottom: 1em;
        border-bottom: 1px solid #ddd;
        padding-bottom: 0.5em;
        text-align: center;
    }

    .product-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: stretch;
        gap: 30px;
        margin-top: 50px;
    }

    .product-card {
        width: 300px;
        border-radius: 10px;
        box-shadow: 0px 0px 47px -20px rgba(0, 0, 0, 1);
        background-color: #fff;
        margin: 20px 0;
        display: flex;
        flex-direction: column;
        overflow: hidden;
    }

    .product-image {
        height: 300px;
        overflow: hidden;
        padding: 10px;
        position: relative;
    }

    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s;
        border-radius: 10px;
    }

    .product-image:hover img {
        transform: scale(1.1);
    }

    .product-details {
        padding: 20px;
        margin-top: 0;
    }

    .product-title {
        font-size: 1.25rem;
        margin-bottom: 5px;
        color: #f3951e;
    }

    .product-price {
        font-size: 1rem;
        font-weight: bold;
        margin-bottom: 4px;
        color: #28a745;
    }

    .product-description {
        font-size: 1rem;
        line-height: 1.5;
        margin-bottom: 10px;
        color: #666;
    }

    .product-discount-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #dc3545;
        color: #fff;
        padding: 5px;
        font-size: 0.9rem;
        border-radius: 4px;
    }

    .stock-status {
        margin-bottom: 10px;
        color: #000;
        font-size: 0.9rem;
        font-weight: bold;
    }

    .footer a {
        text-decoration: none;
        color: #000;
        font-weight: 800;
    }

    .footer {
        color: #000;
        text-align: center;
        margin-top: 10px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .stock-status {
        margin-bottom: 10px;
        color: #000;
        font-size: 0.9rem;
        font-weight: bold;
    }

    .product-image img {
        mix-blend-mode: multiply;
    }
</style>
@php
$lightLogo = $business->light_logo;
$darkLogo = $business->dark_logo;
@endphp
<section class="content-header" id="top">
    <h2>{{$business->name}}</h2>
    <h4 class="mb-0">{{$business_location->name}}</h4>
    <p>{!! $business_location->location_address !!}</p>
</section>

<!-- Navigation -->
<nav class="category-nav">
    <div class="nav-container">
        <button class="menu-toggle" aria-label="Toggle navigation">
            ☰
        </button>
        <a class="navbar-brand menu" href="#top">
            @if(!empty($business->logo))
            <img src="{{ asset('uploads/business_logos/' . $darkLogo) }}" alt="Logo" width="80">
            @else
            <i class="fas fa-boxes"></i>
            @endif
        </a>
        <ul class="nav-list">
            @foreach($categories as $key => $value)
            <li><a href="#category{{ $key }}" class="menu-item">{{ $value }}</a></li>
            @endforeach
            <li><a href="#category0" class="menu-item">Uncategorized</a></li>
        </ul>
    </div>
</nav>


<div class="container content">
    @foreach($products as $product_category)
    @php
    $category = $product_category->first()->category ?? null;
    $category_name = $category->name ?? 'Uncategorized';
    $category_id = $category->id ?? '0';
    @endphp

    <section id="category{{ $category_id }}" class="product-category">
        <h2 class="category-title">{{ $category_name }}</h2>
        <div class="product-list">
            @foreach($product_category as $product)
            @php
            $discount = $discounts->firstWhere('brand_id', $product->brand_id)
            ?? $discounts->firstWhere('category_id', $product->category_id);
            $max_price = $product->variations->max('sell_price_inc_tax');
            $min_price = $product->variations->min('sell_price_inc_tax');
            $stock_status = '';

            if ($product->enable_stock == 1 && $product->type == 'single') {
            if ($product->variation_qty <= 0) {
                $stock_status=__('productcatalogue::lang.out_of_stock');
                } else {
                $stock_status=__('productcatalogue::lang.in_stock');
                }
                }
                @endphp

                <div class="product-card">
                <div class="product-image">
                    <img src="{{$product->image_url}}" alt="{{$product->name}}" class="main-product-image">
                    @if(!empty($discount))
                    <span class="product-discount-badge">- {{ $discount->discount_amount }}%</span>
                    @endif
                </div>
                <div class="product-details">
                    <h2 class="product-title">
                        <a href="#" class="show-product-details" data-href="{{action([\Modules\ProductCatalogue\Http\Controllers\ProductCatalogueController::class, 'show'],  [$business->id, $product->id])}}?location_id={{$business_location->id}}">
                            {{$product->name}}
                        </a>
                    </h2>

                    <p class="product-price">
                        @lang('lang_v1.price'):
                        <span class="display_currency price-display-min" data-currency_symbol="true">{{ $min_price }}</span>
                        @if($max_price != $min_price)
                        <span class="price-range">
                            - <span class="display_currency price-display-max" data-currency_symbol="true">{{ $max_price }}</span>
                        </span>
                        @endif
                    </p>

                    <p>@lang('product.sku'): <span class="sku-display">{{ $product->sku }}</span></p>


                    @if(!empty($stock_status))
                    <div class="stock-status">{{ $stock_status }}</div>
                    @endif

                    @if(!empty($product->product_description))
                    <p class="product-description">
                        {{ Str::limit(strip_tags($product->product_description), 100) }}
                    </p>
                    @endif
                    @if($product->type == 'variable')
                    @php
                    $variations = $product->variations->groupBy('product_variation_id');
                    @endphp
                    @foreach($variations as $product_variation)
                    <select class="form-control input-sm variation-select">
                        @foreach($product_variation as $variation)
                        @php
                        $variation_image_url = !empty($variation->media->first())
                        ? $variation->media->first()->display_url
                        : $product->image_url;
                        @endphp
                        <option
                            value="{{ $variation->id }}"
                            data-image_url="{{ $variation_image_url }}"
                            data-price="{{ $variation->sell_price_inc_tax }}"
                            data-sku="{{ $variation->sub_sku }}">
                            {{ $variation->name }} ({{ $variation->sub_sku }}) - {{ $variation->sell_price_inc_tax }}
                        </option>
                        @endforeach
                    </select>
                    @endforeach
                    @endif

                </div>
        </div>
        @endforeach
</div>
</section>
@endforeach
</div>

<!-- Currency Fields -->
<input type="hidden" id="__code" value="{{$business->currency->code}}">
<input type="hidden" id="__symbol" value="{{$business->currency->symbol}}">
<input type="hidden" id="__thousand" value="{{$business->currency->thousand_separator}}">
<input type="hidden" id="__decimal" value="{{$business->currency->decimal_separator}}">
<input type="hidden" id="__symbol_placement" value="{{$business->currency->currency_symbol_placement}}">
<input type="hidden" id="__precision" value="{{$business->currency_precision}}">
<input type="hidden" id="__quantity_precision" value="{{$business->quantity_precision}}">

<div class="modal fade product_modal" tabindex="-1" role="dialog"
    aria-labelledby="gridSystemModalLabel">
</div>

<div class="footer">
    <!-- Main Footer -->
    @php
    $appVersion = config('author.app_version');
    @endphp
    <footer class="main-footer no-print">
        <small>
            {{ config('app.name', 'BardPOS') }} - V{{ $appVersion }} | @lang('lang_v1.copyright_text', ['year' => date('Y')])
        </small>
    </footer>
</div>

@stop

@section('javascript')
<script type="text/javascript">
    (function($) {
        $(document).ready(function() {
            //Set global currency
            __currency_symbol = $('input#__symbol').val();
            __currency_thousand_separator = $('input#__thousand').val();
            __currency_decimal_separator = $('input#__decimal').val();
            __currency_symbol_placement = $('input#__symbol_placement').val();
            __currency_precision = $('input#__precision').length > 0 ? $('input#__precision').val() : 2;
            __quantity_precision = $('input#__quantity_precision').length > 0 ? $('input#__quantity_precision').val() : 2;

            if ($('input#p_symbol').length > 0) {
                __p_currency_symbol = $('input#p_symbol').val();
                __p_currency_thousand_separator = $('input#p_thousand').val();
                __p_currency_decimal_separator = $('input#p_decimal').val();
            }

            __currency_convert_recursively($('.content'));
        });
        var $toggleButton = $('.menu-toggle');
        var $navList = $('.nav-list');
        $toggleButton.off('click').on('click', function() {
            $navList.toggleClass('show');
        });

        $(document).on('click', '.menu-item', function(e) {
            e.preventDefault();
            var target = $(this).attr('href');

            if ($(target).length) {
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000); // 1000 ms = 1 second
            }
        });

        $(document).on('change', '.variation-select', function() {
            var $selected_option = $(this).find(':selected');
            var new_image_url = $selected_option.data('image_url');
            var new_price = $selected_option.data('price');
            var new_sku = $selected_option.data('sku');
            var $product_card = $(this).closest('.product-card');
            $product_card.find('.product-image img').attr('src', new_image_url);
            $product_card.find('.price-display-min').text(new_price);
            $product_card.find('.price-range').remove();
            $product_card.find('.sku-display').text(new_sku);
            __currency_convert_recursively($product_card);
        });

        $(document).on('click', '.show-product-details', function(e) {
            e.preventDefault();
            $.ajax({
                url: $(this).data('href'),
                dataType: 'html',
                success: function(result) {
                    $('.product_modal')
                        .html(result)
                        .modal('show');
                    __currency_convert_recursively($('.product_modal'));
                },
            });
        });
    })(jQuery);

    $(window).scroll(function() {
        var height = $(window).scrollTop();
        if (height > 180) {
            $('nav').addClass('navbar-fixed-top');
            $('.scrolltop:hidden').stop(true, true).fadeIn();
        } else {
            $('nav').removeClass('navbar-fixed-top');
            $('.scrolltop').stop(true, true).fadeOut();
        }
    });

    $(document).on('click', '.scroll', function(e) {
        $("html,body").animate({
            scrollTop: $("#top").offset().top
        }, "1000");
        return false;
    });
</script>



@endsection