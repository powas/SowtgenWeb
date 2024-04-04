<!doctype html>
<html lang="es" class="h-100" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $title; ?> - Sowtgen</title>
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;700&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="/img/sowtgen-logo-blanco.svg" alt="SOWTGEN" title="SOWTGEN Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto mb-2 mb-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/ingenieria-y-obras" data-bs-toggle="dropdown" aria-expanded="false">Ingeniería y Obras</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/ingenieria-y-obras/ingenieria">Ingeniería</a></li>
                <li><a class="dropdown-item" href="/ingenieria-y-obras/management">Management</a></li>
                <li><a class="dropdown-item" href="/ingenieria-y-obras/fabricacion">Fabricación</a></li>
                <li><a class="dropdown-item" href="/ingenieria-y-obras/montajes-electromecanicos">Montajes Electromecanicos</a></li>
                <li><a class="dropdown-item" href="/ingenieria-y-obras/automatizacion-y-control">Automatización y Control</a></li>
                <li><a class="dropdown-item" href="/ingenieria-y-obras/mantenimiento">Mantenimiento</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/process-solutions" data-bs-toggle="dropdown"  aria-expanded="false">Process Solutions</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/process-solutions/liguidos">Líquidos</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/equipamiento" data-bs-toggle="dropdown"  aria-expanded="false">Equipamiento</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/mercados" data-bs-toggle="dropdown" aria-expanded="false">Mercados</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/mercados/frutas-y-verduras/">Frutas y verduras</a></li>
                <li><a class="dropdown-item" href="/mercados/bebidas">Bebidas</a></li>
                <li><a class="dropdown-item" href="/mercados/salsas-y-dulces">Salsas y dulces</a></li>
                <li><a class="dropdown-item" href="/mercados/???/">???</a></li>
                <li><a class="dropdown-item" href="/mercados/ingredientes">Ingredientes</a></li>
                <li><a class="dropdown-item" href="/mercados/lacteos">Lácteos</a></li>
                <li><a class="dropdown-item" href="/mercados/detergentes-y-productos-de-limpieza">Detergentes y productos de limpieza</a></li>
                <li><a class="dropdown-item" href="/mercados/home-care">Home Care</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/proyectos" data-bs-toggle="dropdown"  aria-expanded="false">Proyectos</a>
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