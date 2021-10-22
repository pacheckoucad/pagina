<html>
	<head>
	<title>Formulario</title>
	<meta charset="utf-8">
		<?php
		include "head.php"
		?>
	</head>
	<body>
	<div class='container'>
		<div class="row">
			<div class="col-xs-8 col-md-9 col-lg-12">
	<?php 
		include "menu.php";
	?>
	<script type="text/javascript">
			var nombre;
			nombre=prompt('Ingrese su nombre: ');
			var apepat;
			apepat=prompt('Ingrese su apellido paterno: ');
			var edad;
			edad=prompt('Ingrese su edad: ');
			var casado;
			casado=prompt('Ingrese su estado civil: ');
			var apemat;
			apemat=prompt('Ingrese su apellido materno: ');
			var sexo;
			sexo=prompt('Ingrese su genero: ');
			var escolaridad;
			escolaridad=prompt('Ingrese su escolaridad: ');
			var ocupacion;
			ocupacion=prompt('Ingrese su ocupacion: ');
			var sd;
			sd=prompt('Ingrese su sueldo diario: ');
			var sm=(sd*30);
			var sa=(sm*12);
			var curso;
			curso=prompt('Ingrese su curso: ');
			var tel;
			tel=prompt('Ingrese su telefono');
			var cel;
			cel=prompt('Ingrese su celular');
			var hijos;
			hijos=prompt('¿Tiene usted hijos?');
			var rfc;
			rfc=prompt('Ingrese su rfc: ');
			var fdc;
			fdc=prompt('Ingrese su fecha de nacimiento: ');
			var dir;
			dir=prompt('Ingrese su direccion: ');
			
			
			document.write('<center>');
			document.write('<h1>'+'Ejercicio'+'</h1>');
			document.write('<table border="5" width="45%">');
			document.write('<tr>'+'<th colspan="2">'+'DATOS PERSONALES'+'</th>'+'</tr>');
			document.write('<tr>'+'<td>'+'Nombre: '+nombre+'</td>'+'<td>'+'Direccion: '+dir+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Apellido Paterno: '+apepat+'</td>'+'<td>'+'Telefono: '+tel+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Apellido Materno: '+apemat+'</td>'+'<td>'+'Casado: '+casado+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Edad: '+edad+'</td>'+'<td>'+'Hijos: '+hijos+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Sexo: '+sexo+'</td>'+'<td>'+'Sueldo Mensual: '+sm+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Escolaridad: '+escolaridad+'</td>'+'<td>'+'Sueldo Anual: '+sa+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Ocupacion: '+ocupacion+'</td>'+'<td>'+'Celular: '+cel+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Sueldo Diario: '+sd+'</td>'+'<td>'+'RFC: '+rfc+'</td>'+'</tr>');
			document.write('<tr>'+'<td>'+'Curso: '+curso+'</td>'+'<td>'+'Fecha de nacimiento: '+fdc+'</td>'+'</tr>');;
			document.write('</table>');
			document.write('</center>');
		</script>
			</div>
		</div>
	</div>		

	</body>
</html>	