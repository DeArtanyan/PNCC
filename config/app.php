<?php
return [
    'auth' => \Src\Auth\Auth::class,
    'identity' => \Model\Users::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
    ]
];