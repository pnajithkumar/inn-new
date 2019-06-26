<?php
echo 'heress';exit;
include_once 'core/Request.php';
include_once 'core/Router.php';

$router = new Router(new Request());
$router->get('/read', function () {echo 'reeee';exit;
    include_once 'controllers/read.php';
});
