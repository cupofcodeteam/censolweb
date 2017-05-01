@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')

<div id="italiano">


  <div class="text-center page-breadcrumb">
    <div class="container">
    </div>
  </div><!--/.page-breadcrumb-->

  <div class="welcome  text-center">
    <h1> ITALIANO</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
    <li class="breadcrumb-item"> Idiomas </li>
    <li class="breadcrumb-item"> Otros Idiomas </li>
    <li class="breadcrumb-item active"> Italiano</li>
  </ol>

  <div id="projects-details" class="padding-top">
    <div class="informacion-4">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2>Programa de Italiano</h2>
            <p>Aprende esta asombroso idioma con los mejores profesores de la zona, contamos con los libros del profesor, libro del estudiante, libro de ejercicios, cd de audio, de la <strong>Editorial EDITRICE LA SCUOLA, de la Comunità di S. Egidio</strong>, 1ra Edición, Roma, 2010.
            </p>

            <div class="row">
              <div class="col-md-6">
                <p><img class="" src="/images/ingles/reloj-circular-p.png">  viernes de 9:00am a 12.30am  </p>
              </div>
              <div class="col-md-6">
                <p><img class="" src="/images/ingles/calendario-p.png"> 4 niveles en curso personalizado o en grupo</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div id="image-wrapper">
              <div class="image-1">
                <img class="img-responsive" src="/images/idiomas/italy.jpg" alt="" />
              </div>
              <div class="image-2">
                <img class="img-responsive" src="/images/home/idiomas/i55.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row other-products padding-top padding-bottom text-center">
      <div class="container">
        <div class="section-title">
          <h2>otros <span>programas</span></h2>
        </div>
        <div class="col-sm-3">
          <div class="project-content">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/aleman">
                <img class="img-responsive" src="/images/home/idiomas/i1.jpg" alt="" />
              </a>
              <div class="description">
                <h3>ALEMAN</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="project-content">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/arabe">
                <img class="img-responsive" src="/images/home/idiomas/i2.jpg" alt="" />
              </a>
              <div class="description">
                <h3>ÁRABE</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="project-content">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/frances">
                <img class="img-responsive" src="/images/home/idiomas/i3.jpg" alt="" />
              </a>
              <div class="description">
                <h3>FRANCES</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="project-content">
            <div class="project small-content">
              <a href="/idiomas/otros-idiomas/mandarin">
                <img class="img-responsive" src="/images/home/idiomas/i7.jpg" alt="" />
              </a>
              <div class="description">
                <h3>MANDARIN</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!--/Project-details-->


  @endsection
