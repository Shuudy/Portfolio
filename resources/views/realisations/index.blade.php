@extends('layouts.app')

@section('title', 'Mes réalisations')

@php
    $background = true;
@endphp

@section('body')
<x-navbar/>
<div class="navbar-skip"></div>
<x-sidebar/>

<div class="realisation-list">
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