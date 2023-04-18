<body <?php body_class(); ?>>
    <?php get_header(); ?>
    <!-- Hero Section Start -->
    <div class="hero portfolio-item">
        <div class="info">
            <h1><span>
                    <?php $post = get_post();
                    if (get_post_meta($post->ID, 'page_title', true)) {
                        echo get_post_meta($post->ID, 'page_title', true);
                    } else {
                        echo the_title();
                    } ?>
                </span></h1>
            <h5>
                <?php $the_cat = get_the_category();
                echo $the_cat[0]->cat_name; ?>
            </h5>
            <a href="#content">Learn More about the project <i class="fa-solid fa-arrow-down"></i></a>
        </div>
        <div class="about-image">
            <?php the_post_thumbnail('full'); ?>
        </div>
    </div>
    <!-- Hero Section End -->
    <!-- Content -->
    <div id="content">
        <?php the_content(); ?>
    </div>

    <?php get_footer(); ?>