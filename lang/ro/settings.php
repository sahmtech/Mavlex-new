<?php

return [

    'app_settings' => 'Setări ale Aplicației',
    'manage_app_settings' => 'Administrează Setările Aplicației',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Aspect',
    'tab_login_page' => 'Pagină Login',
    'tab_sidebar' => 'Bară Laterală',
    'tab_language' => 'Limbă',
    'tab_repair_status' => 'Stare Reparație',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Actualizează Setările',

    'enable_custom_bg_image_for_login' => 'Activează Fundal Personalizat pentru Login',
    'enable_custom_bg_image_for_login_tooltip' => 'Setează o imagine de fundal personalizată pentru pagina de login.',

    'enable_custom_sidebar_logo' => 'Permite Logo Personalizat în Bara Laterală',
    'enable_custom_sidebar_logo_tooltip' => 'Permite companiilor să folosească un logo personalizat în bara laterală.',

    // language.blade.php
    'header_language_change' => 'Schimbare Limbă în Antet',
    'header_language_change_tooltip' => 'Permite utilizatorilor să schimbe limba din antetul principal.',
    'header_languages_label' => 'Limbi în Antet',
    'header_languages_label_tooltip' => 'Selectează ce limbi vor fi afișate în antet.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Afișează Starea de Reparație pe Ecranul de Login',

    // 2fa.blade.php
    'enable_2fa' => 'Activează 2FA',
    'enable_2fa_tooltip' => 'Activează Autentificarea în Doi Pași (2FA) pentru aplicație.',

    'force_2fa' => 'Obligă 2FA',
    'force_2fa_tooltip' => 'Utilizatorii trebuie să configureze 2FA înainte de a putea folosi aplicația.',

    'recommend_2fa' => 'Recomandă 2FA',
    'recommend_2fa_tooltip' => 'Apare o fereastră (modal) o singură dată la login pentru a încuraja activarea 2FA.',

    'allow_disable_2fa' => 'Permite Dezactivarea Temporară a 2FA',
    'allow_disable_2fa_tooltip' => 'Permite utilizatorilor să dezactiveze temporar 2FA până la un anumit moment.',

    'disable_2fa_duration_label' => 'Durata de Dezactivare 2FA',
    'disable_2fa_duration_label_tooltip' => 'Definește perioada în care 2FA poate rămâne dezactivat.',

    'disable_2fa_unit_label' => 'Unitatea de Dezactivare 2FA',

    'force_2fa_after_date_label' => 'Obligă 2FA după Dată',
    'force_2fa_after_date_label_tooltip' => 'După această dată, toți utilizatorii trebuie să activeze 2FA. Data impusă este afișată și în fereastra de recomandare 2FA.',

    'primary_color_label' => 'Culoare Primară',
    'primary_color_label_tooltip' => 'Selectează culoarea primară implicită a aplicației. Această culoare va fi folosită de companiile care nu își setează propriul design.',
    'secondary_color_label' => 'Culoare Secundară',
    'secondary_color_label_tooltip' => 'Selectează culoarea secundară implicită a aplicației. Această culoare va fi folosită de companiile care nu își setează propriile culori.',

    'allow_theme_change' => 'Permite Schimbarea Temelor',
    'allow_theme_change_tooltip' => 'Permite companiilor să își personalzeze culorile temei. Dacă nu setează culori personalizate, vor fi utilizate culorile implicite definite aici de superadmin.',

    'login_bg_image_label' => 'Imagine de Fundal pentru Login',
    'login_bg_image_label_tooltip' => 'Încărcarea unei noi imagini va înlocui fundalul existent.',

    'logo_dark_tooltip'  => 'Schimbă logo-ul întunecat implicit al aplicației, folosit în modul luminos.',
    'logo_light_tooltip' => 'Schimbă logo-ul luminos implicit al aplicației, folosit în modul întunecat.',
    'favicon_tooltip' => 'Dimensiuni recomandate: 32×32 px. Această iconiță apare în tab-urile browserului și în marcaje.',
    'upload_favicon' => 'Încarcă Favicon',

    // Fonts
    'tab_fonts' => 'Fonturi',
    'english_font'            => 'Font Englezesc',
    'arabic_font'             => 'Font Arabic',
    'custom_font_placeholder' => 'Introduceți un nume de font personalizat...',
    'select_font'             => 'Selectați un font...',
    'or'                      => 'sau',
    'font_help_text'          => 'Alege din listă sau introdu propriul font.',
    'english_font_tooltip'  => 'Introduceți un nume de font personalizat sau alegeți din listă. Puteți găsi nume de font pe: :url',
    'arabic_font_tooltip'   => 'Introduceți un nume de font personalizat sau alegeți din listă. Puteți găsi nume de font pe: :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha'              => 'Activează Google reCAPTCHA',
    'enable_recaptcha_tooltip'      => 'Comută pentru a activa protecția reCAPTCHA. Obțineți cheia și secretul de la: :url',
    'enable_recaptcha_text'         => 'Activează reCAPTCHA',
    'google_recaptcha_key'          => 'Cheie Site (Site Key) Google reCAPTCHA',
    'google_recaptcha_secret'       => 'Cheie Secretă (Secret Key) Google reCAPTCHA',
    'google_recaptcha_key_placeholder'    => 'Introduceți Site Key pentru Google reCAPTCHA',
    'google_recaptcha_secret_placeholder' => 'Introduceți Secret Key pentru Google reCAPTCHA',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Activează Autentificarea în Doi Pași (2FA)',
    'modal_enable_2fa_desc' => 'Recomandăm activarea 2FA pentru a spori securitatea contului.',
    'enable_now_button' => 'Activează Acum',
    'maybe_later_button' => 'Poate Mai Târziu',
    'close_aria_label' => 'Închide',

    // 2FA Verify page
    'one_time_password_heading' => 'Parolă Unică (OTP)',
    'one_time_password_label' => 'Parolă Unică',
    'enter_2fa_code_placeholder' => 'Introduceți codul 2FA',
    'disable_2fa_for' => 'Dezactivează 2FA pentru :duration :unit',
    'verify_button' => 'Verifică',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Autentificare în Doi Pași (2FA)',
    'google_auth_app_desc' => 'Aplicația Google Authenticator',
    'configured_status' => 'Configurat',
    'needs_configuration_status' => 'Necesară Configurare',
    'two_factor_scan_or_enter_msg' => 'Scanați codul QR de mai jos cu aplicația Google Authenticator sau introduceți manual cheia, apoi introduceți codul generat.',
    'your_secret_key_msg' => 'Cheia dvs. secretă (dacă trebuie introdusă manual):',

    // 2FA field labels
    'one_time_password_label' => 'Parolă Unică',
    'enter_2fa_code_placeholder' => 'Introduceți codul 2FA',
    '2fa_will_be_forced_after_date' => '2FA va fi forțat după :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Verifică',

    'confirm_access_recovery_codes' => 'Confirmă Accesul',
    're_authenticate_message'       => 'Trebuie să vă re-autentificați pentru a accesa Configurarea sau Codurile de Recuperare 2FA.',
    'choose_method'                 => 'Alegeți metoda:',
    'one_time_password'             => 'Parolă Unică (OTP)',
    'password'                      => 'Parolă',
    'enter_code_or_password'        => 'Introduceți Cod / Parolă:',
    'confirm'                       => 'Confirmă',

    '2fa_recovery_codes'           => 'Coduri de Recuperare 2FA',
    'recovery_codes_description'   => 'Aceste coduri vă permit să vă autentificați dacă pierdeți accesul la aplicația de autentificare. Fiecare cod poate fi folosit o singură dată.',
    'regenerate_codes'             => 'Regenerare Coduri',
    'copy'                         => 'Copiază',
    'copy_all'                     => 'Copiază Tot',
    'no_recovery_codes_available'  => 'Nu există coduri de recuperare disponibile. Puteți genera coduri noi mai jos.',
    'copied'                       => 'Cod copiat în clipboard!',
    'all_codes_copied'             => 'Toate codurile de recuperare au fost copiate în clipboard!',
    'supported_app'                => 'Aplicații Suportate',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    // social logins:
    'social_login_settings'       => 'Setări de Login Social',
    'social_login_settings_help'  => 'Introduceți credențialele dvs. pentru login social.',
    'client_id'                   => 'Client ID',
    'client_secret'               => 'Client Secret',
    'redirect_url'                => 'URL de Redirecționare',
    'enter_client_id'             => 'Introduceți Client ID pentru :provider',
    'enter_client_secret'         => 'Introduceți Client Secret pentru :provider',
    'enter_redirect_url'          => 'Introduceți URL de Redirecționare pentru :provider',
    'enable_social_login'         => 'Activează Login Social',
    'tab_social' => 'Login-uri Sociale',
    'or_login_with' => 'Sau Login cu',
    'force_otp_after_social_login' => 'Obligă OTP după Login Social',
    'force_otp_after_social_login_tooltip' => 'Dacă este activat, utilizatorii care se autentifică prin login social vor fi nevoiți să verifice un OTP.',

    //Lock Users:
    'locked_until' => 'Blocat Până la',
    'locked_users' => 'Utilizatori Blocați',
    'view_locked_users' => 'Vezi Utilizatorii Blocați',
    'tab_login_security' => 'Securitatea Login-ului',
    'unlock' => 'Deblochează',
    'enable_user_lock_label' => 'Activează Blocarea Utilizatorului',
    'enable_user_lock_tooltip' => 'Activează/dezactivează blocarea utilizatorului după încercări eșuate de login.',
    'max_login_attempts_label' => 'Numărul Maxim de Încercări de Login',
    'max_login_attempts_tooltip' => 'Numărul de încercări permise înainte ca utilizatorul să fie blocat.',
    'lock_duration_label' => 'Durata Blocării',
    'lock_duration_tooltip' => 'Perioada de timp (în cifre) pentru care un utilizator rămâne blocat.',
    'lock_duration_unit_label' => 'Unitatea de Durată a Blocării',
    'lock_duration_unit_tooltip' => 'Alege unitatea de timp pentru perioada de blocare: minute, ore, zile etc.',
    'account_locked_for_time_unit' => 'Contul dvs. este blocat pentru :time :unit.',
    'user_unlocked_message' => 'Utilizator deblocat cu succes!',

    //Verify email:
    'verify_email_address_title' => 'Verifică Adresa de Email',
    'fresh_verification_sent' => 'Un nou link de verificare a fost trimis la adresa dvs. de email.',
    'verify_email_before_proceeding' => 'Înainte de a continua, verificați emailul pentru linkul de verificare.',
    'did_not_receive_email' => 'Dacă nu ați primit emailul',
    'click_here_request_another' => 'faceți clic aici pentru a solicita altul',
    'logout' => 'Deconectare',
    'force_email_verify' => 'Forțează Verificarea de Email',
    'force_email_verify_tooltip' => 'Dacă este activat, utilizatorii trebuie să își verifice adresa de email înainte de a avea acces la sistem.',

    // Reset Mapping
    'reset_purchase_sell_mapping'     => 'Resetați maparea cumpărare-vânzare',
    'select_business'                 => 'Selectați afacerea:',
    'all_businesses'                  => 'Toate afacerile',
    'chunk_size'                      => 'Dimensiune lot:',
    'reset_mapping'                   => 'Resetați maparea',
    'purchase_sell_mismatch_tooltip'  => 'Alegeți mapările de afaceri care trebuie resetate. Dacă aveți o bază de date mare, recomandăm resetarea pe fiecare afacere în parte.',
    'chunk_size_tooltip'              => 'Maparea va fi resetată în loturi mai mici. Pentru seturi de date mari, alegeți o dimensiune de lot potrivită. Modului de întreținere activă i se recomandă.',

    // Maintenance Mode
    'tab_maintenance_mode'            => 'Mod întreținere',
    'maintenance_mode'                => 'Mod întreținere',
    'maintenance_mode_tooltip'        => 'Pune aplicația în modul de întreținere (vizitatorii vor vedea ecranul de întreținere).',
    'enable_countdown'                => 'Activează numărătoare inversă',
    'enable_timer_tooltip'            => 'Afișează un cronometru live până la sfârșitul întreținerii.',
    'maintenance_duration'            => 'Durată',
    'maintenance_unit'                => 'Unitate durată',
    'minutes'                         => 'Minute',
    'hours'                           => 'Ore',
    'days'                            => 'Zile',

    // Maintenance page
    'under_maintenance'               => 'În întreținere',
    'maintenance_heading'             => 'Efectuăm unele lucrări de întreținere.',
    'maintenance_subheading'          => 'Vă mulțumim pentru răbdare!',
    'maintenance_back_in'             => 'Ne întoarcem în :time',
    'maintenance_back_no_timer'       => 'Ne întoarcem imediat ce întreținerea este finalizată.',

    // Mapping reset page
    'mapping_reset_progress'          => 'Progres resetare mapare',
    'mapping_reset_in_progress'       => 'Resetarea mapării este în desfășurare',
    'batch_status'                    => 'Stare lot',
    'refresh_status'                  => 'Reîmprospătează starea',

    // Mapping reset result & status
    'mapping_reset_result'            => 'Rezultatul resetării mapării',
    'chunk_processing_status'         => 'Starea procesării loturilor',

    // Table headers
    'business'                        => 'Afacere',
    'chunk_status'                    => 'Stare lot',
    'total_chunks'                    => 'Număr total de loturi',
    'status'                          => 'Stare',

    // Button
    'go_back'                         => 'Înapoi',

    // Mapping Jobs
    'processed_jobs'                  => 'Sarcini de mapare',
    'processed_jobs_subtitle'         => 'Toate loturile de mapare dispatch-ate',
    'uuid'                            => 'UUID lot',
    'job_name'                        => 'Nume sarcină',
    'completed_chunks'                => 'Loturi finalizate',
    'started_at'                      => 'Început la',
    'finished_at'                     => 'Ultima actualizare',
    'view_rebuild_jobs'               => 'Vizualizează sarcini reconstrucție stoc',

    // Detailed instruction
    'reset_mapping_instruction'       =>
        "Se recomandă setarea driver-ului cozii la un backend real:\n"
        . "→ În fișierul dumneavoastră .env, puneți `QUEUE_CONNECTION=database`.\n\n"
        . "Activați de asemenea modul de întreținere (Setări aplicație → Modul întreținere) "
        . "în timp ce se rulează resetarea mapării pentru a evita datele duplicate sau pierdute.\n\n"
        . "Dacă aveți o bază de date mare, resetarea va dura mai mult—luați în considerare resetarea pe afacere.\n\n"
        . "Înainte de a începe:\n"
        . "• Efectuați o copie de siguranță completă a bazei de date.\n"
        . "• Monitorizați procesul prin jurnale pentru a surprinde eventuale erori.",

    'recovery_codes_generated_successfully' => 'Codurile de recuperare generate cu succes',

    // Disposable-email sync
    'sync_disposable_list'            => 'Sincronizează lista de e-mailuri eliminate',
    'sync_disposable_success'         => 'Lista de e-mailuri eliminate a fost actualizată.',
    'sync_disposable_failed'          => 'Sincronizarea listei de e-mailuri eliminate a eșuat.',

    // Temporary-email protection
    'temp_email_protection'           => 'Protecție e-mailuri temporare',
    'temp_email_protection_tooltip'   => 'Blochează domeniile de e-mail temporare/eliminate (ex.: Mailinator, 10MinuteMail).',
    'disposable_not_allowed'          => 'E-mailurile eliminate nu sunt permise.',

];
