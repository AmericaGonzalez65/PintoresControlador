@extends('layouts.master')
@section('title', 'Repaso')

@section('header')
@stop

@section('navbar')
@stop

@section('content')
<div class="container" align="center">
    <h2>Pieter Brueghel</h2>
    <img src="images/pieter brueghel el viejo (RETRATO).jpg" alt="Retrato de Pieter Brueghel" width="300" height="400">
    <br>
    <p><b>(Breda, Países Bajos, h. 1525 - Bruselas, 1569) Pintor holandés. Principal pintor flamenco del siglo XVI, en cuya obra culmina la tradición pictórica iniciada en el siglo anterior por Jan van Eyck, en la actualidad es considerado una de las grandes figuras de la historia de la pintura. Realizó sobre todo cuadros de paisaje, de género y de escenas campesinas, en los que con un estilo inspirado en el Bosco reflejó la vida cotidiana con realismo, abundancia de detalles y un gran talento narrativo. <br>
        Pieter se crio en la ciudad de Bruselas con una familia de pintores. Formados ambos hermanos con su padre, también su abuela Mayken Verhulst les enseñaría la utilización de la acuarela. A la edad de cinco años, Pieter Brueghel quedó huérfano de padre, pero heredó toda su tradición artística. El joven artista llegó a aprender con el pintor de paisajes flamenco Gillis van Coninxloo; años más tarde, se casó con la hija de su maestro. Viajó a Francia e Italia y pasó algún tiempo allí hasta que regresó a Amberes, lugar en el que finalmente murió.
    </b></p>
    <br>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/Caída_de_los_ángeles_rebeldes.jpg" alt="Caida de los angeles rebeldes" style="width:100%;" height="300" width="500" >
            </div>
      
            <div class="item">
              <img src="images/El_Misántropo.jpg" alt="El Misántropo" style="width:100%;" height="300" width="500" >
            </div>
         
            <div class="item">
              <img src="images/El_triunfo_de_la Muerte.jpg" alt="El triunfo de la muerte" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/La_torre_de_Babel.jpg" alt="La torre de babel" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/twelve_proverbs.jpg" alt="Twelve Proverbs" style="width:100%;" height="300" width="500" >
            </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Siguiente</span>
          </a>
    </div>

    </div>
    <br><br>
@stop

@section('footer')
@stop
