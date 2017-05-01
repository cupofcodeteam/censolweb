@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')
<div id="ielts">
  <div class="text-center page-breadcrumb">
    <div class="container">

    </div>
  </div><!--/.page-breadcrumb-->

  <div class="welcome  text-center">
    <h1> IELTS</h1>
  </div>

  <section class="informacion-1" class="">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
      <li class="breadcrumb-item"> Idiomas </li>
      <li class="breadcrumb-item"> Ingles </li>
      <li class="breadcrumb-item active"> IELTS</li>
    </ol>
    <div class="container">
      <div class="row padding-bottom">

        <div class="col-md-6 texto-pequeño">
          <p>Aprende en un entorno 100% en ingles, donde contaras con dvds y cds de videos, audios y textos para facilitar el aprendizaje continuo y el exito de la prueba a presentar. El material a utilizar será <strong> la Editorial de la UNIVERSIDAD DE CAMBRIDGE, 7ma Edición, Cambridge, Gran Bretaña, 2012. </strong><br>
          </p>
        </div>
        <div class="col-md-6 appear-right">
          <img class="img-responsive toelfimg" src="/images/home/ielts.png">

        </div>
      </div>

      <div class="row">
        <div class="col-md-4 text-center">
          <img class="img-circle appear-left" src="/images/ingles/reloj-circular.png" alt="" width="140" height="140">
          <h2>Horarios</h2>
          <p>Curso personalizado con horario a convenir con el estudiante</p>

        </div>

        <div class="col-md-4 text-center appear-zoom">
          <img class="img-circle" src="/images/ingles/calendario.png" alt="" width="140" height="140">
          <h2>Duración</h2>
          <p>2 meses (8 semanas)</p>

        </div>

        <div class="col-md-4 text-center appear-right">
          <img class="img-circle" src="/images/ingles/certificado.png" alt="" width="140" height="140">
          <h2>Metodología</h2>
          <p>IELTS 7 WITH ANSWERS</p>

        </div>
      </div>
    </div>
  </div>
</section>

<section class="informacion-2" class="padding-top">
  <div class="jumbotron text-center">
    <div class="container">

      <h1>Contactános</h1>
      <p> Conoce más de nuestro Instituto de idiomas, aprende y divertete con nosotros </p>
      <p><a class="btn btn-primary btn-lg" href="/nosotros/contacto" role="button">Más Información</a></p>
    </div>
  </div>
</section>
</div>

@endsection
