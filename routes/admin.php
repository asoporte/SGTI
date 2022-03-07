<?php


use Illuminate\Support\Facades\Route;
//SE REALIZA LLAMADO AL CONTROLADOR PARA LA ADMINISTRACION
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActaController;

//RUTA EN LA CUAL VA ESTA ALOJADO ADMIN Y SE REALIZRA EL LLAMADO AL CONTROLADOR
Route::get('admin', [HomeController::class, 'index'])->name('index');
//EL CONTROLADOR FUE CREADO RESOURCE POR ENDE PODEMOS UTILIZAR, EL ENRUTAMIENTO RESOURCE MUESTRA TODAS LAS FUNCIONES
Route::resource('admin/actas', ActaController::class)->names('actas');