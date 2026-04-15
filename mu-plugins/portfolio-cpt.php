<?php
/**
 * Plugin Name: Onsite Solution - Portfolio CPT
 * Description: ポートフォリオ用カスタム投稿タイプ
 * Version: 1.0.1
 */
add_action('init', function () {
    register_post_type('portfolio', [
        'label' => 'ポートフォリオ',
        'labels' => [
            'name' => 'ポートフォリオ',
            'singular_name' => 'ポートフォリオ',
            'add_new' => '新規追加',
            'add_new_item' => '新しい実績を追加',
            'edit_item' => '実績を編集',
            'all_items' => 'すべての実績',
            'menu_name' => 'ポートフォリオ',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'portfolio'],
        'taxonomies' => ['portfolio_category'],
    ]);

    register_taxonomy('portfolio_category', 'portfolio', [
        'label' => 'カテゴリー',
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'portfolio-category'],
    ]);
});
