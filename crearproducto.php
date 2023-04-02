<?php
	// si viene del iniciar.php
	if(isset($_POST['registra'])){
		$entro=false;
		$descripcion=$_POST['descripcion'];
		$precio=$_POST['precio'];
        $categoria=$_POST['categoria'];
        // incluir archivo serv.php
	    require_once('conexion.php');
		$registros = "SELECT descripcion FROM producto WHERE descripcion ='$descripcion' AND precio='$precio'";
		// bucle
		foreach($mbd->query($registros) as $fila) {
            $entro = true;
			// inicia sesion
			//session_start();
			// sesion se llama con el usuario
			//$_SESSION["usuario"]=$fila['usuario'];			
		}	
		//$db = null;
		if ($entro){
            // msj en javascript
			echo '<script>alert("Producto registrado con anticipación"); </script>';
			// ir al panel.php
			echo '<script>window.location="nuevoProducto.php"; </script>';	
        }else{
			// error
			$sql = "INSERT INTO producto (descripcion,precio,categoria) VALUES (?,?,?)";
			$stmt= $mbd->prepare($sql);
			$stmt->execute([$descripcion,$precio,$categoria]);
			// ir a iniciar.php
			echo '<script>alert("Producto registrado"); </script>';
			echo '<script>window.location="consulta02.php"; </script>';	
		}
	}else{
		echo '<script>window.location="index.php"; </script>';
	}
?>
