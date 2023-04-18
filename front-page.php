<?php get_header(); ?>
<!-- Hero Section Start -->
<div class="hero">
    <img src="<?php echo get_theme_mod('hero_image', get_bloginfo('template_directory') . '/assets/img/hero.png'); ?>" alt="hero image" class="hero-image">
    <h1><span>
            <?php echo get_theme_mod('hero_heading', 'Hello! I am John Doe, a Digital Creative who have had a chance to help Individuals and Businesses from around the world with heir amazing ideas, products & online presence.'); ?>
        </span></h1>
    <hr>
    <div class="hero-info">
        <p>
            <?php echo get_theme_mod('hero_content_left', 'As a freelance UX / UI designer and Web Developer, I’ve been exposed to hundreds of projects over the years acting as a lead designer,Project Manager, UI Designer and Lead Ecommerce Developer, which have helped me a lot. I always work with a clear timelines toward specific tasks and outcomes, so even though all I do is a creative process, it’s always aligned with the overall business objectives. Project Manager, UI Designer and Lead Ecommerce Developer, which have helped me a lot. I always work with a clear timelines towards specific tasks and outcomes, so even though all I do is a creative process, it’s always aligned with the overall business objectives.
I approach all my projects, regardless of the project size, budget with a discovery session to understand my client’s vision and their needs.'); ?>
        </p>
        <?php echo get_theme_mod('hero_content_right', 'After the first discovery session, I start working on prototypes and then present the same in front of my client to see what they think about it. Upon listening to their feedback, I make sure that we are heading in to the right direction. And upon finalizing the prototype, I work on executing the actual design of the prototype.
During all this, I always be in touch with my client giving them regular updates and asking questions and getting immediate feedback because I believe that the personal touch is always important in business.'); ?>
    </div>
</div>
<!-- Hero Section End -->
<!-- Projects Section Start-->
<section class="home-projects" id="home-projects">
    <div class="section-heading">
        <h2><?php echo get_theme_mod('projects_heading', 'PROJECTS'); ?> &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;<span><?php echo get_theme_mod('projects_tagline', 'Thank you for your business!'); ?></span></h2>
    </div>
    <?php
    $args = array(
        'posts_per_page'    => 10,
        'post_type'     => 'post',  //choose post type here
        'order' => 'DESC',
    );
    // query
    $the_query = new WP_Query( $args );
    
    
    if( $the_query->have_posts() ):
        while( $the_query->have_posts() ) : $the_query->the_post();
            

            ?>
                <a href="<?php echo the_permalink(); ?>" class="home-project">
                    <h3>
                        <?php the_title(); ?>
                    </h3>
                    <div><span>
                            <?php $the_cat = get_the_category();
                            echo $the_cat[0]->cat_name; ?>
                        </span></div>
                    <div><img src="<?php bloginfo('template_url') ?>/assets/img/arrow.svg" alt="Arrow"></div>
        </a>

            <?php
        endwhile;
    else:
        ?>

        <p>Ooops No Projects Found</p>
    <?php endif ?>

</section>
<!-- Projects Section Ends -->
<!-- About Section Start -->
<section class="about" id="about">
    <div class="section-heading">
        <h2>
            <?php echo get_theme_mod('about_heading', 'About me'); ?> &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;<span>
                <?php echo get_theme_mod('about_tagline', 'Get to know me'); ?>
            </span>
        </h2>
    </div>
    <?php echo get_theme_mod('about_content', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quas sit aperiam reprehenderit, fuga ex, expedita ratione veritatis asperiores quae vel aspernatur sint qui excepturi? Itaque dicta obcaecati porro consectetur dolores suscipit delectus sapiente molestias laborum saepe, laboriosam unde libero fugiat nobis facilis modi veniam cupiditate harum esse. Provident perspiciatis harum amet enim quasi, optio id tempore qui fuga placeat voluptatibus beatae deleniti voluptates cupiditate fugiat numquam dolores facere praesentium culpa ex laudantium quod minus. Ab unde, magnam ad, optio eveniet exercitationem molestias velit iure quasi harum pariatur autem tempore!'); ?>
</section>
<!-- About Section End -->
<!-- Contact Section Starts -->
<div class="section-heading" id="contact">
    <h2>
        <?php echo get_theme_mod('contact_heading', 'Contact'); ?> &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;<span>
            <?php echo get_theme_mod('contact_tagline', 'Get in touch'); ?>
        </span>
    </h2>
</div>
<?php echo (do_shortcode(get_theme_mod('contact_content', 'form shortcode goes here'))); ?>

<?php get_footer(); ?>

