<?php

return [
    'app_settings' => 'Configuración de la Aplicación',
    'manage_app_settings' => 'Administrar Configuración de la Aplicación',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Apariencia',
    'tab_login_page' => 'Página de Inicio de Sesión',
    'tab_sidebar' => 'Barra Lateral',
    'tab_language' => 'Idioma',
    'tab_repair_status' => 'Estado de Reparación',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Actualizar Configuración',

    'enable_custom_bg_image_for_login' => 'Habilitar Fondo Personalizado para Inicio de Sesión',
    'enable_custom_bg_image_for_login_tooltip' => 'Establecer una imagen de fondo personalizada para la página de inicio de sesión.',

    'enable_custom_sidebar_logo' => 'Permitir Logo Personalizado en la Barra Lateral',
    'enable_custom_sidebar_logo_tooltip' => 'Permite a las empresas usar un logo personalizado en la barra lateral.',

    // language.blade.php
    'header_language_change' => 'Cambio de Idioma en la Cabecera',
    'header_language_change_tooltip' => 'Permitir a los usuarios cambiar el idioma en la cabecera principal.',
    'header_languages_label' => 'Idiomas en la Cabecera',
    'header_languages_label_tooltip' => 'Seleccione los idiomas que se mostrarán en la cabecera.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Mostrar Estado de Reparación en la Pantalla de Inicio de Sesión',

    // 2fa.blade.php
    'enable_2fa' => 'Habilitar 2FA',
    'enable_2fa_tooltip' => 'Activar la Autenticación de Dos Factores (2FA) para la aplicación.',

    'force_2fa' => 'Forzar 2FA',
    'force_2fa_tooltip' => 'Los usuarios deben configurar 2FA antes de poder usar la aplicación.',

    'recommend_2fa' => 'Recomendar 2FA',
    'recommend_2fa_tooltip' => 'Muestra una ventana emergente única al iniciar sesión para alentar a los usuarios a habilitar 2FA.',

    'allow_disable_2fa' => 'Permitir Deshabilitar 2FA Temporalmente',
    'allow_disable_2fa_tooltip' => 'Permite a los usuarios deshabilitar 2FA temporalmente durante un tiempo definido.',

    'disable_2fa_duration_label' => 'Duración para Deshabilitar 2FA',
    'disable_2fa_duration_label_tooltip' => 'Definir el período durante el cual 2FA puede permanecer deshabilitado.',

    'disable_2fa_unit_label' => 'Unidad de Duración para Deshabilitar 2FA',

    'force_2fa_after_date_label' => 'Forzar 2FA Después de la Fecha',
    'force_2fa_after_date_label_tooltip' => 'Después de esta fecha, todos los usuarios deberán habilitar 2FA. Esta fecha también se muestra en la ventana de recomendación de 2FA.',

    'primary_color_label' => 'Color Primario',
    'primary_color_label_tooltip' => 'Seleccione el color primario predeterminado de la aplicación. Se usará para las empresas que no definan sus propios colores.',
    'secondary_color_label' => 'Color Secundario',
    'secondary_color_label_tooltip' => 'Seleccione el color secundario predeterminado de la aplicación. Se usará para las empresas que no definan sus propios colores.',

    'allow_theme_change' => 'Permitir Cambio de Tema',
    'allow_theme_change_tooltip' => 'Permite que las empresas personalicen los colores de su tema. Si no definen colores propios, se usarán los colores predeterminados establecidos aquí.',

    'login_bg_image_label' => 'Imagen de Fondo para Inicio de Sesión',
    'login_bg_image_label_tooltip' => 'Al subir una nueva imagen se reemplaza el fondo actual.',

    'logo_dark_tooltip' => 'Cambiar el logo oscuro predeterminado de la aplicación (se usa en modo claro).',
    'logo_light_tooltip' => 'Cambiar el logo claro predeterminado de la aplicación (se usa en modo oscuro).',
    'favicon_tooltip' => 'Dimensiones recomendadas: 32×32 px. Este ícono aparece en las pestañas y marcadores del navegador.',
    'upload_favicon' => 'Subir Favicon',

    // Fonts
    'tab_fonts' => 'Fuentes',
    'english_font' => 'Fuente en Inglés',
    'arabic_font' => 'Fuente en Árabe',
    'custom_font_placeholder' => 'Ingrese un nombre de fuente personalizado...',
    'select_font' => 'Seleccionar fuente...',
    'or' => 'o',
    'font_help_text' => 'Elija de la lista o ingrese su propia fuente.',
    'english_font_tooltip' => 'Ingrese un nombre de fuente personalizado o seleccione una de la lista. Puede encontrar nombres de fuentes en: :url',
    'arabic_font_tooltip' => 'Ingrese un nombre de fuente personalizado o seleccione una de la lista. Puede encontrar nombres de fuentes en: :url',

    // Recaptcha
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha' => 'Habilitar Google reCAPTCHA',
    'enable_recaptcha_tooltip' => 'Activar para habilitar la protección reCAPTCHA. Obtenga la clave del sitio y el secreto en: :url',
    'enable_recaptcha_text' => 'Habilitar reCAPTCHA',
    'google_recaptcha_key' => 'Clave del Sitio (Site Key) de Google reCAPTCHA',
    'google_recaptcha_secret' => 'Clave Secreta (Secret Key) de Google reCAPTCHA',
    'google_recaptcha_key_placeholder' => 'Ingrese su Google reCAPTCHA Site Key',
    'google_recaptcha_secret_placeholder' => 'Ingrese su Google reCAPTCHA Secret Key',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Habilitar Autenticación de Dos Factores',
    'modal_enable_2fa_desc' => 'Recomendamos habilitar la Autenticación de Dos Factores (2FA) para mejorar la seguridad de su cuenta.',
    'enable_now_button' => 'Habilitar Ahora',
    'maybe_later_button' => 'Quizá Más Tarde',
    'close_aria_label' => 'Cerrar',

    // 2FA Verify page
    'one_time_password_heading' => 'Contraseña de Único Uso',
    'one_time_password_label' => 'Contraseña de Único Uso',
    'enter_2fa_code_placeholder' => 'Ingrese el código 2FA',
    'disable_2fa_for' => 'Deshabilitar 2FA por :duration :unit',
    'verify_button' => 'Verificar',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Autenticación de Dos Factores (2FA)',
    'google_auth_app_desc' => 'Aplicación Google Authenticator',
    'configured_status' => 'Configurado',
    'needs_configuration_status' => 'Necesita Configuración',
    'two_factor_scan_or_enter_msg' => 'Por favor, escanee el código QR con la aplicación Google Authenticator o ingrese la clave manualmente, luego introduzca el código generado.',
    'your_secret_key_msg' => 'Su clave secreta (para introducir manualmente si es necesario):',

    // 2FA field labels
    'one_time_password_label' => 'Contraseña de Único Uso',
    'enter_2fa_code_placeholder' => 'Ingrese el código 2FA',
    '2fa_will_be_forced_after_date' => '2FA será obligatorio después de :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Verificar',

    'confirm_access_recovery_codes' => 'Confirmar Acceso',
    're_authenticate_message' => 'Debe reautenticarse para acceder a la Configuración o los Códigos de Recuperación de 2FA.',
    'choose_method' => 'Elija un método:',
    'one_time_password' => 'Contraseña de Único Uso (OTP)',
    'password' => 'Contraseña',
    'enter_code_or_password' => 'Ingrese el código o la contraseña:',
    'confirm' => 'Confirmar',

    '2fa_recovery_codes' => 'Códigos de Recuperación 2FA',
    'recovery_codes_description' => 'Estos códigos le permiten iniciar sesión si pierde el acceso a su aplicación de autenticación. Cada código solo puede usarse una vez.',
    'regenerate_codes' => 'Regenerar Códigos',
    'copy' => 'Copiar',
    'copy_all' => 'Copiar Todo',
    'no_recovery_codes_available' => 'No hay códigos de recuperación disponibles. Puede generar nuevos códigos a continuación.',
    'copied' => '¡Código copiado al portapapeles!',
    'all_codes_copied' => '¡Todos los códigos de recuperación fueron copiados al portapapeles!',
    'supported_app' => 'Aplicaciones Soportadas',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    // Social logins:
    'social_login_settings' => 'Configuración de Inicio de Sesión Social',
    'social_login_settings_help' => 'Ingrese sus credenciales de inicio de sesión social.',
    'client_id' => 'ID de Cliente (Client ID)',
    'client_secret' => 'Secreto de Cliente (Client Secret)',
    'redirect_url' => 'URL de Redirección (Redirect URL)',
    'enter_client_id' => 'Ingrese el Client ID para :provider',
    'enter_client_secret' => 'Ingrese el Client Secret para :provider',
    'enter_redirect_url' => 'Ingrese el Redirect URL para :provider',
    'enable_social_login' => 'Habilitar Inicio de Sesión Social',
    'tab_social' => 'Inicios de Sesión Social',
    'or_login_with' => 'O iniciar sesión con',
    'force_otp_after_social_login' => 'Forzar OTP después del Inicio de Sesión Social',
    'force_otp_after_social_login_tooltip' => 'Si está habilitado, los usuarios que inicien sesión mediante redes sociales deberán verificar un código OTP.',

    //Lock Users:
    'locked_until' => 'Bloqueado hasta',
    'locked_users' => 'Usuarios Bloqueados',
    'view_locked_users' => 'Ver Usuarios Bloqueados',
    'tab_login_security' => 'Seguridad de Inicio de Sesión',
    'unlock' => 'Desbloquear',
    'enable_user_lock_label' => 'Habilitar Bloqueo de Usuario',
    'enable_user_lock_tooltip' => 'Habilitar/Deshabilitar el bloqueo del usuario después de varios intentos de inicio de sesión fallidos.',
    'max_login_attempts_label' => 'Máximo de Intentos de Inicio de Sesión',
    'max_login_attempts_tooltip' => 'Número de intentos permitidos antes de bloquear al usuario.',
    'lock_duration_label' => 'Duración del Bloqueo',
    'lock_duration_tooltip' => 'La cantidad de tiempo (en números) que el usuario permanecerá bloqueado.',
    'lock_duration_unit_label' => 'Unidad de Duración del Bloqueo',
    'lock_duration_unit_tooltip' => 'Elija la unidad de tiempo para la duración del bloqueo: minutos, horas, días, etc.',
    'account_locked_for_time_unit' => 'Su cuenta está bloqueada por :time :unit.',
    'user_unlocked_message' => '¡Usuario desbloqueado con éxito!',

    //Verify email:
    'verify_email_address_title' => 'Verifique su Dirección de Correo',
    'fresh_verification_sent' => 'Se ha enviado un nuevo enlace de verificación a su correo electrónico.',
    'verify_email_before_proceeding' => 'Antes de continuar, por favor revise su correo electrónico para encontrar el enlace de verificación.',
    'did_not_receive_email' => 'Si no ha recibido el correo electrónico',
    'click_here_request_another' => 'haga clic aquí para solicitar otro',
    'logout' => 'Cerrar sesión',
    'force_email_verify' => 'Forzar Verificación de Correo',
    'force_email_verify_tooltip' => 'Si está habilitado, los usuarios deben verificar su dirección de correo antes de acceder al sistema.',
    // Reset Mapping
    'reset_purchase_sell_mapping'     => 'Restablecer asignación de compra-venta',
    'select_business'                 => 'Seleccionar negocio:',
    'all_businesses'                  => 'Todos los negocios',
    'chunk_size'                      => 'Tamaño de lote:',
    'reset_mapping'                   => 'Restablecer asignación',
    'purchase_sell_mismatch_tooltip'  => 'Seleccione las asignaciones de negocio que desea restablecer. Si tiene una base de datos grande, recomendamos elegir negocios individuales para restablecer la asignación.',
    'chunk_size_tooltip'              => 'La asignación se restablecerá en lotes más pequeños. Para conjuntos de datos grandes, elija un tamaño de lote apropiado. Se recomienda activar el modo de mantenimiento.',

    // Maintenance Mode
    'tab_maintenance_mode'            => 'Modo de mantenimiento',
    'maintenance_mode'                => 'Modo de mantenimiento',
    'maintenance_mode_tooltip'        => 'Poner la aplicación en mantenimiento (los visitantes verán la pantalla de mantenimiento).',
    'enable_countdown'                => 'Habilitar cuenta regresiva',
    'enable_timer_tooltip'            => 'Mostrar una cuenta regresiva en vivo hasta que termine el mantenimiento.',
    'maintenance_duration'            => 'Duración',
    'maintenance_unit'                => 'Unidad de duración',
    'minutes'                         => 'Minutos',
    'hours'                           => 'Horas',
    'days'                            => 'Días',

    // Maintenance page
    'under_maintenance'               => 'En mantenimiento',
    'maintenance_heading'             => 'Estamos realizando tareas de mantenimiento.',
    'maintenance_subheading'          => '¡Gracias por su paciencia!',
    'maintenance_back_in'             => 'Volveremos en :time',
    'maintenance_back_no_timer'       => 'Volveremos tan pronto como finalicemos el mantenimiento.',

    // Mapping reset page
    'mapping_reset_progress'          => 'Progreso de restablecimiento de asignación',
    'mapping_reset_in_progress'       => 'Se está restableciendo la asignación',
    'batch_status'                    => 'Estado del lote',
    'refresh_status'                  => 'Actualizar estado',

    // Mapping reset result & status
    'mapping_reset_result'            => 'Resultado del restablecimiento de asignación',
    'chunk_processing_status'         => 'Estado de procesamiento de lotes',

    // Table headers
    'business'                        => 'Negocio',
    'chunk_status'                    => 'Estado del lote',
    'total_chunks'                    => 'Lotes totales',
    'status'                          => 'Estado',

    // Button
    'go_back'                         => 'Volver',

    // Mapping Jobs
    'processed_jobs'                  => 'Tareas de asignación',
    'processed_jobs_subtitle'         => 'Todos los lotes de asignación enviados',
    'uuid'                            => 'UUID del lote',
    'job_name'                        => 'Nombre de la tarea',
    'completed_chunks'                => 'Lotes completados',
    'started_at'                      => 'Iniciado el',
    'finished_at'                     => 'Última actualización',
    'view_rebuild_jobs'               => 'Ver tareas de reconstrucción de inventario',

    // Detailed instruction
    'reset_mapping_instruction'       =>
        "Se recomienda configurar el controlador de colas en un backend real:\n" .
        "→ En su archivo .env, establezca `QUEUE_CONNECTION=database`.\n\n" .
        "También active el modo de mantenimiento (Configuración de la aplicación → Modo de mantenimiento) mientras se ejecuta el restablecimiento de asignación para evitar datos duplicados o perdidos.\n\n" .
        "Si tiene una base de datos grande, el restablecimiento tardará más: considere hacerlo por cada negocio.\n\n" .
        "Antes de comenzar:\n" .
        "• Haga una copia de seguridad completa de la base de datos.\n" .
        "• Monitoree el proceso a través de los registros para detectar errores.",

    'recovery_codes_generated_successfully' => 'Códigos de recuperación generados con éxito',

    // Disposable-email sync
    'sync_disposable_list'            => 'Sincronizar lista de correos desechables',
    'sync_disposable_success'         => 'Lista de correos desechables actualizada.',
    'sync_disposable_failed'          => 'Error al sincronizar la lista de correos desechables.',

    // Temporary-email protection
    'temp_email_protection'           => 'Prevenir direcciones de correo desechables',
    'temp_email_protection_tooltip'   => 'Bloquear dominios de correo temporales/desechables (p. ej., Mailinator, 10MinuteMail).',
    'disposable_not_allowed'          => 'No se permiten direcciones de correo desechables.',
];
