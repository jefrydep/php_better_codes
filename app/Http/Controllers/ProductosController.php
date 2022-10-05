<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return "bievenidos a la seccin de los productos";


    }
    public function create(){
        return "creando los productos";
    }
    public function show($id){
        return "mostrando los producto $id";
    }
}
