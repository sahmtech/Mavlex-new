<?php

return [

    'app_settings' => 'Cilësimet e Aplikacionit',
    'manage_app_settings' => 'Menaxho Cilësimet e Aplikacionit',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Pamja',
    'tab_login_page' => 'Faqja e Hyrjes',
    'tab_sidebar' => 'Shiriti Anësor',
    'tab_language' => 'Gjuha',
    'tab_repair_status' => 'Statusi i Riparimit',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Përditëso Cilësimet',

    'enable_custom_bg_image_for_login' => 'Aktivizo Sfondin e Personalizuar për Hyrje',
    'enable_custom_bg_image_for_login_tooltip' => 'Vendos një imazh sfondi të personalizuar për faqen e hyrjes.',

    'enable_custom_sidebar_logo' => 'Lejo Logo të Personalizuar në Shiriti Anësor',
    'enable_custom_sidebar_logo_tooltip' => 'Lejon bizneset të përdorin një logo të personalizuar në shiritin anësor.',

    // language.blade.php
    'header_language_change' => 'Ndërrimi i Gjuhës në Header',
    'header_language_change_tooltip' => 'Lejo përdoruesit të ndryshojnë gjuhën nga header-i kryesor.',
    'header_languages_label' => 'Gjuhët në Header',
    'header_languages_label_tooltip' => 'Zgjidh cilat gjuhë do të shfaqen në header.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Shfaq Statusin e Riparimit në Ekranin e Hyrjes',

    // 2fa.blade.php
    'enable_2fa' => 'Aktivizo 2FA',
    'enable_2fa_tooltip' => 'Aktivizo Autentikimin me Dy Faktorë (2FA) për aplikacionin.',

    'force_2fa' => 'Detyro 2FA',
    'force_2fa_tooltip' => 'Përdoruesit duhet të konfigurojnë 2FA para se të përdorin aplikacionin.',

    'recommend_2fa' => 'Rekomando 2FA',
    'recommend_2fa_tooltip' => 'Një modal i vetëm do të shfaqet gjatë hyrjes për të inkurajuar përdoruesit të aktivizojnë 2FA.',

    'allow_disable_2fa' => 'Lejo Çaktivizimin e Përkohshëm të 2FA',
    'allow_disable_2fa_tooltip' => 'Lejon përdoruesit të çaktivizojnë përkohësisht 2FA deri në një kohë të caktuar.',

    'disable_2fa_duration_label' => 'Kohëzgjatja e Çaktivizimit të 2FA',
    'disable_2fa_duration_label_tooltip' => 'Përcakto periudhën në të cilën 2FA mund të mbetet i çaktivizuar.',

    'disable_2fa_unit_label' => 'Njesia e Çaktivizimit të 2FA',

    'force_2fa_after_date_label' => 'Detyro 2FA pas Datës',
    'force_2fa_after_date_label_tooltip' => 'Pas kësaj date, të gjithë përdoruesit duhet të aktivizojnë 2FA. Kjo datë gjithashtu shfaqet në modalin e rekomandimit të 2FA.',

    'primary_color_label' => 'Ngjyra Primare',
    'primary_color_label_tooltip' => 'Zgjidh ngjyrën primare të paracaktuar për aplikacionin. Kjo ngjyrë do të përdoret nga bizneset që nuk vendosin tema të tyre.',
    'secondary_color_label' => 'Ngjyra Sekondare',
    'secondary_color_label_tooltip' => 'Zgjidh ngjyrën sekondare të paracaktuar për aplikacionin. Kjo ngjyrë do të përdoret nga bizneset që nuk vendosin tema të tyre.',

    'allow_theme_change' => 'Lejo Ndryshimin e Temave',
    'allow_theme_change_tooltip' => 'Lejon bizneset të personalizojnë ngjyrat e tyre të temës. Kur aktivohet, bizneset pa ngjyra të personalizuara do të përdorin ato parazgjedhura që vendosen këtu nga superadministratori.',

    'login_bg_image_label' => 'Imazhi i Sfondit për Hyrje',
    'login_bg_image_label_tooltip' => 'Ngarkimi i një imazhi të ri do të zëvendësojë sfondin ekzistues.',

    'logo_dark_tooltip'  => 'Ndrysho logon e errët (dark) të paracaktuar të aplikacionit, e përdorur në modalitetin e ndritshëm.',
    'logo_light_tooltip' => 'Ndrysho logon e ndritshme (light) të paracaktuar të aplikacionit, e përdorur në modalitetin e errët.',
    'favicon_tooltip' => 'Përmasat e rekomanduara: 32×32 px. Ky ikonë shfaqet në skedat e shfletuesit dhe faqeruajtëse (bookmarks).',
    'upload_favicon' => 'Ngarko Favicon',

    // Fonts
    'tab_fonts' => 'Shkrimet (Fontet)',
    'english_font'            => 'Shkrimi Anglisht',
    'arabic_font'             => 'Shkrimi Arabisht',
    'custom_font_placeholder' => 'Vendos një emër shkrimi të personalizuar...',
    'select_font'             => 'Zgjidh një shkrim...',
    'or'                      => 'ose',
    'font_help_text'          => 'Zgjidh nga lista ose vendos shkrimin tënd personal.',
    'english_font_tooltip'  => 'Vendos një emër shkrimi të personalizuar ose zgjidh një nga lista. Mund të gjesh emra shkrimesh në: :url',
    'arabic_font_tooltip'   => 'Vendos një emër shkrimi të personalizuar ose zgjidh një nga lista. Mund të gjesh emra shkrimesh në: :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha'              => 'Aktivizo Google reCAPTCHA',
    'enable_recaptcha_tooltip'      => 'Ndrysho këtë parametër për të aktivizuar mbrojtjen reCAPTCHA. Merr çelësin e faqes dhe sekretn te: :url',
    'enable_recaptcha_text'         => 'Aktivizo reCAPTCHA',
    'google_recaptcha_key'          => 'Google reCAPTCHA Site Key',
    'google_recaptcha_secret'       => 'Google reCAPTCHA Secret Key',
    'google_recaptcha_key_placeholder'    => 'Vendos Google reCAPTCHA Site Key tuaj',
    'google_recaptcha_secret_placeholder' => 'Vendos Google reCAPTCHA Secret Key tuaj',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Aktivizo Autentikimin me Dy Faktorë (2FA)',
    'modal_enable_2fa_desc' => 'Ne rekomandojmë aktivizimin e 2FA për të rritur sigurinë e llogarisë suaj.',
    'enable_now_button' => 'Aktivizo Tani',
    'maybe_later_button' => 'Ndoshta Më Vonë',
    'close_aria_label' => 'Mbyll',

    // 2FA Verify page
    'one_time_password_heading' => 'Fjalëkalim Një-Herësh (OTP)',
    'one_time_password_label' => 'Fjalëkalim Një-Herësh',
    'enter_2fa_code_placeholder' => 'Vendos kodin 2FA',
    'disable_2fa_for' => 'Çaktivizo 2FA për :duration :unit',
    'verify_button' => 'Verifiko',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Autentikim me Dy Faktorë (2FA)',
    'google_auth_app_desc' => 'Aplikacioni Google Authenticator',
    'configured_status' => 'I konfiguruar',
    'needs_configuration_status' => 'Ka nevojë për konfigurim',
    'two_factor_scan_or_enter_msg' => 'Ju lutemi skanoni QR kodin më poshtë me aplikacionin Google Authenticator ose futni manualisht sekretin, pastaj vendosni kodin e gjeneruar.',
    'your_secret_key_msg' => 'Çelësi juaj sekret (nëse duhet ta futni manualisht):',

    // 2FA field labels
    'one_time_password_label' => 'Fjalëkalim Një-Herësh',
    'enter_2fa_code_placeholder' => 'Vendos kodin 2FA',
    '2fa_will_be_forced_after_date' => '2FA do të bëhet i detyrueshëm pas :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Verifiko',

    'confirm_access_recovery_codes' => 'Konfirmo Aksessin',
    're_authenticate_message'       => 'Duhet të rivërtetoheni për të pasur akses te Cilësimet ose Kodet e Rikuperimit 2FA.',
    'choose_method'                 => 'Zgjidh metodën:',
    'one_time_password'             => 'Fjalëkalim Një-Herësh (OTP)',
    'password'                      => 'Fjalëkalimi',
    'enter_code_or_password'        => 'Fut Kodin / Fjalëkalimin:',
    'confirm'                       => 'Konfirmo',

    '2fa_recovery_codes'           => 'Kodet e Rikuperimit 2FA',
    'recovery_codes_description'   => 'Këto kode ju lejojnë të identifikoheni nëse humbisni aksesin në aplikacionin autentikues. Secili kod mund të përdoret vetëm një herë.',
    'regenerate_codes'             => 'Rigjenero Kodet',
    'copy'                         => 'Kopjo',
    'copy_all'                     => 'Kopjo Të Gjitha',
    'no_recovery_codes_available'  => 'Nuk ka kode rikuperimi në dispozicion. Mund të gjeneroni kodet e reja më poshtë.',
    'copied'                       => 'Kodi u kopjua në clipboard!',
    'all_codes_copied'             => 'Të gjitha kodet e rikuperimit u kopjuan në clipboard!',
    'supported_app'                => 'Aplikacione të Mbështetura',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    //social logins:
    'social_login_settings'       => 'Cilësimet e Login Social',
    'social_login_settings_help'  => 'Vendos kredencialet e tua për login social.',
    'client_id'                   => 'ID e Klientit (Client ID)',
    'client_secret'               => 'Sekreti i Klientit (Client Secret)',
    'redirect_url'                => 'URL e Ridrejtimit (Redirect URL)',
    'enter_client_id'             => 'Vendos :provider Client ID',
    'enter_client_secret'         => 'Vendos :provider Client Secret',
    'enter_redirect_url'          => 'Vendos :provider Redirect URL',
    'enable_social_login' => 'Aktivizo Login Social',
    'tab_social' => 'Logine Sociale',
    'or_login_with' => 'Ose Hyr me',
    'force_otp_after_social_login' => 'Detyro OTP pas Login Social',
    'force_otp_after_social_login_tooltip' => 'Nëse aktivizohet, përdoruesit që hyjnë përmes rrjeteve sociale do të duhet të verifikojnë një OTP.',

    //Lock Users:
    'locked_until' => 'Bllokuar deri më',
    'locked_users' => 'Përdorues të Bllokuar',
    'view_locked_users' => 'Shiko Përdoruesit e Bllokuar',
    'tab_login_security' => 'Siguria e Hyrjes',
    'unlock' => 'Zhblloko',
    'enable_user_lock_label' => 'Aktivizo Bllokimin e Përdoruesve',
    'enable_user_lock_tooltip' => 'Aktivizo/çaktivizo bllokimin e përdoruesit pas dështimeve të shumta të hyrjes.',
    'max_login_attempts_label' => 'Numri Maksimal i Përpjekjeve të Hyrjes',
    'max_login_attempts_tooltip' => 'Numri i përpjekjeve të lejuara para se përdoruesi të bllokohet.',
    'lock_duration_label' => 'Kohëzgjatja e Bllokimit',
    'lock_duration_tooltip' => 'Kohëzgjatja (si numra) për të cilën përdoruesi mbetet i bllokuar.',
    'lock_duration_unit_label' => 'Njesia e Kohëzgjatjes së Bllokimit',
    'lock_duration_unit_tooltip' => 'Zgjidh njësinë kohore për kohëzgjatjen e bllokimit: minuta, orë, ditë, etj.',
    'account_locked_for_time_unit' => 'Llogaria juaj është bllokuar për :time :unit.',
    'user_unlocked_message' => 'Përdoruesi u zhbllokua me sukses!',

    //Verify email:
    'verify_email_address_title' => 'Verifiko Adresën e Email-it',
    'fresh_verification_sent' => 'Një link i ri verifikimi u dërgua në adresën tuaj të email-it.',
    'verify_email_before_proceeding' => 'Para se të vazhdoni, ju lutemi kontrolloni email-in tuaj për linkun e verifikimit.',
    'did_not_receive_email' => 'Nëse nuk e keni marrë email-in',
    'click_here_request_another' => 'klikoni këtu për të kërkuar një tjetër',
    'logout' => 'Dil',
    'force_email_verify' => 'Detyro Verifikimin e Email-it',
    'force_email_verify_tooltip' => 'Nëse aktivizohet, përdoruesit duhet të verifikojnë adresën e email-it përpara aksesit në sistem.',

        // Reset Mapping
        'reset_purchase_sell_mapping'    => 'Rivendos hartimin Blerje-Shitje',
        'select_business'                => 'Zgjidhni biznesin:',
        'all_businesses'                 => 'Të gjitha bizneset',
        'chunk_size'                     => 'Madhësia e grupit:',
        'reset_mapping'                  => 'Rivendos hartimin',
        'purchase_sell_mismatch_tooltip' => 'Zgjidhni hartimet e biznesit që duhen rivendosur. Nëse keni një bazë të dhënash të madhe, rekomandojmë rivendosje për secilin biznes veçmas.',
        'chunk_size_tooltip'             => 'Hartimi do të rivendoset në grupe më të vogla. Për dataset-e të mëdha, zgjidhni madhësinë e duhur të grupit. Rekomandohet të aktivizoni modalitetin e mirëmbajtjes.',
    
        // Maintenance Mode
        'tab_maintenance_mode'       => 'Modaliteti i mirëmbajtjes',
        'maintenance_mode'           => 'Modaliteti i mirëmbajtjes',
        'maintenance_mode_tooltip'   => 'Vendosni aplikacionin në modalitet mirëmbajtjeje (vizitorët do të shohin ekranin e mirëmbajtjes).',
        'enable_countdown'           => 'Aktivizo kohëmatësin e zbritjes',
        'enable_timer_tooltip'       => 'Shfaqni një kohëmatës në kohë reale deri në fund të mirëmbajtjes.',
        'maintenance_duration'       => 'Kohëzgjatja',
        'maintenance_unit'           => 'Njësia e kohëzgjatjes',
        'minutes'                    => 'Minuta',
        'hours'                      => 'Orë',
        'days'                       => 'Ditë',
    
        // Maintenance page
        'under_maintenance'          => 'Nën mirëmbajtje',
        'maintenance_heading'        => 'Po bëjmë disa punë mirëmbajtjeje.',
        'maintenance_subheading'     => 'Faleminderit për durimin tuaj!',
        'maintenance_back_in'        => 'Do të kthehemi pas :time',
        'maintenance_back_no_timer'  => 'Do të kthehemi sapo të përfundojë mirëmbajtja.',
    
        // Mapping reset page
        'mapping_reset_progress'     => 'Progresi i rivendosjes së hartimit',
        'mapping_reset_in_progress'  => 'Rivendosja e hartimit po vazhdon',
        'batch_status'               => 'Statusi i grupit',
        'refresh_status'             => 'Rifresko statusin',
    
        // Mapping reset result & status
        'mapping_reset_result'       => 'Rezultati i rivendosjes së hartimit',
        'chunk_processing_status'    => 'Statusi i përpunimit të grupeve',
    
        // Table headers
        'business'                   => 'Biznes',
        'chunk_status'               => 'Statusi i grupit',
        'total_chunks'               => 'Numri total i grupeve',
        'status'                     => 'Statusi',
    
        // Button
        'go_back'                    => 'Kthehu',
    
        // Mapping Jobs
        'processed_jobs'             => 'Detyrat e hartimit',
        'processed_jobs_subtitle'    => 'Të gjitha grupet e hartimit të dërguara',
        'uuid'                       => 'UUID i grupit',
        'job_name'                   => 'Emri i detyrës',
        'completed_chunks'           => 'Grupet e përfunduara',
        'started_at'                 => 'Filluar më',
        'finished_at'                => 'Përditësimi i fundit',
        'view_rebuild_jobs'          => 'Shiko detyrat e rindërtimit të stokut',
    
        // Detailed instruction
        'reset_mapping_instruction'  => "Rekomandohet të konfiguroni driver-in e radhës në një backend real:\n"
            . "→ Në skedarin .env, vendosni `QUEUE_CONNECTION=database`.\n\n"
            . "Gjithashtu aktivizoni modalitetin e mirëmbajtjes (Cilësimet e aplikacionit → Modaliteti i mirëmbajtjes) gjatë rivendosjes së hartimit për të shmangur të dhëna të dyfishta ose të humbura.\n\n"
            . "Nëse baza e të dhënave është e madhe, rivendosja do të zgjasë më gjatë—mendoni ta bëni për secilin biznes veçmas.\n\n"
            . "Para se të filloni:\n"
            . "• Bëni një backup të plotë të bazës së të dhënave.\n"
            . "• Monitoroni procesin përmes log-eve për të kapur gabimet.",
    
        'recovery_codes_generated_successfully' => 'Kodet e rikuperimit u krijuan me sukses',
    
        // Disposable-email sync
        'sync_disposable_list'       => 'Sinkronizo listën e email-eve të përkohshëm',
        'sync_disposable_success'    => 'Lista e email-eve të përkohshëm u përditësua.',
        'sync_disposable_failed'     => 'Dështoi sinkronizimi i listës së email-eve të përkohshëm.',
    
        // Temporary-email protection
        'temp_email_protection'          => 'Parandaloni adresat e përkohshëm të email-it',
        'temp_email_protection_tooltip'  => 'Bllokoni domenet e email-eve të përkohshëm (p.sh. Mailinator, 10MinuteMail).',
        'disposable_not_allowed'         => 'Adresat e përkohshëm të email-it nuk lejohen.',
    
    

];
