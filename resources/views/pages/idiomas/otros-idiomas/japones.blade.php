@extends('partials.layout')

@section('title','CENSOL | Idiomas')

@section('content')

<div id="japones">
  <div class="text-center page-breadcrumb">
    <div class="container">
    </div>
  </div><!--/.page-breadcrumb-->

  <div class="welcome  text-center">
    <h1> JAPONES</h1>
  </div>
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
    <li class="breadcrumb-item"> Idiomas </li>
    <li class="breadcrumb-item"> Otros Idiomas </li>
    <li class="breadcrumb-item active"> Japonés</li>
  </ol>

  <div id="projects-details" class="padding-top">
    <div class="informacion-4">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2>Programa de Japonés</h2>
            <p>Japonés es nuestro idioma más exigente de aprender, por eso toma más tiempo por nivel, aprende esta asombroso idioma con los mejores profesores de la zona, contamos con los libros del profesor, libro del estudiante, libro de ejercicios, cd de audio, de <strong> la Editorial NIPPAN SHUPPAN HANBAI </strong>, compilado por Iwao Ogawa, Presidente de la CORPORACION 3A, 1RA Edición, Tokyo, Japon, 2010.

            </p>

            <div class="row">
              <div class="col-md-6">
                <p><img class="" src="/images/ingles/reloj-circular-p.png">  Por definir </p>
              </div>
              <div class="col-md-6">
                <p><img class="" src="/images/ingles/calendario-p.png"> 11 meses por nivel</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div id="image-wrapper">
              <div class="image-1">
                <img class="img-responsive" src="/images/idiomas/japan.jpg" alt="" />
              </div>
              <div class="image-2">
                <img class="img-responsive" src="/images/home/idiomas/i66.jpg" alt="" />
              </div>
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



  @endsection
