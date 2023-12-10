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
            @for($i=0;$i<3;$i++)
            <div class="card">
                <div class="card-image"><a href=""><img src="https://dudeproducts.com/cdn/shop/articles/gigachad_1024x1024.jpg?v=1667928905" alt=""></a></div>
                <div class="card-content">                 
                    <h2 class="card-title"><a href="">Laporte, dans le meilleur des mondes</a></h2>
                    <div class="card-text">Après les premières victoires en World Tour en 2022, Christophe Laporte a remporté ses premières grandes courses d’un jour en 2023. Vainqueur de Gand-Wevelgem, d’A Travers la Flandre et champion</div>
                </div>
            </div>
            @endfor
        </div>
        <div class="section-btn">
            <a href="" class="btn btn-section">VOIR TOUTES MES PRODUCTIONS</a>
        </div>        
    </div>
</section>

@endsection