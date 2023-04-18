<?php

/**
 * --------------------------------------------------------------------------------
 * Theme Customization Options
 * --------------------------------------------------------------------------------
 */
require_once(get_template_directory() . '/customize/customize.php');

if (!function_exists('open_portfolio_theme')):
    /**
     * Sets up theme defaults and registers support for various WordPress  
     * features.
     *
     * It is important to set up these functions before the init hook so
     * that none of these features are lost.
     *
     *  @since Open Portfolio Theme 1.0
     */
    function open_portfolio_theme()
    {
        /* Register Nav Menu */
        register_nav_menus(
            array(
                'primary' => __('Primary Menu', 'open_portfolio_theme')
            )
        );


        /* Add Featured Image Support */
        add_theme_support('post-thumbnails');


        // Sidebars
        register_sidebar(
            array(
                'name' => __('footerbar', 'open_portfolio_theme'),
                'id' => 'footerbar',
            )
        );


    }
endif; // open_portfolio_theme
add_action('after_setup_theme', 'open_portfolio_theme');


// Function to change "posts" to "Portfolio Items" in the admin side menu
function change_post_menu_label()
{
    global $menu;
    global $submenu;
    $menu[5][0] = 'Portfolio Items';
    $submenu['edit.php'][5][0] = 'Portfolio Items';
    $submenu['edit.php'][10][0] = 'Add Portfolio Item';
    $submenu['edit.php'][16][0] = 'Tags';
    echo '';
}
add_action('admin_menu', 'change_post_menu_label');
// Function to change post object labels to "news"
function change_post_object_label()
{
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Portfolio Items';
    $labels->singular_name = 'Portfolio Item';
    $labels->add_new = 'Add Portfolio Item';
    $labels->add_new_item = 'Add Portfolio Item';
    $labels->edit_item = 'Edit Portfolio Item';
    $labels->new_item = 'Portfolio Item';
    $labels->view_item = 'View Portfolio Item';
    $labels->search_items = 'Search Portfolio Items';
    $labels->not_found = 'No Portfolio Items found';
    $labels->not_found_in_trash = 'No Portfolio Items found in Trash';
}
add_action('init', 'change_post_object_label');