<?php
function makeCpt()
{
    register_post_type(
    // (string) (Required) Post type key. Must not exceed 20 characters and may only contain lowercase
    // alphanumeric characters, dashes, and underscores. See sanitize_key().
        'allg_auswertungstext',
        array(
            // (string) Name of the post type shown in the menu. Usually plural. Default is value of $labels['name'].
            'label' => 'Allgemeine Auswertungstexte',

            // (array) An array of labels for this post type. If not set, post labels are inherited for non-hierarchical
            // types and page labels for hierarchical ones. See get_post_type_labels() for a full list of supported labels.

            'labels' => array(

                // – General name for the post type, usually plural. The same and overridden by $post_type_object->label.
                // Default is ‘Posts’ / ‘Pages’.
                'name' => '',

                // – Name for one object of this post type. Default is ‘Post’ / ‘Page’.
                'singular_name' => '',

                // – Default is ‘Add New’ for both hierarchical and non-hierarchical types. When internationalizing this
                // string, please use a gettext context matching your post type.
                // Example: _x( 'Add New', 'product', 'textdomain' );.
                'add_new' => '',

                // – Label for adding a new singular item. Default is ‘Add New Post’ / ‘Add New Page’.
                'add_new_item' => '',

                // – Label for editing a singular item. Default is ‘Edit Post’ / ‘Edit Page’.
                'edit_item' => '',

                // – Label for the new item page title. Default is ‘New Post’ / ‘New Page’.
                'new_item' => '',

                // – Label for viewing a singular item. Default is ‘View Post’ / ‘View Page’.
                'view_item' => '',

                // – Label for viewing post type archives. Default is ‘View Posts’ / ‘View Pages’.
                'view_items' => '',

                // – Label for searching plural items. Default is ‘Search Posts’ / ‘Search Pages’.
                'search_items' => '',

                // – Label used when no items are found. Default is ‘No posts found’ / ‘No pages found’.
                'not_found' => '',

                // – Label used when no items are in the trash.
                // Default is ‘No posts found in Trash’ / ‘No pages found in Trash’.
                'not_found_in_trash' => '',

                // – Label used to prefix parents of hierarchical items.
                // Not used on non-hierarchical post types. Default is ‘Parent Page:’.
                'parent_item_colon' => '',

                // – Label to signify all items in a submenu link. Default is ‘All Posts’ / ‘All Pages’.
                'all_items' => '',

                // – Label for archives in nav menus. Default is ‘Post Archives’ / ‘Page Archives’.
                'archives' => '',

                // – Label for the attributes meta box. Default is ‘Post Attributes’ / ‘Page Attributes’.
                'attributes' => '',

                // – Label for the media frame button. Default is ‘Insert into post’ / ‘Insert into page’.
                'insert_into_item' => '',

                // – Label for the media frame filter. Default is ‘Uploaded to this post’ / ‘Uploaded to this page’.
                'uploaded_to_this_item' => '',

                // – Label for the Featured Image meta box title. Default is ‘Featured Image’.
                'featured_image' => '',

                // – Label for setting the featured image. Default is ‘Set featured image’.
                'set_featured_image' => '',

                // – Label for removing the featured image. Default is ‘Remove featured image’.
                'remove_featured_image' => '',

                // – Label in the media frame for using a featured image. Default is ‘Use as featured image’.
                'use_featured_image' => '',

                // – Label for the menu name. Default is the same as name.
                'menu_name' => '',

                // – Label for the table views hidden heading. Default is ‘Filter posts list’ / ‘Filter pages list’.
                'filter_items_list' => '',

                // – Label for the table pagination hidden heading. Default is ‘Posts list navigation’ / ‘Pages list navigation’.
                'items_list_navigation' => '',

                // – Label for the table hidden heading. Default is ‘Posts list’ / ‘Pages list’.
                'items_list' => '',

                // – Label used when an item is published. Default is ‘Post published.’ / ‘Page published.’
                'item_published' => '',

                // – Label used when an item is published with private visibility.
                // Default is ‘Post published privately.’ / ‘Page published privately.’
                'item_published_privately' => '',

                // – Label used when an item is switched to a draft. Default is ‘Post reverted
                // to draft.’ / ‘Page reverted to draft.’
                'item_reverted_to_draft' => '',

                // – Label used when an item is scheduled for publishing. Default is ‘Post scheduled.’ / ‘Page scheduled.’
                'item_scheduled' => '',

                // – Label used when an item is updated. Default is ‘Post updated.’ / ‘Page updated.’
                'item_updated' => '',
            ),

            // (string) A short descriptive summary of what the post type is.
            'description' => '',

            // (bool) Whether a post type is intended for use publicly either via the admin interface or by front-end
            // users. While the default settings of $exclude_from_search, $publicly_queryable, $show_ui, and
            // $show_in_nav_menus are inherited from public, each does not rely on this relationship and controls
            // a very specific intention. Default false.
            'public' => '',

            // (bool) Whether the post type is hierarchical (e.g. page). Default false.
            'hierarchical' => '',

            // (bool) Whether to exclude posts with this post type from front end search results.
            // Default is the opposite value of $public.
            'exclude_from_search' => '',

            // (bool) Whether queries can be performed on the front end for the post type as part of parse_request().
            // Endpoints would include:
            // * ?post_type={post_type_key}* ?{post_type_key}={single_post_slug}* ?{post_type_query_var}={single_post_slug}
            // If not set, the default is inherited from $public.
            'publicly_queryable' => '',

            // (bool) Whether to generate and allow a UI for managing this post type in the admin. Default is value of $public.
            'show_ui' => '',

            // (bool) Where to show the post type in the admin menu. To work, $show_ui must be true. If true, the post
            // type is shown in its own top level menu. If false, no menu is shown. If a string of an existing top level
            // menu (eg. 'tools.php' or 'edit.php?post_type=page'), the post type will be placed as a sub-menu of that.
            // Default is value of $show_ui.
            'show_in_menu' => '',

            // (bool) Makes this post type available for selection in navigation menus. Default is value $public.
            'show_in_nav_menus' => '',

            // (bool) Makes this post type available via the admin bar. Default is value of $show_in_menu.
            'show_in_admin_bar' => '',

            // (bool) Whether to add the post type route in the REST API 'wp/v2' namespace.
            'show_in_rest' => '',

            // (string) To change the base url of REST API route. Default is $post_type.
            'rest_base' => '',

            // (string) REST API Controller class name. Default is 'WP_REST_Posts_Controller'.
            'rest_controller_class' => '',

            // ( int) The position in the menu order the post type should appear. To work, $show_in_menu must be true.
            // Default null (at the bottom).
            'menu_position' => '',

            // (string) The url to the icon to be used for this menu. Pass a base64-encoded SVG using a data URI, which
            // will be colored to match the color scheme -- this should begin with 'data:image/svg+xml;base64,'. Pass the
            // name of a Dashicons helper class to use a font icon, e.g. 'dashicons-chart-pie'. Pass 'none' to leave
            // div.wp-menu-image empty so an icon can be added via CSS. Defaults to use the posts icon.
            'menu_icon' => '',

            // (string) The string to use to build the read, edit, and delete capabilities. May be passed as an array to
            // allow for alternative plurals when using this argument as a base to construct the capabilities, e.g.
            // array('story', 'stories'). Default 'post'.
            'capability_type' => '',

            // (array) Array of capabilities for this post type. $capability_type is used as a base to construct
            // capabilities by default. See get_post_type_capabilities().
            'capabilities' => '',

            // (bool) Whether to use the internal default meta capability handling. Default false.
            'map_meta_cap' => '',

            // (array) Core feature(s) the post type supports. Serves as an alias for calling add_post_type_support()
            // directly. Core features include 'title', 'editor', 'comments', 'revisions', 'trackbacks', 'author',
            // 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', and 'post-formats'. Additionally, the
            // 'revisions' feature dictates whether the post type will store revisions, and the 'comments' feature
            // dictates whether the comments count will show on the edit screen. Defaults is an array containing
            // 'title' and 'editor'.
            'supports' => array(),

            // (callable) Provide a callback function that sets up the meta boxes for the edit form. Do remove_meta_box()
            // and add_meta_box() calls in the callback. Default null.
            'register_meta_box_cb' => '',

            // (array) An array of taxonomy identifiers that will be registered for the post type. Taxonomies can be
            // registered later with register_taxonomy() or register_taxonomy_for_object_type().
            'taxonomies' => '',

            // ( bool|string) Whether there should be post type archives, or if a string, the archive slug to use. Will
            // generate the proper rewrite rules if $rewrite is enabled. Default false.
            'has_archive' => '',

            // ( bool|array) Triggers the handling of rewrites for this post type. To prevent rewrite, set to false.
            // Defaults to true, using $post_type as slug. To specify rewrite rules, an array can be passed with any of these keys:
            'rewrite' => '',

            // (string) Customize the permastruct slug. Defaults to $post_type key.
            'slug' => '',

            // (bool) Whether the permastruct should be prepended with WP_Rewrite::$front. Default true.
            'with_front' => '',

            // (bool) Whether the feed permastruct should be built for this post type. Default is value of $has_archive.
            'feeds' => '',

            // (bool) Whether the permastruct should provide for pagination. Default true.
            'pages' => '',

            // (const) Endpoint mask to assign. If not specified and permalink_epmask is set, inherits from $permalink_epmask.
            // If not specified and permalink_epmask is not set, defaults to EP_PERMALINK.
            'ep_mask' => '',

            // (string|bool) Sets the query_var key for this post type. Defaults to $post_type key. If false, a post type
            // cannot be loaded at ?{query_var}={post_slug}. If specified as a string,
            // the query ?{query_var_string}={post_slug} will be valid.
            'query_var' => '',

            // (bool) Whether to allow this post type to be exported. Default true.
            'can_export' => '',

            // (bool) Whether to delete posts of this type when deleting a user. If true, posts of this type belonging to
            //  the user will be moved to trash when then user is deleted. If false, posts of this type belonging to the
            // vuser will *not* be trashed or deleted. If not set (the default), posts are trashed if
            // post_type_supports('author'). Otherwise posts are not trashed or deleted. Default null.
            'delete_with_user' => '',

            // (bool) FOR INTERNAL USE ONLY! True if this post type is a native or "built-in" post_type. Default false.
            '_builtin' => '',

            // (string) FOR INTERNAL USE ONLY! URL segment to use for edit link of this post type. Default 'post.php?post=%d'.
            '_edit_link' => ''
        )
    );
}