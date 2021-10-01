@extends('user.layouts.app')

@section('main-content')

<!-- Section des liens -->
<section class="lien-profile">
	<div class="container-ul">
		<ul class="ul-header">
			<li class="li-header"><a href="">Mes Rendez-Vous</a></li>
			<li style="background-color:green;" class="li-header"><a href="" >Mes Enfants</a></li>
		</ul>
	</div>
</section>
<!-- Fin de la section des liens -->


<!-- Premiere section -->
<section class=" container rv-enfant">
	<div class="enfant-left">
		<div class="header">
			<p> <span class="nom">Prenom et Nom : </span>  <span class="nom">Ousmane Diallo</span></p>
			<p> <span class="nom">Date De Naissance : </span>  <span class="nom">Le : 24/02/3098</span></p>
		</div>
		<div class="rv-body">
			<p>
				<span class="infos">Le 15/89/0987 A </span>  <span class="infos">15:30:GMT</span>
			</p>
			<p><span class="infos">Type de Vaccin</span> : <span class="infos">mon vaccin</span>  </p>
		</div>
	</div>
	<div class="enfant-left">
		<div class="header">
			<p> <span class="nom">Prenom et Nom : </span>  <span class="nom">Ousmane Diallo</span></p>
			<p> <span class="nom">Date De Naissance : </span>  <span class="nom">Le : 24/02/3098</span></p>
		</div>
		<div class="rv-body">
			<p>
				<span class="infos">Le 15/89/0987  A </span>  <span class="infos">15:30:GMT</span>
			</p>
			<p><span class="infos">Type de Vaccin</span> : <span class="infos">mon vaccin</span> </p>
		</div>
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