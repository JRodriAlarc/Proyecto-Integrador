<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/img_select_file.css">
    <title>Enviar Imagenes</title>
</head>
<body>

    <div class="centrar-elementos formatear-estilos">
        <div class="container">

            <?php

                if(isset($_REQUEST['agregar-imagen'])){
                
                    if(isset($_FILES['archivo-seleccionado']['name'])){

                        $TipoArchivo = $_FILES['archivo-seleccionado']['type'];
                        $NombreArchivo = $_FILES['archivo-seleccionado']['name'];
                        $TamanioArchivo = $_FILES['archivo-seleccionado']['size'];

                        //validar que sea una IMg
                        include_once "img_validar.php";

                        $ImagenSeleccionada = fopen($_FILES['archivo-seleccionado']['tmp_name'], 'r');

                        $ImgBinaria = fread($ImagenSeleccionada, $TamanioArchivo);

                        include_once "img_sentencia_sql.php";

                    };

                };

            ?>

            <form class="centrar-elementos row" method="POST" enctype="multipart/form-data">

                <section class="col-12 col-md-6 px-4">
                    <div class="col-12 mb-3">
                        <label for="archivo-seleccionado" class="form-label h2">Seleccione una Imagen:</label>
                        <input class="form-control" type="file" name="archivo-seleccionado" id="archivo-seleccionado" accept="image/*">
                    </div>
                </section>

                <section class="col-12 col-md-6 px-4 mt-4 centrar-elementos">
                    <div class="col-12 col-md-9 px-4 estilo-borde">
                        <div class="col-12 mb-3 mt-4 centrar-elementos pre-view-imagen">
                            <img src="../img/icon_images.png" alt="Previsualización de la Imagen Seleccionada" class="tamanio-imagen col-12 mb-3 mt-4" id="contenido-archivo">
                        </div>
                        <p class="centrar-elementos fw-bolder fs-5" id="estado-imagen">¡Seleccione una Imagen!</p>
                    </div>
                </section>

                <section class="d-grid gap-2 col-12 col-ms-10 col-md-8 col-lg-5 px-4 pt-5 mx-auto">
                    <button class="btn btn-info fw-bolder text-white" type="submit" name="agregar-imagen">Agregar Imagen a la Base de Datos</button>
                    <button class="btn btn-info fw-bolder" type="button"><a href="../../index.html" class="estilo-no-links">Volver al Menú Anterior</a></button>
                </section>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="../js/img_pre-view_script.js"></script>

</body>
</html>