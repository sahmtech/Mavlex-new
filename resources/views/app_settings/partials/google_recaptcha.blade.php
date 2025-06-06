<div class="row">
    <!-- Google reCAPTCHA Settings -->
    <div class="col-md-12">
        <div class="form-group">
            <div class="toggle-wrapper d-flex gap-2 mt-4">
                <p>{{ __('settings.enable_recaptcha_text') }} @show_tooltip(__('settings.enable_recaptcha_tooltip', ['url' => 'https://www.google.com/recaptcha']))</p>
                <label class="switch" for="google_recaptcha_enable">
                    {!! Form::checkbox('google_recaptcha[enable_recaptcha]', 1, isset($app_settings->google_recaptcha['enable_recaptcha']) ? $app_settings->google_recaptcha['enable_recaptcha'] : false, ['id' => 'google_recaptcha_enable']) !!}
                    <div class="sliderCheckbox round"></div>
                </label>
            </div>
        </div>
    </div>

    <!-- Google reCAPTCHA Key -->
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('google_recaptcha[google_recaptcha_key]', __('settings.google_recaptcha_key')) !!}
            {!! Form::text('google_recaptcha[google_recaptcha_key]', $app_settings->google_recaptcha['google_recaptcha_key'] ?? '', ['class' => 'form-control', 'placeholder' => __('settings.google_recaptcha_key_placeholder')]) !!}
        </div>
    </div>

    <!-- Google reCAPTCHA Secret -->
    <div class="col-md-6">
        <div class="form-group">
            {!! Form::label('google_recaptcha[google_recaptcha_secret]', __('settings.google_recaptcha_secret')) !!}
            {!! Form::text('google_recaptcha[google_recaptcha_secret]', $app_settings->google_recaptcha['google_recaptcha_secret'] ?? '', ['class' => 'form-control', 'placeholder' => __('settings.google_recaptcha_secret_placeholder')]) !!}
        </div>
    </div>
</div>
