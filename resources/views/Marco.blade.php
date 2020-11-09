@extends('layouts.master')
@section('title','Marco Grassi')
@section('header')
    <h1>Marco Grassi</h1>
    <img src="/images/Marco.jpg" alt="S">
@stop
@section('navbar')
@stop
@section('content')
    <h2>Pequeña Biografía</h2>
    <p> Marco Grassi es un artista italiano nacido en 1987 en Regio Emilia, donde vive y trabaja actualmente.
        Tras finalizar su ciclo en la Academia de Arte de Bolonia, decidió dedicarse a tiempo completo a la pintura,
        pasión que le acompaña desde la infancia.
        Su primera muestra personal tuvo lugar en su ciudad natal, Reggio Emilia, en diciembre de 2013, en la antigua
        sala del Palacio Calcagni.
        «A los 20 años comencé a estudiar arte en la Academia de Bellas Artes de Bolonia después de graduarme en
        Contabilidad. Asistí a un curso sobre restauración de pintura que me permitió entrar en contacto con la realidad
        del arte antiguo. Esto me hizo decidir lo que quería hacer por el resto de mi vida. Aprendí pintura y dibujo por
        mi cuenta. El único curso al que asistí fue a uno de dibujo del natural. No he recibido ninguna influencia directa
        sobre lo que podría o debería haber hecho, toda mi obra es sólo el resultado de mi imaginación y creatividad, y
        estoy muy orgulloso de ello.»</p>
    <br>
    <h3>Algunas de sus obras</h3>
    <img src="/images/Marco 1.jpg" alt="Pintura 1"> <br><br><br>
    <img src="/images/Marco 2.jpg" alt="Pintura 2"> <br><br><br>
    <img src="/images/Marco 3.jpg" alt="Pintura 3"> <br><br><br>

@stop
@section('footer')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
    Derechos reservados {{date('Y')}}
@stop