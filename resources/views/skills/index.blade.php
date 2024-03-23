
@extends('layouts.app')

@section('title', 'Compétences')

@php
    $background = true;
@endphp

@section('body')
<x-navbar/>
<div class="navbar-skip"></div>
<x-sidebar/>

<div class="skills">
    <div class="skills-content">
        <h1 class="skills-title">Compétences</h1>
        @foreach($skills as $skill)
        <div class="skills-item">
            <a href="{{ route('skills.show', $skill->id) }}">{{ $skill->name }}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection