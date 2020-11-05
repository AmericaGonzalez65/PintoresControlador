@extends('layouts.master')
@section('title', 'Repaso')

@section('header')
@stop

@section('navbar')
@stop

@section('content')
<div class="container" align="center">
    <h2>Jean-Leon Geróme</h2>
        <img src="images/Jean-Léon Gerôme.jpg" alt="Retrato Jean-Leon Geróme" width="400" height="400">
        <br>
        <p><b> Jean-Léon Gérôme fue un academicista francés que realizó obras de temática histórica y mitológica llevando a lo más alto el arte académico francés. Como Bouguereau, otro ilustre artista del académicismo, Gérôme fue principio fue un convencido anti-impresionista, pero poco a poco se fue dando cuenta de la importancia del movimiento, llegando a aceptarlo. <br>
            Jean-Léon Gérôme fue el clásico academicista: Excelente estudiante, viajó a Italia para conocer a los antiguos, ganó premios oficiales, expuso en los salones del estado, fue admirado por críticos y querido por el público, lo enchufaron como maestro de la Escuela de Bellas Artes, fue llamado como decorador de palacios y nombrado Caballero de la Legión de Honor. Un sinónimo de popularidad y prestigio. <br>
            Con 30 años Gérôme viaja a Turquía y Egipto. Estos viajes por oriente influyeron notablemente en su obra y bastantes cuadros de la época están inspirados en ese exotismo. <br>
            En esos años también empieza a nacer la «moda decadente» del impresionismo, pero después de la exposición de Édouard Manet en 1884, finalmente admitió que «no era tan malo como pensaba». <br>
            Murió en su taller en 1904, justo cuando nacían las vanguardias, antítesis de su obra. Dicen que al espichar se encontraba delante de un retrato de su admirado Rembrandt.
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
              <img src="images/Consummatum_est.jpg" alt="Consummatum Est" style="width:100%;" height="300" width="500" >
            </div>
      
            <div class="item">
              <img src="images/Diogenes.jpg" alt="Diogenes" style="width:100%;" height="300" width="500" >
            </div>
         
            <div class="item">
              <img src="images/Mercado_de_esclavos.jpg" alt="Mercados de esclavos" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/Pollice_verso.jpg" alt="Pollice Verso" style="width:100%;" height="300" width="500" >
            </div>

            <div class="item">
              <img src="images/The_snake_charmer.jpg" alt="The Snak Charmer" style="width:100%;" height="300" width="500" >
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
