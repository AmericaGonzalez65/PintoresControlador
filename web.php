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

Route::get('/plantilla', [
    'uses'=>'ControladorChido@index',
    'as'=>'PlantillaChida'
]);

Route::get('/alexandreCabanel', [
    'uses'=>'ControladorChido@Alexandre',
    'as'=>'PlantillaDeAlexandre'
]);

Route::get('/henri', [
    'uses'=>'ControladorChido@Henri', 
    'as'=>'PlantillaDeHenri'
]);

Route::get('/jean', [
    'uses'=>'ControladorChido@Jean',
    'as'=>'PlantillaDeJean'
]);

Route::get('/pieter', [
    'uses'=>'ControladorChido@Pieter', 
    'as'=>'PlantillaDePeater'
]);

Route::get('/dali', [
    'uses'=>'ControladorChido@Dali',
    'as'=>'PlantillaDeDali'
]);

Route::get('/contacto', [
    'uses'=>'ControladorChido@Contacto',
    'as'=>'PlantillaDeContacto'
]);