<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Back\BuyerController;
use App\Http\Controllers\PagesController;
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


Route::prefix('admin')->group(function () {
     Route::middleware('Buyer')->group(function () {
         Route::name('admin')->get('/dashboard', [BuyerController::class, 'index']);
     });
 });

Route::prefix('admin')->group(function () {
     Route::middleware('Admin')->group(function () {
         Route::name('admin')->get('/dashboard', [AdminController::class, 'index']);
         //cities
         Route::name('city')->get('/city', [AdminController::class, 'city']);
         Route::name('city.edit')->get('/city/{id}', [AdminController::class, 'edit']);
         Route::name('city.update')->post('/city/{id}', [AdminController::class, 'update']);
         Route::name('city.delete')->get('/city/delete/{id}', [AdminController::class, 'delete']);
         Route::name('city.add')->post('/city', [AdminController::class, 'create']);

         //propreties
         Route::name('propreties')->get('/proprety', [AdminController::class, 'proprety']);
         Route::name('proprety.edit')->get('/proprety/{id}', [AdminController::class, 'editproprety']);
         Route::name('proprety.update')->post('/proprety/{id}', [AdminController::class, 'updateproprety']);
         Route::name('proprety.delete')->get('/proprety/delete/{id}', [AdminController::class, 'deleteproprety']);
         Route::name('proprety.add')->post('/proprety', [AdminController::class, 'createproprety']);

         //inquiries
         Route::name('inquiries')->get('/inquiries', [AdminController::class, 'inquiries']);
         Route::name('inquiries.delete')->get('/inquiries/delete/{id}', [AdminController::class, 'deleteenquiry']);

     });
 });



Route::name('home')->get('/', [PagesController::class, 'index']);
Route::name('enquiry')->post('/enquiry', [PagesController::class, 'Enquiries']);
Route::name('proprety')->get('/proprety', [PagesController::class, 'proprety']);
Route::name('agents')->get('/agents', [PagesController::class, 'agents']);
Route::name('singleproprety')->get('/proprety/{id}', [PagesController::class, 'singleproprety']);


// Route::get('/',function () {return view('front.layout');})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
