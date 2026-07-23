<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


class YTK_Post_Grid {


    public function __construct() {

        add_shortcode(
            'ytk_posts_grid',
            [$this, 'render']
        );


        add_action(
            'wp_enqueue_scripts',
            [$this, 'enqueue_assets']
        );

    }



    public function enqueue_assets() {


        wp_enqueue_style(
            'ytk-post-grid-css',
            plugin_dir_url(__FILE__) . 'assets/css/posts-grid.css',
            [],
            '1.0.0'
        );


        wp_enqueue_script(
            'ytk-post-grid-js',
            plugin_dir_url(__FILE__) . 'assets/js/posts-grid.js',
            [],
            '1.0.0',
            true
        );

    }



    public function render($atts) {

        
    $atts = shortcode_atts(
        [
            'posts' => 6,
            'columns' => 3,
            'category' => '',
        ],
        $atts,
        'ytk_posts_grid'
    );


        $args = [
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => intval($atts['posts']),
        ];

        if (!empty($atts['category'])) {

            $args['category_name'] = sanitize_text_field($atts['category']);

        }

        


        $query = new WP_Query($args);

        $columns = max(1, min(6, intval($atts['columns'])));


        ob_start();


        if ($query->have_posts()) {


            include plugin_dir_path(__FILE__) . 'templates/grid.php';


        } else {


            echo 'No posts found';


        }


        wp_reset_postdata();


        return ob_get_clean();

    }


}