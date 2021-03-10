<?php

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

Auth::routes();

Route::group(['middleware' => ['guest']], function () {

    Route::get('/', function () {
        return view('auth.login');
    });

});


 //==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function ()
{

     //==============================dashboard============================
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

   //==============================dashboard============================



    Route::prefix('admin')->group(function()
    {


        //==============================Start Conatct Us============================
        Route::namespace('Admin')->prefix('contactUs')->group(function()
        {
            Route::get('/','ContactUsController@index')->name('contactUs.index');
            Route::post('/store','ContactUsController@store')->name('contactUs.store');
            Route::post('/update{id}','ContactUsController@update')->name('contactUs.update');
            Route::delete('/destroy{id}','ContactUsController@destroy')->name('contactUs.destroy');
            Route::get('/softDelete','ContactUsController@softDelete')->name('contactUs.softDelete');
            Route::post('/restore/{id}','ContactUsController@restore')->name('contactUs.restore');
            Route::post('/forceDelete/{id}','ContactUsController@forceDelete')->name('contactUs.forceDelete');

        });
        //==============================End Conatct Us============================

        //==============================Start Category============================
        Route::namespace('Admin')->prefix('category')->group(function()
        {
            Route::get('/','categoriesController@index')->name('category.index');
            Route::post('/store','categoriesController@store')->name('category.store');
            Route::post('/update{id}','categoriesController@update')->name('category.update');
            Route::delete('/destroy{id}','categoriesController@destroy')->name('category.destroy');
            Route::get('/softDelete','categoriesController@softDelete')->name('category.softDelete');
            Route::post('/restore/{id}','categoriesController@restore')->name('category.restore');
            Route::post('/forceDelete/{id}','categoriesController@forceDelete')->name('category.forceDelete');

        });
        //==============================End  Category============================


        //==============================Start AboutUs Home============================
        Route::namespace('Admin')->prefix('aboutUsHome')->group(function()
        {
            Route::get('/','AboutUsHomeController@index')->name('aboutUsHome.index');
            Route::post('/store','AboutUsHomeController@store')->name('aboutUsHome.store');
            Route::post('/update{id}','AboutUsHomeController@update')->name('aboutUsHome.update');
            Route::delete('/destroy{id}','AboutUsHomeController@destroy')->name('aboutUsHome.destroy');
            Route::get('/softDelete','AboutUsHomeController@softDelete')->name('aboutUsHome.softDelete');
            Route::post('/restore/{id}','AboutUsHomeController@restore')->name('aboutUsHome.restore');
            Route::post('/forceDelete/{id}','AboutUsHomeController@forceDelete')->name('aboutUsHome.forceDelete');
        });
        //==============================End  AboutUs Home============================

       //==============================Start About Us============================
       Route::namespace('Admin')->prefix('aboutUs')->group(function()
       {
           Route::get('/','AboutUsController@index')->name('aboutUs.index');
           Route::post('/store','AboutUsController@store')->name('aboutUs.store');
           Route::post('/update{id}','AboutUsController@update')->name('aboutUs.update');
           Route::delete('/destroy{id}','AboutUsController@destroy')->name('aboutUs.destroy');
           Route::get('/softDelete','AboutUsController@softDelete')->name('aboutUs.softDelete');
           Route::post('/restore/{id}','AboutUsController@restore')->name('aboutUs.restore');
           Route::post('/forceDelete/{id}','AboutUsController@forceDelete')->name('aboutUs.forceDelete');

       });
       //==============================End About Us============================
       //==============================Start Conatct Us============================
       Route::namespace('Admin')->prefix('contactUs')->group(function()
       {
           Route::get('/','ContactUsController@index')->name('contactUs.index');
           Route::post('/store','ContactUsController@store')->name('contactUs.store');
           Route::post('/update{id}','ContactUsController@update')->name('contactUs.update');
           Route::delete('/destroy{id}','ContactUsController@destroy')->name('contactUs.destroy');
           Route::get('/softDelete','ContactUsController@softDelete')->name('contactUs.softDelete');
           Route::post('/restore/{id}','ContactUsController@restore')->name('contactUs.restore');
           Route::post('/forceDelete/{id}','ContactUsController@forceDelete')->name('contactUs.forceDelete');

       });
       //==============================End Contact Us============================
    });


});
