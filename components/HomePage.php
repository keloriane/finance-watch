<?php

class Homepage
{

    function renderTags($tags)
    {
        $tagsList = [];
        foreach ($tags as $tag) {
            $tagsList[] = "<span>{$tag->name}</span> ";
        }
        return implode('', $tagsList);
    }

    function renderTagsSidebar($tags)
    {
        $tagsList = [];
        foreach ($tags as $tag) {
            $tagsList[] = "<span class='sidebar-tag'>{$tag->name}({$tag->count})</span> ";
        }
        return implode('', $tagsList);
    }

    function highlights($highlights)
    {
        $render = "";
        foreach ($highlights as $highlightItem) {
            $highlightArrayACF = get_field('custom_article', $highlightItem->ID);
            $highlight = (object)$highlightArrayACF;
            $render .= $this->getHighLight($highlight, $highlightItem->ID);
        };

        echo $render;
    }

    function lastsArticles($articles)
    {
        $render = "";
        foreach ($articles as $articleItem) {
            $articleACF = get_field('custom_article', $articleItem->ID);
            $article = (object)$articleACF;
            $render .= $this->getLastsArticlesItem($article);
        };

        echo $render;
    }

    function mostReadArticles($articles)
    {
        $render = "";
        foreach ($articles as $articleItem) {
            $articleACF = get_field('custom_article', $articleItem->ID);
            $article = (object)$articleACF;
            $render .= $this->getMostReadArticleItem($article);
        };

        echo $render;
    }

    function getTheLink($postId)
    {
        return get_permalink($postId);
    }

    function mainHighLight($idMainHighLight)
    {
        $mainHighlight = (object)get_field('custom_article', $idMainHighLight);
        $tags = $mainHighlight->tags;
        $auteur = (object)$mainHighlight->auteur;
        $commentsImagePath = get_theme_file_uri('/images/comments-light.svg');
        $displayTags = $this->renderTags($tags);

        echo <<<HEREDOC
            <a href={$this->getTheLink($idMainHighLight)}>
            <article class='main-highlight'>
              <div class="main-highlight-bg"></div>
              <div class='main-highlight-featured-image-wrapper'>
                <img class='main-highlight-featured-image' src="{$mainHighlight->featured_image}" alt="">    
              </div>
              <div class="main-highlight-content">
                <p class="main-highlight-top">
                    <span class="date">{$mainHighlight->date}</span> 
                    <span class="vertical-line">|</span>
                    <span class="tags">{$displayTags}</span>
                </p>
                <div class="main-highlight-middle">
                        <div class="main-highlight-middle-excerpt">{$mainHighlight->contenu}</div> 
               
                </div>
                <div class="main-highlight-bottom">
                  <div class="main-highlight-bottom-item custom-article-comments">
                    <img class="main-highlight-comment-icon" src="{$commentsImagePath}" alt="">
                    <span class="main-highlight-comment-count">10</span>
                </div>
                <span class="vertical-line">|</span>
                <div class="main-highlight-bottom-item custom-article-author">
                    <span class="by">Par</span>
                    <span class="main-highlight-author">{$auteur->user_nicename}</span>
                </div>
              </div>
              </div>        
            </article>
            </a>
        HEREDOC;
    }

    function getHighLight($highlight,$id)
    {
        $tags = $highlight->tags;
        $auteur = (object)$highlight->auteur;
        $commentsImagePath = get_theme_file_uri('/images/comments-dark.svg');
        $displayTags = $this->renderTags($tags);

        return <<<HEREDOC
         <article class='highlight'>
           <a href={$this->getTheLink($id)}>
          <div class='highlight-featured-image-wrapper'>
            <img class='highlight-featured-image' src="{$highlight->featured_image}" alt="">    
          </div>
          <div class="highlight-content">
             <div class="highlight-top">
                <span class="date">{$highlight->date}</span> 
                <span class="vertical-line">|</span>
                <span class="tags">{$displayTags}</span>
              </div>
              <div class="highlight-middle">
                <div class="highlight-middle-excerpt">{$highlight->contenu}</div>
              </div>
              <div class="highlight-bottom">
                  <div class="highlight-bottom-item custom-article-comments">
                    <img class="highlight-comment-icon" src="{$commentsImagePath}" alt="">
                    <span class="highlight-comment-count">10</span>
                  </div>
                  <span class="vertical-line">|</span>
                  <div class="highlight-bottom-item custom-article-author">
                    <span class="by">Par</span>
                    <span class="highlight-author">{$auteur->user_nicename}</span>
                  </div>
              </div>
          </div>
          </a>
         </article>
         HEREDOC;
    }

    function getLastsArticlesItem($article)
    {
        $tags = $article->tags;
        $auteur = (object)$article->auteur;
        $commentsImagePath = get_theme_file_uri('/images/comments-dark.svg');
        $displayTags = $this->renderTags($tags);

        return <<<HEREDOC
         <article class='last-article-item'>
          <div class='last-article-item-featured-image-wrapper'>
            <img class='last-article-item-featured-image' src="{$article->featured_image}" alt="">    
          </div>
          <div class="last-article-item-content">
             <div class="last-article-item-top">
                <span class="date">{$article->date}</span> 
                <span class="vertical-line">|</span>
                <span class="tags">{$displayTags}</span>
              </div>
              <div class="last-article-item-middle">
                <div class="last-article-item-middle-excerpt">{$article->contenu}</div>
              </div>
              <div class="last-article-item-bottom">
                  <div class="last-article-item-bottom-item custom-article-comments">
                    <img class="last-article-item-comment-icon" src="{$commentsImagePath}" alt="">
                    <span class="last-article-item-comment-count">10</span>
                  </div>
                  <span class="vertical-line">|</span>
                  <div class="last-article-item-bottom-item custom-article-author">
                    <span class="by">Par</span>
                    <span class="last-article-item-author">{$auteur->user_nicename}</span>
                  </div>
              </div>
          </div>
         </article>
         HEREDOC;
    }

    function getMostReadArticleItem($article)
    {
        $tags = $article->tags;
        $displayTags = $this->renderTags($tags);

        return <<<HEREDOC
         <article class='most-read-article-item'>
          <div class='most-read-article-item-featured-image-wrapper'>
            <img class='most-read-article-item-featured-image' src="{$article->featured_image}" alt="">    
          </div>
          <div class="most-read-article-item-content">
             <div class="most-read-article-item-top">
                <span class="date">{$article->date}</span> 
                <span class="vertical-line">|</span>
                <span class="tags">{$displayTags}</span>
              </div>
              <div class="most-read-article-item-bottom">
                <div class="last-article-item-middle-excerpt">{$article->contenu}</div>
              </div>
          </div>
         </article>
         HEREDOC;
    }
}
