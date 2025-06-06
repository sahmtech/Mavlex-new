
@php
    $is_mobile = isMobile();
@endphp

<div class="storys-container">
@can('send_notifications')
<a href="{{ action('NotificationTemplateController@index') }}" class="sub-menu-item {{ request()->segment(1) == 'notification-templates' && !request()->input('page') ? 'active' : '' }}">@lang('lang_v1.notifications')</a>
<a href="{{ action('NotificationTemplateController@index', 'page=customer') }}" class="sub-menu-item {{ request()->input('page') == 'customer' ? 'active' : '' }}">@lang('lang_v1.customer_notifications')</a>
<a href="{{ action('NotificationTemplateController@index', 'page=supplier') }}" class="sub-menu-item {{ request()->input('page') == 'supplier' ? 'active' : '' }}">@lang('lang_v1.supplier_notifications')</a>
<a href="{{ action('NotificationTemplateController@index', 'page=auto') }}" class="sub-menu-item {{ request()->input('page') == 'auto' ? 'active' : '' }}">@lang('lang_v1.auto_message_settings')</a>
@endcan
</div>