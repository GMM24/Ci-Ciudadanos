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

        <form action="agregar_cliente" method="post">
            <div class="mb-3">
                <label for="txtDpi" class="form-label">Dpi</label>
                 <input type="text" class="form-control" id="txtDpi" name="txtDpi" placeholder="Ingrese DPIss">
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Apellido</label>
                 <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Apellido">
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Nombre</label>
                 <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Nombre">
            </div>
            <div class="mb-3">
                <label for="txtCorreo" class="form-label">Dirección</label>
                 <input type="text" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingrese su DIrección">
            </div>
            <div class="mb-3">
                <label for="txtCalleAvenida" class="form-label">Teléfono de Casa</label>
                 <input type="text" class="form-control" id="txtCalleAvenida" name="txtCalleAvenida" placeholder="Ingrese su Numero de telefono">
            </div>
            <div class="mb-3">
                <label for="txtNoCasa" class="form-label">Teléfono Móvil</label>
                 <input type="number" class="form-control" id="txtNoCasa" name="txtNoCasa" placeholder="Ingrese Número de telefono">
            </div>
            <div class="mb-3">
                <label for="txtZona" class="form-label">Correo Electrónico</label>
                 <input type="number" class="form-control" id="txtZona" name="txtZona" placeholder="Ingrese su correo electronico">
            </div>
            <div class="mb-3">
                <label for="txtZona" class="form-label">Fecha de Nacimiento</label>
                 <input type="number" class="form-control" id="txtZona" name="txtZona" placeholder="Ingrese su Fecha de Nacimiento">
            </div>
            <div class="mb-3">
                <label for="txtZona" class="form-label">Nivel Académico</label>
                 <input type="number" class="form-control" id="txtZona" name="txtZona" placeholder="Ingrese codigo nivel academico">
            </div>
            <div class="mb-3">
                <label for="txtZona" class="form-label">Códgio de Municipio</label>
                 <input type="number" class="form-control" id="txtZona" name="txtZona" placeholder="Ingrese su MUnicipio">
            </div>
            
            <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Enviar</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>