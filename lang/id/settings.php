<?php

return [
    'app_settings' => 'Pengaturan Aplikasi',
    'manage_app_settings' => 'Kelola Pengaturan Aplikasi',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Tampilan',
    'tab_login_page' => 'Halaman Login',
    'tab_sidebar' => 'Sidebar',
    'tab_language' => 'Bahasa',
    'tab_repair_status' => 'Status Perbaikan',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Perbarui Pengaturan',

    'enable_custom_bg_image_for_login' => 'Aktifkan Latar Belakang Kustom untuk Login',
    'enable_custom_bg_image_for_login_tooltip' => 'Tetapkan gambar latar belakang kustom untuk halaman login.',

    'enable_custom_sidebar_logo' => 'Izinkan Logo Kustom di Sidebar',
    'enable_custom_sidebar_logo_tooltip' => 'Memungkinkan bisnis menggunakan logo kustom di sidebar.',

    // language.blade.php
    'header_language_change' => 'Ubah Bahasa di Header',
    'header_language_change_tooltip' => 'Izinkan pengguna mengganti bahasa dari header utama.',
    'header_languages_label' => 'Bahasa di Header',
    'header_languages_label_tooltip' => 'Pilih bahasa yang akan ditampilkan di header.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Tampilkan Status Perbaikan di Layar Login',

    // 2fa.blade.php
    'enable_2fa' => 'Aktifkan 2FA',
    'enable_2fa_tooltip' => 'Aktifkan Autentikasi Dua Faktor (2FA) untuk aplikasi.',

    'force_2fa' => 'Wajibkan 2FA',
    'force_2fa_tooltip' => 'Pengguna harus menyiapkan 2FA sebelum bisa menggunakan aplikasi.',

    'recommend_2fa' => 'Sarankan 2FA',
    'recommend_2fa_tooltip' => 'Menampilkan pop-up satu kali saat login untuk mendorong pengguna mengaktifkan 2FA.',

    'allow_disable_2fa' => 'Izinkan Menonaktifkan 2FA Sementara',
    'allow_disable_2fa_tooltip' => 'Mengizinkan pengguna menonaktifkan 2FA sementara dalam jangka waktu tertentu.',

    'disable_2fa_duration_label' => 'Durasi Menonaktifkan 2FA',
    'disable_2fa_duration_label_tooltip' => 'Tentukan periode di mana 2FA dapat tetap nonaktif.',

    'disable_2fa_unit_label' => 'Satuan Durasi Nonaktif 2FA',

    'force_2fa_after_date_label' => 'Wajibkan 2FA Setelah Tanggal',
    'force_2fa_after_date_label_tooltip' => 'Setelah tanggal ini, semua pengguna harus mengaktifkan 2FA. Tanggal ini juga ditampilkan pada pop-up rekomendasi 2FA.',

    'primary_color_label' => 'Warna Utama',
    'primary_color_label_tooltip' => 'Pilih warna utama default aplikasi. Digunakan oleh bisnis yang tidak mengatur warna sendiri.',
    'secondary_color_label' => 'Warna Sekunder',
    'secondary_color_label_tooltip' => 'Pilih warna sekunder default aplikasi. Digunakan oleh bisnis yang tidak mengatur warna sendiri.',

    'allow_theme_change' => 'Izinkan Perubahan Tema',
    'allow_theme_change_tooltip' => 'Memungkinkan bisnis menyesuaikan warna tema mereka. Jika tidak diatur, bisnis akan menggunakan warna default yang ditentukan di sini.',

    'login_bg_image_label' => 'Gambar Latar Belakang Login',
    'login_bg_image_label_tooltip' => 'Mengunggah gambar baru akan mengganti latar belakang yang ada.',

    'logo_dark_tooltip'  => 'Ubah logo gelap default aplikasi (digunakan di mode terang).',
    'logo_light_tooltip' => 'Ubah logo terang default aplikasi (digunakan di mode gelap).',
    'favicon_tooltip' => 'Dimensi yang disarankan: 32×32 px. Ikon ini muncul di tab browser dan bookmark.',
    'upload_favicon' => 'Unggah Favicon',

    // Fonts
    'tab_fonts' => 'Font',
    'english_font' => 'Font Bahasa Inggris',
    'arabic_font' => 'Font Bahasa Arab',
    'custom_font_placeholder' => 'Masukkan nama font kustom...',
    'select_font' => 'Pilih font...',
    'or' => 'atau',
    'font_help_text' => 'Pilih dari daftar atau masukkan font kustom Anda.',
    'english_font_tooltip' => 'Masukkan nama font kustom atau pilih dari daftar. Anda dapat menemukan nama font di: :url',
    'arabic_font_tooltip' => 'Masukkan nama font kustom atau pilih dari daftar. Anda dapat menemukan nama font di: :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha' => 'Aktifkan Google reCAPTCHA',
    'enable_recaptcha_tooltip' => 'Alihkan untuk mengaktifkan perlindungan reCAPTCHA. Dapatkan Site Key dan Secret dari: :url',
    'enable_recaptcha_text' => 'Aktifkan reCAPTCHA',
    'google_recaptcha_key' => 'Google reCAPTCHA Site Key',
    'google_recaptcha_secret' => 'Google reCAPTCHA Secret Key',
    'google_recaptcha_key_placeholder' => 'Masukkan Site Key Google reCAPTCHA Anda',
    'google_recaptcha_secret_placeholder' => 'Masukkan Secret Key Google reCAPTCHA Anda',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Aktifkan Autentikasi Dua Faktor',
    'modal_enable_2fa_desc' => 'Kami menyarankan Anda mengaktifkan 2FA untuk meningkatkan keamanan akun Anda.',
    'enable_now_button' => 'Aktifkan Sekarang',
    'maybe_later_button' => 'Mungkin Nanti',
    'close_aria_label' => 'Tutup',

    // 2FA Verify page
    'one_time_password_heading' => 'One-Time Password',
    'one_time_password_label' => 'One-Time Password',
    'enter_2fa_code_placeholder' => 'Masukkan kode 2FA',
    'disable_2fa_for' => 'Nonaktifkan 2FA selama :duration :unit',
    'verify_button' => 'Verifikasi',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Autentikasi Dua Faktor (2FA)',
    'google_auth_app_desc' => 'Aplikasi Google Authenticator',
    'configured_status' => 'Sudah Terkonfigurasi',
    'needs_configuration_status' => 'Belum Terkonfigurasi',
    'two_factor_scan_or_enter_msg' => 'Silakan pindai kode QR di bawah dengan Google Authenticator atau masukkan kuncinya secara manual, lalu masukkan kode yang dihasilkan.',
    'your_secret_key_msg' => 'Kunci rahasia Anda (untuk dimasukkan secara manual jika diperlukan):',

    // 2FA field labels
    'one_time_password_label' => 'One-Time Password',
    'enter_2fa_code_placeholder' => 'Masukkan kode 2FA',
    '2fa_will_be_forced_after_date' => '2FA akan diwajibkan setelah :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Verifikasi',

    'confirm_access_recovery_codes' => 'Konfirmasi Akses',
    're_authenticate_message' => 'Anda harus melakukan autentikasi ulang untuk mengakses Pengaturan atau Kode Pemulihan 2FA.',
    'choose_method' => 'Pilih Metode:',
    'one_time_password' => 'One-Time Password (OTP)',
    'password' => 'Kata Sandi',
    'enter_code_or_password' => 'Masukkan kode / kata sandi:',
    'confirm' => 'Konfirmasi',

    '2fa_recovery_codes' => 'Kode Pemulihan 2FA',
    'recovery_codes_description' => 'Kode ini memungkinkan Anda masuk jika Anda kehilangan akses ke aplikasi autentikasi. Setiap kode hanya dapat digunakan satu kali.',
    'regenerate_codes' => 'Regenerasi Kode',
    'copy' => 'Salin',
    'copy_all' => 'Salin Semua',
    'no_recovery_codes_available' => 'Tidak ada kode pemulihan tersedia. Anda dapat membuat kode baru di bawah ini.',
    'copied' => 'Kode disalin ke clipboard!',
    'all_codes_copied' => 'Semua kode pemulihan telah disalin ke clipboard!',
    'supported_app' => 'Aplikasi yang Didukung',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    // Social logins:
    'social_login_settings' => 'Pengaturan Login Sosial',
    'social_login_settings_help' => 'Masukkan kredensial login sosial Anda.',
    'client_id' => 'Client ID',
    'client_secret' => 'Client Secret',
    'redirect_url' => 'URL Redirect',
    'enter_client_id' => 'Masukkan Client ID untuk :provider',
    'enter_client_secret' => 'Masukkan Client Secret untuk :provider',
    'enter_redirect_url' => 'Masukkan Redirect URL untuk :provider',
    'enable_social_login' => 'Aktifkan Login Sosial',
    'tab_social' => 'Login Sosial',
    'or_login_with' => 'Atau login dengan',
    'force_otp_after_social_login' => 'Wajibkan OTP Setelah Login Sosial',
    'force_otp_after_social_login_tooltip' => 'Jika diaktifkan, pengguna yang login melalui sosial media akan diminta memasukkan kode OTP.',

    //Lock Users:
    'locked_until' => 'Terkunci Hingga',
    'locked_users' => 'Pengguna Terkunci',
    'view_locked_users' => 'Lihat Pengguna Terkunci',
    'tab_login_security' => 'Keamanan Login',
    'unlock' => 'Buka Kunci',
    'enable_user_lock_label' => 'Aktifkan Kunci Pengguna',
    'enable_user_lock_tooltip' => 'Aktifkan/Nonaktifkan penguncian pengguna setelah beberapa upaya login gagal.',
    'max_login_attempts_label' => 'Upaya Login Maksimum',
    'max_login_attempts_tooltip' => 'Jumlah upaya login yang diizinkan sebelum pengguna terkunci.',
    'lock_duration_label' => 'Durasi Penguncian',
    'lock_duration_tooltip' => 'Jumlah waktu (dalam angka) selama pengguna akan tetap terkunci.',
    'lock_duration_unit_label' => 'Satuan Durasi Penguncian',
    'lock_duration_unit_tooltip' => 'Pilih satuan waktu untuk durasi penguncian: menit, jam, hari, dll.',
    'account_locked_for_time_unit' => 'Akun Anda terkunci selama :time :unit.',
    'user_unlocked_message' => 'Pengguna berhasil dibuka kuncinya!',

    //Verify email:
    'verify_email_address_title' => 'Verifikasi Alamat Email Anda',
    'fresh_verification_sent' => 'Tautan verifikasi baru telah dikirim ke email Anda.',
    'verify_email_before_proceeding' => 'Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.',
    'did_not_receive_email' => 'Jika Anda tidak menerima email',
    'click_here_request_another' => 'klik di sini untuk meminta yang lain',
    'logout' => 'Keluar',
    'force_email_verify' => 'Wajibkan Verifikasi Email',
    'force_email_verify_tooltip' => 'Jika diaktifkan, pengguna harus memverifikasi email mereka sebelum mengakses sistem.',

     // Reset Mapping
     'reset_purchase_sell_mapping'     => 'Reset pemetaan pembelian-penjualan',
     'select_business'                 => 'Pilih Bisnis:',
     'all_businesses'                  => 'Semua Bisnis',
     'chunk_size'                      => 'Ukuran Chunk:',
     'reset_mapping'                   => 'Reset Pemetaan',
     'purchase_sell_mismatch_tooltip'  => 'Pilih pemetaan bisnis yang perlu di-reset. Jika Anda memiliki basis data besar, disarankan untuk mereset per bisnis.',
     'chunk_size_tooltip'              => 'Pemetaan akan di-reset dalam chunk yang lebih kecil. Untuk dataset besar, pilih ukuran chunk yang sesuai. Disarankan untuk mengaktifkan mode pemeliharaan.',
 
     // Maintenance Mode
     'tab_maintenance_mode'            => 'Mode Pemeliharaan',
     'maintenance_mode'                => 'Mode Pemeliharaan',
     'maintenance_mode_tooltip'        => 'Masukkan aplikasi ke mode pemeliharaan (pengunjung akan melihat layar pemeliharaan).',
     'enable_countdown'                => 'Aktifkan penghitung mundur',
     'enable_timer_tooltip'            => 'Tampilkan penghitung mundur langsung hingga pemeliharaan selesai.',
     'maintenance_duration'            => 'Durasi',
     'maintenance_unit'                => 'Unit Durasi',
     'minutes'                         => 'Menit',
     'hours'                           => 'Jam',
     'days'                            => 'Hari',
 
     // Maintenance page
     'under_maintenance'               => 'Sedang dalam pemeliharaan',
     'maintenance_heading'             => 'Kami sedang melakukan pemeliharaan.',
     'maintenance_subheading'          => 'Terima kasih atas kesabaran Anda!',
     'maintenance_back_in'             => 'Kami akan kembali dalam :time',
     'maintenance_back_no_timer'       => 'Kami akan kembali segera setelah pemeliharaan selesai.',
 
     // Mapping reset page
     'mapping_reset_progress'          => 'Progres Reset Pemetaan',
     'mapping_reset_in_progress'       => 'Reset pemetaan sedang berlangsung',
     'batch_status'                    => 'Status Batch',
     'refresh_status'                  => 'Segarkan Status',
 
     // Mapping reset result & status
     'mapping_reset_result'            => 'Hasil Reset Pemetaan',
     'chunk_processing_status'         => 'Status Pemrosesan Chunk',
 
     // Table headers
     'business'                        => 'Bisnis',
     'chunk_status'                    => 'Status Chunk',
     'total_chunks'                    => 'Total Chunk',
     'status'                          => 'Status',
 
     // Button
     'go_back'                         => 'Kembali',
 
     // Mapping Jobs
     'processed_jobs'                  => 'Tugas Pemetaan',
     'processed_jobs_subtitle'         => 'Semua batch pemetaan yang dikirim',
     'uuid'                            => 'UUID Batch',
     'job_name'                        => 'Nama Tugas',
     'completed_chunks'                => 'Chunk Selesai',
     'started_at'                      => 'Dimulai Pada',
     'finished_at'                     => 'Terakhir Diperbarui',
     'view_rebuild_jobs'               => 'Lihat Tugas Rebuild Stok',
 
     // Detailed instruction
     'reset_mapping_instruction'       => 
         "Disarankan untuk mengatur driver antrean Anda ke backend yang sebenarnya:\n" .
         "→ Di file .env Anda, atur `QUEUE_CONNECTION=database`.\n\n" .
         "Aktifkan juga Mode Pemeliharaan (Pengaturan Aplikasi → Mode Pemeliharaan) saat pemetaan berjalan untuk menghindari data duplikat atau terlewat.\n\n" .
         "Jika Anda memiliki basis data besar, reset akan memakan waktu lebih lama—pertimbangkan untuk mereset per bisnis.\n\n" .
         "Sebelum memulai:\n" .
         "• Buat cadangan lengkap basis data.\n" .
         "• Pantau proses melalui log untuk menangkap kesalahan.",
 
     'recovery_codes_generated_successfully' => 'Kode Pemulihan Berhasil Dihasilkan',
 
     // Disposable-email sync
     'sync_disposable_list'            => 'Sinkronkan Daftar Email Sekali Pakai',
     'sync_disposable_success'         => 'Daftar email sekali pakai diperbarui.',
     'sync_disposable_failed'          => 'Gagal menyinkronkan daftar email sekali pakai.',
 
     // Temporary-email protection
     'temp_email_protection'           => 'Lindungi dari email sekali pakai',
     'temp_email_protection_tooltip'   => 'Blokir domain email sementara/sekali pakai (mis. Mailinator, 10MinuteMail).',
     'disposable_not_allowed'          => 'Alamat email sekali pakai tidak diizinkan.',
 
];
