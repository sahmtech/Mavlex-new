@php
    $is_mobile = isMobile();
@endphp

<div class="storys-container">
    {{-- Customer View Links --}}
    @canany(['customer.view', 'customer.view_own'])
        <a href="{{ action('ContactController@index', ['type' => 'customer']) }}" 
           class="sub-menu-item {{ request()->input('type') == 'customer' ? 'active' : '' }}">
            @lang('report.customer')
        </a>
    @endcanany

    {{-- Supplier View Links --}}
    @canany(['supplier.view', 'supplier.view_own'])
        <a href="{{ action('ContactController@index', ['type' => 'supplier']) }}" 
           class="sub-menu-item {{ request()->input('type') == 'supplier' ? 'active' : '' }}">
            @lang('report.supplier')
        </a>
    @endcanany

    {{-- Import Contacts Links --}}
    @canany(['supplier.create', 'customer.create'])
        <a href="{{ action('ContactController@getImportContacts') }}" 
           class="sub-menu-item {{ request()->segment(1) == 'contacts' && request()->segment(2) == 'import' ? 'active' : '' }}">
            @lang('lang_v1.import_contacts')
        </a>
    @endcanany

    {{-- Customer Groups Links --}}
    @canany(['customer.view', 'customer.view_own'])
        <a href="{{ action('CustomerGroupController@index') }}" 
           class="sub-menu-item {{ request()->segment(1) == 'customer-group' ? 'active' : '' }}">
            @lang('lang_v1.customer_groups')
        </a>
    @endcanany
</div>
