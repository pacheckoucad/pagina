<html>
	<head>
	<title>Enlaces divertidos</title>
	<?php
	include "head.php"
	?>
	<script type="text/javascript">

    window.addEventListener('load', inicio, false);

    function inicio() {
        document.getElementById('obtener').addEventListener('click', recuperarLocalizacion, false);
    }

    function recuperarLocalizacion() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(mostrarCoordenada,errores,{timeout:5000});
        } else {
            alert('El navegador no dispone la capacidad de geolocalización');
        }
    }
    
    function mostrarCoordenada(posicion) {
        var direccion = posicion.coords.latitude + "," + posicion.coords.longitude;
        var mapa = "http://maps.googleapis.com/maps/api/staticmap?center="
           +direccion+"&zoom=14&size=500x500&sensor=false";
        document.getElementById("dato").innerHTML = "<img src='"+mapa+"'>";    
    }
    
    function errores(err) {
        if (err.code == err.TIMEOUT) 
            alert("Se ha superado el tiempo de espera");
        if (err.code == err.PERMISSION_DENIED)     
            alert("El usuario no permitió informar su posición");
        if (err.code == err.POSITION_UNAVAILABLE)                 
            alert("El dispositivo no pudo recuperar la posición actual");
    }

        
</script>  
	</head>
	
	<body>
	<?php
	include "menu.php"
	?>
	<br/>
	<h4>En esta area pondremos algunos enlaces de interes para ti, y asi puedas consultar piezas, compra-venta, y foros de motocicletas.
	<br/>	
	Disfrutalo
	</h4>
	<table border="2" width="25%">
	<tr>
	<th><center><a href="http://www.motomundo.com/index.html" target="-blank"><img src="imagenes/motomundo.jpg" width="150"></a></center></th>
	</tr>
	<tr>
	<th><center><a href="http://www.mercadolibre.com.mx/vehiculos/" target="_blank"><img src="imagenes/ml.jpg" width="150"></center></a>	
	</tr></th>
	</table>	
	<p>
	<button class="mybutton"><input type="button" id="obtener">Obten tu dirección</button>
	
  <br>
  <div id="dato"></div>
	</p>
	</body>

</html>	