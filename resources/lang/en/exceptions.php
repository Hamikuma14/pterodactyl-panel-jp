<?php

return [
    'daemon_connection_failed' => 'デーモンとの通信中に例外が発生し、HTTP/:code のレスポンスコードが返されました。この例外はログに記録されています。',
    'node' => [
        'servers_attached' => 'ノードを削除するには、そのノードに紐付くサーバーが存在しない必要があります。',
        'daemon_off_config_updated' => 'デーモン設定は <strong>更新されました</strong> が、デーモン上の設定ファイルを自動更新する際にエラーが発生しました。変更を適用するには、デーモンの設定ファイル (config.yml) を手動で更新してください。',
    ],
    'allocations' => [
        'server_using' => '現在この割り当てにサーバーが割り当てられています。割り当てはサーバーが割り当てられていない場合にのみ削除できます。',
        'too_many_ports' => '1 つの範囲で一度に 1000 を超えるポートを追加することはサポートされていません。',
        'invalid_mapping' => ':port に対して指定されたマッピングが無効で、処理できませんでした。',
        'cidr_out_of_range' => 'CIDR 表記のマスクは /25 から /32 のみ指定できます。',
        'port_out_of_range' => '割り当てのポートは 1024 より大きく、65535 以下である必要があります。',
    ],
    'nest' => [
        'delete_has_servers' => '稼働中のサーバーが紐付いている Nest はパネルから削除できません。',
        'egg' => [
            'delete_has_servers' => '稼働中のサーバーが紐付いている Egg はパネルから削除できません。',
            'invalid_copy_id' => 'スクリプトのコピー元として選択された Egg が存在しないか、またはそれ自体がスクリプトをコピーする設定になっています。',
            'must_be_child' => 'この Egg の「設定のコピー元」指定は、選択された Nest の子オプションである必要があります。',
            'has_children' => 'この Egg は 1 つ以上の子 Egg の親です。この Egg を削除する前に子 Egg を削除してください。',
        ],
        'variables' => [
            'env_not_unique' => '環境変数 :name はこの Egg 内で一意である必要があります。',
            'reserved_name' => '環境変数 :name は保護されているため変数に割り当てできません。',
            'bad_validation_rule' => 'バリデーションルール「:rule」はこのアプリケーションで有効なルールではありません。',
        ],
        'importer' => [
            'json_error' => 'JSON ファイルの解析中にエラーが発生しました: :error。',
            'file_error' => '指定された JSON ファイルは無効でした。',
            'invalid_json_provided' => '指定された JSON ファイルは認識できる形式ではありません。',
        ],
    ],
    'subusers' => [
        'editing_self' => '自分自身のサブユーザーアカウントを編集することはできません。',
        'user_is_owner' => 'サーバーオーナーをこのサーバーのサブユーザーとして追加することはできません。',
        'subuser_exists' => 'そのメールアドレスのユーザーは既にこのサーバーのサブユーザーとして割り当てられています。',
    ],
    'databases' => [
        'delete_has_databases' => 'アクティブなデータベースが紐付いているデータベースホストサーバーは削除できません。',
    ],
    'tasks' => [
        'chain_interval_too_long' => '連鎖タスクの最大インターバルは 15 分です。',
    ],
    'locations' => [
        'has_nodes' => 'アクティブなノードが紐付いているロケーションは削除できません。',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">ノード #:node</a> のキー取り消しに失敗しました。:error',
    ],
    'deployment' => [
        'no_viable_nodes' => '自動デプロイの要件を満たすノードが見つかりませんでした。',
        'no_viable_allocations' => '自動デプロイの要件を満たす割り当てが見つかりませんでした。',
    ],
    'api' => [
        'resource_not_found' => '要求されたリソースはこのサーバーに存在しません。',
    ],
];

