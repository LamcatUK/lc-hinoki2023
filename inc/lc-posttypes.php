<?php

function cb_register_post_types()
{
    /**
     * Post Type: Testimonials.
     */

    $labels = [
       "name" => esc_html__("What's On", "lc-hinoki2023"),
       "singular_name" => esc_html__("Event", "lc-hinoki2023"),
    ];

    $args = [
        "label" => esc_html__("Events", "lc-hinoki2023"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => true,
        "rewrite" => false,
        "query_var" => true,
        "supports" => [ "custom-fields" ],
        "show_in_graphql" => false,
    ];

    register_post_type("whatson", $args);
}

add_action('init', 'cb_register_post_types');


function set_custom_title($post_id)
{
    if (get_post_type($post_id) != 'whatson') {
        return;
    }
    if (isset($_POST['acf']['field_63fb5ac75e86d']) ?? null) {
        $post_title = 'Event: ' . $_POST['acf']['field_63fb5ac75e86d'];
        if ($_POST['acf']['field_63fb5e8cc21ba'] != '') {
            $post_title .= ' - ' . $_POST['acf']['field_63fb5e8cc21ba'];
        }
        $slug = sanitize_title($post_title);
    }

    $post = array(
        'ID'           => $post_id,
        'post_title'   => $post_title,
        'post_name'    => $slug,
    );

    wp_update_post($post);
}
add_filter('acf/save_post', 'set_custom_title', 5);

function add_acf_columns($columns)
{
    return array_merge($columns, array(
      'start_date' => __('Start'),
      'end_date' => __('End'),
    ));
}
add_filter('manage_whatson_posts_columns', 'add_acf_columns');

function whatson_custom_column($column, $post_id)
{
    switch ($column) {
        case 'start_date':
            $date = strtotime(get_post_meta($post_id, 'start_date', true));
            echo date('jS M Y', $date);
            break;
        case 'end_date':
            if (get_post_meta($post_id, 'end_date', true)) {
                $date = strtotime(get_post_meta($post_id, 'end_date', true));
                echo date('jS M Y', $date);
            }
            break;
    }
}
add_action('manage_whatson_posts_custom_column', 'whatson_custom_column', 10, 2);
