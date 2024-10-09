<?php
//REVISAR PARA QUE NO ESTE HARDCODEADO!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$pagina = cargarPagina('');

$title = $pagina['titulo_pagina'];
$description = $pagina['descripcion_pagina'];

include_once 'header.php';
?>

<main class="flex-shrink-0">
    <section class="pb-6">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column pt-5 px-4 pb-3 col-8">
                    <h1>Proyectos</h1>
                    <p class="pb-0">Acá sería conveniente tener un breve texto introductorio que hable sobre los productos que puede ofrecer Sowtgen.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gy-4">        
                <div class="col-6 col-md-4 col-lg-4 ps-4 pe-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/management" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-1.jpg" alt="" title="" class="img-fluid" style="width: -webkit-fill-available;">
                        <h6 class="p-3 mb-0">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 ps-4 pe-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/fabricacion" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-2.jpg" alt="" title="" class="img-fluid" style="width: -webkit-fill-available;">
                        <h6 class="p-3 mb-0">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 ps-4 pe-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-3.jpg" alt="" title="" class="img-fluid" style="width: -webkit-fill-available;">
                        <h6 class="p-3 mb-0">Nuevo concentrador de mosto</h6>
                    </a>
                </div>
                 <div class="col-6 col-md-4 col-lg-4 ps-4 pe-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/management" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-4.jpg" alt="" title="" class="img-fluid" style="width: -webkit-fill-available;">
                        <h6 class="p-3 mb-0">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 ps-4 pe-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/fabricacion" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-5.jpg" alt="" title="" class="img-fluid" style="width: -webkit-fill-available;">
                        <h6 class="p-3 mb-0">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 ps-4 pe-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-6.jpg" alt="" title="" class="img-fluid" style="width: -webkit-fill-available;">
                        <h6 class="p-3 mb-0">Nuevo concentrador de mosto</h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-4 ps-4 pe-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-7.jpg" alt="" title="" class="img-fluid" style="width: -webkit-fill-available;">
                        <h6 class="p-3 mb-0">Nuevo concentrador de mosto</h6>
                    </a>
                </div> 
            </div>
        </div>
    </section>
</main>