@extends('layouts.app')

@section('title', 'Veille technologique')

@section('body')
<x-navbar/>
<x-sidebar/>

<div class="title-bar" style="background-image: linear-gradient(160deg, rgba(0,0,0,0) 0%, #000 100%), url(https://www.virtru.com/hubfs/Imported_Blog_Media/encryptionkey-2.jpg);">
    <div class="title-bar-content">
    <div class="title-bar-subtitle">Veille technologique</div>
        <h1 class="title-bar-title">Chiffrement des données</h1>
    </div>
</div>

<div class="text">
    <div class="text-content">
        <p>Le <b>chiffrement des données</b> est une pratique séculaire qui remonte à l'Antiquité, mais qui a gagné en importance à l'ère numérique moderne. Historiquement, le chiffrement était utilisé principalement à des fins militaires et diplomatiques pour protéger les messages <b>confidentiels</b> contre les interceptions non autorisées. L'idée fondamentale est de transformer les données en un format illisible pour quiconque ne possède pas la clé de déchiffrement appropriée.</p>
        <p>Aujourd'hui, avec l'omniprésence des technologies numériques et la prolifération des <b>menaces</b> en ligne, le chiffrement des données est devenu un pilier fondamental de la <b>sécurité de l'information</b>. Il joue un rôle crucial dans la protection de la <b>confidentialité</b>, de l'<b>intégrité</b> et de l'<b>authenticité</b> des données sensibles, que ce soit lors de leur <b>stockage</b>, de leur <b>transmission</b> ou de leur <b>traitement</b>.</p>
        <p>La nécessité de mener une <b>veille technologique</b> sur le chiffrement des données découle de plusieurs facteurs. Tout d'abord, les avancées rapides dans le domaine de la <b>cryptographie</b> introduisent constamment de nouvelles techniques et algorithmes de chiffrement, améliorant ainsi la sécurité et la résistance des systèmes de protection des données. Par conséquent, il est crucial de rester à jour sur ces développements pour maintenir un niveau adéquat de protection contre les attaques potentielles.</p>
        <p>De plus, les <b>réglementations</b> gouvernementales et les <b>normes de conformité</b>, telles que le Règlement Général sur la Protection des Données (<b>RGPD</b>) en Europe, imposent souvent des exigences strictes en matière de sécurité des données, y compris l'utilisation de méthodes de chiffrement spécifiques. Une veille technologique efficace permet de s'assurer que les organisations restent en <b>conformité</b> avec ces réglementations en constante évolution.</p>
        <p>Enfin, avec l'émergence de nouvelles <b>menaces cybernétiques</b> sophistiquées, telles que les attaques de <b>ransomware</b> et l'<b>espionnage industriel</b>, le chiffrement des données devient un rempart essentiel contre les <b>violations de données</b> et les pertes financières et de réputation qui en découlent. Par conséquent, une veille active sur les tendances et les meilleures pratiques en matière de chiffrement est cruciale pour renforcer la <b>résilience</b> des infrastructures informatiques et protéger les informations sensibles contre toute compromission.</p>
        <p>Pour mener une velle efficace sur le chiffrement des données, divers outils et plateformes sont disponibles, notamment <b>Google News</b>, <b>Digipad</b>, <b>Feedly</b> et d'autres agrégateurs de contenu en ligne spécialisés dans les actualités technologiques et la sécurité de l'information. Ces outils permettent de suivre les dernières tendances, les avis d'experts, les annonces de nouveaux algorithmes de chiffrement et les incidents de sécurité liés au chiffrement, fournissant ainsi une base solide pour une prise de décision informée en matière de sécurité des données.</p>

        <h1>Digipad</h1>
        <img src="https://uploads.portfolio.jancieux.fr/images/6615308025532.webp" alt="">
        <h1>Google alertes</h1>
        <img src="https://uploads.portfolio.jancieux.fr/images/661531e19a2c3.webp" alt="">
        <h1>Articles</h1>
        <div class="techwatch-articles">

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">30 mars. 2024</div>
                    <div class="techwatch-article-info-title"><a href="https://www.01net.com/actualites/comment-technologie-prepare-avenement-des-ordinateurs-quantiques.html">Comment les acteurs de la Tech se préparent à l’essor (et à la menace) des ordinateurs quantiques</a></div>
                    <div class="techwatch-article-info-desc">La technologie se prépare progressivement à l’arrivée des ordinateurs quantiques. Conscients des implications de l’informatique quantique en matière...</div>
                    <a class="techwatch-article-info-a" href="https://www.01net.com/actualites/comment-technologie-prepare-avenement-des-ordinateurs-quantiques.html"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://www.01net.com/app/uploads/2024/03/cybersecurite-quantique-680x453.jpg" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">19 mars. 2024</div>
                    <div class="techwatch-article-info-title"><a href="https://www.phonandroid.com/windows-va-integrer-une-nouvelle-norme-de-securite-votre-pc-est-il-compatible.html">Windows va intégrer une nouvelle norme de sécurité, votre matériel est-il compatible ?</a></div>
                    <div class="techwatch-article-info-desc">Microsoft renforce la sécurité des systèmes Windows en exigeant l'utilisation de clés RSA de 2048 bits pour les protocoles de sécurité...</div>
                    <a class="techwatch-article-info-a" href="https://www.phonandroid.com/windows-va-integrer-une-nouvelle-norme-de-securite-votre-pc-est-il-compatible.html"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://wp-pa.phonandroid.com/uploads/2024/03/data-center-microsoft.jpg" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">13 mars. 2024</div>
                    <div class="techwatch-article-info-title"><a href="https://www.servicesmobiles.fr/imessage-se-dote-du-chiffrement-post-quantique-95852">iMessage se dote du chiffrement post-quantique</a></div>
                    <div class="techwatch-article-info-desc">Les ordinateurs quantiques utiles ne sont pas encore une réalité. Toutefois, Apple compte déployer massivement...</div>
                    <a class="techwatch-article-info-a" href="https://www.servicesmobiles.fr/imessage-se-dote-du-chiffrement-post-quantique-95852"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://www.servicesmobiles.fr/wp-content/uploads/2023/11/imessage.png.webp" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">28 déc. 2023</div>
                    <div class="techwatch-article-info-title"><a href="https://incyber.org/article/avis-dexpert-la-cryptographie-xenomorphique-une-nouvelle-methode-de-chiffrement-de-bout-en-bout-inspiree-des-neurosciences/">La cryptographie xénomorphique, une nouvelle méthode de chiffrement de bout en bout...</a></div>
                    <div class="techwatch-article-info-desc">Réussir la transformation numérique implique de mettre en place de nouveaux systèmes et méthodes de sécurité informatiques....</div>
                    <a class="techwatch-article-info-a" href="https://incyber.org/article/avis-dexpert-la-cryptographie-xenomorphique-une-nouvelle-methode-de-chiffrement-de-bout-en-bout-inspiree-des-neurosciences/"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://incyber.org//wp-content/uploads/import/post/2023/12/avis-dexpert-la-cryptographie-xenomorphique-une-nouvelle-methode-de-chiffrement-de-bout-en-bout-inspiree-des-neurosciences-1386x735.jpg" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">12 déc. 2023</div>
                    <div class="techwatch-article-info-title"><a href="https://www.numerama.com/tech/1586890-ca-y-est-le-chiffrement-post-quantique-du-web-decolle-un-tout-petit-peu.html">Ça y est, le chiffrement post-quantique du web décolle (un tout petit peu)</a></div>
                    <div class="techwatch-article-info-desc">Cloudflare a remarqué un léger bond du chiffrement post-quantique, via TLS 1.3. Un bond encore modeste, mais qui traduit un début de déploiement d’un nouveau....</div>
                    <a class="techwatch-article-info-a" href="https://www.numerama.com/tech/1586890-ca-y-est-le-chiffrement-post-quantique-du-web-decolle-un-tout-petit-peu.html"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://c0.lestechnophiles.com/www.numerama.com/wp-content/uploads/2023/12/chiffrement-1024x576.jpg?avif=1&key=0c898d43" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">27 nov. 2023</div>
                    <div class="techwatch-article-info-title"><a href="https://www.lebigdata.fr/cles-chiffrement-fuite">Alerte ! Les clés de chiffrement sont en fuite sur internet !</a></div>
                    <div class="techwatch-article-info-desc">Fuite des clés de chiffrement : des erreurs matérielles en cause. Une équipe de chercheurs...</div>
                    <a class="techwatch-article-info-a" href="https://www.lebigdata.fr/cles-chiffrement-fuite"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://www.lebigdata.fr/wp-content/uploads/2023/11/cles-chiffrement-660x330.png" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">14 nov. 2023</div>
                    <div class="techwatch-article-info-title"><a href="https://www.lemondeinformatique.fr/actualites/lire-telex-le-chiffrement-de-tetra-dans-le-domaine-public-lockbit-revendique-l-attaque-contre-le-loiret-apple-lance-tap-to-pay-en-france-92130.html">Telex : Le chiffrement de Tetra dans le domaine public</a></div>
                    <div class="techwatch-article-info-desc">Le chiffrement de Tetra dans le domaine public. Après la découverte de plusieurs failles dans le chiffrement du réseau de radiocommunication Tetra...</div>
                    <a class="techwatch-article-info-a" href="https://www.lemondeinformatique.fr/actualites/lire-telex-le-chiffrement-de-tetra-dans-le-domaine-public-lockbit-revendique-l-attaque-contre-le-loiret-apple-lance-tap-to-pay-en-france-92130.html"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://veille-cyber.com/wp-content/uploads/2023/07/chiffrement-678x381.jpg" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">16 oct. 2023</div>
                    <div class="techwatch-article-info-title"><a href="https://www.lemagit.fr/actualites/366555597/Cosmian-mixe-chiffrement-pre-et-post-quantique">Cosmian mixe chiffrement pré- et post-quantique</a></div>
                    <div class="techwatch-article-info-desc">En collaboration avec l’ENS, la startup a accéléré ses algorithmes et propose une suite de sécurité complète...</div>
                    <a class="techwatch-article-info-a" href="https://www.lemagit.fr/actualites/366555597/Cosmian-mixe-chiffrement-pre-et-post-quantique"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://www.lemagit.fr/rms/onlineimages/security_a292905838.jpg" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">4 oct. 2023</div>
                    <div class="techwatch-article-info-title"><a href="https://securite.developpez.com/actu/349196/Les-ordinateurs-quantiques-pourraient-craquer-le-chiffrement-d-Internet-plus-rapidement-que-prevu-grace-a-un-nouvel-algorithme-supposement-plus-efficace-que-l-algorithme-de-Shor-vieux-de-30-ans/">Les ordinateurs quantiques pourraient craquer le chiffrement d'Internet...</a></div>
                    <div class="techwatch-article-info-desc">Un algorithme quantique menace de rendre inutiles nos principaux systèmes cryptographiques plus rapidement que prévu. Dans un article de recherche...</div>
                    <a class="techwatch-article-info-a" href="https://securite.developpez.com/actu/349196/Les-ordinateurs-quantiques-pourraient-craquer-le-chiffrement-d-Internet-plus-rapidement-que-prevu-grace-a-un-nouvel-algorithme-supposement-plus-efficace-que-l-algorithme-de-Shor-vieux-de-30-ans/"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://www.developpez.net/forums/attachments/p403856d1534284345/x/y/z/" alt="Article image">
                </div>
            </div>

            <div class="techwatch-article">
                <div class="techwatch-article-info">
                    <div class="techwatch-article-info-date">21 sept. 2023</div>
                    <div class="techwatch-article-info-title"><a href="https://www.lemondeinformatique.fr/actualites/lire-les-reseaux-bases-sur-udp-vulnerables-a-des-attaques-dos-en-boucle-93344.html">Pour contrer les attaques quantiques, Signal adapte son chiffrement</a></div>
                    <div class="techwatch-article-info-desc">Signal renforce son protocole de chiffrement pour résister aux attaques quantiques. Une mise à jour de la spécification X3DH, baptisée PQXDH, est...</div>
                    <a class="techwatch-article-info-a" href="https://www.lemondeinformatique.fr/actualites/lire-les-reseaux-bases-sur-udp-vulnerables-a-des-attaques-dos-en-boucle-93344.html"><button class="techwatch-article-info-button">En savoir plus</button></a>
                </div>
                <div class="techwatch-article-image">
                    <img src="https://images.itnewsinfo.com/lmi/articles/grande/000000093800.png" alt="Article image">
                </div>
            </div>

        </div>
    </div>
</div>

<x-scroll-button/>
<x-footer/>
@endsection