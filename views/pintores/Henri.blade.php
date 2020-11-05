@extends('layouts.master')
@section('title', 'Repaso')

@section('header')
@stop

@section('navbar')
@stop

@section('content')
<div class="container" align="center">
    <h2>Henri Rousseau</h2>
<img src="images/Henri Rousseau_(RETRATO).jpg" alt="Retrato de Henri Rousseau" width="400" height="400">
    <br>
    <p><b> Henri Julien Félix Rousseau, también llamado «el aduanero» fue uno de esos artistas con muy poca o nula formación académica, pero gran frescura, que es exactamente lo que necesitaba el arte moderno definales del siglo XIX. <br>
        Un arte, el naíf (ingenuo), que combina la ingenuidad formal con una cierta sofisticación temática y compositiva, y que acabaría influyendo notablemente en vanguardias como el fauvismo o el surrealismo, con el mismísimo Picasso a la cabeza. <br>
        Rousseau no se dedicó a la pintura hasta 1893 (49 años). Antes fue empleado de las oficinas fiscales municipales de París (de ahí su sobrenombre). Una vez abandonado su puesto y metido en el mundo de la pintura fue alabado por sus colegas, pero ignorado o directamente ridiculizado por los críticos. Vivía de una pequeña pensión y de los retratos que pintaba a sus vecinos. <br>
        Picasso, celebró en 1908 en su taller del Bateau-Lavoir una velada en su honor como una mezcla de burla y homenaje (una soirée como en la película «La cena de los idiotas»). El aduanero, varias copas después dijo al español: «Somos los dos pintores más grandes de nuestra época, tú en el estilo egipcio y yo en el moderno…». <br>
        Su pintura destaca por un enorme detallismo (después de todo, Rousseau admiraba el arte académico), el uso de colores intensos y modulados sutilmente, la perspectiva acientífica y la temática exótica o directamente onírica. Esta forma de representar los sueños fue muy alabada por los surrealistas años después. <br>
        Debido a esta falta de academicismo, esa forma de pintar nacida en realidad de su ignorancia, fue precisamente su sello característico y lo que le valió la inmortalidad. <br>
        Pintar sin saber pintar (quizás si un poquito)… Y a la mierda 5 siglos de tradición pictórica.
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
            <img src="images/American_Indian_Struggling_with_a_Gorilla.jpg" alt="AMerican Indian Struggling With A Gorilla" style="width:100%;" height="300" width="500" >
          </div>
    
          <div class="item">
            <img src="images/La_encantadora_de_serpientes.jpg" alt="La encantadora de serpientes" style="width:100%;" height="300" width="500" >
          </div>
       
          <div class="item">
            <img src="images/Tour_Eiffel.jpg" alt="Tour Eiffel" style="width:100%;" height="300" width="500" >
          </div>

          <div class="item">
            <img src="images/Una_noche_de_carnaval.jpg" alt="Una Noche De Carnaval" style="width:100%;" height="300" width="500" >
          </div>

          <div class="item">
            <img src="images/Yo_mismo.jpg" alt="Yo Mismo" style="width:100%;" height="300" width="500" >
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
