</div>
</div>
</div>
<!-- Footer -->
<div id="footer" class="container">
    <div class="row">
        <div class="span3 logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo-footer.png" alt="">
            <br><br>
            Lorem sequat ipsum dolor lorem sit amet, consectetur adipiscing dolor elit. Aenean nisl orci, condimentum.
            <br><br>
            L'extrait standard de Lorem Ipsum utilisé depuis.
            <div class="pad2">
                <a href="#" class="social-network behance"></a>
                <a href="#" class="social-network facebook"></a>
                <a href="#" class="social-network pinterest"></a>
                <a href="#" class="social-network flickr"></a>
                <a href="#" class="social-network dribbble"></a>
                <a href="#" class="social-network lastfm"></a>
                <a href="#" class="social-network forrst"></a>
                <a href="#" class="social-network xing"></a>
            </div>
        </div>

        <div class="span3">
            <h2>Recent Posts</h2>
            <ul>
                <li><a href="#">&#62; Documentation for Users</a></li>
                <li><a href="#">&#62; Service Updates Database</a></li>
                <li><a href="#">&#62; Community Forum</a></li>
                <li><a href="#">&#62; Help Desk and Support</a></li>
                <li><a href="#">&#62; Terms of Use & Principles</a></li>
                <li><a href="#">&#62; Validate License & Certificates</a></li>
                <li><a href="#">&#62; Privacy Policy / Privacy law</a></li>
                <li><a href="#">&#62; Knowledge Base</a></li>
            </ul>
        </div>

        <div class="span3">
            <h2>Photos from Flickr</h2>
            <div class="photo-stream">
                <img src="<?php bloginfo('template_directory'); ?>/img/stream/01.jpg" alt="">
            </div>
            <div class="photo-stream">
                <img src="<?php bloginfo('template_directory'); ?>/img/stream/02.jpg" alt="">
            </div>
            <div class="photo-stream">
                <img src="<?php bloginfo('template_directory'); ?>/img/stream/03.jpg" alt="">
            </div>
            <div class="photo-stream">
                <img src="<?php bloginfo('template_directory'); ?>/img/stream/04.jpg" alt="">
            </div>
            <div class="photo-stream">
                <img src="<?php bloginfo('template_directory'); ?>/img/stream/05.jpg" alt="">
            </div>
            <div class="photo-stream">
                <img src="<?php bloginfo('template_directory'); ?>/img/stream/06.jpg" alt="">
            </div>
        </div>

        <div class="span3">
            <h2>Newsletter</h2>
            Subscribe to our newsletter and we’ll keep you up-to-date with theme news and special deals. Get in touch
            everytime.
            <br><br>
            <div class="newsletter-container">
                <form action="#" id="nlForm" method="post">
                    <input class="newsletter" type="text" name="email" id="email" value="">
                    <div id="submit" class="newsletter-button" onclick="document.myform.submit()"><i
                            class="icon-ok"></i></div>
                </form>
                <div id="message" style="display: none;"></div>
                <div id="waiting" style="display: none;">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ajax-loader.gif" title="Loader" alt="Loader">
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="span7 copyright">
            &copy; 2013 <span class="white bold">Cadem</span><span class="green bold"> ~</span> All rights reserved.
            Designed by <a href="http://www.entiri.com" rel="external"><b>entiri</b></a>
        </div>
        <div class="span4 copyright right">
            <a href="#">Legal Notice</a> | <a href="#">Terms & Conditions</a>
        </div>
        <div class="span1">
            <a id="back-to-the-top">
                <div class="back-top"></div>
            </a>
        </div>
    </div>

</div>
<!-- Footer End -->

<?php wp_footer(); ?>

</body>
</html>