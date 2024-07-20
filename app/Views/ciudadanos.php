<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>Ciudadanos</h1>
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
        <a href="nuevo_ciudadano" class="btn btn-primary">Nuevo Ciudadano</a>
            <tr>
                <th>Dpi</th>
                <th>Apellido y Nombre</th>
                <th>Dirección</th>
                <th>Teléfono de Casa</th>
                <th>Teléfono Movil</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Código Académico</th>
                <th>Código Municipio</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $ciudadanos):
                    
            ?>
            <tr>
                <td><?php echo $ciudadanos['dpi'];?></td>
                <td><?php echo $ciudadanos['apellido'].", ".$ciudadanos['nombre'];?></td>                <td><?php echo $ciudadanos['direccion'];?></td>
                <td><?php echo $ciudadanos['tel_casa'];?></td>
                <td><?php echo $ciudadanos['tel_movil'];?></td>
                <td><?php echo $ciudadanos['email'];?></td>
                <td><?php echo $ciudadanos['fechanac'];?></td>
                <td><?php echo $ciudadanos['cod_nivel_acad'];?></td>
                <td><?php echo $ciudadanos['cod_muni'];?></td>
                <td><a href="eliminar_ciudadano/<?php echo $ciudadanos['dpi']?>" class="btn btn-danger" >Eliminar</a></td>
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