<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    echo "Principal";
});
Route::get('/sobre-nos', function () {
    echo "Sobre-nos";
});
Route::get('/contato', function () {
    echo "Contato";
});
Route::get('/login', function () {
    echo "Login";
});
Route::get('/clientes', function () {
    echo "Clientes";
});
Route::get('/fornecedores', function () {
    echo "Fonecedores";
});
Route::get('/produtos', function () {
    echo "Produtores";
});
