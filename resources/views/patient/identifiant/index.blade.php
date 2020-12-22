@extends('user.layouts.app')
@section('headsection')

@endsection
@section('main-content')




<!-- Premiere section -->
   		<section>
			@include('patient.sidebare.sidebare')
			<div class="profile-right">
				<h6 style="margin:-4px 0px 5px 0px; color:#000;">IDENTIFICATION</h6>
			   <!-- La Partie de l'identification -->
			 	<div class="identification">
					<p>Prenom de l'enfant : <span>....................</span> </p>
					<p >Nom : <span>..............</span></p>
					<p>Date de naissance : <span>..................</span></p>
					<p>Lieu de naissance <i style="font-size:10px;">(Nom de la structure sanitaire)</i> : <span>.....................</span></p>
					<p>Prenom de la mere : <span>{{ Auth::guard('patient')->user()->first_name }}</span></p>
					<p>Age : <span> {{ Auth::guard('patient')->user()->birthday }}</span></p>
					<p>Adresse : <span> {{ Auth::guard('patient')->user()->address }} </span></p>
					<hr style="border:1px dotted black;">
					<p>Profession : <span> .......................... </span> Tel :  <span> {{ Auth::guard('patient')->user()->phone }} </span></p>
					<p>Employeur : <span> ...................... </span></p>
					<p>Prenom et nom du pere : <span> ..................... </span></p>
					<p>Date de naissance : <span> ................... </span></p>
					<p>Adresse : <span> .................... </span></p>
					<p>Profession : <span> ..................... </span> Tel :  <span> .................... </span> </p>
					<p>Employeur : <span> ....................... </span></p>
			 	</div>

			 	
		 			<!-- Fin de la partie de l'identification -->
		
		</div>
   </section>
<!-- fin de la premier section -->





@endsection