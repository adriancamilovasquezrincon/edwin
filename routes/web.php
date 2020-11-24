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
//Socios
Route::get('/api/Socios','SociosController@index');
Route::post('/api/Socios/guardar','SociosController@store')->name('guardar');
Route::put('/api/Socios/actualizar','SociosController@update')->name('actualizar');
Route::delete('/api/Socios/eliminar','SociosController@destroy')->name('eliminar');
//Cantantes
Route::get('/api/Cantantes','CantantesController@index');
Route::post('/api/Cantantes/guardar','CantantesController@store')->name('guardar');
Route::put('/api/Cantantes/actualizar','CantantesController@update')->name('actualizar');
Route::delete('/api/Cantantes/eliminar','CantantesController@destroy')->name('eliminar');
//Maestros
Route::get('/api/Maestros','MaestrosController@index');
Route::post('/api/Maestros/guardar','MaestrosController@store')->name('guardar');
Route::put('/api/Maestros/actualizar','MaestrosController@update')->name('actualizar');
Route::delete('/api/Maestros/eliminar','MaestrosController@destroy')->name('eliminar');
//Estudiantes
Route::get('/api/Estudiantes','EstudiantesController@index');
Route::post('/api/Estudiantes/guardar','EstudiantesController@store')->name('guardar');
Route::put('/api/Estudiantes/actualizar','EstudiantesController@update')->name('actualizar');
Route::delete('/api/Estudiantes/eliminar','EstudiantesController@destroy')->name('eliminar');
//Profesores
Route::get('/api/Profesores','ProfesoresController@index');
Route::post('/api/Profesores/guardar','ProfesoresController@store')->name('guardar');
Route::put('/api/Profesores/actualizar','ProfesoresController@update')->name('actualizar');
Route::delete('/api/Profesores/eliminar','ProfesoresController@destroy')->name('eliminar');
//Interpretes
Route::get('/api/Interpretes','InterpretesController@index');
Route::post('/api/Interpretes/guardar','InterpretesController@store')->name('guardar');
Route::put('/api/Interpretes/actualizar','InterpretesController@update')->name('actualizar');
Route::delete('/api/Interpretes/eliminar','InterpretesController@destroy')->name('eliminar');
//Universitarios
Route::get('/api/Universitarios','UniversitariosController@index');
Route::post('/api/Universitarios/guardar','UniversitariosController@store')->name('guardar');
Route::put('/api/Universitarios/actualizar','UniversitariosController@update')->name('actualizar');
Route::delete('/api/Universitarios/eliminar','UniversitariosController@destroy')->name('eliminar');
//Aprendices
Route::get('/api/Aprendices','AprendicesController@index');
Route::post('/api/Aprendices/guardar','AprendicesController@store')->name('guardar');
Route::put('/api/Aprendices/actualizar','AprendicesController@update')->name('actualizar');
Route::delete('/api/Aprendices/eliminar','AprendicesController@destroy')->name('eliminar');
