<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //SE CREO METODO PARA LA ADMINISTRACION DEL INDEX
    public function index(){
        return view('index');
    }
}
