<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

    <div class="row">
        <div class="span12">

            <!-- FlexSlider -->
            <div class="slider1 flexslider">
                <!-- Items -->
                <ul class="slides">
                    <li>
                        <!-- Item -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider/1.jpg" alt="">
                    </li>
                    <li>
                        <!-- Item -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider/2.jpg" alt="">
                    </li>
                    <li>
                        <!-- Item -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider/3.jpg" alt="">
                    </li>
                </ul>
                <!-- Items End -->
            </div>
            <!-- FlexSlider End -->

        </div>
    </div>

    <div class="row space30"></div>

    <div class="row">
        <div class="span12">
            <h2>Services</h2>
        </div>
    </div>

    <div class="row">

        <!-- Service -->
        <div class="span4">
            <!-- Service Icon -->
            <div class="ic-1"><i class="icon-lightbulb"></i></div>
            <!-- Service Title -->
            <div class="title-1">Powerful clean design</div>
            <!-- Service Content -->
            <div class="text-1">
                On sait depuis longtemps nnaire de plus de 200 mots kan rlatin
            </div>
        </div>
        <!-- Service End -->

        <div class="span4">
            <div class="ic-1"><i class="icon-resize-small"></i></div>
            <div class="title-1">Fully responsive</div>
            <div class="text-1">
                Iil utilise un dictionnaire de plus de 200 mots kan rlatins, en combinaison.
            </div>
        </div>
        <div class="span4">
            <div class="ic-1"><i class="icon-eye-open"></i></div>
            <div class="title-1">Retina Ready</div>
            <div class="text-1">
                Contrairement à une opinion répandue, Lorem as Ipsum n'est pas simplement.
            </div>
        </div>
    </div>

    <div class="row space30"></div>

    <div class="row">
        <div class="span12">
            <h2>Featured Services</h2>
        </div>
    </div>

    <div class="slider2 flexslider">
        <ul class="slides">
            <li>
                <div class="row">

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/1.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Business Solutions</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/2.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Visions and Future</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/3.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Time Management</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/4.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                </div>
            </li>
            <li>
                <div class="row">

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/3.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Business Solutions</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/4.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Visions and Future</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/1.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Time Management</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                    <a href="#">
                        <div class="span3 square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/home/2.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>

                </div>
            </li>
        </ul>
    </div>

    <div class="row space30"></div>

    <div class="row">

        <div class="span6">
            <h2>Recent News <span class="normal">/ Lastest Form Blog</span></h2>
            <div class="row">

                <?php
                $temp = $wp_query;
                $wp_query = null;
                $wp_query = new WP_Query();
                $wp_query->query('showposts=2' . '&paged=' . $paged);
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <div class="span3">
                        <div class="date"><?= get_the_date('j'); ?></div>
                        <div class="date date-2"><?= get_the_date('M. Y'); ?></div>
                        <h4><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            </div>
        </div>

        <div class="span6">
            <h2>Testimonials</h2>
        </div>

        <div class="span6">
            <div class="slider2 flexslider">
                <ul class="slides">
                    <li>
                        <!-- Testimonial Container -->
                        <div class="testimonials">
                            <!-- Testimonial Content -->
                            1 De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
                            ont fait du Lorem Ipsum leur faux texte par défaut, etina une recherche pour
                            'Lorem Ipsum' vous conduira vers de asolen nombreux sites qui n'en sont
                            encore qu'à leur phase de.
                            <br/><br/>
                            <!-- Author -->
                            <strong>Marco Derianti</strong><br/>
                            software developer
                        </div>
                        <!-- Testimonial Container End -->
                    </li>
                    <li>
                        <div class="testimonials">
                            2 De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
                            ont fait du Lorem Ipsum leur faux texte par défaut, etina une recherche pour
                            'Lorem Ipsum' vous conduira vers de asolen nombreux sites qui n'en sont
                            encore qu'à leur phase de.
                            <br/><br/>
                            <strong>Bertocucci Feranzano</strong><br/>
                            assistent
                        </div>
                    </li>
                    <li>
                        <div class="testimonials">
                            3 De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
                            ont fait du Lorem Ipsum leur faux texte par défaut, etina une recherche pour
                            'Lorem Ipsum' vous conduira vers de asolen nombreux sites qui n'en sont
                            encore qu'à leur phase de.
                            <br/><br/>
                            <strong>Dr. Kozmold</strong><br/>
                            producer
                        </div>
                    </li>
                    <li>
                        <div class="testimonials">
                            4 De nombreuses suites logicielles de mise en page ou éditeurs de sites Web
                            ont fait du Lorem Ipsum leur faux texte par défaut, etina une recherche pour
                            'Lorem Ipsum' vous conduira vers de asolen nombreux sites qui n'en sont
                            encore qu'à leur phase de.
                            <br/><br/>
                            <strong>Pineapple Jack</strong><br/>
                            project manager
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

<?php get_footer(); ?>