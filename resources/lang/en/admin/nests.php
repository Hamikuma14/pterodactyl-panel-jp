<?php

return [
    'notices' => [
        'created' => '新しい Nest「:name」を作成しました。',
        'deleted' => '指定された Nest をパネルから削除しました。',
        'updated' => 'Nest の設定オプションを更新しました。',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'この Egg と関連する変数をインポートしました。',
            'updated_via_import' => '指定されたファイルを使用してこの Egg を更新しました。',
            'deleted' => '指定された Egg をパネルから削除しました。',
            'updated' => 'Egg の設定を更新しました。',
            'script_updated' => 'Egg のインストールスクリプトを更新しました。サーバーのインストール時に実行されます。',
            'egg_created' => '新しい Egg を作成しました。この Egg を適用するには、稼働中のデーモンを再起動する必要があります。',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '変数「:variable」を削除しました。再ビルド後、この変数はサーバーで利用できなくなります。',
            'variable_updated' => '変数「:variable」を更新しました。変更を適用するには、この変数を使用しているサーバーを再ビルドしてください。',
            'variable_created' => '新しい変数を作成し、この Egg に割り当てました。',
        ],
    ],
];

