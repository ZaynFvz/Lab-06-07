<!DOCTYPE html>
<?php
include('funciones/funciones.php');
$xc = conectar();
$sql = "SELECT * FROM header";
$res = mysqli_query($xc, $sql);
$sql_menu = "SELECT*FROM menu";
$res_menu = mysqli_query($xc, $sql_menu);
$sql_cont = "SELECT*FROM noticias";
$res_cont = mysqli_query($xc, $sql_cont);
$sql_sub = "SELECT*FROM subtitulo";
$res_sub = mysqli_query($xc, $sql_sub);
?>
<html>

<head>
	<meta charset="utf-8">
	<title>EL CURIOSO</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>

<body>
	<ul class="menu">
		<?php
		while ($filas_menu = mysqli_fetch_array($res_menu)) {
			echo '<li><a href="' . $filas_menu['link'] . '">' . $filas_menu['contenido'] . '</a></li>';
		}
		?>
	</ul>
	<br>
	<h1><?php
		while ($filas = mysqli_fetch_array($res)) {
			echo $filas['contenido'];
		}
		?></h1>
	<br>
	<h2 style="text-align: center;"><?php
	while($filas_sub =  mysqli_fetch_array($res_sub)){
		echo $filas_sub['contenido'];
	}
	?></h2>
	<section class="post-list">
		<div class="content">
			<?php while ($filas_cont = mysqli_fetch_array($res_cont)){?><article class="post">
				<div class="post-header">
					<?php
						echo '<div style="background: url('.$filas_cont['imagen'].'); width: 100%;height: 200px;background-size: cover;background-position: center;transition: .2s;"></div>';			
					?>
				</div>
				<div class="post-body">
					<?php
						echo '<span>' . date("d") . " del " . date("m") . " de " . date("Y"). '</span>';
						echo '<h2>' . $filas_cont['titulo'] . '</h2>';
						echo '<p>' . $filas_cont['contenido'] . '</p>';				
					?>
					<a href="" class="post-link">Ver Más</a>
				</div>
			</article><?php } ?>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
