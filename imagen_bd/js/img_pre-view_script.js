console.log("Todo Ok!");

const imagen = document.getElementById('contenido-archivo');
const archivo_seleccionado = document.getElementById('archivo-seleccionado');
const estado_archivo = document.getElementById('estado-imagen');

archivo_seleccionado.addEventListener('change', function(envent){

    console.log('Archivo Seleccionado!');

    let imagen_seleccionada = new FileReader();

    imagen_seleccionada.onload = function(){
        
        imagen.src = imagen_seleccionada.result;
        estado_archivo.innerHTML = "¡Esta es tu Imagen!";

    };

    imagen_seleccionada.readAsDataURL(envent.target.files[0]);

});