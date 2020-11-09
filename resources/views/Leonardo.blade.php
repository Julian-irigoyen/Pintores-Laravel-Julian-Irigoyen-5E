@extends('layouts.master')
@section('title','Leonardo da Vinci')
@section('header')
    <h1>Leonardo da Vinci</h1>
    <img src="/images/Leo.jpg" alt="Artista" style="width: 300px">
@stop
@section('navbar')
@stop
@section('content')
    <h2>Pequeña Biografía</h2>
    <p>Leonardo di ser Piero da Vinci(15 de abril de 1452), fue un polímata florentino del Renacimiento italiano.
        Fue a la vez pintor, anatomista, arquitecto, paleontólogo, artista, botánico, científico, escritor,
        escultor, filósofo, ingeniero, inventor, músico, poeta y urbanista. Murió acompañado de Francesco Melzi,a
        quien legó sus proyectos, diseños y pinturas. Tras pasar su infancia en su ciudad natal, Leonardo estudió
        con el pintor florentino Andrea de Verrocchio.
        Frecuentemente descrito como un arquetipo y símbolo del hombre del Renacimiento, genio universal,
        además de filósofo humanista cuya curiosidad infinita solo puede ser equiparable a su capacidad inventiva,
        Leonardo da Vinci es considerado uno de los más grandes pintores de todos los tiempos y, probablemente, la
        persona con el mayor número de talentos en múltiples disciplinas que jamás ha existido.</p>
    <br>
    <h3>Algunas de sus obras</h3>
    <img src="/images/Leo 1.jpg" alt="Pintura 1"> <br><br><br>
    <img src="/images/Leo 2.jpeg" alt="Pintura 2"> <br><br><br>
    <img src="/images/Leo 3.jpg" alt="Pintura 3"> <br><br><br>

@stop
@section('footer')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
    Derechos reservados {{date('Y')}}
@stop