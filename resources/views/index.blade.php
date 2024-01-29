@extends('layouts.app')

@section('body')
<x-navbar/>
<x-sidebar/>
<x-hero/>

<section class="section section-about" id="about-me">
    <div class="section-content">
        <div class="section-about-image">
            <img src="https://team-break.fr/wp-content/uploads/2023/07/jeux-societe-horreur-1024x1024.png" alt="Image about me">
        </div>
        <div class="section-about-text">
            <div class="section-about-text-title">
                <h2>Qui suis-je ?</h2>
            </div>
            <div class="section-about-text-content">
                <p>Je suis un <b>développeur</b> passionné, spécialisé dans les technologies de l'information. Actuellement en <b>BTS Services Informatiques aux Organisations à Lille</b>, je m'efforce constamment de perfectionner mes compétences et d'explorer de nouvelles avenues dans le monde du <b>développement</b>.</p>
                <p>Collaborant régulièrement avec des projets innovants, j'ai eu l'occasion de travailler sur des applications web et des systèmes complexes. Mon engagement envers <b>l'excellence technique</b> se reflète dans mes projets.</p>
                <p>J'ai également acquis une solide expérience en programmation dans divers langages, et je maîtrise particulièrement les défis liés au <b>développement web</b>. En parallèle de mes études, je participe activement à des projets open source et à des compétitions de programmation.</p>
            </div>
            <div class="section-btn">
                <a href="" class="btn btn-section">Voir mon CV</a>
            </div>
        </div>
    </div>
</section>

<section class="section background">
    <div class="section-content">
        <div class="section-title">
            <h2>Articles récents</h2>
        </div>
        <div class="card-list">
            @foreach($lastRealisations as $realisation)
            <div class="card">
                <div class="card-image"><a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}"><img src="{{ asset('storage/uploads/' . $realisation->image) }}" alt="Realisation image"></a></div>
                <div class="card-content">
                    <h2 class="card-title"><a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}">{{ $realisation->title }}</a></h2>
                    <div class="card-subtitle home">{{ $realisation->subtitle }}</div>
                    <div class="card-text">{!! Str::limit(strip_tags($realisation->content), 195) !!}</div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="section-btn">
            <a href="{{ route('realisations.index') }}" class="btn btn-section">VOIR TOUTES MES PRODUCTIONS</a>
        </div>
    </div>
</section>

<x-scroll-button/>
<x-footer/>
@endsection