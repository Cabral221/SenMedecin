		<header class="header">
			<nav class="container">
				<ul>
					<li class="li-home"> <a href="/"> <span class="header-icon"><i class="fas fa-home"></i></span> Home</a></li>
					<li> <a href="{{ route('about') }}"> <span class="header-icon"><i class="fas fa-eject"></i></span> A propos</a></li>
					<li> <a href="{{ route('sensibiliser') }}"> <span class="header-icon"><i class="fas fa-blog"></i></span> Sensibilisation</a></li>
					<li> <a href="{{ route('contact') }}"> <span class="header-icon"><i class="fas fa-id-card-alt"></i></span> Contact</a></li>    					          		          
					<li class="li-connecter"><a href="{{ route('login-user') }}"> <span class="header-icon"><i class="fas fa-sign-in-alt"></i></span> Se connecter <span class="chevero-login"><i class="fas fa-chevron-down"></i></span></a>
						<ul>
							<li><a href="{{ route('login-user') }}"> <span class="header-icon"><i class="fas fa-user"></i></span> Patient</a></li>
							<hr>
							<li><a href="{{ route('login-user') }}"> <span class="header-icon"><i class="fas fa-user-nurse"></i></span> Medecin</a></li>
							<hr>
							<li><a href="{{ route('login-user') }}"> <span class="header-icon"><i class="fas fa-user-md"></i></span> Agent</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>