@extends('layouts.app')

@section('title', $subskill->name)

@php
    $background = true;
@endphp

@section('body')
<x-navbar/>
<div class="navbar-skip"></div>
<x-sidebar/>

<div class="skills">
    <div class="skills-content">
        <h1 class="skills-title">{{ $subskill->name }}</h1>
        @foreach($realisations as $realisation)
        <div class="skills-item">
            <a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}">{{ $realisation->title }}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection