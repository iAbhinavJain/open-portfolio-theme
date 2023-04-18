<?php
/**
 * Registers options with the Theme Customizer
 *
 * @param      object    $wp_customize    The WordPress Theme Customizer
 * @package    Open Portfolio
 */
add_action('customize_register', 'open_portfolio_customize_register');
function open_portfolio_customize_register($wp_customize)
{
  /*---------------------------------------
  * Add Panel for Homepage Content Settings
  ---------------------------------------*/

  $wp_customize->add_panel(
    'homepage_content_options',
    array(
      'title' => __('HOMEPAGE CONTENT', 'open_portfolio'),
      'description' => __('Content for the homepage can be set here.', 'open_portfolio'),
      'priority' => 1,
    )
  );

  /*---------------------------------------
  * Hero Section Settings
  ---------------------------------------*/

  /* Adding Section */ 
  $wp_customize->add_section(
    'hero_section_settings',
    array(
      'title' => __('Hero Section', 'open_portfolio'),
      'priority' => 1,
      'panel' => 'homepage_content_options'
    )
  );

  
  // Hero Image Settings and Control Start
  $wp_customize->add_setting(
    'hero_image',
    array(
      'default' => get_bloginfo('template_directory') . '/assets/img/hero.png',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'hero_image',
      array(
        'label' => 'Hero Image',
        'section' => 'hero_section_settings',
        'priority' => 1,
        'settings' => 'hero_image',
      )
    )
  );
  // Hero Image Settings and Control End

  // Hero heading Settings and Control Start
  $wp_customize->add_setting(
    'hero_heading',
    array(
      'default' => __('Hello! I am John Doe, a Digital Creative who have had a chance to help Individuals and Businesses from around the world with their amazing ideas, products & online presence.', 'open_portfolio'),
      'sanitize_callback' => 'sanitize_textarea_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    'hero_heading',
    array(
      'type' => 'textarea',
      'priority' => 1,
      'section' => 'hero_section_settings',
      'label' => 'Hero Section Heading',
      'description' => 'Heading for your hero section',
    )
  );
  // Hero Heading Settings and Control End

  // Hero Left and Right Content Settings and Control Start

  //left
  $wp_customize->add_setting(
    'hero_content_left',
    array(
      'default' => __("As a freelance UX / UI designer and Web Developer, I’ve been exposed to hundreds of projects over the years acting as a lead designer,Project Manager, UI Designer and Lead Ecommerce Developer, which have helped me a lot. I always work with a clear timelines toward specific tasks and outcomes, so even though all I do is a creative process, it’s always aligned with the overall business objectives. Project Manager, UI Designer and Lead Ecommerce Developer, which have helped me a lot. I always work with a clear timelines towards specific tasks and outcomes, so even though all I do is a creative process, it’s always aligned with the overall business objectives.
      I approach all my projects, regardless of the project size, budget with a discovery session to understand my client’s vision and their needs.", 'open_portfolio'),
      'sanitize_callback' => 'sanitize_textarea_field',
      'transport' => 'refresh',
    )
  );

  $wp_customize->add_control(
    'hero_content_left',
    array(
      'type' => 'textarea',
      'priority' => 1,
      'section' => 'hero_section_settings',
      'label' => 'Hero Content Left',
      'description' => 'Hero Content Left',
    )
  );

  // right
  $wp_customize->add_setting(
    'hero_content_right',
    array(
      'default' => __('As a freelance UX / UI designer and Web Developer, I’ve been exposed to hundreds of projects over the years acting as a lead designer,Project Manager, UI Designer and Lead Ecommerce Developer, which have helped me a lot. I always work with a clear timelines toward specific tasks and outcomes, so even though all I do is a creative process, it’s always aligned with the overall business objectives. Project Manager, UI Designer and Lead Ecommerce Developer, which have helped me a lot. I always work with a clear timelines towards specific tasks and outcomes, so even though all I do is a creative process, it’s always aligned with the overall business objectives.
      I approach all my projects, regardless of the project size, budget with a discovery session to understand my client’s vision and their needs.', 'open_portfolio'),
      'sanitize_callback' => 'sanitize_textarea_field',
      'transport' => 'refresh',
    )
  );
  // Control
  $wp_customize->add_control(
    'hero_content_right',
    array(
      'type' => 'textarea',
      'priority' => 1,
      'section' => 'hero_section_settings',
      'label' => 'Hero Content Right',
      'description' => 'Hero Content Right',
    )
  );
  // Hero Left and Right Content Settings and Control End


  /*---------------------------------------
  * About Section Settings
  ---------------------------------------*/

  /* Adding Section */ 
  $wp_customize->add_section(
    'about_section_settings',
    array(
      'title' => __('About Section', 'open_portfolio'),
      'priority' => 2,
      'panel' => 'homepage_content_options'
    )
  );


  // About heading Settings and Control Start
  $wp_customize->add_setting(
    'about_heading',
    array(
      'default' => 'Who AM I',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  
  $wp_customize->add_control(
    'about_heading',
    array(
      'type' => 'text',
      'priority' => 1,
      'section' => 'about_section_settings',
      'label' => 'About Section Heading',
      'description' => 'About Section Heading',
    )
  );
  // About heading Settings and Control End

  // About tagline Settings and Control Starts
  $wp_customize->add_setting(
    'about_tagline',
    array(
      'default' => 'Get to know me',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  
  $wp_customize->add_control(
    'about_tagline',
    array(
      'type' => 'text',
      'priority' => 2,
      'section' => 'about_section_settings',
      'label' => 'About Section tagline',
      'description' => 'About Section tagline',
    )
  );
  // About tagline Settings and Control End

  // About Content Settings and Control Starts
  $wp_customize->add_setting(
    'about_content',
    array(
      'default' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quas sit aperiam reprehenderit, fuga ex, expedita ratione veritatis asperiores quae vel aspernatur sint qui excepturi? Itaque dicta obcaecati porro consectetur dolores suscipit delectus sapiente molestias laborum saepe, laboriosam unde libero fugiat nobis facilis modi veniam cupiditate harum esse. Provident perspiciatis harum amet enim quasi, optio id tempore qui fuga placeat voluptatibus beatae deleniti voluptates cupiditate fugiat numquam dolores facere praesentium culpa ex laudantium quod minus. Ab unde, magnam ad, optio eveniet exercitationem molestias velit iure quasi harum pariatur autem tempore!",
      'transport' => 'refresh',
    )
  );
  
  $wp_customize->add_control(
    'about_content',
    array(
      'type' => 'textarea',
      'priority' => 3,
      'section' => 'about_section_settings',
      'label' => 'About Section Content',
      'description' => 'About Section Content',
    )
  );
  // About Content Settings and Control Ends

  /*---------------------------------------
  * Contact Section Settings
  ---------------------------------------*/

  /* Adding Section */
  $wp_customize->add_section(
    'contact_section_settings',
    array(
      'title' => __('Contact Section', 'open_portfolio'),
      'priority' => 3,
      'panel' => 'homepage_content_options'
    )
  );


  
  // Contact Heading Settings and Control Starts
  $wp_customize->add_setting(
    'contact_heading',
    array(
      'default' => 'Contact',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  
  $wp_customize->add_control(
    'contact_heading',
    array(
      'type' => 'text',
      'priority' => 2,
      'default' => 'Contact',
      'section' => "contact_section_settings",
      'label' => 'Contact Section heading',
      'description' => 'contact Section heading',
    )
  );
  // Contact Heading Settings and Control Ends

  // Contact Tagline Settings and Control Starts
  $wp_customize->add_setting(
    'contact_tagline',
    array(
      'default' => "Don't hesitate",
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );

  $wp_customize->add_control(
    'contact_tagline',
    array(
      'type' => 'text',
      'priority' => 2,
      'section' => 'contact_section_settings',
      'label' => 'Contact Section tagline',
      'description' => 'contact Section tagline',
    )
  );
  // Contact Tagline Settings and Control Ends

  // Contact Content Settings and Control Starts
  $wp_customize->add_setting(
    'contact_content',
    array(
      'default' => "form shortcode goes here",
      'transport' => 'refresh',
    )
  );
  
  $wp_customize->add_control(
    'contact_content',
    array(
      'type' => 'textarea',
      'priority' => 3,
      'section' => 'contact_section_settings',
      'label' => 'Contact Content',
      'description' => 'Contact Content - you can add shortcodes',
    )
  );
  // Contact content Settings and Control Ends

  /*---------------------------------------
  * Projects Section Settings
  ---------------------------------------*/

  /* Adding Section */
  $wp_customize->add_section(
    'projects_section_settings',
    array(
      'title' => __('Projects Section', 'open_portfolio'),
      'priority' => 3,
      'panel' => 'homepage_content_options'
    )
  );


  
  // Projects Heading Settings and Control Starts
  $wp_customize->add_setting(
    'projects_heading',
    array(
      'default' => 'Projects',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  
  $wp_customize->add_control(
    'projects_heading',
    array(
      'type' => 'text',
      'priority' => 2,
      'default' => 'Projects',
      'section' => "projects_section_settings",
      'label' => 'Projects Section heading',
      'description' => 'Projects Section heading',
    )
  );
  // Projects Heading Settings and Control Ends

  // Projects Tagline Settings and Control Starts
  $wp_customize->add_setting(
    'projects_tagline',
    array(
      'default' => "Thank you for your business!",
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  
  $wp_customize->add_control(
    'projects_tagline',
    array(
      'type' => 'text',
      'priority' => 2,
      'section' => 'projects_section_settings',
      'label' => 'Projects Section tagline',
      'description' => 'Projects Section tagline',
    )
  );
  // Projects Tagline Settings and Control Starts



  /*---------------------------------------
  * Add Panel for Homepage Content Settings
  ---------------------------------------*/
  $wp_customize->add_panel(
    'footer_options',
    array(
      //'priority'         => 100,
      'title' => __('Footer Settings', 'open_portfolio'),
      'description' => __('Content for the Footer goes here.', 'open_portfolio'),
    )
  );
}