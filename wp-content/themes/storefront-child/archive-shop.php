
<?php
/*
Template Name: Om oss
*/
 ?>

<?php get_header(); ?>

<?php $args = array(
    'post_type' => 'shop',
    'post_per_page' => 10,
);
    $loop = new WP_Query($args);
while ($loop-> have_posts()) {
    $loop->the_post();
    ?>
    <div>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <?php
}
 ?>   