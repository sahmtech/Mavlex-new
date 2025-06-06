@php
	$enabled_modules = !empty(session('business.enabled_modules')) ? session('business.enabled_modules') : [];
	$is_mobile = isMobile();
@endphp


{{--
@if($is_mobile)
<button class="btn-scroll" id="btn-scroll-left" onclick="scrollHorizontally(1)"> 
    <img src="{{ asset('img/icons/scroll-left.svg') }}" alt="">
</button>
<button class="btn-scroll" id="btn-scroll-right" onclick="scrollHorizontally(-1)"> 
    <img src="{{ asset('img/icons/scroll-right.svg') }}" alt="">
</button>
@endif
--}}

<div class="storys-container">
@if(in_array('account', $enabled_modules))
	@can('account.access')
		<a href="{{ action('AccountController@index') }}" class="sub-menu-item {{ request()->segment(1) == 'account' && request()->segment(2) == 'account' ? 'active' : '' }}">@lang('account.list_accounts')</a>

		<a href="{{ action('AccountReportsController@balanceSheet') }}" class="sub-menu-item {{ request()->segment(1) == 'account' && request()->segment(2) == 'balance-sheet' ? 'active' : '' }}">@lang('account.balance_sheet')</a>

		<a href="{{ action('AccountReportsController@trialBalance') }}" class="sub-menu-item {{ request()->segment(1) == 'account' && request()->segment(2) == 'trial-balance' ? 'active' : '' }}">@lang('account.trial_balance')</a>

		<a href="{{ action('AccountController@cashFlow') }}" class="sub-menu-item {{ request()->segment(1) == 'account' && request()->segment(2) == 'cash-flow' ? 'active' : '' }}">@lang('lang_v1.cash_flow')</a>
	@endcan
@endif
</div>