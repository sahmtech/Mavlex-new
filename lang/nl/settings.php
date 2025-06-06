<?php

return [

    'app_settings' => 'Applicatie-instellingen',
    'manage_app_settings' => 'Applicatie-instellingen beheren',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Weergave',
    'tab_login_page' => 'Inlogpagina',
    'tab_sidebar' => 'Zijbalk',
    'tab_language' => 'Taal',
    'tab_repair_status' => 'Reparatiestatus',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Instellingen bijwerken',

    'enable_custom_bg_image_for_login' => 'Aangepaste achtergrond voor inloggen inschakelen',
    'enable_custom_bg_image_for_login_tooltip' => 'Stel een aangepaste achtergrondafbeelding in voor de inlogpagina.',

    'enable_custom_sidebar_logo' => 'Aangepast zijbalklogo toestaan',
    'enable_custom_sidebar_logo_tooltip' => 'Sta bedrijven toe een aangepast logo in de zijbalk te gebruiken.',

    // language.blade.php
    'header_language_change' => 'Taal wijzigen in de kop',
    'header_language_change_tooltip' => 'Gebruikers toestaan om vanuit de hoofdkop de taal te wijzigen.',
    'header_languages_label' => 'Talen in de kop',
    'header_languages_label_tooltip' => 'Selecteer welke talen in de kop moeten worden weergegeven.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Reparatiestatus weergeven op inlogscherm',

    // 2fa.blade.php
    'enable_2fa' => '2FA inschakelen',
    'enable_2fa_tooltip' => 'Schakel tweefactorauthenticatie (2FA) in voor de app.',

    'force_2fa' => '2FA verplichten',
    'force_2fa_tooltip' => 'Gebruikers moeten 2FA instellen voordat zij de app kunnen gebruiken.',

    'recommend_2fa' => '2FA aanbevelen',
    'recommend_2fa_tooltip' => 'Er verschijnt bij het inloggen eenmalig een venster om gebruikers aan te moedigen 2FA in te schakelen.',

    'allow_disable_2fa' => 'Tijdelijk uitschakelen van 2FA toestaan',
    'allow_disable_2fa_tooltip' => 'Sta gebruikers toe 2FA tijdelijk uit te schakelen tot een bepaalde tijd.',

    'disable_2fa_duration_label' => 'Duur van uitschakelen 2FA',
    'disable_2fa_duration_label_tooltip' => 'Bepaal de periode waarin 2FA uitgeschakeld kan blijven.',

    'disable_2fa_unit_label' => 'Eenheid voor uitschakelen 2FA',

    'force_2fa_after_date_label' => '2FA verplichten na datum',
    'force_2fa_after_date_label_tooltip' => 'Na deze datum moeten alle gebruikers 2FA inschakelen. Deze datum wordt ook getoond in het aanbevelingsvenster van 2FA.',

    'primary_color_label' => 'Primaire kleur',
    'primary_color_label_tooltip' => 'Selecteer de standaard primaire kleur voor de applicatie. Deze kleur wordt gebruikt door bedrijven die geen eigen themakleuren instellen.',
    'secondary_color_label' => 'Secundaire kleur',
    'secondary_color_label_tooltip' => 'Selecteer de standaard secundaire kleur voor de applicatie. Deze kleur wordt gebruikt door bedrijven die geen eigen themakleuren instellen.',

    'allow_theme_change' => 'Wijziging van thema toestaan',
    'allow_theme_change_tooltip' => 'Sta bedrijven toe hun eigen themakleuren aan te passen. Als ze geen kleuren instellen, zullen ze de standaardkleuren gebruiken zoals hier ingesteld door de superadmin.',

    'login_bg_image_label' => 'Achtergrondafbeelding voor inloggen',
    'login_bg_image_label_tooltip' => 'Door een nieuwe afbeelding te uploaden wordt de bestaande achtergrond vervangen.',

    'logo_dark_tooltip'  => 'Wijzig het standaard donkere logo van de applicatie, gebruikt in de lichte modus.',
    'logo_light_tooltip' => 'Wijzig het standaard lichte logo van de applicatie, gebruikt in de donkere modus.',
    'favicon_tooltip' => 'Aanbevolen afmetingen: 32×32 px. Dit pictogram verschijnt in browsertabbladen en bladwijzers.',
    'upload_favicon' => 'Favicon uploaden',

    // Fonts
    'tab_fonts' => 'Lettertypen',
    'english_font'            => 'Engels Lettertype',
    'arabic_font'             => 'Arabisch Lettertype',
    'custom_font_placeholder' => 'Voer een aangepaste lettertype naam in...',
    'select_font'             => 'Selecteer een lettertype...',
    'or'                      => 'of',
    'font_help_text'          => 'Kies uit de lijst of voer uw eigen lettertype in.',
    'english_font_tooltip'  => 'Voer een aangepaste lettertypenaam in of kies er een uit de lijst. Je kunt lettertypen vinden op: :url',
    'arabic_font_tooltip'   => 'Voer een aangepaste lettertypenaam in of kies er een uit de lijst. Je kunt lettertypen vinden op: :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha'              => 'Google reCAPTCHA inschakelen',
    'enable_recaptcha_tooltip'      => 'Schakel in om reCAPTCHA-beveiliging te activeren. Haal uw sleutel en secret op bij: :url',
    'enable_recaptcha_text'         => 'reCAPTCHA inschakelen',
    'google_recaptcha_key'          => 'Google reCAPTCHA Site Key',
    'google_recaptcha_secret'       => 'Google reCAPTCHA Secret Key',
    'google_recaptcha_key_placeholder'    => 'Voer uw Google reCAPTCHA Site key in',
    'google_recaptcha_secret_placeholder' => 'Voer uw Google reCAPTCHA Secret Key in',
    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Tweefactorauthenticatie inschakelen',
    'modal_enable_2fa_desc' => 'We raden aan om 2FA in te schakelen om de veiligheid van uw account te verbeteren.',
    'enable_now_button' => 'Nu inschakelen',
    'maybe_later_button' => 'Misschien later',
    'close_aria_label' => 'Sluiten',

    // 2FA Verify page
    'one_time_password_heading' => 'Eenmalig wachtwoord',
    'one_time_password_label' => 'Eenmalig wachtwoord',
    'enter_2fa_code_placeholder' => 'Voer 2FA-code in',
    'disable_2fa_for' => 'Schakel 2FA uit voor :duration :unit',
    'verify_button' => 'Verifiëren',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Tweefactorauthenticatie (2FA)',
    'google_auth_app_desc' => 'Google Authenticator-app',
    'configured_status' => 'Geconfigureerd',
    'needs_configuration_status' => 'Moet worden geconfigureerd',
    'two_factor_scan_or_enter_msg' => 'Scan de QR-code met de Google Authenticator-app of voer de geheime sleutel handmatig in, en voer vervolgens de gegenereerde code in.',
    'your_secret_key_msg' => 'Uw geheime sleutel (als u deze handmatig moet invoeren):',

    // 2FA field labels
    'one_time_password_label' => 'Eenmalig wachtwoord',
    'enter_2fa_code_placeholder' => 'Voer 2FA-code in',
    '2fa_will_be_forced_after_date' => '2FA wordt verplicht na :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Verifiëren',

    'confirm_access_recovery_codes' => 'Toegang Bevestigen',
    're_authenticate_message'       => 'U moet zich opnieuw authenticeren om Setup of 2FA-herstelcodes te bereiken.',
    'choose_method'                 => 'Kies een methode:',
    'one_time_password'             => 'Eenmalig wachtwoord (OTP)',
    'password'                      => 'Wachtwoord',
    'enter_code_or_password'        => 'Voer code / wachtwoord in:',
    'confirm'                       => 'Bevestigen',

    '2fa_recovery_codes'           => '2FA-herstelcodes',
    'recovery_codes_description'   => 'Met deze codes kunt u inloggen als u de toegang tot uw authenticatie-app verliest. Elke code kan slechts één keer worden gebruikt.',
    'regenerate_codes'             => 'Codes opnieuw genereren',
    'copy'                         => 'Kopiëren',
    'copy_all'                     => 'Alles kopiëren',
    'no_recovery_codes_available'  => 'Er zijn geen herstelcodes beschikbaar. U kunt hieronder nieuwe codes genereren.',
    'copied'                       => 'Code naar klembord gekopieerd!',
    'all_codes_copied'             => 'Alle herstelcodes zijn gekopieerd naar het klembord!',
    'supported_app'                => 'Ondersteunde apps',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    //social logins:
    'social_login_settings'       => 'Instellingen voor social login',
    'social_login_settings_help'  => 'Voer uw social login-gegevens in.',
    'client_id'                   => 'Client-ID',
    'client_secret'               => 'Client-Secret',
    'redirect_url'                => 'Redirect-URL',
    'enter_client_id'             => 'Voer :provider Client ID in',
    'enter_client_secret'         => 'Voer :provider Client Secret in',
    'enter_redirect_url'          => 'Voer :provider Redirect URL in',
    'enable_social_login'         => 'Social Login inschakelen',
    'tab_social'                  => 'Social Logins',
    'or_login_with'               => 'Of inloggen met',
    'force_otp_after_social_login' => 'OTP verplichten na Social Login',
    'force_otp_after_social_login_tooltip' => 'Als dit is ingeschakeld, moeten gebruikers die inloggen met social accounts een OTP verifiëren.',

    //Lock Users:
    'locked_until' => 'Vergrendeld tot',
    'locked_users' => 'Vergrendelde gebruikers',
    'view_locked_users' => 'Vergrendelde gebruikers bekijken',
    'tab_login_security' => 'Login-beveiliging',
    'unlock' => 'Deblokkeren',
    'enable_user_lock_label' => 'Gebruikersvergrendeling inschakelen',
    'enable_user_lock_tooltip' => 'Gebruikersvergrendeling in-/uitschakelen na mislukte inlogpogingen.',
    'max_login_attempts_label' => 'Maximaal aantal inlogpogingen',
    'max_login_attempts_tooltip' => 'Aantal toegestane pogingen voordat een gebruiker wordt vergrendeld.',
    'lock_duration_label' => 'Vergrendelingsduur',
    'lock_duration_tooltip' => 'Hoelang (in cijfers) de gebruiker wordt vergrendeld.',
    'lock_duration_unit_label' => 'Eenheid voor vergrendelingsduur',
    'lock_duration_unit_tooltip' => 'Kies de tijdeenheid voor vergrendeling: minuten, uren, dagen, enz.',
    'account_locked_for_time_unit' => 'Uw account is vergrendeld voor :time :unit.',
    'user_unlocked_message' => 'Gebruiker succesvol gedeblokkeerd!',

    //Verify email:
    'verify_email_address_title' => 'Verifieer uw e-mailadres',
    'fresh_verification_sent' => 'Er is een nieuwe verificatielink naar uw e-mailadres verzonden.',
    'verify_email_before_proceeding' => 'Controleer uw e-mail op een verificatielink voordat u verdergaat.',
    'did_not_receive_email' => 'Als u de e-mail niet hebt ontvangen',
    'click_here_request_another' => 'klik hier om een nieuwe aan te vragen',
    'logout' => 'Uitloggen',
    'force_email_verify' => 'Verplicht e-mailverificatie',
    'force_email_verify_tooltip' => 'Als dit is ingeschakeld, moeten gebruikers hun e-mailadres verifiëren voordat ze toegang tot het systeem krijgen.',

    // Reset Mapping
    'reset_purchase_sell_mapping'     => 'Reset aankoop-verkoop mapping',
    'select_business'                 => 'Selecteer bedrijf:',
    'all_businesses'                  => 'Alle bedrijven',
    'chunk_size'                      => 'Chunkgrootte:',
    'reset_mapping'                   => 'Mapping resetten',
    'purchase_sell_mismatch_tooltip'  => 'Kies welke bedrijfs-mappings gereset moeten worden. Bij grote databases raden we aan per bedrijf te resetten.',
    'chunk_size_tooltip'              => 'De mapping wordt in kleinere delen gereset. Voor grote datasets kiest u een geschikte chunkgrootte. Actieve onderhoudsmodus aanbevolen.',

    // Maintenance Mode
    'tab_maintenance_mode'            => 'Onderhoudsmodus',
    'maintenance_mode'                => 'Onderhoudsmodus',
    'maintenance_mode_tooltip'        => 'Zet de applicatie in onderhoudsmodus (bezoekers zien dan het onderhoudsscherm).',
    'enable_countdown'                => 'Countdown inschakelen',
    'enable_timer_tooltip'            => 'Toon een live aftelklok tot het einde van de onderhoudsperiode.',
    'maintenance_duration'            => 'Duur',
    'maintenance_unit'                => 'Tijdeenheid',
    'minutes'                         => 'Minuten',
    'hours'                           => 'Uren',
    'days'                            => 'Dagen',

    // Maintenance page
    'under_maintenance'               => 'Onderhoud',
    'maintenance_heading'             => 'We voeren onderhoud uit.',
    'maintenance_subheading'          => 'Bedankt voor uw geduld!',
    'maintenance_back_in'             => 'We zijn terug over :time',
    'maintenance_back_no_timer'       => 'We zijn terug zodra het onderhoud is voltooid.',

    // Mapping reset page
    'mapping_reset_progress'          => 'Voortgang mapping-reset',
    'mapping_reset_in_progress'       => 'Mapping-reset in uitvoering',
    'batch_status'                    => 'Batchstatus',
    'refresh_status'                  => 'Status vernieuwen',

    // Mapping reset result & status
    'mapping_reset_result'            => 'Resultaat mapping-reset',
    'chunk_processing_status'         => 'Status verwerking chunks',

    // Table headers
    'business'                        => 'Bedrijf',
    'chunk_status'                    => 'Chunkstatus',
    'total_chunks'                    => 'Totaal aantal chunks',
    'status'                          => 'Status',

    // Button
    'go_back'                         => 'Ga terug',

    // Mapping Jobs
    'processed_jobs'                  => 'Mappingtaken',
    'processed_jobs_subtitle'         => 'Alle verzonden mappingbatches',
    'uuid'                            => 'Batch-UUID',
    'job_name'                        => 'Taaknaam',
    'chunk_size'                      => 'Chunkgrootte',
    'completed_chunks'                => 'Verwerkte chunks',
    'total_chunks'                    => 'Totaal aantal chunks',
    'started_at'                      => 'Gestart op',
    'finished_at'                     => 'Laatst bijgewerkt',
    'all_businesses'                  => 'Alle bedrijven',
    'view_rebuild_jobs'               => 'Bekijk voorraad-rebuildtaken',

    // Detailed instruction
    'reset_mapping_instruction'       =>
        "Het wordt aanbevolen uw queue-driver in te stellen op een echte backend:\n"
        . "→ Stel in uw .env-bestand `QUEUE_CONNECTION=database` in.\n\n"
        . "Schakel tijdens de mapping ook de onderhoudsmodus in "
        . "(Applicatie-instellingen → Onderhoudsmodus) om dubbele of missende data te voorkomen.\n\n"
        . "Bij grote databases duurt resetten langer—overweeg per bedrijf te resetten.\n\n"
        . "Vooraf:\n"
        . "• Maak een volledige back-up van de database.\n"
        . "• Bewaak het proces via logs om eventuele fouten te detecteren.",

    'recovery_codes_generated_successfully' => 'Herstelcodes succesvol gegenereerd',

    // Disposable-email sync
    'sync_disposable_list'             => 'Synchroniseer disposable-e-maillijst',
    'sync_disposable_success'          => 'Disposable-e-maillijst bijgewerkt.',
    'sync_disposable_failed'           => 'Synchronisatie disposable-e-maillijst mislukt.',

    // Temporary-email protection
    'temp_email_protection'            => 'Blokkeer tijdelijke e-mailadressen',
    'temp_email_protection_tooltip'    => 'Blokkeer tijdelijke/wegwerp e-maildomeinen (bijv. Mailinator, 10MinuteMail).',
    'disposable_not_allowed'           => 'Tijdelijke e-mailadressen zijn niet toegestaan.',

];
