<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SetLocaleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\UmesureController;
use App\Http\Controllers\RecetteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/lang/{locale}', [SetLocaleController::class, 'index'])->name('lang');

// Pour valider l'identité de l'utilisateur pour cette route

// *** Protection d'une route ***
// the /tasks route is protected by the auth middleware, which ensures that only authenticated users can access the route.
/* Route::get('/tasks', [TaskController::class, 'index'])->name('task.index')->middleware('auth'); */



Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/index2', [UserController::class, 'index2'])->name('user.index2');
Route::get('/registration', [UserController::class, 'create'])->name('user.create');
Route::post('/registration', [UserController::class, 'store'])->name('user.store');
Route::get('/edit/user/{user}', [UserController::class, 'edit'])->name('user.edit');



Route::get('/login', [AuthController::class, 'create'])->name('login');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

/**
 * Ces routes peuvent sevir de template
 */
/* Route::prefix('/category')->name('category.')->group(function () {
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/create', [CategoryController::class, 'store'])->name('store');
    Route::get('/category', [CategoryController::class, 'index'])->name('index');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/edit/{category}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('delete');
}); */


Route::resource("/recette", RecetteController::class);
Route::resource("/ingredient", IngredientController::class);
Route::resource("/umesure", UmesureController::class);
Route::resource("/category", CategoryController::class);

/* Route::prefix('/umesure')->name('umesure.')->group(function () {
    Route::get('/create', [UmesureController::class, 'create'])->name('create');
    Route::post('/create', [UmesureController::class, 'store'])->name('store');
    Route::get('/Umesures', [UmesureController::class, 'index'])->name('index');
    Route::get('/{Umesure}', [UmesureController::class, 'show'])->name('show');
    Route::get('/edit/{Umesure}', [UmesureController::class, 'edit'])->name('edit');
    Route::put('/edit/{Umesure}', [UmesureController::class, 'update'])->name('update');
    Route::delete('/{Umesure}', [UmesureController::class, 'destroy'])->name('delete');
}); */


Route::get('/password/forgot', [UserController::class, 'forgot'])->name('user.forgot');
Route::post('/password/forgot', [UserController::class, 'email'])->name('user.email');
Route::get('/password/reset/{user}/{token}', [UserController::class, 'reset'])->name('user.reset');
Route::put('/password/reset/{user}/{token}', [UserController::class, 'resetUpdate'])->name('user.reset.update');



Route::get('/task-pdf/{task}', [TaskController::class, 'pdf'])->name('task.pdf');

Route::get('/', function () {
    return view('welcome');
})->name("welcome");


Route::get('forfait', function () {
    return view('forfait');
    // return view('index');
})->name("forfait");

Route::get('collection', function () {
    return view('collection');
    // return view('index');
})->name("collection");

Route::get('product-collection', function () {
    return view('product-collection');
    // return view('index');
})->name("product-collection");

Route::get('testimonial', function () {
    return view('testimonial');
    // return view('index');
})->name("testimonial");


Route::get('contact', function () {
    return view('contact');
    // return view('index');
})->name("contact");

Route::get('about', function () {
    return view('about');
    // return view('index');
})->name("about");



Route::get('/{slug}-{id}', function (string $slug, string $id, Request $request) {
    return [
        "slug" => $slug,
        "id" => $id,
        "name" => $request->input(),
    ];
})->where([
    "id" => '[0-9]+',
    "slug" => '[a-z0-9\-]+',
])->name('show');
