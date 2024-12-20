<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/proyecto/agregar/agregar.css">
</head>
<body>

<form class="formulario" action="./agregar_productos.php" method="post">
    <label>Id:</label><input type="text" id="id_productos" name="id_productos" autocomplete="off">
    <br>
    <label>Nombre:</label><input type="text" id="nombre_producto" name="nombre_producto" autocomplete="off">
    <br>
    <label>Precio:</label><input type="text" id="precio_producto" name="precio_producto" autocomplete="off">
    <br>
    <label>Cantidad:</label><input type="text" id="cantidad_producto" name="cantidad_producto" autocomplete="off">
    <br>
    <label>Marca:</label><input type="text" id="marca_producto" name="marca_producto" autocomplete="off">
    <br>
    <button>Agregar</button><a href="/proyecto/tabla_productos.php">Volver</a>
</form>


</body>
</html>
