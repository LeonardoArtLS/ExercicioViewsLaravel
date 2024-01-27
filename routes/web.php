<?php

use Illuminate\Support\Facades\Route;

/*

//CRIE UM NOVO PROJETO PENSANDO EM UM E-COMMERCE
DEVERÁ TER AS PAGINAS

HOME
PRODUTOS
POLITICA DE PRIVACIDADE
PAINEL ADMIN
CONTATO */

Route::get('/', function () {
    return view('home');
});

Route::get('/produtos', function(){
    return view('produtos');
});

Route::view('/politica-de-privacidade', 'politicaPrivacidade');

Route::get('paineladmin', function(){
    return view('/admin/paineladmin');
});

Route::get('contato', function(){
    return view('contato');
});