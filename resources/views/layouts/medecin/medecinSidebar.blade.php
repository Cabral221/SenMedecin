<li class="nav-item">
    <a class="nav-link" href="{{ route('medecin.home') }}">
        <span class="menu-title">Tableau de bord</span>
        <i class="mdi mdi-home menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('medecin.calendar.index') }}">
        <span class="menu-title">Calendrier</span>
        <i class="mdi mdi-contacts menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('medecin.patients.index') }}">
        <span class="menu-title">Patients</span>
        <i class="mdi mdi-contacts menu-icon"></i>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#rendez-vous" aria-expanded="false" aria-controls="rendez-vous">
        <span class="menu-title">Rendez-vous</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-medical-bag menu-icon"></i>
    </a>
    <div class="collapse" id="rendez-vous">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('medecin.appointments.day') }}"> Aujourd'hui </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('medecin.appointments.come') }}"> A venir </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{ route('medecin.appointments.histories') }}"> Historique </a></li>
        </ul>
    </div>
</li>
