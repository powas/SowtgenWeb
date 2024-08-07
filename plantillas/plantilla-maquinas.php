<?php
//REVISAR PARA QUE NO ESTE HARDCODEADO!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$pagina = cargarPagina('equipos');
$maquina = cargarMaquina($param);

if(empty($maquina)){
  // Manejar la ruta no encontrada  
  header('Location: error');
}

$title = $maquina['titulo_maquina'];
$description = $maquina['descripcion_corta_maquina'];

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
  <section>
    <div class="bg-color5 contentheight">
      <div class="container">
        <div class="row">
          <div class="col-xl-7 ms-auto">
          <img src="<?=BASE_PATH?>/img/pasteurizadores-1200x800.png" alt="Pasteurizadores" title="Pasteurizadores" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="container position-relative">
      <div class="row">
        <div class="col-xl-6 pt-xl-5 mt-n5 mt-xl-0">
            <div class="bg-white rounded-1 min-height-700px d-flex flex-column p-5">
                <h1><?php echo $title; ?></h1>
                <?=$maquina['descripcion_maquina']?>
                <div class="mt-auto">
                  <a href="#" type="button" class="btn btn-primary mt-3 me-5">Descargar brochure <i class="las la-download"></i></a>
                  <a href="#" type="button" class="btn btn-outline-primary mt-3">Solicitar asesoramiento</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-5 pt-lg-6">
    <div class="container">
        <div class="row">
            <div class="col-lg mb-5 mb-lg-0">
                <div class="bg-color3 rounded-1 h-100 p-4 ">
                    <h2>Características Técnicas</h2>
                    <ul>
                        <li>Intercambiador de calor y separador dentro de una misma carcasa</li>
                        <li>Tecnología de Casco y Placas completamente soldadas</li>
                        <li>No se requiere cañería externa</li>
                        <li>Separador de alta eficiencia</li>
                        <li>Baja carga de refrigerante</li>
                        <li>Placas circulares</li>
                        <li>Apto para amoníaco y otros refrigerantes</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg">
                <div class="bg-color7 rounded-1 h-100 p-4">
                    <h2>Cualidades</h2>
                    <ul>
                        <li>Intercambiador de calor y separador dentro de una misma carcasa</li>
                        <li>Tecnología de Casco y Placas completamente soldadas</li>
                        <li>No se requiere cañería externa</li>
                        <li>Separador de alta eficiencia</li>
                        <li>Baja carga de refrigerante</li>
                        <li>Placas circulares</li>
                        <li>Apto para amoníaco y otros refrigerantes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
    <div class="row">
        <div class="col">
          <h2 class="mb-3">Aplicaciones en la industria</h2>
          <select class="selectpicker mb-4">
            <option>Mustard</option>
            <option>Ketchup</option>
            <option>Barbecue</option>
        </select>
        </div>
      </div>
      <div class="row gy-4">
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/bedidas/gaseosas/" class="white-box">
              <img src="/img/icono-gaseosas.svg" alt="Gaseosas" title="Gaseosas" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Gaseosas</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/bedidas/jugos-y-aguas-saborizadas/" class="white-box">
              <img src="/img/icono-jugos-y-aguas-saborizadas.svg" alt="Jugos y aguas saborizadas" title="Jugos y aguas saborizadas" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Jugos y aguas saborizadas</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/bedidas/cervezas/" class="white-box">
              <img src="/img/icono-cervezas.svg" alt="Cervezas" title="Cervezas" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Cervezas</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/bedidas/bebidas-espirituosas/" class="white-box">
              <img src="/img/icono-bebidas-espirituosas.svg" alt="Bebidas espirituosas" title="Bebidas espirituosas" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Bebidas espirituosas</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/salsas-y-dulces/aderezos/" class="white-box">
              <img src="/img/icono-aderezos.svg" alt="Aderezos" title="Aderezos" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Aderezos</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/salsas-y-dulces/salsas/" class="white-box">
              <img src="/img/icono-salsas.svg" alt="Salsas" title="Salsas" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Salsas</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/salsas-y-dulces/dulces/" class="white-box">
              <img src="/img/icono-dulces.svg" alt="Dulces" title="Dulces" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Dulces</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/lacteos/leche/" class="white-box">
              <img src="/img/icono-leche.svg" alt="Leche" title="Leche" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Leche</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/lacteos/yogurt/" class="white-box">
              <img src="/img/icono-yogurt.svg" alt="Yogurt" title="Yogurt" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Yogurt</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/lacteos/crema/" class="white-box">
              <img src="/img/icono-crema.svg" alt="Crema" title="Crema" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Crema</h6>
            </a>
        </div>
        <div class="col-12 col-lg-6 col-xxl-3">
            <a href="/mercados/lacteos/postres/" class="white-box">
              <img src="/img/icono-postres.svg" alt="Postres" title="Postres" class="my-3 ms-3">
              <h6 class="d-inline-block m-3">Postres</h6>
            </a>
        </div>
      </div>
    </div>
  </section>
</main>