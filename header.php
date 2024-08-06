<!doctype html>
<html lang="es" class="h-100" data-bs-theme="auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $description; ?>">
  <title><?php echo $title; ?> - Sowtgen</title>
  <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
  <link rel="stylesheet" href="<?=BASE_PATH?>/css/bootstrap-negative-margins.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?=BASE_PATH?>/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="<?=BASE_PATH?>/"><img src="<?=BASE_PATH?>/img/sowtgen-logo-blanco.svg" alt="SOWTGEN" title="SOWTGEN Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto mb-2 mb-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?=BASE_PATH?>/ingenieria-y-obras" data-bs-toggle="dropdown" aria-expanded="false">Ingeniería y Obras</a>
              <ul class="dropdown-menu">
                <?php 
                  $header_ingenierias = cargarIngenierias();
                  if(!empty($header_ingenierias)){
                    if(is_array($header_ingenierias)){
                      foreach($header_ingenierias as $header_ingenieria){
                        echo '<li><a class="dropdown-item" href="'.BASE_PATH.'/ingenieria-y-obras/'.$header_ingenieria['slug_ingenieria'].'">'.$header_ingenieria['titulo_ingenieria'].'</a></li>';
                      }
                    }
                  }
                ?>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?=BASE_PATH?>/process-solutions" data-bs-toggle="dropdown"  aria-expanded="false">Process Solutions</a>
              <ul class="dropdown-menu">
                <?php 
                  $header_process_solutions = cargarProcessSolutions();
                  if(!empty($header_process_solutions)){
                    if(is_array($header_process_solutions)){
                      foreach($header_process_solutions as $header_process_solution){
                        echo '<li><a class="dropdown-item" href="'.BASE_PATH.'/process-solutions/'.$header_process_solution['slug_process_solution'].'">'.$header_process_solution['titulo_process_solution'].'</a></li>';
                      }
                    }
                  }
                ?>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?=BASE_PATH?>/equipamiento" data-bs-toggle="dropdown"  aria-expanded="false">Equipamiento</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?=BASE_PATH?>/mercados" data-bs-toggle="dropdown" aria-expanded="false">Mercados</a>
              <ul class="dropdown-menu">
                <?php 
                  $header_mercados = cargarMercados();
                  if(!empty($header_mercados)){
                    if(is_array($header_mercados)){
                      foreach($header_mercados as $header_mercado){
                        echo '<li><a class="dropdown-item" href="'.BASE_PATH.'/mercados/'.$header_mercado['slug_mercado'].'">'.$header_mercado['titulo_mercado'].'</a></li>';
                      }
                    }
                  }
                ?>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?=BASE_PATH?>/proyectos" data-bs-toggle="dropdown"  aria-expanded="false">Proyectos</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control" type="search" placeholder="Buscador" aria-label="Buscador">
            <button class="btn btn-outline-success" type="submit"><i class="las la-search"></i></button>
          </form>
        </div>
      </div>
    </nav>
  </header>