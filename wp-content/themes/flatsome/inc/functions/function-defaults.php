<?php

// Set Default Flatsome Options
if(!function_exists('flatsome_defaults')){
  function flatsome_defaults($option) {
    $df = array(
      // Blog
      'blog_layout' => 'right-sidebar',
      'blog_layout_divider' => 1,
      'blog_style' => 'normal',
      'blog_posts_title_align' => 'center',
      'blog_post_layout' => 'right-sidebar',
      'blog_author_box' => 1,
      'blog_share' => 1,
      'bubble_style' => 'style1',
      'pages_template' => 'default',
      'dropdown_style' => 'default',
      'wc_category_page_title' => 0,
      'body_bg_type' => 'bg-tiled',
      'wc_category_list_toggle' => 0,
      'blog_featured_height' => 500,
      'header_button_1' => 'Button 1',
      'header_button_1_link' => '#',
      'header_button_1_radius' => '99px',
      'header_button_1_color' => 'primary',
      'header_button_2' => 'Button 2',
      'header_button_2_radius' => '99px',
      'header_button_2_color' => 'secondary',
      'header_button_2_style' => 'outline',
      'header_buttons_mobile' => 1,
      'pages_title_bg_featured' => 1,
      'category_sidebar' => 'left-sidebar',
      'wishlist_title' => 1,
      'wishlist_icon_size' => '24px',
      'header_bg_transparent_shade' => 0,
      'blog_archive_title' => 1,
      'wishlist_icon' => 'heart',
      // Top bar
      'flatsome_lightbox' => 1,
      'nav_style_top' => 'divided',
      'topbar_left' => '<strong class="uppercase">Add anything here or just remove it...</strong>',
      'account_login_style' => 'lightbox',
      'social_icons' => array('facebook','twitter','email','linkedin','pinterest','whatsapp'),
      'social_icons_style' => 'outline',
      'nav_uppercase' => 1,
      'blog_badge_style' => 'outline',
      'flatsome_portfolio' => 1,
      'topbar_right' => '',
      'breadcrumb_size' => 'large',
      'product_hover' => 'fade_in_back',
      'product_info_share' => 1,
      'product_info_meta' => 1,
      'header_shop_bg_featured' => 1,
      'back_to_top' => 1,
      'product_info_divider' => 1,
      'blog_posts_header_style' => 'normal',
      'blog_post_style' => 'default',
      // Main header
      'header_sticky' => 1,
      'disable_quick_view' => 0,
      'product_box_rating' => 1,
      'product_box_category' => 1,
      'site_logo' => get_template_directory_uri().'/assets/img/logo.png',
      'mobile_overlay' => 'left',
      'topbar_align' => 'left',
      'top_right_text' => '',
      'nav_position_text_top' => '',
      'header_shop_bg_color' => 'rgba(0,0,0,.3)',
      'header_height' => 90,
      'header_height_sticky' => 70,
      'header_color' => 'light',
      'box_shadow_header' => 0,
      'footer_2_color' => 'dark',
      'header_content_push' => 1,
      'category_row_count_mobile' => 2,
      'category_row_count_tablet' => 3,
      'products_pr_page' => 12,
      'category_row_count' => 3,
      'cart_icon' => 'basket',
      'account_icon' => 'disabled',
      'header_account_title' => 1,
      'header_bg_img' => '',
      'header_bg_img_repeat' => 'repeat-x',
      'nav_style_main' => 'nav-uppercase',
      'google_map_api' => '',
      'nav_size' => '',
      'nav_spacing' => '',
      'deparments_menu_label' => 'Departments',
      // Bottom bar
      'bottombar_sticky' => 1,
      'bottombar_left' => '',
      'nav_position_text' => '',
      'cat_style' => 'badge',
      'category_grid_style' => 'grid',
      'nav_position' => 'top',
      'nav_position_color' => 'light',
      'header_contact_visibility' => 0,
      'header_height_mobile' => 70,
      //'custom_cart_icon' => '',
      'header_cart_style' => 'dropdown',
      'related_products' => 'slider',
      'related_products_pr_row' => '4',
      'header_cart_total' => 1,
      'header_cart_title' => 1,
      'continue_shopping' => 1,
      // Follow icons
      'follow_style' => 'small',
      'follow_facebook' => 'https://yoururl',
      'follow_twitter' => 'https://yoururl',
      'follow_instagram' => 'https://yoururl',
      'portfolio_archive_filter' => 'left',
      'portfolio_archive_filter_style' => 'line-grow',
      'header_search_style' => 'dropdown',
      'contact_style' => 'left',
      'contact_icon_size' => '16px',
      'contact_phone' => '+47 900 99 000',
      'contact_email' => 'youremail@gmail.com',
      'type_headings' => array('font-family'=> 'Lato','variant' => '700'),
      'type_texts' => array('font-family'=> 'Lato','variant' => 'regular'),
      'type_nav' => array('font-family'=> 'Lato','variant' => '700'),
      'type_alt' => array('font-family'=> 'Dancing Script','variant' => 'regular'),
      'nav_uppercase_bottom' => 1,
      'breadcrumb_title_pos' => 'left',
      'breadcrumb_nav_pos' => 'right',
      'product_image_width' => '6',
      'product_sidebar_width' => '2',
      'blog_show_excerpt' => 1,
      'wc_account_links' => 1,
      'footer_left_text' => 'Copyright [ux_current_year] &copy; <strong>Flatsome Theme</strong>',
      'product_upsell' => 'sidebar',
      'footer_1_columns' => '4',
      'footer_2_columns' => '4',
      'footer_bottom_text' => 'dark',
      // Optimize
      'lazy_load_backgrounds' => 1,
      'lazy_load_scripts' => 0,
      'payment_icons' => array('visa','paypal','stripe','mastercard','cashondelivery'),
    );

    // Return default option if not empty
    if(!empty($df[$option])) return $df[$option];
  };
}
