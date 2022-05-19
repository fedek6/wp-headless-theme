<?php

/**
 * Theme support.
 */
add_action('after_setup_theme', function () {
    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    add_theme_support("menus");
});

/**
 * Add menu.
 */
add_action('init', function () {
    register_nav_menu("main-menu", "Main menu");
});
