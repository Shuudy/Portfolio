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
                <a href="{{ route('cv') }}" target="_blank" class="btn btn-section">Voir mon CV</a>
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
            @forelse($lastRealisations as $realisation)
            <div class="card">
                <div class="card-image"><a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}"><img src="{{ asset('storage/uploads/' . $realisation->image) }}" alt="Realisation image"></a></div>
                <div class="card-content">
                    <h2 class="card-title"><a href="{{ route('realisations.show', ['slug' => $realisation->slug, 'id' => $realisation->id]) }}">{{ $realisation->title }}</a></h2>
                    <div class="card-subtitle home">{{ $realisation->subtitle }}</div>
                    <div class="card-text">{!! Str::limit(strip_tags($realisation->content), 195) !!}</div>
                </div>
            </div>
            @empty
            <h1>No realisation found.</h1>
            @endforelse
        </div>
        <div class="section-btn">
            <a href="{{ route('realisations.index') }}" class="btn btn-section">VOIR TOUTES MES PRODUCTIONS</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="section-content">
        <div class="section-title">
            <h2>Parcours</h2>
        </div>
        <div class="timeline-items">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2022 - 2024</div>
                <div class="timeline-content">
                    <h3>Brevet de Technicien Supérieur (BTS) SIO</h3>
                    <p>Formation au BTS SIO au Lycée Gaston Berger à Lille, option SLAM.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-date">2019 - 2022</div>
                <div class="timeline-content">
                    <h3>Baccalauréat Général</h3>
                    <p>Formation au baccalauréat général au Lycée Gustave Eiffel à Armentières, avec une spécialisation en Mathématiques et NSI.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section background padding-contact" id="contact">
    <div class="section-content">
        <div class="section-contact">
            <div class="section-contact-left">
                <div class="section-contact-text-title">
                    <h2>Me contacter</h2>
                </div>
                <div class="section-contact-text-info">
                    <span>ancieux.jerome059@gmail.com</span>
                    <span>+33 6 23 13 09 13</span>
                </div>
            </div>
            <div class="section-contact-right">
                <form action="{{ route('contact') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autocomplete="name" required>
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autocomplete="email" required>
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="object">Objet</label>
                        <input type="text" class="form-control @error('object') is-invalid @enderror" name="object" id="object" required>
                        @error('object')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control @error('message') is-invalid @enderror" id="message" required></textarea>
                        @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="section-contact-button">Envoyer</button>
                </form>
                @if(session('success'))
                    <div class="contact-success">{{ session('success') }}</div>
                @endif
            </div>
        </div>
    </div>
</section>

<x-scroll-button/>
<x-footer/>
@endsection