<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\OutfitController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]); // making registration only available through seeder (registration disabled)

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'designers'], function(){
    Route::get('', [DesignerController::class, 'index'])->name('designer.index');
    Route::get('create', [DesignerController::class, 'create'])->name('designer.create');
    Route::post('store', [DesignerController::class, 'store'])->name('designer.store');
    Route::get('edit/{designer}', [DesignerController::class, 'edit'])->name('designer.edit');
    Route::post('update/{designer}', [DesignerController::class, 'update'])->name('designer.update');
    Route::post('delete/{designer}', [DesignerController::class, 'destroy'])->name('designer.destroy');
    Route::get('show/{designer}', [DesignerController::class, 'show'])->name('designer.show');
});

Route::group(['prefix' => 'outfits'], function(){
    Route::get('', [OutfitController::class, 'index'])->name('outfit.index');
    Route::get('create', [OutfitController::class, 'create'])->name('outfit.create');
    Route::post('store', [OutfitController::class, 'store'])->name('outfit.store');
    Route::get('edit/{outfit}', [OutfitController::class, 'edit'])->name('outfit.edit');
    Route::post('update/{outfit}', [OutfitController::class, 'update'])->name('outfit.update');
    Route::post('delete/{outfit}', [OutfitController::class, 'destroy'])->name('outfit.destroy');
    Route::get('show/{outfit}', [OutfitController::class, 'show'])->name('outfit.show');

    Route::get('pdf/{outfit}', [OutfitController::class, 'pdf'])->name('outfit.pdf');
   });


   