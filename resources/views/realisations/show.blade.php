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

<style>
    .text-content .ql-size-small {
  font-size: 0.75em;
}
.text-content .ql-size-large {
  font-size: 1.5em;
}
.text-content .ql-size-huge {
  font-size: 2.5em;
}
.text-content .ql-font-serif {
  font-family: Georgia, Times New Roman, serif;
}
.text-content .ql-font-monospace {
  font-family: Monaco, Courier New, monospace;
}

.text-content p,
.text-content ol,
.text-content ul,
.text-content pre,
.text-content blockquote,
.text-content h1,
.text-content h2,
.text-content h3,
.text-content h4,
.text-content h5,
.text-content h6 {
  margin: 0;
  padding: 0;
  counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}

.text-content ol,
.text-content ul {
  padding-left: 1.5em;
}
.text-content ol > li,
.text-content ul > li {
  list-style-type: none;
}
.text-content ul > li::before {
  content: '\2022';
}
.text-content ul[data-checked=true],
.text-content ul[data-checked=false] {
  pointer-events: none;
}
.text-content ul[data-checked=true] > li *,
.text-content ul[data-checked=false] > li * {
  pointer-events: all;
}
.text-content ul[data-checked=true] > li::before,
.text-content ul[data-checked=false] > li::before {
  color: #777;
  cursor: pointer;
  pointer-events: all;
}
.text-content ul[data-checked=true] > li::before {
  content: '\2611';
}
.text-content ul[data-checked=false] > li::before {
  content: '\2610';
}
.text-content li::before {
  display: inline-block;
  white-space: nowrap;
  width: 1.2em;
}
.text-content li:not(.ql-direction-rtl)::before {
  margin-left: -1.5em;
  margin-right: 0.3em;
  text-align: right;
}
.text-content li.ql-direction-rtl::before {
  margin-left: 0.3em;
  margin-right: -1.5em;
}
.text-content ol li:not(.ql-direction-rtl),
.text-content ul li:not(.ql-direction-rtl) {
  padding-left: 1.5em;
}
.text-content ol li.ql-direction-rtl,
.text-content ul li.ql-direction-rtl {
  padding-right: 1.5em;
}
.text-content ol li {
  counter-reset: list-1 list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
  counter-increment: list-0;
}
.text-content ol li:before {
  content: counter(list-0, decimal) '. ';
}
.text-content ol li.ql-indent-1 {
  counter-increment: list-1;
}
.text-content ol li.ql-indent-1:before {
  content: counter(list-1, lower-alpha) '. ';
}
.text-content ol li.ql-indent-1 {
  counter-reset: list-2 list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.text-content ol li.ql-indent-2 {
  counter-increment: list-2;
}
.text-content ol li.ql-indent-2:before {
  content: counter(list-2, lower-roman) '. ';
}
.text-content ol li.ql-indent-2 {
  counter-reset: list-3 list-4 list-5 list-6 list-7 list-8 list-9;
}
.text-content ol li.ql-indent-3 {
  counter-increment: list-3;
}
.text-content ol li.ql-indent-3:before {
  content: counter(list-3, decimal) '. ';
}
.text-content ol li.ql-indent-3 {
  counter-reset: list-4 list-5 list-6 list-7 list-8 list-9;
}
.text-content ol li.ql-indent-4 {
  counter-increment: list-4;
}
.text-content ol li.ql-indent-4:before {
  content: counter(list-4, lower-alpha) '. ';
}
.text-content ol li.ql-indent-4 {
  counter-reset: list-5 list-6 list-7 list-8 list-9;
}
.text-content ol li.ql-indent-5 {
  counter-increment: list-5;
}
.text-content ol li.ql-indent-5:before {
  content: counter(list-5, lower-roman) '. ';
}
.text-content ol li.ql-indent-5 {
  counter-reset: list-6 list-7 list-8 list-9;
}
.text-content ol li.ql-indent-6 {
  counter-increment: list-6;
}
.text-content ol li.ql-indent-6:before {
  content: counter(list-6, decimal) '. ';
}
.text-content ol li.ql-indent-6 {
  counter-reset: list-7 list-8 list-9;
}
.text-content ol li.ql-indent-7 {
  counter-increment: list-7;
}
.text-content ol li.ql-indent-7:before {
  content: counter(list-7, lower-alpha) '. ';
}
.text-content ol li.ql-indent-7 {
  counter-reset: list-8 list-9;
}
.text-content ol li.ql-indent-8 {
  counter-increment: list-8;
}
.text-content ol li.ql-indent-8:before {
  content: counter(list-8, lower-roman) '. ';
}
.text-content ol li.ql-indent-8 {
  counter-reset: list-9;
}
.text-content ol li.ql-indent-9 {
  counter-increment: list-9;
}
.text-content ol li.ql-indent-9:before {
  content: counter(list-9, decimal) '. ';
}
.text-content .ql-indent-1:not(.ql-direction-rtl) {
  padding-left: 3em;
}
.text-content li.ql-indent-1:not(.ql-direction-rtl) {
  padding-left: 4.5em;
}
.text-content .ql-indent-1.ql-direction-rtl.ql-align-right {
  padding-right: 3em;
}
.text-content li.ql-indent-1.ql-direction-rtl.ql-align-right {
  padding-right: 4.5em;
}
.text-content .ql-indent-2:not(.ql-direction-rtl) {
  padding-left: 6em;
}
.text-content li.ql-indent-2:not(.ql-direction-rtl) {
  padding-left: 7.5em;
}
.text-content .ql-indent-2.ql-direction-rtl.ql-align-right {
  padding-right: 6em;
}
.text-content li.ql-indent-2.ql-direction-rtl.ql-align-right {
  padding-right: 7.5em;
}
.text-content .ql-indent-3:not(.ql-direction-rtl) {
  padding-left: 9em;
}
.text-content li.ql-indent-3:not(.ql-direction-rtl) {
  padding-left: 10.5em;
}
.text-content .ql-indent-3.ql-direction-rtl.ql-align-right {
  padding-right: 9em;
}
.text-content li.ql-indent-3.ql-direction-rtl.ql-align-right {
  padding-right: 10.5em;
}
.text-content .ql-indent-4:not(.ql-direction-rtl) {
  padding-left: 12em;
}
.text-content li.ql-indent-4:not(.ql-direction-rtl) {
  padding-left: 13.5em;
}
.text-content .ql-indent-4.ql-direction-rtl.ql-align-right {
  padding-right: 12em;
}
.text-content li.ql-indent-4.ql-direction-rtl.ql-align-right {
  padding-right: 13.5em;
}
.text-content .ql-indent-5:not(.ql-direction-rtl) {
  padding-left: 15em;
}
.text-content li.ql-indent-5:not(.ql-direction-rtl) {
  padding-left: 16.5em;
}
.text-content .ql-indent-5.ql-direction-rtl.ql-align-right {
  padding-right: 15em;
}
.text-content li.ql-indent-5.ql-direction-rtl.ql-align-right {
  padding-right: 16.5em;
}
.text-content .ql-indent-6:not(.ql-direction-rtl) {
  padding-left: 18em;
}
.text-content li.ql-indent-6:not(.ql-direction-rtl) {
  padding-left: 19.5em;
}
.text-content .ql-indent-6.ql-direction-rtl.ql-align-right {
  padding-right: 18em;
}
.text-content li.ql-indent-6.ql-direction-rtl.ql-align-right {
  padding-right: 19.5em;
}
.text-content .ql-indent-7:not(.ql-direction-rtl) {
  padding-left: 21em;
}
.text-content li.ql-indent-7:not(.ql-direction-rtl) {
  padding-left: 22.5em;
}
.text-content .ql-indent-7.ql-direction-rtl.ql-align-right {
  padding-right: 21em;
}
.text-content li.ql-indent-7.ql-direction-rtl.ql-align-right {
  padding-right: 22.5em;
}
.text-content .ql-indent-8:not(.ql-direction-rtl) {
  padding-left: 24em;
}
.text-content li.ql-indent-8:not(.ql-direction-rtl) {
  padding-left: 25.5em;
}
.text-content .ql-indent-8.ql-direction-rtl.ql-align-right {
  padding-right: 24em;
}
.text-content li.ql-indent-8.ql-direction-rtl.ql-align-right {
  padding-right: 25.5em;
}
.text-content .ql-indent-9:not(.ql-direction-rtl) {
  padding-left: 27em;
}
.text-content li.ql-indent-9:not(.ql-direction-rtl) {
  padding-left: 28.5em;
}
.text-content .ql-indent-9.ql-direction-rtl.ql-align-right {
  padding-right: 27em;
}
.text-content li.ql-indent-9.ql-direction-rtl.ql-align-right {
  padding-right: 28.5em;
}
.text-content .ql-video {
  display: block;
  max-width: 100%;
}
.text-content .ql-video.ql-align-center {
  margin: 0 auto;
}
.text-content .ql-video.ql-align-right {
  margin: 0 0 0 auto;
}
.text-content .ql-bg-black {
  background-color: #000;
}
.text-content .ql-bg-red {
  background-color: #e60000;
}
.text-content .ql-bg-orange {
  background-color: #f90;
}
.text-content .ql-bg-yellow {
  background-color: #ff0;
}
.text-content .ql-bg-green {
  background-color: #008a00;
}
.text-content .ql-bg-blue {
  background-color: #06c;
}
.text-content .ql-bg-purple {
  background-color: #93f;
}
.text-content .ql-color-white {
  color: #fff;
}
.text-content .ql-color-red {
  color: #e60000;
}
.text-content .ql-color-orange {
  color: #f90;
}
.text-content .ql-color-yellow {
  color: #ff0;
}
.text-content .ql-color-green {
  color: #008a00;
}
.text-content .ql-color-blue {
  color: #06c;
}
.text-content .ql-color-purple {
  color: #93f;
}
</style>

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