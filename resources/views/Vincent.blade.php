@extends('layouts.master')
@section('title','Vincent van Gogh')
@section('header')
    <h1>Vincent van Gogh</h1>
    <img src="/images/Vincent.jpg" alt="S">
@stop
@section('navbar')
@stop
@section('content')
    <h2>Pequeña Biografía</h2>
    <p>Vincent Willem van Gog (30 de marzo de 1853), ue un pintor neerlandés, uno de los principales exponentes
        del postimpresionismo.
        Desde joven tuvo inclinación hacia el dibujo. Su primer trabajo fue en una galería de arte. Más tarde se
        convirtió en pastor protestante y en 1879, a la edad de 26 años, se marchó como misionero a una región minera
        de Bélgica, donde comenzó a dibujar a la gente de la comunidad local. En 1885 pintó su primera gran obra, Los
        comedores de patatas. En ese momento su paleta se componía principalmente de tonos sombríos y terrosos. La luz
        y la preferencia por los colores vivos por la que es conocido surgió posteriormente, cuando se trasladó al sur
        de Francia, consiguiendo su plenitud durante su estancia en Arlés en 1888.
    </p>
    <br>
    <h3>Algunas de sus obras</h3>
    <img src="/images/Vincent 1.jpg" alt="Pintura 1"> <br><br><br>
    <img src="/images/Vincent 2.jpg" alt="Pintura 2"> <br><br><br>
    <img src="/images/Vincent 3.jpg" alt="Pintura 3"> <br><br><br>

@stop
@section('footer')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
    Derechos reservados {{date('Y')}}
@stop