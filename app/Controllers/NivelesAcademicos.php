<?php
namespace App\Controllers;
use App\Models\NivelesAcadModel;

class NivelesAcademicos extends BaseController
{
    public function index(): string
    {   
        $nivelacademico = new NivelesAcadModel();
        $datos['datos']=$nivelacademico->findAll();

        return view ('nivelesacademicos',$datos);
    }
    public function nuevoNivelAcademico(): string
    {
        return view('nivel_acad_nuevo');
    }
    public function agregarNivelAcademico()
    {
            $datos=[
                'cod_nivel_acad'=> $this->request->getVar('txtNivelAcad'),
                'nombre'=> $this->request->getVar('txtNombre'),
                'descripcion'=> $this->request->getVar('txtDescripcion'),
            ];
        $nivelacademico = new NivelesAcadModel();
        $nivelacademico->insert($datos); 
        echo "Datos Guardados";
        return redirect()->route('ver_nivelesacad');
    }
    public function eliminarNivelAcad($cod_nivel_acad=null)
    {
        $nivelacademico = new NivelesAcadModel();
        $nivelacademico->delete(['cod_nivel_acad'=>$cod_nivel_acad]);
        return redirect()->route('ver_nivelesacad');
    }
    public function actualizarNivelAcad($id = null)
    {
        $nivelacademico = new NivelesAcadModel();
        $datos['datos']=$nivelacademico->where('cod_nivel_acad',$id)->first();
        return view('editar_nivel_acad',$datos);    
    }
    

}
