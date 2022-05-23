<?php if (!is_page('vacancies')): ?>
    <?php if (!is_singular('vacancies')): ?>
        <div id="contact-form" class="contact-form">
            <div class="contact-form__wrapper wrapper p-typical headline__typical">
                <div class="contact-form__inner">
                    <?php echo do_shortcode(
                      '[contact-form-7 id="326" title="Contact form 1"]'
                    ); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<footer class="footer">
<!--    <div class="footer__before p-typical">-->
<!--		<a href="--><?php //the_field('bottom_link_right_url', 'option'); ?><!--"></a>-->
<!--        <div class="wrapper p-typical">-->
<!--            <div class="footer__before-txt">-->
<!--                <h5 class="wow fadeInUp"><a href="--><?php //the_field('bottom_link_left_url', 'option'); ?><!--">--><?php //the_field('bottom_link_left_text', 'option'); ?><!--</a></h5>-->
<!--                <a href="--><?php //the_field('bottom_link_right_url', 'option'); ?><!--" class="git p-typical wow fadeInUp">--><?php //the_field('bottom_link_right_text', 'option'); ?><!--</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

    <div class="footer__main">
        <div class="footer__main-wrapper wrapper p-typical">
<!--            <div class="footer__main-logo">-->
<!--                <a href="--><?php //echo home_url(); ?><!--">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/logo.png" alt="">-->
<!--                </a>-->
<!--            </div>-->

            <div class="footer__main-item footer__main-socials wow fadeInUp">
                <p>Follow us</p>

                <div class="socials">
                    <a href="<?php the_field('facebook_link','option'); ?>" class="socials__item socials__item-fb">
                        <svg class="icon icon-fb">
                            <path fill="#000" fill-rule="nonzero" d="M9.623.004L7.225 0C4.53 0 2.789 1.811 2.789 4.614v2.128H.377A.38.38 0 0 0 0 7.124v3.083a.38.38 0 0 0 .377.382H2.79v7.779a.38.38 0 0 0 .377.382h3.146a.38.38 0 0 0 .378-.382v-7.779h2.82a.38.38 0 0 0 .376-.382l.002-3.083a.386.386 0 0 0-.11-.27.375.375 0 0 0-.268-.112H6.69V4.938c0-.866.203-1.307 1.317-1.307h1.616A.38.38 0 0 0 10 3.249V.386a.38.38 0 0 0-.377-.382z"></path>
                        </svg>
                    </a>
                    <a href="<?php the_field('instagram_link','option'); ?>" class="socials__item socials__item-in">
                        <svg class="icon icon-linkedin">
                            <path fill="#000" fill-rule="nonzero" d="M18 10.556v6.661h-3.858v-6.215c0-1.561-.558-2.627-1.954-2.627-1.066 0-1.7.718-1.98 1.413-.102.248-.128.594-.128.942v6.487H6.22s.053-10.526 0-11.617h3.86v1.647l-.026.037h.026v-.037c.512-.79 1.428-1.92 3.477-1.92 2.54 0 4.443 1.66 4.443 5.229zM2.184 0C.864 0 0 .867 0 2.007c0 1.115.839 2.008 2.133 2.008h.025c1.346 0 2.183-.893 2.183-2.008C4.316.867 3.504 0 2.184 0zM.229 17.217h3.858V5.6H.229v11.617z"></path>
                        </svg>
                    </a>
                </div> <!-- .socials -->
            </div> <!-- .footer__main-socials -->

            <div class="footer__main-item footer__main-email wow fadeInUp">
                <p><?php the_field('bottom_subtitle','option'); ?></p>

                <div class="email">
                    <a href="mailto:<?php the_field('bottom_email','option'); ?>" class="email__item">
	                    <?php the_field('bottom_email','option'); ?>
                    </a>
                </div> <!-- .email -->
            </div> <!-- .footer__main-email -->

            <div class="footer__main-item footer__main-git wow fadeInUp">
                <div class="git">
                    <a href="<?php the_field('bottom_link_right_url', 'option'); ?>" class="git__link" target="_blank"><?php the_field('bottom_link_right_text', 'option'); ?></a>
                </div> <!-- .git -->
            </div> <!-- .footer__main-git -->

<!--            <div class="footer__main-copy wow fadeInUp">-->
<!--                <p>--><?php //the_field('copyright_text','option'); ?><!--</p>-->
<!--            </div>-->
        </div> <!-- .wrapper -->
    </div> <!-- .footer__main -->
</footer> <!-- .footer -->

<div class="overlay_menu">
    <div class="overlay_menu-in">
        <div class="wrapper p-typical">
            <div class="overlay_menu__in">
                <nav class="overlay_menu__nav">
                    <?php theme_nav(); ?>
                </nav><!--.overlay_menu__nav-->

                <div class="overlay_menu__in-contacts">
                    <p><?php the_field('adress', 5); ?></p>
                </div> <!-- .overlay_menu__in-contacts -->

                <div class="overlay_menu__in-contact">
                    <p><?php the_field('bottom_link_left_text', 'option'); ?></p>
                    <a href="<?php the_field('bottom_link_right_url', 'option'); ?>">Get in touch</a>
                </div> <!-- .overlay_menu__in-contact -->
            </div><!--.overlay_menu__in-->
        </div> <!-- .wrapper -->
    </div> <!-- .overlay_menu-in -->
    <style type="text/css">
        .overlay_menu .wpm-languages {
            display: none; 
        }
    </style>
    <div class="footer">
        <div class="wrapper">
            <div class="footer__copy hidden-xs hidden-sm">
                <p><?php the_field('copyright_text','option'); ?></p>
            </div> <!-- .footer__copy -->

            <div class="footer__main-socials">
                <p>Follow us</p>

                <div class="socials">
                    <a href="<?php the_field('facebook_link','option'); ?>" class="socials__item socials__item-fb">
                        <svg class="icon icon-fb">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-fb"></use>
                        </svg>
                    </a>
                    <a href="<?php the_field('instagram_link','option'); ?>" class="socials__item socials__item-in">
                        <svg class="icon icon-linkedin">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-linkedin"></use>
                        </svg>
                    </a>
                </div> <!-- .socials -->
            </div> <!-- .footer__main-socials -->





            
            <div class="footer__copy-wrap">
                <div class="footer__copy">
                    <p><?php the_field('copyright_text','option'); ?> <?php echo date("Y") ?></p>
                </div> <!-- .footer__copy -->

                <!-- .footer__name -->
            </div> <!-- .footer__copy-wrap -->
        </div> <!-- .wrapper -->
    </div> <!-- .footer -->
</div><!--.overlay_menu--> 
<?php wp_footer(); ?>
</body>
</html>