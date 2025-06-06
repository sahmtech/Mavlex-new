<?php

return [

    'app_settings' => 'Cài đặt Ứng dụng',
    'manage_app_settings' => 'Quản lý Cài đặt Ứng dụng',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Giao Diện',
    'tab_login_page' => 'Trang Đăng Nhập',
    'tab_sidebar' => 'Thanh Bên',
    'tab_language' => 'Ngôn Ngữ',
    'tab_repair_status' => 'Trạng Thái Sửa Chữa',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Cập Nhật Cài Đặt',

    'enable_custom_bg_image_for_login' => 'Bật Nền Tùy Chỉnh cho Trang Đăng Nhập',
    'enable_custom_bg_image_for_login_tooltip' => 'Chọn hình nền tùy chỉnh cho trang đăng nhập.',

    'enable_custom_sidebar_logo' => 'Cho Phép Logo Tùy Chỉnh ở Thanh Bên',
    'enable_custom_sidebar_logo_tooltip' => 'Cho phép doanh nghiệp sử dụng logo tùy chỉnh trên thanh bên.',

    // language.blade.php
    'header_language_change' => 'Đổi Ngôn Ngữ ở Đầu Trang',
    'header_language_change_tooltip' => 'Cho phép người dùng thay đổi ngôn ngữ từ thanh đầu trang chính.',
    'header_languages_label' => 'Ngôn Ngữ ở Đầu Trang',
    'header_languages_label_tooltip' => 'Chọn các ngôn ngữ sẽ hiển thị ở đầu trang.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Hiển Thị Trạng Thái Sửa Chữa trên Màn Hình Đăng Nhập',

    // 2fa.blade.php
    'enable_2fa' => 'Bật 2FA',
    'enable_2fa_tooltip' => 'Kích hoạt Xác Thực Hai Yếu Tố (2FA) cho ứng dụng.',

    'force_2fa' => 'Bắt Buộc 2FA',
    'force_2fa_tooltip' => 'Người dùng phải thiết lập 2FA trước khi sử dụng ứng dụng.',

    'recommend_2fa' => 'Khuyến Nghị 2FA',
    'recommend_2fa_tooltip' => 'Xuất hiện một hộp thoại duy nhất khi đăng nhập để khuyến khích bật 2FA.',

    'allow_disable_2fa' => 'Cho Phép Tạm Tắt 2FA',
    'allow_disable_2fa_tooltip' => 'Cho phép người dùng tạm thời tắt 2FA đến một thời điểm nhất định.',

    'disable_2fa_duration_label' => 'Thời Lượng Tắt 2FA',
    'disable_2fa_duration_label_tooltip' => 'Xác định khoảng thời gian mà 2FA có thể tạm ngưng hoạt động.',

    'disable_2fa_unit_label' => 'Đơn Vị Thời Gian Tắt 2FA',

    'force_2fa_after_date_label' => 'Bắt Buộc 2FA Sau Ngày',
    'force_2fa_after_date_label_tooltip' => 'Sau ngày này, tất cả người dùng phải bật 2FA. Ngày áp dụng cũng hiển thị trong hộp thoại khuyến nghị 2FA.',

    'primary_color_label' => 'Màu Chính',
    'primary_color_label_tooltip' => 'Chọn màu chính mặc định cho ứng dụng. Màu này sẽ dùng cho các doanh nghiệp chưa đặt màu riêng.',
    'secondary_color_label' => 'Màu Phụ',
    'secondary_color_label_tooltip' => 'Chọn màu phụ mặc định cho ứng dụng. Màu này sẽ dùng cho các doanh nghiệp chưa đặt màu riêng.',

    'allow_theme_change' => 'Cho Phép Thay Đổi Giao Diện',
    'allow_theme_change_tooltip' => 'Cho phép doanh nghiệp tùy chỉnh màu giao diện riêng. Nếu không đặt màu riêng, họ sẽ dùng màu mặc định tại đây do superadmin thiết lập.',

    'login_bg_image_label' => 'Hình Nền Đăng Nhập',
    'login_bg_image_label_tooltip' => 'Tải lên hình mới sẽ thay thế hình nền hiện tại.',

    'logo_dark_tooltip'  => 'Thay đổi logo màu tối mặc định của ứng dụng, dùng khi giao diện sáng.',
    'logo_light_tooltip' => 'Thay đổi logo màu sáng mặc định của ứng dụng, dùng khi giao diện tối.',
    'favicon_tooltip' => 'Kích thước đề xuất: 32×32 px. Biểu tượng này xuất hiện ở tab trình duyệt và dấu trang.',
    'upload_favicon' => 'Tải Lên Favicon',

    // Fonts
    'tab_fonts' => 'Phông Chữ',
    'english_font'            => 'Phông Chữ Tiếng Anh',
    'arabic_font'             => 'Phông Chữ Tiếng Ả Rập',
    'custom_font_placeholder' => 'Nhập tên phông chữ tùy chỉnh...',
    'select_font'             => 'Chọn phông chữ...',
    'or'                      => 'hoặc',
    'font_help_text'          => 'Chọn từ danh sách hoặc nhập phông chữ tùy chỉnh.',
    'english_font_tooltip'  => 'Nhập tên phông chữ tùy chỉnh hoặc chọn trong danh sách. Bạn có thể tìm tên phông tại: :url',
    'arabic_font_tooltip'   => 'Nhập tên phông chữ tùy chỉnh hoặc chọn trong danh sách. Bạn có thể tìm tên phông tại: :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha'              => 'Bật Google reCAPTCHA',
    'enable_recaptcha_tooltip'      => 'Chuyển để kích hoạt bảo vệ reCAPTCHA. Nhận site key và secret từ: :url',
    'enable_recaptcha_text'         => 'Bật reCAPTCHA',
    'google_recaptcha_key'          => 'Khóa Trang (Site Key) Google reCAPTCHA',
    'google_recaptcha_secret'       => 'Khóa Bí Mật (Secret Key) Google reCAPTCHA',
    'google_recaptcha_key_placeholder'    => 'Nhập Site Key cho Google reCAPTCHA',
    'google_recaptcha_secret_placeholder' => 'Nhập Secret Key cho Google reCAPTCHA',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Bật Xác Thực Hai Yếu Tố (2FA)',
    'modal_enable_2fa_desc' => 'Chúng tôi khuyến nghị bạn bật 2FA để tăng cường bảo mật tài khoản.',
    'enable_now_button' => 'Bật Ngay',
    'maybe_later_button' => 'Để Sau',
    'close_aria_label' => 'Đóng',

    // 2FA Verify page
    'one_time_password_heading' => 'Mã Một Lần (OTP)',
    'one_time_password_label' => 'Mã Một Lần',
    'enter_2fa_code_placeholder' => 'Nhập mã 2FA',
    'disable_2fa_for' => 'Tắt 2FA trong :duration :unit',
    'verify_button' => 'Xác Thực',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Xác Thực Hai Yếu Tố (2FA)',
    'google_auth_app_desc' => 'Ứng dụng Google Authenticator',
    'configured_status' => 'Đã Cấu Hình',
    'needs_configuration_status' => 'Cần Cấu Hình',
    'two_factor_scan_or_enter_msg' => 'Vui lòng quét mã QR bên dưới bằng ứng dụng Google Authenticator hoặc nhập “secret” thủ công, sau đó nhập mã đã được tạo.',
    'your_secret_key_msg' => 'Khóa bí mật của bạn (nếu cần nhập thủ công):',

    // 2FA field labels
    'one_time_password_label' => 'Mã Một Lần',
    'enter_2fa_code_placeholder' => 'Nhập mã 2FA',
    '2fa_will_be_forced_after_date' => '2FA sẽ được ép buộc sau :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Xác Thực',

    'confirm_access_recovery_codes' => 'Xác Nhận Quyền Truy Cập',
    're_authenticate_message'       => 'Bạn phải xác thực lại để truy cập Cài Đặt hoặc Mã Khôi Phục 2FA.',
    'choose_method'                 => 'Chọn phương thức:',
    'one_time_password'             => 'Mã Một Lần (OTP)',
    'password'                      => 'Mật Khẩu',
    'enter_code_or_password'        => 'Nhập Mã / Mật Khẩu:',
    'confirm'                       => 'Xác Nhận',

    '2fa_recovery_codes'           => 'Mã Khôi Phục 2FA',
    'recovery_codes_description'   => 'Các mã này cho phép bạn đăng nhập nếu mất quyền truy cập vào ứng dụng xác thực. Mỗi mã chỉ dùng được một lần.',
    'regenerate_codes'             => 'Tạo Lại Mã',
    'copy'                         => 'Sao Chép',
    'copy_all'                     => 'Sao Chép Tất Cả',
    'no_recovery_codes_available'  => 'Không có mã khôi phục nào khả dụng. Bạn có thể tạo mã mới bên dưới.',
    'copied'                       => 'Đã sao chép mã vào bộ nhớ tạm!',
    'all_codes_copied'             => 'Tất cả mã khôi phục đã được sao chép vào bộ nhớ tạm!',
    'supported_app'                => 'Ứng Dụng Hỗ Trợ',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    //social logins:
    'social_login_settings'       => 'Cài Đặt Đăng Nhập MXH',
    'social_login_settings_help'  => 'Nhập thông tin tài khoản đăng nhập mạng xã hội của bạn.',
    'client_id'                   => 'Client ID',
    'client_secret'               => 'Client Secret',
    'redirect_url'                => 'URL Chuyển Hướng (Redirect URL)',
    'enter_client_id'             => 'Nhập :provider Client ID',
    'enter_client_secret'         => 'Nhập :provider Client Secret',
    'enter_redirect_url'          => 'Nhập :provider Redirect URL',
    'enable_social_login'         => 'Bật Đăng Nhập MXH',
    'tab_social' => 'Đăng Nhập MXH',
    'or_login_with' => 'Hoặc Đăng Nhập Bằng',
    'force_otp_after_social_login' => 'Bắt Buộc OTP Sau Đăng Nhập MXH',
    'force_otp_after_social_login_tooltip' => 'Nếu bật, người dùng đăng nhập thông qua mạng xã hội phải xác thực OTP.',

    //Lock Users:
    'locked_until' => 'Bị Khóa Đến',
    'locked_users' => 'Người Dùng Bị Khóa',
    'view_locked_users' => 'Xem Người Dùng Bị Khóa',
    'tab_login_security' => 'Bảo Mật Đăng Nhập',
    'unlock' => 'Mở Khóa',
    'enable_user_lock_label' => 'Bật Tính Năng Khóa Người Dùng',
    'enable_user_lock_tooltip' => 'Bật/Tắt khóa người dùng sau nhiều lần đăng nhập sai.',
    'max_login_attempts_label' => 'Số Lần Đăng Nhập Sai Tối Đa',
    'max_login_attempts_tooltip' => 'Số lần nhập sai được phép trước khi người dùng bị khóa.',
    'lock_duration_label' => 'Thời Lượng Khóa',
    'lock_duration_tooltip' => 'Khoảng thời gian (đơn vị số) mà người dùng sẽ bị khóa.',
    'lock_duration_unit_label' => 'Đơn Vị Thời Gian Khóa',
    'lock_duration_unit_tooltip' => 'Chọn đơn vị thời gian khóa: phút, giờ, ngày v.v.',
    'account_locked_for_time_unit' => 'Tài khoản của bạn bị khóa trong :time :unit.',
    'user_unlocked_message' => 'Đã mở khóa người dùng thành công!',

    //Verify email:
    'verify_email_address_title' => 'Xác Thực Địa Chỉ Email',
    'fresh_verification_sent' => 'Một liên kết xác thực mới đã được gửi đến địa chỉ email của bạn.',
    'verify_email_before_proceeding' => 'Trước khi tiếp tục, hãy kiểm tra email để lấy liên kết xác thực.',
    'did_not_receive_email' => 'Nếu bạn không nhận được email',
    'click_here_request_another' => 'bấm vào đây để yêu cầu liên kết mới',
    'logout' => 'Đăng Xuất',
    'force_email_verify' => 'Bắt Buộc Xác Thực Email',
    'force_email_verify_tooltip' => 'Nếu bật, người dùng phải xác thực địa chỉ email trước khi truy cập hệ thống.',

        // Reset Mapping
        'reset_purchase_sell_mapping'     => 'Đặt lại ánh xạ mua-bán',
        'select_business'                 => 'Chọn doanh nghiệp:',
        'all_businesses'                  => 'Tất cả doanh nghiệp',
        'chunk_size'                      => 'Kích thước phân đoạn:',
        'reset_mapping'                   => 'Đặt lại ánh xạ',
        'purchase_sell_mismatch_tooltip'  => 'Chọn các ánh xạ doanh nghiệp cần đặt lại. Nếu bạn có cơ sở dữ liệu lớn, nên đặt lại theo từng doanh nghiệp riêng biệt.',
        'chunk_size_tooltip'              => 'Ánh xạ sẽ được đặt lại thành các phân đoạn nhỏ hơn. Với bộ dữ liệu lớn, hãy chọn kích thước phân đoạn phù hợp. Khuyến nghị bật chế độ bảo trì.',
    
        // Maintenance Mode
        'tab_maintenance_mode'            => 'Chế độ bảo trì',
        'maintenance_mode'                => 'Chế độ bảo trì',
        'maintenance_mode_tooltip'        => 'Đặt ứng dụng vào chế độ bảo trì (khách truy cập sẽ thấy màn hình bảo trì).',
        'enable_countdown'                => 'Bật đếm ngược',
        'enable_timer_tooltip'            => 'Hiển thị đếm ngược trực tiếp cho đến khi bảo trì kết thúc.',
        'maintenance_duration'            => 'Thời lượng',
        'maintenance_unit'                => 'Đơn vị thời gian',
        'minutes'                         => 'Phút',
        'hours'                           => 'Giờ',
        'days'                            => 'Ngày',
    
        // Maintenance page
        'under_maintenance'               => 'Đang bảo trì',
        'maintenance_heading'             => 'Chúng tôi đang thực hiện bảo trì.',
        'maintenance_subheading'          => 'Cảm ơn bạn đã kiên nhẫn!',
        'maintenance_back_in'             => 'Chúng tôi sẽ trở lại sau :time',
        'maintenance_back_no_timer'       => 'Chúng tôi sẽ trở lại ngay khi bảo trì xong.',
    
        // Mapping reset page
        'mapping_reset_progress'          => 'Tiến độ đặt lại ánh xạ',
        'mapping_reset_in_progress'       => 'Đang đặt lại ánh xạ',
        'batch_status'                    => 'Trạng thái lô',
        'refresh_status'                  => 'Làm mới trạng thái',
    
        // Mapping reset result & status
        'mapping_reset_result'            => 'Kết quả đặt lại ánh xạ',
        'chunk_processing_status'         => 'Trạng thái xử lý phân đoạn',
    
        // Table headers
        'business'                        => 'Doanh nghiệp',
        'chunk_status'                    => 'Trạng thái phân đoạn',
        'total_chunks'                    => 'Tổng phân đoạn',
        'status'                          => 'Trạng thái',
    
        // Button
        'go_back'                         => 'Quay lại',
    
        // Mapping Jobs
        'processed_jobs'                  => 'Các công việc ánh xạ',
        'processed_jobs_subtitle'         => 'Tất cả các lô ánh xạ đã gửi',
        'uuid'                            => 'UUID lô',
        'job_name'                        => 'Tên công việc',
        'completed_chunks'                => 'Phân đoạn hoàn thành',
        'started_at'                      => 'Bắt đầu lúc',
        'finished_at'                     => 'Cập nhật cuối',
        'view_rebuild_jobs'               => 'Xem công việc tái tạo kho',
    
        // Detailed instruction
        'reset_mapping_instruction'       =>
            "Khuyến nghị cấu hình driver hàng đợi sang backend thật:\n"
            . "→ Trong file .env, đặt `QUEUE_CONNECTION=database`.\n\n"
            . "Kích hoạt chế độ bảo trì (Cài đặt ứng dụng → Chế độ bảo trì) khi đặt lại ánh xạ để tránh dữ liệu trùng hoặc thiếu.\n\n"
            . "Với cơ sở dữ liệu lớn, việc đặt lại sẽ lâu hơn—hãy xem xét đặt lại theo từng doanh nghiệp.\n\n"
            . "Trước khi bắt đầu:\n"
            . "• Sao lưu toàn bộ cơ sở dữ liệu.\n"
            . "• Giám sát quá trình qua log để phát hiện lỗi.",
    
        'recovery_codes_generated_successfully' => 'Tạo mã khôi phục thành công',
    
        // Disposable-email sync
        'sync_disposable_list'            => 'Đồng bộ danh sách email dùng một lần',
        'sync_disposable_success'         => 'Cập nhật danh sách email dùng một lần thành công.',
        'sync_disposable_failed'          => 'Đồng bộ danh sách email dùng một lần thất bại.',
    
        // Temporary-email protection
        'temp_email_protection'           => 'Chặn email tạm thời',
        'temp_email_protection_tooltip'   => 'Chặn các miền email tạm thời/dùng một lần (ví dụ: Mailinator, 10MinuteMail).',
        'disposable_not_allowed'          => 'Không cho phép địa chỉ email dùng một lần.',

];
