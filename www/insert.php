<?php

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$carrera = $_POST["carrera"];
$matricula = $_POST["matricula"];
$grupo = $_POST["grupo"];
$semestre = $_POST["semestre"];
$proyecto_personal = $_POST["proyecto-personal"];
$fort1 = $_POST["fort1"];
$fort2 = $_POST["fort2"];
$fort3 = $_POST["fort3"];
$debi1 = $_POST["debi1"];
$debi2 = $_POST["debi2"];
$debi3 = $_POST["debi3"];
$decidir = $_POST["decidir"];
$descripcion = $_POST["descripcion"];

if($decidir == "No") {
    $descripcion = "";
    $decidir = 0;
} else {
    $decidir = 1;
}

$conn = require 'php/conexion.php';

$sql = "INSERT INTO `alumnos`(`matricula`, `nombre`, `edad`, `carrera`, `grupo`, `semestre`) VALUES ('$matricula', '$nombre', '$edad', '$carrera', '$grupo','$semestre')";
mysqli_query($conn, $sql);

$sql = "INSERT INTO `informacion_personal`(`matricula`, `proyecto_personal`, `fortaleza1`, `fortaleza2`, `fortaleza3`, `debilidad1`, `debilidad2`, `debilidad3`, `decidir_proyecto`, `describir_proyecto`) VALUES ('$matricula', '$proyecto_personal', '$fort1', '$fort2', '$fort3', '$debi1', '$debi2', '$debi3', $decidir,'$descripcion')";

mysqli_query($conn, $sql);

mysqli_close($conn);

header('Location: http://localhost?msg=Operación%20realizada%20con%20éxito');

?>