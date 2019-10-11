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

// Route::get('/', function () {
//--- MOSTRANDO JSON DE CATEGORIAS
// return App\Category::all();
//--- MOSTRANDO JSON DE Productos
// return App\Product::all();

// });

    // Route::get('/', 'StoreController@index');
    Route::get('/',[
        'as'    =>'home',
        'uses'  =>'StoreController@index'
    ]);

    //para mostrar los detalles del productos (hasta horita solo atiende peticiones)
    Route::get('product/{slug}',[
        'as'   =>'product-detail',
        'uses' =>'StoreController@Show'
    ]);

