<!doctype html> 
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Work Around</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" 1>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <style type="text/css">
        html[lang="en-US"] .ua-link,
        html[lang="uk"] .en-link {
            display: none;
        }
        .menu-item-183 > a {
            display: none !important;
        }
        .menu-item-183 li {
            margin: 0 !important;
        }
        .menu-item-183 li img {
            display: none;
        }
        html[lang="en-US"] .qtranxs-lang-menu-item-en,
        html[lang="uk"] .qtranxs-lang-menu-item-ua {
            display: none;
        }
         
        .sub-menu {
            padding: 0;
            margin: 0;
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Костыль для того чтобы убрать пробел с языка
            $('.menu-item-183 .sub-menu li a').each(function() {
                text = $(this).text();
                text = text.trim();
                $(this).text(text);
            });
            
        });
    </script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124173017-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124173017-1');
</script>
</head>

<?php
$post_id = get_the_ID();
?>

<body <?php body_class(); ?>>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="icon-close" viewBox="0 0 18 18">
        <path fill="#000" fill-rule="nonzero" d="M18 1.043L16.956 0 9 7.957 1.043 0 0 1.043 7.957 9 0 16.957 1.043 18 9 10.044 16.956 18 18 16.957 10.043 9z"/>
    </symbol>

    <symbol id="icon-linkedin" viewBox="0 0 18 18">
        <path fill="#000" fill-rule="nonzero" d="M18 10.556v6.661h-3.858v-6.215c0-1.561-.558-2.627-1.954-2.627-1.066 0-1.7.718-1.98 1.413-.102.248-.128.594-.128.942v6.487H6.22s.053-10.526 0-11.617h3.86v1.647l-.026.037h.026v-.037c.512-.79 1.428-1.92 3.477-1.92 2.54 0 4.443 1.66 4.443 5.229zM2.184 0C.864 0 0 .867 0 2.007c0 1.115.839 2.008 2.133 2.008h.025c1.346 0 2.183-.893 2.183-2.008C4.316.867 3.504 0 2.184 0zM.229 17.217h3.858V5.6H.229v11.617z"/>
    </symbol>

    <symbol id="icon-fb" viewBox="0 0 10 19">
        <path fill="#000" fill-rule="nonzero" d="M9.623.004L7.225 0C4.53 0 2.789 1.811 2.789 4.614v2.128H.377A.38.38 0 0 0 0 7.124v3.083a.38.38 0 0 0 .377.382H2.79v7.779a.38.38 0 0 0 .377.382h3.146a.38.38 0 0 0 .378-.382v-7.779h2.82a.38.38 0 0 0 .376-.382l.002-3.083a.386.386 0 0 0-.11-.27.375.375 0 0 0-.268-.112H6.69V4.938c0-.866.203-1.307 1.317-1.307h1.616A.38.38 0 0 0 10 3.249V.386a.38.38 0 0 0-.377-.382z"/>
    </symbol>
</svg>

<div class="top <?php  if (is_home() || is_singular('services')) :  ?> top__black <?php endif; ?> <?php echo is_singular('services') ? 'top__black--singular' : NULL; ?>">
    <div class="wrapper">
        <div class="top__headline">
            <div class="top__logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
                </a>
            </div> <!-- .top__logo -->
            <div class="top__nav">
                <ul class="list-unstyled">
                <?php theme_nav(); ?>
                </ul>
            </div> <!-- .top__nav -->

            <div class="top__burger">
                <button class="burger-btn"><i></i><i></i><i></i></button>
            </div> <!-- .top__burger -->
        </div> <!-- .top__headline -->
    </div> <!-- .wrapper -->
    <?php  if (is_home()) :  ?>
    <div class="top__l">
        <p><?php the_field('first_line_left', 'option'); ?><br>
        <?php the_field('second_line_left', 'option'); ?></p>
        <span><?php the_field('third_line_left', 'option'); ?></span>
        <span class="mobile"><?php the_field('third_line_left_mobile', 'option'); ?></span>
    </div> <!-- .top__l -->

    <div class="top__r">
        <p><?php the_field('first_line_right', 'option'); ?><br> <?php the_field('second_line_right', 'option'); ?></p>
        <span><?php the_field('third_line_right', 'option'); ?></span>
        <span class="mobile"><?php the_field('third_line_right_mobile', 'option'); ?></span>
        <a href="<?php the_field('link', 'option'); ?>"><i><?php the_field('link_text', 'option'); ?></i></a>
    </div> <!-- .top__r -->
	<?php endif; ?>

    <?php  if (is_singular('services')) :  ?>
    <div class="top__l">
        <p><?php the_field('first_line_left', $post_id); ?></p>
        <span><?php the_field('second_line_left', $post_id); ?></span> <br>
        <span><?php the_field('third_line_left', $post_id); ?></span>
        <span class="mobile"><?php the_field('third_line_left_mobile', $post_id); ?> </span>
    </div> <!-- .top__l -->

    <div class="top__r">
        <p><?php the_field('first_line_right', $post_id); ?></p>
        <span><?php the_field('second_line_right', $post_id); ?></span> <br>
        <span><?php the_field('third_line_right', $post_id); ?></span>
        <span class="mobile"> <?php the_field('third_line_right_mobile', $post_id); ?></span>
    </div> <!-- .top__r -->
	<?php endif; ?>
</div> <!-- .top -->
