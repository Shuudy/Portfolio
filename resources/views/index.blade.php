@extends('layouts.app')

@section('body')
<x-navbar/>
<x-hero/>

<section class="section">
    <div class="section-content">
        <div class="section-title">
            <h2>Articles récents</h2>
        </div>
        <div class="card-list">
            @foreach($lastRealisations as $realisation)
            <div class="card">
                <div class="card-image"><a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}"><img src="{{ asset('storage/' . $realisation->image) }}" alt=""></a></div>
                <div class="card-content">                 
                    <h2 class="card-title"><a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}">{{ $realisation->title }}</a></h2>
                    <div class="card-subtitle home">{{ $realisation->subtitle }}</div>
                    <div class="card-text">{!! Str::limit(strip_tags($realisation->content), 195) !!}</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-btn">
            <a href="" class="btn btn-section">VOIR TOUTES MES PRODUCTIONS</a>
        </div>        
    </div>
</section>

<x-footer/>
@endsection