<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
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
