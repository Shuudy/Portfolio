@extends('layouts.app')

@section('title', 'Veille technologique')

@section('body')
<x-navbar/>
<x-sidebar/>

<div class="title-bar" style="background-image: linear-gradient(160deg, rgba(0,0,0,0) 0%, #000 100%), url(https://free4kwallpapers.com/uploads/originals/2015/09/15/wallpaper-download-free-houses-26258.jpg);">
    <div class="title-bar-content">
    <div class="title-bar-subtitle">Veille technologique</div>
        <h1 class="title-bar-title">Chiffrement des données</h1>
    </div>
</div>

<div class="text">
    <div class="text-content">
        <div class="techwatch-articles">
            @for($i=0;$i<6;$i++)
            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">{{ now()->isoFormat('D MMM YYYY') }}</div>
                    <div class="techwatch-article-info-title"><a href="#">What is Cryptography ?</a></div>
                    <div class="techwatch-article-info-desc">An introduction to the basics of cryptography, including key concepts and comon use cases.</div>
                    <a class="techwatch-article-info-a" href="#"><button class="techwatch-article-info-button">Read more</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://www.zdnet.com/a/img/2024/02/08/fd21e2f7-2d29-48d2-bd2b-292f8c4c5eff/gettyimages-1443071845.jpg" alt="">
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>

<x-scroll-button/>
<x-footer/>
@endsection