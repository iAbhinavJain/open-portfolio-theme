<body <?php body_class(); ?>>
    <?php get_header(); ?>
    <!-- Hero Section Start -->
    <div class="hero inner-pages projects-hero">
        <h1><span>
                <?php the_archive_title(); ?>
            </span></h1>
        <p>By some amazing people I got the chance to work with!</p>
        <a href="#projects">Check out projects!! <i class="fa-solid fa-arrow-down"></i></a>
    </div>
    <!-- Hero Section End -->
    <!-- projects -->
    <div id="projects" class="projects">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();

                ?>
                <div class="single-project">
                    <a href="<?php echo the_permalink() ?>">
                        <?php the_post_thumbnail(); ?>
                        <div class="load-project">
                            <div class="project-info">
                                <h3>
                                    <?php the_title() ?>
                                </h3>
                                <p>
                                    <?php $the_cat = get_the_category();
                                    echo $the_cat[0]->cat_name; ?>
                                </p>
                            </div>
                            <div class="project-link">
                                <a href="<?php echo the_permalink() ?>">View Project <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <?php
            endwhile;
        else:
            ?>

            <p>Ooops No Projects Found</p>
        <?php endif ?>
    </div>

    <?php get_footer(); ?>