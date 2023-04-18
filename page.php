<body <?php body_class(); ?>>
    <?php get_header(); ?>
    <!-- Hero Section Start -->
    <?php
    if (has_post_thumbnail()) { ?>
        <div class="hero about-me">
            <div class="info">
                <h1><span>
                        <?php $post = get_post();
                        if (get_post_meta($post->ID, 'page_title', true)) {
                            echo get_post_meta($post->ID, 'page_title', true);
                        } else {
                            echo the_title();
                        } ?>
                    </span></h1>
                <a href="#content"><i class="fa-solid fa-arrow-down"></i></a>
            </div>
            <div class="about-image">
                <?php the_post_thumbnail('full'); ?>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div class="hero inner-pages contact-me">
            <h1><span>
                    <?php $post = get_post();
                    if (get_post_meta($post->ID, 'page_title', true)) {
                        echo get_post_meta($post->ID, 'page_title', true);
                    } else {
                        echo the_title();
                    } ?>
                </span></h1>
            <a href="#content"><i class="fa-solid fa-arrow-down"></i></a>
        </div>
    <?php } ?>
    <!-- Hero Section End -->
    <!-- Content -->
    <div id="content">
        <?php the_content(); ?>
    </div>

    <?php get_footer(); ?>