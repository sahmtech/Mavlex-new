@extends('layouts.app')
@section('title', __( 'lang_v1.customer_groups' ))

@section('content')

<div class="main-container no-print">
                
    <!-- Sub Menu -->
    <div class="horizontal-scroll">
        @include('layouts.partials.sub_menu.contact')
    </div>

    <!-- Card Wrapper for dashboard content -->
    <div class="card-wrapper">
        <!-- Filter through table -->
        <div class="overview-filter">
            <div class="title">
                <h1>@lang( 'lang_v1.customer_groups' )</h1>
                <p>@lang('contact.contacts')</p>
            </div>

            <div class="filter">
                <div class="new-user">
                    @can('customer.create')
                        <button type="button" class="add-user-modal-btn btn-modal btn-block btn-primary" 
                            data-href="{{action('CustomerGroupController@create')}}" 
                            data-container=".customer_groups_modal">
                            <i class="fa fa-plus"></i> @lang( 'messages.add' )
                        </button>
                    @endcan
                </div>
            </div>
        </div>
        <!-- End of Filter through table -->

            <div class="content">
                @can('customer.view')
                    <div class="table-responsive">
                        <table class="table ajax_view max-table" id="customer_groups_table">
                            <thead>
                                <tr>
                                    <th>@lang( 'lang_v1.customer_group_name' )</th>
                                    <th>@lang( 'lang_v1.calculation_percentage' )</th>
                                    <th>@lang( 'lang_v1.selling_price_group' )</th>
                                    <th>@lang( 'messages.action' )</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                @endcan
            </div>
        <div class="modal fade customer_groups_modal" tabindex="-1" role="dialog" 
        aria-labelledby="gridSystemModalLabel">
    </div>
    </div>

</div>

@stop
@section('javascript')

<script type="text/javascript">
    $(document).on('change', '#price_calculation_type', function () {
        var price_calculation_type = $(this).val();

        if (price_calculation_type == 'percentage') {
            $('.percentage-field').removeClass('hide');
            $('.selling_price_group-field').addClass('hide');
        } else {
            $('.percentage-field').addClass('hide');
            $('.selling_price_group-field').removeClass('hide');
        }   
    })
</script>
@endsection
