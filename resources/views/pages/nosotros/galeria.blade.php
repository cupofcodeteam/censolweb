@extends('partials.layout')

@section('title','CENSOL | Nosotros')

@section('content')

  <div id="gallery-page">
    <div class="text-center page-breadcrumb">

    </div><!--/.page-breadcrumb-->
  </div>

  <section id="gallery">
    <div class="welcome text-center">
        <h1> Galeria</h1>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <img id="#img1" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
          <div class="col-md-3">
            <img id="#img2" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
          <div class="col-md-3">
            <img id="#img3" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
          <div class="col-md-3">
            <img id="#img4" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <img id="#img5" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
          <div class="col-md-3">
            <img id="#img6" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
          <div class="col-md-3">
            <img id="#img7" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
          <div class="col-md-3">
            <img id="#img8" class="image" src="/images/home/about/about.jpg" alt="Alt">
          </div>
        </div>
    </div>

    <div id="img-modal" class="modal">
      <span class="close" onclick="$(#img-modal).css('display':'none')"> &times; </span>

      <img class="modal-content" id="img01">

      <div id="caption"></div>
    </div>
  </section>

@endsection
