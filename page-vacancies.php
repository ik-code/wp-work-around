<?php get_header();
?>
<div class="wrapper p-typical">
    <div class="vacancies">
        <div class="vacancies__headline">
            <h2><?php the_title(); ?></h2>
            <?php
            $args = [
              'post_type'      => 'vacancies',
              'post_status'    => 'publish',
              'posts_per_page' => -1,
              'orderby'        => 'title',
              'order'          => 'ASC',
            ];
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="vacancies__item">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt();?></p>
                    <a href="<?php the_permalink();?>" target="_blank">View Job</a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div> <!-- .contact__headline -->

        <div class="vacancies__content">


        </div> <!-- .vacancies__content -->
    </div> <!-- .vacancies -->
</div> <!-- .wrapper -->

<?php get_footer(); ?>
