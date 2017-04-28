@extends('partials.layout')

@section('title','CENSOL | Any language, any time')

@section('content')
  <section id="home-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 title">
          <!-- <h1>Bienvenidos a CENSOL</h1>
          <h3>Instituto de Idiomas</h3> -->
        </div>
        <div class="col-sm-5">
          <!-- <img class="image-top" src="images/home/bg/man.png" alt=""/> -->
        </div>
      </div>
    </div>
  </section>

  <section id="about-us">
    <div class="container text-center">
      <div class="row">
        <div class="welcome">
          <h1 class="text-center"> CENSOL - Instituto de idiomas</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="content">
            <p>Somos una empresa consolidada en la formación y capacitación del idioma Inglés. Tres años de experiencia liderando los procesos de enseñanza, aprendizaje y evaluación del idioma, avalan nuestro compromiso académico en el logro de objetivos de manera eficiente.</p>
            <a class="btn btn-primary" target="_blank" href="/nosotros/quienes-somos"> Leer mas</a>
          </div>
        </div>
        <div class="col-md-7">
          <div class="image">
            <img class="img-responsive" src="../images/home/about/about.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="projects" class="hidden-xs">
    <div class="container text-center ">
      <div class="row">
        <div class="section-title">
          <h2>Nuestros Niveles<span> de Inglés</span></h2>
        </div>
      </div>

      <div id="carousel-level" class="carousel slide" data-ride="carousel" data-interval="false">
        <ol class="carousel-indicators">
          <li data-target="#carousel-level" data-slide-to="0" class="active">1</li>
          <li data-target="#carousel-level" data-slide-to="1">2</li>
          <li data-target="#carousel-level" data-slide-to="2">3</li>
          <li data-target="#carousel-level" data-slide-to="3">4</li>
          <li data-target="#carousel-level" data-slide-to="4">5</li>
          <li data-target="#carousel-level" data-slide-to="5">6</li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="description">
                <div class="col-md-6">
                  <div class="content">
                    <h2> Intro</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../images/home/project/intro.jpg" alt="">
                </div>
            </div>
          </div>
          <div class="item">
            <div class="description">
                <div class="col-md-6">
                  <div class="content">
                    <h2> Interchange I</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../images/home/project/ic1.jpg" alt="">
                </div>
            </div>
          </div>
          <div class="item">
            <div class="description">
                <div class="col-md-6">
                  <div class="content">
                    <h2> Interchange II</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../images/home/project/ic2.jpg" alt="">
                </div>
            </div>
          </div>
          <div class="item">
            <div class="description">
                <div class="col-md-6">
                  <div class="content">
                    <h2> Interchange III</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../images/home/project/ic3.jpg" alt="">
                </div>
            </div>
          </div>
          <div class="item">
            <div class="description">
                <div class="col-md-6">
                  <div class="content">
                    <h2> Passages I</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../images/home/project/ps1.jpg" alt="">
                </div>
            </div>
          </div>
          <div class="item">
            <div class="description">
                <div class="col-md-6">
                  <div class="content">
                    <h2> Passeges II</h2>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <img src="../images/home/project/ps2.jpg" alt="">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="service">
    <div class="container">
      <div class="row">
        <div class="section-title text-center">
          <h2>Somos algo mas que <span>Inglés</span></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="image item-1">
            <img src="../images/home/servicios/services1.jpg" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <h3> Comercialización </h3>
            <p>Asesoramiento en todas las áreas y dar nuestra marca y nombre como franquicia,intercambio comercial o convenio por clases en nuestras instalaciones o a domicilio en sus oficinas y organización de eventos relacionados a cualquier índole en la ciudad.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="image item-2">
            <img src="../images/home/servicios/services2.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="content">
            <h3> Traducción </h3>
            <p>Presentación de traducciones con apego al formato original: escaneo de sellos, firmas, logotipos, imágenes y planos, elaboración de cuadros y gráficos. Entrega de documentos en la presentación requerida por el cliente: electrónica, impresa, CD’s, encuadernada, etc. Servicio integral de recolección y entrega de documentos según lo acordemos con el cliente. Envío de documentos por courrier a nivel nacional e internacional. Y más.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="image item-3">
            <img src="../images/home/servicios/services3.jpeg" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <h3> Legalización </h3>
            <p>Gestoría para apostillamiento y legalización de documentos ante organismos nacionales e internacionales. Además de documentos ante el ministerio de relaciones exteriores en la ciudad de Caracas.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="image item-4">
            <img src="../images/home/servicios/services4.jpg" alt="">
          </div>
        </div>
        <div class="col-md-4">
          <div class="content">
            <h3> Edición de Documentos </h3>
            <p>Servicios de redacción,corrección, edición y publicación de textos. De cualquier índole, así como su respectiva corrección, edición y publicación a través de nuestros socios editoriales, hecha con la más alta calidad y por los mejores profesionales del área en nuestro país.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="image item-5">
            <img src="../images/home/servicios/services5.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="payment">
    <div class="container">
      <div class="row">
        <div class="section-title text-center">
          <h2>Metodos de<span> Pago</span></h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="method">
            <figure>
              <img src="../images/home/payment2.png" alt="">
              <figcaption>
                <h3> Deposito </h3>
                <a class="btn btn-primary center-block"href="/nosotros/contacto"> Contacto</a>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-4">
          <div class="method">
            <figure>
              <img src="../images/home/payment1.png" alt="">
              <figcaption>
                <h3> Transferencia </h3>
                <a class="btn btn-primary center-block"href="/nosotros/contacto"> Contacto</a>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-4">
          <div class="method">
            <figure>
              <img src="../images/home/mercadopago.png" alt="">
              <figcaption>
                <h3> Mercado Pago </h3>
                <a class="btn btn-primary center-block"href="#"> Ver más</a>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="twitter" class="text-center parallax-section hidden-xs">
    <div id="blog" class="padding-bottom">
      <div class="container">
        <div class="row">
          <div class="text-center section-title">
            <h2>Redes Sociales</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="entry-content">
              <a href="blog-detail.html"><div class="fb-page" data-href="https://www.facebook.com/censolidiomas/?fref=ts" data-tabs="timeline" data-width="300" data-height="365" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/censolidiomas/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/censolidiomas/?fref=ts" target="_blank">Censol Guayana </a></blockquote></div></a>
              <h2><a href="https://www.facebook.com/censol.guayana" target="_blank" ><i class="fa fa-facebook fa-3x fa-fw"></i></a></h2>
              <div class="entry-meta">
              </div>
              <i class="fa fa-chevron-up"></i>
            </div>
          </div>
          <div class="col-md-4">
            <div class="entry-content">
              <a href="blog-detail.html"><img class=<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/0730938b85855da3b05830a93c1ae258.html" id="lightwidget_0730938b85" name="lightwidget_0730938b85"  scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe></a>
              <h2><a href="https://www.instagram.com/censolguayana" target="_blank">Instagram</a></h2>
              <div class="entry-meta">
              </div>
              <i class="fa fa-chevron-up"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="entry-content">
              <a href="blog-detail.html"><a class="twitter-timeline" data-width="300" data-height="365" href="https://twitter.com/censolguayana" target="_blank">Tweets por censolguayana</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
              <h2><a href="https://twitter.com/censolguayana">Twitter</a></h2>
              <div class="entry-meta">
              </div>
              <i class="fa fa-chevron-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div><!--/#blog-->
  </section>

  <section id="clients" class="text-center padding-top padding-bottom">
    <div class="container">
      <div class="section-title">
        <h2>Estamos <span>Certificados</span></h2>
      </div>
      <div id="client-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active">
            <div class="client-content">
              <ul>
                <li><img class="img-responsive" src="/images/home/clients/client1.png" alt="" /></li>
                <li><img class="img-responsive" src="/images/home/clients/client2.png" alt="" /></li>
                <li><img class="img-responsive" src="/images/home/clients/client3.png" alt="" /></li>
              </ul>
            </div>
          </div>
          <div class="item">
            <div class="client-content">
              <ul>
                <li><img class="img-responsive" src="/images/home/clients/client4.png" alt="" /></li>
                <li><img class="img-responsive" src="/images/home/clients/client5.png" alt="" /></li>
                <li><img class="img-responsive" src="/images/home/clients/client6.png" alt="" /></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#clients-->

  <div class="text-center footer-top">
    <div class="overlay-bg"></div>
    <div class="container">
      <h2>¿Quieres trabajar con nosotros?</h2>
      <a href="contacto.html" class="btn btn-primary">Contáctenos</a>
    </div>
  </div>
@endsection