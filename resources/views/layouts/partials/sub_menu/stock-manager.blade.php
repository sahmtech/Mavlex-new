@php
    $is_mobile = isMobile();
@endphp

<div class="storys-container">
@canany(['purchase.view', 'purchase.create'])
    <a href="{{ action('StockTransferController@index') }}" class="sub-menu-item {{ request()->segment(1) == 'stock-transfers' && request()->segment(2) == null || request()->segment(1) == 'stock-transfers' && request()->segment(2) == 'create' || request()->segment(1) == 'stock-transfers' && request()->segment(3) == 'edit' ? 'active' : '' }}">@lang('lang_v1.stock_transfers')</a>
    @endcanany

    @can('adjustment.create')
    <a href="{{ action('StockAdjustmentController@index') }}" class="sub-menu-item {{ request()->segment(1) == 'stock-adjustments' && request()->segment(2) == null || request()->segment(1) == 'stock-adjustments' && request()->segment(2) == 'create' ? 'active' : '' }}">@lang('stock_adjustment.stock_adjustment')</a>
    @endcan

    @can('product.opening_stock')
    <a href="{{ action('ImportOpeningStockController@index') }}" class="sub-menu-item {{ request()->segment(1) == 'import-opening-stock' ? 'active' : '' }}">@lang('lang_v1.import_opening_stock')</a>
    @endcan
</div>