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

Route::group(['namespace'=>'Form'],function (){
    /**
     *VERB GET
     **/

    Route::get('usuarios','TestController@listAllUsers')->name('users.listAll');
    Route::get('usuarios/novo','TestController@FormAddUser')->name('users.formAddUser');
    Route::get('usuarios/editar/{user}','TestController@FormEditUser')->name('users.formEditUser');
    Route::get('usuarios/{user}','TestController@listUser')->name('users.list');

    /**
     *VERB POST
     **/
    Route::post('usuarios/store','TestController@storeUser')->name('users.store');
    /**
     *VERB PUT/PATCH
     **/
    Route::put('usuarios/edit/{user}','TestController@edit')->name('users.edit');
    /**
     *VERB DELETE
     **/
    Route::delete('usuarios/destroy/{user}','TestController@destroy')->name('users.destroy');
});
