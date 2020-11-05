@extends('layouts.master')
@section('title', 'Repaso')

@section('header')
@stop

@section('navbar')
@stop

@section('content')
<div class="container" align="center">
    <h2>Alexandre Cabanel</h2>
    <img src="images/Alexandre Cabanel (RETRATO).jpg" alt="Retrato de Alexandre Cabanel" width="350" height="400">
    <br><br>
    <p><b> Alexandre Cabanel fue un importante pintor francés, pero un no menos importante profesor de arte que tuvo centenares de alumnos, muchos de los cuales triunfaron en mayor o menor medida dentro de la pintura siguiendo las lecciones de este maestro. Cabanel fue uno de esos academicistas que siguieron la tradición pictórica (en el caso de Cabanel muy ligada al manierismo) adaptándola al siglo XIX, cuando ya se presentía que el arte empezaba a girar en otras direcciones. <br>
        Muy joven ya dio buenas muestras de su talento ganando medallas como por ejemplo la prestigiosa medalla en el Salón de Roma. Precisamente en Italia absorbería su característico estilo. Su fama y prestigio fueron medrando año a año hasta convertirse en uno de los artistas más aclamado por coleccionistas e instituciones no sólo francesas, sino de todo el mundo. El emperador Napoleón III se consideraba a sí mismo un fan de Cabanel.     <br>
        Sobre todo pintor de historia, además de un excelente retratista, Cabanel supo respetar la tradición pictórica occidental, pero no rechazaba del todo movimientos como el romanticismo, que se respira temáticamente en muchas de sus obras. Aunque eso sí… ni hablar de impresionismo… Para él ese grupo de manchas caóticas no era pintura. Sentía una especial antipatía por Manet, aunque la animadversión era mutua. <br>
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
              <img src="images/El angel _caido.jpg" alt="El Angel Caido" style="width:100%;" height="300" width="500" >
            </div>
      
            <div class="item">
              <img src="images/Harmony.jpg" alt="Harmony" style="width:100%;" height="300" width="500" >
            </div>
         
            <div class="item">
              <img src="images/Phaedra.jpg" alt="Phaedra" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/Saint_Monica.jpg" alt="Saint_Monica" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/The_evening_angel.jpg" alt="The Evening Angel" style="width:100%;" height="300" width="500" >
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
