<?php get_header();
$post_id = get_the_ID();
$list_title_first = get_field('list_title_first', $post_id);
$list_title_second = get_field('list_title_second', $post_id);
$list_type_second = get_field('list_type_second', $post_id);
?>

<div id="services-list" class="numbered-list">
	<div class="numbered-list__wrapper wrapper p-typical">
		<div class="numbered-list__title headline__typical wow fadeInUp">
			<h3><?php echo $list_title_first; ?></h3>
		</div> <!-- .headline__typical -->

		<div class="numbered-list__inner">
        
			<?php if( have_rows('list_first') ): ?>
				<ol class="numbered-list__items list-unstyled">
					<?php while( have_rows('list_first') ): the_row();
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						$add_nested_list = get_sub_field('add_nested_list');
						$add_editor = get_sub_field('add_editor');
                        $editor = get_sub_field('editor');

                        $add_row_3_col= get_sub_field('add_row_3_col');
                        $first_col_percentage = get_sub_field( 'first_col_percentage' );
                        $second_col_percentage = get_sub_field( 'second_col_percentage' );
                        $third_col_percentage = get_sub_field( 'third_col_percentage' );

						$add_image = get_sub_field('add_image');
						$image = get_sub_field('image');
						$add_icons_list = get_sub_field('add_icons_list');
						$icons_list_type = get_sub_field('icons_list_type');
						$add_steps = get_sub_field('add_steps');
						$list_steps = get_sub_field('steps');
						?>
						<li class="numbered-list__item wow fadeInUp">
                            <div class="numbered-list__heading wow">
                                <h5 class="numbered-list__caption">
                                    <span><?php echo $title; ?></span>
                                    <span class="numbered-list__line"></span>
                                </h5>
                            </div>

                            <?php if ($text): ?>
                                <div class="numbered-list__text">
                                    <?php echo $text; ?>


                                    <?php if ($first_col_percentage && $second_col_percentage && $third_col_percentage && $add_row_3_col): ?>
                                      <div class="container-fluid rectruting-services">

                                            <!-- Three columns of text below the carousel -->
                                            <div class="row-flex">
                                                <div class="col-4 rectruting-services-item text-center">
                                                    <div class="rectruting-services-item__percentage"><?php the_sub_field( 'first_col_percentage' ); ?></div>
                                                    <h3 class="rectruting-services-item__headline"><?php the_sub_field( 'first_col_headline' ); ?></h3>
                                                    <p class="rectruting-services-item__wr-link">
                                                        <button data-service="<?php the_sub_field( 'first_col_percentage' ); ?>" type="button" data-toggle="modal" data-target=".bs-example-modal-md" class="btn btn-default link-service">Get in touch</button>
                                                    </p>
                                                </div><!-- /.col-4 -->
                                                <div class="col-4 rectruting-services-item text-center">
                                                    <div class="rectruting-services-item__percentage"><?php the_sub_field( 'second_col_percentage' ); ?></div>
                                                    <h3 class="rectruting-services-item__headline"><?php the_sub_field( 'second_col_headline' ); ?></h3>
                                                    <p class="rectruting-services-item__wr-link">
                                                        <button data-service="<?php the_sub_field( 'second_col_percentage' ); ?>" type="button" data-toggle="modal" data-target=".bs-example-modal-md" class="btn btn-default link-service">Get in touch</button>
                                                    </p>
                                                </div><!-- /.col-4 -->
                                                <div class="col-4 rectruting-services-item text-center">
                                                    <div class="rectruting-services-item__percentage"><?php the_sub_field( 'third_col_percentage' ); ?></div>
                                                    <h3 class="rectruting-services-item__headline"><?php the_sub_field( 'third_col_headline' ); ?></h3>
                                                    <p class="rectruting-services-item__wr-link">
                                                        <button data-service="<?php the_sub_field( 'third_col_percentage' ); ?>" type="button" data-toggle="modal" data-target=".bs-example-modal-md" class="btn btn-default link-service">Get in touch</button>
                                                    </p>
                                                </div><!-- /.col-lg-4 -->
                                            </div><!-- /.row -->
                                        </div><!-- / . container marketing -->
                                        <?php endif; ?>


                                </div>
                            <?php endif; ?>

							<?php if( have_rows('nested_list') && $add_nested_list ): ?>
								<ol class="numbered-list__nested-list nested-list list-unstyled">
									<?php while( have_rows('nested_list') ): the_row();
										$text = get_sub_field('text');
										?>
										<li class="nested-list__item wow fadeInUp">
											<?php if ($text): ?>
                                                <div  class="nested-list__text"><?php echo $text; ?></div>
											<?php endif; ?>
										</li>
									<?php endwhile; ?>
								</ol>
							<?php endif; ?>

							<?php if ($editor && $add_editor): ?>
                                <div  class="numbered-list__editor wow fadeInUp"><?php echo $editor; ?></div>
							<?php endif; ?>

							<?php if (!empty( $image ) && $add_image): ?>
                                <div  class="numbered-list__image wow fadeInUp">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
							<?php endif; ?>

							<?php if( have_rows('icons_list') && $add_icons_list ): ?>
                                <div class="numbered-list__icons-list icons-list">
									<?php while( have_rows('icons_list') ): the_row();
										$icon = get_sub_field('icon');
										$title = get_sub_field('title');
										$text = get_sub_field('text');
										?>
                                        <div class="icons-list__item icons-list__item--<?php echo $icons_list_type; ?> wow fadeInUp">
											<?php if ($icon): ?>
                                                <div  class="icons-list__icon"><img src="<?php echo $icon; ?>" alt="icon"></div>
											<?php endif; ?>

											<?php if ($title): ?>
                                                <h6  class="icons-list__title"><?php echo $title; ?></h6>
											<?php endif; ?>

											<?php if ($text): ?>
                                                <div  class="icons-list__text"><?php echo $text; ?></div>
											<?php endif; ?>
                                        </div>
									<?php endwhile; ?>
                                </div>
							<?php endif; ?>

							<?php if( have_rows('steps') && $add_steps ): ?>
                                <div class="b-steps">
                                    <div class="steps hidden-xs">
										<?php $steps = array_chunk($list_steps, 2); ?>
										<?php $i = 0; $parameter = 0;
                                            foreach ($steps as $key => $step) {
                                                foreach ($step as $key => $step) {
                                                    $i++; $parameter = ($i === 1) ? 0 : $parameter + 1.25 ; ?>


                                                    <div class="steps__item steps__item-<?php echo $i; ?> wow fadeIn" data-wow-duration="0.5s" data-wow-delay="<?php echo $parameter; ?>s"> <!-- <?php // echo ($i === 1) ? 0 : (($i - 1) * 3 + 1); ?>s -->

                                                        <div class="steps__heading wow">
                                                            <h5><?php echo $step['title']; ?></h5>
                                                            <div class="steps__item-dec">
                                                                <div class="square square-<?php echo $step['color'] ?>"></div>
                                                                <div class="line line-<?php echo $step['color'] ?>"></div>
                                                            </div> <!-- .steps__item-dec -->
                                                        </div>

                                                        <div class="steps__text wow">
                                                            <p><?php echo $step['text']; ?></p>
                                                            <div class="line-2 line-<?php echo $step['color'] ?>"></div>
                                                        </div>
                                                    </div> <!-- .steps__item -->

                                                <?php } ?>
                                        <?php } ?>
                                    </div> <!-- .steps -->
                                    <div class="steps visible-xs">
										<?php $steps = array_chunk($list_steps, 2); ?>
										<?php $i = 0;
                                            foreach ($steps as $key => $step) {
                                                foreach ($step as $key => $step) {
                                                    $i++; ?>

                                                    <div class="steps__item steps__item-<?php echo $i; ?> wow fadeIn">

                                                        <div class="steps__item-inner">
                                                            <div class="steps__heading wow">
                                                                <h5><?php echo $step['title']; ?></h5>
                                                            </div>

                                                            <div class="steps__text wow">
                                                                <p><?php echo $step['text']; ?></p>
                                                            </div>

                                                            <div class="line-3"></div>
                                                        </div>

                                                    </div> <!-- .steps__item -->

                                                <?php } ?>
                                        <?php } ?>
                                    </div> <!-- .steps -->
                                </div> <!-- .b-steps -->
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ol>
			<?php endif; ?>
		</div> <!-- .b-list -->
	</div> <!-- .wrapper -->
</div> <!-- .txt__tab -->

<div id="services-instruments" class="numbered-list">
	<div class="numbered-list__wrapper wrapper p-typical">
		<div class="numbered-list__title headline__typical wow fadeInUp">
			<h3><?php echo $list_title_second; ?></h3>
		</div> <!-- .headline__typical -->

		<div class="numbered-list__inner">
			<?php if( have_rows('list_second') ): ?>
				<ol class="numbered-list__items list-unstyled">
					<?php while( have_rows('list_second') ): the_row();
						$title = get_sub_field('title');

						?>
						<li class="numbered-list__item numbered-list__item--<?php echo $list_type_second; ?> wow fadeInUp">
                            <div class="numbered-list__heading wow">
                                <h5 class="numbered-list__caption">
                                    <span><?php echo $title; ?></span>
                                    <span class="numbered-list__line"></span>
                                </h5>
                            </div>
						</li>
					<?php endwhile; ?>
				</ol>
			<?php endif; ?>
		</div> <!-- .b-list -->
	</div> <!-- .wrapper -->
</div> <!-- .txt__tab -->

<!-- Small modal -->
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <?php
            echo do_shortcode('[contact-form-7 id="368" title="Untitled"]');
            ?>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function ($) {
        $('.link-service').on('click', function () {
            var service = $(this).attr('data-service');
            $('input[name="our-service"]').val(service);
            $('.our-service').text(service)
        })
    });
</script>
<?php get_footer(); ?>
