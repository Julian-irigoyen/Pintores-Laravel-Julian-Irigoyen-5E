@extends('layouts.master')
@section('title','Salvador Dalí')
@section('header')
    <h1>Salvador Dalí</h1>
    <img src="/images/Dali.jpg" alt="Salvador Dalí">
@stop
@section('navbar')
@stop
@section('content')
    <h2>Pequeña Biografía</h2>
    <p>Salvador Felipe Jacinto Dalí i Domènech, fue un pintor, escultor, grabador, escenógrafo y escritor español 
        del siglo XX. Se le considera uno de los máximos representantes del surrealismo.

        Salvador Dalí es conocido por sus impactantes y oníricas imágenes surrealistas. Sus habilidades 
        pictóricas se suelen atribuir a la influencia y admiración por el arte renacentista. También fue un experto 
        dibujante. Los recursos plásticos dalinianos también abordaron el cine, la escultura y la fotografía, 
        lo cual le condujo a numerosas colaboraciones con otros artistas audiovisuales. Tuvo la capacidad de acrisolar 
        un estilo genuinamente personal y palpable al primer contacto, que en realidad era muy ecléctico y que "succionó" 
        de innovaciones ajenas.</p>
    <br>
    <h3>Algunas de sus obras</h3>
    <img src="/images/Dali 1.jpg" alt="Pintura 1"> <br><br><br>
    <img src="/images/Dali 2.jpg" alt="Pintura 2"> <br><br><br>
    <img src="/images/Dali 3.jpg" alt="Pintura 3"> <br><br><br>

@stop
@section('footer')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
    Derechos reservados {{date('Y')}}
@stop