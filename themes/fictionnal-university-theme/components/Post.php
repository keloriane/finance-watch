<?php
class Post {
    // Properties
    public $posts;
    
    function __construct() {
      $this->posts = $GLOBALS['wp_the_query']->get_posts();
    }
    // Methods
    function byId($name) {
      $this->name = $name;
    }
    
    function debug(){
      if($this->posts[0]){
        var_dump($this->posts[0]);
      }
    }

    function debugAll(){
        var_dump($this->posts);
    }

    function all() {
      foreach ($this->posts as $post) {
        echo $this->postItem($post);
      }  
    }

    function permalink($post)
    {
      return esc_url( apply_filters( 'the_permalink', get_permalink($post), $post ) );
    }

    function postItem($current){
      return <<<EOT
        <h1 class='test'>$current->post_title </h1>
        <p>$current->post_content</p>
        <a href="{$this->permalink($current)}">details</a>
        <hr>
      EOT;
    }
  }
?>