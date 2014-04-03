<?php
include_once 'SplClassLoader.php';

$projectDir = dirname(__FILE__);

$autoloader = new SplClassLoader('Test', $projectDir . '/osztaly/kulso/teszt1');
$autoloader->setNamespaceSeparator('_');
$autoloader->register();
   
$a = new Test();
?>

