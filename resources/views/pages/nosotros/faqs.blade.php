@extends('partials.layout')

@section('title','CENSOL | Nosotros')

@section('content')

  <div  class="text-center page-breadcrumb">
    <div class="container">
    </div>
  </div><!--/.page-breadcrumb-->

  <section id="preguntas">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
        <li class="breadcrumb-item"> Nosotros </li>
        <li class="breadcrumb-item active"> FAQS</li>
    </ol>
    <div class="container">
      <a id="btnFaqs" href="#" onclick="animScroll('#preguntas');" class="btn-float">
        <i class="glyphicon glyphicon-arrow-up"></i>
      </a>
      <h3>Preguntas Frecuentes</h3>
      <div class="col-md-6 hidden-xs">
        <div id="faq-content" class="list-group">
          <a href="#q-1" class="list-group-item">¿Qué tipo de inglés enseñan en Censol Guayana?</a>
          <a href="#q-2" class="list-group-item">¿Se asignan tareas para la casa?</a>
          <a href="#q-3" class="list-group-item"> ¿Cómo puedo saber en qué nivel estoy?</a>
          <a href="#q-4" class="list-group-item"> ¿Cuál es la duración de cada nivel?</a>
          <a href="#q-5" class="list-group-item"> ¿Cuál es su metodología?</a>
          <a href="#q-6" class="list-group-item"> ¿Cuál es el material de estudio que utilizan?</a>
          <a href="#q-7" class="list-group-item"> ¿Cuál es su horario?</a>
          <a href="#q-8" class="list-group-item"> ¿Cuánto es la duración de una clase?</a>
          <a href="#q-10" class="list-group-item"> ¿Cuantos niveles me ofrece Censol Guayana?</a>
          <a href="#q-11" class="list-group-item"> ¿Cuentan con laboratorios?</a>
          <a href="#q-12" class="list-group-item"> ¿De dónde son sus profesores?</a>
          <a href="#q-13" class="list-group-item"> ¿En cuánto tiempo estaré preparado para comunicarme en Inglés?</a>
          <a href="#q-14" class="list-group-item"> ¿Puedo tomar las clases en mi oficina?</a>
          <a href="#q-15" class="list-group-item">¿Qué tipo de certificación tienen en Censol Guayana?</a>

        </div>
      </div>

      <div class="col-md-6">
        <div id="q-1">
          <h4>¿Qué tipo de inglés enseñan en Censol Guayana?</h4>
          <p>En Censol Guayana enseñamos el inglés norteamericano, por ser el de mayor difusión mundial y por nuestra cercanía geográfica e influencia cultural desde esos países. </p>
        </div>
        <div id="q-2">
          <h4>¿Se asignan tareas para la casa?</h4>
          <p>Nuestra metodología de competencias comunicativas basada en el Marco Común Europeo de Referencia para las Lenguas asigna el llenado del cuaderno de ejercicios, mediante el cual los estudiantes no solo realizan sus respectivas actividades en el aula sino también en sus hogares, y de esta manera los profesores puedan evaluar el uso de la gramática y el vocabulario.</p>
        </div>
        <div id="q-3">
          <h4> ¿Cómo puedo saber en qué nivel estoy?</h4>
          <p>Nuestro personal académico le realizará un test especializado para medir sus conocimientos del idioma de manera oral y escrita, con el fin de ubicarlo en el nivel acorde a los resultados de dicha prueba.</p>
        </div>
        <div id="q-4">
          <h4>¿Cuál es la duración de cada nivel?</h4>
          <p>El programa consiste en 6 niveles:<br>
              1. Intro <br>
              2. Interchange 1 (A1 según el Marco Común Europeo de referencia para las lenguas, MCERL)<br>
              3. Interchange 2 (A2 según el MCERL)<br>
              4. Interchange 3 (B1 según el MCERL)<br>
              5. Passages 1 (Conversacional, B2 según el MCERL)<br>
              6. Passages 2 (Conversacional, C1 según el MCERL).<br>
              Cada nivel consta de 16 unidades (con excepción de los niveles conversacionales que se componen de 12 unidades cada uno) con diferentes tópicos, contenidos gramaticales y vocabulario adaptado a cada unidad. Cada unidad se cubre en dos (2) sesiones de 80 min c/u. El profesor utilizara cualquier recurso en su clase en vivo para transmitir la información y conocimientos (videos, juegos en línea, audios, pizarra, etc). Todo el tiempo de clase será en inglés. No se hablara en español</p>
        </div>
        <div id="q-5">
          <h4> ¿Cuál es su metodología?</h4>
          <p>La metodología de estudio es dinámica (interacción profesor – alumno –profesor), comunicativa (el estudiante se verá forzado a hablar y usar el idioma por la misma dinámica de clase), repetitiva (el alumno deberá repetir siempre durante el primer año para asegurar una buena pronunciación), contextual (el profesor transportara al alumno a situaciones reales con lenguaje real dependiendo de la situación y el contexto) e integral (el profesor trabajara y ayudara al estudiante a desarrollar las 4 habilidades lingüísticas, a saber: producción oral, comprensión auditiva, comprensión lectora y la escritura). De este modo se asegura que el programa en efecto le permitirá al estudiante adquirir un nivel de bilingüismo aceptable al final de su programa de estudios con CENSOL.</p>
        </div>


        <div id="q-6">
          <h4> ¿Cuál es el material de estudio que utilizan?</h4>
          <p>El material didáctico a utilizar es la serie INTERCHANGE y PASSAGES de Cambridge University Press, el mejor del mercado al ser el más completo y actualizado. Se utilizaran sus libros del estudiante, libro de ejercicios, cds de audio, software con ejercicios gramaticales, de audio y video; y demás recursos disponibles para garantizar el buen aprendizaje del alumno.</p>
        </div>
        <div id="q-7">
          <h4>¿Cuál es su horario?</h4>
          <p>LUNES A VIERNES 7:30am a 8:00pm <br>
              SABADOS 8:30am a 4:30pm
              </p>
        </div>

        <div id="q-8">
          <h4> ¿Cuánto es la duración de una clase?</h4>
          <p>Nuestras sesiones tienen una duración de  2 horas académicas y en programas de asistencia de una vez por semana son 4 horas académicas.</p>
        </div>


        <div id="q-10">
          <h4>  ¿Cuantos niveles me ofrece Censol Guayana?</h4>
          <p>Nuestro programa se divide en 6 Niveles adaptados en su totalidad al Marco Común de referencia para las lenguas, lo que se traduce en que su aprendizaje tiene validez internacional en más de 47 países.</p>
        </div>

        <div id="q-11">
          <h4>   ¿Cuentan con laboratorios?</h4>
          <p>No, sin embargo nuestras aulas de clases cuenta con computadoras mediante las cuales los estudiantes pueden realizar sus actividades multimedia y realizar sus respectivos ejercicios en sus horarios de clases correspondientes a su nivel.</p>
        </div>

        <div id="q-12">
          <h4>   ¿De dónde son sus profesores?</h4>
          <p>Nuestros profesores son de origen venezolanos aunque algunas veces son de origen nativo con certificación nacional e internacional para la enseñanza del idioma inglés, francés, portugués, alemán, chino mandarín y japonés. </p>
        </div>

        <div id="q-13">
          <h4>   ¿En cuánto tiempo estaré preparado para comunicarme en Inglés?</h4>
          <p>Dependerá de la frecuencia que usted elija para sus clases. Además del nivel que posea (En caso de conocer o tener bases del idioma) y la facilidad que tenga para aprender el idioma.<br>

          Tenemos programas intensivos donde el alumno se estará comunicando en un tiempo aproximado de dos meses. En los programas interdiarios  regulares el alumno se estará comunicando en un tiempo aproximado de 4 meses. Sin embargo desde la primera clase el alumno empezara a interactuar utilizando el idioma Inglés.</p>
        </div>

        <div id="q-14">
          <h4>  ¿Puedo tomar las clases en mi oficina?</h4>
          <p>Con nuestros programas usted podrá verse beneficiado de nuestra metodología y nuestros profesores certificados en la comodidad de su oficina. Para lo cual Censol Guayana le brinda excelentes alternativas en cuanto a costos y horarios.</p>
        </div>

        <div id="q-15">
          <h4>¿Qué tipo de certificación tienen en Censol Guayana?</h4>
          <p>Los estudios están avalados por las diferentes asociaciones de enseñanza de idiomas en Venezuela y el mundo: INCES, AVAA, ASOVELE, BRITISH COUNCIL, etc. Al contar con un certificado de estudios de inglés emitido por CENSOL, puede confiar que sus estudios de inglés son reconocidos en Venezuela y en los países que siguen los lineamientos para enseñanza de los idiomas de la Comunidad Europea (más de 50 países actualmente, lista que puede encontrar en internet), ya que usted curso estudios con el material didáctico de la Universidad de Cambridge, el cual es reconocido y avalado por dicho organismo; así como por la certificación nacional e internacional de nuestros profesores.</p>
        </div>

      </div>

    </div>
  </section>


@endsection

@section('scripts')
  <script type="text/javascript">

  $(document).scroll(function() {
    if ($('#btnFaqs').offset().top > $('#faq-content').offset().top + $('#faq-content').height()){
      $('#btnFaqs').css('transform','rotate(0deg)');
      $('#btnFaqs').css('opacity','1');
    }else{
      $('#btnFaqs').css('transform','rotate(180deg)');
      $('#btnFaqs').css('opacity','0');
    }
  });

  function animScroll(elem) {
    $(elem).animatescroll({easing:'easeInOutQuad',scrollSpeed:1500});
  }
  </script>
@endsection
