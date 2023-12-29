<div class="navbar">
    <div class="navbar-content">
        <div class="navbar-left"><div class="navbar-logo">Mon portfolio</div></div>
        <div class="navbar-right">
            <div class="navbar-infos">
                <div class="navbar-infos-image">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->username }}&background=random" alt="">
                </div>
                <span>{{ auth()->user()->username }}</span>
                <a href="{{ route('admin.logout') }}"><i class="ti ti-logout"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="navbar">
    <div class="navbar-content">
        <div class="navbar-left">
            <ul class="navbar-link">
                <li class="{{ Route::is('admin.index') ? 'active' : '' }}"><a href="{{ route('admin.index') }}"><i class="ti ti-home"></i>Home</a></li>
                <li class="{{ Request::is('admin/realisations*') ? 'active' : '' }}"><a href="{{ route('admin.realisations.index') }}"><i class="ti ti-brand-supabase"></i>Realisations</a></li>
                <li><a href=""><i class="ti ti-home"></i>Home</a></li>
            </ul>
        </div>        
    </div>
</div>