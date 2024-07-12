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
    <h1>Municipios</h1>
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Código de Municipio</th>
                <th>Nombre del Municipio </th>
                <th>Código de departamento</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $municipios):
                    
            ?>
            <tr>
                <td><?php echo $municipios['cod_muni'];?></td>
                <td><?php echo $municipios['nombre_municipio'];?></td>
                <td><?php echo $municipios['cod_depto'];?></td>
               
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