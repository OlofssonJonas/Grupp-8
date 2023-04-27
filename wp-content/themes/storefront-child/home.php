
<?php get_header();?>


<?php while (have_posts()) {
    the_post(); ?>
     <h2 class="title"><a href ="<?php the_permalink(); ?>">
	<?php the_title(); ?></a></h2>
        <?php the_content();?><br>
        
        
<?php
}
?>

<?php get_footer(); ?>