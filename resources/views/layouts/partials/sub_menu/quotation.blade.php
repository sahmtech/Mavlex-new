

<div class="storys-container">
<a href="{{ action('SellController@getQuotations') }}" class="sub-menu-item {{ request()->segment(1) == 'sells' && request()->segment(2) == 'quotations' || request()->get('status') == 'quotation' ? 'active' : '' }}">@lang('lang_v1.quotations')</a>
</div>