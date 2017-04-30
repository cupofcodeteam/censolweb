@extends('partials.layout')

@section('title','CENSOL | Nosotros')

@section('content')

  <div id="contact-page-two">
    <div class="text-center page-breadcrumb">

    </div><!--/.page-breadcrumb-->
      <div class="welcome text-center">
          <h1> Contacto</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="item-wrapper appear-left">
              <div class="item item-1 img-circle center-block">
                <div class="item-image">
                </div>
              </div>
              <div class="item-content">
                <p> C.C. Biblos Center, piso 1, local 120,<br>Unare II, Puerto Ordaz </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-wrapper appear-zoom">
              <div class="item item-2 img-circle center-block">
                <div class="item-image">
                </div>
              </div>
              <div class="item-content">
                <p>censolguayana@gmail.com
                 <p>censoltraducciones@gmail.com<p>censolgerencia2016@gmail.com
                 </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="item-wrapper appear-right">
              <div class="item item-3 img-circle center-block">
                <div class="item-image">
                </div>
              </div>
              <div class="item-content">
                <p> +58 286 952 6636 OFICINA<p>+58 424 9070166<p>0414 8579185</p>
              </div>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="text-center">
                <h2>Escríbenos</h2>
              </div>
              <div class="description">
                <p>
                  Para mas información, dudas o sugerencias, no dude en comunicarse con nosotros a traves del formulario de contacto. Nuestro Equipo de trabajo le respondera lo más pronto posible.
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="contact-wrap">
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" required="required" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" required="required" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" required="required" placeholder="Asunto">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder="Mensaje"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" href="joseospinoalejos@gmail.com" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
              </div><!--/.row-->
            </div>
          </div>
        </div>

        <div id="pre-inscripcion">
          <div class="container-fluid">
            <div class="row">
              <div class="promo text-center">
                <div class="appear-tilt-l">
                  <h2> La oportunidad de aprender cualquier idioma en un click </h2>
                  <p> Rellene nuestro formulario de preinscripción</p>
                  <a class="btn btn-primary" target="_blank" href="http://www.123contactform.com/form-2322394/Encuesta"> Ir </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="all-gmap" class="container-fluid">
            <div class="col-sm-12">
              <div class="overlay-g" onClick="style.pointerEvents='none'"></div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d586.9110825170306!2d-62.75594090547276!3d8.27775848043348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sve!4v1473532201121" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div><!--/.container-->
    </div>  <!--/contact-page-two -->

@endsection
