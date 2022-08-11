console.log("La funcion recargar esta lista!");

const recargar = document.getElementById("recargar-sitio");
const url = window.location.href;

recargar.addEventListener('click', function(){

    console.log("Haz dado click en el boton recargar");

    window.location.href = url;

});