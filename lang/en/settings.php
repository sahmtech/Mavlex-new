<?php

return [

    'app_settings' => 'Application Settings',
    'manage_app_settings' => 'Manage Application Settings',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Appearance',
    'tab_login_page' => 'Login Page',
    'tab_sidebar' => 'Sidebar',
    'tab_language' => 'Language',
    'tab_repair_status' => 'Repair Status',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Update Settings',

    'enable_custom_bg_image_for_login' => 'Enable Custom Login Background',
    'enable_custom_bg_image_for_login_tooltip' => 'Set a custom background image for the login page.',

    'enable_custom_sidebar_logo' => 'Allow Custom Sidebar Logo',
    'enable_custom_sidebar_logo_tooltip' => 'Permit businesses to use a custom logo in the sidebar.',

    // language.blade.php
    'header_language_change' => 'Header Language Change',
    'header_language_change_tooltip' => 'Allow users to switch the language from the main header.',
    'header_languages_label' => 'Header Languages',
    'header_languages_label_tooltip' => 'Select which languages to display in the header.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Show Repair Status on Login Screen',

    // 2fa.blade.php
    'enable_2fa' => 'Enable 2FA',
    'enable_2fa_tooltip' => 'Activate Two-Factor Authentication for the app.',

    'force_2fa' => 'Force 2FA',
    'force_2fa_tooltip' => 'Users must set up Two-Factor Authentication before they can use the app.',

    'recommend_2fa' => 'Recommend 2FA',
    'recommend_2fa_tooltip' => 'A one-time modal appears at login to encourage users to enable 2FA.',

    'allow_disable_2fa' => 'Allow Temporarily Disabling 2FA',
    'allow_disable_2fa_tooltip' => 'Permit users to temporarily disable 2FA until a specified time.',

    'disable_2fa_duration_label' => 'Disable 2FA Duration',
    'disable_2fa_duration_label_tooltip' => 'Define the period during which 2FA can remain disabled.',

    'disable_2fa_unit_label' => 'Disable 2FA Unit',

    'force_2fa_after_date_label' => 'Force 2FA After Date',
    'force_2fa_after_date_label_tooltip' => 'After this date, all users must enable 2FA. The enforced date is also shown in the 2FA recommendation modal.',

    'primary_color_label' => 'Primary Color',
    'primary_color_label_tooltip' => 'Select the default primary color for the application. This color will be used by businesses that do not set their own theme.',
    'secondary_color_label' => 'Secondary Color',
    'secondary_color_label_tooltip' => 'Select the default secondary color for the application. This color will be used by businesses that do not set their own theme.',
    //ToDO translate
    'body_color_label' => 'Body Color',
    'sidebar_text_color_label' => 'Sidebar Text Color',
    'body_color_label_tooltip' => 'Select the Default Body color for the application, Experimental feature may be removed in future',
    'sidebar_text_color_label_tooltip' => 'Select the Default Sidebar Text Color for the application now you can choose dark color for light secondary color',

    'allow_theme_change' => 'Allow Theme Change',
    'allow_theme_change_tooltip' => 'Enable businesses to customize their own theme colors. When enabled, businesses without custom colors will use the default colors set here by the superadmin.',

    'login_bg_image_label' => 'Login Background Image',
    'login_bg_image_label_tooltip' => 'Uploading a new image will replace the existing background.',

    'logo_dark_tooltip'  => 'Change the application default dark logo, will be used on light mode.',
    'logo_light_tooltip' => 'Change the application default light logo, will be used on dark mode.',
    'favicon_tooltip' => 'Recommended dimensions: 32x32px. This icon appears in browser tabs and bookmarks.',
    'upload_favicon' => 'Upload Favicon',

    //Fonts
    'tab_fonts' => 'Fonts',
    'english_font'            => 'English Font',
    'arabic_font'             => 'Arabic Font',
    'custom_font_placeholder' => 'Enter a custom font name...',
    'select_font'             => 'Select a font...',
    'or'                      => 'or',
    'font_help_text'          => 'Choose from the list or enter your custom font.',
    'english_font_tooltip'  => 'Enter a custom font name or choose one from the list. You can find font names at :url',
    'arabic_font_tooltip'   => 'Enter a custom font name or choose one from the list. You can find font names at :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha'              => 'Enable Google reCAPTCHA',
    'enable_recaptcha_tooltip'      => 'Toggle to enable reCAPTCHA protection. Get your site key and secret from :url',
    'enable_recaptcha_text'         => 'Enable reCAPTCHA',
    'google_recaptcha_key'          => 'Google reCAPTCHA Site Key',
    'google_recaptcha_secret'       => 'Google reCAPTCHA Secret Key',
    'google_recaptcha_key_placeholder'    => 'Enter your Google reCAPTCHA Site key',
    'google_recaptcha_secret_placeholder' => 'Enter your Google reCAPTCHA secret Key',
    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Enable Two-Factor Authentication',
    'modal_enable_2fa_desc' => 'We recommend enabling Two-Factor Authentication (2FA) to enhance the security of your account.',
    'enable_now_button' => 'Enable Now',
    'maybe_later_button' => 'Maybe Later',
    'close_aria_label' => 'Close',

    // 2FA Verify page
    'one_time_password_heading' => 'One-Time Password',
    'one_time_password_label' => 'One-Time Password',
    'enter_2fa_code_placeholder' => 'Enter 2FA code',
    'disable_2fa_for' => 'Disable 2FA for :duration :unit',
    'verify_button' => 'Verify',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Two-Factor Authentication',
    'google_auth_app_desc' => 'Google Authenticator app',
    'configured_status' => 'Configured',
    'needs_configuration_status' => 'Needs Configuration',
    'two_factor_scan_or_enter_msg' => 'Please scan the QR code below using your Google Authenticator app or enter the secret manually, then enter the generated code.',
    'your_secret_key_msg' => 'Your secret key (if you need to enter it manually):',

    // 2FA field labels
    'one_time_password_label' => 'One-Time Password',
    'enter_2fa_code_placeholder' => 'Enter 2FA code',
    '2fa_will_be_forced_after_date' => '2FA will be forced after :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Verify',

    'confirm_access_recovery_codes' => 'Confirm Access',
    're_authenticate_message'       => 'You must re-authenticate to access Setup or 2FA Recovery Codes.',
    'choose_method'                 => 'Choose method:',
    'one_time_password'             => 'One-Time Password (OTP)',
    'password'                      => 'Password',
    'enter_code_or_password'        => 'Enter Code / Password:',
    'confirm'                       => 'Confirm',

    '2fa_recovery_codes'           => '2FA Recovery Codes',
    'recovery_codes_description'   => 'These codes let you log in if you lose access to your authenticator device. Each code can only be used once.',
    'regenerate_codes'             => 'Regenerate Codes',
    'copy'                         => 'Copy',
    'copy_all'                     => 'Copy All',
    'no_recovery_codes_available'  => 'No recovery codes available. You can generate new ones below.',
    'copied'                       => 'Code copied to clipboard!',
    'all_codes_copied'             => 'All recovery codes copied to clipboard!',
    'supported_app'                => 'Supported Apps',
    'supported_apps' => [
        'Authy'                    => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP'                  => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator'     => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator'  => ['Windows Phone'],
        'LastPass Authenticator'   => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password'                => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    //social logins:
    'social_login_settings'       => 'Social Login Settings',
    'social_login_settings_help'  => 'Enter your social login credentials.',
    'client_id'                   => 'Client ID',
    'client_secret'               => 'Client Secret',
    'redirect_url'                => 'Redirect URL',
    'enter_client_id'             => 'Enter :provider Client ID',
    'enter_client_secret'         => 'Enter :provider Client Secret',
    'enter_redirect_url'          => 'Enter :provider Redirect URL',
    'enable_social_login' => 'Enable Social Login',
    'tab_social' => 'Social Logins',
    'or_login_with' => 'Or Login with',
    'force_otp_after_social_login' => 'Force OTP after Social Login',
    'force_otp_after_social_login_tooltip' => 'If enabled, users who sign in using social logins will be required to verify an OTP.',

    //Lock Users:
    'locked_until' => 'Locked Until',
    'locked_users' => 'Locked Users',
    'view_locked_users' => 'View Locked Users',
    'tab_login_security' => 'Login Security',
    'unlock' => 'Unlock',
    'enable_user_lock_label' => 'Enable User Lock',
    'enable_user_lock_tooltip' => 'Enable/disable user lock after failed login attempts.',
    'max_login_attempts_label' => 'Maximum Login Attempts',
    'max_login_attempts_tooltip' => 'Number of attempts allowed before user is locked out.',
    'lock_duration_label' => 'Lock Duration',
    'lock_duration_tooltip' => 'Amount of time the user is locked out (in numbers).',
    'lock_duration_unit_label' => 'Lock Duration Unit',
    'lock_duration_unit_tooltip' => 'Choose the time unit for lock duration: minutes, hours, days, etc.',
    'account_locked_for_time_unit' => 'Your account is locked for :time :unit.',
    'user_unlocked_message' => 'User unlocked successfully!',

    //Verify email:
    'verify_email_address_title' => 'Verify Your Email Address',
    'fresh_verification_sent' => 'A fresh verification link has been sent to your email address.',
    'verify_email_before_proceeding' => 'Before proceeding, please check your email for a verification link.',
    'did_not_receive_email' => 'If you did not receive the email',
    'click_here_request_another' => 'click here to request another',
    'logout' => 'Logout',
    'force_email_verify' => 'Force Email Verification',
    'force_email_verify_tooltip' => 'If enabled, users must verify their email address before accessing the system.',

    //Reset Mapping
    'reset_purchase_sell_mapping'   => 'Reset Purchase-Sell Mapping',
    'select_business'               => 'Select Business:',
    'all_businesses'                => 'All Businesses',
    'chunk_size'                    => 'Chunk Size:',
    'reset_mapping'                 => 'Reset Mapping',
    'purchase_sell_mismatch_tooltip' => "Choose which business mappings need to be reset. If you've a large database, we recommend choosing individual businesses for resetting the mapping.",
    'chunk_size_tooltip'             => "Mapping will be reset in smaller chunks. For large datasets, choose a preferred chunk size. Active maintenance mode is recommended.",

    //Maintenance Mode
    'tab_maintenance_mode' => 'Maintenance Mode',
    'maintenance_mode'           => 'Maintenance mode',
    'maintenance_mode_tooltip'   => 'Put the application into maintenance (visitors will see the maintenance screen).',
    'enable_countdown'           => 'Enable countdown timer',
    'enable_timer_tooltip'       => 'Show a live countdown until maintenance ends.',
    'maintenance_duration'       => 'Duration',
    'maintenance_unit'           => 'Duration unit',
    'minutes'                    => 'Minutes',
    'hours'                      => 'Hours',
    'days'                       => 'Days',
    // Maintenance page
    'under_maintenance'              => 'Under maintenance',
    'maintenance_heading'            => 'We’re doing a bit of housekeeping.',
    'maintenance_subheading'         => 'Thank you for your patience!',
    'maintenance_back_in'            => 'We’ll be back in :time',
    'maintenance_back_no_timer'      => 'We’ll be back as soon as we finish our maintenance.',
    // Mapping reset page
    'mapping_reset_progress'     => 'Mapping Reset Progress',
    'mapping_reset_in_progress'  => 'Mapping reset is in progress',
    'batch_status'               => 'Batch Status',
    'refresh_status'             => 'Refresh Status',
    // Mapping reset result page & status
    'mapping_reset_result'       => 'Mapping Reset Result',
    'chunk_processing_status'    => 'Chunk Processing Status',

    // Table headers
    'business'                   => 'Business',
    'chunk_status'               => 'Chunk Status',
    'total_chunks'               => 'Total Chunks',
    'status'                     => 'Status',

    // Button
    'go_back'                    => 'Go Back',

        // ...
        'processed_jobs'           => 'Mapping Jobs',
        'processed_jobs_subtitle'  => 'All dispatched mapping batches',
        'uuid'                     => 'Batch UUID',
        'job_name'                 => 'Job Name',
        'chunk_size'               => 'Chunk Size',
        'completed_chunks'         => 'Chunks Done',
        'total_chunks'             => 'Total Chunks',
        'started_at'               => 'Started At',
        'finished_at'              => 'Last Updated',
        'business'                 => 'Business',
        'status'                   => 'Status',
        'all_businesses'           => 'All Businesses',
        'go_back'                  => 'Go Back',
        'view_rebuild_jobs' => 'View Stock Rebuild Jobs',
        'reset_mapping_instruction' => 
    "It’s recommended to set your queue driver to a real backend:\n".
    "→ In your .env file, set `QUEUE_CONNECTION=database`.\n\n".
    "Also enable Maintenance Mode (Application Settings → Maintenance Mode) while mapping is running to avoid duplicate or missed data.\n\n".
    "If you have a large database, resetting will take longer—consider resetting per business.\n\n".
    "Before you begin:\n".
    "• Take a full database backup.\n".
    "• Monitor the process via logs to catch any errors.",
    'recovery_codes_generated_successfully' => 'Recovery Codes Generated Successfully',
    'sync_disposable_list'   => 'Sync Disposable‐Email List',
    'sync_disposable_success' => 'Disposable‐email list updated.',
    'sync_disposable_failed'  => 'Failed to sync disposable list.',
    'temp_email_protection' => 'Prevent disposable e-mail addresses',
    'temp_email_protection_tooltip' => 'Block temporary/throw-away e-mail domains (e.g. Mailinator, 10MinuteMail).',
    'disposable_not_allowed' => 'Disposable email addresses are not allowed.',

];
