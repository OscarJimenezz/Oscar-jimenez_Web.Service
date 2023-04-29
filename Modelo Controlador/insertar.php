<?php

include("../modelos/db_modelo.php");
$conexion = conectar();

$id_usuario = $_POST['id'];
$nombre_usuario = $_POST['nombre'];
$apellido_usuario = $_POST['apellido'];
$correo_usuario = $_POST['correo'];
$telefono_usuario = $_POST['telefono'];
$edad_usuario = $_POST['edad'];
$ciudad_usuario = $_POST['ciudad'];
$pais_usuario = $_POST['pais'];
$genero_usuario = $_POST['genero'];
$fecha_nacimiento_usuario = $_POST['fecha_nacimiento'];

$sql = "INSERT INTO usuarios (id_usuario, nombre_usuario, apellido_usuario, correo_usuario, telefono_usuario, edad_usuario, ciudad_usuario, pais_usuario, genero_usuario, fecha_nacimiento_usuario) 
VALUES ('$id_usuario', '$nombre_usuario', '$apellido_usuario', '$correo_usuario', '$telefono_usuario', '$edad_usuario', '$ciudad_usuario', '$pais_usuario', '$genero_usuario', '$fecha_nacimiento_usuario')";
$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header("Location: ../vistas/inicio.php");
} else {
    echo "Error al agregar usuario a la base de datos.";
}
?>
