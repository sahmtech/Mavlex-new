<?php

return [
    'app_settings' => 'Anwendungseinstellungen',
    'manage_app_settings' => 'Anwendungseinstellungen verwalten',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Design',
    'tab_login_page' => 'Login-Seite',
    'tab_sidebar' => 'Seitenleiste',
    'tab_language' => 'Sprache',
    'tab_repair_status' => 'Reparaturstatus',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Einstellungen aktualisieren',

    'enable_custom_bg_image_for_login' => 'Benutzerdefinierten Hintergrund für Login aktivieren',
    'enable_custom_bg_image_for_login_tooltip' => 'Ein benutzerdefiniertes Hintergrundbild für die Login-Seite festlegen.',

    'enable_custom_sidebar_logo' => 'Benutzerdefiniertes Seitenleisten-Logo erlauben',
    'enable_custom_sidebar_logo_tooltip' => 'Erlaubt es Unternehmen, ein eigenes Logo in der Seitenleiste zu verwenden.',

    // language.blade.php
    'header_language_change' => 'Sprachwechsel in der Kopfzeile',
    'header_language_change_tooltip' => 'Ermöglicht Benutzern das Umschalten der Sprache in der Hauptkopfzeile.',
    'header_languages_label' => 'Sprachen in der Kopfzeile',
    'header_languages_label_tooltip' => 'Wählen Sie aus, welche Sprachen in der Kopfzeile angezeigt werden sollen.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Reparaturstatus auf dem Login-Bildschirm anzeigen',

    // 2fa.blade.php
    'enable_2fa' => '2FA aktivieren',
    'enable_2fa_tooltip' => 'Zweistufige Authentifizierung (2FA) für die Anwendung aktivieren.',

    'force_2fa' => '2FA erzwingen',
    'force_2fa_tooltip' => 'Benutzer müssen 2FA einrichten, bevor sie die Anwendung verwenden können.',

    'recommend_2fa' => '2FA empfehlen',
    'recommend_2fa_tooltip' => 'Beim Login erscheint einmalig ein Hinweisfenster, das Benutzer zur Aktivierung von 2FA auffordert.',

    'allow_disable_2fa' => 'Vorübergehendes Deaktivieren von 2FA erlauben',
    'allow_disable_2fa_tooltip' => 'Erlaubt Benutzern, 2FA für einen festgelegten Zeitraum vorübergehend zu deaktivieren.',

    'disable_2fa_duration_label' => 'Dauer der Deaktivierung von 2FA',
    'disable_2fa_duration_label_tooltip' => 'Legen Sie den Zeitraum fest, in dem 2FA deaktiviert bleiben kann.',

    'disable_2fa_unit_label' => 'Einheit für Dauer der 2FA-Deaktivierung',

    'force_2fa_after_date_label' => '2FA nach einem bestimmten Datum erzwingen',
    'force_2fa_after_date_label_tooltip' => 'Nach diesem Datum müssen alle Benutzer 2FA aktivieren. Dieses Datum wird auch im Empfehlungshinweis für 2FA angezeigt.',

    'primary_color_label' => 'Primärfarbe',
    'primary_color_label_tooltip' => 'Wählen Sie die Standard-Primärfarbe der Anwendung. Sie wird für Unternehmen verwendet, die keine eigenen Farben festlegen.',
    'secondary_color_label' => 'Sekundärfarbe',
    'secondary_color_label_tooltip' => 'Wählen Sie die Standard-Sekundärfarbe der Anwendung. Sie wird für Unternehmen verwendet, die keine eigenen Farben festlegen.',

    'allow_theme_change' => 'Designänderung erlauben',
    'allow_theme_change_tooltip' => 'Ermöglicht Unternehmen die Anpassung eigener Designfarben. Haben sie keine eigenen Farben, verwenden sie die hier festgelegten Standardfarben.',

    'login_bg_image_label' => 'Login-Hintergrundbild',
    'login_bg_image_label_tooltip' => 'Durch das Hochladen eines neuen Bildes wird das aktuelle Hintergrundbild ersetzt.',

    'logo_dark_tooltip'  => 'Ändern Sie das dunkle Standardlogo der Anwendung (wird im hellen Modus genutzt).',
    'logo_light_tooltip' => 'Ändern Sie das helle Standardlogo der Anwendung (wird im dunklen Modus genutzt).',
    'favicon_tooltip' => 'Empfohlene Abmessungen: 32×32 px. Dieses Symbol wird in Browser-Tabs und Lesezeichen angezeigt.',
    'upload_favicon' => 'Favicon hochladen',

    // Fonts
    'tab_fonts' => 'Schriftarten',
    'english_font' => 'Englische Schriftart',
    'arabic_font' => 'Arabische Schriftart',
    'custom_font_placeholder' => 'Geben Sie einen benutzerdefinierten Schriftartnamen ein...',
    'select_font' => 'Schriftart auswählen...',
    'or' => 'oder',
    'font_help_text' => 'Wählen Sie aus der Liste oder geben Sie Ihre eigene Schriftart ein.',
    'english_font_tooltip' => 'Geben Sie einen benutzerdefinierten Schriftartnamen ein oder wählen Sie eine Schriftart aus der Liste. Schriftartnamen finden Sie unter :url',
    'arabic_font_tooltip' => 'Geben Sie einen benutzerdefinierten Schriftartnamen ein oder wählen Sie eine Schriftart aus der Liste. Schriftartnamen finden Sie unter :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha' => 'Google reCAPTCHA aktivieren',
    'enable_recaptcha_tooltip' => 'Umschalten, um den reCAPTCHA-Schutz zu aktivieren. Site-Key und Secret von :url beziehen.',
    'enable_recaptcha_text' => 'reCAPTCHA aktivieren',
    'google_recaptcha_key' => 'Google reCAPTCHA Site-Key',
    'google_recaptcha_secret' => 'Google reCAPTCHA Secret-Key',
    'google_recaptcha_key_placeholder' => 'Geben Sie Ihren Google reCAPTCHA Site-Key ein',
    'google_recaptcha_secret_placeholder' => 'Geben Sie Ihren Google reCAPTCHA Secret-Key ein',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Zweistufige Authentifizierung aktivieren',
    'modal_enable_2fa_desc' => 'Wir empfehlen, 2FA zu aktivieren, um die Sicherheit Ihres Kontos zu erhöhen.',
    'enable_now_button' => 'Jetzt aktivieren',
    'maybe_later_button' => 'Vielleicht später',
    'close_aria_label' => 'Schließen',

    // 2FA Verify page
    'one_time_password_heading' => 'Einmaliges Passwort',
    'one_time_password_label' => 'Einmaliges Passwort',
    'enter_2fa_code_placeholder' => 'Geben Sie den 2FA-Code ein',
    'disable_2fa_for' => '2FA für :duration :unit deaktivieren',
    'verify_button' => 'Überprüfen',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Zweistufige Authentifizierung (2FA)',
    'google_auth_app_desc' => 'Google Authenticator-App',
    'configured_status' => 'Eingerichtet',
    'needs_configuration_status' => 'Nicht eingerichtet',
    'two_factor_scan_or_enter_msg' => 'Scannen Sie den QR-Code mit der Google Authenticator-App oder geben Sie den geheimen Schlüssel manuell ein und anschließend den generierten Code.',
    'your_secret_key_msg' => 'Ihr geheimer Schlüssel (für manuelle Eingabe, falls erforderlich):',

    // 2FA field labels
    'one_time_password_label' => 'Einmaliges Passwort',
    'enter_2fa_code_placeholder' => 'Geben Sie den 2FA-Code ein',
    '2fa_will_be_forced_after_date' => '2FA wird nach dem :date erzwungen.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Überprüfen',

    'confirm_access_recovery_codes' => 'Zugang bestätigen',
    're_authenticate_message' => 'Sie müssen sich erneut authentifizieren, um auf Einstellungen oder 2FA-Wiederherstellungscodes zuzugreifen.',
    'choose_method' => 'Methode auswählen:',
    'one_time_password' => 'Einmaliges Passwort (OTP)',
    'password' => 'Passwort',
    'enter_code_or_password' => 'Code / Passwort eingeben:',
    'confirm' => 'Bestätigen',

    '2fa_recovery_codes' => '2FA-Wiederherstellungscodes',
    'recovery_codes_description' => 'Mit diesen Codes können Sie sich anmelden, falls Sie den Zugriff auf Ihre Authenticator-App verlieren. Jeder Code kann nur einmal verwendet werden.',
    'regenerate_codes' => 'Codes neu generieren',
    'copy' => 'Kopieren',
    'copy_all' => 'Alle kopieren',
    'no_recovery_codes_available' => 'Keine Wiederherstellungscodes verfügbar. Sie können unten neue Codes erstellen.',
    'copied' => 'Code in die Zwischenablage kopiert!',
    'all_codes_copied' => 'Alle Wiederherstellungscodes wurden kopiert!',
    'supported_app' => 'Unterstützte Apps',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    // Social logins:
    'social_login_settings' => 'Einstellungen für Social Logins',
    'social_login_settings_help' => 'Geben Sie Ihre Anmeldedaten für Social Logins ein.',
    'client_id' => 'Client-ID',
    'client_secret' => 'Client-Secret',
    'redirect_url' => 'Weiterleitungs-URL (Redirect URL)',
    'enter_client_id' => 'Geben Sie die Client-ID für :provider ein',
    'enter_client_secret' => 'Geben Sie das Client-Secret für :provider ein',
    'enter_redirect_url' => 'Geben Sie die Weiterleitungs-URL für :provider ein',
    'enable_social_login' => 'Social Login aktivieren',
    'tab_social' => 'Social Logins',
    'or_login_with' => 'Oder anmelden mit',
    'force_otp_after_social_login' => 'OTP nach Social Login erzwingen',
    'force_otp_after_social_login_tooltip' => 'Wenn aktiviert, müssen Benutzer, die sich über Social Logins anmelden, einen Einmalcode (OTP) eingeben.',

    //Lock Users:
    'locked_until' => 'Gesperrt bis',
    'locked_users' => 'Gesperrte Benutzer',
    'view_locked_users' => 'Gesperrte Benutzer anzeigen',
    'tab_login_security' => 'Login-Sicherheit',
    'unlock' => 'Entsperren',
    'enable_user_lock_label' => 'Benutzersperre aktivieren',
    'enable_user_lock_tooltip' => 'Aktivieren/deaktivieren der Benutzersperre nach fehlgeschlagenen Login-Versuchen.',
    'max_login_attempts_label' => 'Maximale Login-Versuche',
    'max_login_attempts_tooltip' => 'Anzahl der Versuche, die erlaubt sind, bevor ein Benutzer gesperrt wird.',
    'lock_duration_label' => 'Sperrdauer',
    'lock_duration_tooltip' => 'Die Zeitspanne (Zahl), für die der Benutzer gesperrt bleibt.',
    'lock_duration_unit_label' => 'Einheit der Sperrdauer',
    'lock_duration_unit_tooltip' => 'Wählen Sie die Zeiteinheit für die Sperrdauer: Minuten, Stunden, Tage usw.',
    'account_locked_for_time_unit' => 'Ihr Konto ist für :time :unit gesperrt.',
    'user_unlocked_message' => 'Benutzer wurde erfolgreich entsperrt!',

    //Verify email:
    'verify_email_address_title' => 'Bestätigen Sie Ihre E-Mail-Adresse',
    'fresh_verification_sent' => 'Ein neuer Bestätigungslink wurde an Ihre E-Mail-Adresse gesendet.',
    'verify_email_before_proceeding' => 'Bevor Sie fortfahren, überprüfen Sie bitte Ihre E-Mails auf den Bestätigungslink.',
    'did_not_receive_email' => 'Wenn Sie die E-Mail nicht erhalten haben',
    'click_here_request_another' => 'klicken Sie hier, um einen weiteren Link anzufordern',
    'logout' => 'Abmelden',
    'force_email_verify' => 'E-Mail-Verifizierung erzwingen',
    'force_email_verify_tooltip' => 'Wenn aktiviert, müssen Benutzer ihre E-Mail-Adresse verifizieren, bevor sie Zugriff auf das System erhalten.',
     // Reset Mapping
     'reset_purchase_sell_mapping'   => 'Kauf-Verkauf-Zuordnung zurücksetzen',
     'select_business'               => 'Unternehmen auswählen:',
     'all_businesses'                => 'Alle Unternehmen',
     'chunk_size'                    => 'Chunk-Größe:',
     'reset_mapping'                 => 'Zuordnung zurücksetzen',
     'purchase_sell_mismatch_tooltip' =>
         'Wählen Sie die Unternehmenszuordnungen aus, die zurückgesetzt werden sollen. '
         . 'Bei großen Datenbanken empfehlen wir, die Zuordnung pro Unternehmen zurückzusetzen.',
     'chunk_size_tooltip'           =>
         'Die Zuordnung wird in kleineren Chargen zurückgesetzt. '
         . 'Für große Datensätze wählen Sie eine geeignete Chunk-Größe. '
         . 'Ein aktiver Wartungsmodus wird empfohlen.',
 
     // Maintenance Mode
     'tab_maintenance_mode'         => 'Wartungsmodus',
     'maintenance_mode'             => 'Wartungsmodus',
     'maintenance_mode_tooltip'     => 'Setzt die Anwendung in den Wartungsmodus (Besucher sehen dann die Wartungsseite).',
     'enable_countdown'             => 'Countdown aktivieren',
     'enable_timer_tooltip'         => 'Zeigt einen Live-Countdown bis Ende der Wartung an.',
     'maintenance_duration'         => 'Dauer',
     'maintenance_unit'             => 'Einheit der Dauer',
     'minutes'                      => 'Minuten',
     'hours'                        => 'Stunden',
     'days'                         => 'Tage',
 
     // Maintenance page
     'under_maintenance'            => 'Wartung läuft',
     'maintenance_heading'          => 'Wir führen gerade Wartungsarbeiten durch.',
     'maintenance_subheading'       => 'Vielen Dank für Ihre Geduld!',
     'maintenance_back_in'          => 'Wir sind in :time zurück',
     'maintenance_back_no_timer'    => 'Wir sind zurück, sobald die Wartung abgeschlossen ist.',
 
     // Mapping reset page
     'mapping_reset_progress'       => 'Fortschritt der Zuordnungsrücksetzung',
     'mapping_reset_in_progress'    => 'Zuordnungsrücksetzung läuft',
     'batch_status'                 => 'Stapel-Status',
     'refresh_status'               => 'Status aktualisieren',
 
     // Mapping reset result & status
     'mapping_reset_result'         => 'Ergebnis der Zuordnungsrücksetzung',
     'chunk_processing_status'      => 'Status der Chargenverarbeitung',
 
     // Table headers
     'business'                     => 'Unternehmen',
     'chunk_status'                 => 'Status der Chunks',
     'total_chunks'                 => 'Gesamtzahl der Chunks',
     'status'                       => 'Status',
 
     // Buttons
     'go_back'                      => 'Zurück',
 
     // Jobs
     'processed_jobs'               => 'Zuordnungsaufträge',
     'processed_jobs_subtitle'      => 'Alle versendeten Zuordnungsstapel',
     'uuid'                         => 'Stapel-UUID',
     'job_name'                     => 'Auftragsname',
     'completed_chunks'             => 'Abgeschlossene Chunks',
     'started_at'                   => 'Begonnen am',
     'finished_at'                  => 'Zuletzt aktualisiert',
     'view_rebuild_jobs'            => 'Bestands-Wiederherstellungsaufträge anzeigen',
 
     // Detailed instruction
     'reset_mapping_instruction'    =>
         "Es wird empfohlen, den Queue-Treiber auf eine echte Backend-Verbindung zu setzen:\n"
         . "→ In Ihrer .env-Datei `QUEUE_CONNECTION=database` festlegen.\n\n"
         . "Aktivieren Sie außerdem den Wartungsmodus (Anwendungseinstellungen → Wartungsmodus), "
         . "während die Zuordnungsrücksetzung läuft, um doppelte oder fehlende Daten zu vermeiden.\n\n"
         . "Bei großen Datenbanken dauert die Rücksetzung länger – ziehen Sie in Erwägung, "
         . "pro Unternehmen zurückzusetzen.\n\n"
         . "Bevor Sie beginnen:\n"
         . "• Erstellen Sie ein vollständiges Backup der Datenbank.\n"
         . "• Überwachen Sie den Vorgang in den Logs, um Fehler zu erkennen.",
 
     'recovery_codes_generated_successfully' => 'Wiederherstellungscodes erfolgreich erstellt',
 
     // Disposable-email sync
     'sync_disposable_list'       => 'Disposable-E-Mail-Liste synchronisieren',
     'sync_disposable_success'    => 'Disposable-E-Mail-Liste erfolgreich aktualisiert.',
     'sync_disposable_failed'     => 'Fehler beim Synchronisieren der Disposable-E-Mail-Liste.',
 
     // Temporary-email protection
     'temp_email_protection'          => 'Temporäre E-Mail-Adressen blockieren',
     'temp_email_protection_tooltip'  => 'Blockiert temporäre/Einweg-E-Mail-Domains (z. B. Mailinator, 10MinuteMail).',
     'disposable_not_allowed'         => 'Disposable-E-Mail-Adressen sind nicht erlaubt.',

];
