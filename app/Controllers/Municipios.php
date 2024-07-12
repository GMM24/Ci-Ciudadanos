<?php
namespace App\Controllers;
use App\Models\MunicipiosModel;

class Municipios extends BaseController
{
    public function index(): string
    {   
        $municipio = new MunicipiosModel();
        $datos['datos']=$municipio->findAll();
        
        return view ('municipios',$datos);
    }
}
