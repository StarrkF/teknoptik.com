<?php

use App\Http\Controllers\App\ContentController;
use App\Http\Controllers\App\HomeController;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\MenuController;
use App\Http\Controllers\Panel\PageController;
use Illuminate\Support\Facades\Route;


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


Route::get('den', function () {
    
    
});


//? AUTH
Route::get('login',function(){return view('admin.auth.pages.login');})->name('get.login');
Route::get('register',function(){return view('admin.auth.pages.register');})->name('get.register');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
Route::post('login',[AuthController::class,'login'])->name('post.login');
Route::post('register',[AuthController::class,'register'])->name('post.register');

Route::prefix('admin')->group(function(){
    Route::middleware('auth')->group(function(){
        //* INDEX
        Route::get('/',function(){return view('admin.pages.dashboard');})->name('admin.home');
        Route::get('menus',[MenuController::class,'index'])->name('admin.get.menu');
        Route::get('/page/{link}',[PageController::class,'index'])->name('admin.get.page');

        //* STORE
        Route::post('menus',[MenuController::class,'store'])->name('admin.store.menu');
        Route::post('page/{link}',[PageController::class,'store'])->name('admin.store.page');

        //* SHOW
        Route::get('page/{link}/{id}',[PageController::class,'show'])->name('admin.show.page');

        //* UPDATE
        Route::post('menu/name/{link}',[MenuController::class,'updateName'])->name('admin.update.menu.name');
        Route::post('menu/number/{id}',[MenuController::class,'updateNumber'])->name('admin.update.menu.number');
        Route::post('page/update/{link}/{id}',[PageController::class,'update'])->name('admin.update.page');

        //* DESTROY
        Route::get('menu/{link}',[MenuController::class,'delete'])->name('admin.delete.menu');
        Route::get('page/delete/{link}/{id}',[PageController::class,'delete'])->name('admin.delete.page');
    });

});

Route::post('status/{link}/{id}',[PageController::class,'changeStatus']);



//* APP

Route::get('/',[HomeController::class,'index'])->name('app.home');
Route::post('/comment',[ContentController::class,'storeComment'])->name('app.post.comment');
Route::get('/{menu}',[ContentController::class,'index'])->name('app.get.content');
Route::get('/{menu}/{id}',[ContentController::class,'show'])->name('app.get.content.detail');
