<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    IndexController::class, 'index'
])->name('index');

Route::get('/projects', [
    ProjectsController::class, 'index'
])->name('projects.index');

Route::get('/blog', [
    BlogController::class, 'index'
])->name('blog.index');

Route::get('/blog/article/{u}', [
    BlogController::class, 'getArticle'
])->name('blog.article');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
