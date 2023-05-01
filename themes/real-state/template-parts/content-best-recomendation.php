<?php 
$wpdiscover = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category', // replace category with your taxonomy name
            'field' => 'slug', // set the field to slug, you can replace it with the field name of your custom taxonomy
            'terms' => 'discover-page', // replace with your term slug or ID
        )
    ),
];

$wpdiscoverPage = new WP_Query($wpdiscover);

$wpnew = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'category', // replace category with your taxonomy name
            'field' => 'slug', // set the field to slug, you can replace it with the field name of your custom taxonomy
            'terms' => 'best-recomendation', // replace with your term slug or ID
        )
    ),
    
];

$realStatePosts = new WP_Query($wpnew);

?>

<section class="discover sidePadding" id="property">

    <?php  
        while($wpdiscoverPage->have_posts()) {
            $wpdiscoverPage->the_post();
    ?>

    <div class="sectionHeadingContainer">
        <div class="sectionHeadingLeft">
            <?php  
                $title = get_the_title();
                $last_space = strrpos($title, " ");
                $new_title = substr($title, 0, $last_space);
            ?>
            <div class="headingTitle"><span class="headingTitleText"><?php echo $new_title ?></span></div>
            <?php the_content(); ?>
            <p class="subText1"><?php echo get_the_excerpt( ) ?></p>
        </div>
        <div>
            <a href="#" class="headingTitleText moreLink">
                <span>Learn More</span>
                <span class="moreLinkIconBox">
                    <i class="fa-sharp fa-solid fa-chevron-right fa-xs"></i>
                </span>
            </a>
        </div>
    </div>

    <?php } ?>

    <div class="cardContainer">

        <?php 
            while($realStatePosts->have_posts()) {
                $realStatePosts->the_post();

                $postDetails = CFS()->get();
            
        ?>

        <div class="card">
            <?php the_post_thumbnail(); ?>
            <h3 class="subText1 cardHeading"><?php the_title(); ?></h3>
            <p class="subText1" style="color:  #A6A6A6;"><?php echo $postDetails['place'] ?></p>
            <div class="subText1 cardPricing">
                <p class="cardHeading" style="color: #69B99D; margin-right: 30px"><?php echo $postDetails['price']; ?>
                </p>
                <p>
                    <span style="color: #1F2744"><?php echo $postDetails['distance']; ?></span>
                    <span style="color: #A6A6A6"> <?php echo $postDetails['place_type']; ?></span>
                </p>
            </div>
            <button class="cardBtn btnLight subText1">
                Send Inquiry
            </button>
        </div>

        <?php } ?>

    </div>
</section>