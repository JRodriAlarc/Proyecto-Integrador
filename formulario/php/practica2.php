<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/php-icon-3.png">
    <title>Tarea7</title>
</head>
<body>
    
    <div class="container">

    <?php
        header("Content-type: application/json; charset=utf-8");
        
        $data = json_decode(file_get_contents("php://input"), true); //Decodifica la cadena de Bits recibida por file_get_contents

        //echo "Hello!, Welcome " . $data['_nombre'] . " " . $data['_apellido'];

        require_once('coneccion_bd.php');

        //Se crea una Instancia hacia la conexion MySQL
        $new_con =  new ConeccionMySQL();

        //Crear Una conexion
        $new_con -> __conectar_MySQL();

        //Crear la Sentencia INSERT
        //$sql = "INSERT INTO tbl_name VALUES (1, 'Juan', 'Perez', 'JunPer3z09@gmail.com', 'JP12345');";
        /*
        $id_tbl_usr = 0;
        $return_id_tbl_usr = $id_tbl_usr + 1;
        */

        $sql = "INSERT INTO tbl_usuarios (nombre_usr, apellido_usr, correo_usr, password_usr) VALUES ('".$data['_nombre']."', '".$data['_apellido']."', '".$data['_email']."', '".$data['_contrasenia']."');";

        //Ejecutar la Sentencia SQL
        $resultado_sql = $new_con -> ejecutar_consultaBD($sql);

        //Verificar si el Numero de filas aceptada es mayor que 0 para saber si se guardo el registro
        if($resultado_sql){
            //true
            $filas_afectadas = $new_con -> obtener_filas_afectadas();
            if ($filas_afectadas > 0 ){

                echo "Registro Almacenado Exitosamente";

                ?>

                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark-check-fill me-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm8.854-9.646a.5.5 0 0 0-.708-.708L7.5 7.793 6.354 6.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                        </svg>
                        <div class="alert-dismissible fade show" role="alert">
                            <strong>¡Bien Hecho!</strong> El Registro se ha Guadado con Éxito.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>

                <?php

            }
            
        } else{
            //false
            echo "Error al Intentar Almacenar su Registro";
        }

        //Cerrar la conexion a la base de Datos:
        $new_con -> cerrar_conectionMySQL();

        //Se decodifican los datos, se manda a llamar al archivo con la conexion SQL, y se crea una variable que almacenará un objeto desde donde se Mandará a llamar la variable ejecutar consulta y se devuelbe un resultado (TRUE / FALSE). Con la estructura If se verifica si se ha ejecutado correctamente, obteniendo el número de columnas afectadas ( n > 0 -> Exito) si no (n <= 0 -> Error). 

    ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
