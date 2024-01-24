<?php

return [
    'shield_resource' => [
        'should_register_navigation' => true,
        'slug' => 'shield/roles',
        'navigation_sort' => -1,
        'navigation_badge' => true,
        'navigation_group' => true,
        'is_globally_searchable' => false,
        'show_model_path' => true,
        'is_scoped_to_tenant' => true,
    ],

    'auth_provider_model' => [
        'fqcn' => 'App\\Models\\User',
    ],

    'super_admin' => [
        'enabled' => true,
        'name' => 'super_admin',
        'define_via_gate' => false,
        'intercept_gate' => 'before', // after
    ],

    'panel_user' => [
        'enabled' => true,
        'name' => 'panel_user',
    ],

    // View： 查看單一資源的權限。通常與擁有者的角色相關聯，表示使用者可以查看自己擁有的資源。
    // View Any： 查看所有資源的權限。與 View 不同，這允許使用者查看所有資源，而不受擁有者的限制。
    // Create： 創建新資源的權限。使用者可以創建新的資源，例如創建新的文章或創建新的使用者帳戶。
    // Update： 更新單一資源的權限。允許使用者修改或更新自己擁有的資源。
    // Restore： 還原被軟刪除（軟刪除）的資源。當資源被標記為已刪除時，具有 Restore 權限的使用者可以將其還原。
    // Restore Any： 還原所有資源的權限。與 Restore 不同，這允許使用者還原所有資源，而不僅僅是自己的。
    // Replicate： 複製資源的權限。使用者可以複製現有的資源以創建新的副本。
    // Reorder： 重新排序資源的權限。通常用於需要排序的列表或順序性資源。
    // Delete： 刪除單一資源的權限。允許使用者刪除自己擁有的資源。
    // Delete Any： 刪除所有資源的權限。與 Delete 不同，這允許使用者刪除所有資源，而不僅僅是自己的。
    // Force Delete： 強制永久刪除被軟刪除的資源。當資源被軟刪除時，使用者可以使用此權限永久刪除它，而不是僅還原。
    // Force Delete Any： 強制永久刪除所有資源的權限。與 Force Delete 不同，這允許使用者永久刪除所有資源，而不僅僅是自己的。
    'permission_prefixes' => [
        'resource' => [
            'view',
            'view_any',
            'create',
            'update',
            'restore',
            'restore_any',
            'replicate',
            'reorder',
            'delete',
            'delete_any',
            'force_delete',
            'force_delete_any',
        ],

        'page' => 'page',
        'widget' => 'widget',
    ],

    'entities' => [
        'pages' => true,
        'widgets' => true,
        'resources' => true,
        'custom_permissions' => false,
    ],

    'generator' => [
        'option' => 'policies_and_permissions',
        'policy_directory' => 'Policies',
    ],

    'exclude' => [
        'enabled' => true,

        'pages' => [
            'Dashboard',
        ],

        'widgets' => [
            'AccountWidget', 'FilamentInfoWidget',
        ],

        'resources' => [],
    ],

    'discovery' => [
        'discover_all_resources' => false,
        'discover_all_widgets' => false,
        'discover_all_pages' => false,
    ],

    'register_role_policy' => [
        'enabled' => false,
    ],

];
