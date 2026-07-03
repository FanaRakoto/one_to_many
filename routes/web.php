<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ArticlesController;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'articles' => ArticlesController::class,
    'categories' => CategoriesController::class,
]);
