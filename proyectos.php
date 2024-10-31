<?php
$pagina = cargarPagina('proyectos');
$proyectos = cargarProyectos();

if(empty($proyectos)){ 
    header('Location: 404');
}

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>

<main class="flex-shrink-0">
    <section id="breadcrumbs">
        <div class="container">
        <div class="row">
            <div class="col my-2">
            <?php include_once 'breadcrumbs.php';?>
            </div>
        </div>
        </div>
    </section>
    <section class="pb-6">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column pt-5 px-4 pb-3">
                    <h1>Proyectos</h1>
                    <p class="pb-0">A continuación se muestran algunos de los proyectos realizados por Sowtgen:</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-4">        
            <?php           
                if(is_array($proyectos)){
                    $contadorProyectos = 0;
                    foreach($proyectos as $proyecto){
                        echo '  <div class="col-12 col-sm-6 col-lg-4 ps-4 pe-3 pb-3">
                                    <a href="#" class="proyectos" data-bs-toggle="modal" data-bs-target="#modal-proyectos-'.$contadorProyectos.'">
                                        <img src="'.BASE_PATH.'/img/'.$pagina['slug_pagina'].'/'.$proyecto['slug_proyecto'].'/'.$proyecto['foto_proyecto'].'" alt="'.$proyecto['titulo_proyecto'].'" class="img-fluid">
                                        <h6 class="p-3 mb-0 text-responsive flex-grow-1">'.$proyecto['titulo_proyecto'].'</h6>
                                    </a>
                                </div>';

                        $imagenesProyecto = cargarImagenesProyecto($proyecto['id_proyecto']); 

                        echo '  <div class="modal fade modal-proyectos" id="modal-proyectos-'.$contadorProyectos.'" tabindex="-1" aria-labelledby="modal-proyectos-'.$contadorProyectos.'" aria-hidden="true">
                                    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content overflow-hidden d-flex flex-row flex-wrap-reverse">
                                            <div class="col-12 col-md-6 p-0">
                                                <div id="carousel-proyectos-'.$contadorProyectos.'" class="carousel carousel-proyectos slide" data-bs-ride="carousel">
                                                    <div class="carousel-inner">';

                                                    $contadorImagenes = 0;
                                                    if(is_array($imagenesProyecto)){
                                                        foreach($imagenesProyecto as $imagenProyecto){
                                                            echo '  <div class="carousel-item'.((empty($contadorImagenes)) ? (" active") : ("")).'">
                                                                        <img src="'.BASE_PATH.'/img/'.$pagina['slug_pagina'].'/'.$proyecto['slug_proyecto'].'/'.$imagenProyecto['foto_carousel_proyecto'].'" class="d-block w-100" alt="'.$proyecto['titulo_proyecto'].'">
                                                                    </div>';
                                                            $contadorImagenes++;
                                                        }

                                                        if(empty($contadorImagenes)){
                                                            echo '  <div class="carousel-item'.((empty($contadorImagenes)) ? (" active") : ("")).'">
                                                                        <img src="'.BASE_PATH.'/img/'.$pagina['slug_pagina'].'/'.$proyecto['slug_proyecto'].'/'.$proyecto['foto_proyecto'].'" class="d-block w-100" alt="'.$proyecto['titulo_proyecto'].'">
                                                                    </div>';
                                                        }
                                                    }
                                                        
                        echo '                      </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel-proyectos-'.$contadorProyectos.'" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Anterior</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel-proyectos-'.$contadorProyectos.'" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Siguiente</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 p-4">
                                                <button type="button" class="btn-close position-relative float-end" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                                <h3>'.$proyecto['titulo_proyecto'].'</h3>
                                                <div class="content-descripcion-proyectos">'.$proyecto['descripcion_proyecto'].'</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';      
                        $contadorProyectos++;              
                    }
                }
                ?>
            </div>
        </div>
    </section>
</main>