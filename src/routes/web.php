<?php

use Illuminate\Http\Request;
$namespace = "Lameck\Dracula\Server\Http\Controllers";

Route::group(['namespace'=>$namespace,'prefix'=>'dracula','middleware' => 'web'],  

function(){

    Route::group(['middleware' => 'auth'],  
    function(){
       
        /**LIST */
        Route::get('/server/list','DraculaServerController@getServerList')->name('dracula.server.list');
        /**PUT */
        Route::get('/server/{id}','DraculaServerController@getServer')->name('dracula.server.get');
        Route::put('/server/{id}','DraculaServerController@putServer')->name('dracula.server.put');
        /**POST */
        Route::get('/server-create','DraculaServerController@getServerCreate')->name('dracula.server.getcreate');
        Route::post('/server-create','DraculaServerController@postServerCreate')->name('dracula.server.postcreate');
        /**DEL */
        Route::get('/server/del/{id}','DraculaServerController@delServer')->name('dracula.server.del');

    });

    

});