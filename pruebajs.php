<html>
	<head>
	<title>Prueba JS</title>
	<?php
		include "head.php"
	?>
	<style type="text/css">
		form
		{
			color:black;
		}
	</style>
	</head>
	<body>
		<?php
			include "menu.php"
		?>

		<div class='container'>
			<div class='row'>	
				<div class='col-xs-12 col-md-12 col-lg-12'>
			
			<p>
				En esta parte vamos a poder practicar la funcionalidad de JS con los formularios,
				siendo asi de gran ayuda para nosotros, solo selecciona tu tipo de moto favorito.
			</p>
				</div>
			</div>
		</div>
		<form name="aceptar" id="seleccion" method="post" action="#">
			<input type="radio" name="aceptar1" value="1">Si 
			<br>
			<input type="radio" name="aceptar2" value="2">No
		</form>
		<script type="text/javascript">
			var formularioPrincipal = document.getElementById("seleccion");
			var formularioPrincipal = document.getElementById("motos");
			if formularioPrincipal=sSi
			{
				
			}
		</script>



		<form name="seleccion" id="motos" action="mailto:elsrpachi@hotmail.com" method="post">
			<select name="transporte">
				<option>Scrambler</option>
				<option>Bobber</option>
				<option>Chopper</option>
			</select>
			<button type="submit" class="btn btn-primary">Enviar</button>
		</form>

	</body>
</html>