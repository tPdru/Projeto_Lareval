<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Contollers\PrincipalController::class,'principal']);

Route::get('/sobre-nos', [\App\Htpp\Controllers\SobreNosController::class,'sobreNos']);

Route::get('/contato',[\App\Http\Controllers\ContatoController::class,'contato']);

Route::get('/login', [\App\Http\Controllers\LoginController::class,'login']);

Route::get('/clientes', function () {
    echo "Clientes";
});

Route::get('/fornecedores', function () {
    echo "Fonecedores";
});
Route::get('/produtos', function () {
    echo "Produtores";
});
