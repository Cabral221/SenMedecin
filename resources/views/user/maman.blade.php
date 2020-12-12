@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')

<!-- Section des liens -->
	<section class="lien-profile">
		<div class="container-ul">
			<ul class="ul-header">
				<li style="background-color:green;" class="li-header"><a href="">Mes Rendez-Vous</a></li>
				<li class="li-header"><a href="">Mes Enfants</a></li>
			</ul>
		</div>
	</section>
<!-- Fin de la section des liens -->


<!-- Premiere section -->
   <section class=" container rv-maman">
	   <div class="maman-left">
			<div class="rv-body">
				<h3>Rendez-Vous a Venire</h3>
				<p>
					<span class="infos">Date</span> : 12/45/9876
				</p>
				<p><span class="infos">Heure</span> : 12:34:45</p>
				
			</div>
	   </div>
	   <div class="maman-right">
		  	<div class="infos-rv">
				<p>
					Avec Mr.<span>Ousmane Diallo</span>
				</p>
				<p>
					Abasse Ndao
				</p>
			</div>
	   </div>
   </section>
<!-- fin de la premier section -->


<!-- Premiere section -->
<section class="precedent">
		<h2>Rendez-Vous Precedent</h2>
	   	<div class="precedent-body">
			<div class="precedent-left">
				<p>
					<span class="precedent-date">Date  : 12/34/0976</span>
				<span class="trait">-</span>	<span class="precedent-heure">Heure : 12:34:00</span>
				<p>Ousmane Diallo</p>
				</p>
			</div>
			<div class="precedent-right">
				<div class="precedent-infos">
					<p>
						<a href="#">Detail</a>
					</p>
				</div>
	   		</div>
		</div>
		   
		<div class="precedent-body">
			<div class="precedent-left">
				<p>
					<span class="precedent-date">Date  : 12/34/0976</span>
				<span class="trait">-</span>	<span class="precedent-heure">Heure : 12:34:00</span>
				<p>Ousmane Diallo</p>
				</p>
			</div>
			<div class="precedent-right">
				<div class="precedent-infos">
					<p>
						<a href="#">Detail</a>
					</p>
				</div>
	   		</div>
		</div>
		   
		<div class="precedent-body">
			<div class="precedent-left">
				<p>
					<span class="precedent-date">Date  : 12/34/0976</span>
				<span class="trait">-</span>	<span class="precedent-heure">Heure : 12:34:00</span>
				<p>Ousmane Diallo</p>
				</p>
			</div>
			<div class="precedent-right">
				<div class="precedent-infos">
					<p>
						<a href="#">Detail</a>
					</p>
				</div>
	   		</div>
	   	</div>
   	</section>
<!-- fin de la premier section -->



@endsection