@extends('layouts.app')

@section('title', 'Mes réalisations')

@php
    $background = true;
@endphp

@section('body')
<x-navbar/>
<div class="navbar-skip"></div>

<div class="realisation-list">  
    @for($i=0;$i<6;$i++)
    <div class="realisation">
        <div class="realisation-image">
            <a href=""><img src="https://i.ibb.co/QNmSXkh/273573669-990160091619911-7621325696563393785-n.jpg" alt=""></a>
        </div>
        <div class="realisation-content">
            <div class="realisation-subtitle">Publié dans Vélo Magazine</div>
            <h2 class="realisation-title"><a href="">Laporte, dans le meilleur des mondes</a></h2>
            <div class="realisation-desc">
                <p>Après les premières victoires en World Tour en 2022, Christophe Laporte a remporté ses premières grandes courses d’un jour en 2023. Vainqueur de Gand-Wevelgem, d’A Travers la Flandre et champion</p>
            </div>
        </div>
    </div>
    @endfor

    @foreach($realisations as $realisation)
    <div class="realisation">
        <div class="realisation-image">
            <a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}"><img src="{{ asset('storage/' . $realisation->image) }}" alt="Realisation image" lazy="loading"></a>
        </div>
        <div class="realisation-content">
            <div class="realisation-subtitle">{{ $realisation->subtitle }}</div>
            <h2 class="realisation-title"><a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}">{{ $realisation->title }}</a></h2>
            <div class="realisation-desc"><p>{{ Str::limit(strip_tags($realisation->content), 200) }}</p></div>
        </div>
    </div>
    @endforeach    
</div>

<x-footer/>
@endsection