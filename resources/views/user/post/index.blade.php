@extends('user.layouts.app')
@section('headsection')
   
@endsection
@section('main-content')
<!-- Premiere section -->

 <div class="section-index box-shadow container sens_top">
	 <h4>Blog</h4>
	 <section class=" container sens">
	   <div class="sens_left">
			<div class="sens_left_content">
				<div class="sidebar">
					<ul class="tags">
						<li><a href="#">Technology,</a></li>
						<li><a href="#">Politique,</a></li>
						<li><a href="#">Culture,</a></li>
						<li><a href="#">Football,</a></li>
					</ul>
					<div class="infos">
						<p class=""><a href="#">Ousmane Diallo <i class="fa fa-user"></i></a></p>
						<p class=""><a href="#">12 Dec, 2017 <i class="fa fa-clock"></i></a></p>
						<p class=""><a href="#">1.2M Views <i class="fa fa-eye"></i></a></p>
						<p class=""><a href="#">06 Comments <i class="fa fa-comments"></i></a></p>						
					</div>
				</div>
				<div class="image">
					<p>
						<img src="{{ asset('user/img/article2.jpg') }}" alt="">
					</p>
					<div class="body_header">
						<p class="article_title">Un chevalier conduisant son cheval  </p>
						<p class="social"> 
							<a href="#"><span> like <i class="fa fa-user"></i></span> </a>
							<a href="#"><span>Dislike <i class="fa fa-user"></i></span></a> 
						</p>
					</div>
					<p class="text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus......
					</p>
					<p class="p_button">
						<a href="{{ route('posts.show',1) }}" class="btn btn-primary">Detail de l'article</a>
					</p>
				</div>
			</div>
			<div class="sens_left_content">
				<div class="sidebar">
					<ul class="tags">
						<li><a href="#">Technology,</a></li>
						<li><a href="#">Politique,</a></li>
						<li><a href="#">Culture,</a></li>
						<li><a href="#">Football,</a></li>
					</ul>
					<div class="infos">
						<p class=""><a href="#">Ousmane Diallo <i class="fa fa-user"></i></a></p>
						<p class=""><a href="#">12 Dec, 2017 <i class="fa fa-clock"></i></a></p>
						<p class=""><a href="#">1.2M Views <i class="fa fa-eye"></i></a></p>
						<p class=""><a href="#">06 Comments <i class="fa fa-comments"></i></a></p>						
					</div>
				</div>
				<div class="image">
					<p>
						<img src="{{ asset('user/img/article2.jpg') }}" alt="">
					</p>
					<div class="body_header">
						<p class="article_title">Un chevalier conduisant son cheval  </p>
						<p class="social"> 
							<a href="#"><span> like <i class="fa fa-thumbs-up"></i></span> </a>
							<a href="#"><span>Dislike <i class="fa fa-thumbs-down"></i></span></a> 
						</p>
					</div>
					<p class="text">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima nemo quos corporis quae porro doloribus......
					</p>
					<p class="p_button">
						<a href="{{ route('posts.show',1) }}" class="btn btn-primary">Detail de l'article</a>
					</p>
				</div>
			</div>
	   </div>
	   <div class="sens_right">
	   <h5 class="article_populaire">Articles Populare</h5>
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
			<!-- <hr> -->
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article2.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
			<!-- <hr> -->
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
			<!-- <hr> -->
			<div class="sens-body-card">
				<div class="card-img">
					<img src="{{ asset('user/img/article2.jpg') }}" alt="" srcset="">
				</div>
				<div class="card-text">
					<p class="title_article"><a href="">Information sur le covid 19 jdkke dke kkdje djdkeje </a></p>
					<p class="date_article">Publier le : 12/10/2020</p>
				</div>
			</div>
	   </div>
   </section>
 </div>
<!-- fin de la premier section -->








@endsection