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
                <div class="col-12 col-sm-6 col-md-4 ps-4 pe-3 pb-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/management" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/1.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3 mb-0 text-responsive">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-12 col-sm-6 col-md-4 ps-4 pe-3 pb-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/fabricacion" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/2.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3 mb-0 text-responsive">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-12 col-sm-6 col-md-4 ps-4 pe-3 pb-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/3.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3 mb-0 text-responsive">Nuevo concentrador de mosto</h6>
                    </a>
                </div>
                 <div class="col-12 col-sm-6 col-md-4 ps-4 pe-3 pb-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/management" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/4.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3 mb-0 text-responsive">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-12 col-sm-6 col-md-4 ps-4 pe-3 pb-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/fabricacion" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/5.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3 mb-0 text-responsive">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-12 col-sm-6 col-md-4 ps-4 pe-3 pb-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/6.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3 mb-0 text-responsive">Nuevo concentrador de mosto</h6>
                    </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 ps-4 pe-3 pb-3">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/7.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3 mb-0 text-responsive">Nuevo concentrador de mosto</h6>
                    </a>
                </div> 
            </div>
        </div>
    </section>
</main>