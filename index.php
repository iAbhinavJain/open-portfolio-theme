<body <?php body_class(); ?>>

    <?php get_header(); ?>
    <!-- Wrapper Start -->
    <!-- Loader Animation Start -->
    <div class="loader">
        <div class="loader-content">
            <div class="load-progress"></div>
        </div>
    </div>
    <!-- Loader Animation End -->
    <div class="wrapper">
        <!-- Header Start -->
        <header>
            <!-- Desktop Header -->
            <div id="desktop-header">
                <!-- Logo -->
                <a href="/">
                    <h2 class="logo">Abhinav Jain</h2>
                </a>
                <!-- Navigation Starts -->
                <ul class="menu right-menu">
                    <li><a href="projects.html" class="nav-item">Projects</a></li>
                    <li><a href="about.html" class="nav-item">About</a></li>
                    <li><a href="contact.html" class="nav-item">Contact</a></li>
                </ul>
                <!-- Navigation Ends -->
            </div>
            <!-- Desktop Header End -->
            <!-- Mobile Header -->
            <div id="mobile-header">
                <div class="logo-menu-icon-wrapper">
                    <a href="/">
                        <h2 class="logo">Abhinav Jain</h2>
                    </a>
                    <a class="menu-icon" onclick="toggleMenu();"><i class="fa-solid fa-bars"></i></a>
                </div>
                <!-- Reason for adding inline style to ul: Javascript's style.display only looks at inline styles  -->
                <ul style="display: none;">
                    <a href="projects.html" class="nav-item">
                        <li>Projects</li>
                    </a>
                    <a href="about.html" class="nav-item">
                        <li>About</li>
                    </a>
                    <a href="contact.html" class="nav-item">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
            <!-- Mobile Header End -->
        </header>
        <!-- Header End -->
        <!-- Hero Section Start -->
        <div class="hero">
            <img src="img/bg-image.png" alt="hero image" class="hero-image">
            <h1><span>Hello! I am Abhinav, a Digital Creative who have had a chance
                    to help Individuals and Businesses from around the world with
                    their amazing ideas, products & online presence.</span></h1>
            <hr>
            <div class="hero-info">
                <p>
                    As a freelance UX / UI designer and Web Developer, I’ve been exposed to hundreds of projects over
                    the years acting as a lead designer,Project Manager, UI Designer and Lead Ecommerce Developer, which
                    have helped me a lot. I always work with a clear timelines toward specific tasks and outcomes, so
                    even though all I do is a creative process, it’s always aligned with the overall business
                    objectives. Project Manager, UI Designer and Lead Ecommerce Developer, which have helped me a lot. I
                    always work with a clear timelines towards specific tasks and outcomes, so even though all I do is a
                    creative process, it’s always aligned with the overall business objectives. <br>

                    I approach all my projects, regardless of the project size, budget with a discovery session to
                    understand my client’s vision and their needs.
                </p>
                <p>After the first discovery session, I start working on prototypes and then present the same in front
                    of my client to see what they think about it. Upon listening to their feedback, I make sure that we
                    are heading in to the right direction. And upon finalizing the prototype, I work on executing the
                    actual design of the prototype. <br>

                    During all this, I always be in touch with my client giving them regular updates and asking
                    questions and getting immediate feedback because I believe that the personal touch is always
                    important in business.</p>
            </div>
        </div>
        <!-- Hero Section End -->
        <!-- Projects Section Start-->
        <section class="home-projects" id="home-projects">
            <div class="section-heading">
                <h2>PROJECTS &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;<span>Thank you for your business!</span></h2>
            </div>
            <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();

                    ?>

                    <div class="home-project">
                        <h3><?php the_title(); ?></h3>
                        <div><span>UI/ UX Design</span></div>
                        <div><a href="#"><img src="img/arrow.svg" alt="Arrow"></a></div>
                    </div>

                <?php
                endwhile;
            else:
                ?>

                <p>Ooops No Projects Found</p>
            <?php endif ?>

        </section>

        <section class="home-projects" id="home-projects">
            <div class="section-heading">
                <h2>PROJECTS &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;<span>Thank you for your business!</span></h2>
            </div>
            <div class="home-project">
                <h3>Illusic Solutions</h3>
                <div>
                    <span>Web Development</span>
                </div>
                <div>
                    <a href="#"><img src="img/arrow.svg" alt="Arrow"></a>
                </div>
            </div>
            <div class="home-project">
                <h3>ZapApps Pvt. Ltd.</h3>
                <div><span>UX Strategy</span></div>
                <div><a href="#"><img src="img/arrow.svg" alt="Arrow"></a></div>
            </div>
            <div class="home-project">
                <h3>WhatNay Ecom Store</h3>
                <div><span>Web Design</span></div>
                <div><a href="#"><img src="img/arrow.svg" alt="Arrow"></a></div>
            </div>
            <div class="home-project">
                <h3>Filltics Shipments</h3>
                <div><span>Web Development</span></div>
                <div><a href="#"><img src="img/arrow.svg" alt="Arrow"></a></div>
            </div>
            <div class="home-project">
                <h3>Beaux Shop (College Project)</h3>
                <div><span>Web Design</span></div>
                <div><a href="#"><img src="img/arrow.svg" alt="Arrow"></a></div>
            </div>
            <div class="home-project">
                <h3>Dribbble Bucket</h3>
                <div><span>UI/ UX Design</span></div>
                <div><a href="#"><img src="img/arrow.svg" alt="Arrow"></a></div>
            </div>
        </section>
        <!-- Projects Section Ends -->
        <!-- About Section Start -->
        <section class="about" id="about">
            <div class="section-heading">
                <h2>WHO AM I &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;<span>I am still trying to figure that out!</span>
                </h2>
            </div>
            <p>I'm a 22 year, young UI/ UX Designer &amp; Web Developer trying to be a designer.</p>
            <p><strong>Character Snippets:</strong><br />extroverted introvert who tries to be friends with everyone,
                but hates it when someone doesn't take him seriously.<br />I love talking to humans from different
                cultures, countries, and backgrounds. I don't learn from books or tutorials but experiences. At times,
                all I'm looking forward to is a trip to a peaceful environment with my backpack (which always has my
                laptop).</p>
            <p><strong>I believe that:</strong><br />Experiences are not just the visible and audible things we have
                created and captured. It is also something that cannot be created and captured at any time. Life
                experiences.<br />Experiences that change the view and priorities.</p>
            <p><strong>Something to read:</strong><br />We are returning to the roots of digital things like it was in
                the very beginning. Simplicity and specific content which is straightforward. I love this approach where
                we take simple contrasting things and common sense.</p>
        </section>
        <!-- About Section End -->
        <!-- Contact Section Starts -->
        <div class="section-heading" id="contact">
            <h2>GET IN TOUCH &nbsp;&nbsp;&nbsp; · &nbsp;&nbsp;&nbsp;<span>Don't hesitate, every project is
                    important!</span>
            </h2>
        </div>
        <form action="">
            <div class="input-group">
                <input type="text" name="first-name" id="first-name" placeholder="First Name">
                <input type="text" name="last-name" id="last-name" placeholder="Second Name">
            </div>
            <div class="input-group">
                <input type="email" name="email-address" id="email-address" placeholder="Email Address">
                <input type="tel" name="phone-number" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="input-group">
                <textarea name="message" id="message" cols="30" rows="10"
                    placeholder="Please Explain your Project briefly"></textarea>
            </div>
            <input type="submit" value="Submit">
        </form>
        <!-- Contact Section Ends -->

        <?php get_footer(); ?>