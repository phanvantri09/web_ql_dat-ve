<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ApplyJobController;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CheckMailController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckUserControlller;
use App\Http\Controllers\NhaXeController;
use App\Http\Controllers\PostAdminController;
use App\Models\Post;
use App\Models\categoryModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are lhoaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Auth::routes();

//fontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/listhome', [HomeController::class, 'list'])->name('listhome');
Route::get('/timve', [HomeController::class, 'timve'])->name('timve');
Route::post('/book/{id_news}', [HomeController::class, 'book'])->name('book');
Route::get('/listticket/{id}', [HomeController::class, 'listticket'])->name('listticket');
Route::get('/deleteticket/{id}', [HomeController::class, 'deleteticket'])->name('deleteticket');
Route::get('/listnew', [NhaXeController::class, 'listnew'])->name('listnew');
Route::get('/statusticket/{id}', [NhaXeController::class, 'statusticket'])->name('statusticket');
Route::get('/activeTicket/{id}', [NhaXeController::class, 'activeTicket'])->name('activeTicket');

Route::get('/about', function () {
    return view('layouts.pages.about');
})->name('about');
Route::get('/category/{id}', [PostController::class, 'listcate'])->name('category');
//user//
Route::get('/edituser', [CheckUserControlller::class, 'edituser'])->name('edituser');
Route::prefix('profile')->group(function () {
    Route::get('/show', [CheckUserControlller::class, 'showprofile'])->name('showprofile');
    Route::post('/edit', [CheckUserControlller::class, 'editprofile'])->name('editprofile');
});



//nhà xe

Route::get('/list', [NhaXeController::class, 'list'])->name('list');
Route::get('/add', [NhaXeController::class, 'add'])->name('add');
Route::post('/store', [NhaXeController::class, 'store'])->name('store');
Route::get('/edit/{id}', [NhaXeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [NhaXeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [NhaXeController::class, 'delete'])->name('delete');


















//backend
Route::get('admin/home', [adminController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
///Category
Route::resource('/Category', categoryController::class);
//Properties
Route::resource('/Properties', PropertiesController::class);
//Post
Route::resource('/PostAdmin', PostAdminController::class);
Route::resource('/CheckUser', CheckUserControlller::class);
//check//
Route::get('/email/{id}', [EmailController::class, 'create'])->name('email');
Route::post('/email', [EmailController::class, 'sendEmail'])->name('send.email');
