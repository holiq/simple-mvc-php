<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;

return [
    '/' => function () {
        return HomeController::index();
    },
    '/users' => function () {
        return UserController::index();
    },
];
