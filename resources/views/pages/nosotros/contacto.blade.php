@extends('partials.layout')

@section('title','CENSOL | Nosotros')

@section('content')

  <div id="contact-page-two">
    <div class="text-center page-breadcrumb">

    </div><!--/.page-breadcrumb-->
      <div class="welcome text-center">
          <h1> Contacto</h1>
      </div>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
          <li class="breadcrumb-item"> Nosotros </li>
          <li class="breadcrumb-item active"> Contacto</li>
      </ol>
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
                <p>gerenciageneral@censolidiomas.com
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
                <p> +58 286 952 6636 OFICINA
                <p>+58 424 9070166 </p>
                <p>0414 1919464</p>
              </div>
            </div>
          </div>
        </div>



          <div class="row">
            <div class="col-sm-12">
              <div class="text-center">
                <h2>¡Nos encantaria saber de ti!</h2>
              </div>
              <div class="description">
                <p>
                ¿Alguna duda o sugerencia? , no dude en comunicarse con nosotros a través del formulario de contacto. Nuestro Equipo de trabajo le responderá lo más pronto posible.
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
                        <input name="name" type="text" class="form-control" required="required" placeholder="Nombre">
                      </div>
                      <div class="form-group">
                        <input name="email" type="email" class="form-control" required="required" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input name="cc" type="text" class="form-control" required="required" placeholder="Asunto">
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

        <div class="container extra">
          <div class="row">
              <div class="col-md-6">
                <div class="informacion-1 text-center ">
                  <h3> <strong>CUENTAS BANCARIAS DE CENSOL GUAYANA C.A.</strong></h3>
                    <p>
                       <strong> BANPLUS </strong> <br>
                      Cta Ctte;    0174 0135 1513 5412 3224 <br>
                      A nombre de CENTRO DE SOLUCIONES LINGUISTICAS C.A.<br>
                      RIF: J - 40375055 - 6 <br>
                      administración@censolidiomas.com </p>

                      <p>
                      <strong>BANCO OCCIDENTAL DE DESCUENTO</strong> <br>
                      Cta Ctte,    0116 0094 8600 2019 2339 <br>
                      A nombre de CENTRO DE SOLUCIONES LINGÜÍSTICAS C.A. <br>
                      RIF: J - 40375055 - 6 <br>
                      administración@censolidiomas.com
                    </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="informacion-1 text-center">
                  <h3> <strong>CUENTAS DE CORREOS</strong></h3>
                  <strong>GERENCIA GENERAL:</strong>
                  gerenciageneral@censolidiomas.com <br>

                  <strong>ADMINISTRACION:</strong>
                  administracion@censolidiomas.com <br>

                  <strong>INFORMACIÓN DE IDIOMAS:</strong>
                  infoidiomas@censolidiomas.com <br>

                  <strong>INFORMACION TRADUCCIONES Y LEGALIZACIONES:</strong>
                  infotraducciones@censolidiomas.com <br>

                  <strong>INFORMACION CURSOS UNIVERSITARIOS, PROFESIONALES E INDUSTRIALES:</strong>
                  infocursos@censolidiomas.com
                </div>

              </div>

          </div>

        </div>


        <div id="pre-inscripcion">
          <div class="container-fluid">
            <div class="row">
              <div class="promo text-center">
                <div class="appear-tilt-l">
                  <h2> La oportunidad de aprender cualquier idioma a solo un ¡click! </h2>
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

@section('scripts')
  <script type="text/javascript">
  $(document).ready(function() {

    // process the form
    $('form').submit(function(event) {
      event.preventDefault();
        var formData = {
            "_token": "{{ csrf_token() }}",
            'name'              : $("input[name='name']").val(),
            'email'             : $("input[name='email']").val(),
            'message'           : $("textarea[name='message']").val(),
            'phone'             : $("input[name='phone']").val(),
            'cc'                : $("input[name='cc']").val()
        };

        // process the form
        $.ajax({
            type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
            url         : '/sendMail', // the url where we want to POST
            data        : formData, // our data object
            encode      : true
        })
            .done(function(data) {
              alert("Mensaje Enviado Con Exito!");
            })
            .fail(function(data) {
              alert(" Error al enviar Mensaje!");
            });

        // stop the form from submitting the normal way and refreshing the page

    });
  });
  </script>
@endsection
