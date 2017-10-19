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

    Route::get('usuarios/{usuario}', function($usuario){
    	echo "Bem Vindo, {$usuario}";

    });

    Route::get('blog/{blogerikamara}', function($erikaweverton){
    	echo "Bem Vindo, {$erikaweverton}";
    });

    Route::get('administrativo/{admin}', function($administracao){
    	echo "Bem Vindo, {$administracao}";
    });

    Route::get('list/{listausuarios}', function($tabela){
    	echo "Bem Vindo, {$tabela}";
    	echo "<table>
    	<tr>
    	<td> maria</td>
    	<tr>
    	<td> jose</td>
    	<tr>
    	<td> pedro</td>
    	</tr>

    	</table>";

    });





