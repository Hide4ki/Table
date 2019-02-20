<?php
  namespace Model;
  
  class Render
  {
    public function drawTable($obj)
    {
      include_once $_SERVER['DOCUMENT_ROOT'] . '/Table/pattern/main/main.php';
      include_once $_SERVER['DOCUMENT_ROOT'] . '/Table/pattern/sort/jsSort.js';
    }
  }
?>