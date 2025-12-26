<?php

return [
    'location' => [
        'no_location_found' => '指定された短縮コードに一致するレコードが見つかりませんでした。',
        'ask_short' => 'ロケーション短縮コード',
        'ask_long' => 'ロケーション説明',
        'created' => '新しいロケーション (:name) を作成しました。ID: :id',
        'deleted' => '指定されたロケーションを削除しました。',
    ],
    'user' => [
        'search_users' => 'ユーザー名、ユーザー ID、またはメールアドレスを入力してください',
        'select_search_user' => '削除するユーザーの ID (再検索する場合は \'0\' を入力)',
        'deleted' => 'ユーザーをパネルから削除しました。',
        'confirm_delete' => 'このユーザーをパネルから削除してよろしいですか？',
        'no_users_found' => '指定された検索条件に一致するユーザーが見つかりませんでした。',
        'multiple_found' => '指定されたユーザーに対して複数のアカウントが見つかりました。--no-interaction フラグのためユーザーを削除できません。',
        'ask_admin' => 'このユーザーは管理者ですか？',
        'ask_email' => 'メールアドレス',
        'ask_username' => 'ユーザー名',
        'ask_name_first' => '名',
        'ask_name_last' => '姓',
        'ask_password' => 'パスワード',
        'ask_password_tip' => 'ランダムなパスワードを生成してメールで送るアカウントを作成する場合は、このコマンドを再実行 (CTRL+C) し、`--no-password` フラグを指定してください。',
        'ask_password_help' => 'パスワードは 8 文字以上で、少なくとも 1 つの大文字と数字を含む必要があります。',
        '2fa_help_text' => [
            'このコマンドは、ユーザーアカウントで二要素認証が有効な場合に無効化します。ユーザーがログインできない場合のアカウント復旧コマンドとしてのみ使用してください。',
            'これが意図した操作でない場合は、CTRL+C を押して終了してください。',
        ],
        '2fa_disabled' => ':email の二要素認証を無効化しました。',
    ],
    'schedule' => [
        'output_line' => '` :schedule ` の最初のタスクに対してジョブをディスパッチしています (:hash)。',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'サービスのバックアップファイル :file を削除しています。',
    ],
    'server' => [
        'rebuild_failed' => 'ノード「:node」上の「:name」(#:id) の再ビルド要求が失敗しました。エラー: :message',
        'reinstall' => [
            'failed' => 'ノード「:node」上の「:name」(#:id) の再インストール要求が失敗しました。エラー: :message',
            'confirm' => '複数のサーバーに対して再インストールを実行しようとしています。続行しますか？',
        ],
        'power' => [
            'confirm' => ':count 台のサーバーに対して :action を実行しようとしています。続行しますか？',
            'action_failed' => 'ノード「:node」上の「:name」(#:id) の電源操作要求が失敗しました。エラー: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP ホスト (例: smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP ポート',
            'ask_smtp_username' => 'SMTP ユーザー名',
            'ask_smtp_password' => 'SMTP パスワード',
            'ask_mailgun_domain' => 'Mailgun ドメイン',
            'ask_mailgun_endpoint' => 'Mailgun エンドポイント',
            'ask_mailgun_secret' => 'Mailgun シークレット',
            'ask_mandrill_secret' => 'Mandrill シークレット',
            'ask_postmark_username' => 'Postmark API キー',
            'ask_driver' => 'メール送信に使用するドライバーはどれですか？',
            'ask_mail_from' => '送信元となるメールアドレス',
            'ask_mail_name' => '送信者名として表示する名前',
            'ask_encryption' => '使用する暗号化方式',
        ],
    ],
];

