<?php
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AppsController;



Route::middleware('admin.guest')->group(function () {
	Route::get('/login',[AdminLoginController::class,'Login'])->name('login');
	Route::post('/login/authenticate',[AdminLoginController::class,'LoginAuthenticate'])->name('login.authenticate');
});

Route::middleware('admin')->group(function () {
	Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard');
	// apps
	Route::get('/apps',[AppsController::class,'Index'])->name('apps');
	Route::get('/apps/list',[AppsController::class,'GetList'])->name('apps.list');
	// create
	Route::get('/app/create',[AppsController::class,'Create'])->name('app.create');
	Route::post('/app/insert',[AppsController::class,'Insert'])->name('app.insert');
	// edit 
	Route::get('/app/edit/{id}',[AppsController::class,'Edit'])->name('app.edit');
	Route::post('/app/update/{id}',[AppsController::class,'Update'])->name('app.update');
	// view
	Route::get('/app/view/{id}',[AppsController::class,'View'])->name('app.view');
	// delete
	Route::post('/app/image/delete',[AppsController::class,'DeleteImage'])->name('app.image.delete');

	Route::get('/contacts',[DashboardController::class,'Contacts'])->name('contacts');
	Route::get('/contacts/list',[DashboardController::class,'ContactList'])->name('contacts.list');
	
	// logout
	Route::get('logout',[AdminLoginController::class,'Logout'])->name('logout');
});