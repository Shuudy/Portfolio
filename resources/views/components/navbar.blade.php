<div class="navbar">
    <div class="navbar-content">
        <div class="navbar-left">
            <a class="navbar-logo" href="{{ route('index') }}">{{ env('WEBAPP_NAME') }}</a>
        </div>
        <div class="navbar-right">
            <div class="navbar-menu" id="navbar-menu"><i class="ti ti-menu-2"></i></div>
            <ul>
                <li><a href="{{ route('index') }}#about-me"><span>Qui suis-je ?</span></a></li>
                <li><a href="{{ route('realisations.index') }}"><span>Mes réalisations</span></a></li>
                <li><a href="{{ route('index') }}#contact"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
</div>