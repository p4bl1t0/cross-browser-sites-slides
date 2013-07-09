<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="js/livevalidation.js">
	</script>
	<script type="text/javascript" src="js/navegador.js">
	</script>
	<title>Contáctenos</title>
	<link rel="stylesheet" href="contacto.css" type="text/css" charset="utf-8" />
</head>

<body>
  <div id="wrapper">
    <div id="header"> </div>
    <div id="left">
      <div id="logo">
        
        
      </div>
      <div id="nav">
        <ul>
          <li><a href="index.html">Empresa</a></li>
          <li><a href="fabrica.html">Fábrica</a></li>
          <li><a href="productos.html">Productos</a></li>
          <li class="important"><a href="contacto.html">Contáctenos</a></li>
          
        </ul>
      </div>
      <div id="news">
        <h2>Sobre nosotros</h2>
        <p>En <b>1920</b>, un inmigrante italiano se radica con su familia en la Argentina y da comienzo a una activdad comercial: la venta ambulante de plumeros. <b>Salvador</b>, hijo del anterior y padre del hoy titular de la empresa, junto a su esposa <b>María Antonia</b>, comienzan a fabricar sus propios productos.</p>
		<p>En 1985 <b>Rafael</b>, con apoyo de su familia, expande su fábrica con nuevos productos que cubren las necesidades en limpieza del hogar.</p>
		<p>El <b>empeño y dedicación</b> al trabajo de las distintas generaciones forjaron una empresa orgullosa de ser argentina y que, a pesar de los vaivenes que recibió la industria, apuesta día a día con tenacidad para seguir avanzado.</p>
		<p>Esta trayectoria hace que hoy en día tenga el honor de contar con el apoyo de sus clientes, quienes depositan su <b>confianza</b> en sus productos garantizados</p>
      </div>
      
    </div>
    <div id="right">
      <h2>Contáctenos</h2>
      <div id="welcome">
			<?php
				/*declaro las variables de destino, asunto, remitente y de mensaje (el cual enviamos con la textarea llamada mensaje)*/
				$para = $_POST['para'];
				if ($para == "Contacto - pabloluisbotta@gmail.com") {$paraquien = "pabloluisbotta@gmail.com"; $para="nuestro contacto";}
				//if ($para == "Abel - abelbarcelo@industrias.com.ar") {$paraquien = "pablitolbnob@gmail.com";$para=Abel;}
				$asunto = $_POST['asunto'];
				$mensaje = $_POST['desc'];
				$de = $_POST['email'];
				/*utilizamos la función mail para el envio y le pasamos las variables que declaramos*/
				mail ($paraquien, $asunto, $mensaje,"Content-type: text/html; charset=iso-8859-1\r\n"."From: ".$de);
				echo "<h2>Su mensaje ".$asunto." ha sido enviado con exito a ".$para." .<br />Nos comunicaremos con usted a la brevedad \n Productos Cadera </h2>";
			?>      

      </div>
      
      
    </div>
    <div class="clear"> </div>
    
    <div id="footer">
      <div id="copyright">
        Copyright &copy; 2009 Probus Informática Todos los derechos reservados.
      </div>
	  <div id="footerline"></div>
    </div>
	
  </div>
</body>
</html>
