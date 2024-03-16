<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Session;


// Route::get('/{lang?}', function ($lang) {
//     App::setLocale($lang);
//     return view('welcome');
// });


// Route::middleware('lang')->group(function(){
//     Route::controller(HomeController::class)->group(function(){
   
//         Route::get('/','index')->name('welcome');
//         Route::get('/more','more')->name('more');
//         Route::get('/all-services','all_services')->name('all.services');
    
    
    
//     });
// });

Route::controller(HomeController::class)->group(function(){
   
    Route::get('/{lang?}','index')->name('welcome');
    Route::get('/{lang?}/more','more')->name('more');
    Route::get('/{lang?}/all-services','all_services')->name('all.services');

    // Route::get('locale/{locale}','setLang')->name('locale');
    Route::get('/lang/{locale}', function ($locale) {
        if (! in_array($locale,['en', 'ar'])) {
            abort(404);
        }
        app()->setLocale($locale);
        Session::put("locale",$locale);
        app()->getLocale();
        return redirect()->back();
    })->name('lang');
  
});
// });

// Route::get('ar', function () {
//     app()->setLocale('ar');
//     return redirect()->back();
// })->name('ar');

// Route::get('en', function () {
//     app()->setLocale('en');
//     return redirect()->back();
// })->name('en');

