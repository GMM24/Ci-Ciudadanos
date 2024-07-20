<?php
namespace App\Controllers;
use App\Models\DepartamentosModel;

class Departamentos extends BaseController
{
    public function index(): string
    {   
        $departamentos = new DepartamentosModel();
        $datos['datos']=$departamentos->findAll();
        
        return view ('departamentos',$datos);
    }
    public function nuevoDepartamento(): string
    {
        return view('departamentos_nuevos');
    }
    public function agregarDepartamento()
    {
        $datos=[
            'cod_depto'=> $this->request->getVar('txtCodDepto'),
            'nombre_depto'=> $this->request->getVar('txtNombreDepto'),
            'cod_region'=> $this->request->getVar('txtCodRegion')
        
        ]; 

        $departamentos = new DepartamentosModel();
        $departamentos->insert($datos); 
        echo "Datos Guardados";
        return redirect()->route('ver_departamentos');
    }  
    public function eliminarDepartamento($cod_depto=null)
    {
        $departamentos = new DepartamentosModel();
        $departamentos->delete(['cod_depto'=>$cod_depto]);
        return redirect()->route('ver_departamentos');
    }
    
}
