<?php/**
 * Template Name: Single Article
 */
?>
<?php
get_header();
require('components/Post.php');
$post = new Post();
$postACF = $post->get(get_the_ID());
?>

<main class="post-details">
    <article class="main-article">
        <div class="article-header">
            <div class="title-container l-col-16 d-col-16 t-col-16 m-grid">
                <h3><?= $postACF->title ?></h3>
            </div>
            <div class="article-details d-col-21 l-col-21">
                <div class="article-info">
                    <div class="date">
                        <p>
                            27 Octobre 2020
                        </p>
                    </div>
                    <div class="separator">
                        |
                    </div>
                    <div class="article-reply">
                        <img src="<?php echo get_template_directory_uri() ?>/images/msg.svg" alt="">
                         <p class="msg-count">
                             25
                         </p>
                    </div>
                </div>
                <div class="tag-container">
                    <span class="tags">Finance Durable (10)</span>
                    <span class="tags">Banque (2)</span>
                    <span class="tags">Commerce (15)</span>
                </div>
            </div>
        </div>
        <div class="article-body d-col-24 l-col-23">
            <div class="article l-col-15 d-col-17 t-col-19 t-grid m-grid">
                <img src="<?= $postACF->featured_image ?>" alt="">
                <?= $postACF->contenu ?>

                <div class="social-media t-grid l-col-15 d-col-9 t-col-19 t-grid m-grid">
                    <ul class="media-call">
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.2 44.2"><defs><style>.cls-1{fill:#9ac7fe;}.cls-2{fill:#358ffe;}</style></defs><title>Fichier 1</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M22.1,1.22A20.88,20.88,0,1,1,1.22,22.1,20.9,20.9,0,0,1,22.1,1.22M22.1,0A22.1,22.1,0,1,0,44.2,22.1,22.09,22.09,0,0,0,22.1,0"/><path class="cls-2" d="M17.64,19.06h1.85v-1.8a4.81,4.81,0,0,1,.6-2.78A3.29,3.29,0,0,1,23,13.13a11.52,11.52,0,0,1,3.33.34l-.47,2.74A6.31,6.31,0,0,0,24.33,16c-.72,0-1.37.26-1.37,1v2.09h3l-.21,2.68H23v9.32H19.49V21.74H17.64Z"/></g></g></svg>                    </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.2 44.2"><defs><style>.cls-1{fill:#9ac7fe;}.cls-2{fill:#358ffe;}</style></defs><title>Fichier 2</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M22.1,1.22A20.88,20.88,0,1,1,1.22,22.1,20.9,20.9,0,0,1,22.1,1.22M22.1,0A22.1,22.1,0,1,0,44.2,22.1,22.09,22.09,0,0,0,22.1,0"/><path class="cls-2" d="M32.25,15.8a8.05,8.05,0,0,1-2.4.66,4.19,4.19,0,0,0,1.83-2.3,8.51,8.51,0,0,1-2.64,1A4.16,4.16,0,0,0,21.84,18,3.69,3.69,0,0,0,22,19a11.83,11.83,0,0,1-8.59-4.35,4.25,4.25,0,0,0-.56,2.1,4.16,4.16,0,0,0,1.85,3.46,4.13,4.13,0,0,1-1.88-.52v.05a4.16,4.16,0,0,0,3.34,4.09,4.42,4.42,0,0,1-1.1.14,4,4,0,0,1-.78-.07,4.16,4.16,0,0,0,3.88,2.89,8.32,8.32,0,0,1-5.17,1.78,8.22,8.22,0,0,1-1-.06,11.83,11.83,0,0,0,18.23-10c0-.18,0-.36,0-.54a8.55,8.55,0,0,0,2.08-2.16"/></g></g></svg>                    </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.64 45.65"><defs><style>.cls-1{fill:#9ac7fe;}.cls-2{fill:#358ffe;}</style></defs><title>linkedin</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M22.82,45.65A22.83,22.83,0,1,1,45.64,22.82,22.85,22.85,0,0,1,22.82,45.65m0-44.43a21.61,21.61,0,1,0,21.61,21.6A21.62,21.62,0,0,0,22.82,1.22"/><path class="cls-2" d="M17.43,30.76H13.67v-12h3.76Zm-2-13.52h0a2.1,2.1,0,1,1,.05-4.18,2.1,2.1,0,1,1,0,4.18m17,13.52H28.2V24.54c0-1.63-.67-2.74-2.13-2.74a2.16,2.16,0,0,0-2,1.48,3,3,0,0,0-.09,1v6.5H19.72s.06-11,0-12h4.22v1.89c.25-.83,1.6-2,3.75-2,2.67,0,4.77,1.73,4.77,5.46Z"/></g></g></svg>                    </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44.2 44.2"><defs><style>.cls-1{fill:#358ffe;}.cls-2{fill:#9ac7fe;}</style></defs><title>mail</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="cls-1" d="M33.6,14.79l-9.13,8.62a3.46,3.46,0,0,1-2.37.92,3.51,3.51,0,0,1-2.38-.92L10.6,14.79a2.67,2.67,0,0,0-.39,1.37V28a2.65,2.65,0,0,0,2.64,2.64H31.34A2.65,2.65,0,0,0,34,28V16.16a2.66,2.66,0,0,0-.38-1.37"/><path class="cls-1" d="M23.56,22.45l9.09-8.58a2.55,2.55,0,0,0-1.31-.36H12.85a2.51,2.51,0,0,0-1.3.36l9.08,8.58a2.19,2.19,0,0,0,2.93,0"/><path class="cls-2" d="M22.1,1.22A20.88,20.88,0,1,1,1.22,22.1,20.9,20.9,0,0,1,22.1,1.22M22.1,0A22.1,22.1,0,1,0,44.2,22.1,22.09,22.09,0,0,0,22.1,0"/></g></g></svg>                    </a>
                        </li>

                    </ul>
                </div>

                <div class="article-action">
                    <div class="comment-action-info">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/msg.svg.png" alt="">

                        <p>
                            25 commentaires
                        </p>
                    </div>
                    <div class="comment-action">
                        <p>Laisser un commentaire</p>
                    </div>
                </div>
            </div>
            <div class="side-bar-info l-col-7 d-col-7 t-col-19 t-grid m-grid">
                   <div class="author-container">
                       <img src="<?php echo get_template_directory_uri(); ?>/images/author.png" alt="">
                       <p>
                           <?= $postACF->auteur['user_avatar'] ?>
                       </p>
                       <div class="author-name">
                           <p><?= $postACF->auteur['user_firstname'] ?></p>
                           <p><?= $postACF->auteur['user_lastname'] ?></p>
                       </div>
                       <div class="membre">
                          <p>Membre finance watch</p>
                       </div>

                   </div>
                    <div class="about-author">
                        <h3>A propos de l'auteur</h3>
                        <p>
                            <?= $postACF->auteur['user_description'] ?>
                        </p>

                    </div>
                    <div class="auhor-photos">

                    </div>
                <div class="navigation-container">
                    <div class="associated-tags tagger">
                        <div class="tag-title">
                            <h4>
                                Tags associées
                            </h4>
                        </div>
                        <div class="tag-wrapper">
                        <span class="tags">Finance Durable (10)</span>
                        <span class="tags">Banque (2)</span>
                        <span class="tags">Commerce (15)</span>
                        <span class="tags">Les pensions et les assurances (10)</span>
                        <span class="tags">Fintech (3)</span>
                        <span class="tags">Legislation (2)</span>
                        </div>
                    </div>

                    <div class="most-used-tags tagger">
                        <div class="tag-title">
                            <h4>
                                Tags associées
                            </h4>
                        </div>
                        <div class="tag-wrapper">
                            <span class="tags">Finance Durable (10)</span>
                            <span class="tags">Banque (2)</span>
                            <span class="tags">Commerce (15)</span>
                            <span class="tags">Les pensions et les assurances (10)</span>
                            <span class="tags">Fintech (3)</span>
                            <span class="tags">Legislation (2)</span>
                        </div>


                    </div>

                </div>
                <div class="facebook-action">
                    <div class="card-facebook">
                        <div class="svg-container">
                            <img src="<?php echo get_template_directory_uri() ?>/images/planet.svg" alt="">
                        </div>
                        <div class="text-container">
                            <div class="subtitle">
                                <h4>
                                    HEY !
                                </h4>
                                <p>
                                    vous voulez rejoindre la communauté des amis de la finance
                                </p>
                            </div>
                        </div>
                    </div>
                                <a href="" class="facebook-button">
                                    <img src="<?php echo get_template_directory_uri()?>/images/f-thumb.svg" alt="">
                                    rejoindre le group
                                </a>
                </div>
            </div>


        </div>

    </article>

    <div class="associate-article d-col-21 l-col-21" >
        <a href="" class="d-col-7 t-col-11 m-grid">
        <article>
            <div class="article-image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/computer.png" alt="">
            </div>
            <header>
                <div class="date">
                    <p>
                        27.10.2018 |
                    </p>
                </div>
                <div class="tag-container">
                    <span class="tag">
                        <p>tagname</p>
                    </span>
                </div>
            </header>
            <div class="article-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt quis sem quis viverra. Morbi odio risus...
                </p>
            </div>
            <footer>
                <div class="count-msg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/msg.svg" alt="">
                    <p> 10</p>
                </div>
                <div class="author">
                    Par : Nom de l'auteur
                </div>
            </footer>
        </article>

        </a>
        <a href="" class="d-col-7 t-col-11 m-grid">
            <article>
                <div class="article-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/computer.png" alt="">
                </div>
                <header>
                    <div class="date">
                        <p>
                            27.10.2018 |
                        </p>
                    </div>
                    <div class="tag-container">
                    <span class="tag">
                        <p>tagname</p>
                    </span>  <span class="tag">
                        <p>tagname</p>
                    </span>  <span class="tag">
                        <p>tagname</p>
                    </span>  <span class="tag">
                        <p>tagname</p>
                    </span>  <span class="tag">
                        <p>tagname</p>
                    </span>
                    </div>
                </header>
                <div class="article-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt quis sem quis viverra. Morbi odio risus...
                    </p>
                </div>
                <footer>
                    <div class="count-msg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/msg.svg" alt="">
                        <p>| 10</p>
                    </div>
                    <div class="author">
                        Par : Nom de l'auteur
                    </div>
                </footer>
            </article>

        </a>
        <a href="" class="d-col-7 t-col-11 m-grid">
            <article>
                <div class="article-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/computer.png" alt="">
                </div>
                <header>
                    <div class="date">
                        <p>
                            27.10.2018 |
                        </p>
                    </div>
                    <div class="tag-container">
                    <span class="tag">
                        <p>tagname</p>
                    </span>
                    </div>
                </header>
                <div class="article-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt quis sem quis viverra. Morbi odio risus...
                    </p>
                </div>
                <footer>
                    <div class="count-msg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/msg.svg" alt="">
                        <p>| 10</p>
                    </div>
                    <div class="author">
                        Par : Nom de l'auteur
                    </div>
                </footer>
            </article>

        </a>

    </div>
</main>
<?php get_footer(); ?>
