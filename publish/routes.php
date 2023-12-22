<?php

use Hyperf\HttpServer\Router\Router;

Router::addServer('httpRpcDebug', function () {
	Router::addRoute(['GET', 'POST'], '/', [\Faxhaidong\HyperfRpcDebug\RpcDebugController::class, 'test']);
});