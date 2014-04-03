<?php
  function __autoload($osztalynev) {
      require_once $osztalynev . '.php';
  }
   
  $a = new Test();
  $b = new Image();
?>