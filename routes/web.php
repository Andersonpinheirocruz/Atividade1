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

Route::get('/usuarios/{usuario}', function ($usuario) {
    echo "Bem Vindo, {$usuario}";
});

Route::get('/blog/', function () {
    echo "blog";
});

Route::get('/administrativo/', function () {
    echo "Administrativo";
});

Route::get('/usuarios/{usuario}', function ($usuario) {
    echo "Bem Vindo, {$usuario}";
});
/*Crie uma rota para listar os usuarios "jose,maria,pedro,joao" em uma tabela html*/
Route::get('/usuarios/{usuario1}/{usuario2}/{usuario3}/{usuario4}', function ($usuario1, $usuario2, $usuario3, $usuario4) {
    echo "<table border='1px'><tr><td>Lista de Usuarios:</tr></td>
    	 <tr><td>{$usuario1}</tr></td>
    	 <tr><td>{$usuario2}</tr></td>
    	 <tr><td>{$usuario3}</tr></td>
    	 <tr><td>{$usuario4}</table></tr></td>";
});
/*Crie uma rota que leia 5 parametros e tire a media dos valores*/
Route::get('/usuarios/{parametro1}/{parametro2}/{parametro3}/{parametro4}/{parametro5}', function ($parametro1,$parametro2,$parametro3,$parametro4,$parametro5) {
    echo "Parâmetros: {$parametro1},{$parametro2},{$parametro3},{$parametro4},{$parametro5}";
    $media =($parametro1 + $parametro2+ $parametro3+ $parametro4+ $parametro5)/5;
    echo "<br>MÉDIA: $media";
});


Route::get('/usuarios/{nome1}/{nome2}', function ($nome1,$nome2) {
    echo "{$nome1}, {$nome2}";
    if ($nome1 == $nome2) {
    	echo "<br>Os Nomes iguais";
    }
});

Route::get('/v', function () {
    return view('nome', ['name' => 'Anderson Cruz', 'name2' => 'Anderson Cruz']);
});


Route::get('/sm/{val1}/{val2}', function ($val1, $val2) {
    return view('soma', ['val1' => $val1, 'val2' => $val2]);

});
