<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
if(!isset($_SESSION['usuario'])){
  header("location:index.html");
}
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  header("location:Index.php");
}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
