<?php
include_once 'SplClassLoader.php';

$autoloader = new SplClassLoader('Teszt', '/osztaly/kulso/teszt1');
$autoloader->setNamespaceSeparator('_');
$autoloader->register();
   
  $a = new Test();
?>

