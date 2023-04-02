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
                <div class="col-md-9">
                    <h2 class="text-center">Consultas basicas</h2><hr><br>
                    <table class="table">
                            <?php
                                //Lista por producto
                                $sql = "SELECT MAX(precio) from producto";
                                $res = $mbd -> query($sql);
                                $count = $res -> fetchColumn();
                                print "El precio más alto de los productos es: S/." . $count;
                            ?>
                    </table>
                    <img src="img/18.png" class="img img-fluid" style="height: 190px;"><br><br>                 
                </div>
                <div class="col-md-3">
                    <h2 class="text-center">Opciones</h2><br>
                    <a href="nuevaCategoria.php" class="btn btn-success" role="button">Crear categoria nueva</a><br><br>
                    <img src="img/9.png" class="img img-fluid" style="height: 70px;"><br><br>                
                    <a href="nuevoProducto.php" class="btn btn-warning" role="button">Crear producto nuevo</a><br><br>
                    <img src="img/11.png" class="img img-fluid" style="height: 70px;"><br><br>
                    <a href="index.php" class="btn btn-outline-secondary">Regresar</a><br>
                </div>
            </div>            
        </div>
    </section>
    
    <!-- javascript de boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
