<?php

$conexion = mysqli_connect("127.0.0.1:3306", "root", "", "proyecto_int");

if (isset($_POST["nombre_producto"]) && !empty($_POST["nombre_producto"]) &&
    isset($_POST["marca_producto"]) && !empty($_POST["marca_producto"]) &&
    isset($_POST["precio_producto"]) && !empty($_POST["precio_producto"]) &&
    isset($_POST["cantidad_producto"]) && !empty($_POST["cantidad_producto"]) &&
    isset($_POST["id_productos"]) && !empty($_POST["id_productos"])) {

$nombre_producto = $_POST["nombre_producto"];
$marca_producto = $_POST["marca_producto"];
$precio_producto = $_POST["precio_producto"];
$cantidad_producto = $_POST["cantidad_producto"];
$id_productos = $_POST["id_productos"];

$sql = "INSERT INTO productos (id_productos, nombre_producto, marca_producto, precio_producto, cantidad_producto)
VALUES ('$id_productos', '$nombre_producto', '$marca_producto', '$precio_producto', '$cantidad_producto')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro agregado correctamente"; 
} else {
    echo "Error al agregar registro";
}
}

mysqli_close($conexion);


?>