<?php
//REVISAR PARA QUE NO ESTE HARDCODEADO!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$pagina = cargarPagina('');

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
                        <h1 class="pb-6">Resultados de búsqueda</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="mt-n5">
                    <div class="bg-white rounded-1 d-flex flex-column p-3">
                        <form class="d-flex" role="search">
                            <button class="btn button-search" type="submit"><i class="las la-search"></i></button>
                            <input class="form-control-borde" type="search" placeholder="Buscador" aria-label="Buscador">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pt-lg-6">
        <div class="container">
            <div class="row">
                <div class="bg-image text-center shadow-1-strong rounded py-6" style="background-image: url('http://localhost/SowtgenWeb/img/buscador.png'); background-repeat: no-repeat; background-position: center;">
                    <h2 class="py-6 my-5">Lo sentimos.<br>
                    No encontramos lo que buscabas.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pt-lg-6">
        <div class="container">
        <h1>Process Solutions (8)</h1>
            <div class="row py-4">
                <div class="col-3">
                    <img src="<?=BASE_PATH?>/img/resultado.png" class="img-fluid">
                </div>
                <div class="col-9 bg-image text-left shadow-1-strong rounded ">
                    <h2 class="mb-4">Mezcladores Líquido - Líquido</h2>
                    <p>Los equipos pasteurizadores <strong>KommtPaster™</strong> están diseñados para aplicaciones que requieran una gran producción con un bajo costo inicial y operativo. <br><br>
                    Poseen elementos con las más altas tecnologías que les permiten combinar diseño y fabricación controlada que garantice un producto que cumpla con los requerimientos asépticos. </p>
                    <button class="btn btn-ver-mas" type="submit"><strong>Ver Más </strong><img src="<?=BASE_PATH?>/img/arrow.svg"></button>
                </div>
            </div>
            <hr style="color: #D0D0D0">
            <div class="row py-4">
                <div class="col-3">
                    <img src="<?=BASE_PATH?>/img/resultado.png" class="img-fluid">
                </div>
                <div class="col-9 bg-image text-left shadow-1-strong rounded ">
                    <h2 class="mb-4">Mezcladores Líquido - Líquido</h2>
                    <p>Los equipos pasteurizadores <strong>KommtPaster™</strong> están diseñados para aplicaciones que requieran una gran producción con un bajo costo inicial y operativo. <br><br>
                    Poseen elementos con las más altas tecnologías que les permiten combinar diseño y fabricación controlada que garantice un producto que cumpla con los requerimientos asépticos. </p>
                    <button class="btn btn-ver-mas" type="submit"><strong>Ver Más </strong><img src="<?=BASE_PATH?>/img/arrow.svg"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pt-lg-6">
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="pt-5 pt-lg-6">
        <div class="container">
            <div class="row">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                            </li>
                            <li class="page-item no-selected"><a class="page-link" href="#">1</a></li>
                            <li class="page-item no-selected"><a class="page-link" href="#">2</a></li>
                            <li class="page-item no-selected"><a class="page-link" href="#">3</a></li>
                            <li class="page-item no-selected">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <section class="pb-6">
        <div class="container">
            <div class="row">
                <div class="d-flex flex-column p-5 col-8">
                    <h1>Proyectos</h1>
                    <p>Acá sería conveniente tener un breve texto introductorio que hable sobre los productos que puede ofrecer Sowtgen.</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row gy-4">        
                <div class="col-6 col-md-4 col-lg-4 px-5">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/management" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-1.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 px-5">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/fabricacion" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-2.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 px-5">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-3.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3">Nuevo concentrador de mosto</h6>
                    </a>
                </div>
                 <div class="col-6 col-md-4 col-lg-4 px-5">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/management" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-4.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 px-5">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/fabricacion" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-5.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3">Nuevo concentrador de mosto</h6>
                    </a>
                </div>  
                <div class="col-6 col-md-4 col-lg-4 px-5">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-6.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3">Nuevo concentrador de mosto</h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-4 px-5">
                    <a href="http://localhost/SowtgenWeb/ingenieria-y-obras/montajes-electromecanicos" class="proyectos">
                        <img src="http://localhost/SowtgenWeb/img/proyectos/imagen-7.jpg" alt="" title="" class="img-fluid">
                        <h6 class="p-3">Nuevo concentrador de mosto</h6>
                    </a>
                </div> 
            </div>
        </div>
    </section>
</main>