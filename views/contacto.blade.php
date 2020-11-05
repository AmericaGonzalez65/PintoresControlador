@extends('layouts.master')

@section('header')
<h1 align="center">Practica </h1>
@stop

@section('navbar')
@parent
@stop

@section('content')
<h1>Hola!</h1>    
    <br><br>
    <div class="container" align="center">
    <p>Mi nombre es America Renee Gonzalez Hernandez. He realizado esta pagina web por un trabajo escolar.</p>
    <br><br>
    <img src="images/contacto.jpg" alt="America Gonzalez" width="300" height="400" > 
    <br><br>
    <p>Para cualquier duda o aclaracion, manda un correo a <b>amerikaglez65@gmail.com</b></p>
    <br><br>
    </div>
@stop

@section('footer')
<img src="/images/sticker.jpeg" alt="" height="50" width="50"> <br>
@parent
Derechos reservados <br>
AmericaGonzalez
@stop