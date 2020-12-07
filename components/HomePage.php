<?php
class Homepage
{
    function renderTags($tags)
    {
        foreach ($tags as $tag) {
            return <<<EOT
          <span>{$tag->name}</span>
        EOT;
        }
    }
    function highlights($highlights)
    {
      /*  $idFirstArticle = $highlights['first_article']->ID;
        $idSecondArticle = $highlights['second_article']->ID;*/
        foreach ($highlights as $highlightArray) {
            $highlightArrayACF = get_field('custom_article', $highlightArray->ID);
            $highlight = (object)$highlightArrayACF;
            $this->getHighLights($highlight);
        };
    }
    function mainHighLight($idMainHighLight)
    {
        $mainHighlight = (object)get_field('custom_article', $idMainHighLight);
        $tags = (object)$mainHighlight->tags;
        $auteur = (object)$mainHighlight->auteur;
        $commentsImagePath = get_theme_file_uri('/images/comments.png');
        echo <<<EOT
        <article class='main-highlight'>
          <div class="main-highlight-bg"></div>
          <div class='main-highlight-featured-image-wrapper'>
            <img class='main-highlight-featured-image' src="{$mainHighlight->featured_image}" alt="">    
          </div>
          <div class="main-highlight-content">
            <div class="main-highlight-top">
                <span>{$mainHighlight->date}</span> 
                <span>{$this->renderTags($tags)}</span>
            </div>
            <div class="main-highlight-middle">
                <div class="main-highlight-middle-excerpt">{$mainHighlight->contenu}</div>
            </div>
            <div class="main-highlight-bottom">
              <div class="main-highlight-bottom-item custom-article-comments">
                <img src="{$commentsImagePath}" alt="">
                <span>10</span>
            </div>
            <div class="main-highlight-bottom-item custom-article-author">
                <span>Par</span>
                <span>{$auteur->user_nicename}</span>
            </div>
          </div>
          </div>
        </article>
      EOT;
    }
    function getHighLights($highlight)
    {
        $tags = (object)$highlight->tags;
        $auteur = (object)$highlight->auteur;
        $commentsImagePath = get_theme_file_uri('/images/comments.png');
        echo <<<EOT
        <article class='highlight'>
          <div class='highlight-featured-image-wrapper'>
            <img class='highlight-featured-image' src="{$highlight->featured_image}" alt="">    
          </div>
          <div class="highlight-top">
            <span>{$highlight->date}</span> 
            <span>{$this->renderTags($tags)}</span>
          </div>
          <div class="highlight-middle">
            <div class="highlight-middle-excerpt">{$highlight->contenu}</div>
          </div>
          <div class="highlight-bottom">
              <div class="highlight-bottom-item custom-article-comments">
                <img src="{$commentsImagePath}" alt="">
                <span>10</span>
              </div>
              <div class="highlight-bottom-item custom-article-author">
                <span>Par</span>
                <span>{$auteur->user_nicename}</span>
              </div>
          </div>
        </article>
      EOT;
    }
}