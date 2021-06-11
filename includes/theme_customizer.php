<?php 

    function photographer_customize_register($wp_customize){

        // Header Panel

        $wp_customize->add_panel('photographer_header', array(
            'title' => __('Header', 'photographer'),
            'description' => __('Footer options.', 'tphotographer'),
            'priority' => 35
        ));

        // Navigation Bar Options

        $wp_customize -> add_section('photographer_navbar_options', array(
            'title' => __('Navigation Bar Options', 'photographer'),
            'description' => __('Select a background color for your navigation bar. This option only works on pages that do not have a fixed menu. If you want to change that option, you have to change it with css ussing the class "nav-bg".', 'photographer'),
            'priority' => 10,
            'panel' => 'photographer_header'
        ));

        // Navigation Bar Background Color

        $wp_customize -> add_setting('photographer_settings[navbar_color]', array(
            'default' => '#222222',
            'sanitize_callback' => 'sanitize_hex_color',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_color', array(
            'label' => __('Navigation Bar Background', 'photographer'),
            'section' => 'photographer_navbar_options',
            'settings' => 'photographer_settings[navbar_color]'
        )));
        
        // Footer Panel

        $wp_customize->add_panel('photographer_footer', array(
            'title' => __('Footer', 'photographer'),
            'description' => __('Footer options.', 'tphotographer'),
            'priority' => 105
        ));

        // Footer Options

        $wp_customize -> add_section('photographer_footer_options', array(
            'title' => __('Footer Options', 'photographer'),
            'description' => __('Select a background color for your footer.', 'photographer'),
            'priority' => 10,
            'panel' => 'photographer_footer'
        ));

        // Footer Background Color

        $wp_customize -> add_setting('photographer_settings[footer_color]', array(
            'default' => '#222222',
            'sanitize_callback' => 'sanitize_hex_color',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'footer_color', array(
            'label' => __('Footer Background', 'photographer'),
            'section' => 'photographer_footer_options',
            'settings' => 'photographer_settings[footer_color]'
        )));

        // Footer Media

        $wp_customize -> add_section('photographer_footer_media', array(
            'title' => __('Footer Media', 'photographer'),
            'description' => __('Footer media options.', 'photographer'),
            'priority' => 20,
            'panel' => 'photographer_footer'
        ));

        // Footer Media Title

        $wp_customize -> add_setting('photographer_settings[footer_media_title]', array(
            'default' => 'See me on Instagram',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_media_title', array(
            'label' => __('Footer Media Title', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_media_title]'
        ));

        // Footer Media Photo #1

        $wp_customize -> add_setting('photographer_settings[footer_media_photo_1]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'footer_media_photo_1', array(
            'label' => __('Footer Media Photo #1', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_media_photo_1]'
        )));

        // Footer Instagram Link #1

        $wp_customize -> add_setting('photographer_settings[footer_instagram_link_1]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_instagram_link_1', array(
            'label' => __('Footer Instagram Link #1', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_instagram_link_1]'
        ));

        // Footer Media Photo #2

        $wp_customize -> add_setting('photographer_settings[footer_media_photo_2]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'footer_media_photo_2', array(
            'label' => __('Footer Media Photo #2', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_media_photo_2]'
        )));

        // Footer Instagram Link #2

        $wp_customize -> add_setting('photographer_settings[footer_instagram_link_2]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_instagram_link_2', array(
            'label' => __('Footer Instagram Link #2', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_instagram_link_2]'
        ));

        // Footer Media Photo #3

        $wp_customize -> add_setting('photographer_settings[footer_media_photo_3]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'footer_media_photo_3', array(
            'label' => __('Footer Media Photo #3', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_media_photo_3]'
        )));

        // Footer Instagram Link #3

        $wp_customize -> add_setting('photographer_settings[footer_instagram_link_3]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_instagram_link_3', array(
            'label' => __('Footer Instagram Link #3', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_instagram_link_3]'
        ));

        // Footer Media Photo #4

        $wp_customize -> add_setting('photographer_settings[footer_media_photo_4]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'footer_media_photo_4', array(
            'label' => __('Footer Media Photo #4', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_media_photo_4]'
        )));

        // Footer Instagram Link #4

        $wp_customize -> add_setting('photographer_settings[footer_instagram_link_4]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_instagram_link_4', array(
            'label' => __('Footer Instagram Link #4', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_instagram_link_4]'
        ));

        // Footer Media Photo #5

        $wp_customize -> add_setting('photographer_settings[footer_media_photo_5]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'footer_media_photo_5', array(
            'label' => __('Footer Media Photo #5', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_media_photo_5]'
        )));

        // Footer Instagram Link #5

        $wp_customize -> add_setting('photographer_settings[footer_instagram_link_5]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_instagram_link_5', array(
            'label' => __('Footer Instagram Link #5', 'photographer'),
            'section' => 'photographer_footer_media',
            'settings' => 'photographer_settings[footer_instagram_link_5]'
        ));

        // Footer Copyright

        $wp_customize -> add_section('photographer_footer_copyright', array(
            'title' => __('Footer Copyright', 'photographer'),
            'description' => __('Customize the copyright section of the footer.', 'photographer'),
            'priority' => 30,
            'panel' => 'photographer_footer'
        ));

        // Footer Copyright City

        $wp_customize -> add_setting('photographer_settings[footer_copyright_city]', array(
            'default' => 'Los Angeles, California',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_copyright_city', array(
            'label' => __('City', 'photographer'),
            'description' => __('Add the city where you live. First add your city, then a comma and followed by your state. Example: "Los Angeles, California"','photographer'),
            'section' => 'photographer_footer_copyright',
            'settings' => 'photographer_settings[footer_copyright_city]'
        ));

        // Footer Copyright Mail

        $wp_customize -> add_setting('photographer_settings[footer_copyright_mail]', array(
            'default' => 'photographer@gmail.com',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('footer_copyright_mail', array(
            'label' => __('Mail', 'photographer'),
            'description' => __('Add your email. If you leave this text box empty, the default email will be the administrator email.', 'photographer'),
            'section' => 'photographer_footer_copyright',
            'settings' => 'photographer_settings[footer_copyright_mail]'
        ));

        // Homepage Panel

        $wp_customize -> add_panel('photographer_homepage', array(
            'title' => __('Homepage', 'photographer'),
            'description' => __('Homepage options.', 'photographer'),
            'priority' => 35
        ));

        // About Section

        $wp_customize -> add_section('photographer_about_section', array(
            'title' => __('About', 'photographer'),
            'description' => __('About section options.', 'photographer'),
            'priority' => 10,
            'panel' => 'photographer_homepage'
        ));

        // About Section Control

        $wp_customize -> add_setting('photographer_settings[show_about_section]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('show_about_section', array(
            'label' => __('Show about section.', 'photographer'),
            'section' => 'photographer_about_section',
            'settings' => 'photographer_settings[show_about_section]',
            'type' => 'checkbox'
        ));

        // About Section Image

        $wp_customize -> add_setting('photographer_settings[about_section_image]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'about_section_image', array(
            'label' => __('Image', 'photographer'),
            'section' => 'photographer_about_section',
            'settings' => 'photographer_settings[about_section_image]'
        )));

        // About Section Title

        $wp_customize -> add_setting('photographer_settings[about_section_title]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('about_section_title', array(
            'label' => __('Title:', 'photographer'),
            'section' => 'photographer_about_section',
            'settings' => 'photographer_settings[about_section_title]'
        ));

        // About Section SubTitle

        $wp_customize -> add_setting('photographer_settings[about_section_subtitle]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('about_section_subtitle', array(
            'label' => __('Subtitle:', 'photographer'),
            'section' => 'photographer_about_section',
            'settings' => 'photographer_settings[about_section_subtitle]'
        ));

        // About Section Content

        $wp_customize -> add_setting('photographer_settings[about_section_content]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('about_section_content', array(
            'label' => __('Content:', 'photographer'),
            'type' => 'textarea',
            'section' => 'photographer_about_section',
            'settings' => 'photographer_settings[about_section_content]'
        ));

        // About Section Button

        $wp_customize -> add_setting('photographer_settings[about_section_button]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('about_section_button', array(
            'label' => __('Button text:', 'photographer'),
            'section' => 'photographer_about_section',
            'settings' => 'photographer_settings[about_section_button]'
        ));

        // About Section Button Link

        $wp_customize -> add_setting('photographer_settings[about_section_button_link]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('about_section_button_link', array(
            'label' => __('Button link:', 'photographer'),
            'section' => 'photographer_about_section',
            'settings' => 'photographer_settings[about_section_button_link]'
        ));

        // Portfolio Section

        $wp_customize -> add_section('photographer_portfolio_section', array(
            'title' => __('Portfolio', 'photographer'),
            'description' => __('Portfolio section options.', 'photographer'),
            'priority' => 20,
            'panel' => 'photographer_homepage'
        ));

        // Portfolio Section Control

        $wp_customize -> add_setting('photographer_settings[show_portfolio_section]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('show_portfolio_section', array(
            'label' => __('Show last posts section.', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[show_portfolio_section]',
            'type' => 'checkbox'
        ));

        // Portfolio Image #1

        $wp_customize -> add_setting('photographer_settings[portfolio_section_image_1]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'portfolio_section_image_1', array(
            'label' => __('Image #1', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_image_1]'
        )));

        // Portfolio Title #1

        $wp_customize -> add_setting('photographer_settings[portfolio_section_title_1]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('portfolio_section_title_1', array(
            'label' => __('Title #1:', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_title_1]'
        ));

        // Portfolio Link #1

        $wp_customize -> add_setting('photographer_settings[portfolio_section_link_1]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('portfolio_section_link_1', array(
            'label' => __('Link #1:', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_link_1]'
        ));

        // Portfolio Image #2

        $wp_customize -> add_setting('photographer_settings[portfolio_section_image_2]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'portfolio_section_image_2', array(
            'label' => __('Image #2', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_image_2]'
        )));

        // Portfolio Title #2

        $wp_customize -> add_setting('photographer_settings[portfolio_section_title_2]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('portfolio_section_title_2', array(
            'label' => __('Title #2:', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_title_2]'
        ));

        // Portfolio Link #2

        $wp_customize -> add_setting('photographer_settings[portfolio_section_link_2]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('portfolio_section_link_2', array(
            'label' => __('Link #2:', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_link_2]'
        ));

        // Portfolio Image #3

        $wp_customize -> add_setting('photographer_settings[portfolio_section_image_3]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'portfolio_section_image_3', array(
            'label' => __('Image #3', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_image_3]'
        )));

        // Portfolio Title #3

        $wp_customize -> add_setting('photographer_settings[portfolio_section_title_3]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('portfolio_section_title_3', array(
            'label' => __('Title #3:', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_title_3]'
        ));

        // Portfolio Link #3

        $wp_customize -> add_setting('photographer_settings[portfolio_section_link_3]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('portfolio_section_link_3', array(
            'label' => __('Link #3:', 'photographer'),
            'section' => 'photographer_portfolio_section',
            'settings' => 'photographer_settings[portfolio_section_link_3]'
        ));

        // Last Posts Section

        $wp_customize -> add_section('photographer_last_posts', array(
            'title' => __('Last Posts', 'photographer'),
            'description' => __('Last posts section options.', 'photographer'),
            'priority' => 20,
            'panel' => 'photographer_homepage'
        ));

        // Last Posts Section Control

        $wp_customize -> add_setting('photographer_settings[show_last_posts_section]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('show_last_posts_section', array(
            'label' => __('Show last posts section.', 'photographer'),
            'section' => 'photographer_last_posts',
            'settings' => 'photographer_settings[show_last_posts_section]',
            'type' => 'checkbox'
        ));

        // Last Posts Section Title

        $wp_customize -> add_setting('photographer_settings[last_posts_section_title]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('last_posts_section_title', array(
            'label' => __('Last posts section title:', 'photographer'),
            'section' => 'photographer_last_posts',
            'settings' => 'photographer_settings[last_posts_section_title]'
        ));

        // Post Panel

        $wp_customize -> add_panel('photographer_post', array(
            'title' => __('Post', 'photographer'),
            'description' => __('Post options.', 'photographer'),
            'priority' => 90
        ));

        // Related Post Section

        $wp_customize -> add_section('photographer_related_post_section', array(
            'title' => __('Related Post', 'photographer'),
            'description' => __('Related post section options.', 'photographer'),
            'priority' => 10,
            'panel' => 'photographer_post'
        ));

        // Related Post Section Control

        $wp_customize -> add_setting('photographer_settings[show_related_post_section]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('show_related_post_section', array(
            'label' => __('Show related post section.', 'photographer'),
            'section' => 'photographer_related_post_section',
            'settings' => 'photographer_settings[show_related_post_section]',
            'type' => 'checkbox'
        ));

        // Related Post Section Title 

        $wp_customize -> add_setting('photographer_settings[related_post_section_title]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('related_post_section_title', array(
            'label' => __('Title:', 'photographer'),
            'section' => 'photographer_related_post_section',
            'settings' => 'photographer_settings[related_post_section_title]'
        ));

        // SocialMedia Section

        $wp_customize -> add_section('photographer_socialmedia_section', array(
            'title' => __('Social Media', 'photographer'),
            'description' => __('Social media section options.', 'photographer'),
            'priority' => 40,
            'panel' => 'photographer_post'
        ));
        
        // SocialMedia Section Control

        $wp_customize -> add_setting('photographer_settings[show_socialmedia_section]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('show_socialmedia_section', array(
            'label' => __('Show social media section.', 'photographer'),
            'section' => 'photographer_socialmedia_section',
            'settings' => 'photographer_settings[show_socialmedia_section]',
            'type' => 'checkbox'
        ));

        // SocialMedia Section Tilte

        $wp_customize -> add_setting('photographer_settings[socialmedia_section_title]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('socialmedia_section_title', array(
            'label' => __('Title:', 'photographer'),
            'section' => 'photographer_socialmedia_section',
            'settings' => 'photographer_settings[socialmedia_section_title]'
        ));

        // SocialMedia Section Link Twitter

        $wp_customize -> add_setting('photographer_settings[socialmedia_section_twitter]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('socialmedia_section_twitter', array(
            'label' => __('Twitter:', 'photographer'),
            'section' => 'photographer_socialmedia_section',
            'settings' => 'photographer_settings[socialmedia_section_twitter]'
        ));

        // SocialMedia Section Link Instagram

        $wp_customize -> add_setting('photographer_settings[socialmedia_section_instagram]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('socialmedia_section_instagram', array(
            'label' => __('Instagram:', 'photographer'),
            'section' => 'photographer_socialmedia_section',
            'settings' => 'photographer_settings[socialmedia_section_instagram]'
        ));

        // SocialMedia Section Link Pinterest

        $wp_customize -> add_setting('photographer_settings[socialmedia_section_pinterest]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('socialmedia_section_pinterest', array(
            'label' => __('Pinterest:', 'photographer'),
            'section' => 'photographer_socialmedia_section',
            'settings' => 'photographer_settings[socialmedia_section_pinterest]'
        ));

        // SocialMedia Section Link Facebook

        $wp_customize -> add_setting('photographer_settings[socialmedia_section_facebook]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control('socialmedia_section_facebook', array(
            'label' => __('Facebook:', 'photographer'),
            'section' => 'photographer_socialmedia_section',
            'settings' => 'photographer_settings[socialmedia_section_facebook]'
        ));

        // Blog Panel

        $wp_customize -> add_panel('photographer_blog', array(
            'title' => __('Blog', 'photographer'),
            'description' => __('Blog options.', 'photographer'),
            'priority' => 95
        ));

        // Blog Header Options Section

        $wp_customize -> add_section('photographer_blog_options', array(
            'title' => __('Header Options', 'photographer'),
            'description' => __('Customize blog page header.', 'photographer'),
            'priority' => 40,
            'panel' => 'photographer_blog'
        ));
        
        // Blog Header Image

        $wp_customize -> add_setting('photographer_settings[blog_header_image]', array(
            'default' => '',
            'type' => 'theme_mod'
        ));

        $wp_customize -> add_control(new WP_Customize_Image_Control( $wp_customize, 'blog_header_image', array(
            'label' => __('Choose background image:', 'photographer'),
            'section' => 'photographer_blog_options',
            'settings' => 'photographer_settings[blog_header_image]'
        )));

    }
    add_action('customize_register', 'photographer_customize_register');

?>