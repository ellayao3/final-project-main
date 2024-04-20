<?php

use app\controllers\UserController;
use app\controllers\ReviewsController;
use app\controllers\AppointmentsController;

$routes = [
   'users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
        'POST' => 'saveUsers'
    ],
    'view-users' => [
        'controller' => UserController::class,
        'GET' => 'getUsers',
    ],
    
    'reviews' => [
        'controller' => ReviewsController::class,
        'GET' => 'getReviews',
    ],

    'appointments' => [
        'controller' => AppointmentsController::class,
        'POST' => 'addAppointments',
    ]

];