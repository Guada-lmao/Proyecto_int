<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos_Administración</title>
    <link href="./tabla_productos.css" rel="stylesheet">
</head>
<body>
    <div id="main-container">
    <table class="table">
    <a class="agregar" href="./agregar/f_agregar_productos.php">Agregar Productos</a>
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Total</th>
            <th scope="col">x</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_int");

            $query = "SELECT * FROM productos";
            $resultado= mysqli_query($conexion, $query);
            while($unaFila = mysqli_fetch_assoc($resultado)){
                echo '<tr> 
        <th scope="row">'.$unaFila["id_productos"].'</th> 
        <td>'.$unaFila["nombre_producto"].'</td> 
        <td>'.$unaFila["precio_producto"].'</td> 
        <td>'.$unaFila["cantidad_producto"].'</td> 
        <td></td>
        <td><a href="./eliminar_producto.php?id='.$unaFila["id_productos"].'">x</a></td>   
        </tr>';
            }

            mysqli_close($conexion);

            ?>
            
        </tbody>
        </table>
    </div>
</body>
</html>