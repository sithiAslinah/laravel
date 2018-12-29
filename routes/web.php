<?php

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
Route::get('/adminsite', function () {
    return view('adminsite');
});
Route::get('/notification', function () {
    return view('notification');
});

Route::get('/nav', function () {
    return view('nav');
});



Route::get('/myAcc', function () {
    return view('myAcc');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/myaccedit', function () {
    return view('myaccedit');
});
Route::get('purchase', function () {
    return view('purchase');
});
Route::get('oppo', function () {
    return view('oppo');
});
Route::get('usermain', function () {
    return view('usermain');
});
Route::get('users1','FormController@show');
Auth::routes();
Route::get('/userhome', 'HomeController@index')->name('userhome');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::post('str','adminController@str');
Route::post('shw','adminController@shw');
Route::get('/dashboard','MainController@dashboard');
Route::get('/userboard','MainController@userboard');
Route::get('/out','MainController@out')->name('out');
Route::get('/memdetail','updateController@show');
Route::get('edit/{id}','updateController@edit')->name('edit');
Route::post('edit/{id}','updateController@adminupdate');
Route::get('/delete/{id}','updateController@destroy');
Route::get('promotion','promotioncontroller@index');
Route::post('saved','promotioncontroller@saved');
Route::get('userhome','promotionController@show');
Route::get('affiliate','affiliateController@index');
Route::post('store','affiliateController@store');
Route::get('findAf','affiliateController@show')->name('findAf');
Route::get('notication','notificationController@index');
Route::post('store','notificationController@store');
Route::get('form','FormController@create');
Route::post('form','FormController@store');
Route::get('myAcc/{id}','userupdateController@index');
Route::post('update','userupdateController@update');
Route::get('usernotify','notificationController@show');
Route::get('payments','purchaseController@index');
Route::post('payments','purchaseController@insert');
Route::get('myaccedit','purchaseController@show');
Route::get('active','cashtranferController@show');
Route::get('adminview','userController@show');
Route::get('adminedit/{id}','userController@edit')->name('adminedit');
Route::post('adminedit/{id}','userController@adminedit');
Route::get('/erase/{id}','userController@dest');
Route::get('promotionview','promotionController@promo');
Route::get('promoedit/{id}','promotionController@promoedit')->name('promoedit');
Route::post('promoedit/{id}','promotionController@promoupdate');
Route::get('/promodel/{id}','promotionController@promodel');