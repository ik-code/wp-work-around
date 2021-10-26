<?php get_header();
$post_id = get_the_ID();
?>
<?php get_header(); ?>
<div class="wrapper p-typical">
    <div class="vacancy">
        <div class="vacancy__headline">
            <h2 ><?php the_title(); ?></h2>
        </div> <!-- .contact__headline -->
        <div class="vacancies__content">
                <?php the_content(); ?>
        </div> <!-- .vacancies__content -->
    </div> <!-- .vacancies -->
</div> <!-- .wrapper -->

<?php get_footer(); ?>


<?php get_footer(); ?>
