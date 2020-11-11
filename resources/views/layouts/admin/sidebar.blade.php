<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('backend/assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    @if (Auth::guard('admin')->user())
                        <span class="font-weight-bold mb-2">{{ Auth::guard('admin')->user()->name }}</span>
                        @if (Auth::guard('admin')->user()->status == 1)
                            <span class="text-secondary text-small">Responsable Technique</span>
                        @else
                            <span class="text-secondary text-small">Propriétaire SenMedecin</span>
                        @endif
                    @endif

                    @if (Auth::guard('responsable')->user())
                        <span class="font-weight-bold mb-2">{{ Auth::guard('responsable')->user()->first_name }}</span>        
                        <span class="text-secondary text-small">Responsable</span>
                    @endif
                            
                    @if (Auth::guard('medecin')->user())
                        <span class="font-weight-bold mb-2">{{ Auth::guard('medecin')->user()->first_name }}</span>        
                        <span class="text-secondary text-small">Médecin</span>
                    @endif
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        
        @if (Auth::guard('admin')->user())
            @if (Auth::guard('admin')->user()->status == 1)
                @include('layouts.admin.adminSidebar')
            @else
                @include('layouts.admin.medecinSidebar')
            @endif
        @endif

        @if (Auth::guard('responsable')->user())
            @include('layouts.responsable.responsableSidebar')
        @endif

        @if (Auth::guard('medecin')->user())
            @include('layouts.medecin.medecinSidebar')
        @endif
    </ul>
</nav>