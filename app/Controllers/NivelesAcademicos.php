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
}
