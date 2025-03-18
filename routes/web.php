<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use App\Events\EnviarNotificacao;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/notificacao', function () {

    event(new \App\Events\EnviarNotificacao());
    var_dump('Evento criado com sucesso!');
    //dd('Evento criado com sucesso!');

});
