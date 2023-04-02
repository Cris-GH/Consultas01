<?php
	// si viene del iniciar.php
	if(isset($_POST['registra'])){
		$entro=false;
        $nombre=$_POST['nombre'];
		$descripcion=$_POST['descripcion'];
        // incluir archivo serv.php
	    require_once('conexion.php');
		$registros = "SELECT nombre FROM categoria WHERE nombre='$nombre'AND descripcion ='$descripcion'";
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
			echo '<script>alert("Categoria registrada con anticipación"); </script>';
			// ir al panel.php
			echo '<script>window.location="nuevaCategoria.php"; </script>';	
        }else{
			// error
			$sql = "INSERT INTO categoria (nombre,descripcion) VALUES (?,?)";
			$stmt= $mbd->prepare($sql);
			$stmt->execute([$nombre,$descripcion]);
			// ir a iniciar.php
			echo '<script>alert("Categoria registrada"); </script>';
			echo '<script>window.location="consulta01.php"; </script>';	
		}
	}else{
		echo '<script>window.location="index.php"; </script>';
	}
?>