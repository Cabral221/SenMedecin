
<li class="nav-item dropdown">
    <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
        <i class="mdi mdi-bell-outline"></i>
        <span class="count-symbol bg-danger"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
        <h6 class="p-3 mb-0">Notifications</h6>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
            </div>
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                <p class="text-gray ellipsis mb-0"> Update dashboard </p>
            </div>
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
                <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                </div>
            </div>
            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                <p class="text-gray ellipsis mb-0"> New admin wow! </p>
            </div>
        </a>
        <div class="dropdown-divider"></div>
        <h6 class="p-3 mb-0 text-center">See all notifications</h6>
    </div>
</li>

<li class="nav-item nav-profile dropdown">
    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
        <div class="nav-profile-img">
            <img src="{{ asset('backend/assets/images/faces/face1.jpg') }}" alt="image">
            <span class="availability-status online"></span>
        </div>
        <div class="nav-profile-text">
            <p class="mb-1 text-black">{{ Auth::guard('medecin')->user()->first_name }}</p>
        </div>
    </a>
    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
        <a class="dropdown-item" href="#">
            <i class="mdi mdi-cached mr-2 text-success"></i> Compte 
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('medecin.logout') }}" onclick="event.preventDefault();document.getElementById('medecin-form-logout').submit();">
            <i class="mdi mdi-logout mr-2 text-primary"></i> Déconnexion 
            <form id="medecin-form-logout" action="{{ route('medecin.logout') }}" method="POST" style="display: none">
                @csrf
            </form>
        </a>
    </div>
</li>
