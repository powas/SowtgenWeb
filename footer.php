    <footer class="footer mt-auto py-3 bg-dark text-bg-dark">
        <div class="container">
            <div class="row my-4">
                <div class="col-xxl-3">
                    <img src="<?=BASE_PATH?>/img/sowtgen-logo-blanco.svg" alt="SOWTGEN" title="SOWTGEN Logo" class="max-width-100per mb-4">
                </div>
                <div class="col-xxl-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <h6>Ingeriería y Obras</h6>
                            <ul class="navbar-nav mb-3 mb-lg-0">
                                <?php 
                                    $footer_ingenierias = cargarIngenierias();
                                    if(!empty($footer_ingenierias)){
                                        if(is_array($footer_ingenierias)){
                                            foreach($footer_ingenierias as $footer_ingenieria){
                                                echo '  <li class="nav-item">
                                                            <a class="nav-link" href="'.BASE_PATH.'/ingenieria-y-obras/'.$footer_ingenieria['slug_ingenieria'].'">'.$footer_ingenieria['titulo_ingenieria'].'</a>
                                                        </li>';
                                            }
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6>Process Solutions</h6>
                            <ul class="navbar-nav mb-3 mb-lg-0">
                                <?php 
                                    $footer_process_solutions = cargarProcessSolutions();
                                    if(!empty($footer_process_solutions)){
                                        if(is_array($footer_process_solutions)){
                                            foreach($footer_process_solutions as $footer_process_solution){
                                                echo '  <li class="nav-item">
                                                            <a class="nav-link" href="'.BASE_PATH.'/process-solutions/'.$footer_process_solution['slug_process_solution'].'">'.$footer_process_solution['titulo_process_solution'].'</a>
                                                        </li>';
                                            }
                                        }
                                    }
                                ?>
                        </div>                        
                        <div class="col-md-6 col-lg-3">
                            <h6>Mercados</h6>
                            <ul class="navbar-nav mb-3 mb-lg-0">
                                <?php 
                                    $footer_mercados = cargarMercados();
                                    if(!empty($footer_mercados)){
                                        if(is_array($footer_mercados)){
                                            foreach($footer_mercados as $footer_mercado){
                                                echo '  <li class="nav-item">
                                                            <a class="nav-link" href="'.BASE_PATH.'/mercados/'.$footer_mercado['slug_mercado'].'">'.$footer_mercado['titulo_mercado'].'</a>
                                                        </li>';
                                            }
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <h6>Contacto</h6>
                            <ul class="navbar-nav mb-3 mb-lg-0">
                                <li class="nav-item mb-2">
                                    <a class="nav-link" href="mailto:info@sowtgen.com"><i class="las la-envelope"></i>info@sowtgen.com</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link" href="tel:+5491154580776"><i class="las la-phone"></i>+54 911 5458 0776</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a class="nav-link" href="#"><i class="las la-map-marker"></i>Parera 15, 1° piso | CABA</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col text-center"><small>© <?php echo date("Y"); ?> Copyright Sowtgen - Todos los derechos reservados. Realizado por <strong>Kyra</strong></small></div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?=BASE_PATH?>/js/main.js"></script>
</body>
</html>