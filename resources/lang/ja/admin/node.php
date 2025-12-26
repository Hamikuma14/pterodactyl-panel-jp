<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => '指定された FQDN または IP アドレスは有効な IP アドレスに解決されません。',
        'fqdn_required_for_ssl' => 'このノードで SSL を使用するには、公開 IP アドレスに解決される完全修飾ドメイン名が必要です。',
    ],
    'notices' => [
        'allocations_added' => '割り当てをこのノードに追加しました。',
        'node_deleted' => 'ノードをパネルから削除しました。',
        'location_required' => 'このパネルにノードを追加する前に、少なくとも 1 つのロケーションを設定する必要があります。',
        'node_created' => '新しいノードを作成しました。\'構成\' タブから、このマシン上のデーモンを自動構成できます。<strong>サーバーを追加する前に、少なくとも 1 つの IP アドレスとポートを割り当てる必要があります。</strong>',
        'node_updated' => 'ノード情報を更新しました。デーモン設定を変更した場合は、反映のため再起動が必要です。',
        'unallocated_deleted' => '<code>:ip</code> の未割り当てポートをすべて削除しました。',
    ],
];

