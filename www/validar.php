<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['password'];
session_start();


$conexion=mysqli_connect("localhost","dbuser","dbpass","dbname");

$consulta="SELECT * FROM usuarios where usuario='$usuario' and password='$contraseña'";
echo "$consulta";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    $_SESSION['id']=$usuario;
    header("location:dashboard.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
