<?php

function cb_register_taxes()
{
    $args = [
        "labels" => [
            "name" => __("Event Types", "cb-afiniti"),
            "singular_name" => __("Event Type", "cb-afiniti"),
        ],
        "public" => true,
        "publicly_queryable" => false,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => false,
        "show_admin_column" => true,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "show_in_quick_edit" => true,
    ];
    register_taxonomy("etype", [ "whatson" ], $args);
}
add_action('init', 'cb_register_taxes');
