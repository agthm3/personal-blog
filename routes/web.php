<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Models\JobExperience;
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

//Portofolio Front
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('index_portofolio');

//Dashboard
Route::get('/dashboard', [HomeController::class, 'index_dashboard'])->name('index_dashboard');

//portofolio
Route::get('/dashboard/portofolio', [PortofolioController::class, 'index_dashboard'])->name('index_dashboard_portofolio');

//Dashboard Portofolio
Route::get('/dashboard/portofolio/create', [PortofolioController::class, 'create_dashboard'])->name('create_dashboard_portofolio');
Route::post('/dashboard/portofolio/create', [PortofolioController::class, 'store_portofolio'])->name('store_dashboard_portofolio');
Route::delete('/dashboard/portofolio/{portofolio}/delete',[PortofolioController::class, 'delete_portofolio'])->name('delete_dashboard_portofolio');
Route::get('/dashboard/portofolio/{portofolio}/detail', [PortofolioController::class, 'show_portofolio'])->name('show_dashboard_portofolio');
Route::get('/dashboard/portofolio/{portofolio}/edit', [PortofolioController::class, 'edit_portofolio'])->name('edit_dashboard_portofolio');
Route::patch('/dashboard/portofolio/{portofolio}/edit', [PortofolioController::class, 'update_portofolio'])->name('update_dashboard_portofolio');
//Dashboard Portofolio info
Route::get('/dashboard/portofolio/info', [PortofolioController::class, 'create_info_portofolio'])->name('create_info_portofolio');
Route::post('/dashboard/portofolio/info/create', [PortofolioController::class,'store_info_portofolio'])->name('store_info_portofolio');
Route::get('/dashboard/portofolio/edit/{portofolioInfo}/info', [PortofolioController::class, 'edit_info_portofolio'])->name('edit_info_portofolio');
Route::patch('/dashboard/portofolio/update/{portofolioInfo}/update', [PortofolioController::class, 'update_info_portofolio'])->name('update_info_portofolio');
//Pages Portofolio 
Route::get('/portofolio/{portofolio}/detail', [PortofolioController::class, 'show_pages_portofolio'])->name('pages_portofolio_show');

//article
Route::get('/article', [ArticleController::class, 'index'])->name('index_article');
Route::get('/article/{article}', [ArticleController::class, 'show'])->name('show_article');
Route::get('/dashboard/article/info/create', [ArticleController::class, 'create_info'])->name('create_info_article');
Route::post('/dashboard/article/info/create', [ArticleController::class, 'store_info'])->name('store_info_article');
Route::get('/dashboard/article/info/{articleInfo}/edit', [ArticleController::class, 'edit_info'])->name('edit_info_article');
Route::patch('/dashboard/article/info/{articleInfo}/update', [ArticleController::class, 'update_info'])->name('update_info_article');
Route::get('/dashboard/article', [ArticleController::class, 'index_article'])->name('index_dashboard_article');
Route::get('/dashboard/article/create', [ArticleController::class, 'create_dashboard_article'])->name('create_dashboard_article');
Route::post('/dashboard/article/store', [ArticleController::class, 'store_dashboard_article'])->name('store_dashboard_article');
Route::delete('/dashboard/article/{article}/delete', [ArticleController::class, 'delete_dashboard_article'])->name('delete_dashboard_article');
Route::get('/dashboard/article/{article}/detail', [ArticleController::class, 'show_article'])->name('show_dashboard_article');
Route::get('/dashboard/article/{article}/edit', [ArticleController::class, 'edit_article'])->name('edit_dashboard_article');
Route::patch('/dashboard/article/{article}/update', [ArticleController::class, 'update_article'])->name('update_dashboard_article');

//Comment
Route::post('/comment', [CommentController::class, 'store'])->name('store_comment');



//contact
Route::get('/contact', [ContactController::class, 'index'])->name('index_contact');
Route::get('/dashboard/contact', [ContactController::class, 'index_contact'])->name('index_dashboard_contact');
Route::get('/contact/add', [ContactController::class, 'create_dashboard_contact'])->name('create_dashboard_contact');
Route::post('/contact/create', [ContactController::class, 'store_dashboard_contact'])->name('store_dashboard_contact');
Route::get('/contact/edit', [ContactController::class, 'edit_dashboard_contact'])->name('edit_dashboard_contact');
Route::patch('/contact/edit/{contact}', [ContactController::class, 'update_dashboard_contact'])->name('update_dashboard_contact');



Route::get('/dashboard/home', [HomeController::class, 'index_home'])->name('index_dashboard_home');
Route::get('/dashboard/home/edit', [HomeController::class, 'edit_home'])->name('edit_dashboard_home');
Route::patch('/dashboard/home/{home}', [HomeController::class, 'update_home'])->name('update_dashboard_home');
Route::get('/home/create', [HomeController::class, 'create_home'])->name('create_dashboard_home');
Route::post('/home/store', [HomeController::class, 'store_home'])->name('store_dashboard_home');



//About
Route::get('/dashboard/about', [AboutController::class, 'index_about'])->name('index_dashboard_about');
Route::get('/dashboard/add', [AboutController::class, 'add_info_about'])->name('add_info_about');
Route::post('/dashboard/add/info', [AboutController::class, 'store_info_about'])->name('store_info_about');
Route::get('/dashboard/{about}/edit', [AboutController::class, 'edit_info_about'])->name('edit_info_about');
Route::patch('/dashboard/edit/{about}', [AboutController::class, 'update_info_about'])->name('update_info_about');

// Dashboard Comment
Route::get('/dashboard/comment', [CommentController::class, 'index_dashboard'])->name('index_dashboard_comment');
Route::delete('/dashboard/comment/{comment}', [CommentController::class, 'delete_comment'])->name('delete_comment');

Route::get('/experience/create', [AboutController::class, 'create_experience'])->name('create_experience');
Route::post('/experience/create', [AboutController::class, 'store_dashboard_experiece'])->name('store_dashboard_experiece');
Route::delete('/experiece/{id}/delete', [AboutController::class, 'delete_dashboard_experience'])->name('delete_dashboard_experience');

//Achivement
Route::get('/dashboard/achievement/create', [AchievementController::class, 'create'])->name('create_achievement');
Route::post('/dashboard/achievement/store', [AchievementController::class, 'store'])->name('store_achievement');
Route::delete('/dashboard/achievement/{achievement}/delete', [AchievementController::class, 'delete'])->name('delete_achievement');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
