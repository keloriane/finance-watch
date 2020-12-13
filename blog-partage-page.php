<?php/**
 * Template Name: Blog
 */
?>
<?php
get_header();
?>
<main class="blog-partage">
    <header>
    <div class="blog-title-container">
        <h2>
            <?php the_field('titre_blog'); ?>
        </h2>

    </div>
    <div class="blog-subtitle l-col-18 d-col-18 t-col-15 ">
        <h3>
            <?php the_field('sous-titre'); ?>
        </h3>
    </div>

    </header>

    <div class="header-article l-col-20 d-col-20 t-col-21 m-grid">
        <div class="image-article l-col-9 d-col-9 t-col-14 m-grid">
            <img src="<?php the_field('header_image'); ?>" alt="">
        </div>
        <div class="text-article l-col-10 d-col-10 t-col-14 m-grid">
            <h3>
                <?php the_field('header_titre'); ?>
            </h3>
            <p>
                <?php the_field("header_text"); ?>
            </p>
            <a class="btn btn-arrow btn-border bp-button">
                <span> <span class="arrow">></span>  Contactez nous<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span>
            </a>
            <a href=""  class="call-to-action-download">
                <img src="<?php echo get_template_directory_uri()?>/images/pdf.svg" alt=""> Télécharger notre charte de commentaires
            </div>
        </div>


    </div>
    <section class="debat">
        <div class="section-title">
            <h2>
               <?php the_field('titre_debat'); ?>
            </h2>
        </div>
        <div class="card-container l-col-21 d-col-21 ">

            <?php

            // Check rows exists.
            if (have_rows('cartes')):

                // Loop through rows.
                while (have_rows('cartes')) : the_row();


                    $title = get_sub_field('titre_carte');
                    $description = get_sub_field('text_carte');
                    $button = get_sub_field('boutton_carte');
                    $image = get_sub_field('image_carte');

                    // Do something...
                    echo <<<EOT
      
                <div class="card l-col-6 d-col-6 ">
                <img src="$image[url]" class="icon-card" alt="">
                <div class="card-title">
                    <h3>
                       $title
                    </h3>

                </div>
                <div class="card-text">
                    <p>
                      $description
                    </p>
                </div>
                <a class="btn btn-arrow btn-border">
                    <span> <span class="arrow">></span>$button<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0" y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span>
                </a>
            </div>
EOT;

                    // End loop.
                endwhile;

// No value.
            else :
                // Do something...
            endif;
            ?>
            </div>


    </section>
    <section class="action-finance-watch">
        <div class="section-title center t-grid m-col-18 t-col-18 d-col-18">
            <h2>
                <?php the_field('titre_action_finance_watch'); ?>
            </h2>

        </div>
        <div class="card-container-action">
            <div class="member-card l-col-8 d-col-8 t-grid-18  ">
                <h3>
                    DEVENIR MEMBRE DE FINANCE WATCH
                </h3>
                <p>
                    Vous êtes expert en finance ou votre organisation lutte pour une société plus juste, verte et inclusive ? Rejoignez-nous !
                </p>
                <a class="btn btn-arrow btn-border member-arrow">
                    <span> <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="29.921" height="24.988" viewBox="0 0 29.921 24.988">
  <g id="Groupe_328" data-name="Groupe 328" transform="translate(-3896.4 -3045.157)">
    <g id="Groupe_325" data-name="Groupe 325">
      <path id="Tracé_1978" data-name="Tracé 1978" d="M3915.727,3060.584a.844.844,0,0,0,.841-.794c.042-.731.061-1.4.062-2.018,0-3.18-.512-4.94-1.2-6a2.971,2.971,0,0,0-1.125-1.049,2.023,2.023,0,0,0-.856-.225l-.047,0h-4.071l-.048,0a2,2,0,0,0-.856.225,3.554,3.554,0,0,0-1.605,1.985,13.951,13.951,0,0,0-.725,5.062c0,.617.02,1.288.063,2.018a.844.844,0,0,0,.841.794l.05,0a.843.843,0,0,0,.792-.891q-.061-1.05-.06-1.919a11.2,11.2,0,0,1,.734-4.733v15.8a1.3,1.3,0,0,0,2.6,0v-9.511h.489v9.511a1.3,1.3,0,0,0,2.6,0v-15.8a4.706,4.706,0,0,1,.187.446,13.022,13.022,0,0,1,.546,4.282c0,.581-.019,1.219-.059,1.92a.842.842,0,0,0,.792.89Z" fill="#358ffe"/>
      <circle id="Ellipse_13" data-name="Ellipse 13" cx="2.371" cy="2.371" r="2.371" transform="translate(3908.991 3045.157)" fill="#358ffe"/>
    </g>
    <g id="Groupe_326" data-name="Groupe 326">
      <path id="Tracé_1979" data-name="Tracé 1979" d="M3904.588,3060.535a.716.716,0,0,0,.715-.675c.036-.621.052-1.19.053-1.715,0-2.7-.436-4.2-1.024-5.1a2.523,2.523,0,0,0-.956-.891,1.7,1.7,0,0,0-.728-.191l-.04,0h-3.459l-.041,0a1.713,1.713,0,0,0-.728.19,3.03,3.03,0,0,0-1.364,1.687,11.866,11.866,0,0,0-.616,4.3q0,.786.054,1.716a.716.716,0,0,0,.714.674h.043a.718.718,0,0,0,.673-.758c-.035-.595-.051-1.137-.051-1.631a9.5,9.5,0,0,1,.624-4.022v13.431a1.107,1.107,0,0,0,2.214,0v-8.083h.415v8.083a1.107,1.107,0,0,0,2.214,0v-13.427a3.8,3.8,0,0,1,.159.379,11.054,11.054,0,0,1,.464,3.639c0,.494-.016,1.036-.05,1.632a.716.716,0,0,0,.673.757Z" fill="#358ffe"/>
      <circle id="Ellipse_14" data-name="Ellipse 14" cx="2.015" cy="2.015" r="2.015" transform="translate(3898.864 3047.425)" fill="#358ffe"/>
    </g>
    <g id="Groupe_327" data-name="Groupe 327">
      <path id="Tracé_1980" data-name="Tracé 1980" d="M3925.554,3060.535a.717.717,0,0,0,.715-.675c.035-.621.052-1.19.052-1.715,0-2.7-.435-4.2-1.023-5.1a2.533,2.533,0,0,0-.956-.891,1.7,1.7,0,0,0-.728-.191l-.04,0h-3.459l-.041,0a1.713,1.713,0,0,0-.728.19,3.031,3.031,0,0,0-1.364,1.687,11.846,11.846,0,0,0-.616,4.3q0,.786.054,1.716a.716.716,0,0,0,.714.674h.043a.718.718,0,0,0,.673-.758c-.035-.595-.051-1.137-.051-1.631a9.5,9.5,0,0,1,.624-4.022v13.431a1.107,1.107,0,0,0,2.214,0v-8.083h.415v8.083a1.107,1.107,0,0,0,2.214,0v-13.427a4.048,4.048,0,0,1,.159.379,11.083,11.083,0,0,1,.464,3.639c0,.494-.016,1.036-.051,1.632a.717.717,0,0,0,.674.757Z" fill="#358ffe"/>
      <circle id="Ellipse_15" data-name="Ellipse 15" cx="2.015" cy="2.015" r="2.015" transform="translate(3919.83 3047.425)" fill="#358ffe"/>
    </g>
  </g>
</svg>
</span>  devenir membre </span>
                </a>
            </div>
            <div class="line border"></div>
            <div class="member-card donation-card l-col-8 d-col-8 t-grid-18  ">
                <h3>
                    NOUS SOUTENIR EN FAISANT UN DON
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                </p>

                <a class="btn btn-arrow btn-border">
                    <span> <span class="arrow">></span>  soutenir <svg version="1.1" id="Layer_1"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        x="0px" y="0px" viewBox="0 0 36.1 25.8"
                                                                        enable-background="new 0 0 36.1 25.8"
                                                                        xml:space="preserve"><g><line fill="none"
                                                                                                      stroke="#FFFFFF"
                                                                                                      stroke-width="3"
                                                                                                      stroke-miterlimit="10"
                                                                                                      x1="0" y1="12.9"
                                                                                                      x2="34"
                                                                                                      y2="12.9"></line><polyline
                                        fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10"
                                        points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span>
                </a>
            </div>

        </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>