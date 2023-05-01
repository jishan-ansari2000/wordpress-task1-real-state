<?php 
    get_header();
?>
 
<?php get_template_part('template-parts/content','home'); ?>

<!-- **************** section discover ********************* -->
<?php get_template_part('template-parts/content','best-recomendation'); ?>

<!-- *************************Advante***************************** -->
<?php get_template_part('template-parts/content','advante'); ?>

<!-- **********************About Us*********************** -->
<?php get_template_part('template-parts/content','about-us'); ?>

<!-- ********** testimonial ************** -->
<section class="testimonial sidePadding">
    <div class="sectionHeadingContainer">
        <div class="sectionHeadingLeft" style="max-width: 510px;">
            <div class="headingTitle"><span class="headingTitleText">CUSTOMER TESTIMONIAL</span></div>
            <h3 class="sectionHeading" style="margin-bottom: 0">Peopel say about us?</h3>
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

    <div class="cardContainer" style="margin-top: 50px;">

        <div class="card testimonialCard">
            <div style="width: 42px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/testimonialIcon.png" />
            </div>
            <p class="testimonialSubHeading">It proved to be exactly the kind of home we wanted.</p>
            <p class="subText1" style="color: #1F2744; margin-bottom: 30px;">We wish to express our thanks for your hard
                work in finding us a temporary home, which proved to be exactly what we wanted.</p>
            <div class="cardFooter">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/profile/profile1.png"
                        alt="profile1" />
                </div>
                <div>
                    <p class="UserProfileName">Jaydon Aminoff</p>
                    <p class="UserProfileProfession">UX Designer</p>
                </div>
            </div>
        </div>

        <div class="card testimonialCard">
            <div style="width: 42px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/testimonialIcon.png" />
            </div>
            <p class="testimonialSubHeading">Nobody knows Portland and the peninsula better than David.</p>
            <p class="subText1" style="color: #1F2744; margin-bottom: 30px;">My wife and I had a dream of downsizing
                from our house in Cape Elizabeth into a small condo closer to where we work and play in Portland. </p>
            <div class="cardFooter">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/profile/profile2.png"
                        alt="profile1" />
                </div>
                <div>
                    <p class="UserProfileName">Alfredo Donin</p>
                    <p class="UserProfileProfession">UI Designer</p>
                </div>
            </div>
        </div>

        <div class="card testimonialCard">
            <div style="width: 42px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/Icons/testimonialIcon.png" />
            </div>
            <p class="testimonialSubHeading">He keeps his client’s best interests in sharp focus</p>
            <p class="subText1" style="color: #1F2744; margin-bottom: 30px;">After working with David to sell my home in
                2013, I was convinced that he’s the only realtor I’ll ever need. Since then, I’ve bought two properties
                and sold one.</p>
            <div class="cardFooter">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/image/profile/profile3.png"
                        alt="profile1" />
                </div>
                <div>
                    <p class="UserProfileName">Makenna Korsgaard</p>
                    <p class="UserProfileProfession">UX Researcher</p>
                </div>
            </div>
        </div>

    </div>
</section>


<?php get_footer(); ?>