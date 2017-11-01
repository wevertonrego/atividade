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

    Route::get('valores/{vlr}/{vlr2}/{vlr3}/{vlr4}/{vlr5}', function($n1,$n2,$n3,$n4,$n5){
        $nota= ($n1+$n2+$n3+$n4+$n5)/5;
        echo "Sua media é: {$nota}";
  

    });

    Route::get('/nome/{nome1}/{nome2}', function($nome1, $nome2){
        if($nome1==$nome2){
            echo'os nomes são iguais';
        }else{
            echo"os nomes sao diferentes";
        }
    });

    route::get('nomes/{nome1}/{nome2}/{nome3}', function($nome1,$nome2,$nome3){
          
            return view('nomes', compact('nome1', 'nome2', 'nome3')) ;
    });







