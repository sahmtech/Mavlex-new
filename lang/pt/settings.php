<?php

return [

    'app_settings' => 'Configurações do Aplicativo',
    'manage_app_settings' => 'Gerenciar Configurações do Aplicativo',
    'tab_2fa' => '2FA',
    'tab_theme' => 'Aparência',
    'tab_login_page' => 'Página de Login',
    'tab_sidebar' => 'Barra Lateral',
    'tab_language' => 'Idioma',
    'tab_repair_status' => 'Status de Reparo',
    'tab_logo' => 'Logo',
    // Buttons
    'update_settings' => 'Atualizar Configurações',

    'enable_custom_bg_image_for_login' => 'Ativar Fundo Personalizado para Login',
    'enable_custom_bg_image_for_login_tooltip' => 'Defina uma imagem de fundo personalizada para a página de login.',

    'enable_custom_sidebar_logo' => 'Permitir Logo Personalizado na Barra Lateral',
    'enable_custom_sidebar_logo_tooltip' => 'Permite que as empresas usem um logotipo personalizado na barra lateral.',

    // language.blade.php
    'header_language_change' => 'Alterar Idioma no Cabeçalho',
    'header_language_change_tooltip' => 'Permitir que os usuários troquem o idioma a partir do cabeçalho principal.',
    'header_languages_label' => 'Idiomas no Cabeçalho',
    'header_languages_label_tooltip' => 'Selecione quais idiomas serão exibidos no cabeçalho.',

    // repair_status.blade.php
    'show_repair_status_login_screen' => 'Exibir Status de Reparo na Tela de Login',

    // 2fa.blade.php
    'enable_2fa' => 'Ativar 2FA',
    'enable_2fa_tooltip' => 'Ative a Autenticação de Dois Fatores (2FA) para o aplicativo.',

    'force_2fa' => 'Forçar 2FA',
    'force_2fa_tooltip' => 'Os usuários devem configurar o 2FA antes de poderem usar o aplicativo.',

    'recommend_2fa' => 'Recomendar 2FA',
    'recommend_2fa_tooltip' => 'Aparece um modal único no login para incentivar os usuários a habilitarem o 2FA.',

    'allow_disable_2fa' => 'Permitir Desativar 2FA Temporariamente',
    'allow_disable_2fa_tooltip' => 'Permitir que os usuários desativem temporariamente o 2FA até um horário específico.',

    'disable_2fa_duration_label' => 'Duração para Desativar o 2FA',
    'disable_2fa_duration_label_tooltip' => 'Defina o período durante o qual o 2FA pode permanecer desativado.',

    'disable_2fa_unit_label' => 'Unidade para Desativar o 2FA',

    'force_2fa_after_date_label' => 'Forçar 2FA Após Data',
    'force_2fa_after_date_label_tooltip' => 'Após esta data, todos os usuários devem habilitar o 2FA. A data também é exibida no modal de recomendação do 2FA.',

    'primary_color_label' => 'Cor Primária',
    'primary_color_label_tooltip' => 'Selecione a cor primária padrão do aplicativo. Essa cor será usada por empresas que não definirem cores personalizadas.',
    'secondary_color_label' => 'Cor Secundária',
    'secondary_color_label_tooltip' => 'Selecione a cor secundária padrão do aplicativo. Essa cor será usada por empresas que não definirem cores personalizadas.',

    'allow_theme_change' => 'Permitir Alteração de Tema',
    'allow_theme_change_tooltip' => 'Permitir que as empresas personalizem as próprias cores do tema. Quando ativado, empresas sem cores personalizadas usarão as cores padrão definidas aqui pelo superadmin.',

    'login_bg_image_label' => 'Imagem de Fundo para Login',
    'login_bg_image_label_tooltip' => 'Fazer upload de uma nova imagem substituirá o fundo atual.',

    'logo_dark_tooltip'  => 'Altere o logotipo escuro padrão do aplicativo, usado no modo claro.',
    'logo_light_tooltip' => 'Altere o logotipo claro padrão do aplicativo, usado no modo escuro.',
    'favicon_tooltip' => 'Dimensões recomendadas: 32×32 px. Este ícone aparece nas abas do navegador e favoritos.',
    'upload_favicon' => 'Enviar Favicon',

    // Fonts
    'tab_fonts' => 'Fontes',
    'english_font'            => 'Fonte em Inglês',
    'arabic_font'             => 'Fonte em Árabe',
    'custom_font_placeholder' => 'Insira o nome de uma fonte personalizada...',
    'select_font'             => 'Selecione uma fonte...',
    'or'                      => 'ou',
    'font_help_text'          => 'Escolha da lista ou insira sua própria fonte.',
    'english_font_tooltip'  => 'Insira o nome de uma fonte personalizada ou escolha uma da lista. Você pode encontrar nomes de fontes em: :url',
    'arabic_font_tooltip'   => 'Insira o nome de uma fonte personalizada ou escolha uma da lista. Você pode encontrar nomes de fontes em: :url',

    //Recaptcha:
    'tab_recaptcha' => 'reCAPTCHA',
    'enable_recaptcha'              => 'Ativar Google reCAPTCHA',
    'enable_recaptcha_tooltip'      => 'Alternar para ativar a proteção reCAPTCHA. Obtenha sua chave e segredo em: :url',
    'enable_recaptcha_text'         => 'Ativar reCAPTCHA',
    'google_recaptcha_key'          => 'Chave do Site (Site Key) do Google reCAPTCHA',
    'google_recaptcha_secret'       => 'Chave Secreta (Secret Key) do Google reCAPTCHA',
    'google_recaptcha_key_placeholder'    => 'Insira sua Chave do Site do Google reCAPTCHA',
    'google_recaptcha_secret_placeholder' => 'Insira sua Chave Secreta do Google reCAPTCHA',

    // 2FA Recommendation Modal
    'modal_enable_2fa_title' => 'Ativar Autenticação de Dois Fatores',
    'modal_enable_2fa_desc' => 'Recomendamos ativar o 2FA para aprimorar a segurança da sua conta.',
    'enable_now_button' => 'Ativar Agora',
    'maybe_later_button' => 'Talvez Depois',
    'close_aria_label' => 'Fechar',

    // 2FA Verify page
    'one_time_password_heading' => 'Senha de Uso Único (OTP)',
    'one_time_password_label' => 'Senha de Uso Único (OTP)',
    'enter_2fa_code_placeholder' => 'Insira o código 2FA',
    'disable_2fa_for' => 'Desativar 2FA por :duration :unit',
    'verify_button' => 'Verificar',

    // 2FA Verification (2fa_verify.blade.php)
    'two_factor_auth_title' => 'Autenticação de Dois Fatores (2FA)',
    'google_auth_app_desc' => 'App Google Authenticator',
    'configured_status' => 'Configurado',
    'needs_configuration_status' => 'Necessita Configuração',
    'two_factor_scan_or_enter_msg' => 'Por favor, escaneie o QR code abaixo usando o aplicativo Google Authenticator ou insira a chave manualmente, em seguida insira o código gerado.',
    'your_secret_key_msg' => 'Sua chave secreta (se precisar inserir manualmente):',

    // 2FA field labels
    'one_time_password_label' => 'Senha de Uso Único (OTP)',
    'enter_2fa_code_placeholder' => 'Insira o código 2FA',
    '2fa_will_be_forced_after_date' => 'O 2FA será forçado após :date.',

    // Buttons
    '2fa' => '2FA',
    'verify_button' => 'Verificar',

    'confirm_access_recovery_codes' => 'Confirmar Acesso',
    're_authenticate_message'       => 'Você deve se autenticar novamente para acessar a Configuração ou os Códigos de Recuperação de 2FA.',
    'choose_method'                 => 'Escolha o método:',
    'one_time_password'             => 'Senha de Uso Único (OTP)',
    'password'                      => 'Senha',
    'enter_code_or_password'        => 'Insira o Código / Senha:',
    'confirm'                       => 'Confirmar',

    '2fa_recovery_codes'           => 'Códigos de Recuperação 2FA',
    'recovery_codes_description'   => 'Estes códigos permitem que você faça login caso perca o acesso ao seu dispositivo autenticador. Cada código só pode ser usado uma vez.',
    'regenerate_codes'             => 'Regenerar Códigos',
    'copy'                         => 'Copiar',
    'copy_all'                     => 'Copiar Todos',
    'no_recovery_codes_available'  => 'Não há códigos de recuperação disponíveis. Você pode gerar novos abaixo.',
    'copied'                       => 'Código copiado para a área de transferência!',
    'all_codes_copied'             => 'Todos os códigos de recuperação foram copiados!',
    'supported_app'                => 'Apps Suportados',
    'supported_apps' => [
        'Authy' => ['iOS', 'Android', 'Chrome', 'OS X'],
        'FreeOTP' => ['iOS', 'Android', 'Pebble'],
        'Google Authenticator' => ['iOS', 'Android', 'Windows Store'],
        'Microsoft Authenticator' => ['Windows Phone'],
        'LastPass Authenticator' => ['iOS', 'Android', 'OS X', 'Windows'],
        '1Password' => ['iOS', 'Android', 'OS X', 'Windows'],
    ],

    //social logins:
    'social_login_settings'       => 'Configurações de Login Social',
    'social_login_settings_help'  => 'Insira suas credenciais de login social.',
    'client_id'                   => 'Client ID',
    'client_secret'               => 'Client Secret',
    'redirect_url'                => 'URL de Redirecionamento (Redirect URL)',
    'enter_client_id'             => 'Insira o Client ID de :provider',
    'enter_client_secret'         => 'Insira o Client Secret de :provider',
    'enter_redirect_url'          => 'Insira o Redirect URL de :provider',
    'enable_social_login' => 'Ativar Login Social',
    'tab_social' => 'Logins Sociais',
    'or_login_with' => 'Ou faça login com',
    'force_otp_after_social_login' => 'Forçar OTP após Login Social',
    'force_otp_after_social_login_tooltip' => 'Se ativado, usuários que fizerem login usando redes sociais terão que verificar um OTP.',

    //Lock Users:
    'locked_until' => 'Bloqueado Até',
    'locked_users' => 'Usuários Bloqueados',
    'view_locked_users' => 'Ver Usuários Bloqueados',
    'tab_login_security' => 'Segurança de Login',
    'unlock' => 'Desbloquear',
    'enable_user_lock_label' => 'Ativar Bloqueio de Usuário',
    'enable_user_lock_tooltip' => 'Ativar/desativar bloqueio de usuário após tentativas de login falhas.',
    'max_login_attempts_label' => 'Máximo de Tentativas de Login',
    'max_login_attempts_tooltip' => 'Quantidade de tentativas permitidas antes de o usuário ser bloqueado.',
    'lock_duration_label' => 'Duração do Bloqueio',
    'lock_duration_tooltip' => 'Período de tempo (em números) que o usuário permanece bloqueado.',
    'lock_duration_unit_label' => 'Unidade de Duração do Bloqueio',
    'lock_duration_unit_tooltip' => 'Escolha a unidade de tempo para a duração do bloqueio: minutos, horas, dias etc.',
    'account_locked_for_time_unit' => 'Sua conta está bloqueada por :time :unit.',
    'user_unlocked_message' => 'Usuário desbloqueado com sucesso!',

    //Verify email:
    'verify_email_address_title' => 'Verifique Seu Endereço de Email',
    'fresh_verification_sent' => 'Um novo link de verificação foi enviado para seu endereço de email.',
    'verify_email_before_proceeding' => 'Antes de prosseguir, verifique seu email para o link de verificação.',
    'did_not_receive_email' => 'Se você não recebeu o email',
    'click_here_request_another' => 'clique aqui para solicitar outro',
    'logout' => 'Sair',
    'force_email_verify' => 'Forçar Verificação de Email',
    'force_email_verify_tooltip' => 'Se ativado, os usuários devem verificar seu endereço de email antes de acessar o sistema.',

      // Reset Mapping
      'reset_purchase_sell_mapping'     => 'Reiniciar mapeamento compra-venda',
      'select_business'                 => 'Selecionar empresa:',
      'all_businesses'                  => 'Todas as empresas',
      'chunk_size'                      => 'Tamanho do lote:',
      'reset_mapping'                   => 'Reiniciar mapeamento',
      'purchase_sell_mismatch_tooltip'  => 'Escolha quais mapeamentos de empresa devem ser reiniciados. Se você tiver um banco de dados grande, recomendamos reiniciar por empresa.',
      'chunk_size_tooltip'              => 'O mapeamento será reiniciado em lotes menores. Para grandes conjuntos de dados, escolha um tamanho de lote apropriado. Recomenda-se ativar o modo de manutenção.',
  
      // Maintenance Mode
      'tab_maintenance_mode'            => 'Modo de manutenção',
      'maintenance_mode'                => 'Modo de manutenção',
      'maintenance_mode_tooltip'        => 'Coloca a aplicação em modo de manutenção (os visitantes verão a tela de manutenção).',
      'enable_countdown'                => 'Ativar contagem regressiva',
      'enable_timer_tooltip'            => 'Exibe uma contagem regressiva ao vivo até o fim da manutenção.',
      'maintenance_duration'            => 'Duração',
      'maintenance_unit'                => 'Unidade de duração',
      'minutes'                         => 'Minutos',
      'hours'                           => 'Horas',
      'days'                            => 'Dias',
  
      // Maintenance page
      'under_maintenance'               => 'Em manutenção',
      'maintenance_heading'             => 'Estamos realizando manutenção.',
      'maintenance_subheading'          => 'Obrigado pela sua paciência!',
      'maintenance_back_in'             => 'Voltamos em :time',
      'maintenance_back_no_timer'       => 'Voltamos assim que concluir a manutenção.',
  
      // Mapping reset page
      'mapping_reset_progress'          => 'Progresso de reinício de mapeamento',
      'mapping_reset_in_progress'       => 'Reinício de mapeamento em andamento',
      'batch_status'                    => 'Status do lote',
      'refresh_status'                  => 'Atualizar status',
  
      // Mapping reset result & status
      'mapping_reset_result'            => 'Resultado do reinício de mapeamento',
      'chunk_processing_status'         => 'Status de processamento do lote',
  
      // Table headers
      'business'                        => 'Empresa',
      'chunk_status'                    => 'Status do lote',
      'total_chunks'                    => 'Total de lotes',
      'status'                          => 'Status',
  
      // Button
      'go_back'                         => 'Voltar',
  
      // Mapping Jobs
      'processed_jobs'                  => 'Tarefas de mapeamento',
      'processed_jobs_subtitle'         => 'Todos os lotes de mapeamento enviados',
      'uuid'                            => 'UUID do lote',
      'job_name'                        => 'Nome da tarefa',
      'completed_chunks'                => 'Lotes concluídos',
      'started_at'                      => 'Iniciado em',
      'finished_at'                     => 'Última atualização',
      'view_rebuild_jobs'               => 'Ver tarefas de reconstrução de estoque',
  
      // Detailed instruction
      'reset_mapping_instruction'       =>
          "Recomendamos configurar o driver de fila para um backend real:\n"
          ."→ No seu .env, defina `QUEUE_CONNECTION=database`.\n\n"
          ."Também ative o modo de manutenção (Configurações da aplicação → Modo de manutenção) durante o reinício para evitar dados duplicados ou perdidos.\n\n"
          ."Se seu banco de dados for grande, o reinício levará mais tempo—considere reiniciar por empresa.\n\n"
          ."Antes de começar:\n"
          ."• Faça backup completo do banco de dados.\n"
          ."• Monitore o processo pelos logs para capturar erros.",
  
      'recovery_codes_generated_successfully' => 'Códigos de recuperação gerados com sucesso',
  
      // Disposable-email sync
      'sync_disposable_list'            => 'Sincronizar lista de e-mails descartáveis',
      'sync_disposable_success'         => 'Lista de e-mails descartáveis atualizada.',
      'sync_disposable_failed'          => 'Falha ao sincronizar lista de e-mails descartáveis.',
  
      // Temporary-email protection
      'temp_email_protection'           => 'Bloquear endereços de e-mail descartáveis',
      'temp_email_protection_tooltip'   => 'Bloqueia domínios de e-mail temporários/descartáveis (ex.: Mailinator, 10MinuteMail).',
      'disposable_not_allowed'          => 'Endereços de e-mail descartáveis não são permitidos.',
  

];
