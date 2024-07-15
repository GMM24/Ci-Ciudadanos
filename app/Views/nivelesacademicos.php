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
    <h1>Niveles Academicos</h1>
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Código Academico</th>
                <th>Nombre </th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $nivelesacademicos):
                    
            ?>
            <tr>
                <td><?php echo $nivelesacademicos['cod_nivel_acad'];?></td>
                <td><?php echo $nivelesacademicos['nombre'];?></td>
                <td><?php echo $nivelesacademicos['descripcion'];?></td>
               
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