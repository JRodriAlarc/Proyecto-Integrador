<?php
    
    include_once "image_bd.php";

    //Validar que el Tipo de Archivo Subido sea una Imagen
    $ArchivoPermitido = array("image/jpg","image/jpeg", "image/png", "image/tif", "image/tiff", "image/bmp", "image/psd", "image/gif", "image/raw");
    if( in_array ($TipoArchivo, $ArchivoPermitido) == false ){
            
            ?>
            
            <div class="d-grid col-6 col-md-5 col-lg-4 mx-auto mb-5">
            
                <button class="btn btn-danger" type="submit" name="Recargar" id="Recargar">Selecionar otro Archivo</button>
                <script>

                    const reload = document.getElementById('Recargar');

                    // la propiedad window.location.href, devuelve la URL actual de una página.
                    const url = window.location.href;

                    //Agregar la Funcionalidad de recargar al Boton
                    reload.addEventListener('click', function(){

                        //Verificar que el Boton Funciona
                        console.log("El Botón Funciona!");

                        //Reacrgar la Página para Subir otro Archivo
                        window.location.href = window.location.href;

                    });

                </script>

            </div>


            <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-sign-stop-fill flex-shrink-0 me-2" viewBox="0 0 16 16">
                <path d="M10.371 8.277v-.553c0-.827-.422-1.234-.987-1.234-.572 0-.99.407-.99 1.234v.553c0 .83.418 1.237.99 1.237.565 0 .987-.408.987-1.237Zm2.586-.24c.463 0 .735-.272.735-.744s-.272-.741-.735-.741h-.774v1.485h.774Z"/>
                <path fill-rule="evenodd" d="M4.893 0a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146A.5.5 0 0 0 11.107 0H4.893ZM3.16 10.08c-.931 0-1.447-.493-1.494-1.132h.653c.065.346.396.583.891.583.524 0 .83-.246.83-.62 0-.303-.203-.467-.637-.572l-.656-.164c-.61-.147-.978-.51-.978-1.078 0-.706.597-1.184 1.444-1.184.853 0 1.386.475 1.436 1.087h-.645c-.064-.32-.352-.542-.797-.542-.472 0-.77.246-.77.6 0 .261.196.437.553.522l.654.161c.673.164 1.06.487 1.06 1.11 0 .736-.574 1.228-1.544 1.228Zm3.427-3.51V10h-.665V6.57H4.753V6h3.006v.568H6.587Zm4.458 1.16v.544c0 1.131-.636 1.805-1.661 1.805-1.026 0-1.664-.674-1.664-1.805V7.73c0-1.136.638-1.807 1.664-1.807 1.025 0 1.66.674 1.66 1.807ZM11.52 6h1.535c.82 0 1.316.55 1.316 1.292 0 .747-.501 1.289-1.321 1.289h-.865V10h-.665V6.001Z"/>
            </svg>
                <div class="alert-dismissible fade show" role="alert">
                    <strong>¡Lo Sentimos!</strong> <?php die("El Formato de su Archivo No es Valido."); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>

            
            <?php

    };

?>