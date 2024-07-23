<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                   Modificar Ciudadanos
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
        <form action="<?=base_url('modificar_ciudadano');?>" method="post">
            <div class="mb-3">
                <label for="txtDpi" class="form-label">Dpi</label>
                 <input type="number" class="form-control" id="txtDpi" name="txtDpi" placeholder="Ingrese DPI" value="<?=$datos['dpi'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                 <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Apellido" value="<?=$datos['apellido'];?>">
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese Nombre" value="<?=$datos['nombre'];?>">
            </div>
            <div class="mb-3">
                <label for="txtDireccion" class="form-label">Dirección</label>
                 <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Ingrese su DIrección" value="<?=$datos['direccion'];?>">
            </div>
            <div class="mb-3">
                <label for="txtTelCasa" class="form-label">Teléfono de Casa</label>
                 <input type="number" class="form-control" id="txtTelCasa" name="txtTelCasa" placeholder="Ingrese su Numero de telefono" value="<?=$datos['tel_casa'];?>">
            </div>
            <div class="mb-3">
                <label for="txtTelMovil" class="form-label">Teléfono Móvil</label>
                 <input type="number" class="form-control" id="txtTelMovil" name="txtTelMovil" placeholder="Ingrese Número de telefono" value="<?=$datos['tel_movil'];?>">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Correo Electrónico</label>
                 <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese su correo electronico" value="<?=$datos['email'];?>">
            </div>
            <div class="mb-3">
                <label for="txtFecha" class="form-label">Fecha de Nacimiento</label>
                 <input type="date" class="form-control" id="txtFecha" name="txtFecha" placeholder="Ingrese su Fecha de Nacimiento" value="<?=$datos['fechanac'];?>">
            </div>
            <div class="mb-3">
                <label for="txtNivelAcad" class="form-label">Nivel Académico</label>
                    <select class="form-select" id="txtNivelAcad" name="txtNivelAcad" value="<?=$datos['cod_nivel_acad'];?>">
                        <option selected>Selecciones su Nivel Académico</option>
                        <option value="0">Sin Estudios</option>
                        <option value="1">Primaria</option>
                        <option value="2">Básico</option>
                        <option value="4">Diversificado</option>
                        <option value="5">Técnico(a)</option>
                        <option value="6">Licenciado(a)</option>
                        <option value="7">Magister</option>
                        <option value="8">Doctorado</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="txtMuni" class="form-label">Códgio de Municipio</label>
                 <input type="number" class="form-control" id="txtMuni" name="txtMuni" placeholder="Ingrese su MUnicipio" value="<?=$datos['cod_muni'];?>">
            </div>
            <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar cambios</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>