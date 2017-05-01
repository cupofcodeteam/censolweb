@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')

<div class="text-center page-breadcrumb">
  <div class="container">

  </div>
</div><!--/.page-breadcrumb-->

<div class="welcome  text-center">
  <h1> Español </h1>
</div>

<section class="informacion-1" class="">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
    <li class="breadcrumb-item active"> Español </li>
  </ol>
  <div class="container">
    <div class="row padding-bottom">

      <div class="col-md-6 ">
        <h2>Programa De Español En Grupos, Personalizados y Corporativos</h2>
        <p>Aprende con nosotros en un entorno 100% en el Idioma Español, donde contaras con dvds y cds de videos, audios y textos para facilitar el aprendizaje continuo y garantizar el dominio completo del idioma .Facilitando el metodo de estudio con nuestras diferentes modalidades.  <br><br>
          El programa de Español cuenta con la Serie <strong> de la Editorial ANAYA,</strong> en colaboración con la UNIVERSIDAD DE ALCALA y el INSTITUTO CERVANTES, 3ra edición, Madrid, ESPAÑA. 2006. de <strong> 4 de niveles </strong>
        </p>
      </div>
      <div class="col-md-6 ">
        <img class="img-responsive" src="/images/ingles/manager.jpeg">

      </div>
    </div>

    <div class="row">
      <div class="col-md-4 text-center">
        <img class="img-circle" src="/images/ingles/reloj-circular.png" alt="" width="140" height="140">
        <h2>Horarios</h2>
        <p>A convenir con el estudiante o cliente corporativo</p>

      </div>

      <div class="col-md-4 text-center">
        <img class="img-circle" src="/images/ingles/calendario.png" alt="" width="140" height="140">
        <h2>Duración en Grupo</h2>
        <p>4 meses por nivel a grupos</p>

      </div>

      <div class="col-md-4 text-center">
        <img class="img-circle" src="/images/ingles/calendario.png" alt="" width="140" height="140">
        <h2>Duración personalizado</h2>
        <p> 3 meses por nivel en curso personalizado</p>

      </div>
    </div>
  </div>
</div>
</section>


<section id="informacion-2">

  <div class="jumbotron text-center">
    <div class="container">

      <h1>Contactános</h1>
      <p> Conoce más de nuestro Instituto de idiomas, aprende y divertete con nosotros </p>
      <p><a class="btn btn-primary btn-lg" href="/nosotros/contacto" role="button">Más Información</a></p>
    </div>
  </div>


</section>



@endsection
