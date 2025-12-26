<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'このサーバーのデフォルト割り当てを削除しようとしていますが、代替の割り当てがありません。',
        'marked_as_failed' => 'このサーバーは以前のインストール失敗としてマークされています。この状態ではステータスを切り替えできません。',
        'bad_variable' => ':name 変数にバリデーションエラーがあります。',
        'daemon_exception' => 'デーモンとの通信中に例外が発生し、HTTP/:code のレスポンスコードが返されました。この例外はログに記録されています。(request id: :request_id)',
        'default_allocation_not_found' => '要求されたデフォルト割り当てが、このサーバーの割り当て内に見つかりませんでした。',
    ],
    'alerts' => [
        'startup_changed' => 'このサーバーの起動設定を更新しました。Nest または Egg を変更した場合、今すぐ再インストールが実行されます。',
        'server_deleted' => 'サーバーをシステムから削除しました。',
        'server_created' => 'パネルでサーバーを作成しました。デーモンがサーバーのインストールを完了するまで数分お待ちください。',
        'build_updated' => 'このサーバーのビルド詳細を更新しました。一部の変更は反映に再起動が必要です。',
        'suspension_toggled' => 'サーバーの停止状態を :status に変更しました。',
        'rebuild_on_boot' => 'このサーバーは Docker コンテナの再ビルドが必要としてマークされました。次回サーバー起動時に実行されます。',
        'install_toggled' => 'このサーバーのインストール状態を切り替えました。',
        'server_reinstalled' => 'このサーバーの再インストールをキューに入れました。',
        'details_updated' => 'サーバー詳細を更新しました。',
        'docker_image_updated' => 'このサーバーで使用する既定の Docker イメージを変更しました。反映には再起動が必要です。',
        'node_required' => 'このパネルにサーバーを追加する前に、少なくとも 1 つのノードを設定する必要があります。',
        'transfer_nodes_required' => 'サーバー転送には、少なくとも 2 つのノードが必要です。',
        'transfer_started' => 'サーバー転送を開始しました。',
        'transfer_not_viable' => '選択したノードには、このサーバーを収容するために必要なディスク容量またはメモリがありません。',
    ],
];

