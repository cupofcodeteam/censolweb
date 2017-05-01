@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')

<div  class="text-center page-breadcrumb">
  <div class="container">

  </div>
</div><!--/.page-breadcrumb-->


<div class="welcome  text-center">
  <h1> INGLES PARA JOVENES Y ADULTOS PERSONALIZADOS</h1>
</div>
<section class="informacion-1" class="">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
    <li class="breadcrumb-item"> Idiomas </li>
    <li class="breadcrumb-item"> Ingles </li>
    <li class="breadcrumb-item active"> Ingles personalizado</li>
  </ol>
  <div class="container">
    <div class="row padding-bottom">

      <div class="col-md-8 ">
        <p>Aprende Inglés a través de un entorno <strong>100%</strong> en el idioma, desarrollando tus aptitudes, habilidades y conocimiento para dominar el idioma inglés de manera eficiente y eficaz. Donde contaras con dvds y cds de videos, audios y textos para facilitar el aprendizaje continuo y garantizar el dominio completo del idioma de ingles al finalizar los programas de estudios</p>

        <p>Material a utilizar Serie <strong>“INTERCHANGE” Y “PASSAGES”</strong>, de la Editorial de la UNIVERSIDAD DE CAMBRIDGE, de Jack C. Richards, cuarta edición, New York, 2013. </p>

      </div>
      <div class="col-md-4 text-center ">
        <img class=" img-responsive appear-right" src="/images/ingles/personalizado.jpeg" alt="">
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 text-center appear-left">
        <img src="/images/ingles/reloj-circular.png" alt="" width="140" height="140">
        <h2>Horario</h2>
        <p> A convenir con el estudiante </p>
      </div>

      <div class="col-md-4 text-center appear-zoom">
        <img src="/images/ingles/certificado.png" alt="" width="140" height="140">
        <h2>Metodología</h2>
        <p>Nuestra metodología de estudio esta certificados por la Universidad de Cambridge</p>

      </div>

      <div class="col-md-4 text-center appear-right">
        <img class="img-circle" src="/images/ingles/calendario.png" alt="" width="140" height="140">
        <h2>Duración</h2>
        <p>2 meses (8 semanas)</p>

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
</section >



@endsection
