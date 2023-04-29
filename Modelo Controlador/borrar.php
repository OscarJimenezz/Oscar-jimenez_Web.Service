<?php

include("../modelos/db_modelo.php");
$conexion = conectar();

$id_usuario = $_GET['id'];

$sql = "DELETE FROM usuarios WHERE id_usuario='$id_usuario'";
$resultado = mysqli_query($conexion, $sql);

if($resultado){
    header("Location: ../vistas/inicio.php");
}
?>