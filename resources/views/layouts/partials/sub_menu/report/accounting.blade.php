@php
	$is_mobile = isMobile();
@endphp


<div class="storys-container">
	@if(auth()->user()->can('accounting.view_reports'))
		<a href="{{action([\Modules\Accounting\Http\Controllers\ReportController::class, 'index'])}}" class="sub-menu-item {{ request()->segment(2) == 'reports' ? 'active' : '' }}">@lang('accounting::lang.accounting')</a>
	@endif

	
</div>