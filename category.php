<?php get_header(); ?>

<div class="wrapper p-typical">
    <div class="cases">
        <div class="cases__headline wow fadeInUp">
            <h3><?php echo single_cat_title(); ?></h3>
        </div> <!-- .cases__headline -->
        <?php query_posts('posts_per_page=-1'); ?>
        <div class="cases__items">
        	<?php $i = 1; while(have_posts()) : the_post(); ?>
            <div class="cases__item cases__item-<?php echo $i; ?> wow fadeInUp">
                <div class="cases__item-headline wow fadeInUp">
                    <h3><?php the_title(); ?></h3>
                </div> <!-- .cases__item-headline -->

                <div class="cases__item-content wow fadeInUp">
                    <p><?php the_field('short_description'); ?></p>
                </div> <!-- .cases__item-content -->
            </div> <!-- .cases__item -->
        	<?php $i++; endwhile; ?>
        </div> <!-- .cases__items -->
    </div> <!-- .cases -->
</div> <!-- .wrapper -->
<?php $i = 1; while (have_posts()) : the_post(); ?>
<div class="case__open case__open-<?php echo $i; ?>">
    <div class="case__open-in">
        <div class="case__open-close">
            <button class="btn btn-close">
                <svg class="icon icon-close">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use>
                </svg>

                <span><?php _e('[:ua]Закрити[:en]Close'); ?></span>
            </button>
        </div> <!-- .case__open-close -->

        <div class="case__open-headline">
            <h3><?php the_title(); ?></h3>
            <p>
                <span class="case__open-img">
                    <?php $image = get_field('image'); ?>
                    <img src="<?php echo $image['url']; ?>" alt="">
                </span> <!-- .case__open-img -->
                <?php the_field('short_description'); ?>
            </p>
        </div> <!-- .case__open-headline -->



        <div class="case__open-details">
        	<?php foreach (get_field('descr_blocks') as $block) { ?>
    		<div class="case__open-details_item">
                <div class="case__open-details-l">
                    <h3><?php echo $block['label']; ?></h3>
                </div> <!-- .case__open-details-l -->

                <div class="case__open-details-r">
                    <p><?php echo $block['description']; ?></p>
                </div> <!-- .case__open-details-r -->
            </div> <!-- .case__open-details_item -->
        	<?php } ?>

            <div class="case__open-details_item">
                <?php if (get_field('reviews_title')) : ?>
                <div class="case__open-details-l">
                    <h3><?php the_field('reviews_title'); ?></h3>
                </div> <!-- .case__open-details-l -->
                <?php endif; ?>
                <div class="case__open-details-r">
                	<?php foreach (get_field('reviews') as $review) { ?>
                	<div class="client__feedback">
                        <div class="client__feedback-headline">
                            <div class="client__feedback-headline_img">
                                <img src="<?php echo $review['photo']['url']; ?>" alt="">
                            </div> <!-- .client__feedback-headline_img -->

                            <div class="client__feedback-headline_desc">
                                <h3><?php echo $review['name']; ?></h3>
                                <h4><?php echo $review['position']; ?></h4>
                            </div> <!-- .client__feedback-headline_desc -->
                        </div> <!-- .client__feedback-headline -->

                        <div class="client__feedback-content">
                            <blockquote>“<?php echo $review['quote']; ?>”</blockquote>
                        </div> <!-- .client__feedback-content -->
                    </div> <!-- .client__feedback -->
                	<?php } ?>
                </div> <!-- .case__open-details-r -->
            </div> <!-- .case__open-details_item -->
        </div> <!-- .case__open-details -->
    </div> <!-- .case__open-in -->
</div> <!-- .case__open -->
<?php $i++; endwhile; ?>




<?php get_footer(); ?>
