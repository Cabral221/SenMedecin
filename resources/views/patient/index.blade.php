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
	border-top:1px solid silver;
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
	   @include('patient.sidebare.sidebare')
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
					<h6 style="margin:-10px 0px;">Abbonnemnt</h6>
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