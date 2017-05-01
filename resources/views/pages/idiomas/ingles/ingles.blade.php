@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')

<div id="portfolio-page">
  <div class="text-center page-breadcrumb">
    <div class="container">
      <!-- <h1>Programa <span>Inglés</span></h1>
      <p class="breadcrumb-text"></p> -->
    </div>
  </div><!--/.page-breadcrumb-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
    <li class="breadcrumb-item"> Idiomas </li>
    <li class="breadcrumb-item active"> Ingles </li>
  </ol>

  <div id="projects-details" class="padding-top hidden-md-up">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h2>Nuestros niveles según el MCERL Marco común europeo de referencia para las lenguas.</h2>
          <p>El Marco Común Europeo de Referencia para las Lenguas: Aprendizaje, Enseñanza, Evaluación (MCER, o CEFR en inglés) es un estándar europeo, utilizado también en otros países, que sirve para medir el nivel de comprensión y expresión oral y escrita en una determinada lengua. El proyecto es el resultado de un trabajo iniciado en 1991 por iniciativa del gobierno federal suizo que estuvo inspirado en trabajos previos realizados por particulares e instituciones desde 1971. El documento final fue elaborado por el Consejo de Europa y presentado en 2001 durante la celebración del Año Europeo de las Lenguas. </p>

          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Intro
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  El estudiante tendrá la capacidad para comprender y utilizar expresiones básicas y simples que le permitirán satisfacer necesidades concretas todos los días. Además podrán presentarse y a otros, preguntar y responder preguntas referentes a información personal, direcciones y sobre pertenencias. Podrán comunicarse e interactuar de modos siempre que el orador pronuncie claramente.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Interchange I
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  El estudiante podrá comprender un rango común de expresiones utilizadas en referencias a información personal y familiar, compras, trabajo, geografía local, etc. Puede comunicarse y lidiar con tareas simples que ameritan interacción y cambio de información en una manera general y en términos directos, relevantes y asuntos cotidianos concretos.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Interchange II
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  El estudiante está en su capacidad de comprender ideas principales e información específica sobre profesiones, escuelas, ocio y asuntos cotidianos en un lenguaje estándar, normal y claro. Puede lidiar con casi cualquier circunstancia en una atmosfera donde el objetivo lingüístico sea hablar. Pueden producir o elaborar ensayos simples con respecto a conocimiento general y contemporáneo o sobre temas personales. También puede describir experiencias, narrar eventos y sueños, expresar metas y ambiciones así como dar razones y explicaciones breves referentes a proyectos.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingfour">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    Interchange III
                  </a>
                </h4>
              </div>
              <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                <div class="panel-body">
                  El estudiante Podrá lidiar con casi cualquier circunstancia en una atmosfera donde el objetivo lingüístico sea hablar. Pueden producir o elaborar ensayos simples con respecto a conocimiento general y contemporáneo o sobre temas personales. También puede describir experiencias, narrar eventos y sueños, expresar metas y ambiciones así como dar razones y explicaciones breves referentes a proyectos.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingfive">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                    Passages I
                  </a>
                </h4>
              </div>
              <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                <div class="panel-body">
                  Los estudiantes serán capaces de comprender ideas principales de textos con cierto tipo de complejidad que hable sobre concretos y abstractos tópicos, incluyendo técnicas de debates especializado. Ellos pueden interactuar con un nivel de fluidez, precisión  y espontaneidad. <br>
                  Por lo tanto, pueden interactuar con nativos de la lengua sin ningún tipo de presión o tensión.  También pueden producir claro, detallado y elaborado ensayos sobre una diversidad de tópicos así como explicar un punto de vista en particular, presentando ventajas y desventajas de una variedad de temas.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingsix">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                    Passeges II
                  </a>
                </h4>
              </div>
              <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                <div class="panel-body">
                  Los estudiantes son capaces de comprender y debatir sobre una serie de temas mucho más largos y complejos, reconociendo e identificando sus contextos implícitos. Podrán interactuar y expresar pensamientos en una manera muy fluida y precisa sin tener que buscar expresiones o vocabularios en una forma detallada. Utilizaran un lenguaje objetivo con alta fluidez y de manera eficaz en lo social, académico y profesional.<br>
                  Pueden producir ensayos muy claros, bien estructuradas, detallados y bien elaborados referentes a temas complejos mostrando una buena coherencia, cohesión y un uso del lenguaje equilibrado.
                </div>
              </div>
            </div>
          </div>

          <p>El Marco común europeo de referencia establece una escala de seis niveles comunes de referencia para la organización del aprendizaje de lenguas y homologación de los distintos títulos emitidos por las entidades certificadas. La división se agrupa en tres bloques que responden a una división más clásica de nivel básico, intermedio y avanzado, aunque no se corresponden exactamente con los niveles clásicos por estar situados por encima o por debajo de ellos. </p>
        </div>
        <div class="col-sm-6">
          <img class="img-responsive appear-right" src="/images/home/idiomas/i44.jpg" alt="" />
        </div>
      </div>
      <div class="row other-products padding-top padding-bottom text-center">
        <div class="section-title">
          <h2>otros <span>programas</span></h2>
        </div>
        <div class="col-sm-3">
          <div class="project-content appear-random">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/aleman"><img  class="img-responsive" src="/images/home/idiomas/i1.jpg" alt="" /></a>
              <div class="overlay">
                <h3>ALEMÁN</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="project-content appear-random">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/arabe"><img class="img-responsive" src="/images/home/idiomas/i2.jpg" alt="" /></a>
              <div class="overlay">
                <h3>ÁRABE</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="project-content appear-random">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/frances"><img class="img-responsive" src="/images/home/idiomas/i3.jpg" alt="" /></a>
              <div class="overlay">
                <h3>FRANCÉS</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="project-content appear-random">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/mandarin"><img class="img-responsive" src="/images/home/idiomas/i7.jpg" alt="" /></a>
              <div class="overlay">
                <h3>MANDARÍN</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--/Project-details-->
</div>




@endsection
