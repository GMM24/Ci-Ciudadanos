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
        <h1>Nivel Academico</h1>

        <form action="agregar_nivel_acad" method="post">
            <div class="mb-3">
                <label for="txtDpi" class="form-label">Código Academico</label>
                <select class="form-select" id="txtNivelAcad" name="txtNivelAcad">
                        <option selected>Selecciones su Código Académico</option>
                        <option value="0">Sin Estudios</option>
                        <option value="1">Primaria</option>
                        <option value="2">Básico</option>
                        <option value="4">Diversificado</option>
                        <option value="5">Técnico(a)</option>
                        <option value="6">Licenciado(a)</option>
                        <option value="7">Mahgister</option>
                        <option value="8">Doctorado</option>
                    </select>
            </div>
            <div class="mb-3">
                <label for="txtApellido" class="form-label">Nombre</label>
                 <input type="text" class="form-control" id="txtApellido" name="txtApellido" placeholder="Ingrese Apellido">
            </div>
            <div class="mb-3">
                <label for="txtNivelAcad" class="form-label">Nivel Académico</label>
                    <select class="form-select" id="txtNivelAcad" name="txtNivelAcad">
                        <option selected>Selecciones su Nivel Académico</option>
                        <option value="0">Sin Estudios</option>
                        <option value="1">Primaria</option>
                        <option value="2">Básico</option>
                        <option value="4">Diversificado</option>
                        <option value="5">Técnico(a)</option>
                        <option value="6">Licenciado(a)</option>
                        <option value="7">Mahgister</option>
                        <option value="8">Doctorado</option>
                    </select>
            </div>
            <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Enviar</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>