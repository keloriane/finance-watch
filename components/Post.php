<?php

class Post
{
    function renderTags($tags)
    {
        $tagsList = [];
        foreach ($tags as $tag) {
            $tagsList[] = "<span>{$tag->name}</span> ";
        }
        return implode('', $tagsList);
    }

    function getTheLink($postId)
    {
        return get_permalink($postId);
    }

    function get($postId)
    {
        var_dump($postId);
        return (object) get_field('customArticle', $postId);
    }

}
