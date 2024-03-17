@extends('layouts.app')

@section('title', $realisation->title)

@section('body')
<x-navbar/>
<x-sidebar/>

<div class="title-bar" style="background-image: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url({{ asset('storage/uploads/' . $realisation->image) }});">
    <div class="title-bar-content">
        <div class="title-bar-subtitle">{{ $realisation->subtitle }}</div>
        <h1 class="title-bar-title">{{ $realisation->title }}</h1>
    </div>
</div>

<div class="text">
    <div class="text-content">{!! $realisation->content !!}</div>

    @if($realisation->skills->isNotEmpty())
    <div class="accordion-container">
        <h2>Compétences</h2>
        <div class="accordion">
            @foreach($realisation->skills as $skill)
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>{{ $skill->name }}</span>
                    <span class="accordion-toggle"><svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path></svg></span>
                </div>                
                <ul class="accordion-content">
                    @foreach($skill->subskills as $subskill)
                        @if($realisation->subskills->contains($subskill))
                        <li>{{ $subskill->name }}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>

<section class="section other">
    <div class="section-content">
        <div class="section-title">
            <h2>Autres réalisations&nbsp;:</h2>
        </div>
        <div class="card-list">
            @foreach ($lastRealisations as $lastRealisation)
                <div class="card">
                    <div class="card-image"><a href="{{ route('realisations.show', ['id' => $lastRealisation->id, 'slug' => $lastRealisation->slug]) }}"><img src="{{ asset('storage/uploads/' . $lastRealisation->image) }}" alt="Last realisation image" loading="lazy"></a></div>
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

<script>
    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {        
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');

        header.addEventListener('click', () => {          

            if (!content.classList.contains('active')) {
                closeAllAccordions();
            }

            content.classList.toggle('active');

            const arrowIcon = header.querySelector('.accordion-toggle');
            arrowIcon.classList.toggle('rotate');
        });
    });

    function closeAllAccordions() {
        accordionItems.forEach(item => {
            const content = item.querySelector('.accordion-content');
            const arrowIcon = item.querySelector('.accordion-toggle');

            if (content.classList.contains('active')) {
                content.classList.remove('active');
                arrowIcon.classList.remove('rotate');
            }
        });
    }
</script>
@endsection