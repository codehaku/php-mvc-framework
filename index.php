<?php

$app = new Application();

//$router = new Router();
//$app->useRouter($router);

$app->router->get('/', function(){
    return 'Hello World';
});

$app->run();