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
