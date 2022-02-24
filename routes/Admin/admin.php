<?php

use Illuminate\Support\Facades\Route;
//SE REALIZA LLAMADO AL CONTROLADOR PARA LA ADMINISTRACION
use App\Http\Controllers\Admin\HomeController;

//RUTA EN LA CUAl VA ESTA ALOJADO ADMIN Y SE REALIZRA EL LLAMADO AL CONTROLADOR
Route::get('admin', [HomeController::class, 'index']);