<?php
include_once 'SplClassLoader.php';

$projectDir = dirname(__FILE__);

$autoloader = new SplClassLoader('kulso', $projectDir . '/osztaly');
$autoloader->setNamespaceSeparator('_');
$autoloader->register();

  $b = new kulso_teszt2_Image();
?>
