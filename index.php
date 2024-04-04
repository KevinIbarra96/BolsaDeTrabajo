<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Title -->
    <title>MERAKI: Pasión & Entrega</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/Ico.PNG">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,700">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">

    <!-- CSS Implementing Plugins -->
    <script src="https://kit.fontawesome.com/fb67b6ad9e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
    <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">
    <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">

    <!-- CSS Template -->
    <link rel="stylesheet" href="assets/css/styles.op-business.css">
    <link rel="stylesheet" href="assets/css/unify.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>

  <body>

<?php

include('includes/bolsa_trabajo_logica.php');

$Ofertas_recientes = GetRecentOffers();
$Emp_Logo = GetEmpLogIndex();

?>


    <main>
      <!-- Header v1 -->
      <header id="js-header" class="u-header u-header--sticky-top u-header--change-appearance"
              data-header-fix-moment="100">
        <div class="u-header__section g-theme-bg-blue-dark-v1-opacity-0_9 g-transition-0_3 g-py-25"
             data-header-fix-moment-exclude="g-py-25"
             data-header-fix-moment-classes="g-py-20">
          <nav class="navbar navbar-expand-lg py-0">
            <div class="container g-pos-rel">
              <!-- Logo -->
              <a href="#" class="js-go-to navbar-brand u-header__logo"
                 data-type="static">
                <img class="u-header__logo-img u-header__logo-img--main mainlogo" width="150" src="assets/img/Logotipo-Meraki.png" alt="Image Description">
              </a>
              <!-- End Logo -->

              <!-- Navigation -->
              <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar" data-mobile-scroll-hide="true">
                <ul id="js-scroll-nav" class="navbar-nav text-uppercase g-letter-spacing-2 g-font-size-11 g-pt-20 g-pt-0--lg ml-auto">
                  <li class="nav-item g-mr-10--lg g-mr-15--xl g-mb-7 g-mb-0--lg active">
                    <a href="#home" class="nav-link g-color-white p-0">inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="#quienes" class="nav-link g-color-white p-0">¿Quiénes Somos?</a>
                  </li>
                  <li class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="#servicios" class="nav-link g-color-white p-0">Servicios</a>
                  </li>
                  <li class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="#Ofertas" class="nav-link g-color-white p-0">Ofertas</a>
                  </li>
                  <li class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="#howWeWork" class="nav-link g-color-white p-0">¿Cómo trabajamos?</a>
                  </li>
                  <li class="nav-item g-ml-10--lg g-ml-15--xl">
                    <a href="#contacto" class="nav-link g-color-white p-0">Contacto</a>
                  </li>
                  <li class="nav-item g-mx-10--lg g-mx-15--xl g-mb-7 g-mb-0--lg">
                    <a href="Log/logueo.php" class="nav-link g-color-white p-0">Bolsa de trabajo</a>
                  </li>
                </ul>
              </div>
              <!-- End Navigation -->

              <!-- Responsive Toggle Button -->
              <button class="navbar-toggler btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-10 g-right-0" type="button"
                      aria-label="Toggle navigation"
                      aria-expanded="false"
                      aria-controls="navBar"
                      data-toggle="collapse"
                      data-target="#navBar">
                <span class="hamburger hamburger--slider">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </span>
              </button>
              <!-- End Responsive Toggle Button -->
            </div>
          </nav>
        </div>
      </header>
      <!-- End Header v1 -->

      <!-- Promo -->
      <section id="home" class="g-pos-rel">
        <div class="js-carousel g-overflow-hidden g-max-height-100vh"
             data-autoplay="true"
             data-infinite="true"
             data-fade="true"
             data-speed="5000">
          <div class="js-slide g-bg-img-hero g-height-100vh g-min-height-500--md" style="background-image: url(assets/img/imgc1.jpg);"></div>

          <div class="js-slide g-bg-img-hero g-height-100vh g-min-height-500--md" style="background-image: url(assets/img/imgc2.jpg);"></div>
        </div>

        <div class="g-absolute-centered w-100">
          <div class="container text-center g-width-780">
            <div class="info-v3-4 g-theme-bg-blue-dark-v1-opacity-0_9 g-pa-40 g-pa-60--md">
              <div class="g-pos-rel g-z-index-3">
                <h3 class="h3 text-uppercase g-letter-spacing-3 g-font-size-default g-color-white g-mb-10">Nosotros somos</h3>
                <h2 class="h2 text-uppercase g-color-white g-letter-spacing-5 g-font-weight-400 g-font-size-25 g-font-size-35--md g-mb-20">MERAKI</h2>
                <p class="g-line-height-1_8 g-letter-spacing-3 g-color-white g-mb-20">
                Desarrollo Organizacional, Capital Humano
                  <br> Desarrollo Personal y Wellnes</p>
               <!-- <a href="#" class="btn text-uppercase u-btn-outline-white rounded-0">Learn More</a>-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Promo -->

      <!-- Section Content -->
      <section id="quienes" class="container-fluid px-0">
        <div class="row no-gutters">
          <div class="g-hidden-md-down col-lg-4 g-bg-img-hero" style="background-image: url(assets/img/imgt2.jpg);"></div>

          <div class="col-md-6 col-lg-4 g-flex-centered g-theme-bg-blue-dark-v1">
            <div class="text-center g-color-gray-light-v2 g-pa-30">
              <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
                <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-2 g-color-primary g-mb-20">Acerca de nosotros</br></br></br></br></h4>
                <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-white g-mb-minus-10">¿Quiénes Somos?</h2>
              </div>

              <p class="g-color-gray-light-v2 mb-0">Meraki Capital Humano en Acción, somos una unidad de negocio coformada por especialistas con amplia experiencia como consultores en temas relacionados al Desarrollo Organizacional, Recursos Humanos, Desarrollo Personal y Bienestar laboral . Brindamos el acompañamiento en todo el  proceso para minimizar el impacto de la rortación de personal  o potencializar el talento humano logrando mejores resultados. </p>
            </div>
          </div>
          <div class="g-hidden-md-down col-lg-4 g-bg-img-hero" style="background-image: url(assets/img/inline2.png);"></div>
      
        </div>
      </section>
      <!-- End Section Content -->

      <!-- Section Content -->
      <section id="servicios" class="g-py-6">
       
        <div class="col-md-2 col-lg-12 g-theme-bg-blue-dark-v2">
          <div class="js-carousel g-pb-90"
               data-infinite="true"
               data-slides-show="true"
               data-pagi-classes="u-carousel-indicators-v1 g-absolute-centered--x g-bottom-30">
            <div class="js-slide">
            
              <div class="g-pa-30">
                
                <h3 class="text-uppercase g-font-weight-700 g-font-size-20 g-color-white g-mb-10">
                  Desarrollo Organizacional</h3>
                  
                  <div >
                    <p class="g-color-gray-light-v2"> <img class="float-left w-3 mr-5" src="assets/img/imgt1.jpg" alt="Image description"></p>
                       <ul>
                          <li class="g-color-gray-light-v2">Clima Laboral:</li>                            
                              <p class="g-color-gray-light-v2">Conocer la percepcion de tus colaboradores 
                                respecto al ambiente laboral, nos ayuda a tomar decisiones importantes lo cual 
                                influye en el desempeño y productividad. Nosotros te ayduamos a conocer el sentir de cada
                                  integrante y establecer un plan de acción para mejorarlo. </p>                            
                          <li class="g-color-gray-light-v2">Feefback 360:</li>
                              <p class="g-color-gray-light-v2">
                              Herramienta que nos ayuda a medir de manera objetiva e integral el talento y rendimiento de sus 
                              colaboradores basado en su conducta profesional a traves de sus competencias, rendimiento y productividad.
                              </p>
                          <li class="g-color-gray-light-v2">Desarrollo de Competencias:</li>
                              <p class="g-color-gray-light-v2">
                              Alienados a los objetivos de tu empresa, establecemos metodologias para 
                              potencializar las competencias y habilidades de tu personal, impactando de manera positiva 
                              su desempeño y productividad, asi como la disminución en la rotación y mejorar la calidad 
                              en el servicio al cliente. 
                              </p>
                          <br>
                          <li class="g-color-gray-light-v2">KPI's:</li>
                              <p class="g-color-gray-light-v2">
                              Lo que no se mide no se puede mejorar, es por ello que te ayudamos a establecer 
                              tus indicadores de desempeño, alineados a los objetivos de tu organización, de esta manera podrás tomar decisiones, 
                              medir el impacto de los resultados y medir el cumplimiento de los objetivos. 
                              </p>
                          <li class="g-color-gray-light-v2">Team Building:</li>
                              <p class="g-color-gray-light-v2">
                              A través de diversas actividades alineadas a un objetivo, logramos impactar de manera 
                              positiva en la formación de equipos de alto rendimiento, mejorando las relaciones interpersonales, 
                              fortaleciendo el compromiso de los colaboradores con la organización y mejorando el clima laboral. 
                              </p>
                          </li>
                        </ul>
                  </div>
              </div>
            </div>

            <div class="js-slide">
            
              <div class="g-pa-30">
                
                <h3 class="text-uppercase g-font-weight-700 g-font-size-20 g-color-white g-mb-10">
                 Capital Humano</h3>
                  
                  <div >
                    <p class="g-color-gray-light-v2"> <img class="float-left w-3 mr-5" src="assets/img/imgt3.jpg" alt="Image description">
                    <ul>
                          <li class="g-color-gray-light-v2">Rotacióm de Personal:</li>                            
                              <p class="g-color-gray-light-v2">Encontramos la causa principal de la rotación de personal, 
                                acompañada de un plan de acción para mitigar el impacto de ello, 
                                asegurando bajar el porcentaje de rotación. </p>                            
                          <li class="g-color-gray-light-v2">Reclutamiento:</li>
                              <p class="g-color-gray-light-v2">
                              Encontramos el Talento que estás buscando alineado a tus necesidades y actividades propias de la vacante,
                              asegurando que el candidato sea integro y cumpla todas las competencias necesarias para desempeñar de manera 
                              correcta las actividades propias del puesto a ocupar.
                              </p>
                          <li class="g-color-gray-light-v2">Selección de talento:</li>
                              <p class="g-color-gray-light-v2">
                              A través de diversos filtros, nos aseguramos que los candidatos seleccionados sean los más 
                              apegados a las necesidades reales del puesto, garantizando su integridad y compromiso. 
                              </p>
                          <br><br>
                          <li class="g-color-gray-light-v2">Psicometría</li>
                              <p class="g-color-gray-light-v2">
                              Apoyados en diversas herramientas, medimos la compatibilidad del candidato a la cultura de la organización, 
                              asi como la medicion de sus competencias tecnicas y comportamentales, respaldados siempre por nuestros especialistas.  
                              </p>
                          <li class="g-color-gray-light-v2">Estudios Socioeconomicos:</li>
                              <p class="g-color-gray-light-v2">
                              Nos permiten conocer varios aspectos de los candidatos y ratificar la información brindada por el candidato.  
                              El estudio se lleva a cabo mediante investigaciones de campo con la más absoluta seriedad y discreción,
                              al igual que el manejo de la información resultante. 
                              </p>
                          </li>
                          <li class="g-color-gray-light-v2">Pruebas de Integridad:</li>
                              <p class="g-color-gray-light-v2">
                              Nos ayuda a conocer la base de valores sobre los cuales un candidato se desempeña asi como su honestidad y confiabilidad. 
                              </p>
                          </li>
                        </ul>
                  </div>
              </div>
            </div>

            <div class="js-slide">
            
              <div class="g-pa-30">
                
                <h3 class="text-uppercase g-font-weight-700 g-font-size-20 g-color-white g-mb-10">
                  Desarrollo Personal</h3>
                  
                  <div >
                    <p class="g-color-gr ay-light-v2"> <img class="float-left w-3 mr-5" src="assets/img/imgt3.jpg" alt="Image description"></p>
                    <ul>
                          <li class="g-color-gray-light-v2">Capacitación:</li>
                              <p class="g-color-gray-light-v2">Creamos planes de entrenamiento basadas en tus necesidades y presupuesto. </p>                            
                          <li class="g-color-gray-light-v2">Plan de Desarrollo Integral:</li>
                              <p class="g-color-gray-light-v2">
                              Es un plan personal estructurado en el que, un vez identificada la opción profesional a la que se quiere aspirar,
                               se definen objetivos y metas profesionales a medio y largo plazo, así como las estrategias que permitirán completarlo.
                              </p>
                          <li class="g-color-gray-light-v2">Motivación:</li>
                              <p class="g-color-gray-light-v2">
                              Creamos estrategias para mantener la motivación individual y grupal de los integrantes de tu empresa.
                              </p>
                          <br><br>
                          <li class="g-color-gray-light-v2">Engagement:</li>
                              <p class="g-color-gray-light-v2">
                              Te ayudamos a definir estrategias de implementación desde la inducción para promover el compromiso 
                              e integración de todos tus colaboradores a la empresa.
                              </p>                        
                        </ul>
                  </div>
              </div>
            </div>

            <div class="js-slide">
            
              <div class="g-pa-30">
                
                <h3 class="text-uppercase g-font-weight-700 g-font-size-20 g-color-white g-mb-10">
                  Wellnes</h3>
                  
                  <div >
                    <p class="g-color-gr ay-light-v2"> <img class="float-left w-3 mr-5" src="assets/img/imgt3.jpg" alt="Image description"></p>
                    <ul>
                          <li class="g-color-gray-light-v2">Nom035:</li>
                              <p class="g-color-gray-light-v2">Apoyamos en el cumplimiento ante la STPS identificando, analizando, previniendo y
                                 dando seguimiento los factores de riesgo psicosocial, promoviendo un entorno organizacional favorable.</p>
                          <li class="g-color-gray-light-v2">Asesoría Psicologica:</li>
                              <p class="g-color-gray-light-v2">
                              Cuidar de la salud emocional de tus colaboradores es muy importante, es por eso que te ofrecemos 
                              asesoria psicologica para brindar acompañamiento en situaciones que generen un impacto emocional y 
                              por ende repercuta en el desempeño e integridad de tu personal.
                              </p>
                          <li class="g-color-gray-light-v2">Asesoría Clinica:</li>
                              <p class="g-color-gray-light-v2">
                              Deribado de la NOM035 Te ayudamos a detectar casos de ansiedad, 
                              estrés  y depresión que deben atenderse de manera segura y con toda la confidencialidad requerida,
                               para garantizar un espacio seguro y bienestar de tus colaboradores. 
                              </p>
                          <br><br>                          
                        </ul>
                  </div>
              </div>
            </div>

      </section>
      <!-- End Section Content -->

<!-- Section Content -->
      <section id="Ofertas" class="g-pt-115 g-pb-80">
        <div class="container">
        <header class="text-center g-width-60x--md mx-auto g-mb-50">
          <h2 class="h1 g-color-gray-dark-v1 g-font-weight-300">Ultimas ofertas de trabajo</h2>
          <p class="lead">Puestos recientemente disponibles</p>
        </header>
          <div class="row">
<?php   
  while ($oferta = $Ofertas_recientes->fetch_assoc()) {
?>
          <div class="col-lg-4 g-mb-30 g-mb-0--lg">
            <!-- Recent Jobs -->
            <article class="u-shadow-v11 rounded g-pa-25">
              <h2 class="h4 g-mb-15">
                  <a class="u-link-v5 g-color-gray-dark-v1 g-color-primary--hover" href="Oferta_Empleo.php?id_oferta=<?php echo $oferta['id_oferta']?>"><?php echo $oferta['nombre_oferta']?></a>
                </h2>

              <ul class="list-inline d-flex justify-content-between g-mb-15">
                <li class="list-inline-item g-mr-20">
                  <img class="g-height-25 g-width-25 rounded-circle g-mr-5" src="<?php echo $oferta['Emp_url']?>" alt="img no disponible"> <a class="u-link-v5 g-color-main g-color-primary--hover" href="#"><?php echo $oferta['empresa']; ?></a>
                </li>
                <!--<li class="list-inline-item">
                  <span class="js-rating d-block g-color-primary" data-rating="5"></span>
                </li>-->
              </ul>

              <p class="g-mb-15"><?php echo $oferta['descripcion_oferta'];?></p>
              <ul class="list-unstyled">
                <li class="media g-mb-10">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-wallet g-pos-rel g-top-1 g-mr-5"></i> Salario:
                    </span>
                  <span class="media-body"><?php echo $oferta['salario']; ?></span>
                </li>
                <li class="media g-mb-10">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-calendar g-pos-rel g-top-1 g-mr-5"></i> Día:
                    </span>
                  <span class="media-body"><?php $day=explode("-",$oferta['day']); echo $day[2]."/".$day[1]."/".$day[0]; ?></span>
                </li>
                <li class="media g-mb-10">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-user g-pos-rel g-top-1 g-mr-5"></i> habilidades:
                    </span>
                  <span class="media-body"><?php echo $oferta['habilidades']; ?></span>
                </li>
                <li class="media">
                  <span class="d-block g-color-gray-dark-v5 g-width-110">
                      <i class="icon-location-pin g-pos-rel g-top-1 g-mr-5"></i> Ubicacion:
                    </span>
                  <span class="media-body"><?php echo $oferta['ubicacion_oferta']; ?></span>
                </li>
              </ul>

              <hr class="g-brd-gray-light-v4">

              <ul class="list-inline d-flex justify-content-between mb-0">
                <li class="list-inline-item">
                  <a class="u-tags-v1 g-font-size-12 g-color-main g-brd-around g-brd-gray-light-v3 g-bg-gray-dark-v2--hover g-brd-gray-dark-v2--hover g-color-white--hover rounded g-py-3 g-px-8"><?php echo $oferta['horario']; ?></a>
                </li>
                <li class="list-inline-item">
                  <a href="Oferta_Empleo.php?id_oferta=<?php echo $oferta['id_oferta']?>">Más detalles</a>
                </li>
              </ul>
            </article>
            <br>
            <!-- End Recent Jobs -->
          </div>          
<?php
  } 
?>  
          </div>
        </div>
      </section>
      <!-- End Section Content -->


      <!-- Info Blocks -->
      <section id="howWeWork" class="row no-gutters">
        <!-- Info Image -->
        <div class="g-hidden-md-down col-lg-4 col-xl-5 g-min-height-360 g-bg-img-hero" data-bg-img-src="assets/img/imgd1.jpg"></div>
        <!-- End Info Image -->

        <div class="col-xl-7 col-lg-8 g-theme-bg-blue-dark-v1 g-pt-100 g-pb-80 g-px-15 g-px-40--md">
          <header class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-40">
            <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-2 g-color-primary g-mb-20">¿Cómo Trabajamos?</h4>
            <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-white g-mb-minus-10">Aspectos que tomamos encuenta para una evaluación</h2>
          </header>

          <p class="g-color-white-opacity-0_7 g-mb-65">En Meraki no solo seleccionamos personal
            con las mejores competencias y
            habilidades, nosotros vamos más allá
            buscando en los aspirantes fortalezas que
            aporten un sentido humano, ético y
            honesto. Dando así una mayor confianza y
            transparencia del candidato que se va a
            contratar.
            </p>

          <div class="row align-items-stretch">
            <div class="col-sm-6 g-mb-30">
              <!-- Article -->
              <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-theme-bg-blue-dark-v2 g-transition-0_3 g-pa-20">
                <div class="g-flex-middle-item">
                  <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">Desarrollo Organizacional</h4>
                  <p class="g-color-white-opacity-0_7 mb-0">Creemos firmemente que cuando no hay un buen enfoque del rumbo de la empresa, es dificil alcanzar las metas o ser conciente del camino a seguir  es por es que MERAKI .</p>
                </div>
              </article>
              <!-- End Article -->
            </div>

            <div class="col-sm-6 g-mb-30">
              <!-- Article -->
              <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-theme-bg-blue-dark-v2 g-transition-0_3 g-pa-20">
                <div class="g-flex-middle-item">
                  <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">CAPITAL HUMANO</h4>
                  <p class="g-color-white-opacity-0_7 mb-0">Sabemos la importancia que tiene para una empresa su CAPITAL HUMANO es por ello que en MERAKI Capital Humano en acción te brindamos las herramientas para encontrarlo, seleccionarlo y medirlo adecuandonos a las necesidades primordiales de tu organización, cuidando cada detalle dentro del proceso. </p>
                </div>
              </article>
              <!-- End Article -->
            </div>
          </div>

          <div class="row align-items-stretch">
            <div class="col-sm-6 g-mb-30">
              <!-- Article -->
              <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-theme-bg-blue-dark-v2 g-transition-0_3 g-pa-20">
                <div class="g-flex-middle-item">
                  <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">Desarrollo Personal </h4>
                  <p class="g-color-white-opacity-0_7 mb-0">Reconocer el talento desde la manera particular alineado a los objetivos de la organización, ayuda a definir objetivos, fortaleciendo el compromiso de los colaboradores hacia la organización complementando el logro de los objetivos. </p>
                </div>
              </article>
              <!-- End Article -->
            </div>

            <div class="col-sm-6 g-mb-30">
              <!-- Article -->
              <article class="h-100 g-flex-middle g-brd-left g-brd-3 g-brd-primary g-brd-white--hover g-theme-bg-blue-dark-v2 g-transition-0_3 g-pa-20">
                <div class="g-flex-middle-item">
                  <h4 class="h6 g-color-white g-font-weight-600 text-uppercase g-mb-10">WELLNES</h4>
                  <p class="g-color-white-opacity-0_7 mb-0">En la actualidad es importante que las organizaciones creen conciencia de la vitalidad de Crear un ambiente de trabajo saludable como parte de su planeación</p>
                </div>
              </article>
              <!-- End Article -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Info Blocks -->

      <!-- Clients -->
      <section class="text-center g-py-80">
        <div class="container">
          <div class="container g-width-780 g-mb-60">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-45">
              <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-2 g-color-primary g-mb-20">Nuestros Clientes</h4>
              <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-mb-minus-10">¿Quién trabaja con nosotros?</h2>
            </div>
          </div>

          <div class="js-carousel g-mb-60"
               data-autoplay="true"
               data-infinite="true"
               data-slides-show="6"
               data-responsive='[{
                 "breakpoint": 1200,
                 "settings": {
                   "slidesToShow": 5
                 }
               }, {
                 "breakpoint": 992,
                 "settings": {
                   "slidesToShow": 4
                 }
               }, {
                 "breakpoint": 768,
                 "settings": {
                   "slidesToShow": 3
                 }
               }, {
                 "breakpoint": 576,
                 "settings": {
                   "slidesToShow": 2
                 }
               }]'>
<?php
  while ($Logo = $Emp_Logo ->fetch_assoc()) {

      echo "<div class='js-slide g-brd-around g-brd-gray-light-v1--hover g-transition-0_2 g-mx-10 g-my-1'>
              <img class='img-fluid g-max-width-170--md mx-auto' src='".$Logo["Emp_url"]."' alt='Image Description'>
            </div>";

  }
?>
          </div>

          <p class="g-mb-35"> <!--Puedo agregar un texto aqui--> </p>

         <!-- <a class="btn btn-md text-uppercase u-btn-primary rounded-0 g-px-15" href="#">Projects</a>-->
        </div>
      </section>
      <!-- End Clients -->

      <footer>
        <div id="contacto" class="text-center g-color-gray-light-v2 g-theme-bg-blue-dark-v1 g-py-80">
          <div class="container g-width-780 g-mb-60">
            <div class="text-uppercase u-heading-v2-4--bottom g-brd-primary g-mb-45">
              <h4 class="h6 g-font-weight-800 g-font-size-12 g-letter-spacing-2 g-color-primary g-mb-20">Contacto</h4>
              <h2 class="h1 u-heading-v2__title g-line-height-1_3 g-font-weight-600 g-font-size-40 g-color-gray-light-v2 g-mb-minus-10">Contáctanos</h2>
            </div>

            <p class="g-color-gray-light-v2 mb-0">No hay metas inalcanzables, si no personas cansadas de querer alcanzar metas</p>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-md-3 g-px-15 g-py-30 g-py-0--md">
                <i class="fa fa-instagram d-inline-block g-font-size-50 g-color-primary g-mb-20"></i>
                <h3 class="text-uppercase g-font-size-default g-color-white-opacity-0_5 g-letter-spacing-1 g-mb-5">Instagram</h3>
                <strong class="g-font-size-default g-color-white">themeraki2020</strong>
              </div>

              <div class="col-sm-6 col-md-3 g-brd-top g-brd-top-none g-brd-left--md g-brd-primary g-px-15 g-py-30 g-py-0--md">
                <i class="fa fa-linkedin d-inline-block g-font-size-50 g-color-primary g-mb-20"></i>
                <h3 class="text-uppercase g-font-size-default g-color-white-opacity-0_5 g-letter-spacing-1 g-mb-5">linkedin</h3>
                <strong class="g-font-size-default g-color-white">Meraki</strong>
              </div>
              
              <div class="col-sm-6 col-md-3 g-brd-top g-brd-top-none g-brd-left--md g-brd-primary g-px-15 g-py-30 g-py-0--md">
                <i class="fa fa-tiktok d-inline-block g-font-size-50 g-color-primary g-mb-20"></i>
                <h3 class="text-uppercase g-font-size-default g-color-white-opacity-0_5 g-letter-spacing-1 g-mb-5">tiktok</h3>
                <a class="g-font-size-default g-color-white" href="mailto:info@unify.com"><strong>Meraki</strong></a>
              </div>

              <div class="col-sm-6 col-md-3 g-brd-top g-brd-top-none g-brd-left--md g-brd-primary g-px-15 g-py-30 g-py-0--md">
                <i class="fa fa-facebook d-inline-block g-font-size-50 g-color-primary g-mb-20"></i>
                <h3 class="text-uppercase g-font-size-default g-color-white-opacity-0_5 g-letter-spacing-1 g-mb-5">Facebook</h3>
                <strong class="g-font-size-default g-color-white">MerakiConsultoriaRH</strong>
              </div>
            </div>
          </div>
        </div>

        <!-- Icon Blocks -->
        <ul class="row no-gutters list-inline g-mb-0">
          <li class="col list-inline-item g-mr-0">
            <a class="d-block g-theme-bg-blue-dark-v3 g-color-gray-dark-v5 g-bg-primary--hover g-color-white--hover g-font-size-default text-center g-pa-15" href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="col list-inline-item g-mr-0">
            <a class="d-block g-theme-bg-blue-dark-v2 g-color-gray-dark-v5 g-bg-primary--hover g-color-white--hover g-font-size-default text-center g-pa-15" href="#">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
          <li class="col list-inline-item g-mr-0">
            <a class="d-block g-theme-bg-blue-dark-v3 g-color-gray-dark-v5 g-bg-primary--hover g-color-white--hover g-font-size-default text-center g-pa-15" href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="col list-inline-item g-mr-0">
            <a class="d-block g-theme-bg-blue-dark-v2 g-color-gray-dark-v5 g-bg-primary--hover g-color-white--hover g-font-size-default text-center g-pa-15" href="#">
              <i class="fa fa-instagram"></i>
            </a>
          </li>
          <li class="col list-inline-item">
            <a class="d-block g-theme-bg-blue-dark-v3 g-color-gray-dark-v5 g-bg-primary--hover g-color-white--hover g-font-size-default text-center g-pa-15" href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
        <!-- End Icon Blocks -->

        <!-- Google (Map) [custom] -->
        <div class="g-pos-rel g-height-500">
          <div id="gMap10" class="js-g-map g-pos-abs w-100 h-100"
               data-type="custom"
               data-lat="40.674"
               data-lng="-73.946"
               data-zoom="12"
               data-title="Business"
               data-styles='[
                   ["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]],
                   ["", "labels", [{"visibility":"on"}]],
                   ["water", "", [{"color":"#1d1a37"}]]
                 ]'
               data-pin="true"
               data-pin-icon="assets/img/pin.png"></div>
        </div>
        <!-- End Google (Map) [custom] -->

        <div class="text-center g-color-gray-dark-v3 g-pa-30">
          <div class="g-width-600 mx-auto">
            
              </div>
            </form>

            <p class="g-font-size-12 mb-0">&copy; 2021 All right reserved. Meraki developed by
              <a href="#" class="g-color-primary">Tekne&Praxis</a></p>
          </div>
        </div>
      </footer>

      <a class="js-go-to u-go-to-v1" href="#"
         data-type="fixed"
         data-position='{
           "bottom": 15,
           "right": 15
         }'
         data-offset-top="400"
         data-compensation="#js-header"
         data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
      </a>
    </main>

    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="assets/vendor/appear.js"></script>
    <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="assets/vendor/gmaps/gmaps.min.js"></script>

    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>
    <script src="assets/js/components/hs.header.js"></script>
    <script src="assets/js/helpers/hs.hamburgers.js"></script>
    <script src="assets/js/components/hs.scroll-nav.js"></script>
    <script src="assets/js/components/hs.carousel.js"></script>
    <script src="assets/js/components/gmap/hs.map.js"></script>
    <script src="assets/js/components/hs.go-to.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>

    <!-- JS Plugins Init. -->
    <script>
      // initialization of google map
      function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
      }

      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of go to section
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
      });

      $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
          duration: 700
        });
      });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async></script>
  </body>
</html>
