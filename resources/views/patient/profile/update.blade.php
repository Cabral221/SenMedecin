@extends('user.layouts.app')
@section('headsection')

@endsection
@section('main-content')




<!-- Premiere section -->
   <section>
	@include('patient.sidebare.sidebare')
	   <div class="profile-right">
		   <!-- La Partie de l'grossesse -->
		   <!-- <h6>ETAT</h6> -->
		   <p style="margin:-5px 0px 8px;font-size:30px;" class="text-bold">Profile de {{ Auth::guard('patient')->user()->first_name .' '. Auth::guard('patient')->user()->last_name  }} </p>
		   		<div class="grossesse update_profil">
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

									<p>
										<input class="btn-primary text-bold " type="submit" value="Enregistre les modification">
									</p>
								</div>
							</div>
							
							
						</form>
				</div>

				<div class="grossesse update_profil">
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

				<div class="grossesse update_profil">
					<h6 style="margin:-10px 0px;">Modifiez Votre Mot De Passe</h6>
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

				<div class="delete_compte">
					<p>Zone Danger</p>
					<br>
					<form id="delete-compte" method="post" action="{{ route('patient.destroy',Auth::guard('patient')->user()->id) }}" style="display:none">
					{{csrf_field()}}
					{{method_field('delete')}}
					</form>
					<span class=""><a href="" class="text-center" 
					onclick="
					if(confirm('Etes Vous Sur De Supprimer Votre Compte ?')){

					event.preventDefault();document.getElementById('delete-compte').submit();

					}else{

					event.preventDefault();

					}
					
					"><i class="fa fa-trash"> Vous Pouvez Supprimer Votre Compte</i></a></span>
				</div>

			<!-- Fin de la partie de l'grossesse -->
	   </div>
   </section>
<!-- fin de la premier section -->





@endsection