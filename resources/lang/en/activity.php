<?php

return [
    'auth' => [
        'fail' => 'ログインに失敗',
        'success' => 'ログイン',
        'password-reset' => 'パスワードをリセット',
        'reset-password' => 'パスワードリセットをリクエスト',
        'checkpoint' => '二要素認証が要求されました',
        'recovery-token' => '二要素認証のリカバリートークンを使用',
        'token' => '二要素認証チャレンジを完了',
        'ip-blocked' => ':identifier の未許可 IP アドレスからのリクエストをブロック',
        'sftp' => [
            'fail' => 'SFTP ログインに失敗',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'メールアドレスを :old から :new に変更',
            'password-changed' => 'パスワードを変更',
        ],
        'api-key' => [
            'create' => '新しい API キー :identifier を作成',
            'delete' => 'API キー :identifier を削除',
        ],
        'ssh-key' => [
            'create' => 'アカウントに SSH キー :fingerprint を追加',
            'delete' => 'アカウントから SSH キー :fingerprint を削除',
        ],
        'two-factor' => [
            'create' => '二要素認証を有効化',
            'delete' => '二要素認証を無効化',
        ],
    ],
    'server' => [
        'reinstall' => 'サーバーを再インストール',
        'console' => [
            'command' => 'サーバーで「:command」を実行',
        ],
        'power' => [
            'start' => 'サーバーを起動',
            'stop' => 'サーバーを停止',
            'restart' => 'サーバーを再起動',
            'kill' => 'サーバープロセスを強制終了',
        ],
        'backup' => [
            'download' => ':name バックアップをダウンロード',
            'delete' => ':name バックアップを削除',
            'restore' => ':name バックアップを復元 (削除されたファイル: :truncate)',
            'restore-complete' => ':name バックアップの復元を完了',
            'restore-failed' => ':name バックアップの復元に失敗',
            'start' => '新しいバックアップ :name を開始',
            'complete' => ':name バックアップを完了としてマーク',
            'fail' => ':name バックアップを失敗としてマーク',
            'lock' => ':name バックアップをロック',
            'unlock' => ':name バックアップをアンロック',
        ],
        'database' => [
            'create' => '新しいデータベース :name を作成',
            'rotate-password' => 'データベース :name のパスワードを更新',
            'delete' => 'データベース :name を削除',
        ],
        'file' => [
            'compress_one' => ':directory:file を圧縮',
            'compress_other' => ':directory の :count ファイルを圧縮',
            'read' => ':file の内容を表示',
            'copy' => ':file のコピーを作成',
            'create-directory' => 'ディレクトリ :directory:name を作成',
            'decompress' => ':directory で :files を解凍',
            'delete_one' => ':directory:files.0 を削除',
            'delete_other' => ':directory の :count ファイルを削除',
            'download' => ':file をダウンロード',
            'pull' => ':url からリモートファイルをダウンロードして :directory に保存',
            'rename_one' => ':directory:files.0.from を :directory:files.0.to にリネーム',
            'rename_other' => ':directory の :count ファイルをリネーム',
            'write' => ':file に新しい内容を書き込み',
            'upload' => 'ファイルアップロードを開始',
            'uploaded' => ':directory:file をアップロード',
        ],
        'sftp' => [
            'denied' => '権限不足のため SFTP アクセスをブロック',
            'create_one' => ':files.0 を作成',
            'create_other' => ':count 個の新しいファイルを作成',
            'write_one' => ':files.0 の内容を変更',
            'write_other' => ':count 個のファイルの内容を変更',
            'delete_one' => ':files.0 を削除',
            'delete_other' => ':count 個のファイルを削除',
            'create-directory_one' => ':files.0 ディレクトリを作成',
            'create-directory_other' => ':count 個のディレクトリを作成',
            'rename_one' => ':files.0.from を :files.0.to にリネーム',
            'rename_other' => ':count 個のファイルをリネームまたは移動',
        ],
        'allocation' => [
            'create' => 'サーバーに :allocation を追加',
            'notes' => ':allocation のメモを「:old」から「:new」に更新',
            'primary' => ':allocation をサーバーのプライマリ割り当てに設定',
            'delete' => ':allocation の割り当てを削除',
        ],
        'schedule' => [
            'create' => ':name スケジュールを作成',
            'update' => ':name スケジュールを更新',
            'execute' => ':name スケジュールを手動実行',
            'delete' => ':name スケジュールを削除',
        ],
        'task' => [
            'create' => ':name スケジュールに新しい「:action」タスクを作成',
            'update' => ':name スケジュールの「:action」タスクを更新',
            'delete' => ':name スケジュールのタスクを削除',
        ],
        'settings' => [
            'rename' => 'サーバー名を :old から :new に変更',
            'description' => 'サーバー説明を :old から :new に変更',
        ],
        'startup' => [
            'edit' => ':variable 変数を「:old」から「:new」に変更',
            'image' => 'サーバーの Docker イメージを :old から :new に更新',
        ],
        'subuser' => [
            'create' => ':email をサブユーザーとして追加',
            'update' => ':email のサブユーザー権限を更新',
            'delete' => ':email をサブユーザーから削除',
        ],
    ],
];

