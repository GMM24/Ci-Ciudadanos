<?php

namespace App\Controllers;
// se le colca el mismo nombre del archivo
//utilizar el modelo
use App\Models\RegionesModel;

class Regiones extends BaseController
{
    public function index(): string
    {   //creando un objeto de tipo RegionesModel
        $region = new RegionesModel();
        $datos['datos']=$region->findAll();
        //print_r ($region->findAll());
        //este fiinAll hace un seleccion como en SQL(select * from regiones)
        //(este return pertenece al print_r para que muestre todas las busquedas en general)return view('regiones');
        return view ('regiones',$datos);
    }
}
