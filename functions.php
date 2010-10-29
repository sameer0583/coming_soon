<?php

  function printpre($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }
  
  class facebook {
    function get_info() {
      $info = array(
        'poop','poop1','poop2'
      );
      
      return $info;
    }
  }
  
  class twitter {
    function get_info() {
      $info = array(
        'poo','poo1','poo2'
      );
      
      return $info;
    }  
  }

?>