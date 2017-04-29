<?php

class AnagramString {

  var $content;

  function __construct($content) {
    //Remove whitespaces and transform to lowercase
    $content = preg_replace('/\s+/', '', strtolower($content));
    //Split string and sort
    $contentSortedArray = str_split($content);
    sort($contentSortedArray);
    //Build string from sorted array
    $this->content = implode($contentSortedArray);
   }

   function equals($anagramString) {
     return $this->content == $anagramString->content;
   }
}

?>
