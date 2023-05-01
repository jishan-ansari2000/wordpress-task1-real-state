<?php get_header(); ?>
<?php 
$postDetails = CFS()->get();
print_r($postDetails);
?>
<h1><?php the_title(); ?></h1>

<?php get_footer(); ?>