<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RentalController;
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

Route::get('/',[IndexController::class,'homepage']); //首页
Route::get('/homepage',[IndexController::class,'homepage']); //首页

Route::post('/login',[IndexController::class,'login']); // 登录

Route::get('login', function () {
    return view('login');
});
Route::get('404', function () {
    return view('404');
});
Route::get('500', function () {
    return view('500');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('manager_add', function () {
    return view('manager_add');
});

Route::get('/logout',[IndexController::class,'logout']); // 退出

Route::get('/registration',[IndexController::class,'registration']); // 注册静态
Route::post('/register',[IndexController::class,'register'])->name('register'); // 注册写入

Route::get('/rentalpage/{computer_id}',[IndexController::class,'rentalpage']); // 租用详情页
Route::post('/rental',[IndexController::class,'rental']); // 租用逻辑处理


Route::get('/rentalall',[RentalController::class,'rentalall']); // 返回租赁列表 (客户使用)
Route::get('/rental/{rental_id}',[RentalController::class,'rental']); // 返回租赁按钮 (客户使用)

Route::get('/managerrental',[RentalController::class,'managerrental']); // 管理租赁页面(管理员/职员)
Route::post('/manager_confirm/{rental_id}',[RentalController::class,'manager_confirm']); // 确认返还
Route::get('/manager_edit/{rental_id}',[RentalController::class,'manager_edit']);
Route::post('/manager_delete/{rental_id}',[RentalController::class,'manager_delete']);
Route::post('/update/{rental_id}',[RentalController::class,'update']);
Route::post('/manager_add/add',[RentalController::class,'add']);

Route::get('/usercenter',[RentalController::class,'usercenter']); // 用户账户
Route::post('/update',[RentalController::class,'usercenter_update']); // 用户账户更新操作

