<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/',function(){
    returnview('welcome');
});
Route::get('/',function(){
    returnredirect('welcome');
});
Route::get('say/{name?}',['as'=>'hello.index',function($name=
                                                       'Everybody'){
    return'Hello,'.$name;
}]);
Route::get('dashboard',function(){
    return'dashboard';
});
Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',function(){
        return'admindashboard';
    });
});
