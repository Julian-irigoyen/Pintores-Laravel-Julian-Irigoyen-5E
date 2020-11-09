<?php
use App\Http\Controllers\EstructurasDeControl;

Route::get('/', [
    'uses' => 'EstructurasDeControl@login',
    'as' => 'login'
]);

Route::post('/validar', [
    'uses' => 'EstructurasDeControl@validar',
    'as' => 'validar'
]);

Route::get('/inicio', [
    'uses' => 'EstructurasDeControl@archivo',
    'as' => 'archivo'
]);

Route::get('/Salvador-Dali', [
    'uses' => 'EstructurasDeControl@Salvador',
    'as' => 'Salvador'
]);

Route::get('/Marco-Grassi', [
    'uses' => 'EstructurasDeControl@Marco',
    'as' => 'Marco'
]);

Route::get('/Vincent-Van-Gogh', [
    'uses' => 'EstructurasDeControl@Vincent',
    'as' => 'Vincent'
]);

Route::get('/Leonardo-da-Vinci', [
    'uses' => 'EstructurasDeControl@Leonardo',
    'as' => 'Leonardo'
]);

Route::get('/Miguel-Angel', [
    'uses' => 'EstructurasDeControl@Miguel',
    'as' => 'Miguel'
]);
