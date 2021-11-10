<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/herobackgroundimage.jpeg') ?>)"></div>
    <div class="page-banner__content container t-center c-white">
        <p class="headline headline--small">
            Welcome! My name is Sanam Malik and I am a web developer and designer with a background in research and writing.
            I am passionate about creating beautiful, inclusive, and accessible websites in Wordpress, PHP, Javascript, HTML, and CSS.
        </p>
    </div>
</div>

<div class="full-width-split group container container--narrow">
    <div class="full-width-split__one container container--narrow">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Technical Skills</h2>

            <div class="event-summary">
                <div class="event-summary__content">
                    <h2 class="event-summary__title headline headline--tiny"><strong>Programming Languages</strong></h2>
                    <p> JavaScript, Ruby on Rails, MySQL, CSS, and HTML</p>
                </div>

                <div class="event-summary__content">
                    <h2 class="event-summary__title headline headline--tiny"><strong>Libraries & Frameworks</strong></h2>
                    <p>React, React Router, React Hooks, API usage, Semantic UI, Bootstrap</p>
                </div>

                <div class="event-summary__content">
                    <h2 class="event-summary__title headline headline--tiny"><strong>Additional Tools & Skills</strong></h2>
                    <p>WordPress, UX Designing, Adobe Illustrator, Git, Npm, Yarn, PostgreSQL, Salesforce, Technical Research</p>
                </div>
            </div>

            <p class="t-center no-margin"><a href='<?php echo site_url('/projects') ?>' class="btn btn--blue">View My Projects</a></p>
        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Non-Technical Skills</h2>

            <div class="event-summary">
                <div class="event-summary__content">
                    <p class="event-summary__title headline headline--large">
                    <ul>Research</ul>
                    <ul>Writing</ul>
                    <ul>Editing</ul>
                    <ul>Proofreading</ul>
                    <ul>Project Management</ul>
                    <ul>Emotional Intelligence</ul>
                    <ul>Strong Communication Skills</ul>
                    <ul>Attention to Detail</ul>
                    </p>
                </div>
            </div>
        </div>

        <p class="t-center no-margin"><a href='<?php echo site_url('/publications') ?>' class="btn btn--yellow">View My Publications</a></p>
    </div>
</div>
</div>

<div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/chalkboard-concrete.jpeg') ?>)">
                <div class="hero-slider__interior container">
                        <h2 class="headline headline--medium t-center">Services Offered</h2>
                        <div class="t-center no-margin">
                        <i><p>Wordpress Custom Themes and Plugins, Content Management</p></i>
                        <i><p>Manage and Update Current Website, Wordpress Webiste Creation</p></i>
                        <i><p> Google Analytic tracking, Create Infographics, Editing, Proofreading</p></i>
                        <i><p>Writing, Research, Technical Research, Image Optimization, API Projects</p></i>
                        <!-- <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p> -->
                        </div>
                </div>
            </div>
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/chalkboard-concrete.jpeg') ?>)">
                <div class="hero-slider__interior container">
                        <h2 class="headline headline--medium t-center">Testimonials</h2>
                        <div class="t-center no-margin">
                        <i><p>Working with Sanam has been a wonderful experience. As a very new and</p></i>   
                        <i><p>small public service organization we wanted someone who</p></i>
                        <i><p>really understood our work and knew how to amplify it online. </p></i>
                        <i><p>With Sanam's year's of experience in the public sector,</p></i>
                        <i><p>she provided us with guidance that we really needed. With her guidance and </p></i>
                        <i><p>expertise we were able to increase our donations by 100%!</p></i>
                        <i><p>We have hired Sanam to create a new Wordpress website for us.</p></i>
                        <i><p>--Project Downtown of Charlotte</p></i>
                        </div>
                </div>
            </div>
            <!-- <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg') ?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Publications</h2>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg') ?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Contact Me</h2>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
    </div>
</div>

<?php get_footer(); ?>