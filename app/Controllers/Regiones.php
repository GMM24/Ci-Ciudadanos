<?php

namespace App\Controllers;
// se le colca el mismo nombre del archivo
//utilizar el modelo
use App\Models\RegionesModel;

class Regiones extends BaseController
{
    public function index(): string
    {   //creando un objeto de tipo RegionesModel
        $regiones = new RegionesModel();
        $datos['datos']=$regiones->findAll();
        //print_r ($region->findAll());
        //este fiinAll hace un seleccion como en SQL(select * from regiones)
        //(este return pertenece al print_r para que muestre todas las busquedas en general)return view('regiones');
        return view ('regiones',$datos);
    }
    public function nuevaRegion(): string
    {
        return view('regiones_nuevas');
    }
    public function agregarRegion()
    {
            $datos=[
                'cod_region'=> $this->request->getVar('txtCodRegion'),
                'nombre'=> $this->request->getVar('txtNombre'),
                'descripcion'=> $this->request->getVar('txtDescripcion'),
            ];
        $regiones = new RegionesModel();
        $regiones->insert($datos); 
        echo "Datos Guardados";
        return redirect()->route('ver_regiones');
    }
    public function eliminarRegion($dpi=null)
    {
        $regiones = new RegionesModel();
        $regiones->delete(['dpi'=>$dpi]);
        return redirect()->route('ver_regiones');
    }
}
