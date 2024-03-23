@extends('layouts.app')

@section('title', $skill->name)

@php
    $background = true;
@endphp

@section('body')
<x-navbar/>
<div class="navbar-skip"></div>
<x-sidebar/>

<div class="skills">
    <div class="skills-content">
        <h1 class="skills-title">{{ $skill->name }}</h1>
        @foreach($subskills as $subskill)
        <div class="skills-item">
            <a href="{{ route('subskills.show', $subskill->id) }}">{{ $subskill->name }}</a>
        </div>
        @endforeach
    </div>
</div>
@endsection