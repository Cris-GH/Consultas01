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
    <title>Consultas en PHP</title>
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
                <div class="col-md-6">
                    <h2 class="text-center">Consultas basicas</h2><hr><br>
                    <!-- Cuadro combinado -->
                    <div class="dropdown text center">
                        <button 
                            class="btn btn-secondary dropdown-toggle" 
                            type="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            Seleccione su consulta
                        </button>
                        <!-- Lista de opciones -->
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="consulta01.php">Consulta de Categorias</a></li>
                            <li><a class="dropdown-item" href="consulta02.php">Consulta de Productos</a></li>
                            <li><a class="dropdown-item" href="consulta03.php">Consulta Total Productos</a></li>
                            <li><a class="dropdown-item" href="consulta04.php">Consulta Total Categorias</a></li>
                            <li><a class="dropdown-item" href="consulta05.php">Consulta Suma Precios</a></li>
                            <li><a class="dropdown-item" href="consulta06.php">Consulta Promedio Precios</a></li>
                            <li><a class="dropdown-item" href="consulta07.php">Consulta Precio bajo</a></li>
                            <li><a class="dropdown-item" href="consulta08.php">Consulta Precio alto</a></li>
                            <li><a class="dropdown-item" href="consulta09.php">Consulta de Productos y Categoria</a></li>
                            <li><a class="dropdown-item" href="consulta10.php">Por definir</a></li>
                        </ul>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4"><br></div>
                        <div class="col-md-4" style="align-items: center;">
                            <img src="img/10.png" class="img img-fluid" style="height: 120px;"><br><br>
                        </div >
                        <div class="col-md-4"><br></div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <h2 class="text-center">Registros nuevos</h2><hr><br>
                    <div class="row text-center">
                        <div class="col-md-6"> 
                            <a href="nuevaCategoria.php" class="btn btn-success" role="button">Crear categoria nueva</a><br><br>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img src="img/9.png" class="img img-fluid" style="height: 70px;"><br><br>
                                </div >
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="nuevoProducto.php" class="btn btn-warning" role="button">Crear producto nuevo</a><br><br>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <img src="img/11.png" class="img img-fluid" style="height: 70px;"><br><br>
                                </div >
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>         
</section>
    
    <!-- javascript de boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>