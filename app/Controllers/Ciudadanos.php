<?php
namespace App\Controllers;
use App\Models\CiudadanosModel;

class Ciudadanos extends BaseController
{
   
    public function index(): string
    {   
        $ciudadanos = new CiudadanosModel();
        $datos['datos']=$ciudadanos->findAll();
        
        return view ('ciudadanos',$datos);
    }
    public function nuevoCiudadano(): string
    {
        return view('ciudadano_nuevo');
    }
    public function agregarCiudadano()
    {
            $datos=[
                'dpi'=> $this->request->getVar('txtDpi'),
                'apellido'=> $this->request->getVar('txtApellido'),
                'nombre'=> $this->request->getVar('txtNombre'),
                'direccion'=> $this->request->getVar('txtDireccion'),
                'tel_casa'=> $this->request->getVar('txtTelCasa'),
                'tel_movil'=> $this->request->getVar('txtTelMovil'),
                'email'=> $this->request->getVar('txtCorreo'),
                'fechanac'=> $this->request->getVar('txtFecha'),
                'cod_nivel_acad'=> $this->request->getVar('txtNivelAcad'),
                'cod_muni'=> $this->request->getVar('txtMuni')
            ];
       /* $this->model->modificarCiudadano($dpi,$datos);*/
        $ciudadanos = new CiudadanosModel();
        $ciudadanos->insert($datos); 
        echo "Datos Guardados";
        return redirect()->route('ver_ciudadanos');
    }
    public function eliminarCiudadano($dpi=null)
    {
        $ciudadanos = new CiudadanosModel();
        $ciudadanos->delete(['dpi'=>$dpi]);
        return redirect()->route('ver_ciudadanos');
    }
    public function buscarCiudadano($id = null)
    {
        
        $ciudadanos = new CiudadanosModel();
        $datos['datos']=$ciudadanos->where('dpi',$id)->first();
        
        return view('editar_ciudadano',$datos);    
    }
    public function modificarCiudadano()
    {
        $datos= [
            'dpi'=>$this->request->getVar('txtDpi'),
            'apellido'=>$this->request->getVar('txtApellido'),
            'nombre'=> $this->request->getVar('txtNombre'),
            'direccion'=> $this->request->getVar('txtDireccion'),
            'tel_casa'=> $this->request->getVar('txtTelCasa'),
            'tel_movil'=> $this->request->getVar('txtTelMovil'),
            'email'=> $this->request->getVar('txtCorreo'),
            'fechanac'=> $this->request->getVar('txtFecha'),
            'cod_nivel_acad'=> $this->request->getVar('txtNivelAcad'),
            'cod_muni'=> $this->request->getVar('txtMuni')
        ];
        
        $ciudadanos = new CiudadanosModel();
        $ciudadanos->update($datos['dpi'],$datos);
        return redirect()->route('ver_ciudadanos');

    }

}
