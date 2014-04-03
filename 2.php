<?php
include_once 'SplClassLoader.php';

$projectDir = dirname(__FILE__);

$autoloader = new SplClassLoader('Kepek', $projectDir . '/osztaly/kulso/teszt2');
$autoloader->setNamespaceSeparator('_');
$autoloader->register();

  $b = new Image();
?>
