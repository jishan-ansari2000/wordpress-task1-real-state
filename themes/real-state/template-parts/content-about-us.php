<?php  

$wp_aboutus = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'category', // replace category with your taxonomy name
            'field' => 'slug', // set the field to slug, you can replace it with the field name of your custom taxonomy
            'terms' => 'about-us-page', // replace with your term slug or ID
        )
    ),
    
];

$wp_aboutus_page = new WP_Query($wp_aboutus);

?>


<section class="about sidePadding" id="about">

    <?php 
        while($wp_aboutus_page->have_posts()) {
            $wp_aboutus_page->the_post();
    ?>

    <div class="aboutLeft">

        <?php the_post_thumbnail(); ?>

        <div class="aboutLeftTop">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/Tick Square.png"
                alt="Tick Square" style="width: 25px;" class="tickSquareImg" />
            <p class="aboutRatingText">4.8</p>
            <div class="ratingBox">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/smallStar.png"
                        alt="rating star" />
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/smallStar.png"
                        alt="rating star" />
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/smallStar.png"
                        alt="rating star" />
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/smallStar.png"
                        alt="rating star" />
                </div>
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/smallStar.png"
                        alt="rating star" />
                </div>
            </div>
            <p class="subText1" style="color: #A6A6A6;">Trusted on</p>
            <p class="subText1" style="color: #054457;">500+ Reviews</p>
        </div>
        <div class="aboutLeftBottom">
            <div>
                <p class="aboutPrice">250+</p>
                <p class="subText1" style="color: #A6A6A6;">Property<br /> Sale</p>
            </div>
            <div>
                <p class="aboutPrice">550+</p>
                <p class="subText1" style="color: #A6A6A6;">Apartmen<br /> Rent</p>
            </div>
        </div>
    </div>
    <div>
        <div class="sectionHeadingLeft" style="max-width: 510px;">

            <?php  
                $title = get_the_title();
                $last_space = strrpos($title, " ");
                $new_title = substr($title, 0, $last_space);
            ?>

            <div class="headingTitle"><span class="headingTitleText"><?php echo $new_title ?></span></div>

            <?php the_content(); ?>

            <p class="subText1"><?php echo get_the_excerpt(); ?></p>

            <button class="aboutBtn btnDark subText1">
                Send Inquiry
            </button>
        </div>
    </div>

    <?php } ?>

</section>