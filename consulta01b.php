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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Desarrollo de Software</h1>
                </div>
            </div>        
        </div>
    </header>
    <!-- Secciones de la pagina -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Consultas basicas</h2>
                    <?php
                        include("conexion.php");
                        //Lista por producto
                        foreach($mbd->query('SELECT * from producto') as $fila) {
                            print_r($fila);        
                        }

                    ?>
                    
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">xxx</h2>
                </div>
            </div>            
        </div>
    </section>
    
    <!-- javascript de boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
