<?php
namespace App\Controllers;
use App\Models\DepartamentosModel;

class Departamentos extends BaseController
{
    public function index(): string
    {   
        $departamento = new DepartamentosModel();
        $datos['datos']=$departamento->findAll();
        
        return view ('departamentos',$datos);
    }
}
