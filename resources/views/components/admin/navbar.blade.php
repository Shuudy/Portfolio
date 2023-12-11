<div class="navbar">
    <div class="navbar-content">
        <div class="navbar-left"><div class="navbar-logo">Mon portfolio</div></div>
        <div class="navbar-right">
            <div class="navbar-infos">
                <div class="navbar-infos-image">
                    <img src="https://i.ibb.co/pyprCSg/407925637-1066198397714555-7952520508365130508-n.jpg" alt="">
                </div>
                <span>John Doe</span>
                <a href=""><i class="ti ti-logout"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="navbar">
    <div class="navbar-content">
        <div class="navbar-left">
            <ul class="navbar-link">
                <li class="{{ Route::is('admin.index') ? 'active' : '' }}"><a href="{{ route('admin.index') }}"><i class="ti ti-home"></i>Home</a></li>
                <li class="{{ Route::is('admin.realisations.index') ? 'active' : '' }}"><a href="{{ route('admin.realisations.index') }}"><i class="ti ti-home"></i>Home</a></li>
                <li><a href=""><i class="ti ti-home"></i>Home</a></li>
            </ul>
        </div>        
    </div>
</div>