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
    return view('/index');
});
Route::get('/inicioSesionSecretaria', function () {
    return view('/inicioSesionSecretaria');
});
Route::get('/inicioSesionEncargado', function () {
    return view('/inicioSesionEncargado');
});
Route::get('/inicioSesionAsesor', function () {
    return view('/inicioSesionAsesor');
});
Route::get('/inicioSesionTutor', function () {
    return view('/inicioSesionTutor');
});
Route::get('/inicioSesionAlumnos', function () {
    return view('/inicioSesionAlumnos');
});
Route::get('/MenuAlumno', function () {
    return view('/MenuAlumno');
});
Route::get('/llenarSolicitud', function () {
    return view('/llenarSolicitud');
});