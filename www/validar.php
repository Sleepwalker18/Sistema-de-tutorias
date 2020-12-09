<?php
$usuario=$_POST['id'];
$contraseña=$_POST['password'];
session_start();
$_SESSION['id']=$usuario;


$conexion=mysqli_connect("localhost","root","","dbname");

$consulta="SELECT*FROM usuario where id=\'$usuario\' and password=\'$contraseña\'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:index.html");

}else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
