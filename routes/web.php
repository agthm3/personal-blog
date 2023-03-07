<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home.index');
});

// home
Route::get('/', [HomeController::class, 'index'])->name('index_home');

//about
Route::get('/about', [AboutController::class, 'index'])->name('index_about');

//portofolio
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('index_portofolio');

//article
Route::get('/article', [ArticleController::class, 'index'])->name('index_article');
//contact
Route::get('/contact', [ContactController::class, 'index'])->name('index_contact');


Route::get('/dashboard', [HomeController::class, 'index_dashboard'])->name('index_dashboard');

Route::get('/dashboard/home', [HomeController::class, 'index_home'])->name('index_dashboard_home');
Route::get('/dashboard/contact', [HomeController::class, 'index_contact'])->name('index_dashboard_contact');


Route::get('/dashboard/portofolio', [HomeController::class, 'index_portofolio'])->name('index_dashboard_portofolio');

Route::get('/dashboard/about', [HomeController::class, 'index_about'])->name('index_dashboard_about');
Route::get('/dashboard/article', [HomeController::class, 'index_article'])->name('index_dashboard_article');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
