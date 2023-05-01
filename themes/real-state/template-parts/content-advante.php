<?php  

$wpOurAdvante = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category', // replace category with your taxonomy name
            'field' => 'slug', // set the field to slug, you can replace it with the field name of your custom taxonomy
            'terms' => 'our-advante-page', // replace with your term slug or ID
        )
    ),
    
];

$wpOurAdvantePage = new WP_Query($wpOurAdvante);


$wpAdvante = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category', // replace category with your taxonomy name
            'field' => 'slug', // set the field to slug, you can replace it with the field name of your custom taxonomy
            'terms' => 'advante', // replace with your term slug or ID
        )
    ),
    
];

$wpAdvantePosts = new WP_Query($wpAdvante);
?>



<section class="advante sidePadding" id="service">

    <?php 
        while($wpOurAdvantePage->have_posts()) {
            $wpOurAdvantePage->the_post();
    ?>

    <div class="sectionHeadingLeft" style="max-width: 440px;">
        <?php  
            $title = get_the_title();
            $last_space = strrpos($title, " ");
            $new_title = substr($title, 0, $last_space);
        ?>
        <div class="headingTitle"><span class="headingTitleText"><?php echo $new_title ?></span></div>
        <h3 class="sectionHeading"><?php the_content(); ?></h3>
    </div>

    <?php } ?>

    <div class="advanteCardContainer">

        <?php 
            while($wpAdvantePosts->have_posts()){
            $wpAdvantePosts->the_post();
        ?>

        <div class="advanteCard">
            <?php the_post_thumbnail( ); ?>
            <h3 class="advanteCardHeading" style="font-size: 28px"><?php the_title(); ?></h3>
            <p class="subText1">
                <?php echo get_the_excerpt(); ?>
            </p>
        </div>

        <?php } ?>

    </div>

</section>