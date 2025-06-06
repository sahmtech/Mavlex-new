<?php

return [

    'app_settings' => 'إعدادات التطبيق',
    'manage_app_settings' => 'إدارة إعدادات التطبيق',
    'tab_2fa' => 'المصادقة الثنائية (2FA)',
    'tab_theme' => 'المظهر',
    'tab_login_page' => 'صفحة تسجيل الدخول',
    'tab_sidebar' => 'الشريط الجانبي',
    'tab_language' => 'اللغة',
    'tab_repair_status' => 'حالة الإصلاح',
    'tab_logo' => 'الشعار',
    // Buttons
    'update_settings' => 'تحديث الإعدادات',

    'enable_custom_bg_image_for_login' => 'تمكين خلفية مخصصة لتسجيل الدخول',
    'enable_custom_bg_image_for_login_tooltip' => 'تعيين صورة خلفية مخصصة لصفحة تسجيل الدخول.',

    'enable_custom_sidebar_logo' => 'السماح بشعار مخصص في الشريط الجانبي',
    'enable_custom_sidebar_logo_tooltip' => 'السماح للمؤسسات باستخدام شعار مخصص في الشريط الجانبي.',

    // language.blade.php
    'header_language_change' => 'تغيير اللغة من الرأس',
    'header_language_change_tooltip' => 'السماح للمستخدمين بتبديل اللغة من الرأس الرئيسي.',
    'header_languages_label' => 'اللغات في الرأس',
    'header_languages_label_tooltip' => 'اختر اللغات التي سيتم عرضها في الرأس.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'عرض حالة الإصلاح في شاشة تسجيل الدخول',

    // 2fa.blade.php
    'enable_2fa' => 'تمكين المصادقة الثنائية (2FA)',
    'enable_2fa_tooltip' => 'تفعيل المصادقة الثنائية للتطبيق.',

    'force_2fa' => 'فرض المصادقة الثنائية',
    'force_2fa_tooltip' => 'يجب على المستخدمين إعداد المصادقة الثنائية قبل استخدام التطبيق.',

    'recommend_2fa' => 'التوصية بالمصادقة الثنائية',
    'recommend_2fa_tooltip' => 'سيظهر إشعار مرة واحدة عند تسجيل الدخول لتشجيع المستخدمين على تفعيل المصادقة الثنائية.',

    'allow_disable_2fa' => 'السماح بالتعطيل المؤقت للمصادقة الثنائية',
    'allow_disable_2fa_tooltip' => 'السماح للمستخدمين بتعطيل المصادقة الثنائية مؤقتًا حتى وقت محدد.',

    'disable_2fa_duration_label' => 'مدة تعطيل المصادقة الثنائية',
    'disable_2fa_duration_label_tooltip' => 'حدد الفترة الزمنية التي يمكن فيها تعطيل المصادقة الثنائية.',

    'disable_2fa_unit_label' => 'وحدة مدة تعطيل المصادقة الثنائية',

    'force_2fa_after_date_label' => 'فرض المصادقة الثنائية بعد تاريخ محدد',
    'force_2fa_after_date_label_tooltip' => 'بعد هذا التاريخ، يجب على جميع المستخدمين تمكين المصادقة الثنائية. سيظهر هذا التاريخ أيضًا في إشعار التوصية بالمصادقة الثنائية.',

    'primary_color_label' => 'اللون الأساسي',
    'primary_color_label_tooltip' => 'اختر اللون الأساسي الافتراضي للتطبيق. سيتم استخدامه للمؤسسات التي لا تختار ألوانًا خاصة بها.',
    'secondary_color_label' => 'اللون الثانوي',
    'secondary_color_label_tooltip' => 'اختر اللون الثانوي الافتراضي للتطبيق. سيتم استخدامه للمؤسسات التي لا تختار ألوانًا خاصة بها.',

    'allow_theme_change' => 'السماح بتغيير المظهر',
    'allow_theme_change_tooltip' => 'تمكين المؤسسات من تخصيص ألوان المظهر. عند التمكين، ستستخدم المؤسسات التي لا تملك ألوانًا مخصصة الألوان الافتراضية المحددة هنا بواسطة المشرف العام.',

    'login_bg_image_label' => 'صورة خلفية تسجيل الدخول',
    'login_bg_image_label_tooltip' => 'سيؤدي تحميل صورة جديدة إلى استبدال الخلفية الحالية.',

    'logo_dark_tooltip'  => 'تغيير الشعار الداكن الافتراضي للتطبيق (الوضع الفاتح).',
    'logo_light_tooltip' => 'تغيير الشعار الفاتح الافتراضي للتطبيق (الوضع الداكن).',
    'favicon_tooltip' => 'الأبعاد الموصى بها: 32×32 بكسل. يظهر هذا الرمز في علامات التبويب والإشارات المرجعية في المتصفح.',
    'upload_favicon' => 'تحميل أيقونة Favicon',

    // Fonts
    'tab_fonts' => 'الخطوط',
    'english_font' => 'الخط الإنجليزي',
    'arabic_font' => 'الخط العربي',
    'custom_font_placeholder' => 'أدخل اسم خط مخصص...',
    'select_font' => 'اختر خطًا...',
    'or' => 'أو',
    'font_help_text' => 'اختر من القائمة أو أدخل خطك المخصص.',
    'english_font_tooltip' => 'أدخل اسم خط مخصص أو اختر من القائمة. ابحث عن أسماء الخطوط في :url',
    'arabic_font_tooltip' => 'أدخل اسم خط مخصص أو اختر من القائمة. ابحث عن أسماء الخطوط في :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha' => 'تمكين Google reCAPTCHA',
    'enable_recaptcha_tooltip' => 'قم بالتبديل لتمكين حماية reCAPTCHA. احصل على مفاتيحك من :url',
    'enable_recaptcha_text' => 'تفعيل reCAPTCHA',
    'google_recaptcha_key' => 'مفتاح موقع Google reCAPTCHA',
    'google_recaptcha_secret' => 'المفتاح السري لـ Google reCAPTCHA',
    'google_recaptcha_key_placeholder' => 'أدخل مفتاح موقع Google reCAPTCHA',
    'google_recaptcha_secret_placeholder' => 'أدخل المفتاح السري لـ Google reCAPTCHA',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'تفعيل المصادقة الثنائية',
    'modal_enable_2fa_desc' => 'نوصي بتفعيل المصادقة الثنائية (2FA) لتعزيز أمان حسابك.',
    'enable_now_button' => 'تفعيل الآن',
    'maybe_later_button' => 'ربما لاحقًا',
    'close_aria_label' => 'إغلاق',

    // 2FA Verify page
    'one_time_password_heading' => 'كلمة المرور لمرة واحدة',
    'one_time_password_label' => 'كلمة المرور لمرة واحدة',
    'enter_2fa_code_placeholder' => 'أدخل رمز المصادقة الثنائية',
    'disable_2fa_for' => 'تعطيل المصادقة الثنائية لمدة :duration :unit',
    'verify_button' => 'تحقق',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'المصادقة الثنائية',
    'google_auth_app_desc' => 'تطبيق Google Authenticator',
    'configured_status' => 'مُعد',
    'needs_configuration_status' => 'غير مُعد',
    'two_factor_scan_or_enter_msg' => 'يرجى مسح رمز الاستجابة السريعة أدناه باستخدام Google Authenticator أو إدخال المفتاح يدويًا، ثم إدخال الرمز المولد.',
    'your_secret_key_msg' => 'مفتاحك السري (لإدخاله يدويًا عند الحاجة):',

    // 2FA field labels
    'one_time_password_label' => 'كلمة المرور لمرة واحدة',
    'enter_2fa_code_placeholder' => 'أدخل رمز المصادقة الثنائية',
    '2fa_will_be_forced_after_date' => 'سيتم فرض المصادقة الثنائية بعد :date.',

    // Buttons
    '2fa' => 'المصادقة الثنائية (2FA)',
    'verify_button' => 'تحقق',

    'confirm_access_recovery_codes' => 'تأكيد الوصول',
    're_authenticate_message' => 'يجب إعادة المصادقة للوصول إلى الإعدادات أو رموز الاسترداد للمصادقة الثنائية.',
    'choose_method' => 'اختر الطريقة:',
    'one_time_password' => 'كلمة مرور لمرة واحدة (OTP)',
    'password' => 'كلمة المرور',
    'enter_code_or_password' => 'أدخل الرمز / كلمة المرور:',
    'confirm' => 'تأكيد',

    '2fa_recovery_codes' => 'رموز الاسترداد للمصادقة الثنائية',
    'recovery_codes_description' => 'تتيح لك هذه الرموز تسجيل الدخول إذا فقدت الوصول إلى جهاز المصادقة. يمكن استخدام كل رمز مرة واحدة فقط.',
    'regenerate_codes' => 'إعادة إنشاء الرموز',
    'copy' => 'نسخ',
    'copy_all' => 'نسخ الكل',
    'no_recovery_codes_available' => 'لا توجد رموز استرداد متاحة. يمكنك إنشاء رموز جديدة أدناه.',
    'copied' => 'تم نسخ الرمز إلى الحافظة!',
    'all_codes_copied' => 'تم نسخ جميع رموز الاسترداد إلى الحافظة!',
    'supported_app' => 'التطبيق المدعوم',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    // Social logins:
    'social_login_settings' => 'إعدادات تسجيل الدخول عبر الشبكات الاجتماعية',
    'social_login_settings_help' => 'أدخل بيانات اعتماد تسجيل الدخول الاجتماعي الخاصة بك.',
    'client_id' => 'معرف العميل (Client ID)',
    'client_secret' => 'سر العميل (Client Secret)',
    'redirect_url' => 'عنوان إعادة التوجيه (Redirect URL)',
    'enter_client_id' => 'أدخل معرف العميل لـ :provider',
    'enter_client_secret' => 'أدخل سر العميل لـ :provider',
    'enter_redirect_url' => 'أدخل عنوان إعادة التوجيه لـ :provider',
    'enable_social_login' => 'تمكين تسجيل الدخول عبر الشبكات الاجتماعية',
    'tab_social' => 'تسجيل الدخول الاجتماعي',
    'or_login_with' => 'أو سجّل الدخول باستخدام',
    'force_otp_after_social_login' => 'فرض رمز مرة واحدة بعد تسجيل الدخول الاجتماعي',
    'force_otp_after_social_login_tooltip' => 'إذا تم التفعيل، سيُطلب من المستخدمين الذين يسجلون الدخول عبر الشبكات الاجتماعية إدخال رمز مرة واحدة (OTP).',

    //Lock Users:
    'locked_until' => 'مغلق حتى',
    'locked_users' => 'المستخدمون المقفلون',
    'view_locked_users' => 'عرض المستخدمين المقفلين',
    'tab_login_security' => 'أمان تسجيل الدخول',
    'unlock' => 'إلغاء القفل',
    'enable_user_lock_label' => 'تمكين قفل المستخدم',
    'enable_user_lock_tooltip' => 'تمكين/تعطيل قفل المستخدم بعد محاولات تسجيل دخول فاشلة.',
    'max_login_attempts_label' => 'الحد الأقصى لمحاولات تسجيل الدخول',
    'max_login_attempts_tooltip' => 'عدد المحاولات المسموح بها قبل قفل المستخدم.',
    'lock_duration_label' => 'مدة القفل',
    'lock_duration_tooltip' => 'المدة الزمنية التي سيتم قفل المستخدم خلالها (أرقام).',
    'lock_duration_unit_label' => 'وحدة مدة القفل',
    'lock_duration_unit_tooltip' => 'اختر الوحدة الزمنية لمدة القفل: دقائق، ساعات، أيام... إلخ.',
    'account_locked_for_time_unit' => 'تم قفل حسابك لمدة :time :unit.',
    'user_unlocked_message' => 'تم إلغاء قفل المستخدم بنجاح!',

    //Verify email:
    'verify_email_address_title' => 'تحقق من بريدك الإلكتروني',
    'fresh_verification_sent' => 'تم إرسال رابط تحقق جديد إلى بريدك الإلكتروني.',
    'verify_email_before_proceeding' => 'قبل المتابعة، يُرجى التحقق من بريدك الإلكتروني للعثور على رابط التحقق.',
    'did_not_receive_email' => 'إذا لم يصلك البريد الإلكتروني',
    'click_here_request_another' => 'انقر هنا لطلب رابط جديد',
    'logout' => 'تسجيل الخروج',
    'force_email_verify' => 'فرض التحقق من البريد الإلكتروني',
    'force_email_verify_tooltip' => 'إذا تم التمكين، يجب على المستخدمين التحقق من بريدهم الإلكتروني قبل الوصول إلى النظام.',



        // Reset Mapping
        'reset_purchase_sell_mapping'   => 'إعادة تعيين تطابق الشراء-البيع',
        'select_business'               => 'اختر النشاط التجاري:',
        'all_businesses'                => 'جميع الأنشطة التجارية',
        'chunk_size'                    => 'حجم الدُفعة:',
        'reset_mapping'                 => 'إعادة تعيين التطابق',
        'purchase_sell_mismatch_tooltip' => 'اختر التطابقات التجارية التي تحتاج لإعادة التعيين. إذا كان لديك قاعدة بيانات كبيرة، نوصي بإعادة التعيين لكل نشاط تجاري على حدة.',
        'chunk_size_tooltip'             => 'سيتم إعادة التعيين على دفعات أصغر. لبيانات كبيرة، اختر حجم دُفعة مناسب. يُفضل تفعيل وضع الصيانة.',
    
        // Maintenance Mode
        'tab_maintenance_mode'       => 'وضع الصيانة',
        'maintenance_mode'           => 'وضع الصيانة',
        'maintenance_mode_tooltip'   => 'وضع التطبيق في الصيانة (سيشاهد الزوار شاشة الصيانة).',
        'enable_countdown'           => 'تفعيل عدّاد تنازلي',
        'enable_timer_tooltip'       => 'عرض عد تنازلي مباشر حتى انتهاء الصيانة.',
        'maintenance_duration'       => 'المدة',
        'maintenance_unit'           => 'وحدة المدة',
        'minutes'                    => 'دقائق',
        'hours'                      => 'ساعات',
        'days'                       => 'أيام',
    
        // Maintenance page
        'under_maintenance'          => 'قيد الصيانة',
        'maintenance_heading'        => 'نقوم ببعض أعمال الصيانة.',
        'maintenance_subheading'     => 'شكرًا لصبرك!',
        'maintenance_back_in'        => 'سنعود بعد :time',
        'maintenance_back_no_timer'  => 'سنعود فور انتهائنا من الصيانة.',
    
        // Mapping reset page
        'mapping_reset_progress'     => 'تقدم إعادة التطابق',
        'mapping_reset_in_progress'  => 'جاري إعادة التطابق',
        'batch_status'               => 'حالة الدُفعة',
        'refresh_status'             => 'تحديث الحالة',
    
        // Mapping reset result & status
        'mapping_reset_result'       => 'نتيجة إعادة التطابق',
        'chunk_processing_status'    => 'حالة معالجة الدُفعات',
    
        // Table headers
        'business'                   => 'النشاط التجاري',
        'chunk_status'               => 'حالة الدُفعة',
        'total_chunks'               => 'إجمالي الدُفعات',
        'status'                     => 'الحالة',
    
        // Buttons
        'go_back'                    => 'رجوع',
    
        // Jobs
        'processed_jobs'             => 'مهام التطابق',
        'processed_jobs_subtitle'    => 'جميع دفعات إعادة التطابق المُرسلة',
        'uuid'                       => 'معرّف الدُفعة (UUID)',
        'job_name'                   => 'اسم المهمة',
        'completed_chunks'           => 'الدُفعات المنجزة',
        'started_at'                 => 'بدأ في',
        'finished_at'                => 'آخر تحديث',
        'view_rebuild_jobs'          => 'عرض مهام إعادة بناء المخزون',
    
        // Detailed instruction
        'reset_mapping_instruction'  => "يوصى بتعيين موصل قائمة الانتظار إلى مصدر حقيقي:\n".
                                        "→ في ملف .env، ضع `QUEUE_CONNECTION=database`.\n\n".
                                        "كما يُفضل تفعيل وضع الصيانة (إعدادات التطبيق → وضع الصيانة) أثناء تشغيل إعادة التطابق لتجنب البيانات المكررة أو المفقودة.\n\n".
                                        "إذا كانت قاعدة بياناتك كبيرة، سيستغرق إعادة التعيين وقتًا أطول—فكر في إعادة التعيين لكل نشاط تجاري على حدة.\n\n".
                                        "قبل البدء:\n".
                                        "• قم بعمل نسخة احتياطية كاملة لقاعدة البيانات.\n".
                                        "• راقب العملية عبر السجلات لاكتشاف أي أخطاء.",
    
        'recovery_codes_generated_successfully' => 'تم إنشاء رموز الاسترداد بنجاح',
    
        // Disposable‐email sync
        'sync_disposable_list'      => 'مزامنة قائمة البريد المؤقت',
        'sync_disposable_success'   => 'تم تحديث قائمة البريد المؤقت بنجاح.',
        'sync_disposable_failed'    => 'فشل في مزامنة قائمة البريد المؤقت.',
    
        // Temporary‐email protection
        'temp_email_protection'          => 'منع عناوين البريد المؤقتة',
        'temp_email_protection_tooltip'  => 'حظر مجالات البريد المؤقت (مثل Mailinator، 10MinuteMail).',
        'disposable_not_allowed'         => 'عناوين البريد المؤقتة غير مسموح بها.',
    ];
    
