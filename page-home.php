<?php
/* Template Name: Home Page*/
get_header();
$fields = get_fields('option');
?>




<div class="b-txt__tab">
	<div class="wrapper p-typical">

		<?php  if (is_page_template('page-home.php') ) :  ?>
				<article><?php the_content(); ?></article>
		<?php endif; ?>


		<div class="headline__typical wow fadeInUp">
			<h3><?php echo $fields['second_block_title']; ?></h3>
			<h4><?php echo $fields['second_block_subtitle']; ?></h4>
		</div> <!-- .headline__typical -->

		<div class="b-tabs p-typical wow fadeInUp">
			<ul class="nav nav-justified">
				<?php foreach ($fields['steps'] as $key => $step) { ?>
					<li <?php if ($key == 0) { echo  'class="active"';} ?> id="tabnav-<?php echo $key; ?>"><a><?php echo $step['title']; ?></a></li>
				<?php } ?>

			</ul>

			<div class="tab-content wow fadeInUp">
				<?php foreach ($fields['steps'] as $key => $step) { ?>
					<div id="tab-<?php echo $key; ?>" class="tab-pane fade <?php if ($key == 0) {echo 'in active'; } ?>">
						<?php echo $step['text'] ?>
					</div>
				<?php } ?>
			</div>
		</div> <!-- .b-tabs -->
	</div> <!-- .wrapper -->
</div> <!-- .b-txt__tab -->

<div class="b-txt__list bg-grey" id="services">
	<div class="wrapper p-typical">
		<div class="headline__typical wow fadeInUp">
			<h3><?php echo $fields['services_title']; ?></h3>
		</div> <!-- .headline__typical -->

		<div class="b-list p-typical">
			<?php foreach ($fields['services'] as $service) { ?>
				<div class="b-list_item wow fadeInUp">
					<h4>
						<?php if ($service['link']) { ?>
							<a href="<?php echo $service['link']; ?>"><?php echo $service['title']; ?></a>
						<?php } else { ?>
							<?php echo $service['title']; ?>
						<?php } ?>
					</h4>
					<?php echo $service['text']; ?>
				</div> <!-- .b-list_item -->
			<?php } ?>
		</div> <!-- .b-list -->
	</div> <!-- .wrapper -->
</div> <!-- .txt__tab -->

<div class="b-squares">
	<div class="wrapper p-typical">
		<div class="headline__typical wow fadeInUp">
			<h3><?php echo $fields['sla_title']; ?></h3>
			<h4><?php echo $fields['sla_subtitle']; ?></h4>
		</div> <!-- .headline__typical -->

		<div class="squares p-typical wow">
			<?php $slasteps = array_chunk($fields['sla_steps'], 2); ?>
			<?php $i = 0;
			foreach ($slasteps as $key => $slastep) {
				if ($key == 0) {
					foreach ($slastep as $key => $step) {
						$i++;
						if ($key == 0) { ?>
							<div class="squares__item squares__item-<?php echo $i; ?>">
								<h5><?php echo $step['title']; ?></h5>
								<p><?php echo $step['text']; ?></p>

								<div class="squares__item-dec">
									<div class="square square-<?php echo $step['color'] ?>"></div>
									<div class="line"></div>
								</div> <!-- .squares__item-dec -->
							</div> <!-- .squares__item -->
						<?php } else { ?>
							<div class="squares__item squares__item-<?php echo $i; ?> wow fadeIn" data-wow-delay="<?php echo $step['wowdelay'] ?>">
								<h5><?php echo $step['title']; ?></h5>
								<p><?php echo $step['text']; ?></p>

								<div class="squares__item-dec">
									<div class="square square-<?php echo $step['color'] ?>"></div>
									<div class="line"></div>
								</div> <!-- .squares__item-dec -->
							</div> <!-- .squares__item -->
						<?php }
					}
				} else { ?>
					<?php foreach ($slastep as $key => $step) { $i++; ?>
						<?php if ($step['wowdelay_hidden']) {  ?>
							<div class="squares__item squares__item-<?php echo $i; ?> wow fadeIn hidden-xs" data-wow-delay="<?php echo $step['wowdelay_hidden']; ?>">
								<h5><?php echo $step['title']; ?></h5>
								<p><?php echo $step['text']; ?></p>

								<div class="squares__item-dec">
									<div class="square square-<?php echo $step['color']; ?>">
										<div class="line"></div>
									</div> <!-- .square -->

									<div class="line visible-xs"></div>
								</div> <!-- .squares__item-dec -->
								<?php if ($i == 5) { ?>
									<div class="squares__item-dec_2">
										<div class="line-2"></div>
									</div>
								<?php } ?>
							</div> <!-- .squares__item -->
						<?php } ?>
						<?php if ($step['wowdelay']) { ?>
							<div class="squares__item squares__item-<?php echo $i; ?> wow fadeIn visible-xs" data-wow-delay="<?php echo $step['wowdelay']; ?>">
								<h5><?php echo $step['title']; ?></h5>
								<p><?php echo $step['text']; ?></p>

								<div class="squares__item-dec">
									<div class="square square-<?php echo $step['color']; ?>">
										<div class="line"></div>
									</div> <!-- .square -->

									<div class="line visible-xs"></div>
								</div> <!-- .squares__item-dec -->
								<?php if ($i == 5) { ?>
									<div class="squares__item-dec_2">
										<div class="line-2"></div>
									</div>
								<?php } ?>
							</div> <!-- .squares__item -->
						<?php } ?>




					<?php } ?>
				<?php } ?>
				<?php if ($i == 5) {} else { ?>
					<div class="cf"></div>
				<?php } ?>

			<?php } ?>
		</div> <!-- .squares -->
	</div> <!-- .wrapper -->
</div> <!-- .b-squares -->

<div class="b-clients" id="clients">
	<div class="wrapper p-typical">
		<div class="headline__typical wow fadeInUp">
			<h3><?php echo $fields['our_clients_title']; ?></h3>
		</div> <!-- .headline__typical -->

		<div class="clients p-typical">
			<?php foreach ($fields['clients'] as $client) { ?>
				<div class="clients__item <?php if ($client['square'] == true) { echo 'clients__item-square'; } ?> wow fadeInUp">
					<img class="original" src="<?php echo $client['logo']; ?>" alt="<?php echo $client['testimonial_name']; ?>">
					<img class="hover <?= $client['testimonial'] ? 'testimonial-popover' : '' ?>" src="<?php echo $client['logo_hover']; ?>" alt="<?php echo $client['testimonial_name']; ?>"
						<?php if($client['testimonial']) {?>
							data-toggle="popover"
							data-content=" <span><?= $client['testimonial']; ?></span> <h6><?= $client['testimonial_name']; ?></h6> <p><?=$client['testimonial_position']; ?></p> "
						<?php } ?>
					>
				</div> <!-- .clients__item -->
			<?php } ?>
		</div> <!-- .clients -->
	</div> <!-- .wrapper -->
</div> <!-- .b-clients -->

<div class="b-team">
	<div class="wrapper p-typical">
		<!-- <div class="headline__typical wow fadeInUp">
            <h3><?php // echo $fields['bottom_title']; ?></h3>
        </div>--> <!-- .headline__typical -->

		<div class="team p-typical">
			<div class="team__item wow fadeInUp">
				<div class="team__item-headline">
					<h4><?php echo $fields['bottom_subtitle']; ?></h4>
				</div> <!-- .team__item-headline -->

				<div class="team__item-email">
					<a href="mailto:<?php echo $fields['bottom_email']; ?>"><?php echo $fields['bottom_email']; ?></a>
				</div> <!-- .team__item-email -->

				<div class="team__item-phone">
					<!-- <a href="tel:+380737951135">+380 73 795 1135</a> -->
				</div> <!-- .team__item-email -->
			</div> <!-- .team__item -->

		</div> <!-- .team -->
	</div> <!-- .wrapper -->
</div> <!-- .b-team -->

<?php get_footer(); ?>
