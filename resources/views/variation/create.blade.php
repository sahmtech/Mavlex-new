<div class="modal-dialog" role="document">
  <div class="modal-content">

    {!! Form::open(['url' => action('VariationTemplateController@store'), 'method' => 'post', 'id' => 'variation_add_form', 'class' => 'form-horizontal' ]) !!}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title">@lang('lang_v1.add_variation')</h4>
      <p>@lang( 'sale.products' )</p>
    </div>

    <div class="modal-body">
      <div class="form-group">
        {!! Form::label('name',__('lang_v1.variation_name') . ':*', ['class' => 'col-sm-3 control-label']) !!}

        <div class="col-sm-9">
          {!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => __('lang_v1.variation_name')]); !!}
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label">@lang('lang_v1.add_variation_values'):*</label>
        <div class="col-sm-7">
           {!! Form::text('variation_values[]', null, ['class' => 'form-control', 'required']); !!}
        </div>
        <div class="col-sm-2">
          <div class="button-box">
            <br>
            <button type="button" id="add_variation_values">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="#111827"/>
              </svg>
              Add
            </button>
          </div>
        </div>
      </div>
      <div id="variation_values"></div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">@lang('messages.save')</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">@lang('messages.close')</button>
    </div>

    {!! Form::close() !!}

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->