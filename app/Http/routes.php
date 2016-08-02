<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','ProdutosController@index');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@logout');

Route::controllers([
	'auth' => 'Auth\AuthController',
 	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=> 'produto'], function() {
	Route::get('/','ProdutosController@index');

	//rota para o formulário do produto
	Route::get('create','ProdutosController@create');
	//rota para salvar o produto
	Route::post('createPost','ProdutosController@createPost');

	//rota para editar o produto
	Route::get('edit/{id}','ProdutosController@edit');
	Route::put('update/{id}','ProdutosController@update');

	//rota para apagar o produto
	Route::delete('delete/{id}','ProdutosController@delete');

	//rota para exibir o produto
	Route::get('show/{id}','ProdutosController@show');

	Route::get('descricao/{id}','ProdutosController@descricao');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::get('profile/{user}', function(User $user) {
    return $user;
});
