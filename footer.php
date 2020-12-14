<footer class="main-footer">
   <div class="upper-footer">
        <div class="grid-footer">
            <div class="footer-card">
                <div class="inner-card">

                    <div class="image-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/footer-card.png" alt="">

                    </div>
                    <div class="text-wrapper">
                        <h3>S'impliquer</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt quis sem quis viverra.
                        </p>
                        <a class="btn btn-arrow btn-border">
                            <span> <span class="arrow">&gt;</span>  Particper <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="menu-nav">
            <div class="menu-footer">
                <h3>Menu</h3>
                <?php wp_nav_menu(array('theme_location' => 'header-menu', 'menu_class' => 'nav-bar')) ?>
            </div>
            <div class="newsletter-footer">
                <h3>Newsletter</h3>
                <p>
                    Inscrivez vous pour rester informé
                </p>
                <a href="">
                    <img src="<?php echo get_template_directory_uri() ?>/images/send-w.png" alt=""> Subscribe
                </a>
            </div>

            </div>
        </div>
   </div>
    <div class="underline-footer">

        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri()?>/images/finance-watch-logo.svg" alt="">
        </div>
        <div class="gdpr-links">
            <ul>
                <li><a href=""> Protection des données </a> </li>
                <li><a href=""> Terms and Conditions </a> </li>
                <li><a href=""> Cookie policy </a> </li>

            </ul>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>