<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <h1>Departamentos</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url ('/');?>">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ci Ciudadanos
                </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_ciudadanos');?>">Ciudadanos</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_departamentos');?>">Departamentos</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_municipios');?>">Municipios</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_nivelesacad');?>">Niveles Academicos</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_regiones');?>">Regiones</a></li>
                  </ul>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    <table class="table table-border table-striped">
        <thead>
        <a href="nuevo_departamento" class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Nuevo Departamento</a>
            <tr>
                <th>Código Departamento</th>
                <th>Nombre Departamento</th>
                <th>Código de Región</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $departamentos):
                    
            ?>
            <tr>
                <td><?php echo $departamentos['cod_depto'];?></td>
                <td><?php echo $departamentos['nombre_depto'];?></td>
                <td><?php echo $departamentos['cod_region'];?></td>
                
                <td><a href="<?=base_url('buscar_departamento/').$departamentos['cod_depto']?>" class="btn btn-info" ><i class="bi bi-pencil-fill"></i> Editar</a></td>
                <td><a href="<?=base_url('eliminar_departamento/').$departamentos['cod_depto']?>" class="btn btn-danger" ><i class="bi bi-x-circle-fill"></i> Eliminar</a></td>

            </tr>
            <?php 
                endforeach;
            ?>
        </tbody>
    </table>
   </div> 



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>