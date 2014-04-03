<?php
include_once 'SplClassLoader.php';


$autoloader = new SplClassLoader('Kepek', '/osztaly/kulso/teszt2');
$autoloader->setNamespaceSeparator('_');
$autoloader->register();

  $b = new Image();
?>