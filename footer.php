<footer class="main-footer">
    <div class="inner-footer-container l-col-21 d-col-21 ">
        <div class="footer-action">
            <div class="footer-card l-col-5 d-col-5">
                <div class="img-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer-card.png" alt="">
                </div>
                <div class="text-card">
                    <div class="inner-text">
                        <h3>
                            S'impliquer
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt quis sem quis viverra.
                        </p>
                        <a class="btn btn-arrow btn-border">
                            <span> <span class="arrow">></span>  Particper <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="menu-container l-col-5 d-col-5">
            <div class="menu-footer">
            <p class="headline">Menu</p>
            <?php wp_nav_menu( array('theme_location' => 'header-menu','menu_class' => 'nav-bar')) ?>
                <a href="" class="donation footer-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/heart.svg" alt="">  Faire un Don
                </a>
            </div>

        </div>
        <div class="newsletter l-col-5 d-col-5">
            <div class="inner-news">
            <p class="headline">Newsletter</p>
            <p>Inscrivez vous pour rester informé</p>

                <a href="" class="donation footer-button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-sub.svg" alt="">  Subscribe
                </a>

            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>