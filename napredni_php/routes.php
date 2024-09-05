<?php

use Controllers\GenresController;
use Controllers\MembersController;
use Controllers\HomeController;
use Controllers\DashboardController;
use Controllers\LoginController;
use Controllers\RegisterController;
use Controllers\RentalsController;
use Controllers\MoviesController;
use Controllers\PricesController;
use Controllers\FormatsController;

$router->get('/',                   [HomeController::class, 'index']);
$router->get('/dashboard',          [DashboardController::class, 'index']);
$router->post('/dashboard/store',   [RentalsController::class, 'store']);


$router->get('/register',           [RegisterController::class, 'create']);
$router->post('/register',          [RegisterController::class, 'store']);

$router->get('/login',              [LoginController::class, 'create']);
$router->post('/login',             [LoginController::class, 'store']);
$router->get('/logout',             [LoginController::class, 'logout']);

$router->get('/rentals',            [RentalsController::class, 'index']);
$router->get('/rentals/show',       [RentalsController::class, 'show']);
$router->get('/rentals/create',     [RentalsController::class, 'create']);
$router->post('/rentals',           [RentalsController::class, 'store']);
$router->get('/rentals/edit',       [RentalsController::class, 'edit']);
$router->patch('/rentals',          [RentalsController::class, 'update']);
$router->delete('/rentals/destroy', [RentalsController::class, 'destroy']);

$router->get('/members',            [MembersController::class, 'index']);
$router->get('/members/show',       [MembersController::class, 'show']);
$router->get('/members/create',     [MembersController::class, 'create']);
$router->post('/members',           [MembersController::class, 'store']);
$router->get('/members/edit',       [MembersController::class, 'edit']);
$router->patch('/members',          [MembersController::class, 'update']);
$router->delete('/members/destroy', [MembersController::class, 'destroy']);

$router->get('/genres',             [GenresController::class, 'index']);
$router->get('/genres/show',        [GenresController::class, 'show']);
$router->get('/genres/create',      [GenresController::class, 'create']);
$router->post('/genres',            [GenresController::class, 'store']);
$router->get('/genres/edit',        [GenresController::class, 'edit']);
$router->patch('/genres',           [GenresController::class, 'update']);
$router->delete('/genres/destroy',  [GenresController::class, 'destroy']);

$router->get('/movies',             [MoviesController::class, 'index']);
$router->get('/movies/show',        [MoviesController::class, 'show']);
$router->get('/movies/create',      [MoviesController::class, 'create']);
$router->post('/movies',            [MoviesController::class, 'store']);
$router->get('/movies/edit',        [MoviesController::class, 'edit']);
$router->patch('/movies',           [MoviesController::class, 'update']);
$router->delete('/movies/destroy',  [MoviesController::class, 'destroy']);

$router->get('/prices',             [PricesController::class, 'index']);
$router->get('/prices/show',        [PricesController::class, 'show']);
$router->get('/prices/create',      [PricesController::class, 'create']);
$router->post('/prices',            [PricesController::class, 'store']);
$router->get('/prices/edit',        [PricesController::class, 'edit']);
$router->patch('/prices',           [PricesController::class, 'update']);
$router->delete('/prices/destroy',  [PricesController::class, 'destroy']);

$router->get('/formats',            [FormatsController::class, 'index']);
$router->get('/formats/show',       [FormatsController::class, 'show']);
$router->get('/formats/create',     [FormatsController::class, 'create']);
$router->post('/formats',           [FormatsController::class, 'store']);
$router->get('/formats/edit',       [FormatsController::class, 'edit']);
$router->patch('/formats',          [FormatsController::class, 'update']);
$router->delete('/formats/destroy', [FormatsController::class, 'destroy']);
