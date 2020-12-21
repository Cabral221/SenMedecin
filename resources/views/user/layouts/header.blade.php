		<header class="header">
			<nav class="container">
				<ul>
					@guest('patient')
						<li class="li-home"> <a href="/"> <span class="header-icon"><i class="fas fa-home"></i></span> Home</a></li>
						<li> <a href="{{ route('user.about') }}"> <span class="header-icon"><i class="fas fa-eject"></i></span> A propos</a></li>
						<li> <a href="{{ route('posts.index') }}"> <span class="header-icon"><i class="fas fa-blog"></i></span> Blog</a></li>
						<li> <a href="{{ route('contact.index') }}"> <span class="header-icon"><i class="fas fa-id-card-alt"></i></span> Contact</a></li>    					          		          
						<li class="li-connecter"><a> <span class="header-icon"><i class="fas fa-sign-in-alt"></i></span> Se connecter <span class="chevero-login"><i class="fas fa-chevron-down"></i></span></a>
							<ul>
								<li><a href="{{ route('patient.login') }}"> <span class="header-icon"><i class="fas fa-user"></i></span> Patientes</a></li>
								<hr>
								<li><a href="{{ route('medecin.login') }}"> <span class="header-icon"><i class="fas fa-user-nurse"></i></span> Medecins</a></li>
								<hr>
								<li><a href="{{ route('responsable.login') }}"> <span class="header-icon"><i class="fas fa-user-md"></i></span> Partenaires</a></li>
							
							</ul>
						</li>
						
					@else
						@if(Auth::guard('patient')->user())
						<li class="li-home"> <a href="/"> <span class="header-icon"><i class="fas fa-home"></i></span> Home</a></li>
						<li> <a href="{{ route('user.about') }}"> <span class="header-icon"><i class="fas fa-eject"></i></span> A propos</a></li>
						<li> <a href="{{ route('posts.index') }}"> <span class="header-icon"><i class="fas fa-blog"></i></span> Blog</a></li>
						<li> <a href="{{ route('contact.index') }}"> <span class="header-icon"><i class="fas fa-id-card-alt"></i></span> Contact</a></li>    					          		          
						<li class="li-connecter"><a href=""> <span class="header-icon"><i class="fas fa-user"></i></span>{{ Auth::guard('patient')->user()->first_name .' '. Auth::guard('patient')->user()->last_name }} <span class="chevero-login"><i class="fas fa-chevron-down"></i></span></a>
							<ul>
								<li><a href="{{ route('patient.profile',Auth::guard('patient')->user()->id) }}"> <span class="header-icon"><i class="fas fa-user"></i></span> Profile</a></li>
								<hr>
								<li><a  href="{{ route('patient.logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form-patient').submit();"> 
									<span class="header-icon"><i class="fas fa-sign-out-alt"></i></span> Deconexion</a>
									<form id="logout-form-patient" action="{{ route('patient.logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</li>
							
							</ul>
						</li>
							<!-- <li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::guard('patient')->user()->first_name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('patient.logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form-patient').submit();">
										{{ __('Logout Patient') }}
									</a>

									<form id="logout-form-patient" action="{{ route('patient.logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li> -->
                            @endif
                        @endguest
				</ul>
			</nav>
		</header>