<?php

  namespace Table\Model;

  class Render
  {
    public function drawTable($obj)
    {
      include MAIN . '/pattern/main/main.php';
      include MAIN . '/pattern/sort/jsSort.js';
    }
  }
?>