<!DOCTYPE html>
<?php
include('funciones/funciones.php');
$xc = conectar();
$sql_game = "SELECT * FROM videojuegos";
$res_game = mysqli_query($xc, $sql_game);
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Videojuegos/NEWS</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/juegos.css">
</head>
<body>
	<h1>VIDEOJUEGOS</h1>
    <br>
    <div style="text-align: center;">
      <button type="button" class="btn btn-primary">Tencet</button>
      <button type="button" class="btn btn-secondary">Turtle Rock Studios</button>
      <button type="button" class="btn btn-success">Supercell</button>
      <button type="button" class="btn btn-danger">Epic Games</button>
      <button type="button" class="btn btn-warning">Valve</button>
      <button type="button" class="btn btn-info">Red Barrels Studio</button>
      <button type="button" class="btn btn-light">Riot Games</button>
    </div>
    <br>
    <p style="text-align: center;">En esta sección podras encontrar las diferentes noticias sobre lanzamientos, popularidad, records, entre otras cosas sobre el mundo de los videojuegos.</p>
    <p style="text-align: center;">Puedes usar los botones de la parte superior para ver noticias de las mayores compañias en esta industria.</p>
    <section class="post-list">
    	<div class="content">
		<?php while ($filas_game = mysqli_fetch_array($res_game)){?><article class="post">
				<div class="post-header">
					<?php
						echo '<div style="background: url('.$filas_game['imagen'].'); width: 100%;height: 200px;background-size: cover;background-position: center;transition: .2s;"></div>';			
					?>
				</div>
				<div class="post-body">
					<?php
						echo '<span>' . $filas_game['fecha'] . '</span>';
						echo '<h2>' . $filas_game['titulo'] . '</h2>';
						echo '<p>' . $filas_game['contenido'] . '</p>';				
					?>
					<a href="back4blood.php" class="post-link">Ver Más</a>
				</div>
			</article><?php } ?>
    </section>
    <div style="text-align: center;">
        <a href="Index.php"><button type="button" class="btn btn-dark">Volver</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>