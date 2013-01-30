<?php
$config = array(
    'Zend\Loader\ClassMapAutoloader' => array(
        'application' => APPLICATION_PATH . '/.classmap.php',
        'zf'          => APPLICATION_PATH . '/../library/Zend/.classmap.php',
    ),
    'Zend\Loader\StandardAutoloader' => array(
        'namespaces' => array(
            'Phly\Mustache' => APPLICATION_PATH . '/../library/Phly/Mustache',
            'Doctrine'      => APPLICATION_PATH . '/../library/Doctrine',
        ),
    ),
);
require_once 'Zend/Loader/AutoloaderFactory.php';
Zend\Loader\AutoloaderFactory::factory($config);