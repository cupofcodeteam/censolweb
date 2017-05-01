@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')

<div  class="text-center page-breadcrumb">
  <div class="container">

  </div>
</div><!--/.page-breadcrumb-->

<div class="welcome  text-center">
  <h1> INGLES PARA JOVENES Y ADULTOS</h1>
</div>
<section class="informacion-1" class="">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
    <li class="breadcrumb-item"> Idiomas </li>
    <li class="breadcrumb-item"> Ingles </li>
    <li class="breadcrumb-item active"> Ingles para jovenes y adultos</li>
  </ol>
  <div class="container">
    <div class="row padding-bottom">

      <div class="col-md-6 ">
        <p>Aprende Inglés a través de un entorno <strong>100%</strong> en el idioma, desarrollando tus aptitudes, habilidades y conocimiento para dominar el idioma inglés de manera eficiente y eficaz. Donde contaras con dvds y cds de videos, audios y textos para facilitar el aprendizaje continuo y garantizar el dominio completo del idioma de ingles al finalizar los programas de estudios<br> <br>
          Material a utilizar Serie <strong>“INTERCHANGE” Y “PASSAGES”</strong>, de la Editorial de la UNIVERSIDAD DE CAMBRIDGE, de Jack C. Richards, cuarta edición, New York, 2013. </p>
        </div>
        <div class="col-md-6">
          <img class="img-responsive appear-right" src="/images/ingles/Joven.jpg" alt="" width="500" height=auto>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 text-center appear-left">
          <img src="/images/ingles/AM.png" alt="" width="140" height="140">
          <h2>Horario Diurno</h2>
          <p>Martes a jueves: 7.30am a 9:00am <br>
            Martes a jueves:  9.30am a 11:00am <br>
            Martes a jueves: 11.30am a 1:00pm</p>

          </div>

          <div class="col-md-3 text-center appear-random">
            <img src="/images/ingles/PM.png" alt="" width="140" height="140">
            <h2>Horario Nocturno</h2>
            <p>Lunes y miércoles:5:00pm a 8:00pm<br>
              Martes y jueves: 5:00pm a 8:00pm <br>
              VIP Viernes: 4.30pm a 8:00pm</p>

            </div>

            <div class="col-md-3 text-center appear-random">
              <img src="/images/ingles/Saturday.png" alt="" width="140" height="140">
              <h2>Horario Sabatinos</h2>
              <p>VIP Sabados: 8.30am a 12pm <br>
                VIP Sabados:  1:00pm a 4:30pm</p>

              </div>

              <div class="col-md-3 text-center appear-right">
                <img class="img-circle" src="/images/ingles/calendario.png" alt="" width="140" height="140">
                <h2>Duración</h2>
                <p>4 meses por nivel</p>

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
