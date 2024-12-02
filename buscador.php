<?php
$pagina = cargarPagina('buscador');
$busqueda = (isset($_GET["q"])) ? ($_GET["q"]) : ("");
$page = (isset($_GET["page"])) ? ($_GET["page"]) : (1);

$paginaMaquina = cargarPagina('equipos');
$maquinas = array();
if(!empty($busqueda)){
    $maquinas = cargarMaquinas($busqueda);
    $maquinasPaginado = cargarMaquinas($busqueda, $page);
}

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>

<main class="flex-shrink-0">
    <section>
        <div class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="d-flex flex-column p-5 text-center text-white">
                        <h1 class="pb-6">
                            Resultados de búsqueda:<br>
                            "<?=htmlspecialchars($busqueda)?>"
                        </h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form role="search" style="margin-top:-28px;">
                    <div class="d-flex shadow-sm rounded-1">
                        <button class="btn button-search" type="submit"><i class="las la-search"></i></button>
                        <input class="form-control  p-3 ps-5" type="search" id="q" name="q" placeholder="Buscador" aria-label="Buscador">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php 
        if(empty($maquinasPaginado)){
            echo '  <section class="py-5 py-lg-6">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 d-flex align-items-center justify-content-center text-center py-6">        
                                    <img src="'.BASE_PATH.'/img/lupa.svg" alt="Amplia Experiencia" title="Amplia Experiencias" class="position-absolute">
                                    <h2 class="z-1">
                                        Lo sentimos.<br>
                                        No encontramos lo que buscabas.
                                    </h2>
                                </div>
                            </div>        
                        </div>
                    </section>';
        }
        else{
            if(is_array($maquinasPaginado)){                

                $ultimaPagina = ceil(count($maquinas) / PAGINATION_NUMBER);

                echo '  <section class="pt-5 pt-lg-6 '.(($ultimaPagina > 1) ? ("") : ("py-5")).'">
                            <div class="container">
                                <h2>Equipos ('.count($maquinas).')</h2>';
                $i = 0;
                foreach($maquinasPaginado as $maquina){

                    if(!empty($i)){
                        echo '<hr style="color: #D0D0D0">';
                    }

                    echo '  <div class="row py-4">
                                <div class="col-12 col-lg-3 mb-5 mb-lg-0">
                                    <div class="h-100 bg-white overflow-hidden rounded-2 d-flex align-items-center">
                                        <img src="'.BASE_PATH.'/img/'.$paginaMaquina['slug_pagina'].'/'.$maquina['slug_maquina'].'/'.$maquina['foto_grande_maquina'].'" class="img-fluid w-100">
                                    </div>                                    
                                </div>
                                <div class="col-12 col-lg-9">
                                    <h2 class="mb-4">'.$maquina["titulo_maquina"].'</h2>
                                    '.$maquina["descripcion_maquina"].'
                                    <a href="'.BASE_PATH.'/'.$paginaMaquina['slug_pagina'].'/'.$maquina['slug_maquina'].'" class="btn btn-ver-mas" type="submit"><strong>Ver Más </strong><img src="'.BASE_PATH.'/img/arrow.svg"></a>
                                </div>
                            </div>';
                    $i++;
                }

                echo '      </div>
                        </section>';

                if($ultimaPagina > 1){
                    echo '  <section class="pt-5 pt-lg-6 py-5">
                                <div class="container">
                                    <div class="row">
                                        <nav>
                                            <ul class="pagination">';

                                            if($page != 1){
                                                echo '  <li class="page-item previous">
                                                            <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page-1).'" aria-label="Previous">
                                                                <img src="'.BASE_PATH.'/img/arrow.svg" alt="Anterior" style="width: 20px; height: auto; transform: rotate(180deg);">
                                                                <span class="sr-only">Anterior</span>
                                                            </a>
                                                        </li>';
                                            }
                                                

                    echo '                      <li class="page-item">
                                                    <a class="page-link '.(($page == 1) ? ("selected") : ("")).'" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page=1">1</a>
                                                </li>';

                                            if(($page - 1) > 2){
                                                echo '  <li class="page-item">
                                                        <a class="page-link">...</a>
                                                        </li>';
                                            }

                                            if($page == 1){

                                                if(($page + 1) < $ultimaPagina){
                                                    echo '  <li class="page-item">
                                                                <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page+1).'">'.($page + 1).'</a>
                                                            </li>';
                                                }
                                                
                                                if(($page + 2) < $ultimaPagina){
                                                    echo '  <li class="page-item">
                                                                <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page+2).'">'.($page + 2).'</a>
                                                            </li>';
                                                }
                                            }
                                            elseif($page == $ultimaPagina){
                                                if(($page - 2) > 1){
                                                    echo '  <li class="page-item">
                                                                <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page-2).'">'.($page - 2).'</a>
                                                            </li>';
                                                }
                                                
                                                if(($page - 1) > 1){
                                                    echo '  <li class="page-item">
                                                                <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page-1).'">'.($page - 1).'</a>
                                                            </li>';
                                                }

                                            }
                                            else{
                                                if(($page - 1) > 1){
                                                    echo '  <li class="page-item">
                                                                <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page-1).'">'.($page - 1).'</a>
                                                            </li>';
                                                }

                                                echo '  <li class="page-item">
                                                                <a class="page-link selected" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page).'">'.($page).'</a>
                                                            </li>';

                                                if(($page + 1) < $ultimaPagina){
                                                    echo '  <li class="page-item">
                                                                <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page+1).'">'.($page + 1).'</a>
                                                            </li>';
                                                }
                                            }                                        

                                            if(($page + 1) < ($ultimaPagina - 1)){                                            
                                                echo '  <li class="page-item">                                                        
                                                        <a class="page-link">...</a>
                                                        </li>';
                                            }

                    echo '                      <li class="page-item">
                                                    <a class="page-link '.(($page == $ultimaPagina) ? ("selected") : ("")).'" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($ultimaPagina).'">'.$ultimaPagina.'</a>
                                                </li>';

                                            if($page != $ultimaPagina){
                                                echo '  <li class="page-item next">
                                                            <a class="page-link" href="'.BASE_PATH.'/'.$pagina["slug_pagina"].'?q='.$busqueda.'&page='.($page+1).'" aria-label="Next">
                                                                <img src="'.BASE_PATH.'/img/arrow.svg" alt="Siguiente" style="width: 20px; height: auto;">
                                                                <span class="sr-only">Siguiente</span>
                                                            </a>
                                                        </li>';
                                            }    
                                                
                    echo '                  </ul>
                                        </nav>
                                    </div>
                                </div>
                            </section>';
                }                
            }
        }

    ?>   
</main>