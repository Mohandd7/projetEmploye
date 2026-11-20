<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;

Route::get('/editerEmploye/{id}', [EmployeController::class, 'editEmploye']);

Route::get('/ajouterEmploye', [EmployeController::class, 'addEmploye']);

Route::post('/validerEmploye', [EmployeController::class, 'validEmploye']);

Route::get('/listerEmployes', [EmployeController::class, 'listEmployes']);

Route::get('/', function () {
    return view('home');

});
