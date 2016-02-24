<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FORMULARIO SUELDO</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="contenedor">
	<form action="sueldo.php" method="POST">
		
			<p>
				<label for="">Nombre</label>
				<input type="text" name="nombre"><br/><br/>

				<label for="">Sueldo</label>
				<input type="text" name=" sueldo"><br/><br/>


				<p>
        			<label>Comision</label><br/> 
        		
        			<input type="checkbox" name="comision[]"value="20"> Llega Temprano S/20 <br>
        			<input type="checkbox"  name="comision[]"value="500"> Vendedor A1 S/ 500 <br>
        			<input type="checkbox"  name="comision[]"value="100"> Bono Familiar S/ 100 <br>
        			<input type="checkbox"  name="comision[]"value="500"> Bono Navideño S/ 500 <br> 

        			
        		</p>

			</p>
			<p>
				<button>Calcular</button>	
			</p>
	</form>
	</div>
</body>
</html>