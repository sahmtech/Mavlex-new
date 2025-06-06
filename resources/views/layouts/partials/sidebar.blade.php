@inject('module_util', 'App\Utils\ModuleUtil')

@php
$common_settings = !empty(session('business.common_settings')) ? session('business.common_settings') : [];
$pos_settings = !empty(session('business.pos_settings')) ? json_decode(session('business.pos_settings'), true) : [];
$business_id = session()->get('user.business_id');
$business = auth()->user()->business;
$lightLogo = $business->light_logo;
$darkLogo = $business->dark_logo;
$app_logo = $app_settings->app_logo ? json_decode($app_settings->app_logo, true) : [];
$app_logo_light = $app_logo['light'] ?? null;
$app_logo_dark = $app_logo['dark'] ?? null;
$is_admin = auth()->user()->hasRole('Admin#' . session('business.id')) ? true : false;
$enabled_modules = !empty(session('business.enabled_modules')) ? session('business.enabled_modules') : [];
$is_mfg_enabled = $module_util->moduleSidebar($business_id, 'Manufacturing');
$is_crm_enabled = $module_util->moduleSidebar($business_id, 'Crm');
$is_essentials_enabled = $module_util->moduleSidebar($business_id, 'Essentials');
$is_accounting_enabled = $module_util->moduleSidebar($business_id, 'Accounting');
$is_superadmin_enabled = $module_util->moduleSidebar($business_id, 'Superadmin');
$is_repair_enabled =    $module_util->moduleSidebar($business_id, 'Repair');
$is_connector_enabled = $module_util->moduleSidebar($business_id, 'Connector');
$is_desktopapp_enabled = $module_util->moduleSidebar($business_id, 'Desktopapp');
$is_hms_enabled = $module_util->moduleSidebar($business_id, 'Hms');
$is_woocommerce_enabled = $module_util->moduleSidebar($business_id, 'Woocommerce');
$is_poscustom_enabled = $module_util->moduleSidebar($business_id, 'PosCustom');
$is_productcatalogue_enabled = $module_util->moduleSidebar($business_id, 'ProductCatalogue');
$is_zatca_enabled = $module_util->moduleSidebar($business_id, 'Zatca');
$is_currency_exchange_enabled = $module_util->moduleSidebar($business_id, 'CurrencyExchangeRate');
$is_project_enabled = $module_util->moduleSidebar($business_id, 'Project');
$is_paymentreconciliation_enabled = $module_util->moduleSidebar($business_id, 'PaymentReconciliation');
$is_gym_enabled = $module_util->moduleSidebar($business_id, 'Gym');
$is_loginlayouts_enabled =$module_util->moduleSidebar($business_id, 'LoginLayouts');
@endphp

<!-- Left side column. contains the logo and sidebar -->
<aside class="no-print main-sidebar " id="main-sidebar">
  <!-- Sidebar top -->
  <div class="top">
    <div class="logo">
      @php
        if ($app_settings->enable_custom_sidebar_logo && !empty($darkLogo) && file_exists(public_path('uploads/business_logos/' . $darkLogo))) {
            $dark_logo_src = asset('uploads/business_logos/' . $darkLogo);
        } elseif (!empty($app_logo_dark) && file_exists(public_path('uploads/app_logos/' . $app_logo_dark))) {
            $dark_logo_src = asset('uploads/app_logos/' . $app_logo_dark);
        } else {
            $dark_logo_src = asset('img/pictures/logo.png?v=' . $asset_v);
            $dark_hidden = true;
        }
        if ($app_settings->enable_custom_sidebar_logo && !empty($lightLogo) && file_exists(public_path('uploads/business_logos/' . $lightLogo))) {
            $light_logo_src = asset('uploads/business_logos/' . $lightLogo);
        } elseif (!empty($app_logo_light) && file_exists(public_path('uploads/app_logos/' . $app_logo_light))) {
            $light_logo_src = asset('uploads/app_logos/' . $app_logo_light);
        } else {
            $light_logo_src = asset('img/pictures/logo-light.png?v=' . $asset_v);
            $light_hidden = true;
        }
      @endphp
    
    <img src="{{ $dark_logo_src }}" alt="logo" width="140px" class="light-mode-logo" @if(isset($dark_hidden)) style="display: none;" @endif>
    <img src="{{ $light_logo_src }}" alt="logo" width="140px" class="dark-mode-logo" @if(isset($light_hidden)) style="display: none;" @endif>
</div>
 <!-- Toggle Sidebar Button -->
    <button id="close-btn">
      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M18.4325 6.90405L6.4325 18.9041" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M6.4325 6.90405L18.4325 18.9041" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </button>
  </div>
  <!-- sidebar: style can be found in sidebar.less -->
  <div class="sidebar">
    <div class="links">
      <!--Super Admin Module -->
      @if($is_superadmin_enabled)
      @if (auth()->user()->can('superadmin.access_superadmin_module'))

      <a href="{{ action([\Modules\Superadmin\Http\Controllers\SuperadminController::class, 'index']) }}" class="{{ request()->segment(1) == 'superadmin' ? 'active' : '' }}">
        <img src="{{ asset('img/icons/user-management.svg?v=' . $asset_v) }}" alt="">
        <h3>@lang('superadmin::lang.superadmin')</h3>
      </a>
      @endif
      @endif

      <a href="{{ action('HomeController@index') }}" class="{{ request()->segment(1) == 'home' ? 'active' : '' }}">
        <img src="{{ asset('img/icons/dashboard.svg?v=' . $asset_v) }}" alt="">
        <h3>@lang('home.home')</h3>
      </a>
    </div>

    @if($is_admin || in_array('pos_sale', $enabled_modules) || auth()->user()->hasAnyPermission(['sell.view', 'sell.create', 'direct_sell.access', 'view_own_sell_only', 'view_commission_agent_sell', 'access_shipping', 'access_own_shipping', 'access_commission_agent_shipping', 'access_sell_return', 'direct_sell.view', 'direct_sell.update', 'access_own_sell_return']) || in_array('purchases', $enabled_modules) && (auth()->user()->can('purchase.view') || auth()->user()->can('purchase.create') || auth()->user()->can('purchase.update')) || auth()->user()->can('product.view') || auth()->user()->can('product.create') || auth()->user()->can('brand.view') || auth()->user()->can('unit.view') || auth()->user()->can('category.view') || auth()->user()->can('brand.create') || auth()->user()->can('unit.create') || auth()->user()->can('category.create') || in_array('stock_adjustment', $enabled_modules) || in_array('stock_transfers', $enabled_modules) && (auth()->user()->can('adjustment.view') || auth()->user()->can('adjustment.create')) || $is_mfg_enabled && (auth()->user()->can('manufacturing.access_recipe') || auth()->user()->can('manufacturing.access_production')) || in_array('add_sale', $enabled_modules) && (auth()->user()->hasAnyPermission(['quotation.view_all', 'quotation.view_own'])))
      <div class="divider">
        <div class="rect"></div>
        <span>@lang('lang_v1.sales_inventory')</span>
      </div>
    @endif

    <div class="links">
      @if($is_admin || in_array('pos_sale', $enabled_modules) && auth()->user()->hasAnyPermission(['sell.view', 'sell.create']) )
        <a href="{{ action('SellPosController@index') }}" class="{{ request()->segment(1) == 'pos' && request()->segment(2) == null || in_array(request()->segment(1), ['sales-order', 'shipments', 'discount', 'subscriptions', 'import-sales']) || request()->get('status') == 'draft' || request()->segment(1) == 'sells' && request()->segment(2) == 'drafts'  || request()->segment(1) == 'sell-return' && request()->segment(2) == null ? 'active' : '' }}">
          <img src="{{ asset('img/icons/POSS.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('lang_v2.pos_sales')</h3>
        </a>
      @endif

      @if($is_admin || auth()->user()->hasAnyPermission(['sell.view', 'sell.create', 'direct_sell.access', 'view_own_sell_only', 'view_commission_agent_sell', 'access_shipping', 'access_own_shipping', 'access_commission_agent_shipping', 'access_sell_return', 'direct_sell.view', 'direct_sell.update', 'access_own_sell_return']) )
        <a href="{{ action('SellController@index') }}" class="{{ request()->segment(1) == 'sells' && request()->segment(2) == null || request()->segment(1) == 'sells' && request()->segment(2) == 'create' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/shop-add.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('sale.sells')</h3>
        </a>
      @endif

      @if(in_array('purchases', $enabled_modules) && (auth()->user()->can('purchase.view') || auth()->user()->can('purchase.create') || auth()->user()->can('purchase.update')))
        <a href="{{ action('PurchaseController@index') }}" class="{{ request()->segment(1) == 'purchases' && request()->segment(2) == null || in_array(request()->segment(1), ['purchase-order', 'purchase-return']) || request()->segment(1) == 'purchases' && request()->segment(2) == 'create' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/purchases.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('purchase.purchases')</h3>
        </a>
      @endif

      @if(auth()->user()->can('product.view') || auth()->user()->can('product.create') || auth()->user()->can('brand.view') || auth()->user()->can('unit.view') || auth()->user()->can('category.view') || auth()->user()->can('brand.create') || auth()->user()->can('unit.create') || auth()->user()->can('category.create'))
        <a href="{{ action('ProductController@index') }}" class="{{ request()->segment(1) == 'products' && request()->segment(2) == null || request()->segment(1) == 'products' && request()->segment(2) == 'create' || request()->segment(1) == 'labels' && request()->segment(2) == 'show' || request()->segment(1) == 'taxonomies' && request()->get('type') == 'product' || in_array(request()->segment(1), ['variation-templates', 'import-products', 'selling-price-group', 'units', 'brands', 'warranties']) ? 'active' : '' }}">
          <img src="{{ asset('img/icons/products.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('sale.products')</h3>
        </a>
      @endif

      @if($is_admin || in_array('stock_adjustment', $enabled_modules) && (auth()->user()->can('adjustment.view') || auth()->user()->can('adjustment.create')) || in_array('stock_transfers', $enabled_modules) && (auth()->user()->can('purchase.view') || auth()->user()->can('purchase.create')))
        <a href="{{ action('StockTransferController@index') }}" class="{{ request()->segment(1) == 'stock-transfers' && request()->segment(2) == null || request()->segment(1) == 'stock-transfers' && request()->segment(2) == 'create' || request()->segment(1) == 'stock-adjustments' && request()->segment(2) == null || request()->segment(1) == 'stock-adjustments' && request()->segment(2) == 'create' || request()->segment(1) == 'import-opening-stock' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/Stock-Manager.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('lang_v1.stock_manager')</h3>
        </a>
      @endif

      @if(in_array('add_sale', $enabled_modules) && ( $is_admin || auth()->user()->hasAnyPermission(['quotation.view_all', 'quotation.view_own'])) )
        <a href="{{ action('SellController@getQuotations') }}" class="{{ request()->segment(1) == 'sells' && request()->segment(2) == 'quotations' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/Quotation.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('lang_v1.quotations')</h3>
        </a>
      @endif
    </div>

      @if($is_admin || in_array('expenses', $enabled_modules) && (auth()->user()->can('all_expense.access') || auth()->user()->can('view_own_expense')) || auth()->user()->can('account.access') && in_array('account', $enabled_modules) || auth()->user()->can('purchase_n_sell_report.view') || auth()->user()->can('contacts_report.view') || auth()->user()->can('stock_report.view') || auth()->user()->can('tax_report.view') || auth()->user()->can('trending_product_report.view') || auth()->user()->can('sales_representative.view') || auth()->user()->can('register_report.view') || auth()->user()->can('expense_report.view'))
        <div class="divider">
          <div class="rect"></div>
          <span>@lang('lang_v1.accounting')</span>
        </div>
      @endif

      <div class="links">
      @if(in_array('expenses', $enabled_modules) && (auth()->user()->can('all_expense.access') || auth()->user()->can('view_own_expense')))
        <a href="{{ action('ExpenseController@index') }}" class="{{ request()->segment(1) == 'expenses' && request()->segment(2) == null || request()->segment(1) == 'expenses' && request()->segment(2) == 'create' || request()->segment(1) == 'expense-categories' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/expenses.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('expense.expenses')</h3>
        </a>
      @endif

      @if(auth()->user()->can('account.access') && in_array('account', $enabled_modules))
        <a href="{{ action('AccountController@index') }}" class="{{ request()->segment(1) == 'account' && request()->segment(2) == 'account' || request()->segment(1) == 'account' && request()->segment(2) == 'balance-sheet' || request()->segment(1) == 'account' && request()->segment(2) == 'trial-balance' || request()->segment(1) == 'account' && request()->segment(2) == 'cash-flow' || request()->segment(1) == 'account' && request()->segment(2) == 'payment-account-report' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/payments-account.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('lang_v1.payment_accounts')</h3>
        </a>
      @endif

      {{-- @if($is_admin)
            <a href="#" class="{{ request()->segment(2) == 'payroll' ? 'active' : '' }}">
              <img src="{{ asset('img/icons/payments-account.svg?v=' . $asset_v) }}" alt="">
              <h3>@lang('essentials::lang.payroll') <span class="badge rounded-pill" style="color: #011530; background-color: #EFEFEF; font-size: 10px;">Coming soon</span></h3>
            </a>
           @endif --}}

      @if(Module::has('Accounting'))
      @if($is_accounting_enabled)
      @if(auth()->user()->can('accounting.manage_accounts'))
        <a href="{{action([\Modules\Accounting\Http\Controllers\CoaController::class, 'index'])}}" class="{{ request()->segment(2) == 'chart-of-accounts' || request()->segment(2) == 'transfer' || request()->segment(2) == 'account-sub-type' || request()->segment(2) == 'account-detail-type' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('accounting::lang.chart_of_accounts')</h3>
        </a>
      @endif
      @if(auth()->user()->can('accounting.view_journal'))
        <a href="{{action([\Modules\Accounting\Http\Controllers\JournalEntryController::class, 'index'])}}" class="{{ request()->segment(2) == 'journal-entry' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('accounting::lang.journal_entry')</h3>
        </a>
      @endif
      @if(auth()->user()->can('accounting.manage_budget'))
        <a href="{{action([\Modules\Accounting\Http\Controllers\BudgetController::class, 'index'])}}" class="{{ request()->segment(2) == 'budget' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('accounting::lang.budget')</h3>
        </a>
      @endif
      @if (auth()->user()->can('accounting.access_accounting_module') ) 
        <a href="{{ action('\Modules\Accounting\Http\Controllers\AccountingController@dashboard') }}" class="{{ request()->segment(1) == 'accounting' && request()->segment(2) == 'dashboard' || request()->segment(2) == 'transactions' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('lang_v1.account_overview')</h3>
        </a>
      @endif
      @endif
      @if(Module::has('PaymentReconciliation') && $is_paymentreconciliation_enabled) 
        @include('paymentreconciliation::layouts.sidebar')
      @endif
      @endif
      @if(auth()->user()->can('purchase_n_sell_report.view') || auth()->user()->can('contacts_report.view') || auth()->user()->can('stock_report.view') || auth()->user()->can('tax_report.view') || auth()->user()->can('trending_product_report.view') || auth()->user()->can('sales_representative.view') || auth()->user()->can('register_report.view') || auth()->user()->can('expense_report.view') || auth()->user()->can('accounting.view_reports'))
      <div class="toogle-sidebar-submenu">
        <div class="toogle-sidebar-submenu-flex">
          <img src="{{ asset('img/icons/reports.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('report.reports')</h3>
        </div>
        <div class="side-submenu">
          @if(auth()->user()->can('purchase_n_sell_report.view'))
          <a href="{{ action('ReportController@getproductSellReport') }}" class="{{ request()->segment(2) == 'product-sell-report' ? 'active' : '' }}">
            @lang('report.sales')
          </a>
          @endif
          @if(auth()->user()->can('stock_report.view'))
          <a href="{{ action('ReportController@getStockReport') }}" class="{{ request()->segment(2) == 'stock-report' ? 'active' : '' }}">
            @lang('report.stock_report')
          </a>
          @endif
          @if(auth()->user()->can('purchase_n_sell_report.view'))
          <a href="{{ action('ReportController@getproductPurchaseReport') }}" class="{{ request()->segment(2) == 'product-purchase-report' ? 'active' : '' }}">
            @lang('purchase.purchases')
          </a>
          @endif
          @if(auth()->user()->can('profit_loss_report.view'))
          <a href="{{ action('ReportController@getProfitLoss') }}" class="{{ request()->segment(2) == 'profit-loss' ? 'active' : '' }}">
            @lang('report.profit_loss')
          </a>
          @endif
          @if(auth()->user()->can('stock_report.view'))
          <a href="{{ action('ReportController@getExpenseReport') }}" class="{{ request()->segment(2) == 'expense-report' ? 'active' : '' }}">
            @lang('report.expense_account')
          </a>
          @endif

          @if(auth()->user()->can('contacts_report.view'))
          <a href="{{ action('ReportController@getCustomerSuppliers') }}" class="{{ request()->segment(2) == 'customer-supplier' ? 'active' : '' }}">
            @lang('report.contact_crm')
          </a>
          @endif
          @if(Module::has('Accounting'))
          @if($is_accounting_enabled)
          @if(auth()->user()->can('accounting.view_reports'))
          <a href="{{action([\Modules\Accounting\Http\Controllers\ReportController::class, 'index'])}}" class="{{ request()->segment(2) == 'reports' ? 'active' : '' }}">
            @lang('accounting::lang.accounting')
          </a>
          @endif
          @endif
          @endif

        </div>
      </div>
      @endif

    </div>

    @if($is_crm_enabled || auth()->user()->can('supplier.view') || auth()->user()->can('customer.view') || auth()->user()->can('supplier.view_own') || auth()->user()->can('customer.view_own') || auth()->user()->can('crm.access_all_leads') || auth()->user()->can('crm.access_own_leads'))
      <div class="divider">
        <div class="rect"></div>
        <span>@lang('lang_v1.crm_marketing')</span>
      </div>
    @endif

    <div class="links">
      @if(auth()->user()->can('supplier.view') || auth()->user()->can('customer.view') || auth()->user()->can('supplier.view_own') || auth()->user()->can('customer.view_own'))
        <a href="{{ action('ContactController@index', ['type' => 'customer']) }}" class="{{ in_array(request()->input('type'), ['supplier', 'customer']) || request()->segment(1) == 'customer-group' || request()->segment(1) == 'contacts' && request()->segment(2) == 'import' || request()->segment(1) == 'contacts' && request()->segment(2) == 'map' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/contacts.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('contact.contacts')</h3>
        </a>
      @endif

       {{--@if($is_crm_enabled && (auth()->user()->can('crm.access_all_leads') || auth()->user()->can('crm.access_own_leads')))
            <a href="#" class="{{ request()->segment(1) == 'crm' && request()->segment(2) == 'leads' ? 'active' : '' }}">
              <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
              <h3>@lang('crm::lang.leads') <span class="badge rounded-pill" style="color: #011530; background-color: #EFEFEF; font-size: 10px;">Coming soon</span></h3>
            </a>
          @endif --}}
      @if($is_crm_enabled)
      @if((auth()->user()->can('crm.access_all_campaigns') || auth()->user()->can('crm.access_own_campaigns')))
        <a href="{{ action('\Modules\Crm\Http\Controllers\CampaignController@index') }}" class="{{ request()->segment(1) == 'crm' && request()->segment(2) == 'campaigns' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/Broadcast.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('crm::lang.campaigns')</h3>
        </a>
      @endif

      @if((auth()->user()->can('crm.access_all_campaigns') || auth()->user()->can('crm.access_own_campaigns')))
        <a href="{{ action('\Modules\Crm\Http\Controllers\CrmDashboardController@index') }}" class="{{ request()->segment(1) == 'crm' && request()->segment(2) == 'dashboard' || request()->get('type') == 'life_stage' || request()->get('type') == 'source' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('crm::lang.overview')</h3>
        </a>
      @endif
      @endif
    </div>
    <div class="links">
      @if($is_essentials_enabled || in_array('booking', $enabled_modules) && (auth()->user()->can('crud_all_bookings') || auth()->user()->can('crud_own_bookings')))
        <div class="divider">
          <div class="rect"></div>
          <span>@lang('lang_v1.hrm_essentials')</span>
        </div>
      @if($is_essentials_enabled)
        <a href="{{ action('\Modules\Essentials\Http\Controllers\DashboardController@hrmDashboard') }}" class="{{ request()->segment(1) == 'hrm' && request()->segment(2) != 'payroll' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('essentials::lang.hrm')</h3>
        </a>
        <a href="{{ action('\Modules\Essentials\Http\Controllers\ToDoController@index') }}" class="{{ request()->segment(1) == 'essentials' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/task-square.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('essentials::lang.essentials')</h3>
        </a>
      @endif
    </div>

    <div class="links">
      @if(in_array('booking', $enabled_modules) && (auth()->user()->can('crud_all_bookings') || auth()->user()->can('crud_own_bookings')))
        <a href="{{ action('Restaurant\BookingController@index') }}" class="{{ request()->segment(1) == 'bookings' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/crm.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('restaurant.bookings')</h3>
        </a>
      @endif
    </div>
    @endif

      <!-- Premium Modules-->
      <div class="divider">
        <div class="rect"></div>
        <span>@lang('lang_v1.premium_modules')</span>
      </div>
      <div class="links">

      <!-- Manufacturing Module -->
      @if($is_mfg_enabled && (auth()->user()->can('manufacturing.access_recipe') || auth()->user()->can('manufacturing.access_production')))
        <a href="{{ action('\Modules\Manufacturing\Http\Controllers\RecipeController@index') }}" class="{{ request()->segment(1) == 'manufacturing' ? 'active' : '' }}">
          <img src="{{ asset('img/icons/manufacturing.svg?v=' . $asset_v) }}" alt="">
          <h3>@lang('manufacturing::lang.manufacturing')</h3>
        </a>
      @endif

      <!-- Repair Module -->
      @php
        $user = auth()->user();
        $hasRepairPermission = $user->can('superadmin') || $user->can('repair.view') || $user->can('job_sheet.view_assigned') || $user->can('job_sheet.view_all');
      @endphp

      @if ($is_repair_enabled && $hasRepairPermission)
        <a href="{{ action('\Modules\Repair\Http\Controllers\DashboardController@index') }}" class="{{ request()->segment(1) == 'repair' && request()->segment(2) != 'payroll' ? 'active' : '' }}">
            <i class="fa fa-wrench"></i>
            <h3>@lang('repair::lang.repair')</h3>
        </a>
      @endif

      <!-- Shopify Module -->
      @if(Module::has('Shopify'))
      @endif
      <!-- Woocommerce Module -->
      @if($is_woocommerce_enabled && (auth()->user()->can('woocommerce.syc_categories') || auth()->user()->can('woocommerce.sync_products') || auth()->user()->can('woocommerce.sync_orders') || auth()->user()->can('woocommerce.map_tax_rates') || auth()->user()->can('woocommerce.access_woocommerce_api_settings'))) 
      <a href="{{ action([\Modules\Woocommerce\Http\Controllers\WoocommerceController::class, 'index']) }}" class="{{ request()->segment(1) == 'woocommerce'  ? 'active' : '' }}">
        <i class="fab fa-wordpress"></i>
        <h3>@lang('woocommerce::lang.woocommerce')</h3>
      </a>
      @endif
      <!-- Project Module -->
      @if(Module::has('Project'))
      @if($is_project_enabled)
      <a href="{{ action([\Modules\Project\Http\Controllers\ProjectController::class, 'index']) . '?project_view=list_view' }}" class="{{ (request()->segment(1) == 'project' || request()->get('type') == 'project') ? 'active' : '' }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-brand-asana">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M12 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            <path d="M17 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
            <path d="M7 16m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
        </svg>
        {{ __('project::lang.project') }}
        </a>
      @endif
      @endif
      <!-- ProductCatalogue -->
      @if($is_productcatalogue_enabled) 
        <a href="{{ action([\Modules\ProductCatalogue\Http\Controllers\ProductCatalogueController::class, 'generateQr'])}}" class="{{ request()->segment(1) == 'product-catalogue'  ? 'active' : '' }}">
          <i class="fa fas fa-qrcode"></i>
          <h3>@lang('productcatalogue::lang.catalogue_qr')</h3>
        </a>
      @endif
      <!-- AiAssistance Module -->
      @if(Module::has('AiAssistance'))
      @endif
      <!-- AssetManagement Module -->
      @if(Module::has('AssetManagement'))
      @endif
      <!-- Cms Module -->
      @if(Module::has('Cms'))
      @include('cms::layouts.sidebar')
      @endif
      <!-- Connector/API Module -->
      @if (auth()->user()->can('superadmin') && $is_connector_enabled) 
        <a href="{{ action([\Modules\Connector\Http\Controllers\ClientController::class, 'index']) }}" class="{{ request()->segment(1) == 'connector'  ? 'active' : '' }}">
          <i class="fa fas fa-network-wired"></i>
          <h3>@lang('connector::lang.connector_clients')</h3>
        </a>
      @endif
      <!-- Connector/API Module -->
      @if (auth()->user()->can('superadmin') && $is_desktopapp_enabled) 
        <a href="{{ action([\Modules\Desktopapp\Http\Controllers\ClientController::class, 'index']) }}" class="{{ request()->segment(1) == 'desktopapp'  ? 'active' : '' }}">
          <i class="fa fas fa-network-wired"></i>
          <h3>@lang('desktopapp::lang.desktopapp_clients')</h3>
        </a>
      @endif
      <!-- Spreadsheet Module -->
      @if(Module::has('Spreadsheet'))
      @endif
      <!-- Quickbooks Module -->
      @if(Module::has('Quickbooks'))
      @endif
      <!-- Hotel Management System Module -->
      @if($is_hms_enabled)
        <a href="{{ action([\Modules\Hms\Http\Controllers\HmsController::class, 'index']) }}" class="{{ request()->segment(1) == 'hms'  ? 'active' : '' }}">
        <i class="fas fa-hotel"></i>
        <h3>@lang('hms::lang.hms')</h3>
        </a>
      @endif    
      <!-- CustomDashboard Module-->
      @if(Module::has('CustomDashboard'))
      @endif
      <!-- InboxReport Module -->
      @if(Module::has('InboxReport'))
      @endif
      <!-- FieldForce Module -->
      @if(Module::has('FieldForce'))
      @endif
      <!-- Ecommerce Module -->
      @if(Module::has('Shop'))
      @endif
      <!-- Partner Management Module -->
      @if(Module::has('Partner'))
      @endif
      <!-- Advance Inventory Mangement Module -->
      @if(Module::has('InvetoryMangament'))
      @endif
      <!-- Whatsapp Module -->
      @if(Module::has('Whatsapp'))
      @endif
      <!-- Queue Management Module -->
      @if(Module::has('Queue'))
      @endif
      <!-- Garage Management Module -->
      @if(Module::has('Garage'))
      @endif
      <!-- Table Order Module -->
      @if(Module::has('TableOrder'))
      @endif
      <!-- Zatca Module -->
      @if(Module::has('Zatca') && $is_zatca_enabled)
        @include('zatca::layouts.sidebar')
      @endif
       <!-- Gym Module -->
      @if(Module::has('Gym') && $is_gym_enabled)
        @include('gym::layouts.sidebar')
      @endif
       <!-- Login Layouts Module -->
       @if(Module::has('LoginLayouts') && $is_loginlayouts_enabled)
        @include('loginlayouts::layouts.sidebar')
       @endif
      <!-- Super Backup Module-->
      @if(Module::has('SuperBackup'))
      @endif
      <!-- Track and Trace Module-->
      @if(Module::has('TrackAndTrace'))
      @endif
      <!-- Currency Exchange Rate -->
      @if(Module::has('CurrencyExchangeRate') && $is_currency_exchange_enabled) 
      @if (auth()->user()->can('currencyexchangerate.currencyexchangerate.view'))
        <a href="{{action([\Modules\CurrencyExchangeRate\Http\Controllers\CurrencyExchangeRateController::class, 'index'])}}" class="{{ request()->segment(1) == 'exchange-rates'  ? 'active' : '' }}"><i class="fas fa-coins"></i><h3>@lang('currencyexchangerate::lang.currency_exchange_rate')</h3></a> 
      @endif
      @endif 
     {{-- @php
          $module_path = base_path('Modules'); 
          $modules = is_dir($module_path) ? array_diff(scandir($module_path), ['.', '..']) : [];
          $business_id = session()->get('user.business_id');
      @endphp
      @foreach ($modules as $module)
        @php
          $module_lower = strtolower($module);
          $sidebar_view = "{$module_lower}::layouts.sidebar";
          $is_enabled = $module_util->moduleSidebar($business_id, $module);
        @endphp
        @if ($is_enabled && View::exists($sidebar_view))
              @includeIf($sidebar_view)
        @endif
      @endforeach  --}}
    
    </div>
  </div>
</aside>