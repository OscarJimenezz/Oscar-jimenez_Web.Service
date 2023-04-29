<?php 
    require_once '../modelos/base_modelo.php';
    $con=conectar();

    $sql="SELECT *  FROM usuarios";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container mt-5">
            <h1 align='center'>EMPRESAS UNIDAD SAS</h1>
            <div class="row"> 
                <div class="col-md-3">
                    <h1>REGISTRATE EN EL DIRECTORIO</h1>
                    <form action="../controlador/insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="id" placeholder="id">
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="correo" placeholder="Correo">
                        <input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono">
                        <input type="text" class="form-control mb-3" name="edad" placeholder="Edad">
                        <input type="text" class="form-control mb-3" name="pais" placeholder="País">
                        <input type="text" class="form-control mb-3" name="ciudad" placeholder="Ciudad">
                        <input type="text" class="form-control mb-3" name="genero" placeholder="Género">
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>

                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>CORREO</th>
                                <th>TELÉFONO</th>
                                <th>EDAD</th>
                                <th>PAÍS</th>
                                <th>CIUDAD</th>
                                <th>GÉNERO</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <td><?php  echo $row['id']?></td>
                                    <td><?php  echo $row['nombre']?></td>
                                    <td><?php  echo $row['correo']?></td>
                                    <td><?php  echo $row['telefono']?></td>
                                    <td><?php  echo $row['edad']?></td>
                                    <td><?php  echo $row['pais']?></td>
                                    <td><?php  echo $row['genero']?></td>
                                    <td><?php  echo $row['ciudad']?></td>
<td><?php  echo $row['genero']?></td>
<td><a href="../controlador/delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></td> 
</tr>
<?php 
    }
?>
   




