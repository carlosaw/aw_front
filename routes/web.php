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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login', 'Auth\LoginController@index')->name('login');

Route::prefix('/addresses')->group(function(){
    Route::get('/', 'AddressesController@list')->name('addresses.list'); // Listagem de CLIENTES

    Route::get('add', 'AddressesController@add')->name('addresses.add'); // Tela de adição de CLIENTE
    Route::post('add', 'AddressesController@addAction'); // Ação de adição CLIENTE

    Route::get('edit/{id}', 'AddressesController@edit')->name('addresses.edit'); // Tela de edição
    Route::post('edit/{id}', 'AddressesController@editAction'); // Ação de edição

    Route::get('delete/{id}', 'AddressesController@del')->name('addresses.del'); // Ação de Deletar
});

Route::prefix('/clients')->group(function(){
    Route::get('/', 'ClientsController@list')->name('clients.list'); // Listagem de CLIENTES

    Route::get('add', 'ClientsController@add')->name('clients.add'); // Tela de adição de CLIENTE
    Route::post('add', 'ClientsController@addAction'); // Ação de adição CLIENTE

    Route::get('edit/{id}', 'ClientsController@edit')->name('clients.edit'); // Tela de edição
    Route::post('edit/{id}', 'ClientsController@editAction'); // Ação de edição

    Route::get('delete/{id}', 'ClientsController@del')->name('clients.del'); // Ação de Deletar
});

Route::prefix('/products')->group(function(){
    Route::get('/', 'ProductsController@list')->name('products.list'); // Listagem de CLIENTES

    Route::get('add', 'ProductsController@add')->name('products.add'); // Tela de adição de CLIENTE
    Route::post('add', 'ProductsController@addAction'); // Ação de adição CLIENTE

    Route::get('edit/{id}', 'ProductsController@edit')->name('products.edit'); // Tela de edição
    Route::post('edit/{id}', 'ProductsController@editAction'); // Ação de edição

    Route::get('delete/{id}', 'ProductsController@del')->name('products.del'); // Ação de Deletar
});

Route::prefix('/vehicles')->group(function(){
    Route::get('/', 'VehiclesController@list')->name('vehicles.list'); // Listagem de CLIENTES

    Route::get('add', 'VehiclesController@add')->name('vehicles.add'); // Tela de adição de CLIENTE
    Route::post('add', 'VehiclesController@addAction'); // Ação de adição CLIENTE

    Route::get('edit/{id}', 'VehiclesController@edit')->name('vehicles.edit'); // Tela de edição
    Route::post('edit/{id}', 'VehiclesController@editAction'); // Ação de edição

    Route::get('delete/{id}', 'VehiclesController@del')->name('vehicles.del'); // Ação de Deletar
});