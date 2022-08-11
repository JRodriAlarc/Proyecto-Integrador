<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/img_select_file.css">
    <title>Consultar Imagenes BD</title>
</head>
<body>


    <div class="mx-0 px-0 mt-5">
        <div class="container col-12 col-md-10">
            <div class="centrar-elementos">
                <table class="table table-striper table-hover table-bordered rounded-3">

                <thead class="centrar-texto">
                    <tr>
                        <th scope="col">#Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Imagen</th>
                    </tr>
                </thead>

                <tbody class="centrar-texto align-middle">

                    <?php

                        include_once "img_config_script.php";

                        $sencetncia_select = "SELECT Id_img, Nombre_img, Tipo_img, Imagen FROM imagenes;";

                        $resultado_sentencia_sql = mysqli_query($conexion, $sencetncia_select);

                        while ($row = mysqli_fetch_assoc($resultado_sentencia_sql)){

                        ?>

                            <tr>
                                <td> <?php echo $row['Id_img']; ?> </td>
                                <td> <?php echo $row['Nombre_img']; ?> </td>
                                <td> <?php echo $row['Tipo_img']; ?> </td>
                                <td> 
                                    <img src="data:<?php echo $row['Tipo_img']; ?>; base64, <?php echo base64_encode($row['Imagen']); ?> " class="tbl-imagen" alt="Imagen desde la Base de Datos"> 
                                </td>
                            </tr>

                        <?php

                        };

                    ?>

                </tbody>



                </table>

            </div>

            <div class="d-grid gap-2 col-12 col-sm-10 col-md-8 col-lg-5 px-5 pt-5 mx-auto mb-5">
                <button class="btn btn-info text-white fw-bolder" type="button"><a href="../../index.html" class="estilo-no-links">Volver al Menú Anterior</a></button>
            </div>

        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>