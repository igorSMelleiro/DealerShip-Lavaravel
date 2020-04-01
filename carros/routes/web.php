<?php

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
route::get('/', function(){
    return 'Hello world';
});
*/

route::get('/admin/carros',['as' => 'admin.carros','uses' => 'Admin\CarroController@index']);

route::get('/admin/carros/adicionar', ['as' => 'admin.carros.adicionar', 'uses' => 'Admin\CarroController@adicionar']); 

route::post('/admin/carros/salvar',['as' => 'admin.carros.salvar', 'uses' => 'Admin\CarroController@salvar']);
