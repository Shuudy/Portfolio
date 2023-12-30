@extends('layouts.app')

@section('title', $realisation->title)

@section('body')
<x-navbar/>

<div class="title-bar" style="background-image: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url({{ asset('storage/' . $realisation->image) }});">
    <div class="title-bar-content">
        <div class="title-bar-subtitle">{{ $realisation->subtitle }}</div>
        <h1 class="title-bar-title">{{ $realisation->title }}</h1>
    </div>
</div>

<div class="text">
    <div class="text-content">{!! $realisation->content !!}</div>
</div>

<section class="section other">
    <div class="section-content">
        <div class="section-title">
            <h2>Autres articles :</h2>
        </div>
        <div class="card-list">
            @foreach ($lastRealisations as $lastRealisation)
                <div class="card">
                    <div class="card-image"><a href="{{ route('realisations.show', ['id' => $lastRealisation->id, 'slug' => $lastRealisation->slug]) }}"><img src="{{ asset('storage/' . $lastRealisation->image) }}" alt="Last realisation image" loading="lazy"></a></div>
                    <div class="card-content">
                        <h2 class="card-title"><a href="{{ route('realisations.show', ['id' => $lastRealisation->id, 'slug' => $lastRealisation->slug]) }}">{{ $lastRealisation->title }}</a></h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<x-footer/>
@endsection