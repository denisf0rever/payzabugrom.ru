<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomePageController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Analytics\AnalyticsController;
use App\Http\Controllers\Post\CatergoryController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ImageController;

Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/booking', fn () => view('service.booking'))->name('booking');
Route::get('/airbnb', fn () => view('service.airbnb'))->name('airbnb');
Route::get('/money-transfer', fn () => view('service.money-transfer'))->name('money-transfer');
Route::get('/google-disk', fn () => view('service.google-disk'))->name('google-disk');
Route::get('/eset', fn () => view('service.eset'))->name('eset');
Route::get('/youtube', fn () => view('service.youtube'))->name('youtube');
Route::get('/spotify', fn () => view('service.spotify'))->name('spotify');
Route::get('/zoom', fn () => view('service.zoom'))->name('zoom');
Route::get('/chatgpt', fn () => view('service.chatgpt'))->name('chatgpt');
Route::get('/suno', fn () => view('service.suno'))->name('suno');
Route::get('/grok', fn () => view('service.grok'))->name('grok');


Route::get('/home', function () {return view('dashboard.main');});

	Route::get('/login', [AuthController::class, 'index'])->name('login');
	Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
	Route::get('/register', [RegistrationController::class, 'show'])->name('registration');
	Route::post('/register', [RegistrationController::class, 'register'])->name('register.post');
	Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
	
	// Статьи
	Route::get('/articles', [PostController::class, 'list'])->name('articles.list');
	Route::get('/article/{id}', [PostController::class, 'show'])->name('articles.item');
	Route::get('/category/{id}', [CatergoryController::class, 'show'])->name('category.item');
	
Route::middleware(['auth', 'access'])->group(function () {
    Route::get('/dashboard', function () {
		return view('dashboard.main');})->name('dashboard.main');
	
	// Статьи
	Route::get('/dashboard/article', [PostController::class, 'index'])->name('dashboard.article');
	Route::get('/dashboard/article/{id}/edit', [PostController::class, 'edit'])->name('dashboard.article.edit');
	Route::post('/dashboard/article/{id}', [PostController::class, 'update'])->name('dashboard.article.update');
	Route::get('/dashboard/article/add-article', [PostController::class, 'store'])->name('dashboard.article.add-article');
	Route::post('/article/create', [PostController::class, 'create'])->name('dashboard.article.create-article');
	Route::get('/article/delete/{id}', [PostController::class, 'destroy'])->name('dashboard.article.destroy');
	
	// Аналитика: статьи
	Route::get('/dashboard/analytics/articles/', [AnalyticsController::class, 'index'])->name('dashboard.analytics');
	Route::get('/dashboard/dashboard/analytics/articles/{id}', [AnalyticsController::class, 'show'])->name('dashboard.analytics.specialization');
	Route::get('/dashboard/analytics/articles/{id}/edit', [AnalyticsController::class, 'edit'])->name('dashboard.analytics.specialization.edit');
	Route::get('/dashboard/analytics/article/{id}/phrase-create', [AnalyticsController::class, 'store'])->name('dashboard.analytics.phrase.add');
	Route::post('/analytics/create', [AnalyticsController::class, 'create'])->name('dashboard.analytics.phrase.create');
	Route::post('/analytics/phrase/{id}', [AnalyticsController::class, 'update'])->name('dashboard.analytics.phrase.update');
	Route::get('/analytics/delete/{id}', [AnalyticsController::class, 'destroy'])->name('dashboard.analytics.phrase.destroy');
	
	// Статьи: категории
	Route::get('/dashboard/categories', [CatergoryController::class, 'index'])->name('dashboard.categories');
	Route::get('/dashboard/article/add-category', function () {return view('dashboard.articles.add-category');})->name('dashboard.article.add-category');
	Route::post('/categories/create', [CatergoryController::class, 'create'])->name('dashboard.article.create-category');
	Route::get('/dashboard/category/{id}/edit', [CatergoryController::class, 'edit'])->name('dashboard.category.edit');
	Route::get('/category/delete/{id}', [CatergoryController::class, 'destroy'])->name('dashboard.category.destroy');
	Route::post('/dashboard/category/{id}', [CatergoryController::class, 'update'])->name('dashboard.category.update');

	// Профиль
	Route::get('/dashboard/user', [UserController::class, 'index'])->name('dashboard.user');
	Route::get('/dashboard/user/add-user', [UserController::class, 'store'])->name('dashboard.user.add-user');
	Route::get('/dashboard/user/{id}/edit', [UserController::class, 'edit'])->name('dashboard.user.edit');
	Route::post('/user/create', [UserController::class, 'create'])->name('dashboard.user.create-user');
	Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('dashboard.user.destroy');
	Route::post('/dashboard/user/{id}', [UserController::class, 'update'])->name('dashboard.user.update');
	
	// Консультации
	Route::get('/dashboard/consultations', function() {return 'ok';})->middleware('can:show')->name('dashboard.consultations');
});


