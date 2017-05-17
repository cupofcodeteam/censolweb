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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="/css/main.css" rel="stylesheet">
  <link href="/css/responsive.css" rel="stylesheet">
  <link href="/css/scrolling-nav.css" rel="stylesheet">

  <!-- IMAGES -->
  <link rel="shortcut icon"  type="image/x-icon" href="/images/ico/favicon.ico">

</head><!--/head-->
<body class="informacion-1" style="overflow: hidden; overflow-x: hidden;">
  @if ($active_menu != 'inicio')
  <div class="social-fixed hidden-xs">
    <div class="toggle"></div>
    <ul>
      <li> <a target="_blank" href="https://www.facebook.com/censol.guayana"><img src="/images/ico/facebook-logo.png" width="32" height="32 "alt=""></a></li>
      <li> <a target="_blank" href="https://www.instagram.com/censolguayana"><img src="/images/ico/instagram-logo.png" width="32" height="32 "alt=""></a></li>
      <li> <a target="_blank" href="https://twitter.com/censolguayana"><img src="/images/ico/twitter-logo.png" width="32" height="32 "alt=""></a></li>
      <li> <a target="_blank" href="https://www.youtube.com/channel/UCORYkez6CepZ0JkjVMwC1Lg"><img src="/images/ico/youtube.png" width="32" height="32 "alt=""></a></li>
    </ul>
  </div>
  @endif
  <div class="loading-modal">
    <div class="sk-folding-cube">
      <div class="sk-cube1 sk-cube"></div>
      <div class="sk-cube2 sk-cube"></div>
      <div class="sk-cube4 sk-cube"></div>
      <div class="sk-cube3 sk-cube"></div>
    </div>
  </div>
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Nosotros<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="drop-item">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="drop-content">
                            <h3> Nosotros</h3>
                            <p> Somos una empresa consolidada en la formación y capacitación del idioma Inglés. 3 años de experiencia liderando los procesos de enseñanza, aprendizaje y evaluación del idioma, avalan nuestro compromiso académico. </p>
                          </div>
                        </div>
                        <div class="col-md-4">
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Idiomas<span class="caret">
                  </a>
                  <ul class="dropdown-menu">
                    <div class="drop-item">
                      <div class="row">
                        <div class="col-md-3">
                          <div class="drop-section">
                            <ul>
                              <li><a class="title" href="/idiomas/ingles">Ingles</a></li>
                              <li><a href="/idiomas/ingles/ingles-ninos"> Ingles para niños</a></li>
                              <li><a href="/idiomas/ingles/jovenes-y-adultos">Jovenes Y Adultos</a></li>
                              <li><a href="/idiomas/ingles/personalizado">Personalizado</a></li>
                              <li><a href="/idiomas/ingles/tecnicos">Tecnicos Especializados</a></li>
                              <li><a href="/idiomas/ingles/corporativo">Ingles Corporativo</a></li>
                              <li><a href="/idiomas/ingles/en-linea">Ingles En Linea</a></li>
                              <li><a href="/idiomas/ingles/tofl">TOEFL</a></li>
                              <li><a href="/idiomas/ingles/ielts">IELTS</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="drop-section">
                            <ul>
                              <li><a class="title" href="#">Español</a></li>
                              <li><a href="/idiomas/espanol">En sede</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-md-3">
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
                        <div class="col-md-3">
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

                <li class="{{$active_menu == 'otros-cursos' ? 'active' : ''}} dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Otros cursos<span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="drop-item">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="drop-content">
                            <h3> Otros Cursos</h3>
                            <p> Somos una empresa consolidada en la formación y capacitación del idioma Inglés. 3 años de experiencia liderando los procesos de enseñanza, aprendizaje y evaluación del idioma, avalan nuestro compromiso académico. </p>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <ul class="drop-link">
                            <li><a href="/otros-cursos/universitarios">Cursos Universitarios</a></li>
                            <li><a href="/otros-cursos/profesional">Cursos Profesionales</a></li>
                          </ul>
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
                  <a  href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Legalización <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="drop-item">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="drop-content">
                            <h3> Legalización</h3>
                            <p> Gestoría para apostillamiento y legalización de documentos ante organismos nacionales e internacionales. </p>
                          </div>
                        </div>
                        <div class="col-md-4">
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
                  <a  href="#"  class="{{$active_menu == 'comercial' ? 'active' : ''}} dropdown-toggle" data-toggle="dropdown">
                    Comercialización <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <div class="row">
                      <div class="drop-item">
                        <div class="col-md-8">
                          <div class="drop-content">
                            <h3> Comercialización</h3>
                            <p> Asesoramiento en todas las áreas para dar nuestra marca y nombre como franquicia, intercambio comercial, convenio por clases en nuestras instalaciones o a domicilio en su oficina; además de organización de eventos relacionados a cualquier índole en nuestra ciudad y otras ciudades del país. </p>
                          </div>
                        </div>
                        <div class="col-md-4">
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
          <h5 class="slogan-footer">Jeremias 29:11</h5>
          <h4>© 2016 Censol Guayana. Todos los derechos reservados.</h4>


        </div>
      </div>
    </div>
  </footer>

  <!-- SCRIPTS CDN-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-parallax/1.1.3/jquery-parallax-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

  <!-- SCRIPTS LOCAL -->
  <script src="/js/scrolling-nav.js"></script>
  <script src="/js/animatescroll.min.js"></script>
  <script type="text/javascript" src="/js/main.js"></script>
  <script src="/js/appear.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
         $('.loading-modal').fadeOut('600');
         $('body').css('overflow','auto');
         $('body').css('overflow-x','hidden');
         $('.social-fixed').css('transform','translateX(0%)');
         $('.toggle').css('background-image','url(/images/ico/back.png)');

    });
    appear({
      elements: function elements() {
        return $('.appear-top');
      },
      appear: function appear(el) {
        $(el).css("transform","translateY(0)");
        $(el).css('opacity','1');
      }
    });

    appear({
      elements: function elements() {
        return $('.appear-random');
      },
      appear: function appear(el) {
        var rand = Math.floor((Math.random() * 1000)+500);
        $(el).animate(
          { opacity:1 },{
            duration: rand,
            easing: 'easeInQuart'
          }
        );
      }
    });

    appear({
      elements: function elements() {
        return $('.appear-left');
      },
      appear: function appear(el) {
        $(el).css("transform","translateX(0)");
        $(el).css('opacity','1');
      },
      bounds: -100
    });

    appear({
      elements: function elements() {
        return $('.appear-right');
      },
      appear: function appear(el) {
        $(el).css("transform","translateX(0)");
        $(el).css('opacity','1');
      },
      bounds: -100
    });

    appear({
      elements: function elements() {
        return $('.appear-zoom');
      },
      appear: function appear(el) {
        $(el).css('opacity','1');
        $(el).css("transform","scale(1)");
      },
      bounds: -100
    });

    appear({
      elements: function elements() {
        return $('.appear-tilt-l');
      },
      appear: function appear(el) {
        $(el).css('opacity','1');
        $(el).css("animation","tilt-l 1500ms");
      },
      bounds: -100
    });

    appear({
      elements: function elements() {
        return $('.appear-tilt-r');
      },
      appear: function appear(el) {
        $(el).css('opacity','1');
        $(el).css("animation","tilt-r 1500ms");
      },
      bounds: -100
    });

    var opened = true;

    $('.toggle').click(function() {
      if (opened == true){
        $('.social-fixed').css('transform','translateX(-85%)');
        $('.toggle').css('background-image','url(/images/ico/next.png)');
        opened = false;
      }else{
        $('.social-fixed').css('transform','translateX(0)');
        $('.toggle').css('background-image','url(/images/ico/back.png)');
        opened = true;
      }

    });

  </script>

   @yield('scripts')
</body>
</html>
