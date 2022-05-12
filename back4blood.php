<!DOCTYPE html>
<?php
include('funciones/funciones.php');
$xc = conectar();
$sql_back = "SELECT*FROM articulo";
$res_back = mysqli_query($xc, $sql_back);
$sql_text = "SELECT*FROM articulo";
$res_text = mysqli_query($xc, $sql_text);
$sql_video = "SELECT * FROM articulo";
$res_video = mysqli_query($xc, $sql_video);
$sql_video2 = "SELECT * FROM articulo";
$res_video2 = mysqli_query($xc, $sql_video2);

?>
<html>
<head>
	<meta charset="utf-8">
	<title>Back 4 Blood</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/back4.css">
</head>
<body>
	<h1><?php
		while ($filas_back = mysqli_fetch_array($res_back)) {
			echo $filas_back['titulo'];
		}
		?></h1>
	<br>
	<p style="text-align: center;"><?php
		while ($filas_text = mysqli_fetch_array($res_text)) {
			echo $filas_text['texto'];
		}
		?></p>
	<div style="text-align: center;">
	    <?php
		while ($filas_video = mysqli_fetch_array($res_video)){
			echo '<iframe width="560" height="315" src="'. $filas_video['video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		}
		?>
    </div>
    <br>
    <div style="text-align:center;">
	   <a href="videojuegos.php"><button type="button" class="btn btn-dark">Volver</button></a>
    </div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>