<?php
require_once('/models/AnagramString.php');

class AnagramCheckerController {

  function checkAnagram($stringOne, $stringTwo) {
    $isAnagram = $this->isAnagram($stringOne, $stringTwo);
    if($isAnagram) {
      return "<div class='alert alert-success'><strong>".$stringOne."</strong> | <strong>".$stringTwo."</strong> is a valid anagram.</div>";
    } else {
      return "<div class='alert alert-danger'><strong>".$stringOne."</strong> | <strong>".$stringTwo."</strong> is not a valid anagram.</div>";
    }
  }

  function isAnagram($stringOne, $stringTwo) {
    $anagramStringOne = new AnagramString($stringOne);
    $anagramStringTwo = new AnagramString($stringTwo);
    return $anagramStringOne->equals($anagramStringTwo);
  }
}

?>
