<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/php-rest-service/vendor/autoload.php';
require __DIR__ . '/MyRestApi/Admin.php';

use RestService\Server;

Server::create('.', 'MyRestApi\Admin')
    ->collectRoutes()
->run();


