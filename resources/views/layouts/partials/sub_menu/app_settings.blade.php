<div class="storys-container">
<a href="{{ url('app/settings') }}"
class="sub-menu-item {{ request()->segment(2) == 'settings' ? 'active' : '' }}">
<span>@lang('settings.app_settings')</span>
</a>
<a href="{{ url('app/locked-users') }}"
class="sub-menu-item {{ request()->segment(2) == 'locked-users' ? 'active' : '' }}">
<span>@lang('settings.locked_users')</span>
</a>
{{-- DO NOT ENABLE FEATURE UNDER DEVELOPMENT --}}
{{-- <a href="{{ url('stock-rebuild/reset-mapping') }}"
class="sub-menu-item {{ request()->segment(1) == 'stock-rebuild' ? 'active' : '' }}">
<span>@lang('settings.reset_mapping')</span>
</a> --}}
</div>