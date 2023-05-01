<?php  
    $wphome = [
        'post_type' => 'post',
        'post_status' => 'publish',
        'tax_query' => array(
            array(
                'taxonomy' => 'category', // replace category with your taxonomy name
                'field' => 'slug', // set the field to slug, you can replace it with the field name of your custom taxonomy
                'terms' => 'home', // replace with your term slug or ID
            )
        ),
    ];

    $wpHomePosts = new WP_Query($wphome);

    while($wpHomePosts->have_posts()) {
        $wpHomePosts->the_post();
     
?>

<section class="home-section sidePadding" id="home">


    <div style="position: relative; z-index: 10">
        <div class="sectionHeadingLeft" style="max-width: 450px;">

            <?php  
                $title = get_the_title();
                $last_space = strrpos($title, " ");
                $new_title = substr($title, 0, $last_space);
            ?>

            <div class="headingTitle"><span class="headingTitleText"><?php $new_title; ?></span></div>
            <?php the_content(); ?>
            <p class="subText1"><?php echo  get_the_excerpt() ?></p>
        </div>

        <div class="homePriceType">
            <p>Buy</p>
            <p>Rent</p>
        </div>
        <div class="homePriceBox">
            <div>
                <p class="subText1 homePriceSubText" style="color: #1F2744; margin-bottom: 10px;">Location</p>
                <p class="subText1 homePriceSubText" style="color: #A6A6A6;">Bogor, Jawa Barat<i
                        class="fa-solid fa-angle-down angleIcon"></i></p>
            </div>
            <div>
                <p class="subText1 homePriceSubText" style="color: #1F2744; margin-bottom: 10px;">Type</p>
                <p class="subText1 homePriceSubText" style="color: #A6A6A6;">Home<i
                        class="fa-solid fa-angle-down angleIcon"></i></p>
            </div>
            <div>
                <p class="subText1 homePriceSubText" style="color: #1F2744; margin-bottom: 10px;">Price Range</p>
                <p class="subText1 homePriceSubText" style="color: #A6A6A6;">$200-$350<i
                        class="fa-solid fa-angle-down angleIcon"></i></p>
            </div>
            <div>
                <button class="aboutBtn btnDark subText1" style="margin: 0;">
                    Search
                </button>
            </div>
        </div>
    </div>

    <div class="homeImgBox">
        <?php the_post_thumbnail(); ?>
    </div>

</section>

<?php  } ?>