@extends('layouts.master')
@section('title', 'Repaso')

@section('header')
@stop

@section('navbar')
@stop

@section('content')
<div class="container" align="center">
    <h2>Salvador Dalí</h2>
        <img src="images/SalvadorDali(RETRATO).jpg" alt="Retrato Jean-Leon Geróme" width="400" height="400">
        <br>
        <p><b> Salvador Felipe Jacinto Dalí i Domènech,1​ marqués de Dalí de Púbol (Figueras, 11 de mayo de 1904-ibídem, 23 de enero de 1989), fue un pintor, escultor, grabador, escenógrafo y escritor español del siglo XX. Se le considera uno de los máximos representantes del surrealismo. <br>
        Salvador Dalí es conocido por sus impactantes y oníricas imágenes surrealistas. Sus habilidades pictóricas se suelen atribuir a la influencia y admiración por el arte renacentista. También fue un experto dibujante.2​3​ Los recursos plásticos dalinianos también abordaron el cine, la escultura y la fotografía, lo cual le condujo a numerosas colaboraciones con otros artistas audiovisuales. Tuvo la capacidad de acrisolar un estilo genuinamente personal y palpable al primer contacto, que en realidad era muy ecléctico y que «succionó» de innovaciones ajenas. Una de sus pinturas más célebres es La persistencia de la memoria (también conocida como Los relojes blandos), realizada en 1931. <br>
        Como artista extremadamente imaginativo, manifestó una notable tendencia al narcisismo y la megalomanía, cuyo objeto era atraer la atención pública. Esta conducta irritaba a quienes apreciaban su arte y justificaba a sus críticos, que rechazaban sus conductas excéntricas como un reclamo publicitario ocasionalmente más llamativo que su producción artística.4​ Dalí atribuía su «amor por todo lo que es dorado y resulta excesivo, su pasión por el lujo y su amor por la moda oriental» a un autoproclamado «linaje arábigo»,5​ que remontaba sus raíces a los tiempos de la dominación árabe de la península ibérica. <br>
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
              <img src="images/LaPersistenciaDeLaMemoria.jpg" alt="LaPersistenciaDeLaMemoria" style="width:100%;" height="300" width="500" >
            </div>
      
            <div class="item">
              <img src="images/CristoDeSanJuanDeLaCruz.jpg" alt="CristoDeSanJuanDeLaCruz" style="width:100%;" height="300" width="500" >
            </div>
         
            <div class="item">
              <img src="images/SueñoCausado.jpg" alt="SueñoCausado" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/ConstruccionBlanda.jpg" alt="ConstruccionBlanda" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/Metamorfosis.jpg" alt="Metamorfosis" style="width:100%;" height="300" width="500" >
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
