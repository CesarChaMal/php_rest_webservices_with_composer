<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/php-rest-service/vendor/autoload.php';
require __DIR__ . '/MyRestApi/Admin.php';

/*
require __DIR__ . '/autoload-manager/autoloadManager.php';
try {
    $autoloadManager = new autoloadManager(null, autoloadManager::SCAN_ONCE);
    $autoloadManager = include __DIR__ . '/vendor/autoload.php';
    $autoloadManager = include __DIR__ . '/php-rest-service/vendor/autoload.php';
    $autoloadManager = include __DIR__ . '/MyRestApi/Admin.php';
    $autoloadManager->add('MyRestApi', __DIR__.'/');
    $autoloadManager->register();
} catch (Exception $e) {
    echo  $e;
}
*/



use RestService\Server;

Server::create('/MyRestApi')
    ->addGetRoute('test', function(){
        return 'Yay!';
    })
    ->addGetRoute('foo/(.*)', function($bar){
        return $bar;
    })
    ->addPostRoute('foo', function($field1, $field2) {
      // do stuff with $field1, $field2 etc
      // or you can directly get them with $_POST['field1']
    })
->run();