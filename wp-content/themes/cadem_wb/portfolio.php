<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>
    <div class="row">
        <div class="span12">

            <nav class="navbar">
                <!-- Menu -->
                <ul class="nav">
                    <li><a href="index" title="">Home</a></li>
                    <li><a href="about-us" title="">About Us</a></li>
                    <li><a href="services" title="">Services</a></li>
                    <li class="active"><a href="portfolio" title="">Portfolio</a>
                        <!-- Submenu -->
                        <ul>
                            <li>
                                <a onclick="$('#portfolio-items article').removeClass('span2').removeClass('span3').removeClass('span4').removeClass('span6').addClass('span2');$('#portfolio-items').isotope({ filter: '*' })">6
                                    columns</a></li>
                            <li>
                                <a onclick="$('#portfolio-items article').removeClass('span2').removeClass('span3').removeClass('span4').removeClass('span6').addClass('span3');$('#portfolio-items').isotope({ filter: '*' })">4
                                    columns</a></li>
                            <li>
                                <a onclick="$('#portfolio-items article').removeClass('span2').removeClass('span3').removeClass('span4').removeClass('span6').addClass('span4');$('#portfolio-items').isotope({ filter: '*' })">3
                                    columns</a></li>
                            <li>
                                <a onclick="$('#portfolio-items article').removeClass('span2').removeClass('span3').removeClass('span4').removeClass('span6').addClass('span6');$('#portfolio-items').isotope({ filter: '*' })">2
                                    columns</a></li>
                        </ul>
                        <!-- End Submenu -->
                    </li>
                    <li><a href="blog" title="">Blog</a></li>
                    <li><a href="components" title="">Features</a>
                        <!-- Submenu -->
                        <ul>
                            <li><a href="components" title="">Components</a></li>
                            <li><a href="grid" title="">Grid System</a></li>
                            <li><a href="page" title="">Page</a></li>
                            <li><a href="pricing" title="">Pricing</a></li>
                            <li><a href="blog-detail" title="">Blog Detail</a></li>
                            <li><a href="portfolio-2" title="">Portfolio 2</a></li>
                            <li><a href="portfolio-detail" title="">Portfolio Detail</a></li>
                            <li><a href="index-2" title="">Home 2</a></li>
                        </ul>
                        <!-- End Submenu -->
                    </li>
                    <li><a href="contact" title="">Contact</a></li>
                </ul>
            </nav>

        </div>
    </div>
    <div class="row space10"></div>


    <div class="row">
        <div class="span8">
            <h1>Portfolio</h1>
        </div>
        <div class="span4">
            <div class="actual-section">
                <a href="index">Home</a> > Portfolio
            </div>
        </div>
    </div>

    <!-- Portfolio Filter -->
    <ul id="portfolio-filter">
        <li class="active"><a href="#" class="filter" data-filter="*">All</a></li>
        <li><a href="#" class="filter" data-filter=".photography">Photography</a></li>
        <li><a href="#" class="filter" data-filter=".architecture">Architecture</a></li>
        <li><a href="#" class="filter" data-filter=".webdesign">Webdesign</a></li>
        <li><a href="#" class="filter" data-filter=".technology">Thechnology</a></li>
        <li><a href="#" class="filter" data-filter=".identity">Identity</a></li>
    </ul>
    <!-- Portfolio Filter End-->

    <section class="row" id="portfolio-items">
        <ul class="portfolio">

            <li>
                <article class="span3 project" data-tags="photography">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="webdesign">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="photography,identity">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="identity,architecture">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="architecture,technology">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="technology,webdesign">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/6.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="architecture">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/7.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="identity,technology">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/8.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="webdesign, architecture">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/9.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="technology,webdesign">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/10.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="architecture,photography">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/11.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

            <li>
                <article class="span3 project" data-tags="technology,identity,architecture">
                    <a href="portfolio-detail">
                        <div class="square-1">
                            <div class="img-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/12.jpg" alt="">
                                <div class="img-bg-icon"></div>
                            </div>
                            <h3>Enjoying Victories</h3>
                            Mauris sit amet ligula est, eget it conseact etur lectus
                        </div>
                    </a>
                </article>
            </li>

        </ul>
    </section>

<?php get_footer(); ?>