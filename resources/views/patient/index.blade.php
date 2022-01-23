@extends('layouts.app')

@section('breadcrumb')
	<!-- breadcrumb -->
	<div class="breadcrumb-header justify-content-between">
		<div class="left-content">
			<h4 class="content-title mb-2">Salut, bienvenue!</h4>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Tableau de bord</a></li>
					<li class="breadcrumb-item active" aria-current="page">Analytics &amp; Monitoring</li>
				</ol>
			</nav>
		</div>
	</div>
	<!-- breadcrumb -->
@endsection


@section('main-content')

<!-- Premiere section -->
   <section>
	   <div class="profile-right">
		   <!-- La Partie de l'grossesse -->
		   <!-- <h6>ETAT</h6> -->
		   <p style="margin:-5px 0px 8px;font-size:30px;" class="text-bold">{{ Auth::guard('patient')->user()->first_name .' '. Auth::guard('patient')->user()->last_name  }} </p>
		   		<div class="grossesse">
					   
					   <h6 style="margin:-10px 0px;">Grossesse</h6>
					   <div class="info_grossesse">
						<div class="patient_info">
						
							<p>Etat : En grossesse</p>
							<p >Suivit par : Ousmane Diallo</p>
							<p>Hopital: Fann</p>
						</div>
						<div class="grossess_info">
							<p>Date Grossesse : 01-01-2021 </p>
							<p>Accouchement Prevu le  : 01-09-2021</p>
							<p >Vous etes a 6mois de grossesse</p>
							<p>Autres</p>
						</div>
					</div>
				</div>

				<div class="grossesse">
					<h6 style="margin:-10px 0px;"> Rendez-Vous</h6>
					<div class="apointman">
						<div class="apointmain_left">
							<p>Date du rendez-vous : 10-09-2021</p>
							<p>Type : CPN3 </p>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
						</div>
						<div class="apointmain_right">
							<p class="text-warning"> <i class="fa fa-clock"></i> Date : 10-05-2021 | Accouchement </p>
							<p class="text-warning"> <i class="fa fa-clock"></i> Date : 10-05-2021 | CPN4 </p>
							<p class="text-warning"> <i class="fa fa-clock"></i> Date : 10-05-2021 | CPN3 </p>
							<p class="text-success"> <i class="fa fa-check"></i> Date : 10-05-2021 | CPN2 </p>
							<p class="text-success"> <i class="fa fa-check"></i> Date : 10-05-2021 | CPN1 </p>
						</div>
					</div>
				</div>

				<div class="grossesse">
					<h6 style="margin:-10px 0px;">Information Supplementaire</h6>
					<p>
						Vous avez enregistre 3 grossesse et 2 enfants
					</p>
				</div>

				<div class="grossesse">
					<h6 style="margin:-10px 0px;">Abonneemnt</h6>
					<div class="abonement">
						<p>Type d'abonnement : Mensuele </p>
						<p>Votre compte est valide jusqu'au 10-07-2021</p>
						<p>Date de renouvellemt de votre compte </p>
					</div>
				</div>
			<!-- Fin de la partie de l'grossesse -->
	   </div>
   </section>
<!-- fin de la premier section -->


<!-- Premiere section -->
	<!-- <section class=" container rv-enfant">
	   	<div class="enfant-left">
			<div class="rv-body">
				<h2>Rendez-Vous d'un de vos enfants</h2>
				<p>
					<span class="infos">Ousmane Diallo</span>
					<p class="infos">Nee le 12/10/2020</p>
				</p>
			</div>
	   	</div>
	   	<div class="enfant-right">
		  	<div class="infos-rv">
				<h2>Detail du Rendez-Vous</h2>
				<p>
					<span>Date : Le 40/35/3000</span>
					<span class="heure">Heure: 12:23:00</span>
				</p>
				<p>
				<span>Vaccination</span>
				</p>
				<p>
					Avec Mr Ousmane Diallo
				</p>
			</div>
	   	</div>
   	</section> -->
<!-- fin de la premier section -->



@endsection