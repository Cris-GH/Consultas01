<?php
    include("conexion.php");
?>
<!-- documento html5 -->
<!doctype html>
<!-- region -->
<html lang="es-pe">
  <head>
    <!-- idioma y teclado -->
    <meta charset="utf-8">
    <!-- responsive -->    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Titulo de la web -->
    <title>Consulta basica en PHP</title>
    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- Cabecera -->
    <header>
        <div class="container-fluid p-2 bg-primary text-white">
            <div class="row">
            <div class="col-md-2">
                <img src="img/5.png" class="img img-fluid float-end" style="height: 70px;"><br><br>
                </div>
                <div class="col-md-10">
                    <h1 class="text-start">Desarrollo de Software</h1>
                </div>
            </div>        
        </div>
    </header><br><br>
    <!-- Secciones de la pagina -->
    <section>
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-md-4">
                    <img src="img/15.png" class="img img-fluid" style="height: 170px;"><br><br> 
                </div>
                <div class="col-md-4">
                <h4 class="text-center">Registro de productos</h4><br>
						<form method="post" action="crearproducto.php">
							<div class="form-group">
                                <label for="descripcion" class="text-start">Descripcion:</label><br><br>
								<input type="text" 
									name="descripcion" 									
									placeholder="Ingrese descripcion del producto" 
									maxlength="50"
									class="form-control" 
									required/><br>
                                <label for="precio" class="text-start">Precio:</label><br><br>
                                <input type="text" 
									name="precio" 									
									placeholder="Ingrese precio del producto" 
									maxlength="50"
									class="form-control" 
									required/><br>
                                <label for="categoria" class="text-start">Categoria:</label><br><br>
                                <input type="text" 
									name="categoria" 									
									placeholder="Ingrese categoria del producto" 
									maxlength="50"
									class="form-control" 
								required/><br>
							</div>						
							<input type="submit" 
								value="Registrar" 
								name="registra" 
								class="btn btn-outline-success"/>
							<input type="reset" 
								value="Restaurar" 
								name="restaura" 
								class="btn btn-outline-warning"/>	
                            <a href="index.php" class="btn btn-outline-secondary">Regresar</a><br><br>													
						</form>
                </div>
                <div class="col-md-4">
                    <img src="img/11.png" class="img img-fluid" style="height: 170px;"><br><br> 
                </div>
            </div>
        </div>            
    </section>
    
    <!-- javascript de boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
