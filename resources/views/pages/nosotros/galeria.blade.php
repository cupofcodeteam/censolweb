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
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/"> Inicio</a></li>
        <li class="breadcrumb-item"> Nosotros </li>
        <li class="breadcrumb-item active"> Galeria</li>
    </ol>
    <div class="container">
        <div class="row">
          <div class="col-md-3 wrapper">
            <img id="#img1" class="image" data-index="0" src="/images/about/instalaciones-slider/inst1.jpg" alt="Nuestras Instalaciones">
          </div>
          <div class="col-md-3 wrapper">
            <img id="#img2" class="image" data-index="1" src="/images/about/instalaciones-slider/inst2.jpg" alt="Nuestras Instalaciones">
          </div>
          <div class="col-md-3 wrapper">
            <img id="#img3" class="image" data-index="2" src="/images/about/instalaciones-slider/inst3.jpg" alt="Nuestras Instalaciones">
          </div>
          <div class="col-md-3 wrapper">
            <img id="#img4" class="image" data-index="3" src="/images/about/instalaciones-slider/inst4.jpg" alt="Nuestras Instalaciones">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 wrapper">
            <img id="#img5" class="image" data-index="4" src="/images/about/instalaciones-slider/inst5.jpg" alt="Nuestras Instalaciones">
          </div>
          <div class="col-md-3 wrapper">
            <img id="#img6" class="image" data-index="5" src="/images/about/instalaciones-slider/inst6.jpg" alt="Nuestras Instalaciones">
          </div>
          <div class="col-md-3 wrapper">
            <img id="#img7" class="image" data-index="6" src="/images/about/instalaciones-slider/inst7.jpg" alt="Nuestras Instalaciones">
          </div>
          <div class="col-md-3 wrapper">
            <img id="#img8" class="image" data-index="7" src="/images/about/instalaciones-slider/inst8.jpg" alt="Alt">
          </div>
        </div>
    </div>

    <div id="img-modal" class="modal">
      <span class="close" onclick="$('#img-modal').css('display','none');"> &times; </span>

      <img class="modal-content" id="img01">

      <div id="caption"></div>

      <div class="slide-control slide-control-left" style="left: 0;" >
        <a href="#" style="color:#fff">
          <i class="glyphicon glyphicon-chevron-left" aria-hidden="true"></i>
        </a>
      </div>
      <div class="slide-control slide-control-right"  style="right: 0;" >
        <a href="#" style="color:#fff">
          <i class="glyphicon glyphicon-chevron-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>

@endsection

@section('scripts')
  <script type="text/javascript">
    $('.wrapper').height($('.wrapper').width());

    $(window).resize(function() {
      $('.wrapper').height($('.wrapper').width());
    });

    var modal = $("#img-modal");

    var img = $(".image");
    var modalImg = $("#img01");
    var captionText = $("#caption");
    var image_array = $('.image').toArray();
    var index = 0;

    img.click(function(){
      index  = parseInt($(this).attr('data-index'));
      modal.css('display','block');
      modalImg.attr('src',this.src);
      captionText.html(this.alt);
      $('body').css('overflow','hidden');
      if (index == 7) $('.slide-control-right').addClass('inactive');
      else $('.slide-control-right').removeClass('inactive');

      if (index == 0) $('.slide-control-left').addClass('inactive');
      else $('.slide-control-left').removeClass('inactive');
    });

    var span = $(".close");

    span.click(function() {
      modal.css('display','none');
      $('body').css('overflow','auto');
    });



    $('.slide-control-right').click(function(e) {
      e.preventDefault();
      if (index+1 < 8){
        index=index+1;
        $('.slide-control-left').removeClass('inactive');
        if (index == 7) $('.slide-control-right').addClass('inactive');
        modalImg.css('transition','all .7s ease-in-out');
        modalImg.css('transform','translateX(-60%)');
        modalImg.css('opacity','0');
        setTimeout(function() {
          modalImg.attr('src',$(image_array[index]).prop('src'));
           captionText.html($(image_array[index]).prop('alt'));
          modalImg.prop("style","");
          modalImg.css('opacity','0');
          modalImg.css('transform','translateX(60%)');
          setTimeout(function() {
            modalImg.css('transition','all .7s ease-in-out');
            modalImg.css('transform','translateX(0)');
            modalImg.css('opacity','1');
          },20);
        },600);
      }
    });

    $('.slide-control-left').click(function(e) {
      e.preventDefault();
      if (index-1 >= 0){
        index=index-1;
        $('.slide-control-right').removeClass('inactive');
        if (index == 0) $('.slide-control-left').addClass('inactive');
        modalImg.css('transition','all .7s ease-in-out');
        modalImg.css('transform','translateX(60%)');
        modalImg.css('opacity','0');
        setTimeout(function() {
          modalImg.attr('src',$(image_array[index]).prop('src'));
           captionText.html($(image_array[index]).prop('alt'));
          modalImg.prop("style","");
          modalImg.css('opacity','0');
          modalImg.css('transform','translateX(-60%)');
          setTimeout(function() {
            modalImg.css('transition','all .7s ease-in-out');
            modalImg.css('transform','translateX(0)');
            modalImg.css('opacity','1');
          },20);
        },600);
      }
    });
  </script>
@endsection
