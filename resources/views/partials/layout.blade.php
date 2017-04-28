<!DOCTYPE html>
<html lang="en">
<head>
  <!-- TITLE -->
  <title>@yield('title')</title>

  <!-- META -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!--CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="/css/font-awesome.min.css" rel="stylesheet">
  <link href="/css/main.css" rel="stylesheet">
  <link href="/css/responsive.css" rel="stylesheet">
  <link href="/css/scrolling-nav.css" rel="stylesheet">

  <!-- IMAGES -->
  <link rel="shortcut icon" href="/images/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/images/ico/apple-touch-icon-57-precomposed.png">

  <!-- SCRIPT -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/jquery.parallax.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
  <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script> -->
  <!-- <script src="//unpkg.com/angular-ui-router/release/angular-ui-router.min.js"></script> -->
  <script type="/text/javascript" src="/js/angularApp.js"></script>
  <script src="/js/scrolling-nav.js"></script>

</head><!--/head-->
<body class="informacion-1">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <header id="navigation">
    <div class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-offset-4">
            <div class="navbar-brand">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">
                <img class="img-responsive" src="/images/home/logo blanco.png" alt="logo">
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class=" {{$active_menu == 'inicio' ? 'active' : ''}} menu">
                  <a href="/">Inicio</a>
                </li>
                <li class="{{$active_menu == 'nosotros' ? 'active' : ''}} dropdown">
                  <a  class="dropdown-toggle" data-toggle="dropdown">
                    Nosotros<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="drop-item">
                      <div class="row">
                        <div class="col-xs-8">
                          <div class="drop-content">
                            <h3> Nosotros</h3>
                            <p> Somos una empresa consolidada en la formación y capacitación del idioma Inglés. 3 años de experiencia liderando los procesos de enseñanza, aprendizaje y evaluación del idioma, avalan nuestro compromiso académico. </p>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <ul class="drop-link">
                            <li><a href="/nosotros/quienes-somos">¿Quienes somos?</a></li>
                            <li><a href="/nosotros/galeria">Galeria</a></li>
                            <li><a href="/nosotros/contacto">Contacto</a></li>
                            <li><a href="/nosotros/faqs">Faq's</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </ul>
                </li>
                <li class="{{$active_menu == 'idiomas' ? 'active' : ''}} dropdown">
                  <a  class="dropdown-toggle" data-toggle="dropdown">
                    Idiomas<span class="caret">
                  </a>
                  <ul class="dropdown-menu">
                    <div class="drop-item">
                      <div class="row">
                        <div class="col-xs-3">
                          <div class="drop-section">
                            <ul>
                              <li><a class="title" href="/idiomas/ingles">Ingles</a></li>
                              <li><a href="/idiomas/ingles/ingles-ninos"> Ingles para niños</a></li>
                              <li><a href="/idiomas/ingles/jovenes-y-adultos">Jovenes Y Adultos</a></li>
                              <li><a href="/idiomas/ingles/personalizado">Personalizado</a></li>
                              <li><a href="/idiomas/ingles/tecnicos">Tecnicos Especializados</a></li>
                              <li><a href="/idiomas/ingles/corporativo">Ingles Corporativo</a></li>
                              <li><a href="/idiomas/ingles/en-linea">Ingles En Linea</a></li>
                              <li><a href="#">TOFL</a></li>
                              <li><a href="#">IELTS</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="drop-section">
                            <ul>
                              <li><a class="title" href="/idiomas/espanol">Español</a></li>
                              <li><a href="/idiomas/ingles/corporativo">Corporativo</a></li>
                              <li><a href="/idiomas/ingles/en-sede">En sede</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="drop-section">
                            <ul>
                              <li><h3>Otros</h3> </li>
                              <li><a href="/idiomas/otros-idiomas/portugues">PORTUGUÉS</a></li>
                              <li><a href="/idiomas/otros-idiomas/frances">FRANCÉS</a></li>
                              <li><a href="/idiomas/otros-idiomas/italiano">ITALIANO</a></li>
                              <li><a href="/idiomas/otros-idiomas/aleman">ALEMÁN</a></li>
                              <li><a href="/idiomas/otros-idiomas/mandarin">MANDARÍN</a></li>
                              <li><a href="/idiomas/otros-idiomas/japones">JAPONÉS</a></li>
                              <li><a href="/idiomas/otros-idiomas/arabe">ÁRABE</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-xs-3">
                          <div class="drop-section">
                            <ul>
                              <li><h3>Intercambio</h3> </li>
                              <li><a href="/idiomas/intercambio/venezuela">EN VENEZUELA</a></li>
                              <li><a href="/idiomas/intercambio/otros-paises">OTROS PAISES</a></li>
                            </ul>
                          </div>
                        </div>

                      </div>
                    </div>
                  </ul>
                </li>

                <li class="{{$active_menu == 'traduccion' ? 'active' : ''}} dropdown">
                  <a href="/traduccion">
                    Traducción
                  </a>
                </li>
                <li class="{{$active_menu == 'legal' ? 'active' : ''}} dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown">
                    Legalización <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="drop-item">
                      <div class="row">
                        <div class="col-xs-8">
                          <div class="drop-content">
                            <h3> Legalización</h3>
                            <p> Gestoría para apostillamiento y legalización de documentos ante organismos nacionales e internacionales. </p>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <ul class="drop-link">
                            <li><a href="/legal/apostilla">APOSTILLA</a></li>
                            <li><a href="/legal/gestoria">LEGALIZACION DE DOCUMENTOS</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </ul>
                </li>
                <li class="{{$active_menu == 'edicion' ? 'active' : ''}} dropdown">
                  <a href="/edicion/redaccion">
                    Edición
                  </a>
                </li>

                <li class="dropdown">
                  <a  class="{{$active_menu == 'comercial' ? 'active' : ''}} dropdown-toggle" data-toggle="dropdown">
                    Comercialización <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="row">
                      <div class="drop-item">
                        <div class="col-xs-8">
                          <div class="drop-content">
                            <h3> Comercialización</h3>
                            <p> Asesoramiento en todas las áreas y dar nuestra marca y nombre como franquicia,intercambio comercial o convenio por clases en nuestras instalaciones o a domicilio en sus oficinas y organización de eventos relacionados a cualquier índole en la ciudad. </p>
                          </div>
                        </div>
                        <div class="col-xs-4">
                          <ul class="drop-link">
                            <li><a href="/comercial/franquicia">FRANQUICIA</a></li>
                            <li><a href="/comercial/intercambio">INTERCAMBIO COMERCIAL</a></li>
                            <li><a href="/comercial/eventos">EVENTOS</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </ul>
                </li>
              </ul>
            </nav>
            <div class="topbar-icons">
              <span><i class="fa fa-search"></i></span>
            </div>
            <!-- <div class="search">
              <form role="form">
                <input type="text" class="search-form" autocomplete="off" placeholder="Buscar...">
                <span class="search-close"><i class="fa fa-times"></i></span>
              </form>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </header>

  @yield('content')

  <footer id="footer">
    <div class="footer-bottom">
      <div class="container">
        <div class="row ">
          <a href='https://www.facebook.com/censol.guayana' target="_blank"><i class="fa fa-facebook fa-3x fa-fw"></i></a>
          <a href='https://www.instagram.com/censolguayana/' target="_blank"><i class="fa fa-twitter fa-3x fa-fw"></i></a>
          <a href="https://twitter.com/censolguayana" target="_blank"><i class="fa fa-instagram fa-3x fa-fw"></i></a>
        </div>

        <div class="row">
          <h4>© 2016 Censol Guayana. Todos los derechos reservados.</h4>

        </div>
      </div>
    </div>
  </footer>

   @yield('scripts')
</body>
</html>
