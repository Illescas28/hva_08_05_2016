<?php
// This file generated by Propel 1.7.1 convert-conf target
// from XML runtime conf file /Users/CarlosEsparza/hva/module/Propel/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'hva' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=hva.com.mx;dbname=hva',
        'user' => 'root',
        'password' => 'mysql',
      ),
    ),
    'default' => 'hva',
  ),
  'generator_version' => '1.7.1',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-hva-conf.php');
return $conf;