<?php

use App\Http\Controllers\admminControllers;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
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


Route::match(['get', 'post'], '/', [mainController::class, 'index']);
Route::get('/about', [mainController::class, 'about']);
Route::match(['get', 'post'], '/quote', [mainController::class, 'quote']);
Route::get('/services', [mainController::class, 'services']);
Route::get('/blog', [mainController::class, 'blog']);
Route::match(['get', 'post'], '/contact', [mainController::class, 'contact']);
Route::match(['get', 'post'], '/track', [mainController::class, 'track']);
Route::match(['get', 'post'], '/estimate', [mainController::class, 'estimate'])->name('quote_data');
Route::match(['get', 'post'], '/order', [mainController::class, 'order']);
Route::match(['get', 'post'], '/details', [mainController::class, 'details']);
Route::match(['get', 'post'], '/blogmore', [mainController::class, 'blogedit']);

// admin controllers 

Route::match(['get', 'post'], '/admins', [admminControllers::class, 'admin'])->name('login');
Route::match(['get', 'post'], '/dashboard', [admminControllers::class, 'dashboard'])->name('dashboard');
Route::match(['get', 'post'], '/adminorder', [admminControllers::class, 'adminorder']);
Route::match(['get', 'post'], '/contactdetails', [admminControllers::class, 'contactdetails']);
Route::match(['get', 'post'], '/adminchange', [admminControllers::class, 'Change']);
Route::match(['get', 'post'], '/adminblog', [admminControllers::class, 'adminblog']);
Route::match(['get', 'post'], '/adminabout', [admminControllers::class, 'adminabout']);
Route::match(['get', 'post'], '/calculator', [admminControllers::class, 'calculator']);
Route::match(['get', 'post'], '/signin', [admminControllers::class, 'signin']);
Route::match(['get', 'post'], '/orders', [admminControllers::class, 'code'])->name('orders');
Route::match(['get', 'post'], '/userD', [admminControllers::class, 'UserD']);
Route::match(['get', 'post'], '/update', [admminControllers::class, 'update']);
Route::match(['get', 'post'], '/adminEdit', [admminControllers::class, 'Changes']);
Route::match(['get', 'post'], '/dashboard1', [admminControllers::class, 'dashboard1']);



Route::get('/logout', function(Request $request){
    $request -> session() -> flush();
    return redirect('/admin');
  });
  
  Route::get('/admin', function(){
    if(session()->has('login')){
      return redirect('/dashboard');
    }
    return redirect('/admins');
  });


