<?php

use App\Http\Controllers\EmpleadoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/empleados', function () {
//     return view('empleados.index');
// });

// // direccionamos a la clase EmpleadoController y a su funcion create
// Route::get('empleados/create', [EmpleadoController::class, 'create']);

Route::resource('empleados', EmpleadoController::class)->middleware('auth');

Auth::routes(['register' => false, 'reset' => false]); 

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

// Cuando el usuario se loguee busca controlador y busca la clase index para ejecutarla

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [EmpleadoController::class, 'index'])->name('home');
});

Route::get('/', function () {
    return view('auth.login');
});
