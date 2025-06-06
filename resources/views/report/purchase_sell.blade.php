@extends('layouts.app')
@section('title', __( 'report.purchase_sell' ))

@section('content')
<div class="main-container">
               
    <!-- Sub Menu -->
    <div class="horizontal-scroll">
        @include('layouts.partials.sub_menu.report.purchase')
    </div>

    <!-- Card Wrapper for dashboard content -->
    <div class="report-card-wrapper">
        <!-- Filter through table -->
        <div class="overview-filter">
            <div class="title">
                <h1>@lang( 'report.purchase_sell' )</h1>
                <p>@lang( 'report.reports' )</p>
            </div>

            <div class="filter">
                <select class="form-control select2" id="purchase_sell_location_filter">
                    @foreach($business_locations as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>

                <button type="button" class="btn btn-primary" id="purchase_sell_date_filter">
                    <img src="{{ asset('img/icons/filter.svg') }}" alt="filter">{{ __('messages.filter_by_date') }}
                </button>

                <button type="button" onclick="window.print();">
                    <img src="{{ asset('img/icons/printer.svg') }}" alt="filter">
                </button>

              
            </div>
        </div>
        <!-- End of Filter through table -->
        
        <div class="overall">
            <strong>@lang('lang_v1.overall')</strong> <span>@lang('lang_v1.overall_tax_formula')</span>
        </div>

        <div class="sales-report-stats">
            <div class="item">
                <img src="{{ asset('img/icons/sales-img.svg') }}" alt="">

                <div class="content">
                    <h3>@lang('lang_v1.gross_profit')<span class="sub"> ({{ __('report.sell_minus_purchase') }})</span></h3>
                    <h1 class="sell_minus_purchase">
                        <i class="fas fa-sync fa-spin fa-fw"></i>
                    </h1>
                </div>
            </div>

            <div class="item">
                <img src="{{ asset('img/icons/sales-img.svg') }}" alt="">

                <div class="content">
                    <h3>{{ __('report.difference_due') }}</h3>
                    <h1 class="difference_due">
                        <i class="fas fa-sync fa-spin fa-fw"></i>
                    </h1>
                </div>
            </div>
        </div>

        <div class="two-table-grid">
            <table class="report-table">
                <thead>
                    <tr>
                        <th>@lang('lang_v1.purchase')</th>
                        <th>@lang('lang_v1.value')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('report.total_purchase') }}</td>
                        <td>
                            <span class="total_purchase">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('report.purchase_inc_tax') }}</td>
                        <td>
                             <span class="purchase_inc_tax">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('lang_v1.total_purchase_return_inc_tax') }}</td>
                        <td>
                             <span class="purchase_return_inc_tax">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('report.purchase_due') }}</td>
                        <td>
                             <span class="purchase_due">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <table class="report-table">
                <thead>
                    <tr>
                        <th>@lang('lang_v1.sales')</th>
                        <th>@lang('lang_v1.value')</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ __('report.total_sell') }}</td>
                        <td>
                            <span class="total_sell">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('report.sell_inc_tax') }}</td>
                        <td>
                             <span class="sell_inc_tax">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('lang_v1.total_sell_return_inc_tax') }}</td>
                        <td>
                             <span class="total_sell_return">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('report.sell_due') }}</td>
                        <td>
                            <span class="sell_due">
                                <i class="fas fa-sync fa-spin fa-fw"></i>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
@section('javascript')
<script src="{{ asset('js/report.js?v=' . $asset_v) }}"></script>

@endsection
