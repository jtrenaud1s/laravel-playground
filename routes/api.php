<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get a template by ID
Route::get('/template/{id}', [TemplateController::class, 'template']);

// Get all templates
Route::get('/templates', [TemplateController::class, 'templates']);

// Get all the pages for a (template by name)
Route::get('/template/{name}/pages', [TemplateController::class, 'pages']);


Route::post('/page/store', [PageController::class, 'store']);
