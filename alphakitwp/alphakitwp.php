<?php
/**
 * Plugin Name: AlphaKit WP
 * Description: A codebase to derive high functioning PHP Code and WordPress Plugins from. AlphaKit includes a neat little kit of useful WordPress tools and related software components.
 * Author: Phillip Richdale
 * License: MIT
 * PHP version 7
 *
 * @category WordPress
 * @package  AlphaKit
 * @author   Phillip Richdale <office@richdale.de>
 * @license  MIT https://github.com/PhillipRichdale/AlphaKit/blob/master/LICENSE
 * @link     https://github.com/PhillipRichdale/AlphaKit
 */

if (!defined('ABSPATH')) {
    die;
}

require_once __DIR__ . "/classes/AlphaKit.php";
require_once __DIR__ . "/classes/AlphaKitPict.php";
global $AlphaKit;
global $wpdb;
$AlphaKit = new \AlphaKit\AlphaKit($wpdb);
$AlphaKitPict = new \AlphaKit\AlphaKitPict();

//add_action( 'network_admin_menu', 'AlphaKit_menu');
add_action('admin_menu', 'AlphaKit_menu');
add_action('admin_enqueue_scripts', 'AlphaKit_load_frontend_scripts');

/**
 * Show WP menu entry for AlphaKitWp
 *
 * @return void
 */
function AlphaKit_menu()
{
    $menuIndent = "&#8226;&nbsp;";
    global $AlphaKitPict;
    add_menu_page(
        "Overview",              // page title
        "AlphaKit",              // menu title
        "manage_options",        // capability (WP privilege)
        "alphakit",              // menu entry slug
        'AlphaKit_show_options', // function to call
        ''.$AlphaKitPict->get(), // icon
        $position = null         // position in the menu
    );
    add_submenu_page(
        "alphakit",
        "Overview",
        $menuIndent."Overview",
        "manage_options",
        "alphakit",
        "AlphaKit_show_options"
    );
    add_submenu_page(
        "alphakit",
        "Della",
        $menuIndent."Della",
        "manage_options",
        "alphakit-della",
        "AlphaKit_show_della"
    );
    add_submenu_page(
        "alphakit",
        "FileList",
        $menuIndent."FileList",
        "manage_options",
        "alphakit-filelist",
        "AlphaKit_show_filelist"
    );
    add_submenu_page(
        "alphakit",
        "PlugList",
        $menuIndent."PlugList",
        "manage_options",
        "alphakit-pluglist",
        "AlphaKit_show_pluglist"
    );
}

/**
 * Display the options view for the WP admin Dashboard
 *
 * @return void
 */
function AlphaKit_show_options()
{
    add_action('admin_enqueue_scripts', 'AlphaKit_load_frontend_scripts');
    AlphaKit_setDashboardStyle();
    include_once "alphaKitUi.php";
}

/**
 *
 */
function AlphaKit_show_della()
{
    AlphaKit_setDashboardStyle();
    include_once "della/AlphaKit_Della_Ui.php";
}

/**
 *
 */
function AlphaKit_show_filelist()
{
    AlphaKit_setDashboardStyle();
    //include_once "filelist/AlphaKit_FileList_Ui.php";
    AlphaKit_FileList_show_options();
}

/**
 *
 */
function AlphaKit_show_pluglist()
{
    AlphaKit_setDashboardStyle();
    include_once "pluglist/AlphaKit_PlugList.php";
    AlphaKit_PlugList_genTotalView();
}

/**
 *
 */
function AlphaKit_show_dbmanager()
{
    AlphaKit_setDashboardStyle();
    include_once "pluglist/AlphaKit_PlugList.php";
    AlphaKit_PlugList_genTotalView();
}

/**
 * Adds the base AlphaKit client.js to the Dashboard scripts
 *
 * @return void
 */
function AlphaKit_load_frontend_scripts()
{
    wp_enqueue_script('alphakit_js', plugins_url()."/alphakitwp/client.js", ['wp-element'], time(), true);
}

function AlphaKit_setDashboardStyle()
{
    wp_register_style("bootstrap", plugins_url()."/alphakitwp/bootstrap/bootstrap.min.css");
    wp_enqueue_style('bootstrap');
    wp_register_style("alphastyle", plugins_url()."/alphakitwp/style.css");
    wp_enqueue_style('alphastyle');
}

/**
 * Searches WP posts by slug, returns a WP post object or an array of WP post objects or null, which validates to false
 *
 * @param string $postName The posts slug-name
 *
 * @return WP_Post or boolean
 */
function AlphaKit_getPostBySlug($postName)
{
    global $wpdb;
    $post = $wpdb->get_var($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE postName = %s", $postName));

    return $post ? get_post($post) : null;
}

add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});


require_once "filelist/AlphaKit_FileList_GenerateShellScripts.php";
require_once "filelist/AlphaKit_FileList.php";
