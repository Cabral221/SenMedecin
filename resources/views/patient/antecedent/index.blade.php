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
		 
			<!-- Partie des Antecedent -->
				<h3>ANTECEDENT </h3>
				<div class="antecedent">
					<h4>Antecedent Familiaux</h4>
					<div class="pere">
						<h4>Pere : </h4>
						<p> Groupe Sanguin : <span> O- </span> Facteur rhesus <span> Pas d'exemple </span></p>
						<p> Autre examens : <span> Pas d'exemple </span> </p>
						<p> Maladies a declare : <span> Pas d'exemple </span> </p>
					</div>
					<div class="mere">
						<h4>Mere : </h4>
						<p> Groupe Sanguin : <span> O+ </span> Facteur rhesus <span> Pas d'exemple </span></p>
						<p> TPHA :<span> Pas d'exemple </span> RPR : <span> Pas d'exemple </span></p>
						<p> Diabete :<span> Pas d'exemple </span> Cardiopathie : <span> Pas d'exemple </span></p>
						<p>Insuffisance Renale chronique <span> Pas d'exemple</span></p>
						<p> Asthme :<span> Pas d'exemple </span> Anemie : <span> Pas d'exemple </span> Tuberculose : <span> Pas d'exemple </span></p>
						<p> Hepatite B :<span> Pas d'exemple </span> HTA : <span> Pas d'exemple </span> Lupus Erythemateux Dissemine : <span> Pas d'exemple </span></p>
						<p> Drepanocytose :<span> Pas d'exemple </span> Autres maladies : <span> Pas d'exemple </span></p>
					</div>
					<div class="famille">
						<h4>Famille : </h4>
						<p class="fam">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor provident labore aperiam, dolorum cupiditate asperiores commodi animi tenetur molestiae nostrum ipsam quam sit sequi libero odit earum repellat? Natus, veritatis!</p>
					</div>
					<div class="autre">
						<h4>Autres Examens : </h4>
						<p class="at">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit minus dolor consequatur, quam aliquam beatae vel minima nam veniam repudiandae ex et? Accusantium vitae est, velit aliquam ducimus soluta eos?</p>
					</div>
					<div class="traitement">
						<h4>Traitement en cours : </h4>
						<p class="traite">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit architecto saepe, eum reprehenderit facere quod nulla mollitia repellat quasi odit enim ipsam iure autem ea velit voluptatem deserunt eos assumenda.</p>
					</div>
				</div>
	   </div>
   </section>
<!-- fin de la premier section -->





@endsection