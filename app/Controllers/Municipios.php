<?php
namespace App\Controllers;
use App\Models\MunicipiosModel;

class Municipios extends BaseController
{
    public function index(): string
    {   
        $municipios = new MunicipiosModel();
        $datos['datos']=$municipios->findAll();
        
        return view ('municipios',$datos);
    }
    public function nuevoMunicipio(): string
    {
        return view('municipios_nuevos');
    }
    public function agregarMunicipio()
    {
            $datos=[
                'cod_muni'=> $this->request->getVar('txtCodMuni'),
                'nombre_municipio'=> $this->request->getVar('txtNombreMuni'),
                'cod_depto'=> $this->request->getVar('txtDepto')
            ];
        $municipios = new MunicipiosModel();
        $municipios->insert($datos); 
        echo "Datos Guardados";
        return redirect()->route('ver_municipios');
    }
    public function eliminarMunicipio($cod_muni=null)
    {
        $municipios = new MunicipiosModel();
        $municipios->delete(['cod_muni'=>$cod_muni]);
        return redirect()->route('ver_municipios');
    }

}
