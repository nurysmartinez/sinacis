<?php 
	$ced=$_POST["ced"];
	$nom=$_POST["nom"];
	$tel=$_POST["tel"];
	$placa=$_POST["placa"];
	$marca=$_POST["marca"];
	$desc=$_POST["desc"];
	$color=$_POST["color"];
	$db = new PDO('mysql:host=localhost;dbname=sinacis;charset=utf8', 'root', '');
	$result = $db->exec("insert into clientes values('$ced','$nom','$tel','$placa','$marca','$desc','$color')");	
?>

<html>
<head>
	<title></title>
</head>

<body>

	<div class="col-md-8">
          <h1>SINACIS</h1>
           <h1> DATOS GUARDADOS EXITOSAMENTE</h1>	
          <hr>
          <img src="gracias.jpg" alt="" class="img-responsive">
                 
        </div>

	<div class="col-md-4">
	
	<img src="mecanico.jpg" alt="" class="img-rounded">
<img src="logosinacis.png" alt="" class="img-circle">
<img src="" alt="" class="img-thumbnail">
                 
        
        </div>


</body>
</html>
