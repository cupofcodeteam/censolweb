@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')

<div class="text-center page-breadcrumb">
  <div class="container">

  </div>
</div><!--/.page-breadcrumb-->

<div class="welcome  text-center">
  <h1> ESCUELA DE INGLES PARA NIÑOS</h1>
</div>
<section class="informacion-1" class="">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
    <li class="breadcrumb-item"> Idiomas </li>
    <li class="breadcrumb-item"> Ingles </li>
    <li class="breadcrumb-item active"> Ingles para niños</li>
  </ol>
  <div class="container">
    <div class="row padding-bottom">

      <div class="col-md-6 ">
        <p>Aprende con nosotros en un entorno 100% en ingles, donde contaras con dvds y cds de videos, audios y textos para facilitar el aprendizaje continuo y garantizar el dominio completo del idioma de ingles al finalizar los programas de estudios.<br><br>
          El programa de Ingles para niños cuenta  con la Serie <strong>“BACKPACK”</strong> de la Editorial PEARSON-LONGMAN, de Mario Herrera y Diane Pinkley, segunda edición, New York, 2003 de <strong> 6 niveles</strong> </p>
        </div>
        <div class="col-md-6 appear-right">
          <img class="img-responsive" src="/images/ingles/girl-kids.jpeg">

        </div>
      </div>

      <div class="row">
        <div class="col-md-4 text-center">
          <img class="img-circle appear-left" src="/images/ingles/reloj-circular.png" alt="" width="140" height="140">
          <h2>Horarios</h2>
          <p>Lunes y miércoles:  2:00pm a 5:00pm <br>
            Martes y jueves:  2:00pm a 5:00pm</p>

          </div>

          <div class="col-md-4 text-center appear-zoom">
            <img class="img-circle" src="/images/ingles/calendario.png" alt="" width="140" height="140">
            <h2>Duración</h2>
            <p>4 meses por nivel</p>

          </div>

          <div class="col-md-4 text-center appear-right">
            <img class="img-circle" src="/images/ingles/certificado.png" alt="" width="140" height="140">
            <h2>Metodología</h2>
            <p>Nuestra metodología de estudio esta certificados por la Universidad de Cambridge</p>

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


  @endsection
