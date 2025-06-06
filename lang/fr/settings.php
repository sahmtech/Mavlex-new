<?php

return [
    'app_settings' => 'Paramètres de l’Application',
    'manage_app_settings' => 'Gérer les Paramètres de l’Application',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Apparence',
    'tab_login_page' => 'Page de Connexion',
    'tab_sidebar' => 'Barre Latérale',
    'tab_language' => 'Langue',
    'tab_repair_status' => 'Statut de Réparation',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Mettre à jour les Paramètres',

    'enable_custom_bg_image_for_login' => 'Activer l’Arrière-plan Personnalisé pour la Connexion',
    'enable_custom_bg_image_for_login_tooltip' => 'Définir une image d’arrière-plan personnalisée pour la page de connexion.',

    'enable_custom_sidebar_logo' => 'Autoriser un Logo Personnalisé dans la Barre Latérale',
    'enable_custom_sidebar_logo_tooltip' => 'Permettre aux entreprises d’utiliser un logo personnalisé dans la barre latérale.',

    // language.blade.php
    'header_language_change' => 'Changement de Langue dans l’En-tête',
    'header_language_change_tooltip' => 'Permettre aux utilisateurs de changer la langue depuis l’en-tête principal.',
    'header_languages_label' => 'Langues dans l’En-tête',
    'header_languages_label_tooltip' => 'Sélectionnez les langues à afficher dans l’en-tête.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Afficher le Statut de Réparation sur l’Écran de Connexion',

    // 2fa.blade.php
    'enable_2fa' => 'Activer 2FA',
    'enable_2fa_tooltip' => 'Activer l’authentification à deux facteurs (2FA) pour l’application.',

    'force_2fa' => 'Forcer 2FA',
    'force_2fa_tooltip' => 'Les utilisateurs doivent configurer 2FA avant d’utiliser l’application.',

    'recommend_2fa' => 'Recommander 2FA',
    'recommend_2fa_tooltip' => 'Une fenêtre s’affiche une seule fois à la connexion pour encourager l’activation de 2FA.',

    'allow_disable_2fa' => 'Permettre la Désactivation Temporaire de 2FA',
    'allow_disable_2fa_tooltip' => 'Autoriser les utilisateurs à désactiver temporairement 2FA pendant une durée définie.',

    'disable_2fa_duration_label' => 'Durée de Désactivation de 2FA',
    'disable_2fa_duration_label_tooltip' => 'Définir la période pendant laquelle 2FA peut rester désactivée.',

    'disable_2fa_unit_label' => 'Unité de Durée pour la Désactivation de 2FA',

    'force_2fa_after_date_label' => 'Forcer 2FA Après une Date Spécifique',
    'force_2fa_after_date_label_tooltip' => 'Après cette date, tous les utilisateurs devront activer 2FA. La date sera également affichée dans la fenêtre de recommandation de 2FA.',

    'primary_color_label' => 'Couleur Principale',
    'primary_color_label_tooltip' => 'Choisissez la couleur principale par défaut de l’application. Elle est utilisée pour les entreprises qui ne définissent pas leurs propres couleurs.',
    'secondary_color_label' => 'Couleur Secondaire',
    'secondary_color_label_tooltip' => 'Choisissez la couleur secondaire par défaut de l’application. Elle est utilisée pour les entreprises qui ne définissent pas leurs propres couleurs.',

    'allow_theme_change' => 'Autoriser le Changement de Thème',
    'allow_theme_change_tooltip' => 'Permettre aux entreprises de personnaliser les couleurs de leur thème. Si elles n’en définissent pas, elles utiliseront les couleurs par défaut indiquées ici.',

    'login_bg_image_label' => 'Image d’Arrière-plan de Connexion',
    'login_bg_image_label_tooltip' => 'En téléversant une nouvelle image, vous remplacerez l’arrière-plan actuel.',

    'logo_dark_tooltip'  => 'Modifier le logo sombre par défaut de l’application (utilisé en mode clair).',
    'logo_light_tooltip' => 'Modifier le logo clair par défaut de l’application (utilisé en mode sombre).',
    'favicon_tooltip' => 'Dimensions recommandées : 32×32 px. Cette icône apparaît dans les onglets et favoris du navigateur.',
    'upload_favicon' => 'Téléverser un Favicon',

    // Fonts
    'tab_fonts' => 'Polices',
    'english_font' => 'Police Anglaise',
    'arabic_font' => 'Police Arabe',
    'custom_font_placeholder' => 'Entrez un nom de police personnalisé...',
    'select_font' => 'Sélectionner une police...',
    'or' => 'ou',
    'font_help_text' => 'Choisissez dans la liste ou entrez votre propre police.',
    'english_font_tooltip' => 'Entrez un nom de police personnalisé ou sélectionnez-en un dans la liste. Vous pouvez trouver des noms de polices sur :url',
    'arabic_font_tooltip' => 'Entrez un nom de police personnalisé ou sélectionnez-en un dans la liste. Vous pouvez trouver des noms de polices sur :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha' => 'Activer Google reCAPTCHA',
    'enable_recaptcha_tooltip' => 'Basculer pour activer la protection reCAPTCHA. Obtenez votre clé et secret sur :url',
    'enable_recaptcha_text' => 'Activer reCAPTCHA',
    'google_recaptcha_key' => 'Clé de Site Google reCAPTCHA',
    'google_recaptcha_secret' => 'Clé Secrète Google reCAPTCHA',
    'google_recaptcha_key_placeholder' => 'Entrez votre Google reCAPTCHA Site Key',
    'google_recaptcha_secret_placeholder' => 'Entrez votre Google reCAPTCHA Secret Key',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Activer l’Authentification à Deux Facteurs',
    'modal_enable_2fa_desc' => 'Nous vous recommandons d’activer 2FA pour renforcer la sécurité de votre compte.',
    'enable_now_button' => 'Activer Maintenant',
    'maybe_later_button' => 'Peut-être Plus Tard',
    'close_aria_label' => 'Fermer',

    // 2FA Verify page
    'one_time_password_heading' => 'Mot de Passe à Usage Unique',
    'one_time_password_label' => 'Mot de Passe à Usage Unique',
    'enter_2fa_code_placeholder' => 'Entrez le code 2FA',
    'disable_2fa_for' => 'Désactiver 2FA pour :duration :unit',
    'verify_button' => 'Vérifier',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Authentification à Deux Facteurs (2FA)',
    'google_auth_app_desc' => 'Application Google Authenticator',
    'configured_status' => 'Configuré',
    'needs_configuration_status' => 'Non Configuré',
    'two_factor_scan_or_enter_msg' => 'Veuillez scanner le code QR ci-dessous avec Google Authenticator ou entrer la clé manuellement, puis saisir le code généré.',
    'your_secret_key_msg' => 'Votre clé secrète (si vous devez la saisir manuellement) :',

    // 2FA field labels
    'one_time_password_label' => 'Mot de Passe à Usage Unique',
    'enter_2fa_code_placeholder' => 'Entrez le code 2FA',
    '2fa_will_be_forced_after_date' => '2FA sera obligatoire après :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Vérifier',

    'confirm_access_recovery_codes' => 'Confirmer l’Accès',
    're_authenticate_message' => 'Vous devez vous réauthentifier pour accéder aux Paramètres ou aux Codes de Récupération 2FA.',
    'choose_method' => 'Choisir la méthode :',
    'one_time_password' => 'Mot de Passe à Usage Unique (OTP)',
    'password' => 'Mot de Passe',
    'enter_code_or_password' => 'Entrez le code ou le mot de passe :',
    'confirm' => 'Confirmer',

    '2fa_recovery_codes' => 'Codes de Récupération 2FA',
    'recovery_codes_description' => 'Ces codes vous permettent de vous connecter si vous perdez l’accès à votre application d’authentification. Chaque code ne peut être utilisé qu’une seule fois.',
    'regenerate_codes' => 'Régénérer les Codes',
    'copy' => 'Copier',
    'copy_all' => 'Tout Copier',
    'no_recovery_codes_available' => 'Aucun code de récupération disponible. Vous pouvez générer de nouveaux codes ci-dessous.',
    'copied' => 'Code copié dans le presse-papiers !',
    'all_codes_copied' => 'Tous les codes de récupération ont été copiés !',
    'supported_app' => 'Applications Prises en Charge',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    // Social logins:
    'social_login_settings' => 'Paramètres de Connexion Sociale',
    'social_login_settings_help' => 'Entrez vos identifiants pour la connexion sociale.',
    'client_id' => 'ID Client',
    'client_secret' => 'Secret Client',
    'redirect_url' => 'URL de Redirection (Redirect URL)',
    'enter_client_id' => 'Entrez l’ID Client pour :provider',
    'enter_client_secret' => 'Entrez le Secret Client pour :provider',
    'enter_redirect_url' => 'Entrez l’URL de Redirection pour :provider',
    'enable_social_login' => 'Activer la Connexion Sociale',
    'tab_social' => 'Connexions Sociales',
    'or_login_with' => 'Ou se connecter avec',
    'force_otp_after_social_login' => 'Forcer le OTP après la Connexion Sociale',
    'force_otp_after_social_login_tooltip' => 'Si activé, les utilisateurs qui se connectent via les réseaux sociaux devront saisir un code OTP.',

    //Lock Users:
    'locked_until' => 'Verrouillé jusqu’à',
    'locked_users' => 'Utilisateurs Verrouillés',
    'view_locked_users' => 'Voir les Utilisateurs Verrouillés',
    'tab_login_security' => 'Sécurité de Connexion',
    'unlock' => 'Déverrouiller',
    'enable_user_lock_label' => 'Activer le Verrouillage Utilisateur',
    'enable_user_lock_tooltip' => 'Activer/désactiver le verrouillage de l’utilisateur après des tentatives de connexion échouées.',
    'max_login_attempts_label' => 'Nombre Maximum de Tentatives de Connexion',
    'max_login_attempts_tooltip' => 'Le nombre de tentatives autorisées avant de verrouiller l’utilisateur.',
    'lock_duration_label' => 'Durée du Verrouillage',
    'lock_duration_tooltip' => 'Durée (en chiffres) pendant laquelle l’utilisateur reste verrouillé.',
    'lock_duration_unit_label' => 'Unité de la Durée de Verrouillage',
    'lock_duration_unit_tooltip' => 'Choisissez l’unité de temps pour la durée de verrouillage : minutes, heures, jours, etc.',
    'account_locked_for_time_unit' => 'Votre compte est verrouillé pendant :time :unit.',
    'user_unlocked_message' => 'Utilisateur déverrouillé avec succès !',

    //Verify email:
    'verify_email_address_title' => 'Vérifiez Votre Adresse E-mail',
    'fresh_verification_sent' => 'Un nouveau lien de vérification a été envoyé à votre adresse e-mail.',
    'verify_email_before_proceeding' => 'Avant de continuer, veuillez vérifier votre e-mail pour le lien de vérification.',
    'did_not_receive_email' => 'Si vous n’avez pas reçu l’e-mail',
    'click_here_request_another' => 'cliquez ici pour en demander un autre',
    'logout' => 'Déconnexion',
    'force_email_verify' => 'Forcer la Vérification de l’E-mail',
    'force_email_verify_tooltip' => 'Si activé, les utilisateurs doivent vérifier leur adresse e-mail avant d’accéder au système.',
    // Reset Mapping
    'reset_purchase_sell_mapping'     => 'Réinitialiser le mappage achat-vente',
    'select_business'                 => 'Sélectionner l’entreprise :',
    'all_businesses'                  => 'Toutes les entreprises',
    'chunk_size'                      => 'Taille du lot :',
    'reset_mapping'                   => 'Réinitialiser le mappage',
    'purchase_sell_mismatch_tooltip'  => 'Choisissez les mappages d’entreprise à réinitialiser. Si vous avez une grande base de données, nous recommandons de réinitialiser le mappage par entreprise.',
    'chunk_size_tooltip'              => 'Le mappage sera réinitialisé en plus petits lots. Pour les gros ensembles de données, choisissez une taille de lot appropriée. Le mode maintenance actif est recommandé.',

    // Maintenance Mode
    'tab_maintenance_mode'            => 'Mode maintenance',
    'maintenance_mode'                => 'Mode maintenance',
    'maintenance_mode_tooltip'        => 'Met l’application en mode maintenance (les visiteurs verront l’écran de maintenance).',
    'enable_countdown'                => 'Activer le compte à rebours',
    'enable_timer_tooltip'            => 'Afficher un compte à rebours en direct jusqu’à la fin de la maintenance.',
    'maintenance_duration'            => 'Durée',
    'maintenance_unit'                => 'Unité de durée',
    'minutes'                         => 'Minutes',
    'hours'                           => 'Heures',
    'days'                            => 'Jours',

    // Maintenance page
    'under_maintenance'               => 'En maintenance',
    'maintenance_heading'             => 'Nous effectuons quelques opérations de maintenance.',
    'maintenance_subheading'          => 'Merci de votre patience !',
    'maintenance_back_in'             => 'Nous serons de retour dans :time',
    'maintenance_back_no_timer'       => 'Nous serons de retour dès la fin de la maintenance.',

    // Mapping reset page
    'mapping_reset_progress'          => 'Progression de la réinitialisation du mappage',
    'mapping_reset_in_progress'       => 'Réinitialisation du mappage en cours',
    'batch_status'                    => 'Statut de la lot',
    'refresh_status'                  => 'Rafraîchir le statut',

    // Mapping reset result & status
    'mapping_reset_result'            => 'Résultat de la réinitialisation du mappage',
    'chunk_processing_status'         => 'Statut du traitement des lots',

    // Table headers
    'business'                        => 'Entreprise',
    'chunk_status'                    => 'Statut du lot',
    'total_chunks'                    => 'Nombre total de lots',
    'status'                          => 'Statut',

    // Button
    'go_back'                         => 'Retour',

    // Mapping Jobs
    'processed_jobs'                  => 'Tâches de mappage',
    'processed_jobs_subtitle'         => 'Tous les lots de mappage envoyés',
    'uuid'                            => 'UUID du lot',
    'job_name'                        => 'Nom de la tâche',
    'completed_chunks'                => 'Lots terminés',
    'started_at'                      => 'Commencé le',
    'finished_at'                     => 'Dernière mise à jour',
    'view_rebuild_jobs'               => 'Voir les tâches de reconstruction de stock',

    // Detailed instruction
    'reset_mapping_instruction'       =>
        "Il est recommandé de configurer votre driver de file d’attente sur un back-end réel :\n" .
        "→ Dans votre fichier .env, définissez `QUEUE_CONNECTION=database`.\n\n" .
        "Activez également le mode maintenance (Paramètres de l’application → Mode maintenance) pendant l’exécution de la réinitialisation du mappage pour éviter les doublons ou les données manquantes.\n\n" .
        "Si vous avez une grande base de données, la réinitialisation prendra plus de temps : envisagez de réinitialiser par entreprise.\n\n" .
        "Avant de commencer :\n" .
        "• Effectuez une sauvegarde complète de la base de données.\n" .
        "• Surveillez le processus via les journaux pour détecter d’éventuelles erreurs.",

    'recovery_codes_generated_successfully' => 'Codes de récupération générés avec succès',

    // Disposable-email sync
    'sync_disposable_list'            => 'Synchroniser la liste des e-mails jetables',
    'sync_disposable_success'         => 'Liste des e-mails jetables mise à jour.',
    'sync_disposable_failed'          => 'Échec de la synchronisation de la liste des e-mails jetables.',

    // Temporary-email protection
    'temp_email_protection'           => 'Blocage des e-mails jetables',
    'temp_email_protection_tooltip'   => 'Bloquer les domaines d’e-mails temporaires/jetables (p. ex. Mailinator, 10MinuteMail).',
    'disposable_not_allowed'          => 'Les adresses e-mail jetables ne sont pas autorisées.',

];
