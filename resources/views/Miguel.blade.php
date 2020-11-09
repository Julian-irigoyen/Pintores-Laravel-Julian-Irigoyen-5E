@extends('layouts.master')
@section('title','Miguel Ángel')
@section('header')
    <h1>Miguel Ángel</h1>
    <img src="/images/Miguel.jpg" alt="S">
@stop
@section('navbar')
@stop
@section('content')
    <h2>Pequeña Biografía</h2>
    <p>Michelangelo Buonarroti (6 de marzo de 1475), conocido en español como Miguel Ángel, fue un arquitecto,
        escultor y pintor italiano renacentista, considerado uno de los más grandes artistas de la historia tanto por
        sus esculturas como por sus pinturas y obra arquitectónica. Desarrolló su labor artística a lo largo de
        más de setenta años entre Florencia y Roma, que era donde vivían sus grandes mecenas, la familia Médici de
        Florencia y los diferentes papas romanos.
        Triunfó en todas las artes en las que trabajó, caracterizándose por su perfeccionismo.</p>
    <br>
    <h3>Algunas de sus obras</h3>
    <img src="/images/Miguel 1.png" alt="Pintura 1"> <br><br><br>
    <img src="/images/Miguel 2.jpg" alt="Pintura 2"> <br><br><br>
    <img src="/images/Miguel 3.jpg" alt="Pintura 3"> <br><br><br>

@stop
@section('footer')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
    Derechos reservados {{date('Y')}}
@stop