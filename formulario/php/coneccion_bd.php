<?php

    //Solo debe Existir una sola conección  -->     

    // Clase que alojara la conexión a la base de datos:
    class ConeccionMySQL{
        //Definir Atributos (Variables)
        
        private $host;              //No son visibles fura de la clase
        private $bd_name;
        private $user;
        private $password;

        private $conexion;          //Variable que almacena el canal de comunicación

        //Definir los Métodos

        //Metodo Constructor cuyo proposito es Inicializar las constantes para hacer conexión a la BD
        public function __construct(){      //Transfiere el valor de las constantes a las variables
            //Funcion que nos permite importar los valores de las constantes desde otro archivo
            //Podemos usar include_once
            require_once('config_bd.php');
            
            //Asignar Valores almacenados en las constantes a los atributos
            $this -> host = ServerName;
            $this -> bd_name = Nom_BaseDatos;
            $this -> user = UserName;           //El '=' es un metodo de asignación
            $this -> password = Password;

        }
        
        //Metodo para hacer conexion a MySQL (Al sistema gestor de BD)
        public function __conectar_MySQL(){
            $this -> conexion = new mysqli(     //Instancia a MySQL (Se crea un Nuevo Objeto)
                $this -> host, $this -> user, $this -> password, $this -> bd_name);  //Parametros del método
                
            if($this -> conexion -> connect_errno){ //Verifica si ha sucedido un error
                die("Error al conectarse a MySQl: " . $this -> connect_error); //die es para terminar una tarea y liberar la memoria del servidor
            }
        }

        //Metodo para Cerrar la coneciona MySQL
        public function cerrar_conectionMySQL(){
            $this -> conexion -> close();
        }
        
        //Metodo para ejecutar una consulta SQL de tipo INSERT, DELETE, UPDATE (Retornará un Número = AffectedRows : 1) y SELECT (Retornará una Cadena de Caracteres 'Matriz de Información')
        public function ejecutar_consultaBD($sql){
            $resultado = $this -> conexion -> query($sql);
            
            return $resultado;
        }

        //Metodo para Obtener el Número de Filas Afectadas  
        public function obtener_filas_afectadas(){    //Si es 0 es un Error, Si es Mayor a 1 ha sido correcto
            return $this -> conexion -> affected_rows;
        }

        //Metodo que retorna la ultima fil de un resultado
        //Al ejecutar una sentencia SELECT en forma de arreglo
        public function obtener_filas($resultado){
            return $resultado -> fetch_row();
        }

        //Metodo para liberar el Resultado de una consulta
        public function liberar_resultado($resultado){
            $resultado -> free_result();
        }


    } //Termina la clase ConeccionMySQl


    /* Crear la conexión a la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);
    */

    /* Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($conn);
    */

?>