<?php
$title = 'Productos';
$description = 'Description';
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
  <section class="bg-primary">
    <div class="container position-relative z-1 min-height-700px d-flex align-items-center">
      <div class="row align-items-center">
        <div class="col-xl-6 py-5 text-white">
          <h1>
            <img src="/img/sowtgen-elements-logo-blanco.svg" alt="SOWTGEN Elements" title="SOWTGEN Elements Logo">
          </h1>
          <p class="lead">Acá sería conveniente tener un breve texto introductorio que hable sobre que soluciones propone Sowtgen para los distintos tipos de mercados.</p>
        </div>
        <div class="col-xl-6 pb-5 pb-xl-0">
          <img src="/img/process-solutions-hero.png" alt="SOWTGEN" title="SOWTGEN" class="img-fluid">
        </div>
      </div>
    </div>
    <div class="container-fluid fullheight g-0">
      <div class="row">
        <div class="col-xl-5 ms-auto" style="background-image: url(/img/ingenieria-y-obras-1200x800.jpg);background-size:cover;background-position:center;">
        </div>
      </div>
    </div>
  </section>
  <section class="py-5 py-lg-6">
    <div class="container">
      <div class="row mb-5">
        <div class="col">
          <h2><?php echo $title; ?></h2>
          <p>Acá sería conveniente tener un breve texto introductorio que hable sobre los productos que puede ofrecer Sowtgen.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3">
          <div id="filters-wrapper" class="p-3">
            <div id="applied-filters m-3">
              <button type="button" class="btn btn-outline-secondary rounded-pill mb-2 filter-btn">Mostrar todo</button>
              <button type="button" class="btn btn-outline-secondary rounded-pill mb-2 filter-btn">Mostrar todo</button>
            </div>
            <div id="filters-box">
              <div id="filters">
                <div id="filterOne">
                  <div class="accordion">
                    <div class="accordion-item">
                      <h5 class="accordion-header mb-0" id="headingFilterOne">
                          <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFilterOne" aria-expanded="true" aria-controls="collapseFilterOne">
                            Categorías
                          </button>
                      </h5>
                      <div id="collapseFilterOne" class="accordion-collapse collapse show" aria-labelledby="headingFilterOne" data-parent="#filterOne">
                        <div class="accordion-body">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Válvulas
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            Bombas
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                              Mostrar todo
                            </label>
                          </div>                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filterTwo">
                  <div class="accordion">
                    <h5 class="accordion-header mb-0" id="headingFilterTwo">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilterTwo" aria-expanded="true" aria-controls="collapseFilterTwo">
                        Tipo
                      </button>
                    </h5>
                    <div id="collapseFilterTwo" class="accordion-collapse collapse" aria-labelledby="headingFilterTwo" data-parent="#filterTwo">
                      <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filterThree">
                  <div class="accordion">
                    <h5 class="accordion-header mb-0" id="headingFilterThree">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilterThree" aria-expanded="false" aria-controls="collapseFilterThree">
                        Saga
                      </button>
                    </h5>
                    <div id="collapseFilterThree" class="accordion-collapse collapse" aria-labelledby="headingFilterThree" data-parent="#filterThree">
                      <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filterFour">
                  <div class="accordion">
                    <h5 class="accordion-header mb-0" id="headingFilterFour">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilterFour" aria-expanded="true" aria-controls="collapseFilterFour">
                        Marca
                      </button>
                    </h5>
                    <div id="collapseFilterFour" class="accordion-collapse collapse" aria-labelledby="headingFilterFour" data-parent="#filterFour">
                      <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filterFive">
                  <div class="accordion">
                    <h5 class="accordion-header mb-0" id="headingFilterFive">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilterFive" aria-expanded="true" aria-controls="collapseFilterFive">
                        Process Solution
                      </button>
                    </h5>
                    <div id="collapseFilterFive" class="accordion-collapse collapse" aria-labelledby="headingFilterFive" data-parent="#filterFive">
                      <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filterSix">
                  <div class="accordion">
                    <h5 class="accordion-header mb-0" id="headingFilterSix">
                      <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFilterSix" aria-expanded="true" aria-controls="collapseFilterSix">
                        Industria
                      </button>
                    </h5>
                    <div id="collapseFilterSix" class="accordion-collapse collapse" aria-labelledby="headingFilterSix" data-parent="#filterSix">
                      <div class="accordion-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filters-bottom" class="d-xl-none">
                  <a class="close btn btn-outline-primary me-3">Cerrar</a>
                  <a class="btn btn-primary">Aplicar</a>								
							  </div>
              </div>
            </div>
          </div>
          <a class="btn-mobile-filters btn btn-primary d-xl-none m-3">Filtrar</a>
        </div>
        <div class="col-xl-9">
          <div class="row gy-4">
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/pasteurizadores/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Pasteurizadores" title="Pasteurizadores" class="img-fluid">
                  <h6 class="m-3">Pasteurizadores</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/disolutores-Mixers" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Disolutores / Mixers" title="Disolutores / Mixers" class="img-fluid">
                  <h6 class="m-3">Disolutores / Mixers</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/mezcladores-continuos/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Mezcladores continuos" title="Mezcladores continuos" class="img-fluid">
                  <h6 class="m-3">Mezcladores continuos</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/carbonatadores/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Carbonatadores" title="Carbonatadores" class="img-fluid">
                  <h6 class="m-3">Carbonatadores</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/tanques-y-reactores/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Tanques y reactores" title="Tanques y reactores" class="img-fluid">
                  <h6 class="m-3">Tanques y reactores</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/cluster-de-valvulas/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Cluster de Válvulas" title="Cluster de Válvulas" class="img-fluid">
                  <h6 class="m-3">Cluster de Válvulas</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/Unidades-cip/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Unidades CIP" title="Unidades CIP" class="img-fluid">
                  <h6 class="m-3">Unidades CIP</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/generador-de-agua-caliente/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Generador de agua caliente" title="Generador de agua caliente" class="img-fluid">
                  <h6 class="m-3">Generador de agua caliente</h6>
                </a>
            </div>
            <div class="col-6 col-md-4">
                <a href="/process-solutions/liquidos/process-automation/" class="white-box">
                  <img src="/img/montajes-electromecanicos-600x400.jpg" alt="Process Automation" title="Process Automation" class="img-fluid">
                  <h6 class="m-3">Process Automation</h6>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</main>