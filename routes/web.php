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
Route::get('/dashboard/contact', [ContactController::class, 'index_contact'])->name('index_dashboard_contact');
Route::get('/contact/add', [ContactController::class, 'create_dashboard_contact'])->name('create_dashboard_contact');
Route::post('/contact/create', [ContactController::class, 'store_dashboard_contact'])->name('store_dashboard_contact');
Route::get('/contact/edit', [ContactController::class, 'edit_dashboard_contact'])->name('edit_dashboard_contact');
Route::patch('/contact/edit/{contact}', [ContactController::class, 'update_dashboard_contact'])->name('update_dashboard_contact');

Route::get('/dashboard', [HomeController::class, 'index_dashboard'])->name('index_dashboard');

Route::get('/dashboard/home', [HomeController::class, 'index_home'])->name('index_dashboard_home');
Route::get('/dashboard/home/edit', [HomeController::class, 'edit_home'])->name('edit_dashboard_home');
Route::patch('/dashboard/home/{home}', [HomeController::class, 'update_home'])->name('update_dashboard_home');
Route::get('/home/create', [HomeController::class, 'create_home'])->name('create_dashboard_home');
Route::post('/home/store', [HomeController::class, 'store_home'])->name('store_dashboard_home');



Route::get('/dashboard/portofolio', [PortofolioController::class, 'index_portofolio'])->name('index_dashboard_portofolio');
Route::get('/dashboard/portofolio/info', [PortofolioController::class, 'add_info_portofolio'])->name('add_info_portofolio');
Route::post('/dashboard/portofolio/info', [PortofolioController::class, 'store_info_portofolio'])->name('store_info_portofolio');
Route::get('/dashboard/portofolio/info/edit', [PortofolioController::class, 'edit_info_portofolio'])->name('edit_info_portofolio');
Route::patch('/dashboard/portofolio/info/update/{portofolio}', [PortofolioController::class, 'update_info_portofolio'])->name('update_info_portofolio');
Route::get('/dashboard/portofolio/create', [PortofolioController::class, 'create_portofolio'])->name('create_portofolio');
Route::post('/dashboard/portofolio/create', [PortofolioController::class, 'store_portofolio'])->name('store_portofolio');
Route::get('/dashboard/portofolio/show/{portofolio}', [PortofolioController::class, 'show_portofolio'])->name('show_portofolio');
Route::delete('/dashboard/portofolio/{portofolio}/delete', [PortofolioController::class, 'delete_portofolio'])->name('delete_portofolio');

Route::get('/dashboard/about', [HomeController::class, 'index_about'])->name('index_dashboard_about');
Route::get('/dashboard/article', [HomeController::class, 'index_article'])->name('index_dashboard_article');
Route::get('/dashboard/comment', [HomeController::class, 'index_comment'])->name('index_dashboard_comment');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
