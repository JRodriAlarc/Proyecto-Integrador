//Comprobar Conectividad al Archivo JS
console.log('Hello!')

//Asociar los Inputs y Butons a Variables
const firstName = document.querySelector('#exampleInputText1');
const lastName = document.querySelector('#exampleInputText2');
const email = document.querySelector('#exampleInputEmail1');
const password = document.querySelector('#exampleInputPassword1');
const confPassword = document.querySelector('#exampleInputPassword2');
const button = document.querySelector('.btn')

//Agregar Funcionalidad al Boton
button.addEventListener('click', function(){

    //Verificar que el Boton Funciona
    console.log("Todo Ok!");

    //Mostrar los Datos que Ingresa el Ususario
    //alert("Su Nombre: " + firstName.value + ' ' + lastName.value + '\n' + "Su Correo es: " + email.value + '\n' + "Su Contraseña es: " + password.value + ' y su Confirmación es: ' + confPassword.value);

    //Implementar el API Fecth
    //Realizar Peticion a HTTP(Metodo: POST)
    
    fetch("../formulario/php/practica2.php", {     //Cuando se pone un Bloque de codigo "{}" se trata de un Objeto
        method: "POST",
        headers: {
            "Content-Type": "application/json; charset=UTF-8"
        },
        body: JSON.stringify({                  //Stringify() ---> Función que da formato al objeto
            _nombre: firstName.value,
            _apellido: lastName.value,
            _email: email.value,
            _contrasenia: password.value,
            _cofirmacion: confPassword.value
        })
    })                                              //Realizar la peticon al servidor
        .then(function(respuesta){
            return respuesta.text();
        })                                          //Procesar el tipo de Respuesta
        .then(function(texto){
            console.log(texto);
        })                                          //Procesar la Respuesta
        .catch(function(err){
            console.error('Error: ', err);
        });                                         //Verifica si se cumple la promesa


});

//Implementar el API Fecth


/*
// Opciones de la petición (valores por defecto)
    const options = {
        method: "POST"
    };
  
  // Petición HTTP
  fetch("json/robots.json", options)
    .then(response => response.json())
    .then(data => {
        //Procesar los datos
    });
    .catch(err => {
        //Notificar Errores
        console.error("ERROR: ", err.message)
    });

*/

//JS ASocia varibles js con elemntos HTML con ayuda del API DOM (cajas de texto y Boton)
//Al boton se le agrega un evento al hacer clic y hace una peticion al servidor para procesar registros, los envia en un objeto JSON, que se codifica y almacena en una variable. 