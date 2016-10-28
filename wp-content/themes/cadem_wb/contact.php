<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

    <div class="row">
        <div class="span9">
            <h1>Contact</h1>
            <h2>Our Location</h2>

            <!-- Map -->
            <div class="container">
                <div class="row">
                    <div class="span9">
                        <iframe id="map"
                                src="https://maps.google.sk/maps/ms?msa=0&amp;msid=210946297010027755543.0004c74af772bb9276d33&amp;ie=UTF8&amp;ll=48.576981,19.13117&amp;spn=0,0&amp;t=m&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>

            <div class="row space30"></div>

            <div class="contact-form-title">
                <h2>Contact Form</h2>
                This comment form is optional.
            </div>

            <div class="row space30"></div>

            <form class="form-main" method="post" action="#">
                <div class="row">
                    <div class="span5 gray4">
                        <span class="gray4">E-mail</span> <span class="red">*</span> (never published)<br/>
                        <input type="text" name="email" value=""><br/>
                    </div>
                    <div class="span4">
                        Name<br/>
                        <input type="text" name="name" value="">
                    </div>
                </div>

                <div class="row">
                    <div class="span9 gray4">
                        Message <span class="red">*</span><br>
                        <textarea name="message"></textarea>
                    </div>
                </div>

                <div class="row space20"></div>

                <div class="row">
                    <div class="span5 thank">
                        Thank You for Message!
                    </div>
                    <div class="span4">
                        <button class="btn f-right" onclick="document.myform.submit()"><i class="icon-ok"></i> Send
                            Message
                        </button>
                    </div>
                </div>
            </form>

        </div>

        <div class="span3">
            <div class="actual-section">
                <a href="index.html">Home</a> > About Us
            </div>

            <h2>Address</h2>
            81 Sunnyvale Street<br>
            Los Angeles, CA 90185, USA<br>
            <br>
            <i class="icon-phone m-right10"></i> +48 880 440 110<br>
            <i class="icon-envelope m-right10"></i> <a class="gray"
                                                       href="mailtosupport@example.com">support@example.com</a><br>
            <i class="icon-home m-right10"></i> <a class="gray" href="http://www.example.com">www.example.com</a><br>

            <div class="row space30"></div>

            <h2>Information</h2>
            Chocolate cake bear claw cake wypas lollipop jelly beans chocolate bar ice cream. Jelly beans ice cream
            chocolate bar carrot cake liquorice tootsie roll applicake. Plusieurs variations de Lorem Ipsum peuvent être
            trouvées ici ou là, mais la majeure partie d'entre elles a été altérée par l'addition d'humour.

            <div class="row space30"></div>

            <h2>Social</h2>
            <div class="logo-contact">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo-contact.png" alt="">
            </div>
            <div class="thanks">Thanks for visiting,<br>get in touch...</div>

            <a href="#" class="social-network dribbble"></a>
            <a href="#" class="social-network linkedin"></a>
            <a href="#" class="social-network behance"></a>
            <a href="#" class="social-network pinterest"></a>
            <a href="#" class="social-network facebook"></a>
            <a href="#" class="social-network vimeo"></a>

        </div>
    </div>

<?php get_footer(); ?>