
<!-- remove_all_actions()'storefront_header', '') -->


<?php
while (have_posts()) {
    the_post(); ?>
    <h1><?php the_title();?></h1>
    <?php the_content();    
}
$id = get_the_ID();
   $url = get_post_meta($id, 'google_maps', true);
        ?>
        <a href="<?php echo $url; ?>">Karta till butiken</a>