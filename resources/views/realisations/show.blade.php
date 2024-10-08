@extends('layouts.app')

@section('title', $realisation->title)

@section('body')
<x-navbar/>
<x-sidebar/>

<div class="title-bar" style="background-image: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url({{ asset('storage/uploads/' . $realisation->image . '.webp') }});">
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
            <h2>Autres réalisations&nbsp;:</h2>
        </div>
        <div class="card-list">
            @foreach ($lastRealisations as $lastRealisation)
                <div class="card">
                    <div class="card-image"><a href="{{ route('realisations.show', ['id' => $lastRealisation->id, 'slug' => $lastRealisation->slug]) }}"><img src="{{ asset('storage/uploads/' . $lastRealisation->image . '.webp') }}" alt="Last realisation image" loading="lazy"></a></div>
                    <div class="card-content">
                        <h2 class="card-title card-title-entry"><a href="{{ route('realisations.show', ['id' => $lastRealisation->id, 'slug' => $lastRealisation->slug]) }}">{{ $lastRealisation->title }}</a></h2>
                        <div class="card-subtitle">{{ $lastRealisation->subtitle }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<x-scroll-button/>
<x-footer/>
@endsection