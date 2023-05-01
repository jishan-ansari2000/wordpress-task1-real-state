<section class="footer sidePadding" id="contact">

    <div>
        <a href="<?php  echo get_site_url( ); ?>">
            <div class="navLogo">
                <?php
                    $logoURL = get_header_image();
                ?>
                <img src="<?php echo $logoURL  ?>" alt="logo" />
            </div>
        </a>
        <p class="subText1" style="color: #1F2744; margin: 10px 0 20px 0; max-width: 350px;">We have built our
            reputation as true local area experts.</p>
        <p class="subText1 footerSubHeading">Newsletter</p>
        <div style="background-color: #fefeff; display: inline-flex;">
            <input type="text" placeholder="Input your email" class="subText1 footerInput">
            <button class="footerBtn btnDark subText1">Send</button>
        </div>
    </div>

    <div>
        <p class="footerSubHeading subText1">Service</p>
        <?php
            $args = [
                'theme_location'  =>  'service-footer-menu',
                'menu_class' => 'footer-menu',
                "link_before" => '<span class="footerLink subText1 underline" style="display: inline-block">',
                "link_after" => '</span>',
                'container' => 'none',
            ];
            wp_nav_menu( $args );
    ?>
    </div>
    <div>
        <p class="footerSubHeading subText1">Community</p>
        <?php
            $args = [
                'theme_location'  =>  'community-footer-menu',
                'menu_class' => 'footer-menu',
                "link_before" => '<span class="footerLink subText1 underline" style="display: inline-block">',
                "link_after" => '</span>',
                'container' => 'none',
            ];
            wp_nav_menu( $args );
    ?>
    </div>

    <?php dynamic_sidebar( 'footer-1' ); ?>

</section>


<?php wp_footer(); ?>
</body>
<script>
function myFunction() {
    var x = document.getElementById("mynav");
    var mainMenuContainer = document.getElementById("myTopnav");
    if (x.className === "navbar_menu") {
        x.className += " responsive";
        mainMenuContainer.className += " responsive";
    } else {
        x.className = "navbar_menu";
        mainMenuContainer.className = "main-menu-container";
    }
}
</script>
<script src="https://kit.fontawesome.com/2dac633212.js" crossorigin="anonymous"></script>

</html>