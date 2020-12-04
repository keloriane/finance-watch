<?php
class HomePage {  
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
        echo $this->postItemList($post);
      }  
    }

    function single() {
      foreach ($this->posts as $post) {
        echo $this->postItemSingle($post);
      }  
    }

    function permalink($post)
    {
      return esc_url( apply_filters( 'the_permalink', get_permalink($post), $post ) );
    }

    function postItemList($current){
      return <<<EOT
        <h1 class='test'><a href="{$this->permalink($current)}">$current->post_title</a></h1>
        <p>$current->post_content</p>
        <hr>
      EOT;
    }

    function postItemSingle($current){
      return <<<EOT
        <h1 class='test'>$current->post_title</h1>
        <p>$current->post_content</p>
      EOT;
    }
  }
?>