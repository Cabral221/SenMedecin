@extends('user.layouts.app')
@section('headsection')
<style>
.menu ul{
	margin:0px;
	padding:0px 5px;
	list-style:none;
	border-radius:5px;
}
.menu ul li{
	padding:15px;
	position:relative;
	width:220px;
	background-color:#34495E;
	border-right:1px solid #f1c40f;
	vertical-align:middle;
	cursor:pointer;
	-webkit-transition:all 0.3s;
	-o-transition:all 0.3s;
	transition:all 0.3s;
} 
.menu ul li:hover{
	background-color:#2ecc71;
}
.menu > ul > li{
	border-right:1px solid #f1c40f;
}
.menu ul ul{
	transition:all 0.3s;
	opacity:0;
	position:absolute;
	visibility:hidden;
	left:101%;
	top:-2%;
	border-left:1px solid #f1c40f; 	
}


.menu ul li:hover > ul{
	opacity:1;
	visibility:visible;  
}
.menu ul li a{
	color:#fff;
	text-decoration:none;
}
.menu span{
	margin-right:15px;
}
/* .menu > ul > li:nth-off-type(2)::after{
	content:"+";
	position:absolute;
	margin-left:5%;
	color:#fff;
	font-size:20px;
} */
</style>
@endsection
@section('main-content')




<!-- Premiere section -->
   <section>
	   <div class="profile-left">
			<div class="menu">
			<ul>
				<li><a href=""> <span>O</span> Identifiant</a></li>
				<li><a href=""> <span>O</span> Antecedent</a></li>
				<li><a href=""> <span>O</span> Grossesses <span> > </span></a>
					<ul>
						<li><a href=""> <span>O</span> Grossesse 1</a></li>
						<li><a href=""> <span>O</span> Grossesse 2</a></li>
						<li><a href=""> <span>O</span> Grossesse 3</a></li>
					</ul>
				</li>
				<li><a href=""> <span>O</span> Naissances <span> > </span></a>
					<ul>
						<li><a href=""> <span>O</span> Naissance 1</a></li>
						<li><a href=""> <span>O</span> Naissance 2</a></li>
						<li><a href=""> <span>O</span> Naissance 3</a></li>
					</ul>
				</li>
				<li><a href=""> <span>O</span> Urgence</a></li>
				<li><a href=""> <span>O</span> BFP</a></li>
			</ul>
			</div>
	   </div>
	   <div class="profile-right">
		   <!-- La Partie de l'grossesse -->
		   <!-- <h6>ETAT</h6> -->
		   <p style="margin:-5px 0px 8px;font-size:30px;" class="text-bold">Profile de {{ Auth::guard('patient')->user()->first_name .' '. Auth::guard('patient')->user()->last_name  }} </p>
		   		<div class="grossesse">
					<h6 style="margin:-10px 0px;">Modifier Toutes vos informations</h6>
				
						<form action="{{ route('patient.update',Auth::guard('patient')->user()->id) }}" class="profil_form" method="post">
							<div class="form_content">
								<div class="form_left">
									@csrf
									{{ method_field('PUT') }}
									<p class="contour_input">
										<i class="fa fa-user-tie icon"></i>
										<input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') ?? Auth::guard('patient')->user()->first_name }}" required autocomplete="first_name" autofocus id="first_name" placeholder="">
										<div>
											@error('first_name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</p>

									<p class="contour_input">
										<i class="fa fa-user-tag icon"></i>
										<input  type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') ?? Auth::guard('patient')->user()->last_name }}" required autocomplete="last_name" autofocus id="last_name" placeholder="Votre Nom">
										<div>
											@error('last_name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</p>

									<p class="contour_input">
										<i class="fa fa-envelope icon"></i>
										<input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? Auth::guard('patient')->user()->email }}" required autocomplete="email" autofocus id="email" placeholder="Votre Adresse E-mail">
										<div>
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</p>

									<p class="contour_input">
										<i class="fa fa-stopwatch-20 icon"></i>
										<input type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') ?? Auth::guard('patient')->user()->birthday }}" required autocomplete="birthday" autofocus id="birthday" placeholder="">
										<div>
											@error('birthday')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</p>

								</div>
								<div class="form_right">
									<p class="contour_input">
										<i class="fa fa-map-marker-alt icon"></i>
										<input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('adsress') ?? Auth::guard('patient')->user()->address }}" required autocomplete="current-address" id="" placeholder="Votre Adresse Physique">
										<div>
											@error('address')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</p>

									<p class="contour_input">
										<i class="fa fa-phone icon"></i>
										<input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') ?? Auth::guard('patient')->user()->phone }}" required autocomplete="current-phone" id="" placeholder="Votre Numero De Telephone">
										<div>
											@error('phone')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</p>

									<p class="contour_input">
										<i class="fa fa-key icon"></i>
										<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password" id="" placeholder="Votre Mot de passe">
										<div>
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
									</p>

									<p class="contour_input">
										<i class="fa fa-lock icon"></i>
										<input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password" required autocomplete="current-password" id="" placeholder="Confirmez VotreMot de passe">
									</p>
								</div>
							</div>
							
							<p>
								<input class="btn-primary text-bold " type="submit" value="Enregistre les modification">
							</p>
						</form>
				</div>

				<div class="grossesse">
					<h6 style="margin:-10px 0px;">Modifier Votre Adresse E-mail</h6>
					<form action="{{ route('patient.update',Auth::guard('patient')->user()->id) }}" class="profil_form_2" method="post">
					@csrf 
					{{ method_field('PATCH') }}	
					<p class="contour_input">
							<i class="fa fa-envelope icon"></i>
							<input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? Auth::guard('patient')->user()->email }}" required autocomplete="email" autofocus id="email" placeholder="Votre Adresse E-mail">
							<div>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</p>
						<p>
							<input class="btn-primary text-bold" type="submit" value="Enregistre les modification">
						</p>
					</form>
				</div>

				<div class="grossesse">
					<h6 style="margin:-10px 0px;">Modification De Votre Mot De Passe</h6>
					<form action="{{ route('patient.password',Auth::guard('patient')->user()->id) }}" class="profil_form_3" method="post">
					@csrf 
					{{ method_field('PUT') }}		
						<p class="contour_input">
							<i class="fa fa-key icon"></i>
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required autocomplete="current-password" id="" placeholder="Votre Mot de passe">
							<div>
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</p>

						<p class="contour_input password_center">
							<i class="fa fa-lock icon"></i>
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" id="password" required autocomplete="current-password" id="" placeholder="Confirmez VotreMot de passe">
						</p>
						<p>
							<input class="btn-primary text-bold" type="submit" value="Enregistre les modification">
						</p>
					</form>
				</div>

			<!-- Fin de la partie de l'grossesse -->
	   </div>
   </section>
<!-- fin de la premier section -->





@endsection