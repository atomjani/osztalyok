<?php
include_once 'SplClassLoader.php';

$projectDir = dirname(__FILE__);

$autoloader = new SplClassLoader('kulso', $projectDir . '/osztaly');
$autoloader->setNamespaceSeparator('_');
$autoloader->register();
   
$a = new kulso_teszt1_Test();
?>

