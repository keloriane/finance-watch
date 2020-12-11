<?php
/**
 * Template Name: About
 */
?>
<?php get_header() ?>
    <main>
        <header>
            <div class="m-grid t-grid l-col-19 d-col-19 center ">
                <h2><?php the_field('titre') ?></h2>
            </div>
        </header>
        <div class="about-blog-wrapper d-grid l-col-24 t-col-24 m-grid d-col-24">
            <div class="image-blog l-col-12 t-col-21 m-col-21 d-col-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/team.jpg" alt="">
            </div>
            <div class="text-blog d-col-10 l-col-10 t-col-21 m-col-21 center">
                <h3>
                    <?php the_field('header_titre') ?>
                </h3>
                <div class="text-wrapper medium">
                    <p>
                        <?php the_field('header_text') ?>
                    </p>
                </div>
                <a class="btn btn-arrow btn-border">
                    <span> <span class="arrow">></span>  Particper <svg version="1.1" id="Layer_1"
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
        <div class="vision-container">
            <div class="subtitle">

            </div>
            <div class="list-container col-13 t-col-19 center">
                <ul>
                    <li>
                        <span class="bold">Assurer la stabilité ﬁnancière :</span> Alors que de nouvelles menaces
                        apparaissent, les risquespesant sur la stabilité ﬁnancière révélés par la crise de 2007/08 ne
                        sont toujours pas maîtrisés.Mais nous ne pouvons plus laisser la société payer le coût colossal
                        d’une prochaine crise. Il fautdésamorcer le risque systémique en renforçant et simpliﬁant la
                        réglementation bancaire, ycompris en prenant des mesures structurelles pour mettre ﬁn à l’aléa
                        moral lié aux institutions«trop grosses pour faire faillite».
                    </li>
                    <li>
                        <span class="bold">Responsabiliser les institutions ﬁnancières :</span> La concentration
                        excessive des acteursﬁnanciers, la complexité de leurs offres, l’opacité de leur gestion, les
                        portes-tournantes et ledéveloppement de la ﬁnance de l’ombre ne font qu’aggraver les dérives
                        d’une machine qui paraîtde plus en plus hors de contrôle. La responsabilisation des acteurs
                        ﬁnanciers passe par latransparence de leurs activités, de leurs impacts et de leur gouvernance.
                    </li>
                    <li>
                        <span class="bold">
                        Mettre la ﬁnance au service de la société :
                        </span>
                        Réorienter les ﬂux ﬁnanciers vers l’économieproductive et les grands déﬁs de notre temps est
                        décisif pour notre avenir. Pour la lutte contrele changement climatique et la protection de
                        l’environnement, contre les inégalités ou pour ledéveloppement des pays du Sud, il faut redéﬁnir
                        le rôle des banques centrales, des banquesindividuelles et du système ﬁnancier dans son
                        ensemble.
                    </li>
                </ul>

            </div>


        </div>
        <section class="member-wrapper">
            <div class="image-svg-wrapper col-12 t-col-11">
                <img src="<?php the_field("image_people"); ?>" alt="">
            </div>
            <div class="member-wrapper-description">
                <div class="title-container col-13 t-col-19">
                    <h2 class="title-regular">
                        <?php the_field("titre_membre") ?>
                    </h2>
                </div>
                <div class="text-wrapper col-13 t-col-19">
                    <div class="subtitle-regular">
                        <p>
                           <?php the_field('sous_titre_membres') ?>
                        </p>
                    </div>
                    <div class="text-wrapper">
                        <p>
                           <?php the_field('membres_text') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid-members col-19 t-grid center">
                <div class="title-container">
                    <h2 class="title-regular">
                        <?php the_field('titre_organisation') ?>
                    </h2>
                </div>
                <div class="grid-container col-19">
                    <ul class="members">
                        <?php

// Check rows exists.
if( have_rows('organisation_membre') ):

    // Loop through rows.
    while( have_rows('organisation_membre') ) : the_row();

        $photo = get_sub_field('logo_entreprise');
        $pays = get_sub_field('pays_organisation');
        $description = get_sub_field('nom_organisation');

        // Do something...
        echo <<<EOT
       <li class="col-4 t-col-7">
                            <a href="#">
                                <div class="card-container">
                                    <div>
                                        <img src="$photo" alt="">
                                    </div>
                                </div>
                                <div class="card-text">
                                    <h3 class="country">$pays</h3>
                                    <p class="description">
                                        $description
                                    </p>
                                </div>
                            </a>
                        </li>

EOT;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>

                    </ul>
                </div>

            </div>
            <div class="grid-members col-19 t-grid center">
                <div class="title-container">
                    <h2 class="title-regular">
                        MEMBRES INDIVIDUELS
                    </h2>
                </div>
                <div class="flex-container l-col-19 center">

                    <?php

                    // Check rows exists.
                    if (have_rows('membres_individuels')):
                        // Loop through rows.
                        while (have_rows('membres_individuels')) : the_row();

                            // Load sub field value.

                            $photo = get_sub_field('photo_membre');
                            $name = get_sub_field('nom_prenom');
                            $pays = get_sub_field('pays_membre');
                            $description = get_sub_field('description_membre');



                           echo <<<HEREDOC
                        <div class="member-card t-grid d-col-9">
                            <div class="member-picture">
                                <img src="$photo[url]" alt="">
                            </div>
                        <div class="member-description">
                            <p class="country">
                                $pays
                            </p>
                            <p class="name">
                                $name
                            </p>


                            <p class="function">
                               $description
                            </p>
                        </div>
                    </div>
HEREDOC;
                            // End loop.
                        endwhile;
                    endif; ?>
                </div>

            </div>

        </section>

        <section class="country-section">
            <div class="overlay-card l-col-18 d-col-18 t-col-13 m-grid">
                <h3 class="card-title">
                    Devenir membre
                </h3>
                <p>
                    Nous élaborons nos positions et notre plan de travail avec nos membres. Rejoignez-nous
                </p>
                <button>
                    Devenir membre
                </button>

            </div>
            <div class="text-network">
                <div class="title-container l-col-8 d-col-8 t-col-8 m-col-8">
                    <h2><?php the_field("titre_reseaux"); ?></h2>
                    <p>
                        <?php the_field("reseaux_international_text"); ?>
                    </p>
                </div>
            </div>

            <div class="country-img-container">
                <img src="<?php the_field("photo_pin_pays"); ?>" alt="">

            </div>

        </section>
        <section class="action-finance-watch">
            <div class="section-title center t-grid m-col-18 t-col-18 d-col-18">
                <h2>
                    ENVIE D'EN SAVOIR PLUS ?
                </h2>

            </div>
            <div class="card-container-action">
                <div class="member-card l-col-8 d-col-8 t-grid-18  ">

                    <p>
                        En savoir plus sur finance watch
                    </p>
                    <a class="btn btn-arrow btn-border">
                        <span> <span class="arrow">></span>  Finance-watch.org <svg version="1.1" id="Layer_1"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                    x="0px" y="0px"
                                                                                    viewBox="0 0 36.1 25.8"
                                                                                    enable-background="new 0 0 36.1 25.8"
                                                                                    xml:space="preserve"><g><line
                                            fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" x1="0"
                                            y1="12.9" x2="34" y2="12.9"></line><polyline fill="none" stroke="#FFFFFF"
                                                                                         stroke-width="3"
                                                                                         stroke-miterlimit="10"
                                                                                         points="22.2,1.1 34,12.9 22.2,24.7   "></polyline></g></svg></span>
                    </a>
                </div>
                <div class="line border"></div>
                <div class="member-card donation-card l-col-8 d-col-8 t-grid-18  ">
                    <p>
                        Un question ? contactez nous
                    </p>

                    <a class="btn btn-arrow btn-border">
                        <span> <span class="arrow">></span>  Contact <svg version="1.1" id="Layer_1"
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