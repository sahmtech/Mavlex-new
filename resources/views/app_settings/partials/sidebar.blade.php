<div class="row">
    {{-- enable_custom_sidebar_logo --}}
    <div class="col-sm-4">
        <div class="form-group">
            <div class="toggle-wrapper d-flex gap-2 mt-4">
                   
                <p>@lang('settings.enable_custom_sidebar_logo') @show_tooltip(__('settings.enable_custom_sidebar_logo_tooltip'))</p>
                <label class="switch" for="enable_custom_sidebar_logo">
                    {!! Form::checkbox('enable_custom_sidebar_logo', 1, $app_settings->enable_custom_sidebar_logo, ['id' => 'enable_custom_sidebar_logo']) !!}
                    <div class="sliderCheckbox round"></div>
                </label>
                
            </div>
        </div>
    </div>
</div>
