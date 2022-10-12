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

//Route::get('/test2', function () {
 //   return view('test2');
//});
Route::get('/test2', 'Test2Controller@udemy');

Route::get('/uooo12', 'TestController@uooo12');

Route::get('tests/test', 'TestController@index');

Route::get('tests/test132', 'TestController@test2');

Route::get('contact/index','ContactFormController@index');


//LOGIN認証・・・, 'middleware' => 'auth'
Route::group(['prefix' => 'contact'], function(){
    Route::get('index','ContactFormController@index')->name('contact.index'); 
    Route::get('create','ContactFormController@create')->name('contact.create'); 
    Route::post('store','ContactFormController@store')->name('contact.store'); 
    Route::get('show/{id}','ContactFormController@show')->name('contact.show'); 
});

//contact3 ver
Route::group(['prefix' => 'contact3'], function(){
    Route::get('index','ContactFormController3@index')->name('contact3.index'); 
    Route::get('create','ContactFormController3@create')->name('contact3.create'); 
    Route::post('store','ContactFormController3@store')->name('contact3.store');
    Route::get('show/{id}','ContactFormController3@show')->name('contact3.show');
    Route::get('edit/{id}', 'ContactFormController3@edit')->name('contact3.edit'); 
    Route::post('update/{id}', 'ContactFormController3@update')->name('contact3.update'); 
    Route::post('destroy/{id}', 'ContactFormController3@destroy')->name('contact3.destroy'); 

    //表示される人のIDで判断したいから、show/{id}になる。
    Route::get('show/{id}','ContactFormController3@show')->name('contact3.show'); 
});

Route::resource('contact3s', 'ContactFormController')->only([
    'index', 'show'
]);

//Sunbreak
Route::group(['prefix' => 'sunbreak'], function(){
    Route::get('index','SunBreakController@index')->name('sunbreak.index'); 
    Route::get('create','SunBreakController@create')->name('sunbreak.create'); 
    Route::post('store','SunBreakController@store')->name('sunbreak.store');
    Route::get('show/{id}','SunBreakController@show')->name('sunbreak.show');
    Route::get('index2','SunBreakController@index2')->name('sunbreak.index2');
    Route::get('edit/{id}', 'SunBreakController@edit')->name('sunbreak.edit'); 
    Route::post('update/{id}', 'SunBreakController@update')->name('sunbreak.update'); 
    Route::post('destroy/{id}', 'SunBreakController@destroy')->name('sunbreak.destroy');
    Route::get('test','SunBreakController@test')->name('sunbreak.test'); 
    Route::post('mypage','SunBreakController@mypage')->name('sunbreak.mypage'); 
    
    

    //表示される人のIDで判断したいから、show/{id}になる。
    //Route::get('show/{id}','SunBreakController@show')->name('sunbreak.show'); 
});


Auth::routes();

Route::get('/home', 'SunBreakController@index')->name('sunbreak.index');

Route::post('/api/comment', 'CommentController@store')->name('comment.store');
