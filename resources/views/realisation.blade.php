@extends('layouts.app')

@section('body')
<x-navbar/>

<div class="title-bar" style="background-image: linear-gradient(160deg, rgba(0,0,0,0) 0%, #000 100%), url(https://4kwallpapers.com/images/wallpapers/asian-woman-1920x1080-11458.jpg);">
    <div class="title-bar-content">
        <div class="title-bar-subtitle">Publié dans L'Equipe</div>
        <h1 class="title-bar-title">LAPORTE, DANS LE MEILLEUR DES MONDES</h1>
    </div>
</div>

<div class="text">
    <div class="text-content">
    Après les premières victoires en World Tour en 2022, Christophe Laporte a remporté ses premières grandes courses d’un jour en 2023. Vainqueur de Gand-Wevelgem, d’A Travers la Flandre et champion d’Europe fin septembre, il a reçu le Trophée Bernard Hinault consacrant le ou la meilleur Français ou Française sur route. 

Sous un ciel gris qui a craché une fine pluie toute la journée, dans le froid d’un début de printemps qui ressemble encore à l’hiver, Christophe Laporte a le sourire. Trempé de la tête aux pieds, son bonheur est communicatif. A l’arrivée de Gand-Wevelgem, 260 kilomètres agrémentés de quelques monts aux pourcentages hallucinants, il a décroché sa première victoire sur une grande classique, un jour où seuls les Flahutes mettent le nez dehors. Il a longtemps tourné autour et il fait désormais partie du club. « Concrétiser, c’est le plus difficile, reconnaît aujourd’hui le Français. Surtout sur les classiques, des courses que j’aime et que j’avais cochées depuis longtemps. Il me manquait toujours un petit truc. Cette année, j’ai réussi. C’est un accomplissement. » Ce jour-là à Wevelgem, il a bénéficié d’un petit coup de pouce de son leader et coéquipier, Wout van Aert. Le Belge, à l’origine du mouvement décisif à 50 km de l’arrivée, a parfois temporisé pour attendre Laporte avant de lui laisser la victoire. Mais qu’importe la manière, le déclic est là.

« Quand on n’a jamais gagné à ce niveau, on a plus de pression, admet-il. On a davantage peur de se louper. Quand on est présent dans le final, on pense à l’occasion à ne pas manquer. On ne se le dit pas clairement, mais on le sait. Or quand on a un peu peur de perdre, souvent on perd. » Libéré par sa première victoire, le Français remet ça trois jours plus tard, cette fois sans Wout van Aert, sur A Travers la Flandre. Il s’extirpe du groupe de cadors à quelques kilomètres de la ligne, alors que sa pointe de vitesse lui donnait la possibilité d’attendre le sprint. Le 24 septembre, il frappe à nouveau lors des Championnats d’Europe. Offensif, il s’isole en tête de course et résiste dans les derniers hectomètres au retour de Wout van Aert et Olav Kooij, ses coéquipiers chez Jumbo-Visma mais adversaires en équipe nationale.

« SON NIVEAU ACTUEL, IL EN ÉTAIT PROCHE CHEZ NOUS, MAIS ÇA SE VOYAIT MOINS »
Trois grandes courses d’un jour la même année, quatre victoires en World Tour si on ajoute les deux étapes remportées par le Varois lors du Critérium du Dauphiné, la saison de Laporte a été prolifique. Elle est la confirmation de la précédente, où il avait décroché ses premiers succès au plus haut niveau et déjà passé un cap, mentalement. « Quand je gagne sur Paris-Nice (lors de la 1re étape) l’an dernier en arrivant à trois avec Wout et Primoz (Roglic), ça débloque des cases dans la tête, assure le Français. On se rend compte qu’on est capable de le faire, de gagner en World Tour, et on se pose moins de questions en course. »

<p>Mais le principal intéressé assure qu’il n’était déjà pas loin de ces performances lorsqu’il portait encore le maillot de Cofidis. De lui-même, il rappelle qu’il avait terminé deuxième de deux étapes de Paris-Nice, d’une étape du Tour de France ou d’A Travers la Flandre rien qu’en 2021, sa dernière saison au sein de l’équipe nordiste. « Son niveau actuel, il en était proche chez nous, mais ça se voyait moins », confirme son entraîneur de l’époque, Vincent Villerius.</p>

<p>Tout s’est alors concrétisé au sein de la meilleure équipe du monde. Là où il a accepté de s’entraîner davantage, de partir en stage en altitude plus longtemps que par le passé, de suivre des plans nutritionnels à la calorie près et, de manière générale, poussé les curseurs de sa propre performance. « Je lui ai toujours dit que c’est dans la tête qu’il pouvait faire la différence, raconte Villerius. Chez nous, il ne se mettait pas trop de pression. Ce n’était pas un feignant à l’entraînement, il faisait tout ce que je lui disais de faire. Mais quand il rentrait chez lui, dans sa tête, il avait fait son boulot de cycliste professionnel. »</p>

<p>Au printemps 2022, quelques mois après son arrivée chez Jumbo-Visma, Christophe Laporte soulignait son propre changement d’état d’esprit dans les colonnes de L’Equipe. « Avant, je faisais du vélo sans trop penser au reste. J’avais mon petit contrat de trois ans chez Cofidis. Je n’étais pas conscient de toutes ces différences que l’on peut faire sur le matériel, la nutrition, l’altitude. J’étais juste content d’être là. » Son nouvel entraîneur au sein de l’équipe néerlandaise, Mathieu Heijboer, disait au même moment : « Quarante heures d’entraînement en une semaine, Christophe ne connaissait pas. Il n’avait jamais été poussé aussi loin dans ses limites. » Avec l’arrivée de la trentaine, Laporte, qui fêtera ses 31 ans en décembre prochain, s’est décidé à exploiter pleinement son potentiel. La suite est arrivée naturellement.</p>
    </div>
</div>

<section class="section other">
    <div class="section-content">
        <div class="section-title">
            <h2>Autres articles :</h2>
        </div>
        <div class="card-list">
            @for($i=0;$i<3;$i++)
            <div class="card">
                <div class="card-image"><a href=""><img src="https://i.ibb.co/b30WqV8/408005283-258814217207388-8741290683313476433-n-1.jpg" alt="" loading="lazy"></a></div>
                <div class="card-content">                 
                    <h2 class="card-title"><a href="">Laporte, dans le meilleur des mondes</a></h2>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<x-footer/>
@endsection