<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

    <div class="row">

        <div class="span9">
            <h1>Blog</h1>


            <?php
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
            $args = array(
                'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
                'paged' => $current_page // текущая страница
            );
            query_posts($args);

            $wp_query->is_archive = true;
            $wp_query->is_home = false;

            while (have_posts()): the_post();
                ?>
                <!-- Blog Post -->
                <div>
                    <a href="blog-detail">
                        <!-- Post Image -->
                        <img src="<?php echo get_template_directory_uri(); ?>/img/blog/1.jpg" alt="">
                    </a>
                    <!-- Space -->
                    <div class="row space30"></div>

                    <div class="row">

                        <!-- Post Icon and Date Container -->
                        <div class="span2">
                            <!-- Post Icon Container -->
                            <div class="blog-icon-container hidden-phone">
                                <div class="blog-icon">
                                    <!-- Icon -->
                                    <i class="icon-camera"></i>
                                </div>
                            </div>
                            <!-- Post Icon Container End -->
                            <!-- Post Date -->
                            <div class="blog-date"><?= get_the_date('j') ?></div>
                            <div class="blog-date blog-date-2"><?= get_the_date('M. Y') ?></div>
                        </div>
                        <!-- Post Icon and Date Container End -->

                        <!-- Post Content Container -->
                        <div class="span7 post-d-info">
                            <!-- Post Title -->
                            <a href="blog-detail.html"><h2><?= the_title() ?></h2></a>
                            <!-- Post Info Row -->
                            <i class="icon-user"></i> By <?php the_author() ?> <i
                                class="icon-tag"></i> <?php the_category(' | ') ?> | Portrait <i
                                class="icon-comment-alt"></i> With <?= get_comments_number() ?> Comments
                            <p>
                                <!-- Post Content -->
                                <?= the_content() ?>
                            </p>
                            <!-- Read More Icon and Link -->
                            <a href="blog-detail"><i class="icon-search"></i> Read More</a>
                            <!-- Space -->
                            <div class="row space5"></div>
                        </div>
                        <!-- Post Content Container End -->

                    </div>
                    <hr/>
                </div>
                <!-- Blog Post End -->
                <?php
            endwhile; ?>


            <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); ?>


            <div class="row space20"></div>

            <div class="row space300"></div>

            <!-- Paging -->
            <div class="row">
                <div class="span7 navigation">
                    <a href="#" class="paging f-left">1</a>
                    <a href="#" class="paging f-left">2</a>
                    <a href="#" class="paging f-left">3</a>
                    <a href="#" class="paging f-left">...</a>
                    <a href="#" class="paging f-left">94</a>
                    <a href="#" class="paging f-left">95</a>
                    <a href="#" class="paging f-left">96</a>
                </div>
                <div class="span2 right o-h">
                    <a href="#" class="arrow a-left"></a>
                    <a href="#" class="arrow a-right"></a>
                </div>
            </div>

        </div>

        <div class="span3">
            <div class="actual-section">
                <a href="index">Home</a> > Blog Detail
            </div>
            <h2>Search</h2>
            <div class="search-box">
                <a href="#" class="search-icon"><i class="icon-search"></i></a>
                <input class="search" name="" value="Search">
            </div>

            <div class="row space30"></div>
            <h2>Categories</h2>
            <ul class="list-c">
                <li><i class="icon-chevron-right"></i><a href="#">Business Plan</a></li>
                <li><i class="icon-chevron-right"></i><a href="#">Entertainment</a></li>
                <li><i class="icon-chevron-right"></i><a href="#">News & Politics</a></li>
                <li><i class="icon-chevron-right"></i><a href="#">Social Media Networks</a></li>
                <li><i class="icon-chevron-right"></i><a href="#">Technology & Innovation</a></li>
            </ul>

            <div class="row space30"></div>
            <h2>Tags</h2>

            <a href="#">
                <div class="tag">WordPress</div>
            </a>
            <a href="#">
                <div class="tag">Webdesign</div>
            </a>
            <a href="#">
                <div class="tag">Post-processing</div>
            </a>
            <a href="#">
                <div class="tag">Tourism</div>
            </a>
            <a href="#">
                <div class="tag">Rendering</div>
            </a>
            <a href="#">
                <div class="tag">Photography</div>
            </a>

            <div class="row space30"></div>
            <h2>Latest Tweets</h2>
            <i class="icon-twitter"></i> Saying "Wow, You're cool." when you see someone doing something stupid. <a
                href="#" rel="external">http://t.co/YywnqBb8</a><br>
            6 minutes ago
            <br><br>
            <i class="icon-twitter"></i> Are you getting ready to work on a new project, take off on a sales trip.
            <a href="#" rel="external">http://pic.witt.com.co/Uyoyyk#sp</a><br>
            33 minutes ago
            <br>

            <div class="row space30"></div>
            <h2>Photos From Flickr</h2>
            <div class="flickr-widget">
                <div class="photo-stream">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/stream/01.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/stream/02.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/stream/03.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/stream/04.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/stream/05.jpg" alt="">
                </div>
                <div class="photo-stream">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/stream/06.jpg" alt="">
                </div>
            </div>

            <div class="row space30"></div>
            <h2>Text Widget</h2>
            Amet, consectetur adipisicing elit, sedure doriatlor in fugiat nulla pariatur. Excepteur sint occat
            nullaaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Integer
            posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat
            porttitor ligula, eget lacinia odio sem nec elit orn.

            <div class="row space30"></div>

        </div>
    </div>

<?php get_footer(); ?>