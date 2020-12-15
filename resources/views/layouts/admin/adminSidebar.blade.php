<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.home') }}">
        <span class="menu-title">Tableau de bord</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#api" aria-expanded="false" aria-controls="api">
        <span class="menu-title">API</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
    </a>
    <div class="collapse" id="api">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="#">OrangeSMS</a></li>
            <li class="nav-item"> <a class="nav-link" href="#">OrangeMoney</a></li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        <span class="menu-title">Utilisateurs</span>
        <i class="mdi mdi-contacts menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        <span class="menu-title">Paiement</span>
        <i class="mdi mdi-format-list-bulleted menu-icon"></i>
    </a>
</li>